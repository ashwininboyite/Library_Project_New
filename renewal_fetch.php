
<?php

    header('Access-Control-Allow-Origin: *');
    $con = mysqli_connect("localhost","root","") or die ("Unable to connect");
    mysqli_select_db($con,"library_proj");
    $found=0;
   # $student_name=$_SESSION['stu_username'];
    $student_name='Ashwini';
    #to access the student card number;
    $query1="select card_no from borrower where name = '$student_name'";
    $query_run_1 = mysqli_query($con,$query1);
    $row1 = mysqli_fetch_array($query_run_1 , MYSQLI_ASSOC);
    $student_id=$row1['card_no']; 
   
    #to access the student book details fromdate and todate
    $json=array();
    $query2="SELECT to_date,card_no,Book_id FROM issue WHERE card_no='$student_id'";
    $query_run_2= mysqli_query($con,$query2);
    while($message1=$query_run_2->fetch_assoc())
    {
        $todate = date_create($message1['to_date']);
        $today = date_create(date("Y-m-d"));
        #$diff=date_diff($today,$todate);
        #$count = $diff->format("%a");
        
        $bookid = $message1['Book_id'];
        
        if($todate<$today)
        {
           $found=$found+1;
           $bookid = $message1['Book_id'];
           $query3=" SELECT ss.Book_id,Book_name,book_author,Book_deparment,from_date,to_date,book_image FROM book_details as bb cross JOIN issue as ss ON bb.Book_id=ss.Book_id where bb.Book_id ='$bookid' and ss.card_no = '$student_id' ";
           $query_run3 = mysqli_query($con,$query3);
           $message2=$query_run3->fetch_assoc();
           $json[] = $message2;
        }
    }
    
    if($found==0)
    {
        $json[]=0;
    }
    
    echo json_encode( $json );
    
?>
