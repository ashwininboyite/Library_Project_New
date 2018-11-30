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
         <li><a href="issue.php" class="page-scroll">Issue</a></li>
		<li><a href="return.php" class="active">Return</a></li>
		<li><a href="index.php" class="page-scroll">Logout</a></li>
        
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
            <h2 style="color: white; font: inherit; font-size: 100%;">RETURN FORM</h2>
      </ul>
          <form id="legacy-signup" class="legacy-form" method="POST"  action="student_register.php">
              <div class="homepage_signupgroup--legacy">

                  <div class="text-center alert error" style="display:none;"></div>
                  <div class="formgroup">
                      <i class="icon-user"></i>
                      <input type="text" name="Student_id" placeholder="Student ID" required=""/>
                  </div>
                  <input type="submit" name="submit" value="Submit" class="btn  login-button auth" style="background: black;color: white"><br>
             </div>
          </form>
      </div>
  </div>