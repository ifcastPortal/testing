<script>
  $(document).ready(function(){
		$('#exampleDT').DataTable();
    });
</script>

<table id="exampleDT" class="table table-bordered" cellspacing="0"> 
	<thead>
	<tr style="background-color:#eeeeee;"> 
		<th>Name</th> 
		<th>Phone</th> 
		<th>Email</th> 
		<th>Apply Date</th> 
		<th>Download CV</th> 
	</tr>
	</thead>
	<tbody>

<?php 
	$i=0;
	foreach($posted_jobs as $applied)
	{ 
		
	?>
	<tr>
		<td><?php echo $applied->name; ?></td> 
		<td><?php echo $applied->phone; ?></td> 
		<td><?php echo $applied->email; ?></td> 
		<td><?php echo date("d-M-Y", strtotime($applied->jobApplyDate)); ?></td>
		<td>  <a href="<?php echo base_url()?>assets/uploads/resums/<?php echo $applied->upload_file; ?>"><?php echo $applied->upload_file; ?></a></td> 
	
		
	</tr>
<?php }	?>
	</tbody>
</table>
	
		