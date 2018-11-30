<?php
    session_start();
    require 'config.php';
?>

<style type="text/css">
  .body{
  position: absolute;
  
  width: 100%;
  height: 100%;
  background-size: cover;
  }

  .formgroup1 div {
    display: inline-block;
  width: 500px;
  min-height: 50px;
  background-color: #eee;
  height: auto;
  }
</style>
<head>
  <link rel="shortcut icon" href="images/logo.png" />
<!-- Heap Analytics Init -->
<!-- Load Jquery -->
  <script src="https://hrcdn.net/hackerrank/assets/base-4e953f9582ddc0e62ee5b02dbe2520ca.js"></script>
  <!-- Load jqeury-cookie separately since some routes does not load base bundle -->
  <script src="https://hrcdn.net/hackerrank/assets/jquery-cookie/jquery.cookie-0c7566bde650f04120efbfa26bad568f.js"></script>

    <title>Regiister for Library</title>
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style3.css" rel="stylesheet" type="text/css" media="all">
    <style>
        .popover-content p
        {
        margin: 0px !important;
        }
        .toggle1 {
    position: absolute;
    top: -80px;
    font-family: "Whitney SSm A", "Whitney SSm B", "Avenir", "Segoe UI", "Ubuntu", "Helvetica Neue", Helvetica, Arial, sans-serif;
    padding: 20px 0;
    width: 455px;
    height: 20px;
    font-size: 20px;
    font-weight: 700;
    color: #444;
    text-align: center;
    border: 1px solid #C2C7D0;
    background: #fafafa;
    z-index: 10;
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
        
      </button>
      <a class="navbar-brand" href="index.php">Library</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin_login.php" class="page-scroll">Home</a></li>
         <li><a href="issue.php" class="active">Issue</a></li>
		<li><a href="return.php" class="page-scroll">Return</a></li>
	       <li>
               <a href="#" ><?php echo $_SESSION['admin_username']?><b class="caret"></b></a>
                <ul>
                
                </ul>
           </li>
        
      </ul>
        
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
    
  <div class="body" style="background-image: url(images/bg.jpg);">  
<div class="responsive-form block-center" style="margin-top: 170px">
  <div class="login-group homepage_admin light-wrap">
      <div >
        <ul>
            <h2 style="color: white; font: inherit; font-size: 100%;">ISSUE FORM</h2>
      </ul>
          <form id="legacy-signup" class="legacy-form" method="POST"  action="issue.php">
              <div class="homepage_signupgroup--legacy">

                  <div class="text-center alert error" style="display:none;"></div>
                  <div class="formgroup">
                      <i class="icon-user"></i>
                      <input type="text" name="Student_id" placeholder="Student ID" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-book"></i>
                      <input type="text" name="Book_id" placeholder="Book ID" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-calendar"></i>
                      <input type="date" name="issue_date" placeholder="Issue date" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-calendar"></i>
                      <input type="date" name="return_date" placeholder="Return date" required=""/>
                  </div>
                  <input type="submit" name="submit" value="Submit" class="btn  login-button auth" style="background: black;color: white"><br>
             </div>
          </form>
          <?php 
        
        if(isset($_POST['submit']))
        {
            $Student_id = $_POST['Student_id'];
            $Book_id= $_POST['Book_id'];
            $issue_date = $_POST['issue_date'];
            $return_date = $_POST['return_date'];
            
            $query="select * from book_details where Book_id='$Book_id' and status='YES'";
            $query_run = mysqli_query($con,$query);
        
            if (mysqli_num_rows($query_run)>0)
            {
                $query_1="select * from borrower where card_no='$Student_id' and no_of_book_taken<3";
                $query_run_1 = mysqli_query($con,$query_1);
                if(mysqli_num_rows($query_run_1)>0)
                {
                    $admin_name=$_SESSION['admin_username'];
                   
                    $query_2="select card_no from admin where uname='$admin_name'";
                    $query_run_2 = mysqli_query($con,$query_2);
                    
                    $row = mysqli_fetch_array($query_run_2 , MYSQLI_ASSOC);
                    $admin_id=$row['card_no'];   
                    
                    $query_5="select no_of_book_taken from borrower where card_no='$Student_id'";
                    $query_run_5 = mysqli_query($con,$query_5);
                    $row1 = mysqli_fetch_array($query_run_5 , MYSQLI_ASSOC);
                    $count=$row1['no_of_book_taken'];
                    $count=$count+1;
                        
                    $query_3= "insert into issue values ('$Book_id','$Student_id','$issue_date','$return_date','$admin_id')";
                    $query_run3 = mysqli_query($con,$query_3) or die(mysql_error);
                    
                    
                    $query_4="update book_details set status='NO' where Book_id='$Book_id'";
                    $query_run4 = mysqli_query($con,$query_4) or die(mysql_error);
                    
                    $query_6="update borrower set no_of_book_taken='$count' where card_no='$Student_id'";
                    $query_run6 = mysqli_query($con,$query_6) or die(mysql_error);
                    
                    
                    
                        echo '<script type="text/javascript"> alert("The book is Issued") </script>';
                }
                else{
                    echo '<script type="text/javascript"> alert("Exceeding the number of issued Books") </script>'; 
                }
                
            }
            else
            {
                echo '<script type="text/javascript"> alert("The book is Not available") </script>'; 
                
            }
        }
          
    ?>
          
      </div>
  </div>