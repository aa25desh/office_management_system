<?php

      $dbhost = 'localhost';
      $dbuser = 'root';
      $dbpass = '';
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

      if(! $conn ) {
         die('Could not connect: ' . mysqli_error($conn));
      }


            $un = $_POST['Username'];
            $ps = $_POST['Password'];
            if(is_numeric($ps))
            {
                  echo "Data is not numeric";
            }
            $sql = "INSERT INTO admin ". "(Username, Password)".
            "VALUES('$un', '$ps')";

            mysqli_select_db($conn,'admin2');
            $retval = mysqli_query($conn, $sql);

            if(! $retval )
            {
               die('Could not enter data: ' . mysqli_error($conn));
            }
            else
            {
               echo "Entered data successfully\n";
               header("location: Index.php");
            }
            mysqli_close($conn);

?>
