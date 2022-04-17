<?php

$nama=$_POST['nama'];
$kelas=$_POST['kelas'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$pesan=$_POST['pesan'];

?>

<table border="1">
<tr>
    <td>Nama</td>
    <td><?php echo $nama; ?></td>
</tr>
<tr>
    <td>Kelas</td>
    <td><?php echo $kelas; ?></td>
</tr>
<tr>
    <td>Email</td>
    <td><?php echo $email; ?></td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td><?php echo $gender; ?></td>
</tr>
<tr>
    <td>Pesan</td>
    <td><?php echo $pesan; ?></td>
</tr>

</table>

