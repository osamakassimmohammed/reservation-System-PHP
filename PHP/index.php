<?php
require("config.php");

if(isset($_POST['submit'])){
 $userName=$_POST['userName'];
 $passWord=$_POST['passWord'];
 
    $query=mysql_query("select userName from Student where userName='$userName' and passWord='$passWord' limit 1");
    
    if(mysql_num_rows($query)==1){
    $data=mysql_fetch_array($query,1);
    $_SESSION['userName']=$data['userName'];
          session_start();
  $_SESSION['userName'] =$_POST['userName'];
        header("location:home.php");
    }else{
     $error="Invalid Username or Password";
      
    }
}
?>
        
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="st.css">

    
    
    
  </head>

  <body>

    <body class="align">

  <div class="site__container">

    <div class="grid__container">

      <form action="" method="post" class="form form--login">
<?php if(isset($error)){?>
        <tr>
            <td colspan="2" align="center"><strong class="error"><?php echo $error; ?></strong></td>
        </tr>
        <?php } ?>
        <div class="form__field">
          <label class="fontawesome-user" for="login__username"><span class="hidden">Username</span></label>
          <input id="login__username" name="userName" type="text" class="form__input" placeholder="Username" required>
        </div>

        <div class="form__field">
          <label class="fontawesome-lock" for="login__password"><span class="hidden">Password</span></label>
          <input id="passWord" name="passWord" type="password" class="form__input" placeholder="PassWord" required>
        </div>

        <div class="form__field">
<input type="submit" name="submit" id="submit" value="submit">
        </div>

      </form>

      <p class="text--center"><a href="#"></a> </p>

    </div>

  </div>

</body>
    
    
    
    
    
  </body>
</html>
