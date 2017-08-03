<?php 
$link = mysqli_connect("localhost", "root", "123456", "whitecat");

$id = $_POST["Id"];
$password = $_POST["password"];

$sql = "select * from admin where id = '{$id}'";
if (mysqli_query($link, $sql)){

	echo "<script>location = './index.php'</script>";
}
?>