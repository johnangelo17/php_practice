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

        //   $a = "John"; //String
        //   $b = 5; //Integer
        //   $c = 3.14; //Float
        //   $d = true; //Boolean
        //   $e = ["1","2","3"]; //array
        //   $f = new stdClass(); //object
        //   $g = NULL; //null
        //   $h = fopen("php_practice.php", "r"); //resource

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


        //   var_dump($a);
        //   echo "<br>";
        //   var_dump($b);
        //   echo "<br>";
        //   var_dump($c);
        //   echo "<br>";
        //   var_dump($d);
        //   echo "<br>";
        //   var_dump($e);
        //   echo "<br>";
        //   var_dump($f);
        //   echo "<br>";
        //   var_dump($g);
        //   echo "<br>";
        //   var_dump($h);
        //   echo "<br>";

        // php math
        // $pi = pi();
        // echo $pi, "<br>";

        // $minNumber = min(300, 80, 4, 98, 3);
        // $maxNumber = max(300, 80, 4, 98, 3);
        // echo $minNumber, "<br>";
        // echo $maxNumber, "<br>";

        // $num = -5;
        // echo abs($num), "<br>";

        // $sqrt = sqrt(9);
        // echo $sqrt, "<br>";

        // $rounded = round(3.49, 1);
        // echo $rounded,"<br>" ;

        // echo PHP_INT_MAX,"<br>" ;
        // echo PHP_INT_MIN,"<br>" ;
        // echo rand(5, 30);


        //php constant
        // define("GREETINGS", 39);
        // $a = 5;

        // function test(){
            
        //     echo GREETINGS;
        
        // }
        // test();

        //php operators
        //arithmitic

        //addition + sum
        // echo 6 + 5 + 7, "<br>";

        // //subtraction - difference
        // echo 7 - 2 + 90,"<br>"; //pemdas

        // //multiplication * product
        // echo 24 * 9 - 77,"<br>";

        // //division / quotient
        // echo 6 * 9 / 9,"<br>";

        // //modulus %
        // echo 5 % 3,"<br>";

        // //exponent **
        // echo 6**2,"<br>";
        
        //assignment 
        // +=
        // -=
        // /=
        // *=
        // %=
        // $x += 10;
        // echo $x,"<br>";

        //cpmparison
        
        //==
        // var_dump(6=="6");

        // //===
        // var_dump(6==="6");

        // //!=
        // var_dump(6 != 4);
        
        // //!=
        // var_dump(6 !== 46);

        // //>
        // //>=
        // var_dump(6 >= 22);

        // //<
        // //<=
        // var_dump(6 <= 6);

        // //<=>
        // echo 1 <=> 1;

        // ++ increment
        // $x = 5;
        // // PRE - increment
        // echo ++$x,"<br>";

        // $y = 5;
        // // POST - increment
        // echo $y++,"<br>";
        // //-- decrement
        
        //logical 

        // and &&
        // var_dump(true and true); // true
        // echo "<br>";
        // var_dump( 6 == "6" and 6 > 9); //false
        // echo "<br>";

        // // or || 
        //  var_dump(false or false); // false
        // echo "<br>";
        // var_dump( 6 == "6" or 6 > 9); //true
        // echo "<br>";

        // //xor
        // var_dump(true xor false); // true
        // echo "<br>";
        // var_dump( 6 == "6" xor 6 > 9); //true
        // echo "<br>";

        //! 
        // var_dump(!true);
        // echo "<br>";
        // var_dump( 6 == "6" xor 6 > 9); //true
        // echo "<br>";

        // string operators
        // echo "Hello" . "World!";
        // $x = "Hello";
        // $x = $x . "World";
        // $x .= "World!";

        // echo $x;

        //ternary
        // $color = 11 > 10 ? "More" : "Less";
        // echo $color;

        //null coalescing
        // $age = null ?? 20;
        // echo $age;

        // looping statement
        //while
        //do while
        //for
        //foreach --> array

//         $students = array(
//             array("name"=>"Mary","age"=>17,"gender"=>"Female"),
//             array("name"=>"Joy","age"=>21,"gender"=>"Female"),
//             array("name"=>"Ben","age"=>30,"gender"=>"Male"),
//         );

//         foreach($students as $student){
//             foreach($student as $value){
//                 echo $value;
//             }
//         }

    
//     ?>
<!-- //             <h1>Students</h1>
// <ul>
//    <?php foreach($students as $student){ ?>
//         <li>My name <?php echo $student['name']; ?> is age <?php echo $student['age'] ?> is and i am <?php echo $student['gender'] ?></li>
//     <?php } 
// ?>
// </ul> -->

 
<?php 
            $username = "";

            $error_messages = [];

            if(isset($_REQUEST['btnSubmit'])){
                $username = $_REQUEST['username'];
                
                if($_REQUEST['username'] == ""){
                    array_push($error_messages, "Username is required!");
                }

                if($_REQUEST['password'] == ""){
                    array_push($error_messages, "Password is required!");
                }
            }
        ?>

        <!-- get send data thru url -->
        <!-- post send data thru http request -->
        <?php 
            if(!empty($error_messages)){
                foreach($error_messages as $error){
                    echo $error ."<br>";
                }
            }     
        ?>
        <form action="php_practice.php" method="get">
            <label for="">Username:</label>
            <input type="text" name="username" value="<?php echo $username; ?>">
            <br>    
            <label for="">Password:</label>
            <input type="password" name="password">
            <br>
            <input type="submit" value="Login" name="btnSubmit">
        </form>
        <?php 
            if(isset($_REQUEST['username']) and isset($_REQUEST['password'])){
                echo "Username: " . $_REQUEST['username'], "<br>";
                echo "Password: " . $_REQUEST['password'];
            }
        ?>
        
</body>
</html>