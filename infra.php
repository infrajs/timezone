<?php
namespace infrajs\timezone;

$zone = Timezone::detect();
if ($zone) {
	date_default_timezone_set($zone);
	header('Infrajs-Timezone: '.$zone);
} else {
	header('Infrajs-Timezone: false');
}
