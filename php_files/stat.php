<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp Data</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
            'Lucida Sans', Arial, sans-serif;
            text-align: center;
        }
        .div-stat{
            margin-top: 2rem;
        }
        .stat-header {
            margin-top: 0.5rem;
        }
        .stat {
            border: 1px solid #000080;
            border-collapse: collapse;
            padding: 5px 5px;
            margin: auto;
            text-align: center;
            background-color: #998282;
            font-family: 'Courier New', Courier, monospace;
            font-weight: 2rem;
        }
    </style>
</head>
<body>
    <div class="div-stat">
        <?php
            $connection = new mysqli("trucorp-db-2.0", "team0", "team0", "Trucorp");
            if($connection->connect_error){
                die("Error connecting to DB: " . $$connection->connect_error);
            }
            $query = 'SELECT * FROM users';
            $result = $connection->query($query);
        ?>
        <h1 class="stat-header">Trucorp Users Now:</h1>
        <h4 class="stat"><?=$result->num_rows?></h4>
    </div>
</body>
</html>
