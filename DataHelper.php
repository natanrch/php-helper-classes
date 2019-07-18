<?php

/* 
* Helper for formating data with Carbon
*/

namespace App\Helpers;

use Carbon\Carbon;

class DataHelper
{
	public static function pegaDataDeDateTime($dateTime)
	{
		$data = $dateTime->format('d/m/Y');
		return $data;
	}

	public static function pegaHoraDeDateTime($dateTime)
	{
		$data = $dateTime->format('H:i');
		return $data;
	}

	public static function formataData($data)
	{
		$data = Carbon::createFromFormat('Y-m-d', $data);
		$data = $data->format('d/m/Y');
		return $data;
	}
}