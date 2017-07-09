<?php

//here we add the php code 

include_once 'includes/dbFunctionClass.php';

$handler = new dbFunctionClass();


$rowNumber = $handler->numRow('customer');

$customer = $handler->customerTable();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WEB PAGE TEST 1</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href="style.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js" ></script>
        <script src="includes/ajax.googleapis.com_ajax_libs_jquery_3.0.0_jquery.min.js"></script>
        <script>
        //here we add the Jquery and java script    
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" id="head1">
                <div class="row" id="head1">
                <span id="headLog">German Center Services</span>
            </div>
            </div>
            
            <div class="row" id="head2">
                <div class="topnav" id="myTopnav">
                    <a href="#customer" id="customer" class="bigButton">customer</a>
                    <a href="#assest" id="assest" class="bigButton">assess</a>
                    <a href="#ticket" id="ticket" class="bigButton">ticket</a>
                    <a href="#estimate" id="estimate" class="bigButton">estimate</a>
                    <a href="#invoice" id="invoice" class="bigButton">invoice</a>
                    <a href="#inventry" id="inventry" class="bigButton">inventry</a>
                    <a href="#parts" id="parts" class="bigButton">parts</a>
                  
                </div> 
            </div>
            <div>
                <p id="label1">
                    New Customer <button class="btn btn-teal btn-sm" 
                    onclick="window.location.href='main.php'" id="cancel1">cancel
                    </button></p>
                
                
            </div>
            
     
            
            
    </body>
</html>
