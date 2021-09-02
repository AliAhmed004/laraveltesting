<!DOCTYPE html>
<html>
<head>
<style>
.product_container
{ 
  width:100%;
  height:auto;
  display: flex;
}
.f_child
{
  width:33.3%;
  height:200px;
  border: 1px solid black;
}
</style>
</head>
<body>

  <h3>Products</h3>

  <div class="product_container" >
  <?php
  $count=count($alldata);
  for($i=0; $i<$count; $i++)
  {
  ?>
  <div class="f_child" >
  <!-- explode(" ",$data[$i]->desc) -->
 <?php 
 $title=explode(" ",$alldata[$i]->color);
//  $title=$title + $title[0];
//  echo $title;
print_r($title);
 ?>
               
</div> 
<?php } ?>
</body>
</html>
