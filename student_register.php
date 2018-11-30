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
<head>

<!-- Heap Analytics Init -->
<!-- Load Jquery -->
    <link rel="shortcut icon" href="images/logo.png" />
<!--css-->
    <title>Regiister for Library</title>
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style2.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
  <div class="body" style="background-image: url(images/bg.jpg);">  
<div class="responsive-form block-center" style="margin-top: 70px">
  <div class="login-group homepage_admin light-wrap">
      <div class="homepage_signup signup " id="signup">
        <ul class="login_tab unstyled horizontal clearfix">
          <li class="login-toggle1 toggle1">Registration form</li>
      </ul>
          <form id="legacy-signup" class="legacy-form" method="POST"  action="student_register.php">
              <div class="homepage_signupgroup--legacy">

                  <div class="text-center alert error" style="display:none;"></div>
                  <div class="formgroup">
                      <i class="icon-user"></i>
                      <input type="text" name="name" placeholder="Name" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-pencil"></i>
                      <input type="text" name="card_no" placeholder="Card number" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-phone"></i>
                      <input type="text" name="phno" placeholder="Phone number" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-mail"></i>
                      <input type="text" name="email" placeholder="Email" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-user"></i>
                      <input type="text" name="username" placeholder="User Name" required=""/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-lock"></i>
                      <input type="password" name="password" placeholder="Password"/>
                  </div>
                  <div class="formgroup">
                      <i class="icon-lock"></i>
                      <input type="password" name="cpassword" placeholder="Confirm Password"/>
                  </div>
                  <input type="submit" name="register" value="Register" class="btn  login-button auth" style="background: black;color: white"><br>
                  <a href="login.php"><input type="button" style="background: black;color: white" value="Back" class="btn  login-button auth"></a>
             </div>
          </form>
          
      </div>
  </div>
 </div>
</div>
  <?php 
        
        if(isset($_POST['register']))
        {
            $name = $_POST['name'];
            $card_no = $_POST['card_no'];
            $phno = $_POST['phno'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            
            if(!preg_match("/^[a-zA-Z ]*$/",$name))
              {
                echo '<script type="text/javascript"> alert("Only letters and white space allowed") </script>';
                
                      if($password==$cpassword)
                      {
                         $query="select * from BORROWER where uname='$username'";
                         $query_run = mysqli_query($con,$query);

                         if (mysqli_num_rows($query_run)>0)
                          {
                              echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>'; 
                            
                          }
                      }
                      else
                      {
                             echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';
                      }  
                   
              }

              else
              {
              
                  $query2= "insert into BORROWER (card_no,name,ph_no,email,uname,pword) values ('$card_no','$name','$phno','$email','$username','$password')";
                  $query_run2 = mysqli_query($con,$query2);

                  if ($query_run2) 
                  {
                     echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
                  }
                  else
                  {
                     echo '<script type="text/javascript"> alert("Error!") </script>';
                  }
              }    
        }
    ?>
</body>
