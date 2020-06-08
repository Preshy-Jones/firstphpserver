<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Fibonacci server</title>
</head>
<body>
    <?php 
    
    // function getFib($n) {
    //     return round(pow((sqrt(5)+1)/2, $n) / sqrt(5));
    // }
    

    // echo getFib(6);
    function fib($n) {
        $fib_array = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib_array[$i] = $fib_array[$i - 1] + $fib_array[$i - 2];
        }
        return $fib_array;
    }
    
   // $arr = array('Hello','World!','Beautiful','Day!');
    echo implode(",",(fib(100)));
  //  echo implode(" ",$arr);
//    print_r($arr)

    ?>


</body>
</html>