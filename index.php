<?php


// 
// $name = 'mohamed';
// $age = 26;
// $sallary = 10.5;
// $is_admin = true;


// $item = [ "php","mysql" ];

// echo  gettype($item);




// echo 10 < 5;
// $st = 10<5;

// if($st){
//     echo "test";   
// }

$name = "said";

// if($name == "ahmed"):
//     echo "ahmed";
// elseif($name == "eslam"):
//     echo "eslam";
// elseif($name == "ramy"):
//     echo "ramy";
// else:
//     echo "nothing";
// endif;

// if($name == "said"):
//     echo "said";
// endif;


// $o = 92;
// $l = 40;

// if($o == 90){
//     echo $l *2;
// }elseif($o == 80){
//     echo $l *1;
// }elseif($o == 92){
//     echo $l *4;
// }else{
//     echo "not found";
// }



// $o = 92;
// $l = 40;
// switch($o){
//     case 80:
//         echo 1*$l;
//     break; 
//     case 90:
//         echo 2*$l;
//     break;  
//     case 92:
//         echo 4*$l;
//     break;     
// }

// if(10<5){
//     echo "success";
// }else{
//     echo "error";
// }

// echo (10<5) ? "success" : "errro";



// $d = 75;

// if($d < 50){
//     echo "ساقط";
// }elseif($d >= 50 && $d <= 60){
//     echo "ناجح";     
// }elseif($d>60 && $d <=70){
//     echo "جيد";
// }elseif($d>70 && $d<=80){
//     echo "جيد جدا";
// }elseif($d>80 && $d <=100){
//     echo "امتياز";
// }else{
//     echo "العب جنب امك";
// }

// loop 




// for($x=1;$x<10;$x++){
//     echo $x."<br>";
// }



// $x = 10;
// echo --$x;




// $x = 1;
// do{

//     echo $x."<br>";
//     $x++;
//     echo $x;
// }while(12<$x);











// function  loop($x){
//     for($i = 0;$i<5;$i++){
//         echo "welcome $x <br>";
//     }
// }



// loop("ahmed");
// loop("eslam");






// echo 10 + 20;


// function netSalary($expected_salary,$dayoff){
//     $day = $expected_salary / 30;

//     $cost_of_dayoff = $day * $dayoff;

//     echo $expected_salary - $cost_of_dayoff;
// }
// netSalary(1000,2);
// echo "<br>";
// netSalary(6000,4);












// function calc($x,$y,$o){
//     switch($o){
//         case "+":
//          echo $x+ $y;   
//         break;
//         case "-":
//         echo $x- $y;   
//         break;
        
//         case "*":
//         echo $x * $y;   
//         break;
    
//         case "/":
//         echo $x / $y;   
//         break;    
//     }   
// }
// calc(10,20,"/");



// function number($x){
//     return $x;
//     echo $x;
// }
// echo 10 +  number(10);



// $content = "html , css , js";


// // print_r($content);
// // echo $content[2];

// // echo count($content);
// $c = count($content);

// for($i=0;$i<$c;$i++){
//     echo $content[$i]."<br>";
// }


// function getContent($array){
//     $c = count($array);
//     for($i=0;$i<$c;$i++){
//         echo $array[$i]."<br>";  
//     }
// }


// $content = [ "html", "css" , "js","php","oop"];
// getContent($content);

// $contentweb = [ "baeck", "front" , "mobile"];

// getContent($contentweb);


// $numbers = [1,5,8];
// echo min($numbers);
// $max = $numbers[0];
// for($i=0;$i<count($numbers);$i++){
//     if($max < $numbers[$i]){
//         $max = $numbers[$i];
//     }
// }

// echo $max;
/* $res = 0;
for($i=0;$i<count($numbers);$i++){
    $res = $res + $numbers[$i];
}
echo $res; */








// $person = ["firstname" => "mohamed" , "lastname" => "amr" , "age" => 26];
// echo $person['lastname'];
// print_r($person);

// $person = [
//     "firstname" => "mohamed",
//     "lastname" => "amr",
//     "age" => 26
// ];



// foreach($person as $ahmed){
//     echo $ahmed."<br>";
// }




// // $keys =  array_keys($person);
// $value  = array_values($person);
// // print_r($value);
// for($i=0;$i<count($person);$i++){
//     echo $value[$i]."<br>";
// }


// function row($td){
//     for($row=1;$row<=8;$row++){
//         echo $td;
//     }
// }


// function td($row){
// for($column=1;$column<=8;$column++){
//   if(($column + $row) %2){
//             echo "<td bgcolor=black>$column</td>";

//         }else{
//             echo "<td>". ($column + $row) ."</td>";
//         }
//     }
// }





// echo "<table border=1>";
// for($row=1;$row<=8;$row++){
//     echo "<tr>";
//     for($column=1;$column<=8;$column++){
      
//     }
//     echo "</tr>";
// }
// echo "</table>";



// function add($x,$y){
//     echo $x + $y;
// }



// echo $_POST['x'];
// echo "<br>";
// echo $_POST['y'];
// add($_POST['x'],$_POST['y']);




function calc($x,$y,$o){
    // switch($o){
    //     case "+":
    //         echo $x + $y;
    //     break;  
    //     case "-":
    //         echo $x - $y;
    //     break; 
    //     case "*":
    //         echo $x * $y;
    //     break; 
    //     case "/":
    //         echo $x / $y;
    //     break;   
    // }

    // if($o == "+"){
    //     echo $x + $y; 
    // }elseif($o == '-'){
    //     echo $x - $y;
    // }




}





// calc($_POST['x'],$_POST['y'],$_POST['o']);


// $x = 10;


// session_start();
// // print_r($_SESSION);


// $_SESSION['x'] = 10;



// echo "index file";


// print_r($_COOKIE);

// setcookie("x",10,time() + 3600,"/");


// echo time();