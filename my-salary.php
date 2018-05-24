<?php
session_start();

include "config.php";

if ( isset ( $_SESSION [ 'id' ] ) )
{
    $id_user = $_SESSION [ 'id' ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php include 'title.php'; ?>

    <link rel="shortcut icon" type="image/png" href="images/ogilvy.png"/>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
    <?php include 'header.php'; ?>

    <div class="container">

        <h1 class="mb-3" style="margin-top: 4%;">History Salary</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="table-responsive text-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">No.</th>
                                    <th>Company</th>
                                    <th>Project Name</th>
                                    <th>Date</th>
                                    <th>Basic Salary</th>
                                    <th>Project Salary</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $querytampil = "SELECT * FROM tb_gaji "; 
                                    $hasil = mysql_query($querytampil);
                                    $i=1;
                                    while ($row = mysql_fetch_array($hasil)) {
                                 ?>
                                <tr>
                                     <td> <?php echo $i ?> </td>
                                     <td> <?php echo $row['nama_perusahaan'] ?> </td>
                                     <td> <?php echo $row['nama_project'] ?> </td>
                                     <td> <?php echo $row['tanggal'] ?> </td>
                                     <td> <?php echo $row['basic_salary'] ?> </td>
                                     <td> <?php echo $row['project_salary'] ?> </td>
                                     <td> <?php echo $row['total_salary'] ?> </td>
                                    
                                </tr>
                                 <?php
                                    $i++;}
                                  ?>
                            </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <?php include 'footer.php'; ?>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>