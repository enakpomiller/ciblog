<!DOCTYPE html>
<html>
<head>
	<title> ci bloc</title>
	<!--<link rel="stylesheet" href="https://boootswatch.com/flatly/bootstrap.min.css"> -->



</head>
<body>

<style type="text/css">
 .nav{
 	background: #009988;
 	width:100%; height: 50px;
 	padding: 10px;
 }

 #anchor{
 	color:#ffffff;
 	padding:20px;
   text-decoration:none;
   word-spacing: 10px;

 }
  .inner-nave{
 	  margin-top:15px;
    text-align: center;
    }
   #anchor:hover{
   background: #ffffff;
   color:#000000;
   border-radius: 5px;
   }
   #create{
   background: #ffffff;
   color:#000000;
   border-radius: 5px;
   }
</style>


<div class="nav">

	  <div class="inner-nave">
<!-- use helpers from the library to make the nav bars work -->
<!-- locate autoload/ helpers /url -->
    <a href=" <?php echo base_url();?>/posts" id="anchor"> CIBLOG </a>
	<a href="<?php echo base_url() ;?>/home " id="anchor"> HOME </a>
	<a href="<?php echo base_url();?>/about " id="anchor"> ABOUT </a>
  <a href="<?php echo base_url();?>/posts" id="anchor"> NEWS </a> 

  <a href="<?php echo base_url();?>/posts/create" id=" " style="margin-left: 500px; color: #ffffff;text-decoration: none;"> CREATE  POST</a>
      </div>

</div>






