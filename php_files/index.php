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
        .div-tables{
            margin-top: 2rem;
            width: 100%;
        }
        .table-header {
            margin-top: 0.5rem;
        }
        .tables {
            margin: auto;
            margin-top: 0.5rem;
            margin-bottom: 1rem;
        }
        table, th, td {
        	border: 1px solid #000080;
            border-collapse: collapse;
            padding: 5px 5px;
            margin: 5px 5px;
            text-align: center;
        }
        th {
            background-color: #998282;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <div class="div-tables">
        <h1 class="table-header">Trucorp Data</h1>
        <table class="tables">
            <tr>
                <?php
                    $connection = new mysqli("trucorp-db-2.0", "team0", "team0", "Trucorp");
                    if($connection->connect_error){
                        die("Error connecting to DB: " . $$connection->connect_error);
                    }
                    $columns = ['ID', 'Nama', 'Alamat', 'Jabatan'];
                    foreach($columns as $col){
                        echo("<th>$col</th>");
                    }
                ?>
            </tr>
            <?php
                $query = 'SELECT * FROM users';
                $result = $connection->query($query);

                if ($result->num_rows > 0){
                    while ($data = $result->fetch_assoc()){
            ?>
                        <tr>
                            <?php
                            foreach($columns as $col){
                                echo("<td>$data[$col]</td>");
                            }
                            ?>
                        </tr>
            <?php
                    }
                }
            ?>
        </table>
    </div>
</body>
</html>
