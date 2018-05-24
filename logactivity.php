<?php
session_start();

include "config.php";

if ( isset ( $_SESSION [ 'id' ] ) )
{
    $id_user = $_SESSION [ 'id' ];
}
else
{
    echo " <script> alert('Untuk Melanjutkan ke Halaman ini, Silahkan Login Terlebih Dahulu') 
            window.location = 'login.php'; </script>";
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
          <h2 class="mt-4">Log Activity</h2>
            <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Company</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="pindad.php">PT Pindad (Persero)</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="unilever.php">PT Unilever Indonesia Tbk.</a></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="ace.php">PT Ace Hardware Indonesia Tbk.</a></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="telkom.php">PT Telekomunikasi Indonesia (Persero) Tbk.</a></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><a href="bca.php">PT Bank Central Asia Tbk.</a></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><a href="gojek.php">PT Gojek Indonesia</a></td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><a href="bukalapak.php">PT Kreatif Media Karya Group</a></td>
                                        </tr>
                                        </tr>
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