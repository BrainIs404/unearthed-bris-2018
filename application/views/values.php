<div class="container">

    <br>
	<div class="container-fluid text-center p-2 mb-4 custom-box">
		<div class="row justify-content-center"><h2>Continuous miner</h2></div>
		<div class="row">
			<div class="col text-center"><b>Running status: </b><input type="text" id="input1" value="1"></div>
			<div class="col text-center"><b>Fill percentage: </b><input type="text" id="input2" value="80"></div>
		</div>
	</div>

	<div class='card-deck'>

		<div class="card p-1 m-3 justify-content-center custom-card">
			<h5 class="card-title justify-content-center m-3" style="text-align: center">
				<img src="<?=base_url()?>assets/img/Status_black.png" class="status-light rounded-circle mr-2" style="height:30px;width:30px">
				Roof grouting
			</h5>
			<div class="text-info text-center">
				<label>Priority level:<br><input type="text" id="input3" value="5"></label>
			</div>
			<div class="card-body text-center">
				<div class="row">
					<div class="col">Distance left: <input type="text" id="input4" value="3"></div>
				</div>
				<div class="row">
					<div class="col">Time left:<br><input type="text" id="input5" value="798"></div>
				</div>
			</div>
			<div class="card-footer justify-content-center text-center">
				Status
			</div>
		</div>

		<div class="card p-1 m-3 justify-content-center custom-card">
			<h5 class="card-title justify-content-center m-3" style="text-align: center">
				<img src="<?=base_url()?>assets/img/Status_black.png" class="status-light rounded-circle mr-2" style="height:30px;width:30px">
				Spill cleanup
			</h5>
			<div class="text-info text-center">
				<label>Priority level:<br><input type="text" id="input6" value="2"></label>
			</div>
			<div class="card-body text-center">
				<div class="row">
					<div class="col">Max time before next cleanup: <input type="text" id="input7" value="1978"></div>
				</div>
			</div>
			<div class="card-footer justify-content-center text-center">
				Status
			</div>
		</div>

		<div class="card p-1 m-3 justify-content-center custom-card">
			<h5 class="card-title justify-content-center m-3" style="text-align: center">
				<img src="<?=base_url()?>assets/img/Status_black.png" class="status-light rounded-circle mr-2" style="height:30px;width:30px">
				Ventilation extension
			</h5>
			<div class="text-info text-center">
				<label>Priority level:<br><input type="text" id="input8" value="4"></label>
			</div>
			<div class="card-body text-center">
				<div class="row">
					<div class="col">Installed extension length: <input type="text" id="input9" value="43"></div>
				</div>
				<div class="row">
					<div class="col">Distance before next extension: <input type="text" id="input10" value="7"></div>
				</div>
			</div>
			<div class="card-footer justify-content-center text-center">
				Status
			</div>
		</div>
	</div>

	
	<div class='card-deck'>
		<div class="card p-1 m-3 justify-content-center custom-card">
			<h5 class="card-title justify-content-center m-3" style="text-align: center">
				<img src="<?=base_url()?>assets/img/Status_black.png" class="status-light rounded-circle mr-2" style="height:30px;width:30px">
				Stone Dusting
			</h5>
			<div class="text-info text-center">
				<label>Priority level:<br><input type="text" id="input11" value="0"></label>
			</div>
			<div class="card-body text-center">
				<div class="row">
					<div class="col">Distance left: <input type="text" id="input12" value="0"></div>
				</div>
				<div class="row">
					<div class="col">Time left:<br><input type="text" id="input13" value="92"></div>
				</div>
			</div>
			<div class="card-footer justify-content-center text-center">
				Status
			</div>
		</div>

		<div class="card p-1 m-3 justify-content-center custom-card">
			<h5 class="card-title justify-content-center m-3" style="text-align: center">
				<img src="<?=base_url()?>assets/img/Status_black.png" class="status-light rounded-circle mr-2" style="height:30px;width:30px">
				Power Cable Extenstion
			</h5>
			<div class="text-info text-center">
				<label>Priority level:<br><input type="text" id="input14" value="1"></label>
			</div>
			<div class="card-body text-center">
				<div class="row">
					<div class="col">Installed extension length: <input type="text" id="input15" value="35"></div>
				</div>
				<div class="row">
					<div class="col">Expected remaining time: <input type="text" id="input16" value="3409"></div>
				</div>
			</div>
			<div class="card-footer justify-content-center text-center">
				Status
			</div>
		</div>

		<div class="card p-1 m-3 justify-content-center custom-card">
			<h5 class="card-title justify-content-center m-3" style="text-align: center">
				<img src="<?=base_url()?>assets/img/Status_black.png" class="status-light rounded-circle mr-2" style="height:30px;width:30px">
				Water Piping Extenstion
			</h5>
			<div class="text-info text-center">
				<label>Priority level:<br><input type="text" id="input17" value="3"></label>
			</div>
			<div class="card-body text-center">
				<div class="row">
				    <div class="col">Installed extension length: <input type="text" id="input18" value="35"></div>
				</div>
				<div class="row">
					<div class="col">Expected remaining time: <input type="text" id="input19" value="450"></div>
				</div>
			</div>
			<div class="card-footer justify-content-center text-center">
				Status
			</div>
		</div>
    </div>
    
    <div class="row justify-content-center">
        <button type="button" class="btn btn-primary">Save values</button>
    </div>

</div>
