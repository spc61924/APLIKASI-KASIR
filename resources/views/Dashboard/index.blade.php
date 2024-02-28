@extends('Template-back.layout')
@section('content')
@section('title', 'Dashboard')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">DASHBOARD</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a   href="javascript:void(0);">Dashboard</a></li>
                {{-- <li class="breadcrumb-item active" aria-current="page"></li> --}}
            </ol>
        </nav>
    </div>
</div>
<!-- /breadcrumb -->
<!-- message info -->
@include('Komponen.message')
<div class="row row-sm">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card overflow-hidden project-card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="my-auto">
                        <div class="me-4 ht-60 wd-60 my-auto primary">
                            {{-- <img src="{{ asset('') }}images/svg/box.svg" width="100px" height="100px" class="ht-40 wd-60"> --}}
                        </div>
                    </div>
                    <div class="project-content">
                        <h6 class="card-title">Pelanggan</h6>
                        <ul>
                            <li>
                                <strong>Total</strong>
                                <span>{{ $total_pelanggan }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card  overflow-hidden project-card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="my-auto">
                        <div class="me-4 ht-60 wd-60 my-auto warning">
                        {{-- <img src="{{ asset('') }}images/svg/tags-label.svg" width="100px" height="100px" class="ht-40 wd-60"> --}}
                        </div>
                    </div>
                    <div class="project-content">
                        <h6 class="card-title">Produk </h6>
                        <ul>
                            <li>
                                <strong>Total</strong>
                                <span>{{ $total_produk }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card overflow-hidden project-card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="my-auto">
                        <div class="me-4 ht-60 wd-60 my-auto danger">
                        {{-- <img src="{{ asset('') }}images/svg/cancel-delivery.svg" width="100px" height="100px" class="ht-40 wd-60"> --}}
                        </div>
                    </div>
                    <div class="project-content">
                        <h6 class="card-title">Penjualan</h6>
                        <ul>
                            <li>
                                <strong>Total</strong>
                                <span>{{ $total_penjualan }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
        <div class="card overflow-hidden project-card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="my-auto">
                        <div class="me-4 ht-60 wd-60 my-auto success">
                        {{-- <img src="{{ asset('') }}images/svg/akun.svg" width="100px" height="100px" class="ht-40 wd-60"> --}}
                        </div>
                    </div>
                    <div class="project-content">
                        <h6 class="card-title">Akun Pengguna</h6>
                        <ul>
                            <li>
                                <strong>Total</strong>
                                <span>{{ $total_pengguna }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
