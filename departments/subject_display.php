<?php
    header('Access-Control-Allow-Origin: *');
    $con = mysqli_connect("localhost","root","") or die ("Unable to connect");
    mysqli_select_db($con,"library_proj");

   $id=$_POST['id'];
    #$id='Math';
    $json = array();
    
    $query="SELECT COUNT(*) as total,Book_name,book_author,published_year,edition,book_image  FROM book_details WHERE Book_deparment='".$id."' GROUP by Book_name asc";
    $query1="SELECT COUNT(*) as available  FROM book_details where status='YES' and Book_deparment='".$id."' GROUP by Book_name asc" ;
    $query_run = mysqli_query($con,$query);
    $query_run1 = mysqli_query($con,$query1);
    while($message=$query_run->fetch_assoc()){
        $json[] = $message; 
        
    }
    while($message1=$query_run1->fetch_assoc())
    {
        $json[] = $message1;
        
    }
 echo json_encode( $json );
 //echo json_encode( $json1 );
?>
