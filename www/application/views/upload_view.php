<div class="container">
    <div class="section">
      <!--   Icon Section   -->
		<div class="row">

			<?php //echo "sdfdsf".$data;
			if($data!=null) 
				printf("<p style='color:green'>Заказ №%s успешно произведен.</p>",$data)
			?>
			<form class="col s12" action="" method="post" enctype="multipart/form-data">
				<div class="row">
				  <div class="input-field col s6 ">
					<i class="mdi-action-account-circle prefix "></i>
					<input id="firstName" type="text" class="validate " name="firstName" required>
					<label for="firstName">Имя</label>
				  </div>
				  
				  <div class="input-field col s6">
					<i class="mdi-action-account-circle prefix"></i>
					<input id="lastName" type="text" class="validate" name="lastName" required>
					<label for="lastName">Фамилия</label>
				  </div>
				  
				  <div class="input-field col s6">
					<i class="mdi-communication-phone prefix"></i>
					<input id="phone" type="tel" class="validate" name="phone" required>
					<label for="phone">Телефон</label>
				  </div>
				  
				  <div class="input-field col s6">
					<i class="mdi-content-mail prefix"></i>
					<input id="email" type="email" class="validate" name="email" required>
					<label for="email">E-mail</label>
				  </div>
				</div>
			
				<script type="text/javascript">
        function myff () {
            //var selectedOption = select.options[select.selectedIndex];
            alert ("The selected option is ");
			/*for($i=0;$i<count($_FILES['filesToUpload']['name']);$i++) {
					if(!is_uploaded_file($_FILES['filesToUpload']['tmp_name'][$i])) {
						echo 'file is not uploaded';
					} else {
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
				}*/
        }
    </script>
				<div class="card-panel">
					<div>
						<div class="input-field col s12">
							<div class="fileform col s6">
								<div class="selectbutton purple darken-3 z-depth-1 col s12">Нажмите, чтобы загрузить фото</div>	
								<input type="file" name="filesToUpload[]" id="upload"  multiple onchange="myf()" accept="image/*" required />
							</div>
							<div class="input-field col s6">
								<div id="fileformlabel"></div>
							</div>
						</div>
						<output id="list"></output>  
						<div class="col s6">
							<label>Выберите тип бумаги</label>
							<select class="browser-default" name="paperType" required>
								<option value="glance" selected>Глянцевая</option>
								<option value="mat">Матовая</option>
							</select>
						</div>
						
						<div class="col s6">
							<label>Выберите размер</label>	
							<select class="browser-default" name="size" required>
								<option value="4x3">4Х3</option>
								<option value="16x9">16Х9</option>				
							 </select>			
						</div>
						<div class="row"></div>
					</div>	  
					<div style="clear: both;">						
						<div id="inputi"></div>				
						<button id="btnconfirm" class="btn waves-effect waves-light btn-large purple darken-3 z-depth-1" type="submit" name="action">Подтвердить
						</button>					
					</div>
				</div>
			</form>
		</div>
		<br><br>
	</div>
</div>