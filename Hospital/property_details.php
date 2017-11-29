<?php
include('../admin/config.php');
$y=$_GET["y"];
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from templates.crelegant.com/wedoor/property_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2015 10:32:02 GMT -->
<head>

    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Heal Helping Hand</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- bxslider -->
    <link href="css/jquery.bxslider.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main_style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <section class="top_sec">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 top_lft">
                
                    <div class="inf_txt">
                        <p>HEAL HELPING HAND</p>
                    </div>

                </div>
                <!-- /.top-left -->
               
				
			
                
                <!-- /.top-right -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Navigation -->
     <?php include('header.php'); ?>

    <!-- Header bradcrumb -->
    <header class="bread_crumb">
        <div class="pag_titl_sec">
            <h1 class="pag_titl">Details </h1>
            <h4 class="sub_titl"> You have Questions We promise Answers </h4>
        </div>
        <div class="pg_links">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="lnk_pag"><a href="index.php"> Home </a> </p>
                        <p class="lnk_pag"> / </p>
                        <p class="lnk_pag"> Blog </p>
                    </div>
                    <div class="col-md-6 text-right">
                        <p class="lnk_pag"><a href="index.php"> Go Back to Home </a> </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="spacer-60"></div>
    <div class="container">
        <div class="row">
            <!-- Proerty Details Section -->
<section id="sidebar" class="col-md-4">
                <!-- Search Form -->
                
                <!-- /.row -->
				<div class="row" style="position:relative; right:10px;">
                    <div class="col-md-12">
                        <div class="srch_frm">
                            <h3>Book your hospital</h3>
                            <form name="sentMessage" id="contactForm" novalidate method="post">
								
<div class="control-group form-group">
                                    <div class="controls">
                                        <label>Test</label>
 <select id="ddl1" class="form-control" required="" data-validation-required-message="Please select Test Name" onchange="add1()" name="test">
                                        <option value="0" selected="selected">Select the Test Name</option>
                                         <option value="1">BloodTest</option>
                                      <option value="2">Thyroid Test</option>
                                      <option value="3">Urine Test</option>
                                      <option value="4">Kidney Scan</option>
                                      <option value="5">Kidney Defect Rate</option>
<option value="6">Widal Test</option>
<option value="7">Dengue Test</option>
<option value="8">Cholestrol Test</option>
<option value="9">Sugar Test</option>
<option value="10">Stool Test</option>
<option value="11">Malaria Test</option>
<option value="12">Uric Acid Test</option>
<option value="13">TB Test</option>

                                    </select>
</div>
</div>
                                
                                <div class="control-group form-group">
                                    <div class="controls">
									
                                  <label>Hospital</label>
 <select id="ddl2" class="form-control" required="" data-validation-required-message="Please select hospital" onchange="add2()" name="test1">
                                        <option value="0" selected="selected">Select the Hospital</option>
                                      <option value="1">Vimhans</option>
                                      <option value="2">ayurvedic,unani,tubblia</option>
                                      <option value="3">Sardar Valabhbhai patel Hospital</option>
                                      <option value="4">sunderlal jain Hospital</option>
                                      <option value="5">Guru nanak Hospital</option>
<option value="6">ganesh Diagnosstics</option>
<option value="7">Star Imaging</option>
<option value="8">City Xray</option>
<option value="9">Delhi heart and institute</option>


                                    </select>      
                                    </div>
                                </div>
<input type="hidden" id="up1" />
   <input type="hidden" id="up2"/>
 
<button onclick="myFunv()" class="btn btn-success">Reset</button>
								<div class="control-group form-group">
                                    <div class="controls">
                                        <label>Date</label>
                                        <input type="date" class="form-control" id="keyword" required data-validation-required-message="Please enter a keyword." name="date" placeholder="Date">
                                        <p class="help-block"></p>
                                    </div>
                                </div>


  
								<div class="control-group form-group">
                                    <div class="controls">
                                        <label>Price</label>
                                        <input type="Text" class="form-control"  name="amnt" id="amt" placeholder="Price" readonly>
                                        <p class="help-block"></p>
                                    </div>
                                </div>
<div class="control-group form-group">
                                    <div class="controls">
                                        <label>Name</label>
                                        <input type="text" class="form-control"   id="em" placeholder="Name" name="nm">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
								<div class="control-group form-group">
                                    <div class="controls">
                                        <label>Email</label>
                                        <input type="email" class="form-control"   id="em" placeholder="Email" name="em">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Payment mode</label>
                                        <input type="text" class="form-control"   id="em" name="pm" value="Cash" readonly>
                                    </div>
                                    </div>
                                <div id="success"></div>
                                <!-- For success/fail messages -->
                                <input type="submit" class="btn btn-primary" value="Book" name="subm">
                            </form>
<?php
if(isset($_POST["subm"])){
$hb=$_POST["test"];
                 if($hb=="1"){
			  $y="BloodTest";

		 }else if($hb=="2"){
			  $y="Thyroid Test";

		 }else if($hb=="3"){
			 $y="Urine Test";
 
		 }else if($hb=="4"){
			 $y="Kidney Scan";
 
		 }else if($hb=="5"){
			 $y="Kidney Defect Rate";
 
		 }else if($hb=="6"){
			 $y="Widal Test";
 
		 }else if($hb=="7"){
			 $y="Dengue Test";
 
		 }else if($hb=="8"){
			 $y="Cholestrol Test";
 
		 }else if($hb=="9"){
			 $y="Sugar Test";
 
		 }else if($hb=="10"){
			 $y="Stool Test";
 
		 }else if($hb=="11"){
			 $y="Malaria Test";
 
		 }else if($hb=="12"){
			 $y="Uric Acid Test";
 
		 }else if($hb=="13"){
			 $y="TB Test";
                }else{
			  $y="testm";
		 }
$lc=$_POST["test1"];
 if($lc=="1"){
			  $y1="Vimhans";

		 }else if($lc=="2"){
			  $y1="ayurvedic,unani,tubblia";

		 }else if($lc=="3"){
			 $y1="Sardar Valabhbhai patel Hospital";
 
		 }else if($lc=="4"){
			 $y1="sunderlal jain Hospital";
 
		 }else if($lc=="5"){
			 $y1="Guru nanak Hospital";
 
		 }else if($lc=="6"){
			 $y1="ganesh Diagnosstics";
 
		 }else if($lc=="7"){
			 $y1="Star Imaging";
 
		 }else if($lc=="8"){
			 $y1="City Xray";
 
		 }else{
			  $y1="Delhi heart and institute";
		 }
$nt=$_POST["date"];
$ly=$_POST["amnt"];
$nm=$_POST["nm"];
$es=$_POST["em"];
$mo=$_POST["pm"];
$q="select * from booking where email='$es'";
$e=mysqli_query($link,$q);
$num=mysqli_num_rows($e);
$read=mysqli_fetch_array($e);
$abc=$read["test_name"];
$xz="$abc,$y";
$abc1=$read["hospital_name"];
$xz1="$abc1,$y1";
$abc2=$read["price"];
$xz2=$abc2+$ly;
if($num>0){
$qw="update booking set test_name='$xz',hospital_name='$xz1',date='$nt',email='$es',price='$xz2',payment='$mo' where email='$es'";
$ex=mysqli_query($link,$qw);
echo "<script>alert('Booking has been done');</script>";
}else{
$qw="insert into booking set test_name='$y',hospital_name='$y1',date='$nt',price='$ly',email='$es',payment='$mo'";
$ex=mysqli_query($link,$qw);
echo "<script>alert('Booking has been done');</script>";
}

}



?>
                        </div>
                    </div>
                </div>

               
                <!-- /.row -->


                <div class="spacer-30"></div>
                <!-- Featured Properties -->
				
               
                <!-- /.row -->

                <div class="spacer-30"></div>
                <!-- Tags -->
                

                
                <!-- /.row -->

                <div class="spacer-30"></div>

            </section>

            <section id="prop_detal" class="col-md-8" style="position:relative; left:100px;">

                <div class="row">
<?php
									
									 $query="select * from hops where name='$y'";
									 $query_exe=mysqli_query($link,$query);
									
				                      while($read=mysqli_fetch_array($query_exe)){
										  ?>
                    <div class="panel panel-default">
                        <!-- Proerty Slider Images -->
                       

<div class="panel-image">
                            <ul id="prop_slid">
                                 <li><img class="img-responsive" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image1"];?>" >
                                </li>
 <li><img class="img-responsive" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image2"];?>" >
                                </li>
 <li><img class="img-responsive" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image3"];?>" >
                                </li>
                                <li><img class="img-responsive" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image4"];?>" >
                                </li>
 <li><img class="img-responsive" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image5"];?>" >
                                </li>
                                
                            </ul>
                            <!-- Proerty Slider Thumbnails -->
                            <div class="col-md-12 rel_img">
                                <ul id="slid_nav">
                                    <li>
                                        <a data-slide-index="0" href="#"><img class="img-responsive img-hover" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image1"];?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="1" href="#"><img class="img-responsive img-hover" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image2"];?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="2" href="#"><img class="img-responsive img-hover" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image3"];?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="3" href="#"><img class="img-responsive img-hover" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image4"];?>" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a data-slide-index="4" href="#"><img class="img-responsive img-hover" src="../hospitalpanel/hospitalpanel/img/<?php echo $read["image5"];?>" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="prop_feat">
                                <p class="area"><i class="fa fa-home"></i>Rest Rooms</p>
                                <p class="bedrom"><i class="fa fa-bed"></i>AC</p>
                                <p class="bedrom"><i class="fa fa-car"></i>Waiting Room</p>
                                <p class="bedrom"><i class="fa fa-star-o"></i>Canteen</p>
                                <p class="bedrom"><i class="fa fa-print"></i>Blood Bank</p>

                                

                                </div>
                            </div>

                            <h3 class="sec_titl">
                      <center> <?php echo $read["name"];?>   </center>          </h3>

                            <div class="col_labls larg_labl">

                                

                            </div>

                            <p class="sec_desc">
                               <?php echo $read["discription"];?>
                            </p>

                            <!-- Proerty Additional Info -->
                            <div class="prop_addinfo">
                                <h2 class="add_titl">
                                <center>Additional Details</center>
                            </h2>

                                <div class="info_sec first">
                                    <div class="col-md-12">
                                        <ul>
                                            <li>
                                                
                                                   
                                                    <p class="infos"> Address: <span><?php echo $read["address"];?> </span> </p>
                                                
                                            </li>
                                            <li>
                                                
                                                    
                                                    <p class="infos"> Region: <span> <?php echo $read["region"];?> </span> </p>
                                                
                                            </li>
<li>                                                            <?php   $query1="select * from test1 where name='$y'";
									 $query_exe1=mysqli_query($link,$query1);
                                                                 $read1=mysqli_fetch_array($query_exe1);?>
                                                
                                                    
                                                    <p class="infos"> BloodTest: <span> <?php echo $read1["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                       <?php        $query2="select * from test2 where name='$y'";
									 $query_exe2=mysqli_query($link,$query2);
                                                                 $read2=mysqli_fetch_array($query_exe2);?>
                                                
                                                    
                                                    <p class="infos"> Thyroid Test: <span> <?php echo $read2["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                        <?php       $query3="select * from test3 where name='$y'";
									 $query_exe3=mysqli_query($link,$query3);
                                                                 $read3=mysqli_fetch_array($query_exe3);?>
                                                
                                                    
                                                    <p class="infos"> Urine Test: <span> <?php echo $read3["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                        <?php       $query4="select * from test4 where name='$y'";
									 $query_exe4=mysqli_query($link,$query4);
                                                                 $read4=mysqli_fetch_array($query_exe4);
                                                ?>
                                                    
                                                    <p class="infos"> Kidney Scan: <span> <?php echo $read4["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                 <?php 
             $query5="select * from test5 where name='$y'";
									 $query_exe5=mysqli_query($link,$query5);
                                                                 $read5=mysqli_fetch_array($query_exe5);

                                                ?>
                                                    
                                                    <p class="infos">Kidney Defect Rate: <span> <?php echo $read5["cost"];?> </span> </p>
                                                
                                            </li>
                                            <li>                          
                                <?php  $query6="select * from test6 where name='$y'";
							 $query_exe6=mysqli_query($link,$query6);
                                                                 $read6=mysqli_fetch_array($query_exe6);
                                                ?>
                                                    
                                                    <p class="infos"> Widal Test: <span> <?php echo $read6["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                 <?php              $query7="select * from test7 where name='$y'";
									 $query_exe7=mysqli_query($link,$query7);
                                                                 $read7=mysqli_fetch_array($query_exe7);?>
                                                
                                                    
                                                    <p class="infos"> Dengue Test: <span> <?php echo $read7["cost"];?> </span> </p>
                                                
                                            </li>

<li>                                     
<?php                          $query8="select * from test8 where name='$y'";
									 $query_exe8=mysqli_query($link,$query8);
                                                                 $read8=mysqli_fetch_array($query_exe8);
                                                ?>
                                                    
                                                    <p class="infos"> Cholestrol Test: <span> <?php echo $read8["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                            <?php   $query9="select * from test9 where name='$y'";
									 $query_exe9=mysqli_query($link,$query9);
                                                                 $read9=mysqli_fetch_array($query_exe9);?>
                                                
                                                    
                                                    <p class="infos"> Sugar Test: <span> <?php echo $read9["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                         <?php      $query10="select * from test10 where name='$y'";
									 $query_exe10=mysqli_query($link,$query10);
                                                                 $read10=mysqli_fetch_array($query_exe10);?>
                                                
                                                    
                                                    <p class="infos"> Stool Test: <span> <?php echo $read10["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                         <?php      $query11="select * from test11 where name='$y'";
									 $query_exe11=mysqli_query($link,$query11);
                                                                 $read11=mysqli_fetch_array($query_exe11);
                                                ?>
                                                    
                                                    <p class="infos"> Malaria Test: <span> <?php echo $read11["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                        <?php       $query12="select * from test12 where name='$y'";
									 $query_exe12=mysqli_query($link,$query12);
                                                                 $read12=mysqli_fetch_array($query_exe12);?>
                                                
                                                    
                                                    <p class="infos"> Uric Acid Test: <span> <?php echo $read12["cost"];?> </span> </p>
                                                
                                            </li>
<li>                                                      <?php         $query13="select * from test13 where name='$y'";
									 $query_exe13=mysqli_query($link,$query13);
                                                                 $read13=mysqli_fetch_array($query_exe13);
                                                ?>
                                                    
                                                    <p class="infos"> TB Test: <span> <?php echo $read13["cost"];?> </span> </p>
                                                
                                            </li>
                                            
                                        </ul>
                                    </div>
                                   
                                 
                                </div>
                            </div>

                        </div>
                    </div>
<?php }?>
                </div>
                <!-- /.row -->

                <div class="spacer-30"></div>

                <!-- Agent Info -->
              
                <!-- /.row -->

                <div class="spacer-30"></div>

                <!-- Proerty Map -->

                <div class="row">
                    <div class="titl_sec">
                        <div class="col-lg-12">

                            <h3 class="main_titl text-left">
                    Location
                </h3>

                        </div>
                        <div class="clearfix"></div>

                    </div>
<?php
									
									 $query1="select * from hospitalgeo where name='$y'";
									 $query_exe1=mysqli_query($link,$query1);
									
				                      $read1=mysqli_fetch_array($query_exe1);
										  ?>
                    <div class="col-md-12">
                        <div class="prop_map">
<?php echo $read1["frame"]; ?>
                        </div>

                    </div>

                </div>

                <!-- /.row -->


            </section>


            <!-- Sidebar Section -->
            
            <div class="spacer-60"></div>

        </div>
    </div>
    <!-- Footer -->
    

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- BX Slider -->
    <script src="js/jquery.bxslider.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $(document).ready(function () {
            'use strict';

            $('#prop_slid').bxSlider({
                pagerCustom: '#slid_nav'
            });
        });
</script>
    <script>
   function myFunv() {
   var ddlvalue1 = document.getElementById("ddl1").value;
            var up1 = document.getElementById("up1").value;
var ddlvalue2 = document.getElementById("ddl2").value;
            var up2 = document.getElementById("up2").value;
up1.value = '0';
up2.value = '0';
ddlvalue2 = '0';
ddlvalue1 = '0';
}
</script>
<script>
   function add1() { 
            var ddlvalue = document.getElementById("ddl1").value;
			var ddlvalue2 = document.getElementById("up2").value;
            var up1 = document.getElementById("up1");
			var up2 = document.getElementById("res");
            //console.log(ddlvalue);
            if (ddlvalue == '1')
              return up1.value = '1'+ddlvalue2;
            else if (ddlvalue == '2')
                return up1.value = '2'+ddlvalue2;
				
            else if (ddlvalue == '3')
                 return up1.value = '3'+ddlvalue2;
            else if (ddlvalue == '4')
                 return  up1.value = '4'+ddlvalue2;
 else if (ddlvalue == '5')
                 return  up1.value = '5'+ddlvalue2;
 else if (ddlvalue == '6')
                 return  up1.value = '6'+ddlvalue2;
 else if (ddlvalue == '7')
                 return  up1.value = '7'+ddlvalue2;
 else if (ddlvalue == '8')
                 return  up1.value = '8'+ddlvalue2;
 else if (ddlvalue == '9')
                 return  up1.value = '9'+ddlvalue2;
 else if (ddlvalue == '10')
                 return  up1.value = '10'+ddlvalue2;
 else if (ddlvalue == '11')
                 return  up1.value = '11'+ddlvalue2;
 else if (ddlvalue == '12')
                 return  up1.value = '12'+ddlvalue2;
 else if (ddlvalue == '13')
                 return  up1.value = '13'+ddlvalue2;

 
        }
		 function add2() { 
            var ddlvalue = document.getElementById("ddl2").value;
			var ddlvalue2 = document.getElementById("up1").value;
            var up1 = document.getElementById("up2");
            //console.log(ddlvalue);
            if (ddlvalue == '1')
			{
              up1.value = ddlvalue2+'#'+'1';
		   myFunction(up1.value);
		   return up1.value;
			}
            else if (ddlvalue == '2'){
			up1.value = ddlvalue2+'#'+'2';
			myFunction(up1.value);
			return up1.value;
			}
            else if (ddlvalue == '3'){
			up1.value = ddlvalue2+'#'+'3';
			myFunction(up1.value);
			return up1.value;
			}
            else if (ddlvalue == '4'){
		 up1.value = ddlvalue2+'#'+'4';
		   myFunction(up1.value);
		   return up1.value;
		 }
 else if (ddlvalue == '5'){
		 up1.value = ddlvalue2+'#'+'5';
		   myFunction(up1.value);
		   return up1.value;
		 }
 else if (ddlvalue == '6'){
		 up1.value = ddlvalue2+'#'+'6';
		   myFunction(up1.value);
		   return up1.value;
		 }
 else if (ddlvalue == '7'){
		 up1.value = ddlvalue2+'#'+'7';
		   myFunction(up1.value);
		   return up1.value;
		 }
 else if (ddlvalue == '8'){
		 up1.value = ddlvalue2+'#'+'8';
		   myFunction(up1.value);
		   return up1.value;
		 }
 else if (ddlvalue == '9'){
		 up1.value = ddlvalue2+'#'+'9';
		   myFunction(up1.value);
		   return up1.value;
		 }
			 
			
 
        }
		
		</script>
<script>
		function  myFunction(val)
{
	
	$.post("ajax_page_demo1.php",{val},function(data)
	{
        var ret=data.split(',');
        $("#amt").val(ret[0]);
       
                     
    }
		 )
	
}
		

</script>
</body>


<!-- Mirrored from templates.crelegant.com/wedoor/property_details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Sep 2015 10:32:29 GMT -->
</html>