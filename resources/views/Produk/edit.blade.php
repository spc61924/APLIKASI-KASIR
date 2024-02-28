@extends('Template-back.layout')
@section('content')
@section('title', 'Form Input Produk')
<!-- container opened -->
<div class="container">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">FORM EDIT PRODUK</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Data Produk</a></li>
                    <li class="breadcrumb-item text-white active">Form Edit Produk</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        FORM EDIT PRODUK
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('Komponen.message')
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <form action="{{ route('update-produk', $data->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">NAMA</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="text" name="nama_produk" value="{{ $data->nama_produk }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">HARGA</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="number" name="harga" value="{{ $data->harga }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">STOK</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control nemberonly" placeholder="" type="text" name="stok" value="{{ $data->stok }}">
                                </div>
                            </div>
                            <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5"><i class='fa fa-save'></i> Save</button>
                            <a href="{{ route('data-produk') }}" class="btn btn-secondary pd-x-30 mg-t-5"><i class='fa fa-chevron-left'></i> Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container -->
@include('Komponen.script')

@endsection
