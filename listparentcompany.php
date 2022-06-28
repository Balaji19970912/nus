<?php 

include 'dbconn.php';

$sql = "select * from parentcompanydata;";
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
    <title>NUS Consulting Group | Parent Company List</title>
    <link rel="icon" href="img/social-square-n-blue.png">
    <link
      rel="stylesheet"
      href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"
    />
    <style>

        #DataTables_Table_0_wrapper {
            position: absolute;
            width: 77%;
        }

        #DataTables_Table_1_wrapper{
            position: absolute;
            width: 70%; 
            margin: 40px 0 0 0;
        }
      
        table {
            border: 2px solid #D2DDEC;
            border-radius: 6px;
        }
        /* table.dataTable thead > tr > th.sorting_asc::before {
            opacity: 1;
            position: absolute;
            left: 13%;
            color: black;
        }
        table.dataTable thead > tr > th.sorting::after {
            opacity: 1;
            position: absolute;
            left: 13%;
            color: black;
        } */
        table th {
            color: #6E84A3;
            background: #F9FBFD;
        }
        table.myTable thead th {
	        border-bottom: 1px solid #D2DDEC !important;
        }
        table td {
            color: #12263F;
            font-size: 13px;
            border-bottom: 1px solid #D2DDEC;
        }
        table.dataTable.no-footer {
            /* border-bottom: 2px solid #D2DDEC !important; */
            border-bottom: none !important;
        }
    </style>
</head>
<body>
<table class="myTable" >
		<thead class="tableheadings">
			<tr>
			<th>Parent Company</th>
			</tr>
		</thead>
		<tbody>
        <?php
                if(!empty($row))
                foreach($row as $rows)
                {
                ?>
			<tr>

            <td><?php echo $rows['parentcompany']; ?></td>    
                
			</tr>
			<?php } ?>
		</tbody>
	</table>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></sript>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".myTable").DataTable();
        });
    </script>
    </body>
</html>
