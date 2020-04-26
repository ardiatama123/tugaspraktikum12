
<?php

include('koneksipdf.php');

require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();

$query = mysqli_query($koneksi,"select * from formvalidation");

$html = '<center><h3>Daftar Siswa Yang Telah Registrasi</h3></center><hr/><br/>';

$html .= '<table border="1" width="100%">

 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Jenis Kelamin</th>
 <th>NISN</th>
 <th>NIK</th>
 <th>Tempat  Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No  REG Akta</th>
 <th>Agama</th>
 <th>Kewarganegaraan</th>
 <th>Kebutuhan Khusus</th>
 <th>Alamat</th>
 <th>RT</th>
 <th>RW</th>
 <th>Dusun</th>
 <th>Kelurahan</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tempat Tinggal</th>
 <th>Transportasi</th>
 <th>KKS</th>
 <th>Anak Ke-</th>
 <th>Penerima KPS</th>
 <th>No KPS</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['jkel']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['temlahir']."</td>
 <td>".$row['tgllahir']."</td>
 <td>".$row['noregakte']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['kebutuhan']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['kelurahan']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['kdpos']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['temtinggal']."</td>
 <td>".$row['transport']."</td>
 <td>".$row['nokks']."</td>
 <td>".$row['anakke']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";

$dompdf->loadHtml($html);

// Setting ukuran dan orientasi kertas

$dompdf->setPaper('B0', 'landscape');

// Rendering dari HTML Ke PDF

$dompdf->render();

// Melakukan output file Pdf

$dompdf->stream('data_pendaftar.pdf');
?>

