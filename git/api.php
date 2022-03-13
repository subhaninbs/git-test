<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn=mysqli_connect($servername,$username,$password,$dbname); 
$sql="select * from status";
$res_data=mysqli_query($conn,$sql);
//$all_arrays=[];
while($restult_data=mysqli_fetch_assoc($res_data)){
	

$all_arrays[] = array(
'customer_id'=>$restult_data['customer_id'],
'desctiption'=>$restult_data['desctiption']
);
}
	$myArr['result']=$all_arrays;
echo json_encode($myArr);
exit;
?>