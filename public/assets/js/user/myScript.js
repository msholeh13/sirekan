let currentPage = 1;
const itemPerPage = 20;
let allFoods = [];
let filteredFoods = [];
let isInRecommendationMode = false;
let hasRecommendationResults = false;

// fungsi untuk memuat data makanan
async function loadAllFoods() {
    try {
        const response = await fetch("/api/datas");
        const data = await response.json();
        allFoods = data;
        filteredFoods = [...allFoods];
        isInRecommendationMode = false;
        hasRecommendationResults = false;
        togleResetButton(false);
        currentPage = 1;
        renderFoods();
    } catch (error) {
        console.error("Error loading foods:", error);
    }
}

// fungsi untuk merender makanan
function renderFoods() {
    const startIndex = (currentPage - 1) * itemPerPage;
    const endIndex = startIndex + itemPerPage;
    const foodToShow = filteredFoods.slice(startIndex, endIndex);

    const foodGrid = document.getElementById("foodGrid");
    if (currentPage === 1) {
        foodGrid.innerHTML = "";
    }

    foodToShow.forEach((item) => {
        let similarity =
            item.similarity != undefined
                ? `<p class="mb-0 text-success">
                <small>Similarity: ${item.similarity}</small>
              </p>`
                : "";

        const col = document.createElement("div");
        col.className = "col-6 col-md-3 ";
        col.innerHTML = `
          <div class='card h-100 food-card' data-id="${item.id}">
            <div class='card-body text-center p-2'>
              <img src="${item.image}"
                class = "card-img-top mb-2 lazy-image"
                alt = "${item.name}"
                loading = "lazy"
                style = "height:100px; object-fit:cover;"
              >
              <p class="card-title">${item.name}</p>
              ${similarity}
            </div>
          </div>
        `;
        togleResetButton(hasRecommendationResults);

        foodGrid.appendChild(col);
    });

    updateLoadMoreButton();
}

function updateLoadMoreButton() {
    // update tombol load more
    const loadMoreBtn = document.getElementById("loadMoreBtn");
    const endIndex = currentPage * itemPerPage;

    if (isInRecommendationMode) {
        loadMoreBtn.textContent = "10 Data Teratas Telah Dimuat";
        loadMoreBtn.disabled = true;
    } else if (endIndex >= filteredFoods.length) {
        loadMoreBtn.textContent = "Semua Data Telah Dimuat";
        loadMoreBtn.disabled = true;
    } else {
        loadMoreBtn.textContent = "Muat Lebih Banyak";
        loadMoreBtn.disabled = false;
    }
}

// fungsi untuk memuat lebih banyak data
function loadMore() {
    if (isInRecommendationMode) return;
    currentPage++;
    renderFoods();
}

function togleResetButton(show) {
    const resetBtn = document.getElementById("resetBtn");
    if (show) {
        resetBtn.style.display = "block";
    } else {
        resetBtn.style.display = "none";
    }
    hasRecommendationResults = show;
}

function ResetRecommendationForm() {
    document.getElementById("recommendationForm").reset();

    const inputs = document.querySelectorAll("#recommendationForm input");
    inputs.forEach((input) => {
        input.classList.remove("is-invalid");
    });

    isInRecommendationMode = false;
    hasRecommendationResults = false;

    togleResetButton(false);

    currentPage = 1;
    filteredFoods = [...allFoods];
    renderFoods();
}

// inisialisasi
document.addEventListener("DOMContentLoaded", () => {
    loadAllFoods();
    document.getElementById("loadMoreBtn").addEventListener("click", loadMore);

    // menampilkan modal detail
    document.addEventListener("click", function (e) {
        const card = e.target.closest(".food-card");
        if (card) {
            const foodItem = card.dataset.id;

            fetch(`/api/datas/${foodItem}`)
                .then((res) => res.json())
                .then((data) => {
                    document.getElementById("foodModalLabel").textContent =
                        data.name;
                    document.getElementById("foodModalBody").innerHTML = `
                <img src="${data.image}" class="img-fluid mb-3">
                <p><strong>Kalori :</strong> ${data.calories}</p>
                <p><strong>Protein :</strong> ${data.proteins}</p>
                <p><strong>Lemak :</strong> ${data.fat}</p>
                <p><strong>Karbohidrat :</strong> ${data.carbohydrate}</p>
              `;
                    new bootstrap.Modal(
                        document.getElementById("foodModal")
                    ).show();
                });
        }
    });

    document
        .getElementById("resetBtn")
        .addEventListener("click", ResetRecommendationForm);
    document.querySelectorAll("#recommendation input").forEach((input) => {
        input.addEventListener("input", () => {
            if (hasRecommendationResults) {
                togleResetButton(false);
            }
        });
    });
});

// =====================================================

// search
function searchFoods() {
    const searchTerm = document
        .getElementById("searchInput")
        .value.toLowerCase();

    if (searchTerm.trim() === "") {
        filteredFoods = [...allFoods];
        isInRecommendationMode = false;
    } else {
        filteredFoods = allFoods.filter((food) =>
            food.name.toLowerCase().includes(searchTerm)
        );
        isInRecommendationMode = false;
    }

    currentPage = 1;
    renderFoods();
    togleResetButton(false);
}

// event untuk tombol pencarian
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("searchBtn").addEventListener("click", searchFoods);
    // event untuk tombol enter
    document.getElementById("searchInput").addEventListener("keypress", (e) => {
        if (e.key === "Enter") {
            searchFoods();
        }
    });
});

// =====================================================

//fungsi untuk rekomendasi
function calculateSimilarity(userNeeds, foodItem, maxValues, weights) {
    let similarity = 0;

    for (const key in weights) {
        const diff =
            Math.abs(userNeeds[key] - foodItem[key]) / maxValues[key] || 1;
        const attrSimilarity = 1 - diff;
        similarity += weights[key] * attrSimilarity;
    }

    return similarity;
}

async function getRecommendation(userNeeds) {
    try {
        const [foodsRes, weightsRes, maxValuesRes] = await Promise.all([
            fetch("/api/datas"),
            fetch("/api/weights"),
            fetch("/api/max-values"),
        ]);

        const foods = await foodsRes.json();
        const weights = await weightsRes.json();
        const maxValues = await maxValuesRes.json();

        const results = foods.map((food) => {
            const foodData = {
                calories: food.calories,
                proteins: food.proteins,
                fat: food.fat,
                carbohydrate: food.carbohydrate,
            };

            const similarity = calculateSimilarity(
                userNeeds,
                foodData,
                maxValues,
                weights
            );

            return {
                ...food,
                similarity: parseFloat(similarity.toFixed(5)),
            };
        });

        results.sort((a, b) => b.similarity - a.similarity);

        return results.slice(0, 10);
    } catch (e) {
        console.error("Error mendapatkan rekomendasi :", e);
        return [];
    }
}

async function handleRecommendationForm(evemt) {
    evemt.preventDefault();

    const inputs = event.target.querySelectorAll("input");
    let isValid = true;

    inputs.forEach((input) => {
        input.classList.remove("is-invalid");
        const value = parseFloat(input.value);

        if (isNaN(value) || value < 0) {
            input.classList.add("is-invalid");
            isValid = false;
        }
    });

    if (!isValid) return;

    const submitBtn = event.target.querySelector('button[type="submit"]');
    submitBtn.disabled = true;
    submitBtn.innerHTML =
        '<span class="spinner-border spinner-border-sm" role="status"></span> Cari...';

    try {
        const userNeeds = {
            calories:
                parseFloat(document.getElementById("calories").value) || 0,
            proteins:
                parseFloat(document.getElementById("proteins").value) || 0,
            fat: parseFloat(document.getElementById("fat").value) || 0,
            carbohydrate:
                parseFloat(document.getElementById("carbohydrate").value) || 0,
        };

        const recommendations = await getRecommendation(userNeeds);

        isInRecommendationMode = true;
        filteredFoods = recommendations;
        currentPage = 1;

        renderFoods();
        togleResetButton(true);
    } catch (error) {
        console.error("Error :", error);
        alert("Terjadi kesalahan saat memproses rekomendasi");
    } finally {
        submitBtn.disabled = false;
        submitBtn.textContent = "Cari";
    }
}

function renderRecommendations(recommendations) {
    const foodGrid = document.getElementById("foodGrid");
    foodGrid.innerHTML = "";

    recommendations.forEach((item) => {
        const col = document.createElement("div");
        col.className = "col-6 col-md-3 ";
        col.innerHTML = `
          <div class='card h-100 food-card' data-id="${item.id}">
            <div class='card-body text-center p-2'>
              <img src="${item.image}"
                class = "card-img-top mb-2 lazy-image"
                alt = "${item.name}"
                loading = "lazy"
                style = "height:100px; object-fit:cover;"
              >
              <p class="mb-0 text-success">
                <small>Similarity: ${item.similarity}</small>
              </p>
            </div>
          </div>
        `;

        foodGrid.appendChild(col);
    });
}

document.addEventListener("DOMContentLoaded", () => {
    document
        .getElementById("recommendationForm")
        .addEventListener("submit", handleRecommendationForm);
});
