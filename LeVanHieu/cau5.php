<?php 
include ('./users.php');
$obj_usres = new users();
$users = $obj_usres->getUsers();

if( empty($users)== false)
{
	var_dump($users);
die();

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link href="./public/css/bootstrap.min.css" rel="stylesheet" type="text/css">
			<style type="text/css">
				.type{
					text-align: center;
					font-size: 50px;
					color: blue;
				}
			</style>


			<link href="./public/css/styles.css" rel="stylesheet" type="text/css">

			<script src="./public/js/jquery-2.1.4.min.js"></script>
			<script src="./public/js/bootstrap.min.js"></script>
			<script src="./public/js/scripts.js"></script>


</head>
<body>	
		<div class="container">
			<div class="col-md-12 border">
				<div class="type">Our Team</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 sol-xs-12 class">
						<div class="hover">
							<div class="images">
								<img src="public/images/anh1.png" alt="imgAlt">
							</div>
						</div>

						<div class="tieude">
						<a href="#"><h3>ROBERT JOHSON</h3></a>
					</div>
					</div>


					

				</div>
			</div>
		</div>
</body>
</html>