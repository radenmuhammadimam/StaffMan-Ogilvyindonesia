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

    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<?php
include ( 'config.php' );

if(isset($_POST['register'])) {
    $nama  = $_POST [ 'nama_lengkap'];
    $alamat= $_POST [    'alamat'   ];
    $no_hp = $_POST [    'no_hp'    ];
    $email = $_POST [    'email'    ];
    if ( $_POST [ 'password_1' ] == $_POST [ 'password_2' ] ) 
    {
        $password = $_POST [ 'password_1' ];
    }

    $hasil = mysql_query ( " INSERT INTO tb_user SET nama ='$nama' , alamat = '$alamat' , no_hp = '$no_hp' , email = '$email'
                           , password = '$password' , level = 'user' " );
    if ( $hasil )
    {
        header ( "location:login.php" );
    }
} 
?>

<body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header text-center">Register</div>
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="nama">Nama Lengkap</label>
                                <input name="nama_lengkap" class="form-control" id="namaDepan" type="text" aria-describedby="nameHelp" placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="col-md-6">
                                <label for="noHp">No. HP</label>
                                <input name="no_hp" class="form-control" id="noHp" type="phone" aria-describedby="nameHelp" placeholder="Masukkan Nomor HP">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" type="text" aria-describedby="emailHelp" placeholder="Masukkan Alamat" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" class="form-control" id="email" type="text" aria-describedby="emailHelp" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password_1" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleConfirmPassword">Confirm password</label>
                                <input name="password_2" class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <button name="register" class="btn btn-primary btn-block">Register</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="login.php">Login</a>
                </div>
                <div class="text-center">
                    <a class="d-block small mt-3" href="index.php">Back to Home</a>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>