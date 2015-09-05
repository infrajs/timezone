<?php
namespace itlife\timezone;

global $infra;
infra_when($infra, 'oninit', function () {
	$zone=Timezone::detect();
	if ($zone) {
		date_default_timezone_set($zone);
		@header('Infra-Timezone:'.$zone);
	} else {
		@header('Infra-Timezone:false');
	}
});
infra_when($infra,'onjs',function(){
	global $infra;
	$infra['js'] .= $infra['require']('*timezone/timezone.js');
});
