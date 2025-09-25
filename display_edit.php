<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="mst.css">
</head>
<body>
   <center> <h1>Edit Member's Details</h1></center>
    <table border="1">
        <tr><th width="2.5%">SL. NO</th>
        	<th width="30%">Name</th>
            <th width="9%">Actions</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM form");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td><b>{$row['id']}</td>
                    <td><b>{$row['name']}</td>
                    <td><a href='edit.php?id={$row['id']}'><input type='submit' value='EDIT'class='btn' style='background-color: orange;'></a>
                    </td>
                  </tr>";
        }
        ?>
    </table>
<style>
	table th,td 
	{
		font-size: 1.4rem;
	}
</style>
</body>
</html>
