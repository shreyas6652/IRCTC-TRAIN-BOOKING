<?php
echo '<img src="irtc.png">';
echo '<h1 align="center">IRCTC RAILWAY</h1>';
echo '<h3 align="center"><ul>Ticket Cancellation</ul></h3>';
	$IRTC=$_POST['IRTC'];
	$USER=$_POST['ticketid'];
	if($USER=="")
	{
		echo "Please fill ticket-ID";
		header("refresh:3;url=rcf.html");
	}
	else{
	$conn=new mysqli('localhost:3307','root','','railway');
	$s=date("Y-m-d");
	$sql= "SELECT trainno,IRTC,classtype,noofseats,ticketid from Booking where ticketid=$USER AND IRTC='$IRTC' AND date1>'$s' ";
	$result = $conn->query($sql);
	$count = mysqli_num_rows($result);
	
	if($count==0)	
	{

		echo "INVALID TICKET-ID OR IRCTC ID OR Date is expired of cancellation" ; 
		header( "refresh:8;url=rcf.html");
	}
else{
	if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		echo "The information for the person who is cancelling tickets are below ";
        echo "<br>TrainNo: " . $row["trainno"]. "<br>IRTC ID: " . $row["IRTC"]. "<br>ClassType:" . $row["classtype"]."<br>#Tickets:"  .$row["noofseats"]. "<br>Ticket ID: " . $row["ticketid"]. "<br>";
		echo "<br>";
		echo "ticket have been successfully cancelled <br>";
    }
}
	$sqla = "DELETE FROM information WHERE ticketid=$USER";
	$sql = "DELETE FROM Booking WHERE ticketid=$USER AND IRTC='$IRTC'";
if ($conn->query($sql) === TRUE ) {
    echo "<br>";
} else {
    echo "Cancellation is not possible due to wrong in IRTC ID or Ticket no or Train is missed <br>" . $conn->error;
}
if ($conn->query($sqla) === TRUE ) {
    echo "<br>";
} else {
    echo "Cancellation is not possible due to wrong in IRTC ID or Ticket no or Train is missed <br>" . $conn->error;
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '<img src="cancel.png" align="right">';
echo '<script> window.print(); </script>';
header( "refresh:10;url=rcf.html");
$conn->close();
}
	}
?>
