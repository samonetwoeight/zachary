<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover table-checkable">
				<thead class="text-center">
					<tr>
						<th>#</th>
						<th>Username</th>
						<th>Name</th>
						<th>Foot</th>
						<th>Body</th>
						<th>Guasa</th>
						<th>Cupping</th>
						<th>Tuina</th>
						<th>Sports</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody id="tbody">
		            <?php
		            $count = $page;
		            foreach ($results as $result)
		            {
		            ?>
		            <tr>
		              <td style="font-size:13px;"><?php echo $count?></td>
		              <td style="font-size:13px;"><?php echo $result->Username?></td>
		              <td style="font-size:13px;"><?php echo $result->Name?></td>
		              <td class="text-center" style="font-size:13px;"><?php echo $result->Foot?></td>
		              <td class="text-center" style="font-size:13px;"><?php echo $result->Body?></td>
		              <td class="text-center" style="font-size:13px;"><?php echo $result->Guasa?></td>
		              <td class="text-center" style="font-size:13px;"><?php echo $result->Cupping?></td>
		              <td class="text-center" style="font-size:13px;"><?php echo $result->Tuina?></td>
		              <td class="text-center" style="font-size:13px;"><?php echo $result->Sports?></td>
		              <td class="text-center">
		              	<a href="<?php echo base_url().'UpdateUser?uid='.$result->ID ?>" class="btn btn-sm btn-light-success btn-icon" title="Edit details"><i class="fa-solid fa-pen-to-square"></i></a>
		              	<a href="<?php echo base_url().'DeleteUser?uid='.$result->ID ?>" onclick="return confirm('Are you sure want to remove this user?');" class="btn btn-sm btn-light-danger btn-icon" title="Delete"><i class="fa-solid fa-trash"></i></a>
		              </td>
		            </tr>
		            <?php
		            $count++;
		            }
		            ?>
	          	</tbody>
			</table>
			<div class="dataTables_wrapper">
				<div class="row">
					<div class="col-sm-12 col-md-5">
						<div class="dataTables_info">
							<?php echo 'Showing '.$page.' to '.$User.' of '.$total_rows.' entries'?>	
						</div>	
					</div>	
					<div class="col-sm-12 col-md-7 dataTables_pager">
						<?php echo $links ?>	
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>