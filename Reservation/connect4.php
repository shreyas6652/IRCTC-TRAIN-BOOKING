<?php
	echo '<img src="irtc.png">';
	$a=$_POST["a1"];
	$b=$_POST["a2"];
	$c=$_POST["a3"];
	$d=$_POST["a4"];
	$e=$_POST["a5"];
	$f=$_POST["a6"];
	$g=$_POST["a7"];
	$h=$_POST["a8"];
	$i=$_POST["a9"];
	$k=$_POST["b1"];
	$l=$_POST["c1"];
	$m=$_POST["d1"];
	$USER=$_POST['ticketid'];
	echo '<h1 align="center">IRCTC RAILWAY</h1>';
	echo '<h3 align="center"><ul>Ticket Confirmation</ul></h3>';
	echo "<br>";
	echo "<br>";
	$conn=new mysqli('localhost:3307','root','','railway');
	$sql= "SELECT trainno,IRTC,classtype,noofseats,ticketid from Booking where ticketid=$USER";
	$result = $conn->query($sql);
		$sql= "SELECT trainno,IRTC,classtype,noofseats,ticketid from information where ticketid=$USER";
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc()) 
				{
					echo "<div align='left'><br> Name:";
					echo $a;
					echo "<div align='left'><br> AGE:";
					echo $k;
					echo "<div align='left'><br> SEX:";
					echo $l;
					echo "<div align='left'><br> MOBILE:";
					echo $m;
					echo "<br>TrainNo: " . $row["trainno"]. "<br>IRTC ID: " . $row["IRTC"]. "<br>ClassType:" . $row["classtype"]."<br>#Tickets:"  .$row["noofseats"]. "<br>Ticket ID: " . $row["ticketid"]. "<br>";
					echo '<br></div><div align="center"';
					echo "Tickets are booked successfull" ;
					echo "<br>";
					echo "<br>";
					echo "<br>";
					echo "Bring registeration ticket along with this final copy";
					echo "<br>";
					echo "HAPPY JOURNEY </div>";
				}
			}

				echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";echo "<br>";
				echo "<br>";
				echo "<br>";
				echo "<br>";
				echo '<img src="confirm.png" align="right">';
				echo "<br>";echo "<br>";
				echo "<br>";
				echo "<br>";echo "<br>";
				echo "If your name,ticketID,train no,IRTC and other information not printed on this page than your ticket is not booked even after getting confirmation message,Thank you";
				echo '<script>window.print(); </script>';
				$conn->close();
	header( "refresh:10;url=rcf.html");
?>