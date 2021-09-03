<?php
//include "encrypt.php";?>
<?php
    include("config.php");
?>
<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
        </style>
    </head>
    <body>
        <div> 
        <?php
        $fetchVidos = mysqli_query($con, "SELECT * FROM documents ORDER BY id DESC");;
        echo "<div style='width:30%;height:90%;top:9%;left:0%;border:2px solid red;position:absolute;'>";
        while($row = mysqli_fetch_assoc($fetchVidos)){
            $location = $row['location'];
                  $decrypted_txt = encrypt_decrypt('decrypt', $location);
            
            echo "<div style='border:2px solid blue;'>";
            echo "<img src='".$decrypted_txt."' controls width='25%' height='25%'>";
            echo "</div>";
        }
        echo "</div>";
        echo '<div style="width:60%;height:80%;top:10%;right:5%;border:2px solid green;position:absolute;"></div>';
        ?>
          
        </div>

    </body>
</html>
