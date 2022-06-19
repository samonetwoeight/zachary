<div class="container">
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header py-3">
			<div class="card-title">
				<h3 class="card-label font-weight-bolder text-dark">Schedule Details</h3>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Form-->
		<form class="form" method="post">
			<div class="card-body">
				<div class="row">
					<div class="col-md-4">
						<label>Date</label>
						<div class="input-group date" id="kt_datepicker_1" data-target-input="nearest">
							<input type="text" class="form-control datepicker-input <?php if(form_error('Date')){ echo 'is-invalid';} ?>" placeholder="Select date" data-target="#kt_datepicker_1" name="Date" id="Date" autocomplete="false">
							<div class="input-group-append" data-target="#kt_datetimepicker_1" data-toggle="datepicker">
								<span class="input-group-text">
									<i class="ki ki-calendar"></i>
								</span>
							</div>
						</div>
						<?php echo form_error('Date', '<div class="invalid-feedback">', '</div>') ?>
					</div>
					<div class="col-md-4">
						<label>Time</label>
						<select class="form-control" name="Time" id="Time">
							<?php for($i=1000; $i <= 2200; $i+=50){ 
								$hour = substr($i, 0, 2);
								$min = substr($i, -2);
								if($min == 50){
									$min = 30;
								}
								$var = $hour.":".$min;
							?>
							<option value="<?php echo $var; ?>"><?php echo $hour.':'.$min; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-4 mb-5">
						<label>Number of Pax</label>
						<input type="number" name="Number" class="form-control form-control-solid mb-2 <?php if(form_error('Number')){ echo 'is-invalid';} ?>" onkeyup="populate(this.value)">
						<?php echo form_error('Number', '<div class="invalid-feedback">', '</div>') ?>
					</div>

					<div id="CustomerContainer" class="w-100"></div>
				
				</div>
			</div>
			<div class="card-footer text-right">
				<a href="<?php echo base_url('User'); ?>" name="Cancel" class="btn btn-secondary mr-2">Cancel</a>
                <input type="submit" name="Submit" class="btn btn-primary" value="Submit">
            </div>
		</form>
		<!--end::Form-->
	</div>
</div>

<script type="text/javascript">

	function checkservice(value){
		var customer = value.split("_");
		var service = customer[0];
		customer = customer[1];
		$.ajax({
			type: 'post',
			url: HOST_URL+'Schedular/checkservice',
			data: {Service:service},
			dataType: "json",
			success:function(data){
				$('#Staff'+customer).empty();
				$('#Staff'+customer).append('<option>---</option>')
				for(var i=0; i<data.length; i++){
					$('#Staff'+customer).append('<option value='+data[i]['ID']+'_'+customer+'>'+data[i]['Name']+'</option>');
				}
			}
		});
	}

	function checktimeslot(value){
		var staff = value.split("_");
		staffid = staff[0];
		customer = staff[1];
		var date = $('#Date').val();
		var time = $('#Time').val();
		var showslots = '';
		$.ajax({
			type: 'post',
			url: HOST_URL+'Schedular/checktimeslot',
			data: {
				Staff:staffid,
				Date:date,
				Time:time
			},
			dataType: "json",
			success:function(data){
				$('#Duration'+customer).empty()
				if(data[0] == 'N'){
					showslots += '<option value="" selected>No Available Slot</option>';
				}
				if(data[0] == 'Y'){
					showslots += '<option value="HALF">Half Hour</option>';
				}
				if(data[0] == 'Y' && data[1] == 'Y'){
					showslots += '<option value="ONE">One Hour</option>';
				}
				if(data[0] == 'Y' && data[1] == 'Y' && data[2] == 'Y'){
					showslots += '<option value="ONEHALF">One and Half Hour</option>';
				}
				if(data[0] == 'Y' && data[1] == 'Y' && data[2] == 'Y' && data[3] == 'Y'){
					showslots += '<option value="TWO">Two Hours</option>';
				}
				$('#Duration'+customer).append(showslots);
			}
		});
	}



	function populate(value){
		$('#CustomerContainer').empty();
		for(var i=1; i <= value; i++){
			$('#CustomerContainer').append(
				'<div class="col-md-12 mb-2">'+
					'<div class="container p-3" style=" box-shadow: 0px 0px 10px -5px; border-radius:7px;">'+
						'<div class="row">'+
							'<div class="col-md-3">'+
								'<label>Customer Name</label>'+
								'<input type="text" name="CustomerName'+i+'" class="form-control">'+
							'</div>'+
							'<div class="col-md-3">'+
								'<label>Service</label>'+
								'<select class="form-control" name="Service'+i+'" onchange="checkservice(this.value)">'+
									'<option>---</option>'+
									'<option value="Foot_'+i+'">Foot</option>'+
									'<option value="Body_'+i+'">Body</option>'+
									'<option value="Guasa_'+i+'">Guasa</option>'+
									'<option value="Cupping_'+i+'">Cupping</option>'+
									'<option value="Tuina_'+i+'">Tuina</option>'+
									'<option value="Sports_'+i+'">Sports</option>'+
								'</select>'+
							'</div>'+
							'<div class="col-md-3">'+
								'<label>Staff</label>'+
								'<select class="form-control" name="Staff'+i+'" id="Staff'+i+'" onchange="checktimeslot(this.value)"></select>'+
							'</div>'+
							'<div class="col-md-3">'+
								'<label>Duration</label>'+
								'<select class="form-control" name="Duration'+i+'" id="Duration'+i+'">'+
								'</select>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>'
			);
		}
	}
</script>
