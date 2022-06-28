<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUS Consulting Group | Move users </title>
    <link rel="icon" href="img/social-square-n-blue.png">
    <link rel="stylesheet" href="css/move.css">
    <title>NUS Consulting Group |Move user</title>
    <link rel="icon" href="img/social-square-n-blue.png">
    
</head>
<body>
    <div class = "userform">
        <form action="postmoveuser.php" method="post">
            <header class="head">
                <a class="moveuser">Move user</a>
                <input class="close" type="button" value="X"/>
                <br/>
            </header>
            <br>
        <hr width="450px" color="whitegrey" >
            <br>
            <label for ="email">Enter email</label>
            <br>
            <br>
            <input autocomplete="off" type="text" name="emailId" class="email" id="email" placeholder="Enter email" onkeyup="isEmpty()" required>
            <br>
            <br>
            <label for="">Role</label>
            <br>
            <br>
                <select name="role">
                    <option hidden>Select an option</option>
                    <option>Admin</option>
                    <option>NUS Manager</option>
                    <option>NUS User</option>
                    <option value="Parent company">Parent company</option>
                    <option value="Client company">Client company</option>
                </select>
                <br>
                <br>
                <hr width="450px" color="whitegrey" >
                <br>
                <input class="btnSubmit" type="submit" name="submit" value="Save changes" onclick="msg()">
                <input class="btn" type="submit" value="Cancel" onclick=window.history.go(-1);>
            <br>
            </form>
            
        </div>

        </body>
        </html>
        
 