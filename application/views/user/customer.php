<div class="page-header"> 
	<h3>Customer Data</h3> 
</div> 

<a href="<?php echo base_url().'user/customer_add'; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> New Customer</a> 
<br/><br/> 
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover" id="table-datatable"> 
		<thead> 
			<tr> 
				<th>No</th> 
				<th>Name</th> 
				<th>Address</th> 
				<th>Created at</th> 
				<th>Updated at</th>
			</tr> 
		</thead> 
		<tbody> 
			<?php 
			$no = 1; 
			foreach($customers as $cts){ 
				?>
				<tr> 
					<td><?php echo $no++; ?></td> 
					<td><?php echo $cts->name ?></td> 
					<td><?php echo $cts->address ?></td> 
					<td><?php echo $cts->created_at ?></td> 
					<td><?php echo $cts->updated_at ?></td>
				<td> 
					<a class="btn btn-warning btn-sm" href="<?php echo base_url().'user/customer_edit/'.$cts->id; ?>"><span class="glyphicon glyphicon-plus"></span> Edit</a> 
					<a class="btn btn-danger btn-sm" href="<?php echo base_url().'user/customer_delete/'.$cts->id; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
				</td> 
			</tr> 
			<?php 
		} 
		?> 
	</tbody> 
</table> 
</div>