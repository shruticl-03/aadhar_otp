<?php

include("db.php");

date_default_timezone_set("Asia/Kolkata");


if (isset($_REQUEST["kycSubmit"])) {

    $val = $_REQUEST['Name'];
	$Aadhar_No = $_REQUEST['Aadhar-No'];
	$Address = $_REQUEST['Address'];
	$Careof = $_REQUEST['Careof'];
	$Country = $_REQUEST['Country'];
	$DOB = $_REQUEST['DOB'];
    $District = $_REQUEST['District'];
    $Gender = $_REQUEST['Gender'];
    $House = $_REQUEST['House'];
    $Image = $_REQUEST['adhar-image'];
    $Landmark = $_REQUEST['Landmark'];
    $Locality = $_REQUEST['Locality'];
    $Name = $_REQUEST['Name'];
    $Pincode = $_REQUEST['Pincode'];
    $Post_Office = $_REQUEST['Post-Office'];
    $Relatationship_type = $_REQUEST['Relatationship-type'];
    $Relative_Name = $_REQUEST['Relative-Name'];
    $State = $_REQUEST['State'];
    $Street = $_REQUEST['Street'];
    $Sub_District = $_REQUEST['Sub-District'];
    $Village = $_REQUEST['Village/Town/City'];
    $status = $_REQUEST['status'];


	// Insert the new profile if the contact doesn't exist
	$cust_info = "INSERT INTO customer(Aadhar_No,Address,Careof,Country,DOB,District,Gender,House,Image,Landmark,Locality,Name,Pincode,Post_Office,Relatationship_type,Relative_Name,State,Street,Sub_District,Village,status) VALUES('$Aadhar_No','$Address','$Careof','$Country','$DOB','$District','$Gender','$House','$Image','$Landmark','$Locality','$Name','$Pincode','$Post_Office','$Relatationship_type','$Relative_Name','$State','$Street','$Sub_District','$Village','$status')";

	if (mysqli_query($con, $cust_info)) {
		echo "<script>alert('Aadhar details submited successfully');</script>";
		echo "<script>setTimeout(\"location.href = 'index.php';\",150);</script>";
	} else {
		echo "<script>alert('Failed to submit the aadhar details');</script>";
		echo "<script>setTimeout(\"location.href = 'index.php';\",150);</script>";
	}
}
