<?php
	$arr_date = $_POST['tdate'];
	$dep_date = $_POST['ddate'];
	$name = $_POST['iname'];
	$email = $_POST['iemail'];
	$phone = $_POST['iphone'];
	$street = $_POST['istreet'];
	$code = $_POST['icode'];
	$city = $_POST['icity'];
	$country = $_POST['icountry'];

	$con = mysql_connect("localhost","root","");

	if(!$con)
	{
		die('Could not connect;'.mysql_error());
	}

	mysql_select_db("tourismbd",$con);

	$query = "INSERT INTO accomodation(arrive_Date,Depart_Date,Full_name,Email_adress,Postal_code,Phone,City,Country)VALUES('$arr_date','$dep_date','$name','$email','$phone','$street','$code','$city','$country')";

	if(!mysql_query($query,$con))
	{
		die('Error in inserting records'.mysql_error());
	}
	else
	{
		echo "Data Inserted";
	}
?>
