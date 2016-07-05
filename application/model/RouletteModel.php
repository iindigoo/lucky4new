<?php

class AdminModel
{
	public static function randomNumber{

		$value_spin=0;
		$value_random=0;
		$random_string=0;
		$value_spin = rand(0, 20);
		$value_random = $value_spin * 4.761904761904762;

		$random_string = rand(5, 40);
		$random_string = $random_string * 0.1;
		$random =($value_random + $random_string);

		if ($value_spin == 0 or $value_spin == 2 or $value_spin == 4 or $value_spin == 6 or $value_spin ==8 or $value_spin == 11 or $value_spin == 13 or $value_spin == 15 or $value_spin == 17 or $value_spin == 19)
		{
		 /*zwart*/
		}
		else if ($value_spin == 1 or $value_spin == 3 or $value_spin == 5 or $value_spin ==7 or $value_spin == 9 or $value_spin ==12 or $value_spin ==14 or $value_spin == 16 or $value_spin == 18 or $value_spin == 20)
		{
		 /*rood*/
		}else if($value_spin == 10)
		{
		 /*groen*/
		}else{
		 /*ERROR*/
		}

?>