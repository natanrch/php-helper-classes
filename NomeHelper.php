<?php


/* 
* Helper for working with names
*/

namespace App\Helpers;

class NomeHelper
{
	public static function pegaPrimeiroNome($nomeCompleto)
	{
		$nomeCompleto = explode(' ', $nomeCompleto);
		$nome = $nomeCompleto[0];
		return $nome;
	}
}