@extends('layouts.admin.app')

@section('title', 'Rekomendasi - SIREKAN')

@section('content')

    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-chart-bar "></i>
            </span> Rekomendasi
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Rekomendasi <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('recommendation.find') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="calories" class="col-12 col-lg-4 col-form-label">Kalori <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="jumlah kalori (dalam kal) per 100 gram makanan/minuman"></i></label>
                            <div class="col-12 col-lg-8">
                                <input type="text" name="calories" class="form-control @error('calories') is-invalid @enderror" xid="calories" placeholder="0 gr/100gr" value="{{old('calories')}}">
                                @error('calories')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="proteins" class="col-12 col-lg-4 col-form-label">Protein <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title=" jumlah protein (dalam gram) per 100 gram makanan/minuman"></i></label>
                            <div class="col-12 col-lg-8">
                                <input type="text" name="proteins" class="form-control @error('proteins') is-invalid @enderror" id="proteins" placeholder="0 gr/100gr" value="{{old('proteins')}}">
                                @error('proteins')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fat" class="col-12 col-lg-4 col-form-label">Lemak <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="jumlah lemak (dalam gram) per 100 gram makanan/minuman"></i></label>
                            <div class="col-12 col-lg-8">
                                <input type="text" name="fat" class="form-control @error('fat') is-invalid @enderror" id="fat" placeholder="0 gr/100gr" value="{{old('fat')}}">
                                @error('fat')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="carbohydrate" class="col-12 col-lg-4 col-form-label">Karbohidrat <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="jumlah karbohidrat (dalam gram) per 100 gram makanan/minuman"></i></label>
                            <div class="col-12 col-lg-8">
                                <input type="text" name="carbohydrate" class="form-control @error('carbohydrate') is-invalid @enderror" id="carbohydrate" placeholder="0 gr/100gr" value="{{old('carbohydrate')}}">
                                @error('carbohydrate')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-gradient-primary me-2">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="col-4 m-3 align-self-center text-center">
                    <img src="@isset($topResults)
                            {{ asset("storage/" . $topResults[0]->item->image) }}
                        @else
                            https://placehold.co/300x200
                        @endisset" 
                        class="card-img-top" 
                        alt="<?= isset($topResults) ? $topResults[0]->item->name : "gambar" ?>">
                    <h4><?= isset($topResults) ? $topResults[0]->item->name : "Nama" ?></h4>
                </div>
                <div class="card-body pt-0">
                    <p class="card-text fw-bold">Deskripsi :</p>
                    <div class="row">
                        <label for="" class="col-12 col-lg-3 col-form-label">Kalori</label>
                        <div class="col-12 col-lg-9">
                            <input type="text" name="" class="form-control" id="" value="<?= isset($topResults) ? $topResults[0]->item->calories : "0" ?>" @readonly(true)>
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="col-12 col-lg-3 col-form-label">Protein</label>
                        <div class="col-12 col-lg-9">
                            <input type="text" name="" class="form-control" id="" value="<?= isset($topResults) ? $topResults[0]->item->proteins : "0" ?>" @readonly(true)>
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="col-12 col-lg-3 col-form-label">Lemak</label>
                        <div class="col-12 col-lg-9">
                            <input type="text" name="" class="form-control" id="" value="<?= isset($topResults) ? $topResults[0]->item->fat : "0" ?>" @readonly(true)>
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="col-12 col-lg-3 col-form-label">Karbohidrat</label>
                        <div class="col-12 col-lg-9">
                            <input type="text" name="" class="form-control" id="" value="<?= isset($topResults) ? $topResults[0]->item->carbohydrate : "0" ?>"@readonly(true)>
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="col-12 col-lg-3 col-form-label">Similarity <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Hasil perhitungan nilai similarity"></i></label>
                        <div class="col-12 col-lg-9">
                            <input type="text" name="" class="form-control" id="" value="<?= isset($topResults) ? $topResults[0]->similarity : "0" ?>" @readonly(true)>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Peringkat 10 Teratas</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th> No. </th>
                                <th> Nama </th>
                                <th> Kalori </th>
                                <th> Protein </th>
                                <th> Lemak </th>
                                <th> Karbohidrat </th>
                                <th> Gambar </th>
                                <th> Similarity </th>
                            </tr> 
                            </thead>
                            <tbody>
                                @isset($topResults)
                                    @foreach ($topResults as $topResult)
                                    <tr>
                                        <td>
                                            {{ $loop->iteration }}
                                        </td>
                                        <td> {{ $topResult->item->name }} </td>
                                        <td> {{ $topResult->item->calories }} </td>
                                        <td> {{ $topResult->item->proteins }} </td>
                                        <td> {{ $topResult->item->fat }} </td>
                                        <td> {{ $topResult->item->carbohydrate }} </td>
                                        <td>
                                            <img src="@isset($topResults)
                                                    {{ asset("storage/" . $topResult->item->image) }}
                                                @else
                                                    https://placehold.co/300x200
                                                @endisset" 
                                                class="me-2" 
                                                alt="image">
                                        </td>
                                        <td> {{ $topResult->similarity }} </td>
                                    </tr>
                                    @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('after-script')
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded',function(){
                let modal = new bootstrap.Modal(document.getElementById('changeModal'));
                modal.show();
            });
        </script>
    @endif

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
  
@endpush