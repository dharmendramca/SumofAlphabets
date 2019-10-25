<?php 
/*
Class Name:		Sum of Alphabets 
Author    : 	Dharmendra Kumar 
Author URI: 	http://www.dharmendramca.wordpress.com
GIT       : 	https://github.com/dharmendramca
Ver 	  :		1.0
*/ 

class SumofAlphabets{ 

public $str;
private $alpha;
private $val;
private $chr_array;


public function do($str) 
{ 

$str=strtolower($str);	
if(ctype_alpha($str))	
$str=(preg_replace('/[^a-z]/', '', $str));


$alpha=array(
"1"=>'a',
"2"=>'b',
"3"=>'c',
"4"=>'d',
"5"=>'e',
"6"=>'f',
"7"=>'g',
"8"=>'h',
"9"=>'i',
"10"=>'j',
"11"=>'k',
"12"=>'l',
"13"=>'m',
"14"=>'n',
"15"=>'o',
"16"=>'p',
"17"=>'q',
"18"=>'r',
"19"=>'s',
"20"=>'t',
"21"=>'u',
"22"=>'v',
"23"=>'w',
"24"=>'x',
"25"=>'y',
"26"=>'z',
);
	
$chr_array=str_split($str); 

foreach ($chr_array as  $value) {
	$this->val+=array_search($value, $alpha);
}

return $this->val;

}
} 


