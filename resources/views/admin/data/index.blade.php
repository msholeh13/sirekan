@extends('layouts.admin.app')

@section('title', 'Data - SIREKAN')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-database"></i>
            </span> Data
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Data <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#addDataModal">Tambah Data</button>

                        {{-- search --}}
                        <form class="d-flex align-items-center" action="" method="GET">
                            <div class="input-group">
                                <div class="input-group-prepend bg-transparent">
                                    <i class="input-group-text border mdi mdi-magnify text-primary"></i>
                                </div>
                                <input type="text" id="search" name="search" class="form-control form-control-sm bg-transparent" placeholder="Search data" value="{{ request('search') }}">
                                @if (request('search')) 
                                    <a href="{{route('data')}}" class="btn btn-sm btn-outline-primary d-flex align-items-center border" >
                                        x
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive mb-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Name </th>
                                    <th> Kalori </th>
                                    <th> Protein </th>
                                    <th> Lemak </th>
                                    <th> Karbohidrat </th>
                                    <th> Gambar </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td> {{ $loop->iteration + $data->firstItem() - 1 }} </td>
                                        <td> {{ $row->name }} </td>
                                        <td> {{ $row->calories }} </td>
                                        <td> {{ $row->proteins }} </td>
                                        <td> {{ $row->fat }} </td>
                                        <td> {{ $row->carbohydrate }} </td>
                                        <td>
                                            {{-- <img src="{{ $row->image }}" class="me-2" alt="image"> --}}
                                            gambar
                                        </td>
                                        <td class="d-flex gap-3">
                                            <a href="" class="text-primary btn-edit" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#updateDataModal"
                                                data-id = "{{$row->id}}"
                                                data-name = "{{$row->name}}"
                                                data-calories = "{{$row->calories}}"
                                                data-proteins = "{{$row->proteins}}"
                                                data-fat = "{{$row->fat}}"
                                                data-carbohydrate = "{{$row->carbohydrate}}"
                                                data-image = "{{$row->image}}"
                                                >
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            <a href="" class="text-danger btn-delete" data-id="{{$row->id}}" data-name="{{$row->name}}">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $data->onEachSide(2)->withQueryString()->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal tambah data-->
    <div class="modal fade" id="addDataModal" tabindex="-1" aria-labelledby="addDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{ route('data.add') }}" method="POST" enctype="multipart/form-data" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="changeLabel">Tambah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="floatingInput" placeholder=" " value="{{ old('name') }}">
                        <label for="floatingInput">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="calories" class="form-control rounded @error('calories') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('calories') }}">
                        <label for="floatingPassword">Kalori</label>
                        @error('calories')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="proteins" class="form-control rounded @error('proteins') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('proteins') }}">
                        <label for="floatingPassword">Protein</label>
                        @error('proteins')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="fat" class="form-control rounded @error('fat') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('fat') }}">
                        <label for="floatingPassword">Lemak</label>
                        @error('fat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="carbohydrate" class="form-control rounded @error('carbohydrate') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('carbohydrate') }}">
                        <label for="floatingPassword">Karbohidrat</label>
                        @error('carbohydrate')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Modal lihat dan ubah data-->
    <div class="modal fade" id="updateDataModal" tabindex="-1" aria-labelledby="updateDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form id="updateForm" method="POST" enctype="multipart/form-data" class="modal-content">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="changeLabel">Lihat Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {{-- hidden id --}}
                    <input type="hidden" name="id" class="form-control rounded @error('id') is-invalid @enderror" id="floatingInput" placeholder=" ">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control rounded @error('name') is-invalid @enderror" id="floatingInput" placeholder=" " value="{{ old('name') }}">
                        <label for="floatingInput">Nama</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="calories" class="form-control rounded @error('calories') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('calories') }}">
                        <label for="floatingPassword">Kalori</label>
                        @error('calories')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="proteins" class="form-control rounded @error('proteins') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('proteins') }}">
                        <label for="floatingPassword">Protein</label>
                        @error('proteins')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="fat" class="form-control rounded @error('fat') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('fat') }}">
                        <label for="floatingPassword">Lemak</label>
                        @error('fat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="carbohydrate" class="form-control rounded @error('carbohydrate') is-invalid @enderror" id="floatingInput" placeholder=" "  value="{{ old('carbohydrate') }}">
                        <label for="floatingPassword">Karbohidrat</label>
                        @error('carbohydrate')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <img class="img-fluid" src="" alt="gambar">
                    </div>
                    <div class="mb-3">
                        <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('after-script')
    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded',function(){
                let modal = new bootstrap.Modal(document.getElementById('addDataModal'));
                modal.show();
            });
        </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const buttons = document.querySelectorAll('.btn-delete');

            buttons.forEach(button => {
                button.addEventListener('click', function(e){
                    e.preventDefault();
                    
                    const id = this.dataset.id;
                    const name = this.dataset.name;

                    const url = "{{ url('hapus-data') }}/" + id;

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Data " + name + " akan dihapus!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: "#b66dff",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Ya, Tolong Hapus",
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = url;
                        }
                    });
                });
            });
        })
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const editButtons = document.querySelectorAll('.btn-edit');

            editButtons.forEach(button => {
                button.addEventListener('click', function(e){
                    e.preventDefault();

                    const id = this.dataset.id;                    
                    const name = this.dataset.name;
                    const calories = this.dataset.calories;
                    const proteins = this.dataset.proteins;
                    const fat = this.dataset.fat;
                    const carbohydrate = this.dataset.carbohydrate;
                    const image = this.dataset.image;

                    const updateForm = document.getElementById('updateForm');

                    updateForm.action = "{{ url('ubah-data') }}/" + id;
                    
                    
                    const modal = document.getElementById('updateDataModal');

                    modal.querySelector('input[name="id"]').value = id;
                    modal.querySelector('input[name="name"]').value = name;
                    modal.querySelector('input[name="calories"]').value = calories;
                    modal.querySelector('input[name="proteins"]').value = proteins;
                    modal.querySelector('input[name="fat"]').value = fat;
                    modal.querySelector('input[name="carbohydrate"]').value = carbohydrate;
                    modal.querySelector('img').src = "{{ asset('storage') }}/" + image;
                })
            })
        });
    </script>
@endpush