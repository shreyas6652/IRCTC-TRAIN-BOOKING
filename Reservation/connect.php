DROP VIEW ffine;
<?php
echo '<img src="irtc.png">';
echo '<h1 align="center">IRCTC RAILWAY</h1>';
echo '<h3 align="center"><ul>Registration Confirmation</ul></h3>';
	$trainno=$_POST['trainno'];
	$IRTC=$_POST['IRTC'];
	$classtype=$_POST['classtype'];
	$noofseats=$_POST['noofseats'];
	$date1=$_POST['Date1'];
	$at1=$_POST['at'];
	$reservation_upto=$_POST['reservation_upto'];
	if($trainno=="" or $IRTC=="" or $classtype=="" or $noofseats=="" or $date1=="" or $at1=="" or $reservation_upto=="")
	{
		echo "Fill complete information";
		header("refresh:2;url=rcf.html");
	}
	else{
	$ticketid=rand(100000,10000000);
	$s=date("Y-m-d");
	$conn=new mysqli('localhost:3307','root','','railway');
	if($conn->connect_error){
		die('Connection failed :'.$conn->connect_error);
	}
	
	else{
		$stmt = $conn->prepare("insert into Booking(trainno,IRTC,classtype,noofseats,date1,at1,reservation_upto,ticketid)values( ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param('ississsi',$trainno,$IRTC,$classtype,$noofseats,$date1,$at1,$reservation_upto,$ticketid);
		$stmt->execute();
		echo "ticket no  : ";
		echo $ticketid;
		echo "<br>";
		echo "train no   : ";
		echo $trainno;
		echo "<br>";
		echo "IRTC ID    : ";
		echo $IRTC;
		echo "<br>";
		echo "Class      : ";
		echo $classtype;
		echo "<br>";
		echo "Date 		 : ";
		echo $date1;
		echo "<br>";
		echo "From		 : ";
		echo $at1;
		echo "<br>";
		echo "Destination: ";
		echo $reservation_upto;
		echo "<br>";
		echo "<br>";
		echo '<h1 style="color:red">Registration sucessfull</h1>' ;
		echo "<br>";
		echo "<br>";
		echo '<footer><p>This is just registeration ticket, Please fill Information to confirm the ticket<br></p></footer>';
		} 
		echo '<script> window.print(); </script>';
		$stmt->close();
		$conn->close();
		header( "refresh:5;url=payment.html" );
	}
?>


