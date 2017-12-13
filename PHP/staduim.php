<?php
session_start();
$userid=$_SESSION['userName'];
if(isset($_POST['submit']))
{
mysql_connect('mysql4.000webhost.com','a7559499_root','O123456');
mysql_select_db('a7559499_DB1');
$name=$_POST["Stadiumselectbox"];
$date=$_POST['date'];
$time=$_POST['time'];
$textarea=$_POST['textarea'];
$query=mysql_query("select * from Stadium where StadiumID='".$name."' and Date='".$date."' and Time='".$time."' ") or die(mysql_error());
$duplicate=mysql_num_rows($query);
   if($duplicate==0)
    {
$query1=mysql_query("insert into Stadium values('".$name."','".$date."',
'".$time."','".$textarea."','".$userid."')")   or die(mysql_error());
        $suss="your order has been reserved successfully";    
    }
    else
    {
     $error="please choose another date or time";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
<link href="css/staduimcss.css" rel="stylesheet">
</head>

<body>
     <?php if(isset($suss)){?>
        <tr>
      <td colspan="2" align="center"><strong class="suss"><?php echo $suss; ?></strong></td>
        </tr>
        <?php } ?>
    <?php if(isset($error)){?>
        <tr>
      <td colspan="2" align="center"><strong class="error"><?php echo $error; ?></strong></td>
        </tr>
        <?php } ?>
      <header class="header">
      <div class="container">
    <div class="row">
        <div class="col-xs-4 col-md-4" id="home1"><a href="home.php"><img src="image/home4.png"></a></div>
           <div class="col-xs-4 col-md-4" id="maint">Stadiums</div>
        <div class="col-xs-4 col-md-4" id="logout1"><a href="index.php"><img id="logout1" src="image/power107.png"></a></div>
</div>
</div>
      </header> 
      <form  method="post" action="#">
      
      <div class="container" id="name">
    <div class="row" >
          <div class="col-xs-12 col-md-12">
        </div></div></div>
      
      <div class="container-fluid">
    <div class="row" id="stadiums_id">
          <div class="col-xs-12 col-md-12">
          <p class="stadiums">Stadiums</p>
          <select class="form-control input-sm" name="Stadiumselectbox">
           <option value="FootballA" name="Stadiumoption1">Football A</option>
             <option value="FootballB" name="Stadiumoption2">Football B</option>
              <option value="Handball" name="Stadiumoption3">Handball</option>
               <option value="Basctball" name="Stadiumoption4">Basctball</option>
               <option value="Volleyball" name="Stadiumoption5">Volleyball</option>
                </select>
      </div></div>
          
        <div class="row" id="Dataandtime">
         <div class="col-xs-12 col-md-12">
          <p Dataandtime_p>Date </p>
        <input type="date" name="date"  class="datetime"/>
          
          </div></div>
          
          <div class="row" id="Time">
          <div class="col-xs-12 col-md-12">
          <p class="Time"> Time Period </p>
          <select class="form-control input-sm"  name="time">
           <option value="one" name="timeone">4-6 pm</option>
             <option value="two" name="timetwo">6-8 pm</option>
              <option value="three" name="timethree">8-10 pm</option>
              
                </select>
      </div></div>
          
         
          
        <div class="row" id="NEEDS">
          <div class="col-xs-12 col-md-12">
           <P> Needs</P>
            <div class="form-group">
            
           <textarea class="textarea" rows="7.5"  name="textarea"></textarea>
              
            </div>
            
          </div>
          
        </div>       

          <div class="row" id="button">
            <div class="col-xs-4 col-md-4"></div>
            <div class="col-xs-4 col-md-4"></div>
            <div class="col-xs-4 col-md-4">
              
               <button class="btn"  type='submit' name='submit' value='Submit'>submit</button>
            </div>
          
        </div></div></form>
           
        
        
      <footer class="footer"> copyright © 2015 - Reservation System  </footer>
      
  </body>
</html>