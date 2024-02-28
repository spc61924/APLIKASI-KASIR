@extends('Template-back.layout')
@section('content')
@section('title', 'Stok Barang')
<!-- container opened -->
<div class="container">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">STOK BARANG</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item text-white active">Stok Barang</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="row row-sm">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
            <div class="card">
                <div class="pd-t-10 pd-s-10 pd-e-10 bg-white bd-b">
                    <div class="row">
                        <div class="col-md-6">
                            <p>STOK BARANG</p>
                        </div>
                        {{-- <div class="col-md-6">
                            <div class="d-flex my-auto btn-list justify-content-end">
                                <button data-bs-toggle="modal" data-bs-target="#ModalImportBuku" class="btn btn-sm btn-secondary"><i class="fa fa-upload me-2"></i> Import</button>
                                <div class="dropdown">
                                    <button type="button" class="btn btn-sm btn-success dropdown-toggle" data-bs-toggle="dropdown">
                                        <i class="fa fa-download me-2"></i>Export
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Excel</a>
                                        <a class="dropdown-item" href="#">PDF</a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                <!-- message info -->
                @include('Komponen.message')
                    <div class="table-responsive mt-3">
                        <table
                         id="tbl_list" class="table table-sm table-striped table-bordered tx-14" width="100%">
                            <thead>
                                <tr>
                                    <th width="100px">No</th>
                                    <th>Nama Produk</th>
                                    <th>Stok</th>
                                    <th width="100px">Action</th>
                                </tr>
                            </thead>
                            @php $no=1; @endphp
                            <tbody>
                                @foreach ($data as $item)
                                <tr>
                                    <th>{{ $no++ }}</th>
                                    <td>{{ $item->nama_produk }}</td>
                                    <td>{{ $item->stok }}</td>
                                    <td>
                                        <a href="{{ route('edit-produk', $item) }}" class="btn btn-info btn-sm" title="Edit"><i class="fe fe-edit"></i></a>
                                        <a href="{{ route('delete-produk', $item) }}" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fe fe-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /container -->
@include('Komponen.script')

@endsection
