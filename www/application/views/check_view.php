<div class="container">
    <div class="section">

      <!--   Icon Section   -->
		<div class="row">
		  <form class="col s12 l12 m12" action="" method="post">
			<div class="row">
			  <div class="input-field col s12">
				  <div style="margin:auto;">
					<i class="mdi-maps-local-offer prefix"></i>
					<input id="idnum" type="text" class="validate" name="login">
					<label for="idnum">Введите номер заказа</label>
				  
				  <button id="btnconfirm" class="btn waves-effect waves-light btn-large purple darken-3 z-depth-1" type="submit" name="action">Подтвердить
				  </button>
				  </div>
			  </div>
			</div>
		  </form>
			<?php //extract($data); ?>
			<?php if($bvar1=="true") { ?>
			<p style="color:green">Авторизация прошла успешно.</p>
			<?php }?>
			
			<?php
			//echo "bvar".$res;
			//printf("res=%s", $bvar);
			//$data="sgsag";
			if (isset($data))
			{
				//$myrow = mysqli_fetch_array($data);
				$i=0;
				foreach($data as $row){
					foreach($row as $sKey => $sValue){
						printf("
					<div>%s
					</div>
					",
					$sValue//$data[i][clientId], $data[i][lastName], $data[i][firstName],$data[i][amountOfAllOrders]
					);
					}
				}
				/*while($data)
				{	$i++;
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
					$data[i][clientId], $data[i][lastName], $data[i][firstName],$data[i][amountOfAllOrders]);
				};*/
			}
			else
			{
				if ($bvar!=false)
					echo "<p>No info</p>";
			}
			?>
		</div>

    </div>
    <br><br>

    <!--<div class="section">

    </div>-->
</div>