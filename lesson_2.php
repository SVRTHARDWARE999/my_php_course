<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once 'variables.php' ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname - 2" ?></title>
    <link rel="shortcut icon" href="/" type="image/x-icon">
</head>
<body>

    <h1>conditional statements</h1>
    <ul>
        <li>if statement</li>
        <li>if ...else statement</li>
        <li>if ...elseif statement</li>
    </ul>
    <hr>

    <h1>if statement</h1>
    <pre><code>
    &lt;?php
        //conditional statements
        $age = 20;

        // if statement
        if ($age >= 18) {
            echo "You are an adult. and $age years old";
        }
    ?>
    </code></pre>
    <h2>output</h2>

    <?php
        //conditional statements
        $age = 20;

        // if statement
        if ($age >= 18) {
            echo "You are an adult. and $age years old";
        }
    ?>
    
    
    <hr>

    <h1>if ... else statement</h1>
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
    <h2>output</h2>
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

    <h1>if ...elseif statement</h1>
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
    <h2>output</h2>
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

    <h1>logic operators</h1>
    <ul>
        <li>and</li>
        <li>or</li>
        <li>not</li>
    </ul>

    <p>1 and operator</p>

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

    <button onclick="window.location.href='lesson_1.php'">go back</button> 


</body>
</html>