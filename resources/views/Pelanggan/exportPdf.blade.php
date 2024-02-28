<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Pelanggan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
            text-align: center;
		}
		table tr th{
			font-weight:bold;
			text-align:center;
			background:#f4f4f4;
		}
	</style>
	<center>
		<h4>DATA PELANGGAN</h4>
		<p>Waktu Export : {{date('d-m-Y H:i')}}</p>
	</center>

	<table class='table table-bordered'>
		<thead>
		<tr>
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Alamat Lengkap</th>
			<th>Nomor Telepon</th>
		</tr>
		</thead>
		<tbody>
		@php $no=1; @endphp
		@if(count($data))
		@foreach($data as $dt)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$dt->nama_pelanggan??''}}</td>
				<td>{{$dt->alamat??''}}</td>
				<td>{{$dt->nomor_telepon??''}}</td>
			</tr>
		@endforeach
		@endif
		</tbody>
	</table>

</body>
</html>
