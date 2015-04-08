<?php

//SELECT * FROM `orders` WHERE clientId = (SELECT clientId FROM `clients` WHERE clientId=1)

	//mysql_set_charset( 'utf8' );
	/*$res = mysql_query("SELECT * FROM `clients`",$db) or die(mysql_error());
	$myrow = mysql_fetch_array($res);
	do{
		printf("
		<div>%s
		</div>
		<div>%s
		</div>
		<div>%s
		</div>
		<div>%s
		</div>
		",
		$myrow[clientId], $myrow[lastName],$myrow[firstName],$myrow[amountOfAllOrders]);
	}
	while($myrow = mysql_fetch_array($res));
	*/
	///echo 'res:'.$res;
	//echo $myrow;
class Model
{
	
	/*
		Модель обычно включает методы выборки данных, это могут быть:
			> методы нативных библиотек pgsql или mysql;
			> методы библиотек, реализующих абстракицю данных. Например, методы библиотеки PEAR MDB2;
			> методы ORM;
			> методы для работы с NoSQL;
			> и др.
	*/
	
	// метод выборки данных
	public function get_data()
	{
		// todo
	}
}