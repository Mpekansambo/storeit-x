      <?php
   include("config.php");
      if(isset($_POST['submit']))
      {
            $filepath="image/" .$_FILES["file"]["name"];    
            if(move_uploaded_file(['file'], ["tmp_name"], $filepath))
            {
                  echo "<img src" .$filepath ."height=200 width=300/>";

            } 
            else
            {
            echo "error !!";  
            }
            }
      ?>
