<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<?php require_once '_head.php'; ?>
<?php require_once 'header-style.php'; ?>
<?php require_once 'header.php'; ?>
<div class="margin-from-header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				
			
				<div class="nav nav-pills nav-stacked">
		<li class="active"><a href="farmersfeed.php"style= "background-color:#2478f0"><h4> Feed</h4></a></li>
        <li><a href="feed1.php">Farm 360</a></li>
					<li><a href="feed2.php">Eu Food and Farming</a></li>
					<li><a href="feed3.php">Agriculture</a></li>
					<li><a href="feed4.php">Iam Agriculture Proud</a></li>
		</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-success">
					<div class="panel-heading">Feed..</div>
					<div class="panel-body">
                        <div class="iframe-container">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/Zld7e5udrgg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>						</div>
                        
					</div>
					<div class="panel-footer text-center">&copy; 2022</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
	</div>
	<?php require_once 'footer.php'; ?>
</body>
</html>
