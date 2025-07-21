@extends('layouts.admin.app')

@section('title', 'Dashboard - SIREKAN')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Dashboard <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('assets/img/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Selamat Datang di aplikasi <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">SIREKAN</h2>
                    <h6 class="card-text">Aplikasi SIREKAN merupakan aplikasi sistem rekomendasi makanan yang menyediakan data-data makanan dan minuman yang berasal dari Indonesia. aplikasi ini menggunakan metode Knowledge-Based Filtering untuk mencari pilihan rekomendasi.</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
