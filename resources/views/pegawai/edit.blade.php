<!DOCTYPE html>
<html>
	<head>
		<title>UPDATE DATA PEGAWAI</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="container">			
		<div class="row">
		<div class="col-lg-12">	
		<h1>UPDATE DATA PEGAWAI</h1>

		 <form action="/pegawai/{{$pegawai->id}}/update" method="POST">
								       {{csrf_field()}}

											 <div class="form-group">
											    <label for="exampleFormControlInput1">Nama</label>
											    <input type="nama" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="Nama" required="required" value="{{$pegawai->nama}}">
											  </div>

											  <div class="form-group">
											   <label for="exampleFormControlSelect1">Jabatan</label>
											   <select name="jabatan" class="form-control" id="exampleFormControlSelect1" required="required" value="{{$pegawai->jabatan}}">
											   	<option value="Ketua">Ketua</option>
											   	<option value="Wakil Ketua">Wakil Ketua</option>
											   	<option value="Sekretaris">Sekretaris</option>
											   	<option value="Bendahara">Bendahara</option>
											   </select>
											  </div>

											   <div class="form-group">
											    <label for="exampleFormControlInput2">Umur</label>
											    <input type="number" name="umur" class="form-control" id="exampleFormControlInput2" placeholder="Umur" required="required" value="{{$pegawai->umur}}">
											  </div>

											  <div class="form-group">
											   <label for="exampleInputEmail1">ALAMAT</label>
											    <textarea name="alamat" type="text" class="form-control" id="exampleControlTextArea1" rows="3" required="required" value="{{$pegawai->umur}}"></textarea>
											  </div>

										     	 </div>
												      <div class="modal-footer">
												      	<a href="/pegawai"><button type="button" class="btn btn-secondary">Kembali</button></a>
												         <button type="submit" class="btn btn-warning">Update</button>
												     </form>
												 </div>
	</div>
</div>
								
</body>
</html>

