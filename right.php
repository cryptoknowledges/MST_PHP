<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="mst.css">
</head>
<body>

 
    <table border="1">
        <tr><th width="2.5%">SL. NO</th>
        	<th width="30%">Name</th>
            <th width="9%">Email</th>
            <th width="9%">Contact</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM form");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td><b>{$row['id']}</td>
                    <td><b>{$row['name']}</td>
                    <td><b>{$row['email']}</td>
                    <td><b>{$row['phone']}</td>
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
