<?php 
include('db-connection.php'); 	
$email =@$_POST['mail'];
$query = "select * from users where email='$email'";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
	$name=$row['name'];
}
if(empty($email)){
	
	echo "<span style='color:red'> please, enter email </span>";
}elseif(empty($name)){
		echo "<span style='color:green'> email available</span>";

}else{
		echo "<span style='color:red'> email not available</span>";
}
?>