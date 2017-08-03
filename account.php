<!doctype html>
<html lang="en">
<head>
	<meta charset = "UTF-8">
    <title>White Cat - OrderHistory</title>
    <link rel="stylesheet" href = "./css/index.css">
    <style type="text/css">
    body{
  margin:0;
  padding:0 0 12px 0;
  font-size:12px;
  line-height:22px;
  font-family:"\5b8b\4f53", "Arial Narrow";
  background:#fff;
}
form, ul, li, p, h1, h2, h3, h4, h5, h6{
  margin:0;
  padding:0;
}
input, select{
  font-size:12px;
  line-height:16px;
}
img{border:0;}
ul, li{list-style-type:none;}
a{
  color:#00007F;
  text-decoration:none;
}
a:hover{
  color:#bd0a01;
  text-decoration:underline;
}
.box{
  width:150px;
  margin-left: 40px;
  margin-top: 50px;
  position: absolute;
}
.menu{
  overflow:hidden;
  border-color:#C4D5DF;
  border-style:solid;
  border-width:0 1px 1px;
}
.menu li.level1 a{
  display:block;
  height:28px;
  line-height:28px;
  background:#EBF3F8;
  font-weight:700;
  color:#5893B7;
  text-indent:14px;
  border-top:1px solid #C4D5DF;
}
.menu li.level1 a:hover{
  text-decoration:none;
}
.menu li.level1 a.current{
  background:#B1D7EF;
}
 
.menu li ul{
  overflow:hidden;
}

.menu li ul.level2 li a{
  display:block;
  height:28px;
  line-height:28px;
  background:#ffffff;
  font-weight:400;
  color:#42556B;
  text-indent:18px;
  border-top:0px solid #ffffff;
  overflow:hidden;
}
.menu li ul.level2 li a:hover {
        color:#f60;
}
</style>
</head>

<body>
	<div class = "main" >
		<?php include "header.php" ?>
		<div class="box">
            <ul class="menu">
                <li class="level1"> 
                    <a href="#none">Account Detail</a>
                    <ul class="level2">
                        <li><a href="#none">Check Account</a></li>
                        <li><a href="#none" >Edit Profile</a></li>
                        <li><a href="#none" >Change Password</a></li>
                    </ul>
                 </li>
                <li class="level1"> 
                    <a href="#none">Order History</a>
                        <ul class="level2">
                            <li><a href="#none">View History</a></li>
                            <li><a href="#none">Order Status</a></li>
                            <li><a href="#none">Give Comments</a></li>
                        </ul>
                </li>
                <li class="level1"> 
                     <a href="#none">Address Details</a>
                        <ul class="level2">
                            <li><a href="#none">Add</a></li>
                            <li><a href="#none">Delete</a></li>
                            <li><a href="#none">Manage</a></li>
                        </ul>
                </li>
              
            </ul>
        </div>
		    <div class = "accountdetail">
		    	<table >
		    		<tr>
		    			<h2>Order History</h2></br>
		    		</tr>
		    		<tr>
		    			<h4>Hello Liying Shi.  <a href=""> (Sign Out)</a></br></h4>
		    			
		    			<div>From your account dashboard you can view your recent orders, manage your shipping and billing addresses and account details.</div>
		    		</tr>
		    		<tr>
		    			
		    			<td width = "120px">Order</td>
		    			<td width = "120px">Date</td>
		    			<td width = "120px">Status</td>
		    			<td width = "120px">Total</td>
		    			<td width = "200px">Address</td>
		    			<td width = "120px"></td>
		    		</tr>
		    		<tr>
		    			<td width = "200px">

		    			</td>
		    			<td width = "120px"></td>
		    			<td width = "120px"></td>
		    			<td width = "120px"></td>
		    			<td width = "120px"></td>
		    			<td><a href="">View</a></td>
		    		</tr>
		    	</table>
		    </div>

		</div>
		<?php include "footer.php" ?>
	</div>
</body>
</html>