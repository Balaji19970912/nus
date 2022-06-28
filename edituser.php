<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Edit user Details</title> -->
    <link rel="stylesheet" href="css/edituser.css">
        <title>NUS Consulting Group |Edit user Details </title>
    <link rel="icon" href="img/social-square-n-blue.png">
    
</head>
<body>
    <div class = "userform">
        <form action="postedituser.php" method="POST">
                <header class="head">
                <a class="edituserdetails">Edit user Details</a>
                <div class="close-btn" onclick="togglepopUp()">&times;</div>
                <br/>
            </header>
            <br>
        <hr width="450px" color="whitegrey" >
         <br>
            <label for ="username">User name</label>
            <br>
            <br>
            <input autocomplete="off" type="text" name="username" class="username" id="username" placeholder="Enter username" onkeyup="isEmpty()" required>
            <br>
            <br>
            <br>
            <label for ="email">Enter email</label>
            <br>
            <br>
            <input autocomplete="off" type="text" name="emailId" class="email" id="email" placeholder="Enter email" onkeyup="isEmpty()" required>
            <br>
            <br>
            <hr width="450px" color="whitegrey" >
            <br>
                <!-- <input class="btnSubmit" type="submit" value="Save changes" onclick="msg()"/>
                <input class="btn" type="submit" value="Cancel"/>
                <input class="resendinvite" type="submit" value="Resend invite" -->
                <div class="buttonSection">
                <!-- <input  name="resendinvite" value="Resend Invite" type="reset" class="resendinviteUser" > -->
                <input name="cancel" value="Cancel" type="reset" class="cancelUser" onclick=window.history.go(-1);>
                <input value="save Changes"  class="savechanges" id="enable_button" name ="submit" type="submit" >
            <br>
            </div>
        </form>
     
    </div>

  
        </body>
        </html>
        
 