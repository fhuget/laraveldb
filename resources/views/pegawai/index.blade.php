<!DOCTYPE html>
<html>
	<head>
		<title>DATA PEGAWAI</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<style>
					body {font-family: 'Segoe UI', sans-serif;
							background-color: #F0FFFF;}

					h1 {font-family: 'Futura', sans-serif;}
				</style>
	</head>
<body>
				<nav class="navbar navbar-light bg-secondary">
			  <a class="navbar-brand"><h1>Data Pegawai</h1></a>
			  <form class="form-inline my-2 my-lg-0">
			    <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" method="GET" action="/pegawai">
			    <button class="btn btn-warning" type="submit">Search</button>
			  </form>
			</nav>
				
				<div class="main">
				  <div class="container">
		<div class="row">
			<div class="col-6">
				<button type="button" class="btn btn-primary float right" data-toggle="modal" data-target="#exampleModal"> Tambah Data Pegawai</button>
				<a href="/pegawai"><button type="button" class="btn btn-success float right">Refresh</button></a>
			</div>
			<div class="col-6">
				
			</div>

					<table class="table">
					<tr>
						<th>NAMA</th>
						<th>JABATAN</th>
						<th>UMUR</th>
						<th>ALAMAT</th>
					</tr>
					@foreach($data_pegawai as $data_pgw)
					<tr>
						<td>{{$data_pgw->nama}}</td>
						<td>{{$data_pgw->jabatan}}</td>
						<td>{{$data_pgw->umur}}</td>
						<td>{{$data_pgw->alamat}}</td>
						<td><a href="/pegawai/{{$data_pgw->id}}/edit"  class="btn btn-warning btn-sm">Edit</a></td>
						<td><a href="/pegawai/{{$data_pgw->id}}/delete" class="btn btn-danger btn-sm">Hapus</a></td>

					</tr>
					@endforeach
				</table>

				{{ $data_pegawai->links() }}
			</div>
		</div>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA PEGAWAI</h5>
								      </div>
								      <div class="modal-body">
								       <form action="/pegawai/create" method="POST">
								       {{csrf_field()}}

											 <div class="form-group">
											    <label for="exampleFormControlInput1">NAMA</label>
											    <input type="nama" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required="required">
											  </div>

											  <div class="form-group">
											   <label for="exampleFormControlSelect1">JABATAN</label>
											   <select name="jabatan" class="form-control" id="exampleFormControlSelect1" required="required">
											   	<option value="Ketua">Ketua</option>
											   	<option value="Wakil Ketua">Wakil Ketua</option>
											   	<option value="Sekretaris">Sekretaris</option>
											   	<option value="Bendahara">Bendahara</option>
											   </select>
											  </div>

											   <div class="form-group">
											    <label for="exampleFormControlInput2">UMUR</label>
											    <input type="number" name="umur" class="form-control" id="exampleFormControlInput2" placeholder="Umur" required="required">
											  </div>

											  <div class="form-group">
											   <label for="exampleInputEmail1">ALAMAT</label>
											    <textarea name="alamat" type="text" class="form-control" id="exampleControlTextArea1" rows="3" required="required"></textarea>
											  </div>

											  <label>Image</label>
											  <div class="input-group">
											  	<div class="custom-file">
											  		<input type="file" class="custom-file-input">
											  		<label class="custom-file-input">Choose file</label>
											  	</div>
											  </div>


										     	 </div>
												      <div class="modal-footer">
												        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
												         <button type="submit" class="btn btn-primary">Tambahkan</button>
												     </form>
												 </div>
										     </div>
								      </div>
								    </div>
								  </div>
								</div>
				</div>
								
</body>
</html>

