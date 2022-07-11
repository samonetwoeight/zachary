<div class="container text-center">
	<div class="row">
		<div class="col-md-4 m-auto" style="display: flex">
			<a href="<?php echo base_url('Schedular?date='.$prevdate); ?>" class="btn btn-primary p-0" style="flex:1; font-size: 25px;"> < </a>
			<h3 class="text-center m-auto" style="flex:4;"><?php echo date('jS M Y', strtotime($date)); ?></h3>
			<a href="<?php echo base_url('Schedular?date='.$nextdate); ?>" class="btn btn-primary p-0" style="flex:1; font-size: 25px;"> > </a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="overflow-x: auto;">
			<table class="table table-bordered table-hover table-checkable" style="min-width: 600px;">
				<thead class="text-center">
					<tr>
						<th>#</th>
						<th>Name</th>
						<?php for($i=1000; $i<=2200; $i+=50){  
							$hour = substr($i, 0, 2);
							$min = substr($i, -2);
							if($min == 50){
								$min = 30;
							}
							$var = $hour.':'.$min;
						?>
						<th><?php echo $var; ?></th>
						<?php } ?>
					</tr>
				</thead>
				<tbody id="tbody">
		            <?php
		            $count = 1;
		            foreach ($results as $result)
		            {
		            ?>
		            <tr>
		              <td style="font-size:13px;"><?php echo $count; ?></td>
		              <td style="font-size:13px;"><?php echo $result->Name; ?></td>
		              <?php for($j=1000; $j<=2200; $j+=50){  
							$hour = substr($j, 0, 2);
							$min = substr($j, -2);
							if($min == 50){
								$min = 30;
							}
							$var = $hour.$min;
						?>
						<td><?php echo $result->$var; ?></td>
						<?php } ?>
		            </tr>
		            <?php
		            $count++;
		            }
		            ?>
	          	</tbody>
			</table>
		</div>
	</div>
</div>