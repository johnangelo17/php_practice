<!-- Hello World!

<h1>Hello World!</h1>

<style>
    h1 {
        color: blue;
    }
</style>

<script>
    alert("Hello World!")
</script> -->


<?php
/*

    echo "Hello World!";
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page</h1> -->

    <?php
        // echo "Hello World!";
        // echo "Hello World!"

        //variable
        // $a = 5;
        // var_dump($a);
        // var_dump("john");
        // var_dump(3.14);
        // var_dump(false);
        // var_dump([1, 2, 3]);
        // var_dump(NULL   );


        // echo $a;


        // variable scope

        // $a = 5;


        // function test () {
        //     static $a = 6;
        //     echo $a;
        //     echo "<br>";
        //     $a++;
        // }
        // test();
        // test();
        // test();
        // test();


        // echo $a;


        // echo & print

        // echo ("Hello! <br>"), ("Hello! <br>");
        // echo "World! <br>", "World! <br>";
        // print ("Hello! <br>");
        // print "Hello! <br>"; 
        // echo print("hi");

        // Data Types
        // $a = "Angelo";
        // $b = 21;
        // $c = 21.5;
        // $d = true; //of course
        // $e = ["Angelo", "Caalam", "Cunanan"];
        // $f = new stdClass();
        // $g = NULL;
        // $h = fopen("php_practice.php", "r");

        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        //String

        // $a = "red";
        // $name = "<h1 style=\"color: $a\">Angelo Caalam Cunanan ";
        //$name = 'Angelo Caalam Cunanan ';

        // echo strlen($name), "<br>";
        // echo str_word_count($name), "<br>";
        // echo strpos($name, "Cunanan"), "<br>";
        // echo strtoupper($name), "<br>";
        // echo strtolower($name), "<br>";
        // echo str_replace("Angelo", "Caalam", $name), "<br>";
        // echo strrev($name), "<br>";
        // echo trim($name), "<br>";
        // echo strlen(trim($name)), "<br>";
        // echo print_r(explode(" ", $name), "<br>");

        //Concatinate
        // $x = "Hello";
        // $y = "World!";
        // echo $x ." ". $y. "<br>";
        // echo "$x $y <br>";
        // echo '$x $y <br>';

        //Slicing
        // $x = "Hello";
        // echo substr($x, 1, 4), "<br>";
        // echo substr($x, 1), "<br>";
        // echo substr($x, -5, 2), "<br>";

        //Escape Characters
        // $a = "sample";
        // $x = "John \"Pogi\" Doe";
        // echo $x;

        //Numbers
        // $a = -1; //int
        // $b = 1.0; //float
        // $c = "5"; //String

        // echo PHP_INT_MAX, "<br>";
        // echo PHP_INT_MIN, "<br>";
        // echo PHP_INT_SIZE, "<br>";
        // echo is_int($a);

        // echo PHP_FLOAT_MAX, "<br>";
        // echo PHP_FLOAT_MIN, "<br>";
        // echo PHP_FLOAT_DIG, "<br>";
        // echo PHP_FLOAT_EPSILON, "<br>";
        // echo is_float($b), "<br>";
        // echo is_numeric($c);

          $a = "John"; //String
          $b = 5; //Integer
          $c = 3.14; //Float
          $d = true; //Boolean
          $e = ["1","2","3"]; //array
          $f = new stdClass(); //object
          $g = NULL; //null
          $h = fopen("php_practice.php", "r"); //resource

        //casting - string
        //$a = (string)$a;
        //$b = (string)$b;
        //$c = (string)$c;
        //$d = (string)$d;
        //$e = $e;
        //$f = $f;
        //$g = (string)$g;
        //$h = (string)$h;

        //casting - int
        //   $a = (int)$a;
        //   $b = (int)$b;
        //   $c = (int)$c;
        //   $d = (int)$d;
        //   $e = (int)$e;
        //   $f = $f;
        //   $g = (int)$g;
        //   $h = (int)$h;

        //casting - float
        //   $a = (float)$a;
        //   $b = (float)$b;
        //   $c = (float)$c;
        //   $d = (float)$d;
        //   $e = (float)$e;
        //   $f = $f;
        //   $g = (float)$g;
        //   $h = (float)$h;

        //casting - boolean
        //   $a = (bool)$a;
        //   $b = (bool)$b;
        //   $c = (bool)$c;
        //   $d = (bool)$d;
        //   $e = (bool)$e;
        //   $f = $f;
        //   $g = (bool)$g;
        //   $h = (bool)$h;

        //casting - array
        //   $a = (array)$a;
        //   $b = (array)$b;
        //   $c = (array)$c;
        //   $d = (array)$d;
        //   $e = (array)$e;
        //   $f = $f;
        //   $g = (array)$g;
        //   $h = (array)$h;


          var_dump($a);
          echo "<br>";
          var_dump($b);
          echo "<br>";
          var_dump($c);
          echo "<br>";
          var_dump($d);
          echo "<br>";
          var_dump($e);
          echo "<br>";
          var_dump($f);
          echo "<br>";
          var_dump($g);
          echo "<br>";
          var_dump($h);
          echo "<br>";

        
    ?>
</body>
</html>