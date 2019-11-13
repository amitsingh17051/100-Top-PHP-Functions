<?php


// Top 100  PHP functions.
// 10 function  averyday.
// 10 days and 100 function. 



// Day 1 - 13/11/2019

// 1. Count
// Counts all element in array or object

$arr = ['a','b','c','d'];
$arr2 = [
 	['a','b'],
 	['c','d']
];
$arr3 = '';
// echo 'Count of element in arr : ' . count($arr2); 
// echo '</br>';
// echo 'Recursive Count of element in arr : ' .count($arr2, COUNT_RECURSIVE);


// 2. is_array
// Finds whether a variable is an array


// if(is_array($arr3)) {
// 	echo "This is a an array";
// } else {
// 	echo "This is not an array";
// }


// 3. substr 
// Return part of string

$str = "This is a strings.";

// $sbstr = substr($str, 0, 4); // Start with 0 and ends on 4 index

// echo $sbstr;


// 4. in_array
// Checks if a value exists in a array

// if(in_array('df', $arr)) {
// 	echo "value is available";
// } else {
// 	echo "this value is not available";
// }


// 5. explode
// Splits a string by a string

// $newArray = explode(' ', $str);
// print_r($newArray);


// 6. str_replace
// Replace all occurance of the search string with the replacement string

// $strReplace = str_replace("df", "f", $arr);
// print_r($strReplace);


// 7. implode
// join array element with string

// $newStr = implode(" ", $arr);
// echo $newStr;


// 8. strlen
// Get String Length

// $strlen = strlen($str);
// echo $strlen;


// 9. array_merge
// Merge array or more array

// $mergearr = array_merge($arr, $arr2);
// echo '<pre>';
// print_r($mergearr);


// 10. strpos
// Find the position of the first occurrence of a subsstring in a string

// $strpos = strpos($str, "a");
// echo $strpos;
?>