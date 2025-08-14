<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'variables.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname - 2" ?></title>
</head>
<body>

<!-- Conditional statements & Logical operators  -->
<h3>in lesson 2 of php we are going to learn about <u>conditional statements</u> which are used to run code using conditions.</h3>

    <h5>conditional statements</h5>
    <ul>
        <li>if statement</li>
        <li>if ...else statement</li>
        <li>if ...elseif statement</li>
    </ul>
    <hr>

    <!-- if statement -->
    <h5>if statement</h5>
    <pre>
        <code>
            &lt;?php
                //conditional statements
                $age = 20;

                // if statement
                if ($age >= 18) {
                    echo "You are an adult. and $age years old";
                }
            ?>
        </code>
    </pre>
    <h5>output</h5>

    <?php
        //conditional statements
        $age = 20;

        // if statement
        if ($age >= 18) {
            echo "You are an adult. and $age years old";
        }
    ?>
    
    
    <hr>

    <!-- if ...else statement -->
    <h5>if ... else statement</h5>
    <pre>
        <code>
            &lt;?php
                // if ...else statement
                $marks = 50;

                if ($marks >= 60) {
                    echo "Congratulations! You passed with $marks marks.";
                } else {
                    echo "Sorry, you failed with $marks marks with loosed marks of " . (60 - $marks) . " point's.";
                }
            ?>
        </code>
    </pre>

    <h5>output</h5>
    <?php
        // if ...else statement
        $marks = 50;

        if ($marks >= 60) {
            echo "Congratulations! You passed with $marks marks.";
        } else {
            echo "Sorry, you failed with $marks marks with loosed marks of " . (60 - $marks) . " point's.";
        }
    ?>
    <hr>

    <!-- if ...elseif statement -->
    <h5>if ...elseif statement</h5>
    <pre>
        <code>
            &lt;?php
                //if ...elsif statement
                $score = 97;

                if($score >= 95){
                    echo "excellent! you scored $score points.";
                }
                elseif($score >= 75){
                    echo "great job! you scored $score points.";
                }
                elseif($score >= 50){
                    echo "good effore! you scored $score points.";
                }
                else{
                    echo "you need to improve. you scored only $score points.";
                }
            ?>
        </code>
    </pre>

    <h5>output</h5>
    <?php
        // if ...elseif statement
        $score = 97;

        if ($score >= 95){
            echo "Excellent! You scored $score points.";
        } elseif ($score >= 75) {
            echo "Great job! You scored $score points.";
        } elseif ($score >= 50) {
            echo "Good effort! You scored $score points.";
        } else {
            echo "You need to improve. You scored only $score points.";
        }
    ?>

    <hr>

    <h4>logic operators</h4>
    <ul>
        <li><mark>&</mark> and operator</li>
        <li><mark>||</mark> or operator</li>
        <li><mark>!</mark> not operator</li>
    </ul>

    <!-- AND operator -->
    <h5>and operator</h5>
    <p>runs code only if both conditions are true</p>
    <pre>
        <code>
            &lt;?php

                // and operator
                $user = "Ramakrishna";
                $key = "799456123";

                if( $user == "Ramakrishna" && $key == "789456123"){
                    echo "welcome back $user";
                }
                else{
                    echo "user name or password is inncorrect";
                }
            ?&gt;
        </code>
    </pre>

    <h5>output</h5>
    <?php
        // and opereatore
        $user = "Ramakrishna";
        $key = "789456123";

        if( $user == "Ramakrishna" && $key == "789456123"){
            echo "welcome back, $user!";
        }
        else {
            echo "username or password is incorrect!";
        }
    ?>

    <hr>
    
    <!-- OR operator -->
    <h5>or operator</h5>
    <p>runs code even if one condition is true</p>
    <pre>
        <code>
            &lt;?php
                $plan = "gold";

                if($plan == "platinum" || $plan == "gold"){
                    echo "you are subscribed to $plan plan";
                }
                else{
                    echo "you are not subscribed to any plan";
                }
            ?&gt;
        </code>
    </pre>

    <h5>output</h5>

    <?php
        $plan = "gold";

        if($plan == "platinum" || $plan == "gold"){
            echo "you are subscribed to $plan plan";
        }
        else{
            echo "you have not subscribed to any plan";
        }
    ?>

    <hr>

    <!-- NOT operator -->
    <h5>not operator</h5>
    <p>negates a condition ( true becomes false & false becomes true)</p>

    <pre>
        <code>
            &lt;?php

                $loggined = true;

                if (!$loggined){
                    echo "kindly please login or sign up";
                }
                else{
                    echo "hellow you are sucessfully loggined";
                }
            ?&gt;
        </code>
    </pre>

    <h5>output</h5>

    <?php
    
        $loggined = true;

        if (!$loggined){
            echo "kindly please login or sign up";
        }
        else{
            echo "hello you are sucessfully logined";
        }
    ?>

    <br><br>    
    <!-- <button onclick="window.location.href='lesson_1.php'">go back</button>
    <button onclick="window.location.href='lesson_3.php'">go to lesson 3</button>  -->

    <!-- Navigation Bar -->
    <?php include_once 'nav.php'; ?>


</body>
</html>