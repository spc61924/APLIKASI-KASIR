@extends('Template-back.layout')
@section('content')
@section('title', 'Form Input Penjualan')
<!-- container opened -->
<div class="container">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">FORM INPUT PENJUALAN</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="">Data Penjualan</a></li>
                    <li class="breadcrumb-item text-white active">Form Input Penjualan</li>
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
                        FORM INPUT PENJUALAN
                    </div>
                    <p class="mg-b-20">Silahkan isi form di bawah ini dengan lengkap.</p>
                    <!-- message info -->
                    @include('Komponen.message')
                    <div class="pd-30 pd-sm-40 bg-gray-100">
                        <form action="{{ route('store-penjualan') }}" method="post">
                            @csrf
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Tanggal Penjualan</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="date" name="tanggal_penjualan" value="{{ old('tanggal_penjualan') }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">Total Harga</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <input class="form-control" placeholder="" type="number" name="total_harga" value="{{ old('total_harga') }}">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-3">
                                    <label class="form-label mg-b-0">PELANGGAN</label>
                                </div>
                                <div class="col-md-9 mg-t-5 mg-md-t-0">
                                    <select class="form-control select2" name="pelanggan_id" style="width: 100%">
                                        <option value="">Pilih Pelanggan</option>
                                        @foreach ($pelanggan as $item)
                                        <option value="{{ $item->id }}" @if(old('pelanggan_id') == $item->id) selected @endif>{{ $item->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="float-right btn btn-primary pd-x-30 mg-e-5 mg-t-5"><i class='fa fa-save'></i> Save</button>
                            <a href="{{ route('data-penjualan') }}" class="btn btn-secondary pd-x-30 mg-t-5"><i class='fa fa-chevron-left'></i> Cancel</a>
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
