
<?php

$link = mysqli_connect("localhost", "root", "", "demo");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
  
    $sql = "SELECT * FROM Pemilik_gor WHERE nama LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){

        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
   
        $param_term = $_REQUEST["term"] . '%';
        
    
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
       
            if(mysqli_num_rows($result) > 0){
        
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>" . $row["Pemilik_gor"] . "</p>";
                }
            } else{
                echo "<p>tidak ada Nama Pemilik Gor</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     

    mysqli_stmt_close($stmt);
}
 

mysqli_close($link);
?>