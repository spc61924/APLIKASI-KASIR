@extends('Template-back.layout')
@section('content')
@section('title', 'Form Edit Pelanggan')
<!-- container opened -->
<div class="container">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">FORM EDIT PELANGGAN</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Data Pelanggan</a></li>
                    <li class="breadcrumb-item text-white active">Form Edit Pelanggan</li>
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
                        FORM EDIT PELANGGAN
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('Komponen.message')
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <form action="{{ route('update-pelanggan', $data->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nama Pelanggan</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="text" name="nama_pelanggan" value="{{ $data->nama_pelanggan }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Alamat Lengkap</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="text" name="alamat" value="{{ $data->alamat }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nomor Telepon</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="number" name="nomor_telepon" value="{{ $data->nomor_telepon }}">
                                </div>
                            </div>
                            <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5"><i class='fa fa-save'></i> Save</button>
                            <a href="{{ route('data-pelanggan') }}" class="btn btn-secondary pd-x-30 mg-t-5"><i class='fa fa-chevron-left'></i> Cancel</a>
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
