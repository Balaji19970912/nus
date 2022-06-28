<?php

include "dbconn.php";

$parent = $_POST["parentcompany"];

$sql = "INSERT INTO parentcompanydata(parentcompany)
        VALUES('$parent')";

mysqli_query($conn,$sql);

echo "<script>
        alert('Parent company added succesfully'); 
        window.history.go(-2);
</script>";

?>