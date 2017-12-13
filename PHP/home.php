<?php

?>
<html>
<head>
<meta charset="UTF-8">
<link href="css/bootstrap.css" rel="stylesheet" >
<link href="css/bootstrap-responsive.css" rel="stylesheet" > 
<link href="css/home.css" rel="stylesheet">
 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="stepcarousel.js">

/***********************************************
* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* Please keep this notice intact
***********************************************/

</script>
    
<style type="text/css">

.stepcarousel{
position: relative; /*leave this value alone*/
border: 10px solid #f3f3f3;
overflow: scroll; /*leave this value alone*/
width: 100%; /*Width of Carousel Viewer itself*/
height: 220px; /*Height should enough to fit largest content's height*/
-webkit-box-sizing: border-box; /* set box model so container width and height value includes any padding/border defined */
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.stepcarousel .belt{
position: absolute; /*leave this value alone*/
left: 0;
top: 0;
}

.stepcarousel .panel{
float: left; /*leave this value alone*/
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
margin: 0px; /*margin around each panel*/
/*width: 100%; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}

span.paginatecircle{ /* CSS for paginate circle spans. Required */
background: white;
border: 2px solid black;
border-radius: 10px;
width: 6px;
height: 6px;
cursor: pointer;
display: inline-block;
margin-right: 4px;
}

span.paginatecircle:hover{
background: gray;
}

span.paginatecircle.selected{
background: black;
}

</style>


<script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:3000},
	panelbehavior: {speed:500, wraparound:true, wrapbehavior:'slide', persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['image/arrowl.gif', -5, 80], rightnav: ['image/arrowr.gif', -20, 80]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

</script>
</head>

<body>
      <header class="header">
      <div class="container-fluid">
    <div class="row">
          <div class="col-xs-4 col-md-4" id="home1"></div>
           <div class="col-xs-4 col-md-4" id="maint">Home</div>
           <div class="col-xs-4 col-md-4" id="logout1"><a href="index.php"><img id="logout1" src="image/power107.png"></a></div>
</div>
</div>
      </header> 
      
      <div id="mygallery" class="stepcarousel">
<div class="belt">

<div class="panel">
    <img src="image/1.png" />
</div>

<div class="panel">
<img src="image/2.png" />
   </div>

<div class="panel">
<img src="image/3.png" />
</div>





</div>
</div>
<br>
<br>
<br>
   <div class="container-fluid">
    <div class="row">
          <div class="col-xs-4 col-md-4" ><a href="aboutus.php"><img id="b1" src="image/23.png"></a></div>
        <div class="col-xs-4 col-md-4" ><a href="RESERVE%20ins.php"><img id="b2" src="image/44.png"></a></div>
        <div class="col-xs-4 col-md-4" ><a href="staduim.php"><img id="b3" src="image/Untitled.png"></a></div></div>
</div>
</div>


      
      
      
     
        
        
      <footer class="footer"> copyright © 2015 - Reservation System  </footer>
      
      
      
      
 
  </body>
</html>