<?php
include('../includes/db.php');

$sql = "SELECT * FROM Exhibitions";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exhibitions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Exhibitions</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["Name"] . "</td><td>" . $row["StartDate"] . "</td><td>" . $row["EndDate"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No exhibitions found.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="../index.php" class="btn btn-primary">Back to Home</a>
    </div>
</body>
</html>
