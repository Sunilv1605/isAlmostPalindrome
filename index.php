<?php
function isAlmostPalindrome($input_string){
 $rev_string = strrev($input_string);
 if($input_string==$rev_string) { return "It is a Palindrome"; }
 else{

 	$input_ar = str_split($input_string, 1);
 	$rev_ar = str_split($rev_string, 1);
 	$counter = 0; $i = 0;
 	$character_length = count($rev_ar)/2;
 	foreach ($rev_ar as $key => $val) {
		$i++;
		//check if replace character is not more than 2 (to check the given variable is almost palindrome or not)
 		if($val!=$input_ar[$key]){
			$orignal_var[$counter] = $input_ar[$key];
			$replace_var[$counter] = $val;
			$counter++;
 			if($counter>=3){ return "It is not a palindrome"; }
 		}
 		//run the loop only half of its length
		if($character_length==$i) { break; }
 	}
 	if($counter==1) { return "Palindrome modifying the ".$replace_var[0]." to ".$orignal_var[0]." "; }
 	else if($counter==2){
 		return "There is no way to obtain palindrome modifying just one character. At least two character must be changed. For instance the ".$replace_var[0]." to ".$orignal_var[0]." and ".$replace_var[1]." to ".$orignal_var[1]." ";
 	}
 }
}
echo $response = isAlmostPalindrome(1221);
?>