<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'variables.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="theme.css">
    <link rel="stylesheet" href="highlight.css">
    <script src="highlight.min.js"></script>
    <script>hljs.highlightAll();</script> -->
    <title><?php echo $webname ?></title>
</head>
<body>

    <h2>php stands for <u>hypertext preprocesser</u> or <u>personolized home page</u>.it runs on server side and injects <u>database <i>{ MYSQL , SQL }</i></u> to the website</h2>
    <br>
    <h5>syntax of PHP</h5>
    <p>in php the script syntax starts with <mark>?</mark> symbol and also ends with <mark>?</mark> symbol and the whloe syntax was <mark>&lt;?php?&gt;</mark></p>
    <pre>
        <code>
            &lt;?php
                echo "🎉 PHP is working perfectly!"
            ?&gt;
        </code>
    </pre>
    <h5>output</h5>
    <?php
        echo "

            <h9>🎉 PHP is working perfectly!</h9>
        ";
    ?>

    <br><br>

    <!-- Navigation Bars -->

    <?php include_once 'nav.php'; ?>
    
</body>
</html>
