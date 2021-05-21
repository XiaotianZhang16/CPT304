<?php 

session_start();

$active='country';

include("includes/db.php");
include("functions/functions.php");

?>

<?php 

if(isset($_GET['country_id'])){
    
    $country_id = $_GET['country_id'];
    
    $get_country = "select * from country where country_id='$country_id'";
    
    $run_country = mysqli_query($con,$get_country);
    
    $row_country = mysqli_fetch_array($run_country);
    
    $country_name = $row_country['country_name'];
    
    $country_img = $row_country['country_img'];
    
    
}

if(isset($_GET['country_name'])){
    
    $country_name = $_GET['country_name'];
    
    $get_country = "select * from country where country_name='$country_name'";
    
    $run_country = mysqli_query($con,$get_country);
    
    $row_country = mysqli_fetch_array($run_country);
    
    $country_name = $row_country['country_name'];
    
    $country_img = $row_country['country_img'];
    
    $country_id = $row_country['country_id'];
    
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
                       <a href="country_holiday.php?country_id=<?php echo $country_id; ?>"><?php echo $country_name; ?></a>
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
                                       <center><img class="img-responsive" src="country_images/<?php echo $country_img; ?>" alt="country image"></center>
                                        <h1 class="text-center"> <?php echo $country_name; ?> </h1>

                                   </div>
                               </div>

                           </div><!-- carousel slide Finish -->
                       </div><!-- mainImage Finish -->


                   </div><!-- col-sm-6 Finish -->
                   
                <form method="get" action="accommodation.php" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->

                   
                    <div class="col-sm-6"><!-- col-sm-6 Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->

                                    <div class="form-group"><!-- form-group Begin -->
                       
                                        <label class="col-md-3 control-label"> State/Province </label> 
                      
                                        <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                                            <select name="country_state" class="form-control"><!-- form-control Begin -->
                              
                                            <option selected disabled> Select a state/province/area </option>
                              
                              <?php 
                              
                              $get_state = "select * from state WHERE state_country_id = '$country_id'";
                              $run_state = mysqli_query($con,$get_state);
                              
                              while ($row_state=mysqli_fetch_array($run_state)){
                                  
                                  $state_id = $row_state['state_id'];
                                  $state_name = $row_state['state_name'];
                                  
                                  echo "
                                  
                                  <option value='$state_id'> $state_name </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                                            </select><!-- form-control Finish -->
                          
                                        </div><!-- col-md-6 Finish -->
                       
                                    </div><!-- form-group Finish -->

                           </div><!-- carousel slide Finish -->


                   </div><!-- col-sm-6 Finish -->
                   
                    <div class="col-sm-6"><!-- col-sm-6 Begin -->
                           <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->

                                    <div class="form-group"><!-- form-group Begin -->
                       
                                        <label class="col-md-3 control-label"> Holiday </label> 
                      
                                        <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                                            <select name="country_holiday" class="form-control"><!-- form-control Begin -->
                              
                                            <option selected disabled> Select a holiday </option>
                              
                              <?php 
                                                
                                                                                          
                                $get_holiday = "select * from holiday WHERE holiday_country_id = '$country_id'";
                                                
                              $run_holiday = mysqli_query($con,$get_holiday);
                              
                              while ($row_holiday=mysqli_fetch_array($run_holiday)){
                                  
                                  $holiday_id = $row_holiday['holiday_id'];
                                  $holiday_name = $row_holiday['holiday_name'];
                                  $holiday_img = $row_holiday['holiday_img'];

                                  
                                  echo "
                                  
                                  <option value='$holiday_id'> $holiday_name </option>
                                  
                                  ";
                                  
                              }
                            
    

                              
                              ?>
                              
                                            </select><!-- form-control Finish -->
                          
                                        </div><!-- col-md-6 Finish -->
                       
                                    </div><!-- form-group Finish -->

                           </div><!-- carousel slide Finish -->


                   </div><!-- col-sm-6 Finish -->
                    
                    <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->

                          <input name="submit" value="Search Accommodation" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                    
                </form>
                   
               </div><!-- row Finish -->
               
               <div class="box" id="details"><!-- box Begin -->
                       
                       <h4>Holidays of the Country</h4>

                          
       <div class="row"><!-- row Begin -->
          
                              <?php 
                              
                              $get_holiday = "select * from holiday WHERE holiday_country_id = '$country_id'";
                              $run_holiday = mysqli_query($con,$get_holiday);
                              
                              while ($row_holiday=mysqli_fetch_array($run_holiday)){
                                  
                                  $holiday_id = $row_holiday['holiday_id'];
                                  $holiday_name = $row_holiday['holiday_name'];
                                  $holiday_img = $row_holiday['holiday_img'];

                                  echo "
                                  
         <div class='col-md-4 col-sm-6 single'>
        
            <div class='country'>
            
                
                    <img class='img-responsive' src='holiday_images/$holiday_img'>
                
                
                <div class='text'>

                
                    <h3>
            
                        <center>

                            $holiday_name
                            
                        </center>


                    
                    </h3>
                    

                
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
   
        <?php 

if(isset($_POST['submit'])){
    
    $country_state = $_POST['country_state'];
    
    $country_holiday = $_POST['country_holiday'];


    echo"
    <a href='accommodation.php?country_id=$country_id&state_id=$country_state&holiday_id=$country_holiday'></a>
";       
           
}

?>
    
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>
