<div class="container">
    <div class="section">
      <!--   Icon Section   -->
		<div class="row">
			<form class="col s12">
				<div class="row">
				  <div class="input-field col s6 ">
					<i class="mdi-action-account-circle prefix "></i>
					<input id="icon_prefix" type="text" class="validate ">
					<label for="icon_prefix">Имя</label>
				  </div>
				  
				  <div class="input-field col s6">
					<i class="mdi-action-account-circle prefix"></i>
					<input id="icon_prefix" type="text" class="validate">
					<label for="icon_prefix">Фамилия</label>
				  </div>
				  
				  <div class="input-field col s6">
					<i class="mdi-communication-phone prefix"></i>
					<input id="icon_telephone" type="tel" class="validate">
					<label for="icon_telephone">Телефон</label>
				  </div>
				  
				  <div class="input-field col s6">
					<i class="mdi-content-mail prefix"></i>
					<input id="icon_telephone" type="email" class="validate">
					<label for="icon_telephone">E-mail</label>
				  </div>
				</div>
			</form>
		  
			<div class="card-panel">
				<div>
					<div class="input-field col s12">
						<div class="fileform col s6">
							<div class="selectbutton purple darken-3 z-depth-1 col s12">Нажмите, чтобы загрузить фото</div>	
							<input type="file" name="upload[]" id="upload"  multiple onchange="" />
						</div>
						<div class="input-field col s6">
							<div id="fileformlabel"></div>
						</div>
					</div>
					<output id="list"></output>  
					<div class="col s6">
						<label>Выберите тип бумаги</label>
						<select class="browser-default">
							<option value="" disabled selected>Глянцевая</option>
							<option value="1">Матовая</option>
							
						</select>
					</div>
					
					<div class="col s6">
						<label>Выберите размер</label>	
						<select class="browser-default">
							<option value="">4Х3</option>
							<option value="1">16Х9</option>				
						 </select>			
					</div>
					<div class="row"></div>
				</div>	  
				<div style="clear: both;">						
					<div id="inputi"></div>				
					<button id="btnconfirm" class="btn waves-effect waves-light btn-large purple darken-3 z-depth-1" type="button" name="action" onclick="add_input()">Отправить
				    </button>	  
				</div>
			</div>
		</div>
		<br><br>
	</div>
</div>