<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    echo "<h1>PHP scripts</h1>";
    echo "<h2>declaration and print/echo</h2>";
    echo "<h4>hello </h4>\n";
    $name="san";
    echo "hi my name is ".$name."\n\n";
    echo "<h2>finding datatype\n</h2>";
    var_dump($name);
    var_dump(5);
    var_dump(true);
    var_dump(NULL);
    var_dump(0.34);
    $cartoon=array("dora","naruto","mikasa");
    var_dump($cartoon);
    echo"\n\n";
    echo "<h2>changing datatype\n</h2>";
    $name=(boolean)$name;
    var_dump($name);
    echo "<h2>Difference between single and double quote in string\n</h2>";
    $s1="john";
    $s2="Hello $s1";
    echo $s2."<br>";
    $s2='Hello $s1';
    echo $s2;
    echo "<h2>operations on string</h2>";
    $str="Programming is my passion\n";
    echo $str."<br>";
    echo "length:".strlen($str)."\n\n";
    echo "word count".str_word_count($str)."\n\n";
    echo "position of 'my':".strpos($str, "my")."<br><br>";
    echo "to uppercase:".strtoupper($str)."<br>";
    echo "to lowercase:".strtolower($str)."<br>";
    echo "replace 'my' with 'our':".str_replace("my","our",$str)."<br>";
    echo "reverse:".strrev($str)."\n\n";
    $x= $s1 ." ". $str;
    echo "concatenation:".$x."\n";
    echo "slicing:".substr($str,6,5)."<br>";
    echo "<h2>conditional statement</h2>";
    $a=5;
    $b=7;
    echo "a=5\n";
    echo "b=7\n";
    $c=$a+$b;
    if($c>10){
        echo "the sum is greater than 10";
    }
    else{
        echo "the sum is less than 10";
    }
    echo "<h2>using function</h2>";
    function sub($num1,$num2){
        $sub=$num1-$num2;
        echo "difference of ".$num1." and ".$num2." is ".$sub;
    }
    sub(60,30);
    ?>
    </pre>
</body>
</html>
