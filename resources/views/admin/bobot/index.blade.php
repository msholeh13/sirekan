@extends('layouts.admin.app')

@section('title', 'Bobot - SIREKAN')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-format-list-bulleted "></i>
            </span> Bobot
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Bobot <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>
    
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    {{-- <h4 class="card-title">Tambah data</h4> --}}
                    <button class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#changeModal">Ubah Bobot</button>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Kriteria </th>
                                    <th> Bobot </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($weight as $row)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $row->name }} </td>
                                        <td> {{ $row->value }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="changeModal" tabindex="-1" aria-labelledby="changeLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <form action="{{ route('weight.update') }}" method="POST" class="modal-content">
                @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="changeLabel">Ubah Bobot</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if ($errors->has('total'))
                        <div class="alert alert-danger">
                            <span class="small">{{ $errors->first('total') }}</span>
                        </div>
                    @endif

                    <div class="form-floating mb-3">
                        <input type="text" name="calorie" class="form-control rounded @error('calorie') is-invalid @enderror" id="floatingInput" placeholder="0.0" value="{{$weight[0]['value']}}">
                        <label for="floatingInput">Kalori</label>
                        @error('calorie')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="protein" class="form-control rounded @error('protein') is-invalid @enderror" id="floatingInput" placeholder="0.0"  value="{{$weight[1]['value']}}">
                        <label for="floatingPassword">Protein</label>
                        @error('protein')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="fat" class="form-control rounded @error('fat') is-invalid @enderror" id="floatingInput" placeholder="0.0"  value="{{$weight[2]['value']}}">
                        <label for="floatingPassword">Lemak</label>
                        @error('fat')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="carbohydrate" class="form-control rounded @error('carbohydrate') is-invalid @enderror" id="floatingInput" placeholder="0.0"  value="{{$weight[3]['value']}}">
                        <label for="floatingPassword">Karbohidrat</label>
                        @error('carbohydrate')
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
                let modal = new bootstrap.Modal(document.getElementById('changeModal'));
                modal.show();
            });
        </script>
    @endif

  
@endpush