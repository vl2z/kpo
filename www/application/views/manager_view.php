
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
												<p>Текущий статус заказа: <strong style='color:green; font-weight:bold;'>%s</strong></p>
												 <form action='' method='post'>
													<input name='hiddeninput' type='hidden' id='hidden' value=%s>
													<p>
													  <input class='with-gap' name='group1' type='radio' id='done%s' value='done'/>
													  <label for='done%s'>Выполнен</label>
													</p>
													<p>
													  <input class='with-gap' name='group1' type='radio' id='undone%s' value='undone'/>
													  <label for='undone%s'>Не выполнен</label>
													</p>
													<p>
													  <input class='with-gap' name='group1' type='radio' id='await%s'  value='await'/>
													  <label for='await%s'>В печати</label>
													</p>
												  <br>
													<button id='btnconfirm' class='btn waves-effect waves-light btn-large purple darken-3 z-depth-1' type='submit' name='action'>Изменить статус
													</button>
													<!--<a class='right waves-effect waves-light btn purple darken-3 z-depth-1'>Изменить статус</a>-->
												</form>
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
						$row['status'],
						$row['id'],//for hidden input
						$row['id'],//this and the following for inputs and labels of radiobuttons
						$row['id'],
						$row['id'],
						$row['id'],
						$row['id'],
						$row['id']
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