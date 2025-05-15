<?php


// == === > < >= <= != !== <>

// !=    <>
// $num1 = 10;
// $num2 = '10';

// echo $num1 !== $num2;


// ! && ||

// not !
/**
 * 0 => 1
 * 1 => 0
 */

// $result = !(10 == 10);

// echo $result;



// and &&
/**
 * 0 0 => 0
 * 1 0 => 0
 * 0 1 => 0
 * 1 1 => 1
 */


// or ||
/**
 * 0 0 => 0
 * 0 1 => 1
 * 1 0 => 1
 * 1 1 => 1
 */

// $name = 10.1;

// echo var_dump($name);


// $age = 10;

// if($age < 18) {
//   echo "you can not access this content";
// }


// $gender = 'female';

// if($gender == 'male') {
//   echo "hello mr";
// } else {
//   echo "hello mrs";
// }


// $country = 'canada';
// $price = 100;
// if($country == 'egypt') {
//   $price -= 20;
// } elseif ($country == 'syria') {
//   $price -= 15;
// } elseif ($country == 'ksa') {
//   $price -= 10;
// } elseif ($country == 'usa') {
//   $price -= 5;
// } else {
//   $price += 10;
// }


// echo $price;




// gender = male and age >= 18






// ternary

/**
 * $a = 30;
    $b = 20;
    $c = 10;

    if ($a + $b === $c) {

      echo "A + B = C";

    } elseif ($a + $c === $b) {

      echo "A + C = B";

    } elseif ($b + $c === $a) {

      echo "B + C = A";

    } else {

      echo "The End";

    }

 */


// ternary operator


// condition ? true : false;

// $country = 'egypt';
// $price = 100;

// $country == 'egypt' ? $price -= 10 : $country == 'syria' ? $price -= 5 : $price += 10;

// echo $price;


// if($country == 'egypt') {
//   $price -= 10;
// } elseif($country == 'syria') {
//   $price -= 5;
// } else {
//   $price += 10;
// }

// $a = 30;
// $b = 20;
// $c = 10;

// $a + $b === $c ? print("A + B = C") : 
// $a + $c === $b ? print('A + C = B') : 
// $b + $c === $a ? print('B + C = A') : 
// print('the end');


// echo (($a + $b === $c) ? 'this is a' : () )

// $country = 'egypt';
// $price = 100;

// switch($country) {
//   case 'egypt':
//     $price -= 20;
//   break;
//   case 'syria':
//     $price -= 15;
//   break;
//   case 'ksa':
//     $price -= 10;
//   break;
//   default:
//     $price -= 5;
// }

// echo $price;

// hello from "black horse"



// echo "hello from \"black horse\"";
// echo '<br>';
// echo 'hello from "black horse"';

// price: 30$
// echo 'price $30';

// hello from \osama

// echo 'hello from \\osama';



// for(init; condition; update) {
  // code
// }

// i = 101

// for($i = 1; $i <= 100; $i++) {
//   echo $i . " osama";
//   echo "<br>";
// }


// while(condition) {
//   body 
// }

// $i = 1;

// while($i<=100) {
//   echo "osama";
//   echo "<br>";
//   $i++;
// }

// $i = 1;
// for(;$i<=100;) {
//   echo "osama";
//   echo "<br>";
//   $i++;
// }

// $i = 1;


// do {
//   echo "osama";
//   echo "<br>";
//   $i++;
// }while($i>=100);


/**
 * print the following pattern
 * 10
 * 9
 * 8
 * 7
 * 6
 * 5
 * 4
 * 3
 * 2
 * 1
 * 0
 */

 /** 
  * print all even numbers to 50
  */


  // for($i= 10;$i>=0;$i--) {
  //   echo $i;
  //   echo "<br>";
  // }


  // for($i=0;$i<=50;$i += 2) {
  //   echo $i;
  //   echo "<br>";
  // }


  // for($i= 0;$i<=50;$i++) {
  //   if($i % 2 == 0) {
  //     echo $i;
  //     echo "<br>";
  //   }
  // }



//   Bear Limak wants to become the largest of bears, or at least to become larger than his brother Bob.

// Right now, Limak and Bob weigh a and b respectively. It's guaranteed that Limak's weight is smaller than or equal to his brother's weight.

// Limak eats a lot and his weight is tripled after every year, while Bob's weight is doubled after every year.

// After how many full years will Limak become strictly larger (strictly heavier) than Bob?





/**
 * 2
 * 12 * 3 = ?? 
 * 14 * 2 = ??
 */

// 4 7
// 2

// $a = 7;
// $b = 7;
// $years = 0;

// while($a < $b) {
//   $years++;
//   $a *= 3;
//   $b *= 2;
// }

// echo $years;