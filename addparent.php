<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUS Consulting Group | Add Parent Company </title>
    <link rel="icon" href="img/social-square-n-blue.png">
    <link rel="stylesheet" href="css/addparent.css">
    
</head>
<body>
    <div class = "userform", id="popup-1">
        <form action="postparentcompanydata.php" method="POST">
            <header class="head">
                <a class="addnewparent">New parent entity</a>
                <div class="close-btn"onclick='window.history.go(-1);'>&times;</div>
                <br/>
            </header>
            <br>
        <hr width="450px" color="whitegrey" >
         <br>
            <label for ="parentEntityname">Parent entity name</label>
            <br>
            <br>
            <input autocomplete="off" type="text" name="parentcompany" class="parentEntity" id="parententityname" placeholder="Enter the name of parent entity" onkeyup="isEmpty()" required>
            <br>
            <br>
            <hr width="450px" color="whitegrey" >
            <br>
                
                <div class="buttonSection">
                <input name="cancel" value="Cancel" type="reset" class="cancelParent" onclick='window.history.go(-1);'>
                <input value="Create" class="createParent" type="submit" >
            <br>
            </div>
        </form>
    </div>



    <script>
        function togglepopUp() {
            document.getElementById("popup-1").classList.toggle("active");
        }

        const submitButton = document.getElementById("enable_button");
        const input = document.getElementById("parententityname");
        input.addEventListener("keyup", (e) => {
            
            const value = e.currentTarget.value;
            if(value === "") {
                submitButton.disabled = true;
            } else {
                submitButton.disabled = false;
            }
        });
    </script>

        </body>
        </html>
        
 