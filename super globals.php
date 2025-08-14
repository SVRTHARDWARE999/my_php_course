<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "variables.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname super globals"; ?></title>
</head>
<body>

    <h5>PHP super globals</h5>
    <p>
        <u>super globals</u> are <strong>built-in PHP variables</strong> that are available in all scopes. they contain important
        information about the request , server , session , and more. here's a breakdown with real-world examples.
    </p>

    <table>
        <tbody>
            <thead>
                <tr>
                    <td>super globals</td>
                    <td>primary use</td>
                </tr>
            </thead>
            <tr>
                <td>$GLOBALS</td>
                <td>access all global variables anywhere.</td>
            </tr>
            <tr>
                <td>$_SERVER</td>
                <td>server , script , and request info.</td>
            </tr>
            <tr>
                <td>$_REQUEST</td>
                <td>combines GET , POST , COOKIE data.</td>
            </tr>
            <tr>
                <td>$_POST</td>
                <td>form data via POST method</td>
            </tr>
            <tr>
                <td>$_GET</td>
                <td>data via URL query string</td>
            </tr>
            <tr>
                <td>$_FILES</td>
                <td>handling file uploads</td>
            </tr>
            <tr>
                <td>$_ENV</td>
                <td>environment variables.</td>
            </tr>
            <tr>
                <td>$_COOKIE</td>
                <td>client side stored variables</td>
            </tr>
            <tr>
                <td>$_SESSION</td>
                <td>server side stored variables per user</td>
            </tr>
        </tbody>
    </table>

    <hr>

    <!-- php scripts of $GLOBALS -->
    <h5><strong><u>$GLOBALS</u></strong> - access all global variables anywhere.</h5>
    <p><strong>✅ use case -</strong> share data between functions without passing parameters.</p>
    <pre>
        <code>
            &lt;?php

                $x = 5;
                $y = 10;

                function addNumbers(){

                    // using $GLOBALS to use variables outside function
                    $GLOBALS["sum"] = $GLOBALS["X"] + $GLOBALS["y"];
                }

                addNumbers();
                echo "the sum is : <strong>$sum</strong>" //15

            ?&gt;
        </code>
    </pre>

    <h5>output of <u>$GLOBALS</u></h5>
    <?php

    $x = 5;
    $y = 10;

    // using $GLOBALS to use variables outside function
    function addNumbers(){
        $GLOBALS["sum"] = $GLOBALS["x"] + $GLOBALS["y"];
    }

    addNumbers();
    echo "the sum is : <strong>$sum</strong>";
    ?>

    <hr>

    <!-- php script of $_SERVER -->

    <h5><strong><u>$_SERVER</u></strong> - server & request info.</h5>
    <p><strong>✅ use case -</strong> get information about the script , request , and client device.</p>
    <pre>
        <code>
            &lt;?php

                echo "current files : " . $_SERVER["PHP_SELF"] . "<br>";
                echo "server name : " . $_SERVER["SERVER_NAME"] . "<br>";
                echo "host name : " . $_SERVER["HTTP_HOST"] . "<br>";
                echo "request method : " . $_SERVER["REQUEST_METHOD"] . "<br>";
                echo "user agent : " . $_SERVER["HTTP_USER_AGENT"] . "<br>";
            ?&gt;
        </code>
    </pre>

    <h5>output of <u>$_SERVER</u></h5>

    <?php

        echo "current files : " . $_SERVER["PHP_SELF"] . "<br>";
        echo "server name : " . $_SERVER["SERVER_NAME"] . "<br>";
        echo "host name : " . $_SERVER["HTTP_HOST"] . "<br>";
        echo "request method : " . $_SERVER["REQUEST_METHOD"] . "<br>";
        echo "user agent : " . $_SERVER["HTTP_USER_AGENT"] . "<br>";

    ?>

    <hr>

    <!-- php script of $_REQUEST -->
    
    <h5><strong><u>$_REQUEST</u> -</strong> get + post + cookie data</h5>
    <p><strong>✅ use case -</strong> quick access to user input regardless of request method. not recomended for security - sensitive input because it mixes sources.</p>
    <pre>
        <code>
            &lt;?php

                // $_ REQUEST is used to access $_GET , $_POST & $_COOKIE
                echo "name is : " . $_REQUEST["name"] . "";
            ?&gt;
        </code>
    </pre>

    <h5>output of <u>$_REQUEST</u></h5>

    <?php

        echo "name is : " . $_REQUEST["name"] . "";
    ?>

    <hr>

    <!-- php script of $_POST -->
    
    <h5><strong><u>$_POST</u> -</strong> form data via post method</h5>
    <p><strong>✅ use case -</strong> safely handle form submissions , login credintials , comments , etc...</p>
    <pre>
        <code>
            <!-- HTML form using GET method -->
             <form action="super globals.php" method="POST">
                <input type="text" name="name" placeholder="enter your name">
                <button type="submit">submit</button>
             </form>

             <!-- PHP script of POST method -->
            
             &lt;?php

                // $_POST is used to get form data
                echo "👋 hello " . $_POST["name"];

             ?&gt;
        </code>
    </pre>

    <h5>output of <u>$_POST</u></h5>

    <div style="display:flex; flex-direction:row;">
        <!-- HTML form using POST method -->
             <form action="super globals.php" method="POST" style="width:max-content; border:1px solid; margin:1%; padding:1%;">
                form of <mark>$_POST</mark> method <br>
                <input type="text" name="name" placeholder="enter your name">
                <button type="submit">submit</button>
             </form>

             <!-- PHP script of POST method -->
            
             <div style="width:max-content; border:1px solid; margin:1%; padding:1%;">
                output of <mark>$_POST</mark> form <br>
                <?php

                    // $_POST is used to get form data
                    echo "👋 hello " . $_POST["name"];

                ?>
             </div>
             
    </div>

    <hr>

    <!-- PHP script of $_GET method -->
    <h5><strong><u>$_GET</u> -</strong> form data via post method</h5>
    <p><strong>✅ use case -</strong> passing parameters in the URL ( search queries , pagination , filters , dynamic web pages)</p>
    <pre>
        <code>
            <!-- HTML form using GET method -->
             <form action="super globals.php" method="GET">
                <input type="text" name="name" placeholder="enter your name">
                <button type="submit">submit</button>
             </form>

             <!-- PHP script of GET method -->
            
             &lt;?php

                // $_GET is used to get form data
                echo "👋 hello " . $_GET["name"];

             ?&gt;
        </code>
    </pre>

    <h5>output of <u>$_GET</u></h5>

    <div style="display:flex; flex-direction:row;">
        <!-- HTML form using POST method -->
             <form action="super globals.php" method="GET" style="width:max-content; border:1px solid; margin:1%; padding:1%;">
                form of <mark>$_GET</mark> method <br>
                <input type="text" name="name" placeholder="enter your name">
                <button type="submit">submit</button>
             </form>

             <!-- PHP script of POST method -->
            
             <div style="width:max-content; border:1px solid; margin:1%; padding:1%;">
                output of <mark>$_GET</mark> form <br>
                <?php

                    // $_POST is used to get form data
                    echo "👋 hello " . $_GET["name"];

                ?>
             </div>
             
    </div>

    <hr>

    <h5><strong><u>$_FILES</u> - </strong> handling file's uploads</h5>
    <p><strong>✅ use case -</strong> handling files uploads like file type , size , name and exctera.</p>
    <pre>
        <code>
            <!-- upload form -->
            <form action="super globals.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="myfile">
                <button type="submit">upload file</button>
            </form>

            <!-- PHP script -->
            &lt;?php
                if($_FILES["myfile"]["error"] === 0){
                    move_uploaded_file($_FILES["myfile"]["tmp_name"], "uploads/" . $_FILES["myfile"]["name"]);
                    echo "file uploaded sucessfully";
                }
            ?&gt;
        </code>
    </pre>

    <h5>output of <u>$_FILES</u></h5>
    <div style="width:max-content; padding:5%; margin:1%; border:1px solid;">
        <form action="super globals.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="myfile" required>
            <button type="submit">📁 upload file</button>
        </form>

        <div>
            <br>
            <?php

                if($_FILES['myfile']['error'] === 0){
                    move_uploaded_file($_FILES['myfile']['tmp_name'], "uploads/" . $_FILES['myfile']['name']);
                    echo "✅ file uploaded sucessfully";
                }
            ?>
        </div>
    </div>

    <hr>

    <h5><strong><u>$_ENV</u> - </strong> environment variables</h5>
    <p><strong>✅ use case -</strong> access server environment setting , api keys , or configuration</p>

    <pre>
        <code>
            &lt;?php
                
            // set in system or .env file
            echo "path : " . $_ENV['PATH'];

            ?&gt;
        </code>
    </pre>

    <h5>output of <u>$_ENV</u></h5>

    <?php

        // set in system or .env file
        echo "path : " . $_ENV['PATH'];
    ?>

    <hr>

    <h5><strong><u>$_COOKIE</u> -</strong> read / write cookies</h5>
    <p><strong>✅ use case -</strong> remember user preferences , shopping cart data , etc...</p>

    <pre>
        <code>
            &lt;?php
                
                // set a cookie
                setcookie("user", "ram", time() + 3600, "/");

                // read cookie
                if(isset($_COOKIE['user'])){
                    echo "welcome back : " . $_COOKIE['user'];
                }
            ?&gt;
        </code>
    </pre>

    <h5>output of <u>$_COOKIE</u></h5>

    <?php
        // set a cookie

        setcookie("user", "ram" , time() + 3600, "/");

        // read cookie

        if(isset ($_COOKIE['user'])){
            echo "welcome back : " . $_COOKIE['user'];
        }
    ?>



    





    <br><br>

    <?php include "nav.php"; ?>


    <style>
        table{
            width:95%;
            border:1px solid;
            padding:0.5%;
            margin:1%;
            background-color:#ffe6b3;
            font-family:system-ui;
            border-collapse:seperate;
        }
        table thead tr{
            font-weight:bold;
            background-color:#eaeded;
        }
        table tr{
            background-color:white;
        }
        table tr td{
            border:1px solid;
            padding:1%;
        }
        body{
            overflow-x:hidden;
        }
    </style>
    
</body>
</html>