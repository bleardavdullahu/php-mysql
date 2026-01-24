<?php

$var=10;

if($var>0){
    echo "$var is bigger than 0<hr>";
    
}

$age = 17;

if($age>=18){
    echo "You can vote";
}else{
    echo "you cant vote <hr>";
}

$a = 50;
$b = 10;

if($a == $b){
    echo "a is equal b <hr>";
}else if($a > $b){
    echo "a is greater then b <hr>";
}else{
    echo "a is less than b <hr>";
}

switch($age){
    case($age >=0 && $age<18):
        echo "You are a minor <hr>";
        break;
        case ($age>=18 && $age<=25):
            echo "You are a young adult";
            break;
            case ($age>25 && $age<65):
                echo "You are middle age";
                break;
                case ($age>=65):
                    echo "You are a senior";
                    break;
                    default:
                    echo "Invalid value";
                    break;
}

$number = 1;

while($number<=10){
    echo "the number is $number <hr>";
    $number+=1;

}
$z = 1;
do{
    echo "$z <hr>";
    $z++;
}while($z<=5);
?>