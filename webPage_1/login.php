<?php
session_start();
//here we add the php code
if(isset($_POST['user'])&&($_POST['pwd'])){
    $userName= trim($_POST['user']);
    $pass = trim($_POST['pwd']);
   
    include_once 'includes/dbFunctionClass.php';
    
     $handler = new dbFunctionClass();
     $status =$handler->logIn("users",$userName,$pass);
     if($status){
                    $_SESSION['admin']=1;
                    $_SESSION['userName']=$status['user_name'];
                    $_SESSION['userId']=$status['password'];
                    $_SESSION['page']='login.php';
                    header('location:main.php');
                    
                }else{
                    //if the user enter the system as admin check if his credentials not correct 
                    //inform him in a message 
                    echo "wrong username or password";
                }
            }else{
                echo "please fill out username and password fields";
            }
    



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
        $(document).ready(function(){ 
         $("#log").on("click",function(e){
            e.preventDefault();
             var user1 =$('#user').val();
             var pass1 = $('#pwd').val();
               
                $.post("http://localhost/webPage_1/login.php",{user1:user1},function(data){
                     //$('#feedback').html(data);
   
                });
            
         });
    });

       
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" id="head1">
                <span id="headLog">German Center Services</span>
            </div>
            <div id="logInFrom" class="row">
                
                <fieldset>
                    <legend>User login </legend>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group">
                        <label>User Name:</label>
                        <input type="text" class="form-control"  name="user">
                    </div>
                    <div class="form-group">
                    <label>Password:</label>
                    <input type="password" class="form-control"  name="pwd">
                    </div>
                          <input type="submit"  value="Sign In"  class="btn btn-default" >
                    </form> 
                    </fieldset>
            </div>

            
        
        </div>
    </body>
</html>
