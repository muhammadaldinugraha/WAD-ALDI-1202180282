<?php
 
$connect= mysqli_connect("localhost","root","","wad_modul4_aldi");



function registrasi($data){
	global $connect;

	$nama = $data["nama"];
	$email = $data["email"];
	$nohp = $data["nohp"];
	$katasandi = $data["katasandi"];
	$katasandi1 = $data["katasandi2"];


	if ($katasandi !== $katasandi1){
		echo "<script>
		alert ('Password Tidak Cocok !')
		</script>
		";
		return false;
	}
	//cek email sudah terdaftar atau belum
	$verify = mysqli_query($connect, "SELECT email FROM user WHERE email ='$email'");
	if (mysqli_fetch_assoc($verify)){
		echo "<script>
		alert('email sudah terdaftar!');
		</script>";
		return false;
	}
	//enkripsi password
	$katasandi = password_hash($katasandi, PASSWORD_DEFAULT);
	//menambahkan user ke database
	mysqli_query($connect, "INSERT INTO user VALUES('','$nama','$email','$nohp','$katasandi')");

	return mysqli_affected_rows($connect);

}


?>