<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php include("_inc-meta.php")?>
</head>
<body>
<div>
<h1 class="overlay_h">ADD TO CART</h1>
<div class="overlay_h2">Please select a colour and quantity</div>

<!--<input type="text" name="colour" size="8" value="Natural"/>-->

<form action="index.php" method="post">
<div class="overlay_l">Size:</div> <div class="overlay_r">200 X 3.6 mm</div>
<div class="overlay_l">Price:</div> <div class="overlay_r">$32.00</div>
<div class="overlay_l">Colour:</div> 
<p class="overlay">
<select name="colour" style="margin-left:39px;margin-top:9px;">
<option value="natural">Natural</option>
</select>
</p>
 <div class="overlay_l">Quantity: </div>
 <p class="overlay">
 <input type="text" name="quantity" size="2" style="margin-left:39px;margin-top:9px;"/>
 </p>
<input type="submit" value="ADD TO CART" class="overlay_btn"/>
</div>
</form>
</body>
</html>