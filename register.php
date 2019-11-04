<!DOCTYPE html>
<html>
<head>
	<title>L9 School</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="slider"><img src="img/header.png" alt="Gambar 1"></div>

	<div class="kotak_daftar">
		<p class="textlog1" >Form Pendaftaran</p>

				<form>
			<tr>
				<p class="tulisan_tengah">Daftar Sebagai?</p>
				<td>
					<select name="nama_sekolah" class="btn1">
						<option value="Wali Guru">Wali Murid</option>
						<option value="Guru">Guru</option>
						<option value="Siswa">Siswa</option>
					</select>
				</td>
				<td>
					<p class="tulisan_tengah">Nomer Whatsapp</p>
					<td><input type="number" name="nowa" class="btn1"></td>
				</td>
				<td>
					<p class="tulisan_tengah">Nama Lengkap Pemilik Akun</p>
					<td><input type="text" name="namalengkao" class="btn1"></td>
				</td>
				<td>
					<p class="tulisan_tengah">Nama Lengkap Siswa</p>
					<td><input type="text" name="namasiswa" class="btn1"></td>
				</td>
				<td>
					<p class="tulisan_tengah">NIS Siswa</p>
					<td><input type="number" name="nis" class="btn1"></td>
				</td>
				<td>
    				<p class="tulisan_tengah">Alamat Lengkap</p>
    				<td><input type="text" name="alamatlengkap" value=""  class="btn1"></td>
   				</td>
   				<td>
   					<p class="tulisan_tengah">Password Akun</p>
   					<td><input type="password" name="passakun" class="btn1"></td>
   				</td>
				<tr>
					<td colspan="2">
						
						<button type="submit" class="daftar" value="simpan"><a href="#">Daftar</a></button>

					</td>
				</tr>
			</tr>
		</form>
	</div>
	<p class="tulisan_tengah">Lupa Password? <a href="#">Klik Disini</a></p>
	<p class="tulisan_tengah">Sudah Punya Akun? <a href="#">Login</a></p>
</body>
</html>