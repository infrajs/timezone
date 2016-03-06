<?php
/**
 * Обязательна js составляющая. Функция по характеристикам зоны определяет подходящую зону 
 * аббревиатура зоны не передана в функцию timezone_name_from_abbr и по смещению 2 и 3 аргумент, получается случайная подходящая зона
 * результат негарантирован
 **/
namespace infrajs\timezone;

class Timezone
{
	public static function detect() {
		if (isset($_COOKIE['timezone_offset'])) {
			$offset=(int)$_COOKIE['timezone_offset'];
			$dst=!empty($_COOKIE['timezone_dst']);
			$zone=timezone_name_from_abbr(null, 60*60*$offset, $dst);
			if ($zone) {
				return $zone;
			}
		}
	}
}
