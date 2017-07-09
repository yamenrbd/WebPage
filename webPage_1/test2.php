<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'includes/dbFunctionClass.php';

$handler = new dbFunctionClass();


$result = $handler->customerTable();


 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
  {
  echo "<tr>";
  echo "<td>".$row['customer_name']."</td>";
  echo "<td>".$row['Email']."</td>";
  echo "<td>".$row['phone']."</td>";
  echo "</tr>";
  echo "</table>";
  
  }

 

