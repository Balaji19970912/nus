<?php include 'dbconnect.php';

$printdata ='';
$printdata .="<div>
                <label class='roles'>Parent company</label>
                    <select id='showunit' name='parentcompany' id='showunit'>
                        <option disabled selected>Select a parent company</option>";
                        $parentcompany = mysqli_query($conn, "SELECT * From parentcompanydata");  
                        while($parentcompanydata = mysqli_fetch_array($parentcompany))
                        {
                              $printdata .= "<option value='". $parentcompanydata['parentcompany'] ."'>" .$parentcompanydata['parentcompany'] ."</option>";   
                        }	
                             
$printdata .='</select>
            </div>';
echo $printdata;
?>