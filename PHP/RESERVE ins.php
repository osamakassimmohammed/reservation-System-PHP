<?php
session_start();
$userid=$_SESSION['userName'];
if(isset($_POST['submit']))
{
mysql_connect('mysql4.000webhost.com','a7559499_root','O123456');
mysql_select_db('a7559499_DB1');
$name=$_POST["insselectbox"];
$date=$_POST['date'];
$time=$_POST['timeselectbox'];
$textarea=$_POST['textarea'];
$query=mysql_query("select * from OfficeHours where Instructorname='".$name."' and Date='".$date."' and Time='".$time."' ")  or die(mysql_error());
$duplicate=mysql_num_rows($query);
   if($duplicate==0)
    {
$query1=mysql_query("insert into OfficeHours values('".$name."','".$date."',
'".$time."','".$textarea."','".$userid."')")   or die(mysql_error());
      $suss="your order has been reserved successfully";  
    }
    else
    {
     $error="please choose another date or time";
    }
}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" media="screen">
<link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen"> 
<link href="css/ins.css" rel="stylesheet">
<style type="text/css">
.auto-style1 {
	height: 50px;
	background: #41464c;
	color: white;
}
</style>
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
      <header class="auto-style1">
      <div class="container">
    <div class="row">
        <div class="col-xs-4 col-md-4" id="home1"><a href="home.php"><img src="image/home4.png"></a></div>
           <div class="col-xs-4 col-md-4" id="maint">Office Hours</div>
           <div class="col-xs-4 col-md-4" id="logout1"><a href="index.php"><img id="logout1" src="image/power107.png"></a></div>
</div>
</div>
      </header> 
    <form method='post' action='#'>
      
      <div class="container-fluid">
    <div class="row" id="stadiums_id">
          <div class="col-md-12">
          <p class="stadiums">Instractor</p>
          
          <select class="form-control input-sm" name="insselectbox">
           <option value="DR.Jamal" name="insoption2">DR.Jamal Alhyafi</option>
             <option value="Dr.Fahd" name="insoption3">Dr.Fahd Alhydari</option>
              <option value="Dr.Ubed" name="insoption4">Dr.Ubed</option>
            <option value="Dr.Adam" name="insoption5">Dr.Adam </option>
                </select>
      </div></div>
          
        <div class="row" id="Dataandtime">
         <div class="col-md-12">
          <p Dataandtime_p>Date </p>
          <form>
        <input type="date"   class="datetime"  name="date"/>
           </form>
          </div></div>
          
          <div class="row" id="Time">
          <div class="col-md-12">
          <p class="Time"> Time Period </p>
          <select class="form-control input-sm" name="timeselectbox" >
          
           <option name="timeoption1" value="one">4-6 pm</option>
             <option  name="timeoption2" value="two">6-8 pm</option>
              <option  name="timeoption3" value="three">8-10 pm</option>
                </select>
      </div></div>
          
         
          
        <div class="row" id="NEEDS">
          <div class="col-md-12">
           <P> Description </P>
            <div class="form-group">
           <textarea class="textarea" rows="7.5" name="textarea" ></textarea>
              </form>
            </div>
            
          </div>
          
        </div>       

          <div class="row" id="button">
          <div class="col-xs-4 col-md-4"></div>
            <div class="col-xs-4 col-md-4"></div>
            <div class="col-xs-4 col-md-4">
                <button class="btn"  type='submit' name='submit' value='Submit'>submit</button></div>
     
          
        </div>
           </form> 
        
        
      <footer class="footer"> copyright © 2015 - Reservation System  </footer>
      
  </body>
</html>