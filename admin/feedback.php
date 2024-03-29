<?php
session_start();
if($_SESSION['sid']=="")
{
header('location:index.php');
}
else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback Page:Embery Doughnuts Online Delievery Service</title>
    <!--

    Template 2108 Dashboard

	http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/tooplate.css">
</head>

<body id="reportsPage" class="bg02">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-xl navbar-light bg-light">
                        <a class="navbar-brand" href="#">
                            <img class="logo" src="img/logo.jpg">
                            <h1 class="tm-site-title mb-0">Admin</h1>
                        </a>
                        <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">Home
                                        <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link " href="products.php">Products</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="view-order.php">View Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="feedback.php">Feedback</a>
                                </li>
                                
                            </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link d-flex" href="logout.php">
                                        <i class="far fa-user mr-2 tm-logout-icon"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                <div class="col-xl-15 col-lg-12 tm-md-12 tm-sm-12 tm-col">
                    <div class="bg-white tm-block h-100">
                        <div class="row">
                            <div class="col-md-8 col-sm-12">
                                <h2 class="tm-block-title d-inline-block">View Feedbacks</h2>

                            </div>
                            <table style="margin-left:10px;" width="2000px" align="center" >
					
                            <tr><th width="40px" height="50px">ID:</th>					
						<th width="130px" height="50px">Name:</th>
						<th width="130px" height="50px">Email:</th>
						
						<th width="150px" height="50px">Message:</th>						
					 </tr>	
					 <?php
					 error_reporting(1);
					 include("connection.php");
						$sel=mysql_query("select * from content ");
						while($row=mysql_fetch_array($sel))
							{		
									$id=$row['con_id'];					
									$name=$row['name'];
									$email=$row['email'];
									$phone=$row['phone'];
									$mesg=$row['mesg'];
									
						?>
					 <tr>
						
						<td width="40px" height="50px"><?php echo $id; ?></td>
						<td width="130px" height="50px"><?php echo $name; ?></td>
						<td width="100px" height="50px"><?php echo $email; ?></td>
						<td width="100px" height="50px"><?php echo $mesg; ?></td>
						
						
												
					  </tr>			
					<?php				  
							}	
					?>
					</table>
        
        

                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="row tm-mt-small">
                <div class="col-12 font-weight-light">
                    <p class="d-inline-block tm-bg-black text-white py-2 px-4">
                    Copyright © Embery Doughnuts 2022
        
        - Designed by <a rel="nofollow" class="designed-by" href="https://www.facebook.com/yoon.yatilwin.7">Ember</a></p>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
        $(function () {
            $('.tm-product-name').on('click', function () {
                window.location.href = "edit-product.html";
            });
        })
    </script>
</body>

</html>
<?php } ?>