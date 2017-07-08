
      <?php

//here we add the php code 
     
      if(isset($_POST['user'])&&($_POST['pass'])){
          echo $_POST['user'];
          echo $_POST['pass'];
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
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" id="head1">
               
                
            </div>
            
            <br/><br/>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                User Name :<input type="text" id="user" name="user"><br />
                <br />
                Password :<input type="password" id="pass" name="pass"><br />
                
                
                <input type="submit"  value="Sign IN">
                
                
            
            
            </form>
            
        
        </div>
    </body>
</html>
