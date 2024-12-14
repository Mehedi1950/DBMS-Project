<?php include('../includes/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Ticket Purchases</h1>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr><th>Visitor</th><th>Exhibition</th><th>Price</th><th>Purchase Date</th></tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT Visitors.Name AS Visitor, Exhibitions.Name AS Exhibition, Tickets.Price, Tickets.PurchaseDate 
                        FROM Tickets
                        JOIN Visitors ON Tickets.VisitorID = Visitors.VisitorID
                        JOIN Exhibitions ON Tickets.ExhibitionID = Exhibitions.ExhibitionID";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) 
                        echo "<tr><td>".$row["Visitor"]."</td><td>".$row}
                    
