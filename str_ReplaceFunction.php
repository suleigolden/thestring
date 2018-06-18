<?php
// Method 1 Using Recursion 
 function stringReduce_one($str){
//Implementing 6 Rules
$searchString = array("AB","BA","CB","BC","AA","CC");  //Search the String in the array index
$replaceString = array("AA", "AA","CC","CC","A","C"); //Replace each index String with this 
$input = $str;
/*Search and Replace each index String using this Rules: 
'AB' -> 'AA','BA' -> 'AA', 'CB' -> 'CC', 'BC' -> 'CC','AA' -> 'A', 'CC' -> 'C',*/
$change = str_replace($searchString, $replaceString, $input);
 if($change == $str){ 
	return $change;
  }else{
	return stringReduce_one($change);
  }
}


?>
