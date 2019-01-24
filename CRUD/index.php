<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="row">
        <h3>PHP CRUD Grid</h3>
    </div>
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Book_ID</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
			<?php
				include 'controlador/database.php';
				$pdo = Database::connect();
				$sql = "SELECT * FROM books";
				foreach ($pdo->query($sql) as $row) {
					echo '<tr>';
					echo '<td>'. $row['book_id'] . '</td>';
					echo '<td>'. $row['title'] . '</td>';
					echo '<td>'. $row['price'] . '</td>';
					echo '</tr>';
				}
				Database::disconnect();
			?>
            </tbody>
        </table>
    </div>
</div> <!-- /container -->
</body>
</html>
