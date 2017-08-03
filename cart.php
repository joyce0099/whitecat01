<!doctype html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
    <title>White Cat - CART</title>
    <link rel="stylesheet" href = "./css/index.css">

</head>
<body>
	<div class = "main" >
		<?php include "header.php" ?>
		<div class = "cartDetail">
		    <table width = "1000" >
		    	<tr>
		    		<td width = "200"></td>
		    		<td width = "50"></td>
		    		<td width = "200">Price</td>
		    		<td>Quantity</td>
		    		<td>Total</td>
		    	</tr>
		    	<tr>
		    		<td >
		    			<a href = ""><img src= "./img/product1.jpg" width = "100px" height = "100px" alt = ""></a>
		    		<td>
		    			<a href = "">IRIS</td>
		    		</td>
		    		<td>$6.00</td>
		    		<td>
		    			 <a href = "" class = "productNum">—</a>
						 <span>     3     </span>
						 <a href = "" class = "productNum">+</a>
		    		<td>$18.00</td>
		    	</tr>
		    	<tr>
		    		<td></td>
		    		<td></td>
		    		<td></td>
		    		<td>
		    			<a href="http://localhost/public/index.php">Continue shopping</a>
		    		</td>
		    		<td>
		    			<div class = "subtotal" >
		    	            <div>Subtotal (AUD) : </div>
		                </div>
		            </td>
		    	
		        </tr>
		    
		    </table>
		    <div class = "updatecart">
		    	<a href = "" > Update Cart</a>
		    </div>
		    <div  class = "checkout">
		    	<a href="">Proceed To Checkout</a>
		    </div>

		</div>
		<?php include "footer.php" ?>
	</div>
</body>
</html>