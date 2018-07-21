<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Live Edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    
</head>
<body>
    <div class='container'>
        <table width='100%' border='0'>
            <tr>
                <th width='10%'>S.no</th>
                <th width='40%'>Username</th>
                <th width='40%'>Name</th>
            </tr>
            <?php 
                include 'config.php';
                $query = "SELECT * FROM users ORDER BY name";
                $result = mysqli_query($con, $query);

                $count = 1;
                while ($row = mysqli_fetch_array($result)) {
                    extract($row); ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td>
                        <div contentEditable='true' 
                        class='edit' id ='username_<?php echo $id; ?>'>
                            <?php echo $username; ?>
                        </div>
                    </td>
                    <td>
                        <div contentEditable='true'
                        class='edit' id='name_<?php echo $id; ?>'>
                            <?php echo $name; ?>
                        </div>
                    </td>
                </tr>
            <?php
                    $count++;
                }
            ?>
        
        </table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="main.js"></script>      
</body>
</html>