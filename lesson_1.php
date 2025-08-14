<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'variables.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname - 1" ?></title>
</head>
<body>

        <h3>in lesson 1 of php we are going to learn about <u>variables of php & datatypes</u></h3>

        <p>
            <h4>variables in php</h4>
            in php variables start with <mark> $ </mark> symbol and after symbol it contains a  <mark>vairable name</mark>. this variables are used to insert data from a database or static values in php.the example syntax of variable is <mark>$name</mark>
            <br>
            <strong>🔑 rules</strong> <br>
            - variables names are case sensitive <br>
            - must start with a letter or _ underscore , not with a number
        </p>
        <h5>variables $</h5>
        <pre>
            <code>
                &lt;?php
                    // variables
                    $name = "ramakrishna";
                    $number = 9876543210;
                    $points = 9.2;
                    $qualified = true;
                    $subjects = ["maths" "physics" "chemistry"];

                    /// output of variables values
                    echo "
                    student name : $name &lt;br&gt;
                    mobile number : $number &lt;br&gt;
                    grade points : $points &lt;br&gt;
                    qualification :" . ( $qualified ? " yes qualified " : " not qualified ") . "&lt;br&gt;";
                    echo "subjects : "; foreach ($subjects as $subject) { echo "$subject , ";}
                    
                ?&gt;

                
            </code>
        </pre>

        <h5>output</h5>

        <?php
                    // variables
                    $name = "ramakrishna";
                    $number = 9876543210;
                    $points = 9.2;
                    $qualified = true;
                    $subjects = ["maths", "physics", "chemistry",];

                    // output of variables values
                    echo "
                    student name : $name <br>
                    mobile number : $number <br>
                    grade points : $points <br>
                    qualification :" . ( $qualified ? " yes qualified " : " not qualified ") . "<br>";
                    echo "subjects : "; foreach ($subjects as $subject) { echo "$subject , ";}

        ?>




        <hr>


        <p>
            <h5>datatypes in php</h5>
            in php we have 5 - datatypes and they are
            <ol>
                <li><u>string</u> which contains value of <mark>text,url's and etc..</mark></li>
                <li><u>intiger</u> which contains only value of <mark>numbers like 0123456789 etc...</mark></li>
                <li><u>float</u> which contains value of <mark>decimal number like 1.5 85.9 499.3 etc...</mark></li>
                <li><u>boolean</u> which contains value of <mark>true or false</mark></li>
                <li><u>arrays</u> which contains value of <mark>more than 1 datatypes like ["rama"]</mark></li>
            </ol>
        </p>
        <h5>data types in php</h5>
        <pre>
            <code>
                &lt;?php
                    //string variable
                    $name = "ramakrishna";
                    $cources = "PHP + MYSQL";
                    //intiger variable
                    $duration = 8;
                    //float variable
                    $price = 0.00;
                    //boolean variable ( true / false )
                    $isFree = true;
                    //array variable
                    $topics = ["php basics", "forms", "crud with mysql", "sessions", "security", "mini projects",];

                    echo "
                        👋welcome, $name &lt;br&gt;
                        you're learning $cources for $duration weeks &lt;br&gt;
                        course fee : ₹$price &lt;br&gt;

                    ";
                    echo "is it free :" . ($isFree ? "🆓 yes its free" : "nope ❗") . "&lt;br&gt;";
                    echo "🧠 topics you'll learn";
                    echo "&lt;ul&gt;";
                    foreach ($topics as $topic){
                         
                        echo "&lt;li&gt;$topic&lt;/li&gt;";
                        
                    }
                    echo "&lt;/ul&gt;";
            </code>
        </pre>

        <h5>output</h5>

        <?php
                    //string variable
                    $name = "ramakrishna";
                    $cources = "PHP + MYSQL";
                    //intiger variable
                    $duration = 8;
                    //float variable
                    $price = 0.00;
                    //boolean variable ( true / false )
                    $isFree = true;
                    //array variable
                    $topics = ["php basics", "forms", "crud with mysql", "sessions", "security", "mini projects",];

                    echo "
                        👋welcome, $name <mark> | this is a string</mark> <br>
                        you're learning $cources for $duration weeks <mark> | this is a intiger</mark> <br>
                        course fee : ₹$price <mark> | this is a float</mark><br>
                    ";

                    echo "is it free : " . ($isFree ? "🆓 yes its free" : "nope ❗") . "<mark> | this is a boolean</mark> <br>";
                    
                    echo "🧠 topics you'll learn <mark> | this is array</mark> indexed type";
                    echo "<ul>";
                    foreach ($topics as $topic){
                        echo "<li>$topic</li>";
                    }
                    echo "</ul>";
        ?>
        <br>
        <hr>
        <h3>types of arrays</h3>
        <p>we have 3 - types of arrays and each one have it's own special capible fetaures. the 3 - types of array's are...
            <ol>
                <li>indexed array <mark>$indexed = ["one" , "two" , "three" ...]</mark></li>
                <li>associative array's <mark>$associative = ["name" => "rama" , "email" => "ram@xmail.com" ...]</mark></li>
                <li>multi-dimensional array's <mark>$multi_dimensional = [ ["name" => "ram"] , ["name" => "tharun"]....]</mark></li>
            </ol>
        </p>
        <h5>indexed array's</h5>
        <pre>
            <code>
                &lt;?php 
                    $indexed = ["one" , "two" , "three"];

                    echo "&lt;ol&gt;";

                    foreach ($indexed as $index){
                        echo "&lt;li&gt;$indexli&lt;/li&gt;";
                    }

                    echo "&lt;/ol&gt'";
                ?&gt;
            </code>
        </pre>

        <h5>output</h5>
        <?php
            $indexed = ["one" , "two" , "three" , "four"];

            echo "<ol>";

            foreach ($indexed as $index){
                echo "<li>$index</li>";
            }

            echo "</ol>";

        ?>

        <h5>associative array's</h5>
        <p>An associative array stores values (like a dictionary in python or an object inwith JavaScript).</p>
        
        <pre>
            <code>
                &lt;?php
                    $users = [
                        "name" => "ramakrishna",
                        "email" => "ramakrishna@example.com",
                        "age" => 25,
                        "isSubscribed" => true,
                    ];

                    echo "&lt;h3&gt;users prifile&lt;/h3&gt;"
                    echo "name : " . $user["name"] . "&lt;br&gt;";
                    echo "naemailme : " . $user["email"] . "&lt;br&gt;";
                    echo "age : " . $user["age"] . "&lt;br&gt;";
                    echo "subscribed ? : " . ($user["isSubscribed"] ? "yes" : "no") . "&lt;br&gt;";
                    
                ?&gt;
            </code>
        </pre>
        <h5>output</h5>
        <?php
            $user = [
            "name" => "Ramakrishna",
            "email" => "ramakrishna@example.com",
            "age" => 25,
            "isSubscribed" => true,
            ];

            echo "<h3>User Profile</h3>";
            echo "Name : " . $user["name"] . " <br>";
            echo "Email : " . $user["email"] . "<br>";
            echo "Age : " . $user["age"] . "<br>";
            echo "Subscribed ? : " . ($user["isSubscribed"] ? "Yes" : "No") . "<br>";
            ?>
            
            <br>

            <h5>multi dimensional array</h5>
            <p>a multi-dimensional is an array of <mark>contaning multiple array's</mark>. it allows you to store <strong>complex, structured data</strong> like a table or nested list items.</p>
            
            <pre>
                <code>
                    &lt;?php
                        $users = [
                            ["name" => "ramakrishna", "email" => "ram@example.com", "age" => 25],
                            ["name" => "tharun", "email" => "tharun@example.com", "age" => 24],
                            ["name" => "deekshitha", "email" => "deekshi@example.com", "age" => 23],
                        ];

                        echo "&lt;h3&gt;all users&lt;/h3&gt;";
                        echo "&lt;ol>"

                        foreach ($users as $user){
                            echo "&lt;li>";
                            echo "name : " . $user["name"] . "&ltbr>";
                            echo "email : " . $user["email"] . "&ltbr>";
                            echo "age : " . $user["age"] . "&ltbr>";
                            echo "&lt;/li>";
                        }
                        echo "&lt;/ol>"
                    ?&gt;
                </code>
            </pre>

            <h5>output</h5>
            
            <?php
                $users = [
                ["name" => "Ramakrishna", "email" => "ram@example.com", "age" => 25],
                ["name" => "tharun", "email" => "tharun@example.com", "age" => 24],
                ["name" => "deekshitha", "email" => "deekshi@example.com", "age" => 23]
                ];

                echo "<h3>All Users</h3>";
                echo "<ol>";

                foreach ($users as $user) {
                    echo "<li>";
                    echo "Name : " . $user["name"] . "<br>";
                    echo "Email : " . $user["email"] . "<br>";
                    echo "Age : " . $user["age"] . "<br><br>";
                    echo "</li>";
                }
                echo "</ol>";
            ?>
            <!-- <button onclick="window.location.href='./'">go back</button> <button onclick="window.location.href='lesson_2.php'">lesson 2</button> -->

            <!-- Navigation Bar -->
             <?php include_once 'nav.php'; ?>


    
</body>
</html>

