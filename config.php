<?php 
 session_start();
 
$config = mysqli_connect("localhost","root","","reg");
$name = $_POST['nama'];
$email= $_POST['email'];
$user = $_POST['username']
$pass = $_POST['password'];

$s="select *from usertable where name ='$user'";
$result = mysqli_query($config,$s)
$num= mysqli_num_rows($result)

if (!$num==1){
	echo"Nama udh ada lur";
}else{
	$reg= "insert into usertable(nama,password) values ('$name','$email','$user','$pass')";
	mysqli_query($config, $reg);
	echo"Registrasi Berhasil!"
}
?>