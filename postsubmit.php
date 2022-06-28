<?php

include "dbconn.php";

$emailid=$_POST["emailid"];

$verified = 'Confirmed';

$sql = "UPDATE nususerdata SET accountstatus='".$verified."' WHERE emailid='".$emailid."'";
$conn->query($sql);



// header('location: homepagecopy.php');


// function popupData() {
//     echo '<script type="text/javascript">alert("Thanks for registring...!");window.location="savedata.php";</script>';
// }

?>