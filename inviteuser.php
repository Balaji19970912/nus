<!-- jQuery library -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Edit user Details</title> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://phpcoder.tech/multiselect/js/jquery.multiselect.js"></script>
    <link rel="stylesheet" href="https://phpcoder.tech/multiselect/css/jquery.multiselect.css">
    <link rel="stylesheet" href="css/a.css">
        <title>NUS Consulting Group |Add user</title>
    <link rel="icon" href="img/social-square-n-blue.png">
    
</head>
<body>
    <div class = "userform">
        <form action="postinviteuser.php" method="POST">
                <header class="head">
                <span class="Adduser ">Add user</span>
                <div class="close-btn" onclick='window.history.go(-1);'>&times;</div>
                <br>
            <hr class="lines">
          
                <label class="userdata">User name</label>
    
           
                <input autocomplete="off" type="text" name="username" class="userNames" placeholder="Enter username" onkeyup="isEmpty()" required>

                <label class="emaildata">Enter Email</label>
             
                <input autocomplete="off" type="text" name="emailid" class="emailiddata"  placeholder="Enter email" onkeyup="isEmpty()" required>
              
                <label class="role">Role</label>
            
                    <select onchange="ChangeDropdowns(this.value)" id="role" class="selecting" name="role">
                        <option value="*" >Select an option</option>
                        <option value="Admin"  >Admin</option>
                        <option value="NUS Manager"  >NUS Manager</option>
                        <option value="NUS User"  >NUS User</option>
                        <option value="Parent company">Parent company</option>
                        <option value="Client company">Client company</option>
                   </select>
               
                <div class = "userform"  id='showunit' style="display:none" >
                    <label class="roleid">Parent company</label>
                   
                        <select id="showunit" name="parentcompany" id="showunit"  class="roleparent">
                            <option disabled selected>Select a parent company</option>
                                <?php
                                    include "dbconn.php";  // Using database connection file here
                                
                                    $parentcompany = mysqli_query($conn, "SELECT * From parentcompanydata");  // Use select query here 

                                    while($parentcompanydata = mysqli_fetch_array($parentcompany))

                                    {
                                        echo "<option value='". $parentcompanydata['parentcompany'] ."'>" .$parentcompanydata['parentcompany'] ."</option>";  // displaying data in option menu
                                    }	
                                ?>  
                        </select>
                </div>

        <div class = "userform"  id='show' style="display:none" >
    
                <label class="roleid">Parent company</label>
                <br>
                    <select id="roleparentdata" name="parentcompany" class="roleparent">
                        <option disabled selected>Select a parent company</option>
                            <?php
                                include "dbconn.php";  // Using database connection file here
                            
                                $parentcompany = mysqli_query($conn, "SELECT * From parentcompanydata");  // Use select query here 

                                while($parentcompanydata = mysqli_fetch_array($parentcompany))

                                {
                                    echo "<option value='". $parentcompanydata['parentcompany'] ."'>" .$parentcompanydata['parentcompany'] ."</option>";  // displaying data in option menu
                                }	
                            ?>  
                    </select>
              

                <label class="rolebusiness">Bussiness units</label>
           

                    <select class="bussinessrole" name="bussinessunit[]" multiple id="units">
                    
                            <?php
                                include "dbconn.php";  // Using database connection file here
                            
                                $clientcompany = mysqli_query($conn, "SELECT clientcompany From clientcompanydata");  // Use select query here 

                                while($clientcompanydatas = mysqli_fetch_array($clientcompany))

                                {
                                    echo "<option value='". $clientcompanydatas['clientcompany'] ."'>" .$clientcompanydatas['clientcompany'] ."</option>";  // displaying data in option menu
                                }	
                            ?>  
                    </select>
                </div>
        <label for="" class="password">Password</label>
     

        <input type="password" class="passwordvalue" name="password" placeholder="Enter your password" required>
    
        <hr class="lines">
                    <div class="clientbuttonSection">
                        <input name="cancel" value="Cancel" type="reset" class="cancelUser" onclick='window.history.go(-1);'>
                        
                        <!-- <input value="Create Client" class="createClient" id="enable_button" type="submit" disabled> -->
                        <input value="Invite User" class="inviteUser" id="enable_button" type="submit" name="submit" >
                </div>  
        </form>
    </div>
</div> 

  <script>
        function ChangeDropdowns() {
        const dropDown = document.getElementById('role').value;
        const div = document.getElementById('show');
        const div1 = document.getElementById('showunit');

        console.log('Inside Changedropdown client');
        
        console.log(dropDown)
        if(dropDown == "Client company") {
            div.style.display = 'block';
        }
        else if(dropDown == "Parent company") {
            div1.style.display = 'block';
        }
        else {
            div.style.display = 'none';
        }
    }
    </script>

<script>
    jQuery('#units').multiselect({
    columns: 1,
    placeholder: 'Select one or more Bussiness units',
});
</script>

<script>
        function togglepopUp() {
            document.getElementById("popup-1").classList.toggle("active");
        }
</script>
   
</body>
 </html>
        
 









