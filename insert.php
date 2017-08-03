<?php 
$link = mysqli_connect("localhost", "root", "123456", "whitecat");

$username = $_POST["username"];
$email = $_POST["email"];
$password = md5($_POST["password"]);


$sql = "insert into user(username, password, email) values('{$username}', '{$password}', '{$email}')";
if (mysqli_query($link, $sql)){

	echo "<script>location = './index.php'</script>";
}
?>