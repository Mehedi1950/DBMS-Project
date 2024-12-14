<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibitions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Exhibitions List</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr><th>Name</th><th>Location</th><th>Date</th></tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM Exhibitions";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["Name"]."</td><td>".$row["Location"]."</td><td>".$row["Date"]."</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3' class='text-center'>No exhibitions found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
