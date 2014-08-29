<?php



$req = $_GET['req'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$poster = $_FILES['poster'];
$link = $_POST['link'];



switch ($req) {
	case '1': //request dari poster
		$sql = "INSERT INTO request(nama, email, poster, status) VALUES('$nama', '$')"	
		break;
	
	default:
		header("location:../");
		break;
}

?>