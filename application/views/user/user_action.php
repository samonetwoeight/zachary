<div class="container">
	<div class="card card-custom">
		<!--begin::Header-->
		<div class="card-header py-3">
			<div class="card-title">
				<h3 class="card-label font-weight-bolder text-dark">User Details</h3>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Form-->
		<form class="form" method="post">
			<div class="card-body">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="Name" class="form-control form-control-solid mb-2 <?php if(form_error('Name')){ echo 'is-invalid';} ?>" placeholder="Full Name" value="<?php if($Action == 'Update'){ echo $result->Name; } ?>">
					<?php echo form_error('Name', '<div class="invalid-feedback">', '</div>') ?>
				</div>
				<div class="form-group row">
					<div class="col-md-6">
						<label>Username</label>
						<input type="text" name="Username" class="form-control form-control-solid mb-2 <?php if(form_error('Username')){ echo 'is-invalid';}?>" placeholder="Username" value="<?php if($Action == 'Update'){ echo $result->Username; } ?>" <?php if($Action == 'Update'){ echo 'readonly'; } ?> > 
						<?php echo form_error('Username', '<div class="invalid-feedback">', '</div>') ?>
					</div>
					<div class="col-md-6">
						<label>Password</label>
						<input type="password" name="Password" class="form-control form-control-solid mb-2 <?php if(form_error('Password')){ echo 'is-invalid';} ?>" placeholder="Password">
						<?php if($Action == 'Update'){ ?> 
							<span class="text-muted small">** Only key in if there are any changes</span>
						<?php } ?>
						<?php echo form_error('Password', '<div class="invalid-feedback">', '</div>') ?>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2">
						<label class="col-form-label">Foot</label>
					   	<span class="switch switch-icon">
					    	<label>
					     	<input type="checkbox" <?php echo $result->FootCheck; ?> value="Foot" />
					     	<input type="hidden" name="Foot" id="Foot" value="<?php echo $result->Foot; ?>">
					     	<span></span>
					    	</label>
					   	</span>
					</div>
					<div class="col-md-2">
						<label class="col-form-label">Body</label>
					   	<span class="switch switch-icon">
					    	<label>
					     	<input type="checkbox" <?php echo $result->BodyCheck; ?> value="Body" />
					     	<input type="hidden" name="Body" id="Body" value="<?php echo $result->Body; ?>">
					     	<span></span>
					    	</label>
					   	</span>
					</div>
					<div class="col-md-2">
						<label class="col-form-label">Guasa</label>
					   	<span class="switch switch-icon">
					    	<label>
					     	<input type="checkbox" <?php echo $result->GuasaCheck; ?> value="Guasa" />
					     	<input type="hidden" name="Guasa" id="Guasa" value="<?php echo $result->Guasa; ?>">
					     	<span></span>
					    	</label>
					   	</span>
					</div>
					<div class="col-md-2">
						<label class="col-form-label">Cupping</label>
					   	<span class="switch switch-icon">
					    	<label>
					     	<input type="checkbox" <?php echo $result->CuppingCheck; ?> value="Cupping" />
					     	<input type="hidden" name="Cupping" id="Cupping" value="<?php echo $result->Cupping; ?>">
					     	<span></span>
					    	</label>
					   	</span>
					</div>
					<div class="col-md-2">
						<label class="col-form-label">Tuina</label>
					   	<span class="switch switch-icon">
					    	<label>
					     	<input type="checkbox" <?php echo $result->TuinaCheck; ?> value="Tuina" />
					     	<input type="hidden" name="Tuina" id="Tuina" value="<?php echo $result->Tuina; ?>">
					     	<span></span>
					    	</label>
					   	</span>
					</div>
					<div class="col-md-2">
						<label class="col-form-label">Sports</label>
					   	<span class="switch switch-icon">
					    	<label>
					     	<input type="checkbox" <?php echo $result->SportsCheck; ?> value="Sports" />
					     	<input type="hidden" name="Sports" id="Sports" value="<?php echo $result->Sports; ?>">
					     	<span></span>
					    	</label>
					   	</span>
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
	$(document).ready(function(){
		$("input[type=checkbox]").change(function(){
			var name = '#'+this.value;
			if($(name).val() == 'Y'){
				$(name).val('N');
			}else{
				$(name).val('Y');
			}
		})
	});
</script>