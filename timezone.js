/**
 * Функция устанавливает в кукисы определённые в js характеристики временой зоны. Точное имя узнать средствами js неизвестно как
 **/
(function(){
	var date=new Date();
	var m1 = new Date(date.getFullYear(), 0, 1);
	var m2 = new Date(date.getFullYear(), 6, 1);
	var dst=!!(m1.getTimezoneOffset()-m2.getTimezoneOffset());
	var offset=-date.getTimezoneOffset()/60;
	if (dst) {
		document.cookie='timezone_dst='+dst+'; path=/; expires=Sat, 05 Sep 2030 10:02:39 GMT';
	}
	document.cookie='timezone_offset='+offset+'; path=/; expires=Sat, 05 Sep 2030 10:02:39 GMT';
})();