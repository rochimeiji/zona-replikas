<?php
	$get_role_posting = $this->db->get('role_posting')->result_array();
?>
<div class='well well-sm'>
	Sort: 
	<div class="btn-group btn-group-sm">
	<?php foreach($get_role_posting as $row){ ?>
		<button type="button" class="btn btn-default"><?php echo $row['posting_kategori']?> <span class="badge">42</span></button>
	<?php } ?>
	</div>
</div>