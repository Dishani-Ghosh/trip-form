<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
   * {
      margin : 0;
      padding:0;
      box-sizzing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: grey;
        margin:auto;
    }
</style>
<body>
   <div class="container">
    <h1>lets learn about php</h1>
    <p>your party status is here</p>
    <?php
   //if -else in php
   $age=17;
    if($age>18)
    {
        echo "you can go party";
    }
    else if($age==7)
    echo "you are 7 years old";
    else
    echo"you can not go party";
    echo "<br>";
    //arrays in php
    $languages=array("java","c","dbms");
    echo $languages[2];
    echo count($languages);
    //loops
    $x=0;
    while($x<=10)
        {
        echo "<br> the value of x is: ";
        echo $x;
        $x++;
        }
    //iterating arrays using while loop
    $a=0;
    while($a<count($languages))
    {
        echo "<br> the array of languages are :";
        echo $languages[$a];
        $a++;
    }
    //do-while loop
    $a=20;
    do{
        echo"<br> this is do while";
        echo $a;
        $a++;
    }while($a<10);

//for loop
for($i=0;$i<count($languages);$i++)
{
    echo"<br> this is for loop: ".$languages[$i];

}
//foreach loop
foreach($languages as $value)
{
    echo "<br> using foreach loop: ".$value;
}
//function without parameter
function p5()
{
    echo "<br> five";
}
p5();
//function with parameter
function ps5($numb)
{
    echo"<br> parameter function";
    echo $numb;
}
ps5(455);
ps5(24);
    ?>
</div>
</body>
</html>