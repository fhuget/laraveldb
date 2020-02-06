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
				
		<div class="row">
		<div class="col-lg-12">	

		 <form action="/pegawai/{id}/edit" method="POST">
			{{csrf_field()}}
			<div class="form-group">
			<label for="exampleInputEmail1">NAMA</label>
			<input type="pegawai_nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pegawai->pegawai_nama}}">
			 </div>

			<div class="form-group">
			<label for="exampleInputEmail1">JABATAN</label>
			<input type="pegawai_jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan"  value="{{$pegawai->pegawai_jabatan}}">
			</div>

			<div class="form-group">
			<label for="exampleInputEmail1">UMUR</label>
			<input type="pegawai_umur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Umur" value="{$pegawai->pegawai_umur}}">
			</div>

			 <div class="form-group">
			<label for="exampleInputEmail1">ALAMAT</label>
			 <textarea name="pegawai_alamat" class="form-control" id="exampleControlTextArea1" rows="3" value="{$pegawai->pegawai_alamat}}"></textarea>
			</div>
			<button type="submit" class="btn btn-warning">Update</button>
		</form>
	</div>
</div>
								
</body>
</html>

