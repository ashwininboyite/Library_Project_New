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
</style>
<head>

<!-- Heap Analytics Init -->
<!-- Load Jquery -->
  <script src="https://hrcdn.net/hackerrank/assets/base-4e953f9582ddc0e62ee5b02dbe2520ca.js"></script>
  <!-- Load jqeury-cookie separately since some routes does not load base bundle -->
  <script src="https://hrcdn.net/hackerrank/assets/jquery-cookie/jquery.cookie-0c7566bde650f04120efbfa26bad568f.js"></script>

    <title>Sign up for Library</title>
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="https://hrcdn.net/hackerrank/assets/external_libraries-f3fc46efd0145cd4568e69ec51cabdee.js"></script>
    <script src="https://hrcdn.net/hackerrank/assets/auth-555bf31baf2cfee8eaaf84061259466f.js"></script>
    <style>
        .popover-content p
        {
        margin: 0px !important;
        }
    </style>
</head>
<body>
  <div class="body" style="background-image: url(images/bg.jpg);">
<div class="responsive-form block-center" style="margin-top: 250px">
  <div class="login-group homepage_admin light-wrap">
      <ul class="login_tab unstyled horizontal clearfix">
          <li class="signup-toggle toggle active"><a href="/student_login" data-toggle="tab">Student Login</a></li>
          <li class="login-toggle toggle "><a href="admin_login" data-toggle="tab">Admin Login</a></li>
      </ul>
      <div class="homepage_signup signup " id="student_login">
          <form id="legacy-signup" class="legacy-form" method="POST">
              <div class="homepage_signupgroup--legacy">

                  <div class="text-center alert error" style="display:none;"></div>
                  <div class="formgroup">
                      <i class="icon-user"></i>
                      <input id="login" type="text" name="stu_username" placeholder="Username or email"/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-lock"></i>
                      <input id="password1" type="password" name="stu_password" placeholder="Password"/>
                  </div>
                  <input type="submit" name="login1" class="btn  login-button auth" style="background: black;color: white"><br>
                  <a href="student_register.php"><input type="button" style="background: black;color: white" value="Register" class="btn  login-button auth"></a>
             </div>
          
          </form>
          <?php
          if (isset($_POST['login1'])) 
          {
            $stu_username=$_POST['stu_username'];
            $stu_password=$_POST['stu_password'];

            $query="select uname,pword from BORROWER where uname='$stu_username' AND pword ='$stu_password'";

            $query_run=mysqli_query($con,$query);
            if (mysqli_num_rows($query_run)>0) 
            {
                $_SESSION['stu_username']=$stu_username;
                header('location:student_login.php');
            }
            else
            {
              echo '<script type="text/javascript"> alert("Invalid Credential !") </script>';
            }
          }
          ?>
      </div>

      <div class="login hide" id="admin_login">
          <form id="legacy-login" class="legacy-form Bizible-Exclude" method="POST">
              <div class="homepage_signupgroup--legacy">
                  <div class="text-center alert error" style="display:none;"></div>
                  <div class="formgroup">
                      <i class="icon-user"></i>
                      <input id="login" type="text" name="admin_username" placeholder="Username or email"/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-lock"></i>
                      <input id="password" type="password" name="admin_password" placeholder="Password"/>
                  </div>
                  <input type="submit" style="background: black;color: white" name="login2" value="Login" class="btn  login-button auth"><br>
             </div>
          </form>
          <?php
          if (isset($_POST['login2'])) 
          {
            $admin_username=$_POST['admin_username'];
            $admin_password=$_POST['admin_password'];

            $query1="select uname,pword from ADMIN where uname='$admin_username' AND pword ='$admin_password'";

            $query_run1=mysqli_query($con,$query1);
            if (mysqli_num_rows($query_run1)>0) 
            {
                $_SESSION['admin_username']=$admin_username;
                header('location:admin_login.php');
            }
            else
            {
              echo '<script type="text/javascript"> alert("Invalid Credential !") </script>';
            }
          }
          ?>
      </div>
  </div>
      </div>
    </div>
</body>
