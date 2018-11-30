<?php
    session_start();
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Library</title>
<link rel="shortcut icon" href="images/logo.png" />
<!--css-->

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/chocolat.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style3.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="aos.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--//css-->
<!--google fonts-->
<link href="//fonts.googleapis.com/css?family=Poppins:200,200i,300,400,500,500i,600,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:400,700,700i,800i,900" rel="stylesheet">
</head>
<body>
<!--banner-->
<div class="top nav fixed-top">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="index.php">Library</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right" >
        <li><a href="admin_login.php" class="active">Home</a></li>
         <li><a href="issue.php" class="page-scroll">Issue</a></li>
		<li><a href="return.php" class="page-scroll">Return</a></li>
		<ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="glyphicon glyphicon-user pull-right"></span><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
          <ul class="dropdown-menu">
            <li class="divider"><?php echo $_SESSION['admin_username']?></li>
            <li name='logout'>Sign Out <span class="glyphicon glyphicon-log-out pull-right" ></span></li>
              
            </ul>
        </li>
      </ul>
        <?php
        		if (isset($_POST['logout'])) 
        		{
        			session_destroy();
        			header('location:index.php');
        		}
          ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
<div class="banner" id="home">
	<div class="container-fluid">
   <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
			<li data-target="#myCarousel" data-slide-to="7"></li>

		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/26.png" alt="w3layouts" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/22.png" alt="w3layouts" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/32.png" alt="w3layouts" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/5.png" alt="w3layouts" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/4.png" alt="w3layouts" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/21.png" alt="w3layouts" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/3.png" alt="w3layouts" class="img-responsive">
			</div>

		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		</div>
		<div class="banner-info-w3layouts">
			<div class="jumbotron text-center">
				<h1>Dreams and Books</h1>
				<p>The world is a book, and those who do not<br> travel read only a page.</p>
			</div>
		</div>
	</div>
</div>


<!--
<div class="locations-w3-agile" id="locations">
	<div class="locations-w3-agile-info text-center">
		<h3>DEPARTMENTS</h3>
		<label></label>
	</div>
	<div class="locations-w3-agile-content">
	<div class="container">
		<div class="portfolio-gallery" id="gal">
	<div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
		<div class="hovereffect">
			<a  href="departments/math.html"><img src="images/18.png" class="img-responsive" style="height: 210px;width: 340px" alt=" ">
			<div class="overlay">
				<h4>Mathematics</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
		</div>
	</div>

            <div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
                <a href="departments/cs.html"><img src="images/11.png" class="img-responsive" style="height: 210px;width: 340px" alt=" ">
				<div class="overlay">
				<h4>Computer Science</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				</div>
			    </a>
            </div>
            </div>

            <div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
               <a href="departments/eee.html"><img src="images/10.jpg" class="img-responsive" style="height: 210px;width: 340px" alt="">
			   <div class="overlay">
				<h4>Electrical & Electronics</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
			   </div>
				
            </div><br>
            
			<div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
                <a href="departments/is.html"><img src="images/8.png" class="img-responsive" style="height: 210px;width: 340px" alt=" ">
				<div class="overlay">
				<h4>Information Science</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
				</div>
				
            </div>
			<div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
                <a href="departments/civil.html"><img src="images/12.png" class="img-responsive" style="height: 210px;width: 340px" alt=" ">
				<div class="overlay">
				<h4>Civil Engineering</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
				</div>
				
            </div>
			<div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
                <a href="departments/mec.html"><img src="images/13.png" class="img-responsive" style="height: 210px;width: 340p" alt=" ">
				<div class="overlay">
				<h4>Mechanical Engineering</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
				</div>
				
            </div><br>
            
            <div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
                <a href="departments/tc.html"><img src="images/9.png" class="img-responsive" style="height: 210px;width: 340px" alt=" ">
				<div class="overlay">
				<h4>Telecommunication</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
				</div>
				
            </div>
			<div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
                <a href="departments/mca.html"><img src="images/17.png" class="img-responsive" style="height: 210px;width: 340px" alt=" ">
				<div class="overlay">
				<h4>MCA</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
				</div>
				
            </div>
			<div class="gallery_product-w3-agile col-lg-4 col-md-4 col-sm-4 col-xs-6" data-aos="zoom-in" data-aos-easing="ease-out-cubic">
			<div class="hovereffect">
                <a href="departments/mba.html"><img src="images/16.png" class="img-responsive" style="height: 210px;width: 340px" alt=" ">
				<div class="overlay">
				<h4>MBA</h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. </p>
				
			</div>
			</a>
				</div>
				
            </div>
			<div class="clearfix"></div>
			
			</div>
</div> 
</div>
</div>-->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="aos.js"></script>
  <script type="text/javascript">
    AOS.init({
      duration: 1000,
    });
  </script>
<!---728x90--->

<div class="footer text-center">Copyright &copy; 2018. <a href="index.php">CMRIT Library</a></div>
<!--javascript-->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/move-top.js"></script>
<!--//javascript-->
<!-- js for gallery -->
<script type="text/javascript" src="js/jquery.chocolat.js"></script>
<script>
$(function(){
                $('#gal').Chocolat({
                    imageSize: 'contain'
                });
            });
</script>
<script type="text/javascript">
$(document).ready(function() {
var defaults = {
containerID: 'toTop', // fading element id
containerHoverID: 'toTopHover', // fading element hover id
scrollSpeed: 1200,
easingType: 'linear' 
};

$().UItoTop({ easingType: 'easeOutQuart' });

});
</script>

<!-- //js for gallery -->	
</body>
</html>