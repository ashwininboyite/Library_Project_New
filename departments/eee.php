<!DOCTYPE html>
<html class="no-js">
	<head>
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
	<link href="../css/style3.css" rel="stylesheet" type="text/css" media="all">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<style type="text/css">
        .img-circle {
            border-radius: 100%;
		}
        .img-aspect-16-9 {
            background-repeat: no-repeat;
		    background-position: center top;
            background-size: cover;
            height: 0;
            padding-bottom: 56.25%; /* 16:9 */
        }
        samp{
            color:rgba(249, 70, 29, 0.9);
            font-size: large;
            font-family: cursive;
        }
 
    </style>
	</head>
	<body>
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Library</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../student_login.php" class="active">Home</a></li>
         <li><a href="../booked.php" class="page-scroll">My Book</a></li>
		<li><a href="../renewal.php" class="page-scroll">Renewal</a></li>
		<li><a href="../balance.php" class="page-scroll">Balance</a></li>
		<li><a href="../index.php" class="page-scroll">Logout</a></li>
      </ul>   
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
	<header id="fh5co-header" style="background-image: url(../images/34.jpg)">
		<div class="overlay"></div>
		<div class="container">
			<div class="row" style="margin-top: 5em;">
				<div class="col-md-12 text-center">
					<h1 id="fh5co-logo" class="cursive-font"><a href="eee.php">ELECTRCAL & ELECTRONICS</a></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="intro">
						
						<h2>With electronics, they just get smaller and smaller.<br/>-Amy Heckerling</h2>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<figure class="fh5co-intro-img">
						<img class="img-1 animate-box" src="images/2.png">
						<img class="img-2 animate-box" src="images/1.png">
					</figure>
				</div>
			</div>
		</div>
	</header>

	<div id="main">

		<div class="about-us-agileits" id="about">
			<div class="container">
              <div class="about-info text-center">  
					<h3>BOOKS AVILABLE</h3>
					<label></label>
				</div>
				<div class="our-team-w3l-content">
				<div class="row">
					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="height: 310px">
                                <img id="img_1" style=" height: 310px"/>
                            </div>
      						<div class="caption">
	        					<p>Book Name:<samp id="id_1_Book_name"></samp></p>
                                <p>Total Copies: <samp id="id_1_total"></samp></p>
                                <p>Available Copies: <samp id="id_1_available"></samp></p>
                                <p>Book Author: <samp id="id_1_book_author"></samp></p>
                                <p>Published Year: <samp id="id_1_published_year"></samp></p>
                                <p>Edition: <samp id="id_1_edition"></samp></p>
                            </div>
      					</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="height: 310px">
                                <img id="img_2" style=" height: 310px"/>
                            </div>
      						<div class="caption">
	        					<p>Book Name:<samp id="id_2_Book_name"></samp></p>
                                <p>Total Copies: <samp id="id_2_total"></samp></p>
                                <p>Available Copies: <samp id="id_2_available"></samp></p>
                                <p>Book Author: <samp id="id_2_book_author"></samp></p>
                                <p>Published Year: <samp id="id_2_published_year"></samp></p>
                                <p>Edition: <samp id="id_2_edition"></samp></p>
                            </div>

      					</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="height: 310px">
                                <img id="img_3" style=" height: 310px"/>
                            </div>
      						<div class="caption">
	        					<p>Book Name:<samp id="id_3_Book_name"></samp></p>
                                <p>Total Copies: <samp id="id_3_total"></samp></p>
                                <p>Available Copies: <samp id="id_3_available"></samp></p>
                                <p>Book Author: <samp id="id_3_book_author"></samp></p>
                                <p>Published Year: <samp id="id_3_published_year"></samp></p>
                                <p>Edition: <samp id="id_3_edition"></samp></p>
                            </div>

      					</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="height: 310px">
                                <img id="img_4" style=" height: 310px"/>
                            </div>
      						<div class="caption">
	        					<p>Book Name:<samp id="id_4_Book_name"></samp></p>
                                <p>Total Copies: <samp id="id_4_total"></samp></p>
                                <p>Available Copies: <samp id="id_4_available"></samp></p>
                                <p>Book Author: <samp id="id_4_book_author"></samp></p>
                                <p>Published Year: <samp id="id_4_published_year"></samp></p>
                                <p>Edition: <samp id="id_4_edition"></samp></p>
                            </div>

      					</div>
					</div>
				</div>

				<!--<div class="row">
					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="background-image: url('images/eee_book5.png'); height: 310px"></div>
      						<div class="caption">
	        					<p>Book id:<br/>
	        					Total copies:<br/>
								Available:</p>
							</div>
                            <button type="submit" id="book5" name="submit" class="form-btn semibold">Book</button> <br/>
      					</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="background-image: url('images/eee_book6.png'); height: 310px"></div>
      						<div class="caption">
	        					<p>Book id:<br/>
	        					Total copies:<br/>
								Available:</p>
							</div>
                            <button type="submit" id="book1" name="submit" class="form-btn semibold">Book</button> <br/>
      					</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="background-image: url('images/eee_book7.png'); height: 310px"></div>
      						<div class="caption">
	        					<p>Book id:<br/>
	        					Total copies:<br/>
								Available:</p>
							</div>
                            <button type="submit" id="book1" name="submit" class="form-btn semibold">Book</button> <br/>
      					</div>
					</div>

					<div class="col-md-3 animate-box">
						<div class="thumbnail">
      						<div class="img-aspect-16-9" style="background-image: url('images/eee_book8.png'); height: 310px"></div>
      						<div class="caption">
	        					<p>Book id:<br/>
	        					Total copies:<br/>
								Available:</p>
							</div>
                            <button type="submit" id="book1" name="submit" class="form-btn semibold">Book</button> <br/>
      					</div>
					</div>
				</div>-->
				</div>
				
			</div>
		</div>
		
		<div class="footer text-center">Copyright &copy; 2018. <a href="../index.php">CMRIT Library</a></div>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>
        <script>
            window.onload = function() {
                book_details('eee');
                };
            function book_details(name)
            {
                var parameter=name;
                debugger
                $.ajax({
                    url:'http://localhost:8080/library_proj/departments/subject_display.php',
                    type: 'POST',
                    data: {id:parameter},     
                    dataType: 'json',
                    success: function(data){
                        debugger
                        load(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                                            $('#more-info').php('');
                        alert('Error Loading');
                    }
                });
            }
            function load(data)
            {
                for(var i=0;i<=data.length/2-1;i++)
                    {
                        jQuery('#id_'+(i+1)+'_Book_name').html(data[i]["Book_name"]);
                        jQuery('#id_'+(i+1)+'_total').html(data[i]["total"]);
                        jQuery('#id_'+(i+1)+'_book_author').html(data[i]["book_author"]);
                        jQuery('#id_'+(i+1)+'_published_year').html(data[i]["published_year"]);
                        jQuery('#id_'+(i+1)+'_edition').html(data[i]["edition"]);
                        jQuery('#img_'+(i+1)).attr("src",data[i]["book_image"]);
                    }
                var  j= 0;
                for(var i=data.length/2;i<=data.length;i++)
                    {
                        
                        jQuery('#id_'+(j+1)+'_available').html(data[i].available);
                        j++;
                    }
                
            }
        </script>

	</body>
</html>

