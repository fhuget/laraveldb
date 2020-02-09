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

					.sidebar {
						padding-top: 100px;
					  height: 100%;
					  width: 200px;
					  position: fixed;
					  z-index: 1;
					  top: 0;
					  left: 0;
					  background-color: turquoise;
					  overflow-x: hidden;
					  padding-top: 16px;
					}

					.sidebar a {
					  padding: 6px 8px 6px 16px;
					  text-decoration: none;
					  font-size: 20px;
					  color: black;
					  display: block;
					}

					.sidebar a:hover {

					  color: #f1f1f1;
					}

					.main {
					  margin-left: 200px;
					  padding: 0px 10px;
					}

					@media screen and (max-height: 450px) {
					  .sidebar {padding-top: 15px;}
					  .sidebar a {font-size: 18px;}
					}
				</style>
	</head>
<body>
				<div class="sidebar">
				  <a href="index.php"><button type="button" class="btn btn-info btn-xs" style="margin-top: 100px; margin-bottom: 50px; width: 150px;">Beranda</button></a>
				  <a href="add_data.php"><button type="button" class="btn btn-success btn-xs" style="margin-bottom: 50px; width: 150px;">Tambah Data</button></a>
				  <a href="read_data.php"><button type="button" class="btn btn-warning btn-xs" style="margin-bottom: 50px; width: 150px;">Lihat Data</button></a>
				</div>
				
				<div class="main">
				  <div class="container">
		<div class="row">
			<div class="col-6">
				<h1>Data Pegawai</h1>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
								  Tambah Data Pegawai
								</button>
							</div>

					<table class="table">
					<tr>
						<th>NAMA</th>
						<th>JABATAN</th>
						<th>UMUR</th>
						<th>ALAMAT</th>
					</tr>
					@foreach($data_pegawai as $pegawai)
					<tr>
						<td>{{$pegawai->nama}}</td>
						<td>{{$pegawai->jabatan}}</td>
						<td>{{$pegawai->umur}}</td>
						<td>{{$pegawai->alamat}}</td>
						<td><a href="/pegawai/{{$pegawai->id}}/edit"  class="btn btn-warning btn-sm">Edit</a></td>
						<td><a href="/pegawai/{{$pegawai->id}}/delete" class="btn btn-danger btn-sm">Hapus</a></td>

					</tr>
					@endforeach
				</table>
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
											    <label for="exampleFormControlInput1">Nama</label>
											    <input type="nama" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required="required">
											  </div>

											  <div class="form-group">
											   <label for="exampleFormControlSelect1">Jabatan</label>
											   <select name="jabatan" class="form-control" id="exampleFormControlSelect1" required="required">
											   	<option value="Ketua">Ketua</option>
											   	<option value="Wakil Ketua">Wakil Ketua</option>
											   	<option value="Sekretaris">Sekretaris</option>
											   	<option value="Bendahara">Bendahara</option>
											   </select>
											  </div>

											   <div class="form-group">
											    <label for="exampleFormControlInput2">Umur</label>
											    <input type="number" name="umur" class="form-control" id="exampleFormControlInput2" placeholder="Umur" required="required">
											  </div>

											  <div class="form-group">
											   <label for="exampleInputEmail1">ALAMAT</label>
											    <textarea name="alamat" type="text" class="form-control" id="exampleControlTextArea1" rows="3" required="required"></textarea>
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

