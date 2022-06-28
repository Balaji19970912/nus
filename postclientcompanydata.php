<?php

include "dbconn.php";

$client = $_POST["clientcompany"];
$parent = $_POST["parentcompany"];
$country = $_POST["country"];




$sql = "INSERT INTO clientcompanydata(clientcompany, parentcompany, country)
        VALUES('$client','$parent', '$country')";

mysqli_query($conn,$sql);

echo "<script>
        alert('Client company added succesfully'); 
        window.history.go(-2);
</script>";

?>