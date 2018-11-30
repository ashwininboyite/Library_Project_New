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

    <title>Booked</title>
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
        <li><a href="student_login.php" class="page-scrol">Home</a></li>
         <li><a href="booked.php" class="active">My Book</a></li>
		<li><a href="renewal.php" class="page-scroll">Renewal</a></li>
		<li><a href="balance.php" class="page-scroll">Balance</a></li>
		<li><a href="index.php" class="page-scroll">login</a></li>
        
      </ul>
      </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div>
    
  <div class="body" style="background-image: url(images/bg.jpg);">  
<div class="responsive-form block-center" style="margin-top: 170px">
  <div>
      <div class="login-group homepage_admin light-wrap" id="no_book">
        <ul >
            <h2 style="color: white;">Oops No Books are Presrent !!!!...</h2>
        </ul>
      </div>
         <div id="dynamictable1"></div>
              
     
   </div>
  </div>
</div>
    <script>
            window.onload = function() {
                $('#no_book').hide();
                $('#present_id').hide();
                my_book_details();
                
                };
              function my_book_details()
              {
                  debugger
                $.ajax({
                    url:'http://localhost:8080/library_proj/my_book_fetch.php',
                    type: 'GET',
                    dataType: 'json',
                    success: function(data){
                        debugger
                        load(data);
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                                            $('#more-info').html('');
                        alert('Error Loading');
                    }
                });
              }
              
              function load(data){
                  debugger
                  if(data[0]==0)
                  {
                      $('#no_book').show();
                  }
                  else{
                      $('#present_id').show();
                      var len=data.length;
                      for(var i=0;i<len;i++)
                    {
                        jQuery('#id_'+(i+1)+'_Book_name').html(data[i]["Book_name"]);
                        jQuery('#id_'+(i+1)+'_total').html(data[i]["Book_deparment"]);
                        jQuery('#id_'+(i+1)+'_book_author').html(data[i]["book_author"]);
                        jQuery('#id_'+(i+1)+'_published_year').html(data[i]["from_date"]);
                        jQuery('#id_'+(i+1)+'_edition').html(data[i]["to_date"]);
                        //jQuery('#img_'+(i+1)).attr("src",data[i]["Book_image"]);
                        
                        var count=data.length;
                         $("#dynamictable1").show();
                         $("#dynamictable1").innerHTML='';
                         $("#sample_2").remove()
                         $("#dynamictable1").append($("<table width=100% id='sample_2' class='table table-bordered sortable tablehover'>"+ 
                                                      "<thead><tr><th align='left' valign='middle' style='font-size:18px;color: white;'>Book Id</th><th align='left' valign='middle' style='font-size:18px;color: white;'>Book Name</th>"+
	                                      "<th align='left' valign='middle' style='font-size:18px;color: white;'>Book Author</th>" + 
                                          "<th align='left' valign='middle' style='font-size:18px;color: white;'>Book Deparment</th>" +
                                          "<th align='left' valign='middle' style='font-size:18px;color: white;'>Issed date</th>" +
                                          "<th align='left' valign='middle' style='font-size:18px;color: white;'>Return Date</th>" + 
	                                      "</tr></thead><tbody>"));
                        for(var i=0;i<len;i++)
                         {
                      var table="<tr><td align='left' valign='middle' style='font-size:18px;color: white;'>"+data[i]["Book_id"]+"</td>"+
                                "<td align='left' valign='middle' style='font-size:18px;color: white;'>"+data[i]["Book_name"]+"</td>"+
                                "<td align='left' valign='middle' style='font-size:18px;color: white;'>"+data[i]["book_author"]+"</td>"+
                                "<td align='left' valign='middle' style='font-size:18px;color: white;'>"+data[i]["Book_deparment"]+"</td>"+
                                "<td align='left' valign='middle' style='font-size:18px;color: white;'>"+data[i]["from_date"]+"</td>"+
                                "<td align='left' valign='middle' style='font-size:18px;color: white;'>"+data[i]["to_date"]+"</td></tr>";
                               	$("#sample_2").append(table); 
                         }
                     $("#dynamictable1").append("</tbody></table>");
                    }
                  }
              }
          </script>
          
</body>