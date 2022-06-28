<?php

    include 'dbconn.php';

        $emailid=$_POST["emailId"];

        $username =$_POST["username"];
        
        $sql = "UPDATE nususerdata SET username='".$username."' WHERE emailId='".$emailid."'";
        $conn->query($sql);
        
echo "<script>
        alert(' User details edited succesfully'); 
        window.history.go(-2);
</script>";
?>