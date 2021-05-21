<?php 

$db = mysqli_connect("localhost","root","","CPT304");

/// begin getRealIpUser functions ///

function getRealIpUser(){
    
    switch(true){
            
            case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            default : return $_SERVER['REMOTE_ADDR'];
            
    }
    
}

/// finish getRealIpUser functions ///



/// begin getCountry functions ///

function getCountry(){
    
    global $db;
    
    $get_country = "select * from country order by 1 DESC LIMIT 0,8";
    
    $run_country = mysqli_query($db,$get_country);
    
    while($row_country=mysqli_fetch_array($run_country)){
        
        $country_id = $row_country['country_id'];
        
        $country_name = $row_country['country_name'];
        
        $country_img = $row_country['country_img'];


        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='country'>
            
                <a href='country_holiday.php?country_id=$country_id'>
                
                    <img class='img-responsive' src='country_images/$country_img'>
                
                </a>
                
                <div class='text'>

                
                    <h3>
            
                        <a href='country_holiday.php?country_id=$country_id'>
                        <center>

                            $country_name
                            
                        </center>


                        </a>
                    
                    </h3>
                    

                
                </div>

                
            
            </div>
        
        </div>
        
        ";
        
    }
    
}

/// finish getCountry functions ///
?>