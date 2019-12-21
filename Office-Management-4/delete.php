<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<iframe src="header.html" style="border:2px solid black;" height="160" width="100% "></iframe>

<?php
	$dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    if(! $conn )
    {
    	die('Could not connect: ' . mysqli_connect_error());
	}

	 $id = mysqli_real_escape_string($conn, $_POST['emp_id']);
//	$designation = $_POST['dropdown'];

	$sql="SELECT emp_id,emp_name,dob,age,sex,designation,mob_number,emp_address,city, emp_salary, join_date FROM employeee WHERE emp_id='$id'";

	mysqli_select_db($conn, 'admin1');
	$retval=mysqli_query($conn, $sql);

	if(!$retval)
		die('Could not get data: ' . mysqli_error($conn));

	echo "<table class = 'table table-hover'>";
	echo "<thead>";
	echo "<td width = '20'>ID</td>";
	echo "<td width = '120'>Name</td>";
	echo "<td width ='100'>Date of Birth</td>";
	echo "<td width ='50'>Age</td>";
	echo "<td width ='40'>Sex</td>";
	echo "<td width ='80'>Designation</td>";
	echo "<td width ='100'>Mobile</td>";
	echo "<td width ='200'>Address</td>";
	echo "<td width ='50'>City</td>";
	echo "<td width ='50'>Salary</td>";
	echo "<td width ='50'>Join Date</td>";
	echo "</thead>";

	while($row = mysqli_fetch_array($retval))
	{
		if($row['emp_id']==$id)
		{
		echo "<tr>";
		echo "<td>{$row['emp_id']}</td>".
			"<td>{$row['emp_name']}</td> ".
			"<td>{$row['dob']} </td>".
			"<td>{$row['age']} </td>".
			"<td>{$row['sex']} </td>".
			"<td>{$row['designation']} </td>".
			"<td>{$row['mob_number']} </td>".
			"<td>{$row['emp_address']} </td>".
			"<td>{$row['city']} </td>".
			"<td>{$row['emp_salary']} </td>".
			"<td>{$row['join_date']} </td>";
		echo "</tr>";
			}
	}


	$sql="DELETE FROM employeee WHERE emp_id='$id'";
	$retval=mysqli_query( $conn, $sql);
	if(!$retval)
		die('Could not get data: ' . mysqli_error($conn));
	else
	{
		echo "<tr>";
		echo "<td>Deleted successfully</td>";
		echo "</tr>";
	}

	echo "</table>";
//	echo "<br>Fetched data successfully\n";
   	mysqli_close($conn);
?>
<div align="center">
<a href="show.php">
  <button class="btn btn-secondary" style="font-size:32px;">
    <i class="fa fa-home"> HOME </i>
  </button>
</a>
</div>
</body>
</html>
