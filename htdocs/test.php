<head>
</head>
<body>
<?php
function returnTrue() {
return true;
}
function addition($a) {
return $a+1;	
}
function hasSpaces($str) {
	if(strpos($str,' ')==true)
	{
		echo "Mere";
	}else{
		echo "Nu mere";
	}
}
function hurdleJump($hurdles,$jumpHeight) {
	$j = count($hurdles);
	 $z;
for($i = 0; $i < $j ; $i++) {
    if($hurdles[$i]<=$jumpHeight){
		$z=true;
		
	}else{
		$z=false;
		break;
	}
}
echo $z;	
}
function getAbsSum($arr) {
  $lengh=count($arr);
  $sum=0;
  for($i=0;$i<$lengh;$i++){
	  if($arr[$i]<0){
		  $arr[$i]=$arr[$i]*(-1);
	  }
	  $sum=$sum+$arr[$i];
  }
  echo $sum;
}
function isFourLetters($arr) {
	$lengh=count($arr);
	$sum=" ";
	for($i=0;$i<$lengh;$i++){
	$rest = substr($arr[$i],-4);
	if(strrchr($arr[$i],$rest)==$arr[$i])
	{
		$sum .=$arr[$i];
		$sum .="\n";
	}
	}
	echo $sum;
}
function noOdds($arr) {
	$l=count($arr);
	$sum=" ";
	for($i=0;$i<$l;$i++){
		if($arr[$i]%2==0){
			$sum .=$arr[$i];
			$sum .="\n";
		}
	}
	echo $sum;
}
function removeVowels($str) {
	$z="aeiou";
$newStr = str_ireplace(array('a','e','i','o','u',' '), '',$str);
  echo $newStr;
}
function set($arr) {
	$z=array_unique($arr);
	$a=array_values($z);
	$l=count($a);
	for($i=0;$i<$l;$i++){
		$a[$i] .="\n";
		echo $a[$i];
	}
}
function sortNumsAscending($arr) {
	$l=count($arr);
	sort($arr);
	for($i=0;$i<$l;$i++){
		
		$arr[$i] .="\n";
		
	}
	for($i=0;$i<$l;$i++){
		echo $arr[$i];
	}
}

?>
</body>