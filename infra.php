<?php
namespace infrajs\timezone;

$zone = Timezone::detect();
if ($zone) {
	date_default_timezone_set($zone);
	header('Infra-Timezone:'.$zone);
} else {
	header('Infra-Timezone:false');
}
