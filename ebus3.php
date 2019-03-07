<!DOCTYPE html>
<html>
<body>
      <style>
            body{
                background-color: #848484;
            }
            </style>
    
<center>
    
    <p>
    <h1><b><u>Purchase Receipt</u></b></h1>
    <br />
    <br />
  
<!--    //Starting session to get the variable from the last page -->
<?php
session_start();
$totalValue2 = $_POST['txtTotal'];     
$fullNameValue = $_POST['txtName'];

echo "The Name is: ".$fullNameValue.".";
echo "<br></br>";
echo "The Total Value Is $".$totalValue.".";
echo "Thanking You! Please come again!";

?>
</p>
</center>
</body>
</html><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

