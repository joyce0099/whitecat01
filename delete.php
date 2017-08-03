<?php 
$link = mysqli_connect("localhost", "root", "123456", "whitecat");
$sql = "select * from user";
$result = mysqli_query($link, $sql);

$id = $_GET["id"];
$sql = "delete from user where id = {$id}";
if (mysqli_query($link, $sql)){

	echo "<script>location = './index.php'</script>";
}
?>