<?php
    header('Access-Control-Allow-Origin: *');
    $con = mysqli_connect("localhost","root","") or die ("Unable to connect");
    mysqli_select_db($con,"library_proj");
    $found=0;
    $id=$_POST['id'];
    $result = array();
    #$id='Cs_11';
   # $student_name=$_SESSION['stu_username'];
    $student_name='Ashwini';
    #to access the student card number;
    $query1="select card_no from borrower where name = '$student_name'";
    $query_run_1 = mysqli_query($con,$query1);
    $row1 = mysqli_fetch_array($query_run_1 , MYSQLI_ASSOC);
    $student_id=$row1['card_no']; 
    
    $query2="SELECT * FROM issue WHERE card_no='$student_id' and Book_id='$id'";
    $query_run_2 = mysqli_query($con,$query2);
    while($message1=$query_run_2->fetch_assoc())
    {
        $today_str=date("Y-m-d");
        $todate = date_create($message1['to_date']);
        $today = date_create(date("Y-m-d"));
        $diff=date_diff($today,$todate);
        $count = $diff->format("%a");
        #echo $count;
        $query3 = "SELECT amount_details FROM borrower WHERE card_no='$student_id'";
        $query_run_3 = mysqli_query($con,$query3);
        $row2 = mysqli_fetch_array($query_run_3 , MYSQLI_ASSOC);
        $amount=$row2['amount_details'];
        #echo $amount;
        if($count < $amount)
        {
            
            $amount = $amount - $count;
            $next_date = date ('Y-m-d', strtotime ($today_str ."+6 days"));
            
            $query4="UPDATE issue set  from_date = '$today_str' WHERE card_no='$student_id' and Book_id='$id'";
            $query_run_4 = mysqli_query($con,$query4);
            
            $query5="UPDATE issue set  to_date = '$next_date' WHERE card_no='$student_id' and Book_id='$id'";
            $query_run_5 = mysqli_query($con,$query5);
            
            $query6="INSERT INTO payment_details  VALUES ('$id','$student_id','$count','$today_str')";
            $query_run_6 = mysqli_query($con,$query6);
            
            $query7="UPDATE borrower set  amount_details = '$amount' WHERE card_no='$student_id'";
            $query_run_7 = mysqli_query($con,$query7);
            
            $result[]='Passed';
            
        }
        else{
            $result[]='Failed';
        }
    }
        echo json_encode( $result );     
    ?>
