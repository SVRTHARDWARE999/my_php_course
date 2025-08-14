<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "variables.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname"?> - submit</title>
</head>
<body>

    <h2>
        <?php

            $username = $_POST['username'];
            echo "👋 Hello ! <strong>$username</strong>";
        ?>
    </h2>
    
    
</body>
</html>