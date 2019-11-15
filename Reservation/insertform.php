<?php
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$USN=$_POST['USN'];
$DeptID=$_POST['DeptID'];
$EventID=$_POST['EventID'];
$Sem=$_POST['Sem'];
$Gender=$_POST['Gender'];
$Phone_no=$_POST['Phone_no'];
$Email=$_POST['Email'];
$Category=$_POST['Category'];
$con=new mysqli('localhost:3307','root','','fest_management');
if($con->connect_error){
    die('Connection Failed  : '.$con->connect_error);
}
else{
   $stmt=$con->prepare("insert into registration(Fname,Lname,USN,DeptID,EventID,Sem,Gender,Phone_no,Email,Category) values(?,?,?,?,?,?,?,?,?,?)");
   $stmt->bind_param("ssssississ",$Fname,$Lname,$USN,$DeptID,$EventID,$Sem,$Gender,$Phone_no,$Email,$Category);
   $stmt->execute();
   echo "Successfully registered...";
   $stmt->close();
   $con->close();
}
?>