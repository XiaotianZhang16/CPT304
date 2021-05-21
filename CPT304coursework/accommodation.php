<?php 

session_start();

$active='accommodation';

include("includes/db.php");
include("functions/functions.php");

?>


<?php 

if(isset($_GET['country_state'])){
    
    $holiday_id = $_GET['country_holiday'];
    
    $state_id = $_GET['country_state'];

    $get_state = "select * from state where state_id='$state_id'";
    
    $run_state = mysqli_query($con,$get_state);
    
    $row_state = mysqli_fetch_array($run_state);
    
    $state_name = $row_state['state_name'];
    
    $state_country_id = $row_state['state_country_id'];
    
    
    $get_holiday = "select * from holiday where holiday_id='$holiday_id'";
    
    $run_holiday = mysqli_query($con,$get_holiday);
    
    $row_holiday = mysqli_fetch_array($run_holiday);
    
    $holiday_name = $row_holiday['holiday_name'];
    
    $holiday_state_id = $row_holiday['holiday_state_id'];
    
    $holiday_img = $row_holiday['holiday_img'];
    
    
    $get_country = "select * from country where country_id='$state_country_id'";
    
    $run_country = mysqli_query($con,$get_country);
    
    $row_country = mysqli_fetch_array($run_country);
    
    $country_name = $row_country['country_name'];
    
    
    $get_acc = "select * from accommodation where acc_holiday_id='$holiday_id' AND acc_state_id='$state_id'";
    
    $run_acc = mysqli_query($con,$get_acc);
    
    $row_acc = mysqli_fetch_array($run_acc);

    $acc_name = $row_acc['acc_name'];
    
    $acc_img = $row_acc['acc_img'];
    
    $acc_desc = $row_acc['acc_desc'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M-Dev Store</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
   
   <div id="top"><!-- Top Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->
               
               <a href="#" class="btn btn-success btn-sm">
                   
                   <?php 
                   
                   if(!isset($_SESSION['customer_email'])){
                       
                       echo "Welcome: Guest";
                       
                   }else{
                       
                       echo "Welcome: " . $_SESSION['customer_email'] . "";
                       
                   }
                   
                   ?>
                   
               </a>
               
           </div><!-- col-md-6 offer Finish -->
           
           <div class="col-md-6"><!-- col-md-6 Begin -->
               
               <ul class="menu"><!-- cmenu Begin -->
                   
                   <li>
                       <a href="customer_register.php">Register</a>
                   </li>
                   <li>
                       <a href="checkout.php">My Account</a>
                   </li>
                   <li>
                       <a href="cart.php">Go To Cart</a>
                   </li>

                   
               </ul><!-- menu Finish -->
               
           </div><!-- col-md-6 Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- Top Finish -->
    
       <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Country
                   </li>
                   
                   <li>
                       <a href="country_holiday.php?country_id=<?php echo $state_country_id; ?>"><?php echo $country_name; ?></a>
                   </li>

                   
                   <li>
                       <?php echo $state_name; ?>
                   </li>
                   
                    <li>
                       <?php echo $holiday_name; ?>
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-12"><!-- col-md-12 Begin -->
               <div id="productMain" class="row"><!-- row Begin -->
                   <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->

                               
                               <div class="carousel-inner">
                                   <div class="item active">
                                       <center><img class="img-responsive" src="holiday_images/<?php echo $holiday_img; ?>" alt="holiday image"></center>
                                        <h1 class="text-center"><?php echo $holiday_name; ?> </h1>

                                   </div>
                               </div>

                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->


                   </div><!-- col-sm-6 Finish -->
                   
                    <div class="col-sm-6"><!-- col-sm-6 Begin -->
                       <div id="mainImage"><!-- #mainImage Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                               
                               <div class="carousel-inner">
                                   <div class="item active">
<center>
                              <?php 
                              
                                $get_weather = "select * from weather WHERE weather_id='2'";
                                $run_weather = mysqli_query($con,$get_weather);
                                $row_weather = mysqli_fetch_array($run_weather);
                                  
                                  $weather_img = $row_weather['weather_img'];
                                  $weather_desc = $row_weather['weather_desc'];

                                  echo "
                                    <div class='col-md-4 col-sm-6 single'>
         
                                        <center>
                                           <h2>Weather</h2>
                                        </center>
        
                                        <div class='weather'>
            
                
                                             <img class='img-responsive' src='weather_images/$weather_img'>
                
                
                                        <div class='text'>

                
                    <h3>
            
                        <center>

                            $weather_desc
                            
                        </center>


                    
                    </h3>


                
                </div>

                
            
            </div>
        
        </div>   
                            
                                  ";
                                  
                              
                              
                              ?>
    </center>
                                       
                                   </div>
                               </div>

                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->


                   </div><!-- col-sm-6 Finish -->
               </div><!-- row Finish -->
               
               
               
               <div class="box" id="details"><!-- box Begin -->
                       
                   <center>
                       <h2>Accommodations</h2>
                   </center>
                          
       <div class="row"><!-- row Begin -->
          
                              <?php 
                              
                                $get_acc = "select * from accommodation where acc_holiday_id='$holiday_id' AND acc_state_id='$state_id'";
                                $run_acc = mysqli_query($con,$get_acc);
                              
                              while ($row_acc=mysqli_fetch_array($run_acc)){
                                  
                                  $acc_id = $row_acc['acc_id'];
                                  $acc_name = $row_acc['acc_name'];
                                  $acc_img = $row_acc['acc_img'];
                                  $acc_desc = $row_acc['acc_desc'];

                                  echo "
                                  
         <div class='col-md-4 col-sm-6 single'>
        
            <div class='country'>
            
                
                    <img class='img-responsive' src='acc_images/$acc_img'>
                
                
                <div class='text'>

                
                    <h3>
            
                        <center>

                            $acc_name
                            
                        </center>


                    
                    </h3>
                    
                    <p>
                            $acc_desc
                    </p>

                
                </div>

                
            
            </div>
        
        </div>                                  
                                  ";
                                  
                              }
                              
                              ?>
           
       </div><!-- row Finish -->
       
                   

                                          
               </div><!-- box Finish -->
               
               
           </div><!-- col-md-12 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   