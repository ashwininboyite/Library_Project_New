<?php
   
    header('Access-Control-Allow-Origin: *');
    $con = mysqli_connect("localhost","root","") or die ("Unable to connect");
    mysqli_select_db($con,"library_proj");
    
   # $student_name=$_SESSION['stu_username'];
    $student_name='Ashwini';
    #echo $student_name;
    
    $query1="select card_no from borrower where name = '$student_name'";
    $query_run_2 = mysqli_query($con,$query1);
    $row = mysqli_fetch_array($query_run_2 , MYSQLI_ASSOC);
    $student_id=$row['card_no']; 
    
    $query2="SELECT ss.Book_id,Book_name,book_author,Book_deparment,from_date,to_date FROM book_details as bb JOIN issue as ss WHERE bb.Book_id = ss.Book_id AND ss.card_no='$student_id'";
    $query_run = mysqli_query($con,$query2);
     
    $json=array();

    if (mysqli_num_rows($query_run)>0)
    {
        while($message1=$query_run->fetch_assoc())
        {
            $json[] = $message1;
        }
    }

    else
    {
        $json[]=0;
    }

    echo json_encode( $json );              

?>