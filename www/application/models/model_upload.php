<?php
function sanitStr($var)
	{
		$var = stripslashes($var);
		$var = htmlentities($var);//htmlspecialchars
		$var = strip_tags($var);
		return $var;
	}
	function sanitSQL($var)
	{
		$var = mysql_real_escape_string($var);
		$var = sanitStr($var);
		return $var;
	}
class Model_Upload extends Model
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
		$boolvar='';
		if(isset($_POST['firstName']) and isset($_POST['lastName']))
		{
			$res = mysqli_query($mysqli,"SELECT COUNT( id ) as idd FROM `orders`") or die(mysqli_error());
			$count = mysqli_fetch_array($res);
			$N = $count[idd]+1;
			$boolvar=$N;
			///////echo ($N);
			@mkdir("uploads/$N", 0777);
			static $all = 0;
			$firstName = mb_convert_case(sanitSQL($_POST['firstName']), MB_CASE_LOWER, "UTF-8");
			$lastName = mb_convert_case(sanitSQL($_POST['lastName']), MB_CASE_LOWER, "UTF-8");
			$phone = sanitSQL($_POST['phone']);
			$email = mb_convert_case(sanitSQL($_POST['email']), MB_CASE_LOWER, "UTF-8");
			$size = sanitSQL($_POST['size']);
			$paperType = sanitSQL($_POST['paperType']);
			//////echo "model-".$firstName;
			//echo "quant=".count($_FILES['filesToUpload']['name']);
			$quantityOfPhotos = count($_FILES['filesToUpload']['name']);
			$ffiles=array();
				/*echo "sdfsdf".$_FILES['filesToUpload'];
				echo "var_dump:";
				var_dump ($_FILES);
				echo "\n print_r::";
				print_r( $_FILES );*/
				//$res = mysqli_query($mysqli,"SELECT lastName FROM `clients` WHERE lastName='$lastName'") or die(mysqli_error($mysqli));
			$res = mysqli_query($mysqli,"SELECT clientId, firstName, lastName FROM `clients` WHERE firstName='$firstName' and lastName='$lastName'") or die(mysqli_error($mysqli));
			$row = mysqli_fetch_array($res);
			$dbclientId = $row[clientId];
			$dbname = $row[firstName];
			$dbsurname = $row[lastName];
			$price = $quantityOfPhotos*65;
			
			if ($dbname and $dbsurname)
			{
				echo "name-".$dbname;
				echo "surname-".$dbsurname;
				
				if (!mysqli_query($mysqli,"UPDATE `clients` SET AmountOfAllorders=AmountOfAllorders+1 WHERE clientId=$dbclientId"))
					mysqli_error();
				//copy($_FILES['filesToUpload']['tmp_name'][0],"uploads/".basename($_FILES['filesToUpload']['name'][0]));
				//echo "\n for:";
				/*foreach ($_FILES['uploads']['name'] as $item)
				{
					$ffiles[]=$item;
				}*/
			}
			else
			{
				echo "name-".$dbname;
				echo "surname-".$dbsurname;
				$result = mysqli_query($mysqli,"SELECT COUNT( id ) as idd FROM `orders`") or die(mysqli_error());
				$row = mysqli_fetch_array($result);
				$dbclientId = $row[idd];
				mysqli_query($mysqli,"INSERT INTO `clients` VALUES (NULL,'$firstName', '$lastName', '$phone', '$email', 1) ") or die(mysqli_error($mysqli));
			}
			
			mysqli_query($mysqli,"INSERT INTO `orders` VALUES 
				(NULL, CURDATE(), 'await', '','4', '9', '$paperType', '0', '$price', '$dbclientId', '$N') ")
				or die(mysqli_error($mysqli));
			////////print_r ($_FILES['filesToUpload']['name']);
			//if(isset($_POST['action1'])){
				for($i=0;$i<count($_FILES['filesToUpload']['name']);$i++) 
				{
					if(!is_uploaded_file($_FILES['filesToUpload']['tmp_name'][$i])) 
					{
						echo 'file is not uploaded';
					} 
					else 
					{
						if ($all==0)
							$all=$i;
						printf("all:".$all."\n");
						$name = $_FILES['filesToUpload']['name'][$i];
						//echo "name:".$name;
						preg_match("/\.[a-z]+$/i",$name,$n );
						echo "format:".$n[0];
						//echo $_FILES['filesToUpload']['name'][$i]."\n";
						$_FILES['filesToUpload']['name'][$i]="$N_$i";
						//echo $_FILES['filesToUpload']['name'][$i]."\n";
						copy($_FILES['filesToUpload']['tmp_name'][$i],"uploads/".$N."/".$N."_".$_FILES['filesToUpload']['name'][$i].$n[0]);
					}
				}
			//}
			
			/*printf("<div>%s	</div><div>%s</div><div>%s</div><div>%s</div><div>%s</div>div>%s</div>",
					$firstName, $lastName, $phone, $email, $size, $paperType);*/
			$mysqli->close();
			return $boolvar;
		}
	}
}