<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<?php include_once "variables.php"?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$webname - 4";?></title>
</head>
<body>

<h4>in lesson 4 we are going to learn about <u>functions</u> in php</h4>
<p>
    <strong>what is a function ❓</strong><br>
    a <mark>function</mark> is a <strong>block of reuseable code</strong> that performs a task instead of writing the same code again and again , we write it once inside a function and call it whenever needed.
</p>

<p>
    <strong><mark>why we use functions ❓</mark></strong><br>
    <strong>clean code</strong> - functions help keep code organized and readable<br>
    <strong>reusability</strong> - write code once, use it many times<br>
    <strong>organization</strong> - keep code clean and organized<br>       
</p>

<p>
    <strong>Basic function syntax</strong><br>
    <u>function</u> = a keyword <br>
    <u>sayHello()</u> = a function <br>
    <u>()</u> = parameter list ( empty here ) <br>
    <u>{}</u> = function body
</p><br>

<h5>basic function syntax</h5>

<pre>
    <code>
        &lt?php
            function sayHello(){
                echo "hello, ramakrishna !";
            }
        ?;&gt;
    </code>
</pre>

<hr>

<h5>function with parameters</h5>
<p>
    you can <u>pass values (arguments)</u> when calling the function. <br>
    inside the function, they're stored in <u>variables called parameters</u>
</p>

<pre>
    <code>
        &lt;?php

            // function with parameter

            function greetUser($name){
                echo " hello $name ! &lt;br>";
            }

            //calling function to greet user_error

            greetUser("rama"); // hello rama
            greetUser("tharun"); // hello tharun

        ?&gt;
    </code>
</pre>

<h5>output</h5>

<?php
    function greetUser($name){
        echo "hello $name ! <br>";
    }
    // calling function to greet user with a parameter
    greetUser("rama"); // hello rama
    greetUser("tharun"); // hello tharun
?>

<hr>

<h5>functions with return value</h5>
<p>
    <u>return</u> sends the result back to where the function was called. <br>
    you can use the returned value in your code, like storing it in a variable or using it in calculations.
</p>

<pre>
    <code>
        &lt;?php
            // function with return value

            function addNumbers($a, $b){
                return $a + $b;
            }

            // calling function to add numbers
            $result = addNumbers(5, 10); // 15
            echo "The sum is : $result"; // The sum is: 15
        ?&gt;
    </code>
</pre>

<h5>output</h5>

<?php
    // function with return value
    function addNumbers($a , $b){
        return $a + $b;
    }
    // calling function to add numbers
    $result = addNumbers(5 , 10); // 15
    echo "The sum is : $result"; // The sum is: 15
?>

<hr>
<h5>function with default parameters</h5>
<p>if no value is passed then php use the default parameter</p>

<pre>
    <code>
        &lt;?php

            // function with default parameter

            function greet($name = "guest"){
                echo "hi $name ! <br>";
            }

            // calling function with and without parameter

            greet(); // hi guest
            greet("rama"); // hi rama

        ?&gt;
    </code>
</pre>

<h5>output</h5>

<?php
    // function with default parameter
    function greet($name = "guest"){
        echo "hi $name ! <br>";
    }

    // calling function with and without parameter
    greet(); // hi guest
    greet("rama"); // hi rama
?>

<hr>

<h4>function scope - <u>local vs global</u></h4>
<h5>local scope ( inside only )</h5>

<pre>
    <code>
        &lt;?php
            function test(){
                $x = 10; //only usable inside function
                echo $x;
            }
        ?&gt;
    </code>
</pre>

<h5>global scope ( to use outside variables )</h5>

<pre>
    <code>
        &lt;?php

            //variable outside function    
            $x = 5;

            function show(){
                
                //global is used to get outside variables
                global $x;
                echo $x //5
            }

        ?&gt;
    </code>
</pre>

<br><br>
<?php include "nav.php"?>
    
</body>
</html>