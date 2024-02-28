@extends('Template-back.layout')
@section('content')
@section('title', 'Form Edit Pengguna')
<!-- container opened -->
<div class="container">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">FORM EDIT PENGGUNA</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Data Pengguna</a></li>
                    <li class="breadcrumb-item text-white active">Form Edit Pengguna</li>
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
                        FORM EDIT PENGGUNA
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('Komponen.message')
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <form action="{{ route('update-pengguna', $data->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Nama Lengkap</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="text" name="name" value="{{ $data->name }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Email Pengguna</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="text" name="email" value="{{ $data->email }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Password</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" id="password" type="password" name="password" value="{{ $data->password }}">
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
                                    <label class="form-label mg-b-0">Hak Akses </label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control select2" name="role">
                                        <option value="{{ $data->role }}">{{ $data->role }}</option>
                                        <option disabled value>Pilih Role</option>
                                        <option value="administrator">administrator</option>
                                        <option value="petugas">petugas</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5"><i class='fa fa-save'></i> Save</button>
                            <a href="{{ route('data-pengguna') }}" class="btn btn-secondary pd-x-30 mg-t-5"><i class='fa fa-chevron-left'></i> Cancel</a>
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
