<?php

function alphabet_position(string $s) {
	$kata = "";
	
	$s = strtolower($s);
	$str = str_split(str_replace(array(" ", "'", ".", "<", ">"), "", $s));
	
	for($j=0; $j<count($str); $j++)
	{
		if($str[$j] == 'a') {
			$kata .= '1';
		} elseif($str[$j] == 'b') {
			$kata .= '2';
		} elseif($str[$j] == 'c') {
			$kata .= '3';
		} elseif($str[$j] == 'd') {
			$kata .= '4';
		} elseif($str[$j] == 'e') {
			$kata .= '5';
		} elseif($str[$j] == 'f') {
			$kata .= '6';
		} elseif($str[$j] == 'g') {
			$kata .= '7';
		} elseif($str[$j] == 'h') {
			$kata .= '8';
		} elseif($str[$j] == 'i') {
			$kata .= '9';
		} elseif($str[$j] == 'j') {
			$kata .= '10';
		} elseif($str[$j] == 'k') {
			$kata .= '11';
		} elseif($str[$j] == 'l') {
			$kata .= '12';
		} elseif($str[$j] == 'm') {
			$kata .= '13';
		} elseif($str[$j] == 'n') {
			$kata .= '14';
		} elseif($str[$j] == 'o') {
			$kata .= '15';
		} elseif($str[$j] == 'p') {
			$kata .= '16';
		} elseif($str[$j] == 'q') {
			$kata .= '17';
		} elseif($str[$j] == 'r') {
			$kata .= '18';
		} elseif($str[$j] == 's') {
			$kata .= '19';
		} elseif($str[$j] == 't') {
			$kata .= '20';
		} elseif($str[$j] == 'u') {
			$kata .= '21';
		} elseif($str[$j] == 'v') {
			$kata .= '22';
		} elseif($str[$j] == 'w') {
			$kata .= '23';
		} elseif($str[$j] == 'x') {
			$kata .= '24';
		} elseif($str[$j] == 'y') {
			$kata .= '25';
		} elseif($str[$j] == 'z') {
			$kata .= '26';
		} 
		
		
		if($j != count($str)-1) {
			$kata .= ' ';
		}
		
	}
	
	return $kata;
}

var_dump(alphabet_position("The sunset sets at twelve o' clock"));