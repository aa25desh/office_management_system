<?php
   if(isset($_POST['add']))
   {
      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

      if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }

            $emp_name = $_POST['emp_name'];
            $sex = $_POST['sex'];
            $dob = $_POST['dob'];
            $age = $_POST['age'];
            $designation = $_POST['dropdown'];
            $emp_address = $_POST['emp_address'];
            $mob_number = $_POST['mob_number'];
            $emp_salary = $_POST['emp_salary'];
            $city = $_POST['city'];

            $sql = "INSERT INTO employeee ". "(emp_name,dob,age,sex,designation,mob_number,emp_address,city, emp_salary, join_date) ".
            "VALUES('$emp_name', '$dob', '$age', '$sex', '$designation', '$mob_number', '$emp_address','$city', '$emp_salary', NOW())";

            mysqli_select_db($conn,'admin1');
            $retval = mysqli_query($conn, $sql);

            if(! $retval )
            {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            else
            {
               echo "Entered data successfully\n";
               header("location: show.php");
            }
            mysqli_close($conn);
   }
?>
