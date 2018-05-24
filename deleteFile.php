<?php
include 'config.php';

$fileID = $_GET['id'];
echo $fileID;
$queryDelete = "DELETE FROM tb_file WHERE id_file = '$fileID'";
$hasil = mysql_query($queryDelete);
 if($hasil)
 {
    echo "<script> alert('Delete Sukses')</script>";
    header('location: pindad.php');
 } 
 else
 {
    echo mysql_error();
 }
?>
