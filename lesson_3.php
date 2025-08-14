<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "variables.php"?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname-3";?></title>
</head>
<body>

    <!-- Loops in php  -->
    <h4>in lesson 3 we are going to learn about <u>loops</u> in php</h4>
    <p>
        <mark>loops</mark> was used to execute a block of code multiple times, very useful when dealing with arrays, tables, or repeating elements.
        we have 4 main types of loops and they are....
        <ol>
            <li>for loop</li>
            <li>for each loop</li>
            <li>while loop</li>
            <li>do while loop</li>
        </ol>
    </p>

    <hr>

    <h5>for loop</h5>
    <p>the <mark>for loop</mark> is great for numbers & indexes</p>

    <pre>
        <code>
            &lt;?php

                for($i = 0; $i <= 5; $i++){
                    echo " $i ,";
                }
            ?&gt;
        </code>
    </pre>

    <h5>output</h5>

    <?php
        
        for($i = 0; $i <= 5; $i++){
            echo "$i ,";
        }
    ?>

    <hr>

    <h5>for each loop</h5>
    <p>the <mark>for each loop</mark> is used to loop over <u>whole array</u> </p>

    <pre>
        <code>
            &lt;?php

                $students = ["ram" , "tharun" , "deekshitha"];

                foreach($students as $student){
                    echo "$student ,";
                }
            ?&gt;
        </code>
    </pre>

    <h5>output</h5>

    <?php

        $students = ["ram" , "tharun" , "deekshitha"];

        foreach($students as $student){
            echo "$student ,";
        }
    
    ?>

    <hr>

    <h5>while loop</h5>
    <p>the <mark>while loop</mark> loops until condition fails</p>

    <pre>
        <code>
            &lt;?php

                $i = 0;

                while ( $i <= 5 ){
                    echo " $i ,";
                    $i++;
                }
            ?&gt;
        </code>
    </pre>

    <h5>output</h5>

    <?php

        $i = 0;

        while ( $i <= 5 ){
            echo "$i ,";
            $i++ ;
        }
    ?>

    <hr>

    <h5>do while</h5>
    <p>the <mark>do while loop</mark> runs atleast once</p>

    <pre>
        <code>
            &lt;?php
                // value is greater tha condition
                $i = 9;

                do{
                    echo "$i ,";
                    $i++;
                }
                while($i <= 5);
            ?&gt;
        </code>
    </pre>

    <h5>output</h5>

    <?php
        // value is greater tha condition
        $i = 0;

        do{
            echo "$i ,";
            $i++;
        }
        while($i <= 5);
    ?>

    <br><br>

    <!-- Navigation Bar -->
    <?php include_once 'nav.php'; ?>
    
</body>
</html>