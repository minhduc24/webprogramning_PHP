<?php
    $name = $_POST['name'];
    $class = $_POST['class'];
    $university = $_POST['univer'];
    echo "Your name" .$name ."<br>"; 
    echo "Your class" .$class ."<br>"; 
    echo "Your university". $university ."<br>"; 
    if (isset($_POST['submit'])) {
        if (!empty($_POST['hobbies'])) {
            print("<br> Your hobbies <br>");
            foreach ($_POST['hobbies'] as $value) {
                echo $value ."<br/>";
            }
        }
    }
?>