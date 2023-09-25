<?php
$con=mysqli_connect('localhost','root','','registration');
$sql="select*From reg";
$res=mysqli_query($con,$sql);
?>
<html>
<body>
<button onclick="Print()">Print Page</button>
<script type="text/javascript">
function Print(){
window.print();
}
</script>
<br><br><br><br>
<table align="center" border="1">
<center><h1>Registration Table<h1></center>
<tr>
<td>Serial No</td>
<td>Name</td>
<td>NID/BID</td>
<td>Email</td>
<td>Date of Birth</td>
<td>Age</td>
<td>Contract</td>
<td>Gender</td>
<td>District</td>
</tr>
<?php
while($row=mysqli_fetch_assoc($res)){ ?>
<tr>
<td><?php echo $row["Serial No"]?></td>
<td><?php echo $row["Name"]?></td>
<td><?php echo $row["NID/BID"]?></td>
<td><?php echo $row["Email"]?></td>
<td><?php echo $row["Date of Birth"]?></td>
<td><?php echo $row["Age"]?></td>
<td><?php echo $row["Contract"]?></td>
<td><?php echo $row["Gender"]?></td>
<td><?php echo $row["District"]?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>