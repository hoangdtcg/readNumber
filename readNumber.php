<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
</head>
<body>
<h2>Input Number</h2>
<form method="post">
    <input type="text" name="search" placeholder="Number"/>
    <input type = "submit" id = "submit" value = "Convert"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST["search"];
    $threeNumber=(int)($num/100);
    $twoNumber=(int)(($num-100*$threeNumber)/10);
    $oneNumber=$num-100*$threeNumber-10*$twoNumber;
    $flag = 0;
    $numbers = array(
        "1"=>"one",
        "2"=>"two",
        "3"=>"three",
        "4"=>"four",
        "5"=>"five",
        "6"=>"six",
        "7"=>"seven",
        "8"=>"eight",
        "9"=>"nine",
        "10"=>"ten",
        "11"=>"eleven",
        "12"=>"twelve",
    );
    $arrNum = array(
        "2"=>"twenty",
        "3"=>"thirty",
        "4"=>"forty",
        "5"=>"fifty",
        "6"=>"sixty",
        "7"=>"seventy",
        "8"=>"eighty",
        "9"=>"ninety",
    );
    if ($num < 14) {
        foreach ($numbers as $N=>$description) {
            if($N==$num){
                echo "Num: " . $N . ". <br/>Read: " . $description;
            }
        }
    }else if($num>20&&$num<100){
        foreach ($arrNum as $N=>$x){
            if($N==$twoNumber){
                echo "Num: " . $num . ". <br/>Read: " . $x ." " ;
            }
        }
        foreach ($numbers as $N=>$x){
            if($N==$oneNumber){
                echo $x ;
            }
        }
    }else if($num>100&&$num<1000){
        foreach ($numbers as $N=>$x){
            if($N==$threeNumber){
                echo "Num: " . $num . ". <br/>Read: " .$x." hundred and " ;
            }
        }
        foreach ($arrNum as $N=>$x){
            if($N==$twoNumber){
                echo $x ." " ;
            }
        }
        foreach ($numbers as $N=>$x){
            if($N==$oneNumber){
                echo $x ;
            }
        }
    }
}
?>
</body>
</html>