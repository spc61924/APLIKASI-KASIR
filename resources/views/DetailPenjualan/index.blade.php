
<div class="row row-sm">
    <div class="col-xl-12 col-lg-12 col-sm-12 col-md-12">
        <div class="card">
            <div class="pd-t-10 pd-s-10 pd-e-10 bg-white bd-b">
                <div class="row">
                    <div class="col-md-6">
                        <p>PENDATAAN BARANG</p>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex my-auto btn-list justify-content-end">
                            <a href="{{ route('create-detail-penjualan') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                    </div>
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
                                <th>No</th>
                                <th>Penjualan</th>
                                <th>Produk</th>
                                <th>Jumlah produk</th>
                                <th>Subtotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @php $no=1; @endphp
                        <tbody>
                            @foreach($dtDetailPenjualan as $itemm)
                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $itemm->penjualan->pelanggan->nama_pelanggan}}</td>
                                <td>{{ $itemm->produk->nama_produk }}</td>
                                <td>{{ $itemm->jumlah_produk }}</td>
                                <td>{{ $itemm->subtotal }}</td>
                                <td>
                                    <a href="#" class="btn btn-info btn-sm" title="Edit"><i class="fe fe-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fe fe-trash"></i></a>
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
