<?php

class Model_Manager extends Model
{
	var $success = false;
	public function get_data()
	{
$mysqli = new mysqli("localhost", "admin", "password", "photoprint");
/* check connection */ 
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//printf("Host information: %s\n", $mysqli->host_info);
/* close connection */

	
	/*$db = mysqli_connect("localhost","admin","password",);
	mysql_select_db("photoprint",$db);*/
	if(true)//isset($_POST['login']) and is_numeric($_POST['login']))
		{
			$login = $_POST['login'];
			//echo $login;
			$resOrders = mysqli_query($mysqli,"SELECT * FROM `orders`") or die(mysqli_error());
			
			if (isset($resOrders))
			{
				$this->success = true;
				$i=0;
				while($rowOrders= mysqli_fetch_array($resOrders))
				{
					$resClients = mysqli_query($mysqli,"SELECT * FROM `clients` WHERE clientId=$rowOrders[clientId]") or die(mysqli_error());
					$rowClients = mysqli_fetch_array($resClients);
					//echo "sdf".$i;
					$i++;
					$A[$i] = array(
					"id"=>$rowOrders[id],
					"clientId"=>$rowOrders[clientId],
					"lastName"=>$rowClients[lastName],
					"firstName"=>$rowClients[firstName],
					"phone"=>$rowClients[phone],
					"email"=>$rowClients[email],
					"price"=>$rowOrders[price],
					
					"dateOfTheOrder"=>$rowOrders[dateOfTheOrder],
					"dateOfTheExecution"=>$rowOrders[dateOfTheExecution],
					"width"=>$rowOrders[width],
					"height"=>$rowOrders[height],
					"paperType"=>$rowOrders[paperType],
					
					
					"path"=>$rowOrders[path],
					
					"status"=>$rowOrders[status],
					
					
					);
/*
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
					$myrow[clientId], $myrow[lastName],$myrow[firstName],$myrow[amountOfAllOrders]);*/
				};
				//print_r( $A );
			}
			/*if($login=="12345")
			{
				$bvar = "true";
				//$bvar="true";
				//sleep(400);
				//echo "safsag";
			}
			else
			{
				$bvar="false";
				//$data["login_status"] = "access_denied";
			}
			*/
			return $A;

		}
		else
		{
			//$data["login_status"] = "";
		}
		//echo $A;
	//return $A;
	$mysqli->close();
		// Здесь мы просто сэмулируем реальные данные.
		//printf("sdfsfg");
		/*return array(
			
			array(
				'Year' => '2012',
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
			),

			array(
				'Year' => '2012',
				'Site' => 'http://ZopoMobile.ru',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
			),

			array(
				'Year' => '2012',
				'Site' => 'http://GeekWear.ru',
				'Description' => 'Интернет-магазин брендовой одежды для гиков.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://РоналВарвар.рф',
				'Description' => 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. Мультфильм о самом нетипичном варваре на Земле, переполненный интересными приключениями и забавными ситуациями.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TompsonTatoo.ru',
				'Description' => 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Санкт-Петербурга.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://DaftState.ru',
				'Description' => 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TiltPeople.ru',
				'Description' => 'Сайт сообщества фотографов в стиле Tilt Shif.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://AbsurdGames.ru',
				'Description' => 'Страничка российской команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.'
			),

		);
		*/
	}
	public function get_req()
	{
		return $this->success;
	}

}
