<?php
$server = "localhost";
$username = "root";
$password = "";
$namadb = "form";

$conn = mysqli_connect($server,$username,$password)or die("Gagal Input");
$con = mysqli_select_db($conn,$namadb);

if (!empty($nama) && !empty($jkel) && !empty($nisn) && !empty($nik) && !empty($temlahir) && !empty($tgllahir) && !empty($noregakte) && !empty($agama) && !empty($kwn) && !empty($kebutuhan) && !empty($alamat) && !empty($rt) && !empty($rw) && !empty($dusun) && !empty($kelurahan) && !empty($kecamatan) && !empty($kdpos) && !empty($temtinggal) && !empty($transport) && !empty($anakke) && !empty($kps)) {
$sql = mysqli_query($conn,"INSERT INTO formvalidation (nama,jkel,nisn,nik,temlahir,tgllahir,noregakte,agama,kwn,kebutuhan,alamat,rt,rw,dusun,kelurahan,kecamatan,kdpos,lintang,bujur,temtinggal,transport,nokks,anakke,kps,nokps) VALUES ('$nama','$jkel','$nisn','$nik','$temlahir','$tgllahir','$noregakte','$agama','$kwn','$kebutuhan','$alamat','$rt','$rw','$dusun','$kelurahan','$kecamatan','$kdpos','$lintang','$bujur','$temtinggal','$transport','$nokks','$anakke','$kps','$nokps')");
if ($sql) {
	echo "<script>alert('Data Sukses Dimasukkan')</script>";
	echo "<script>location.href='formvalidation.php'</script>";
}else{
	echo "<script>alert('Cek Kembali Data Anda')</script>";
}
} 
?>