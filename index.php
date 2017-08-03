<?php 
$link = mysqli_connect("localhost", "root", "123456", "whitecat");
$sql = "select * from user";
$result = mysqli_query($link, $sql);

$length = 2;
$page = isset($_GET["p"])?$_GET["p"]:1;

$sqlRow = "select count(*) from user";
$row = mysqli_query($link, $sqlRow);
// Total row number
$rowCount = mysqli_fetch_row($row);
$rowNum = $rowCount[0];
$offset = ($page - 1) * $length;

//Select data every page.
$prevPage = $page - 1;
$nextPage = $page + 1;
$pageCount = ceil($rowNum / $length);

// limit Nextpage 
if ($nextPage >= $pageCount) { 
	$nextPage = $pageCount;
}
if ($prevPage == 0) {
	$prevPage =1;
	# code...
}

$sql1 = "select * from user limit $offset, $length";
$result1 = mysqli_query($link, $sql1);
?>
<!doctype html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Admin Index</title>
	<link rel="stylesheet" href = "./css/index.css">
</head>
<body>
	<div class = "main">
		<?php include "./header.php" ?>

		<div class = "right_table">
        	<table>
	        	<tr> 
			        <th>ID</th>
			        <th>Name</th>
			        <th>Email</th>
			        <th>Customer Class</th>		
	     	        <th>Total Purchase</th>

		        </tr>
		        <?php 
	                while ($row = mysqli_fetch_assoc($result1)){
	           	          echo "<tr>";
	     	              echo "<td>{$row["id"]}</td>";
                          echo "<td>{$row["username"]}</td>";
                          echo "<td>{$row["email"]}</td>";
                          echo "<td>{$row["class"]}</td>";
                          echo "<td><a href = delete.php?id={$row["id"]}>Delete</a></td>";
                          echo "</tr>";
	                }      
		    
		       ?>
	        </table>
	        <h3>
	        	<a href="index.php?p=<?php echo $prevPage ?>">Previous Page  </a> 

	        	<a href="index.php?p=<?php echo $nextPage ?>">  Next Page</a>
	        </h3>
	    </div>

	</div>
</body>
</html>
