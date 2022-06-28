<?php

include ('dbconn.php');
    $sql = "select username, emailid, accountstatus, parentcompany from nususerdata where role=\"Parent company\";";
    $result = ($conn->query($sql));
	//declare array to store the data of database
	$row = [];

	if ($result->num_rows > 0)
	{
		// fetch all data from db into array
		$row = $result->fetch_all(MYSQLI_ASSOC);
	}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUS Consulting Group | Client Company List</title>
    <link
      rel="stylesheet"
      href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"
    />
    <style>
        #DataTables_Table_6_wrapper {
            position: absolute;
            width: 78%;
            margin: 50px 0 0 0;
        }
    </style>
</head>
<body>
    <table class="myTable">
    <thead>
			<tr>		
            <th>Username</th>
            <th>Email</th>
            <th>Account Status</th>
            <th>Parent Company</th>

			<th></th>

			</tr>
		</thead>
		<tbody>
			<?php
                if(!empty($row))
                foreach($row as $rows)
                {
                ?>
                <tr>       
                    
                    <td><?php echo $rows['username']; ?></td>
                    <td><?php echo $rows['emailid']; ?></td>
                    <td><?php echo $rows['accountstatus']; ?></td>  
                    <td><?php echo $rows['parentcompany']; ?></td>    
                  
				<td class="threedot">
				<div class="dropouts">
					<button class="click">
					<span></span>
					<span></span>
					<span></span>
					</button>
					<ul class="dropboxs">
					<li>
						<a id="editing" href="edituser.php">Edit details</a>
					</li>
					<li>
					<a href="move.php" id="moving">Move User</a>
					</li>
					
					</ul>
				</div>
				</td>

                </tr>
			<?php } ?>
		</tbody>
    </table>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
        $(".myTable").DataTable();
        });
    </script>
</html>