<?php
$conn = mysqli_connect('localhost', 'root', '', 'student db');

if(mysqli_connect_error())
{

  $count = 0;
}
else
{
  $count = 1;
}
if($count==1)
{
  // display message that database connection established
echo "<p>Connection to MySQL database using PHP with MySQLi
      established successfully.</p>";
}
else
{
  // display message that database connection is not established
  echo "<p>Error occurred while connecting to the database!</p>";
}


$smt="SELECT * FROM student";


if ($result=mysqli_query($conn,$smt)){

echo '<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>USN</th>
    <th>Branch</th>
  </tr>
';

$data=array();

$i=0;

while ($row=mysqli_fetch_row($result))
    {

      $id=$row[0];
      $name=$row[1];
      $usn=$row[2];
      $br=$row[3];
      echo '<tr>
        <td>'.$row[0].'</td>
        <td>'.$row[1].'</td>
        <td>'.$row[2].'</td>
        <td>'.$row[3].'</td>
      </tr>';

      $data[$i++]=$usn;




  }
}
  // Free result


  echo '</table>';

  mysqli_free_result($result);

      // echo implode(',',$data);
      echo "<br>";

      for($i=0; $i<count($data)-1; $i++) {
  	     $min = $i;
      	for($j=$i+1; $j<count($data); $j++) {
      		if ( strcmp($data[$j],$data[$min])<0) {
      			$min = $j;
  		}
  	}
      $data = swap_positions($data, $i, $min);
  }

  function swap_positions($data1, $left, $right) {
  	$backup_old_data_right_value = $data1[$right];
  	$data1[$right] = $data1[$left];
  	$data1[$left] = $backup_old_data_right_value;
  	return $data1;
  }


    // echo implode(',',$data);

echo '<h1>Selection Sorted Result</h1><br>';

    echo '<table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>USN</th>
        <th>Branch</th>
      </tr>
    ';


for($i=0;$i<count($data);$i++){
    $smt="SELECT * FROM student where USN='".$data[$i]."'";
$res=mysqli_query($conn,$smt);

    if ($res){

      while ($row=mysqli_fetch_row($res))
          {

          $id=$row[0];
          $name=$row[1];
          $usn=$row[2];
          $br=$row[3];
          echo '<tr>
            <td>'.$row[0].'</td>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
          </tr>';
}

    }
    else{
      echo 'fail';
    }
  }
      // Free result

mysqli_close($conn);

 ?>