
<div class="container">
    <div class="section">

      <!--   Icon Section   -->
		<div class="row">
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
				//echo "!!!!!!!!!!!!!!!!!!!!!".$data[1][1];
				echo "<ul class='collapsible' data-collapsible='accordion'>";
				foreach($data as $row){
					//foreach($row as $sKey => $sValue){
						printf("
					
					
						<li>
						  <div class='collapsible-header'>
							<i class='mdi-action-done'></i>Номер заказа: %s</div>
							<div class='collapsible-body'>
								<div class='container '>
									<div class='card-panel'>
										<div class='row'>
											<div class='col s6'>
												<p>clientId: %s </p>
												<p>Фамилия: %s </p>
												<p>Имя: %s</p>
												<p>Номер телефона: %s</p>
												<p>Почта: %s</p>
												<p>Цена: %s</p>
												<p>dateOfTheOrder: %s</p>
												<p>dateOfTheExecution: %s</p>
												<p>width: %s</p>
												<p>height: %s</p>
												<p>paperType: %s</p>
												<p>path: %s</p>
											</div>
											<div class='col s6'>
												<p>Текущий статус заказа:</p>
												 <label>Выбрать статус заказа</label>
												  <select class='browser-default'>
													<option value='' >%sНе выполнен</option>
													<option value='1'>В печати</option>
													<option value='2'>Завершен</option>
												  </select>
												  <br>
												  <td><a class='right waves-effect waves-light btn purple darken-3 z-depth-1'>Подтвердить</a></td>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						
						
						",
						$row['id'],
						$row['clientId'],
						$row['lastName'],
						$row['firstName'],
						$row['phone'],
						$row['email'],
						$row['price'],
						$row['dateOfTheOrder'],
						$row['dateOfTheExecution'],
						$row['width'],
						$row['height'],
						$row['paperType'],
						$row['path'],
						$row['status']
						//$data[i][clientId], $data[i][lastName], $data[i][firstName],$data[i][amountOfAllOrders]
						);
					//
				}
				echo "</ul>";
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