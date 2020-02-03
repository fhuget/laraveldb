<!DOCTYPE html>
<html>
<head>
	<title>DATA PEGAWAI</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
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
						<td>{{$pegawai->pegawai_nama}}</td>
						<td>{{$pegawai->pegawai_jabatan}}</td>
						<td>{{$pegawai->pegawai_umur}}</td>
						<td>{{$pegawai->pegawai_alamat}}</td>
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
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								       <form action="/pegawai/create" method="POST">
								       	
								       	{{csrf_field()}}
											  <div class="form-group">
											    <label for="exampleInputEmail1">NAMA</label>
											    <input type="pegawai_nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
											  </div>

											  <div class="form-group">
											   <label for="exampleInputEmail1">JABATAN</label>
											    <input type="pegawai_jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
											  </div>

											  <div class="form-group">
											   <label for="exampleInputEmail1">UMUR</label>
											    <input type="pegawai_umur" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Umur">
											  </div>

											  <div class="form-group">
											   <label for="exampleInputEmail1">ALAMAT</label>
											    <textarea name="pegawai_alamat" class="form-control" id="exampleControlTextArea1" rows="3"></textarea>
											  </div>
								     	 </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										         <button type="submit" class="btn btn-primary">Submit</button>
										     </div>
										  </form>

								      </div>
								    </div>
								  </div>
								</div>
								
		


</body>
</html>

