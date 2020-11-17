<?php
	$Comp_No=time();
	$conn= mysqli_connect("localhost","evoting","evoting","Complain");
	$sql="insert into Complaint(Complain_No,Employee_Id,Complain_Type,Description,Complain_Date) values('".$Comp_No."','".$_POST["id"]."','".$_POST["Ctype"]."','".$_POST["desc1"]."','".date("Y/m/d")."');";
	mysqli_query($conn,$sql);
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="cform1.css"/>
 </head>
 
 <body style="overflow: hidden;">  
 	<div class="container">
 		<div id="header"> 
 		<center>
 			<div id="nav">
 			<br>
 				<p style="color:#1e58c6;font-size:40px">Thank you!!!!</p>
 				<p style="font-size: 25px">Your complain is registered successfully.</p>
			<br>
			<?php
				echo "<p>Complain No:<strong>".$Comp_No."</strong></p>";
			?>
 			</div>
 		</center>
 	</div>
 	</div>
 	<?php header("Refresh:1.5; url=EmpHome.html");?>
 </body>
 </html>