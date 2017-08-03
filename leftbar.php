<!DOCTYPE html>
<html>
<head>
<meta charset=" utf-8">
<title>Admin Managment</title>
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
  margin:0 auto;
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
.menu li ul.level2{
  display:none;
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
<script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $(".level1 > a").click(function(){
    $(this).addClass("current") 
    .next().show() 
    .parent().siblings().children("a").removeClass("current")
    .next().hide(); 
    return false;
  }); 
});
</script>
</head>
<body>
<div class="box">
  <ul class="menu">
    <li class="level1"> 
      <a href="#none">Client Managment</a>
      <ul class="level2">
        <li><a href="./index.php" target = "right">List Client</a></li>
        <li><a href="./adduser.php" target = "right" >Add Client</a></li>
        <li><a href="#none" >Delete Client</a></li>
      </ul>
    </li>
    <li class="level1"> 
      <a href="#none">Admin Managment</a>
      <ul class="level2">
        <li><a href="#none">Add</a></li>
        <li><a href="#none">Edit</a></li>
        <li><a href="#none">Delete</a></li>
      </ul>
    </li>
    <li class="level1"> 
    <a href="#none">Production Managment</a>
      <ul class="level2">
        <li><a href="#none">List All</a></li>
        <li><a href="#none">Add</a></li>
        <li><a href="#none">Edit</a></li>
        <li><a href="#none">Delete</a></li>
      </ul>
    </li>
    <li class="level1"> 
    <a href="#none">Order Managment</a>
      <ul class="level2">
        <li><a href="#none">List All</a></li>
        <li><a href="#none">Add</a></li>
        <li><a href="#none">Edit</a></li>
        <li><a href="#none">Delete</a></li>
      </ul>
    </li>
    <li class="level1"> 
    <a href="#none">System Managment</a>
      <ul class="level2">
        <li><a href="#none">Admin Change</a></li>
        <li><a href="./logout.php" target = "_top">Exit</a></li>
        <li><a href="../index.php" target = "_top">Website</a></li>
      
      </ul>
    </li>
  </ul>


</div>
</body>
</html>