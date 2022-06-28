<?php

    include 'dbconn.php';

        $emailid=$_POST["emailId"];
        $role=$_POST["role"];
      
        $sql = "UPDATE nususerdata SET role ='".$role."' WHERE emailId='".$emailid."'";
        $conn->query($sql);
        
echo "<script>
        alert(' User Moved succesfully'); 
        window.history.go(-2);
</script>";

?>