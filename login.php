<!DOCTYPE html>  
 <html>  
      <head>  
        <title>login</title>
      </head>  
      <body>  
    
           <div >  
                <h3>Login Form</h3><br>  
                
                <form action="Register.php" method="post">  
                <small>
            <?php
             session_start();
            if(!empty($_SESSION['msg'])){
                $msg=$_SESSION['msg'];
            ?>  
            <?=$msg?>  
            <?php 
            }
            ?>
            </small>

                     <label>Username</label>  
                     <input type="text" name="txt"  >  
                     <br>  
                     <label>Password</label>  
                     <input type="password" name="pass" >  
                     <br>  
                     <input type="submit" name="login"  value="Login">  
                </form>  
           </div>  
          <a href="index.php">REGISTER</a>  
      </body>  
 </html> 
 <?php 
 session_destroy();
 ?>
