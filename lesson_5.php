<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "variables.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname - 5" ?></title>
</head>
<body>

    <h3>in lesson 5 of php we are going to learn about <u>HTML forms & $_POST & $_GET</u></h3>
    <p>
        <strong>what is a form ❓</strong><br>
        an HTML form is a section where user can input data , like :
        <ul>
            <li>names</li>
            <li>emails</li>
            <li>password</li>
            <li>orders</li>
            <li>comments</li>
        </ul>
        then PHP collects and processes that data using <mark>$_post or $_GET</mark> <br>
        <u>$_POST</u> is used to send form data to database <br>
        <u>$_GET</u> is used to request data from database using form
    </p>


    <hr>
    
    <h5>a simple html form of <mark>$_POST</mark> method</h5>
    <ul>
        <li><mark>method="POST"</mark> - hides data in request body ( used for login , payments , etc..)</li>
        <li><mark>action="submit.php"</mark>  - where data is sent to a ( PHP file )</li>
    </ul>
    <pre>
        <code>

            <form method="POST" action="lesson_5.php"> // here we are using POST method 
                <input type="text" name="username" required placeholder="enter your name">
                <input type="submit" value="submit">
            </form>

        </code>
    </pre>
   

    <h5>posting data to PHP file using <mark>$_POST</mark> method</h5>
    <p>
        to receive the form data in php file we need to create a targeted php file in this case our targeted file name was lesson_5.php
    </p>
    <pre>
        <code>
            &lt;?php

                //php code for lesson_5.php file

                $username = $_POST['username']; // getting form data using $_POST method
                echo "welcome $username"; // output of form data in page

            ?&gt;
        </code>
    </pre>

    <h5>output</h5>
    <div style="width:100%; display:flex; overflow-x:hidden; flex-direction:row;">
        <form method="POST" action="lesson_5.php" style="border:1px solid; width:max-content; margin:2%; padding:5%;">
            <h4>form of <mark>$_POST</mark> method</h4>
            <input type="text" name="username" required placeholder="enter your name">
            <input type="submit" value="submit">
        </form>

        <br>

        <div style="border:1px solid; width:max-content; margin:2%; padding:5%;">
            form submit output here <br>
            <?php
                $username = $_POST['username'];
                echo "<h4>👋 hello ! $username</h4>";
            ?>
        </div>  
    </div>

    <hr>

    <h5>a simple html form of <mark>$_GET</mark> method</h5>
    <ul>
        <li>the <mark>$_GET</mark> method is used to request data</li>
        <li>mostly the <mark>$_GET</mark> method is used to get search results or to fetch data from database</li>
        <li>the <mark>$_GET</mark> method uses <u>?</u> query parameters to get data</li>
        <li>the <mark>$_GET</mark> method is not safer for sensitive data</li>
    </ul>

    <pre>
        <code>
            <form action="lesson_5.php" method="get">
                <input type="text" placeholder="search here">
                <input type="submit" value="search">
            </form>
            
            <!-- php script -->
             &lt;?php
                $search = $_GET['q'];
                echo "you searched for <strong>$search</strong>";
             ?&gt;
        </code>
    </pre>



    <h5>output</h5>

    <div style="width:100%; display:flex; overflow-x:hidden; flex-direction:row;">
        <form action="lesson_5.php" method="get" style="border:1px solid; width:max-content; margin:2%; padding:5%;">
            form of <mark>$_GET</mark> method <br>
            <input type="search" placeholder="search here" name="q">
            <input type="submit" value="search">
        </form>

        <div style="border:1px solid; width:max-content; margin:2%; padding:5%;">
            form submit output here <br>
            <?php

                $search = $_GET["q"];
                echo "you searched for &nbsp;<strong> $search</strong>";
                

            ?>
        </div>
        
    </div>
    
    

    <br><br>
    <?php include "nav.php"?>
</body>
</html>