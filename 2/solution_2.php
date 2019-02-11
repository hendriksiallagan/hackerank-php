<?php

function validBraces($braces){
  	$brance_split = str_split($braces);
	
	for($i=0; $i<count($brance_split); $i++)
	{
		
		if($i%2 == 0)
		{		
			if(($brance_split[$i]=="(" && $brance_split[$i+1] == ")") || ($brance_split[$i]=="[" && $brance_split[$i+1] == "]") || ($brance_split[$i] =="{" && $brance_split[$i+1] == "}")    )
			{
				
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
}
