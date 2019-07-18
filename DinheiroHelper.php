<?php

/* 
* Helper for formating money for brazilian standard
*/

namespace App\Helpers;

class DinheiroHelper
{
	public static function formataDinheiro($valor)
	{
		$valor = number_format($valor, 2, ',', '.');
		return $valor;
	}
}