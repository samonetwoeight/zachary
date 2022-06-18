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
							<input type="text" class="form-control datepicker-input <?php if(form_error('Date')){ echo 'is-invalid';} ?>" placeholder="Select date" data-target="#kt_datepicker_1" name="Date" autocomplete="false">
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
						<select class="form-control" name="Time">
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
						<input type="number" name="Number" class="form-control form-control-solid mb-2 <?php if(form_error('Number')){ echo 'is-invalid';} ?>" onchange="populate(this.value)">
						<?php echo form_error('Number', '<div class="invalid-feedback">', '</div>') ?>
					</div>
					<div class="col-md-12 mb-2">
						<div class="container p-3" style=" box-shadow: 0px 0px 10px -5px; border-radius:7px;">
							<div class="row">
								<div class="col-md-3">
									<label>Customer Name</label>
									<input type="text" name="CustomerName1" class="form-control">
								</div>
								<div class="col-md-3">
									<label>Service</label>
									<select class="form-control" name="Service1">
										<option value="FOOT">Foot</option>
										<option value="BODY">Body</option>
										<option value="GUASA">Guasa</option>
										<option value="CUPPING">Cupping</option>
										<option value="TUINA">Tuina</option>
										<option value="SPORTS">Sports</option>
									</select>
								</div>
								<div class="col-md-3">
									<label>Staff</label>
									<select class="form-control" name="Staff1">
										<?php foreach($users as $user){ ?>
											<option value="<?php echo $user->ID; ?>"><?php echo $user->Name ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-3">
									<label>Duration</label>
									<select class="form-control" name="Duration1">
										<option value="HALF">Half Hour</option>
										<option value="ONE">One Hour</option>
										<option value="ONEHALF">One and Half Hour</option>
										<option value="TWO">Two Hours</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 mb-2">
						<div class="container p-3" style=" box-shadow: 0px 0px 10px -5px; border-radius:7px;">
							<div class="row">
								<div class="col-md-3">
									<label>Customer Name</label>
									<input type="text" name="CustomerName2" class="form-control">
								</div>
								<div class="col-md-3">
									<label>Service</label>
									<select class="form-control" name="Service2">
										<option value="FOOT">Foot</option>
										<option value="BODY">Body</option>
										<option value="GUASA">Guasa</option>
										<option value="CUPPING">Cupping</option>
										<option value="TUINA">Tuina</option>
										<option value="SPORTS">Sports</option>
									</select>
								</div>
								<div class="col-md-3">
									<label>Staff</label>
									<select class="form-control" name="Staff2">
										<?php foreach($users as $user){ ?>
											<option value="<?php echo $user->ID; ?>"><?php echo $user->Name ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-3">
									<label>Duration</label>
									<select class="form-control" name="Duration2">
										<option value="HALF">Half Hour</option>
										<option value="ONE">One Hour</option>
										<option value="ONEHALF">One and Half Hour</option>
										<option value="TWO">Two Hours</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 mb-2">
						<div class="container p-3" style=" box-shadow: 0px 0px 10px -5px; border-radius:7px;">
							<div class="row">
								<div class="col-md-3">
									<label>Customer Name</label>
									<input type="text" name="CustomerName3" class="form-control">
								</div>
								<div class="col-md-3">
									<label>Service</label>
									<select class="form-control" name="Service3">
										<option value="FOOT">Foot</option>
										<option value="BODY">Body</option>
										<option value="GUASA">Guasa</option>
										<option value="CUPPING">Cupping</option>
										<option value="TUINA">Tuina</option>
										<option value="SPORTS">Sports</option>
									</select>
								</div>
								<div class="col-md-3">
									<label>Staff</label>
									<select class="form-control" name="Staff3">
										<?php foreach($users as $user){ ?>
											<option value="<?php echo $user->ID; ?>"><?php echo $user->Name ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-3">
									<label>Duration</label>
									<select class="form-control" name="Duration3">
										<option value="HALF">Half Hour</option>
										<option value="ONE">One Hour</option>
										<option value="ONEHALF">One and Half Hour</option>
										<option value="TWO">Two Hours</option>
									</select>
								</div>
							</div>
						</div>
					</div>
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
	function populate(value){
		console.log(value);
	}
</script>
