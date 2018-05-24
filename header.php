<?php
    include ( 'config.php' );
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="index.php">StaffMan | Ogilvy Indonesia</a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    	</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-link"><a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a></li>
				<li class="nav-link"><a class="nav-link" href="logactivity.php">Log Activity</a></li>
				
				<?php
				if ( @$_SESSION [ 'level' ] == "user" )
				{
					$id = $_SESSION [ 'id' ];

					$nama = mysql_query ( " SELECT nama FROM tb_user WHERE id = $id " );
					$c    = mysql_fetch_array ( $nama );

					$nama_pelanggan = $c [ 'nama' ];

				?>

					<li class="nav-link dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, <b><?php echo $nama_pelanggan; ?></b></a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
							<a class="dropdown-item" href="my-salary.php">My Salary</a>
	                        <a class="dropdown-item" href="logout.php">Logout</a>
						</div>
					</li>

				<?php
				}
				
				else
				{

				?>
					<li class="nav-link dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
		                    <a class="dropdown-item" href="login.php">Login</a>
		                    <a class="dropdown-item" href="register.php">Register</a>
						</div>
					</li>
				<?php

				} ?>
				
			</ul>
		</div>
	</div>
</nav>