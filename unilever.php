<?php
session_start();

include "config.php";

if ( isset ( $_SESSION [ 'id' ] ))
{
    $id_user = $_SESSION [ 'id' ];

    if(isset($_FILES['file']))
    {
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      /*
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      */
      
      if($file_size > 2097152)
      {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true)
      {
         move_uploaded_file($file_tmp,"uploads/".$file_name);
         //header ( "location:pindad.php" );
        //echo $_SERVER['HTTP_REFERER'];
        //echo $_SERVER['PHP_SELF'];
        if(isset($_POST['nama_project']))
        {
            $nama_file = "uploads/".$file_name;
            $nama_project  = $_POST [ 'nama_project'];
            $insertQuery = " INSERT INTO tb_file2  (nama_project , file ) VALUES ('$nama_project', '$nama_file')  "; 
            $hasil = mysql_query ($insertQuery);


            if($hasil)
            {
             echo "<script> alert('Upload Sukses')</script>";
            } 
            else
            {
                echo mysql_error();
            }
        }
      }
      else
      {
         print_r($errors);
      }
   }

   $selectQuery = "SELECT * FROM tb_file2";
   $hasilSelect = mysql_query($selectQuery);


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
          <h2 class="mt-4">PT Unilever Indonesia Tbk.</h2>
            <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Project Name</th>
                                            <th>Deadline</th>
                                            <th>Upload File</th>
                                            <th>File Name</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Penetration Testing</td>
                                            <td><span class="label bg-green">1 June 2018</span></td>
                                            <td>    
                                                <form action="" method="post" enctype="multipart/form-data">
                                                <input type="file" name="file" id="file">
                                                <input type="hidden" name="nama_project" id="hiddenField" value="Vulnerability Assessment">
                                                <input type="submit" name="upload" value="Upload">
                                                </form>
                                            </td>
                                            <td>
                                                <?php 
                                                while ($row = mysql_fetch_array($hasilSelect))
                                                {
                                                    echo '<a href="'.$row['file'].'">'.$row['file'].'</a>' ; 
                                                ?>
                                                <form action='deleteFile.php?id=<?php echo $row['id_file']; ?>' method="post">
                                                <input type="submit" name="submit" value="Delete">
                                                </form>
                                                <?php
                                                    
                                                }

                                                ?>  

                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                    </div>
                                                </div>
                                            </td>
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