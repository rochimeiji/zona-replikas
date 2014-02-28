<section>
<?php
	if($get_posting){
		foreach($get_posting as $row){
?>
<div class='timeline' timeline='<?php echo $row['id_posting'];?>'>
	<div class='main'>
		<div class='photo'>
			<img src='assets/foto/<?php echo $row['foto_user'];?>' />
		</div>
		<div class='status'>
		<div class='name'><?php echo $row['nama_user'];?> <small><i class='glyphicon glyphicon-time'></i> <?php echo $row['posting_date'];?></small>
		<?php if($this->all->role($row['id_user'])){ ?>
		  <div class="btn-group pull-right aksistatus">
			<button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu">
			  <li><a timeline-id='<?php echo $row['id_posting'];?>' timeline-aksi='edit'><i class='glyphicon glyphicon-edit'></i> Edit</a></li>
			  <li><a timeline-id='<?php echo $row['id_posting'];?>' timeline-aksi='delete'><i class='glyphicon glyphicon-remove'></i> Delete</a></li>
			</ul>
		  </div>
		<?php } ?>
		</div><p timeline-status='<?php echo $row['id_posting'];?>'><?php echo $row['posting'];?></p></div>
		<div class='cl'></div>
	</div>
	<?php
	$get_komentar = $this->timeline->get_komentar($row['id_posting']);
	if($get_komentar){
		foreach($get_komentar as $row2){
	?>
		<div class='comment' comment='<?php echo $row2['id_user'];?>'>
			<div class='photo'>
				<img src='assets/foto/<?php echo $row2['foto_user'];?>' />
			</div>
			<div class='status'>
			<div class='name'><?php echo $row2['nama_user'];?> <small><i class='glyphicon glyphicon-time'></i> <?php echo $row2['komentar_date'];?></small>
			<?php if($this->all->role($row2['id_user'])){ ?>
			  <div class="btn-group pull-right aksistatus">
				<button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
				  <li><a comment-id='<?php echo $row2['id_user'];?>' comment-aksi='edit'><i class='glyphicon glyphicon-edit'></i> Edit</a></li>
				  <li><a comment-id='<?php echo $row2['id_user'];?>' comment-aksi='delete'><i class='glyphicon glyphicon-remove'></i> Delete</a></li>
				</ul>
			  </div>
			<?php } ?>
			</div>
			<?php echo $row2['komentar'];?>
			</div>
			<div class='cl'></div>
		</div>
	<?php
		}
	}
	?>
</div>
<?php
		}
	}
?>
	<div class='timeline'>
		<div class='main'>
			<div class='photo'>
				<img src='assets/foto/friend.jpg' />
			</div>
			<div class='status'>
			<div class='name'>Zainu Rochim <small><i class='glyphicon glyphicon-time'></i> Kemarin</small>
			  <div class="btn-group pull-right aksistatus">
				<button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
				  <li><a><i class='glyphicon glyphicon-edit'></i> Edit</a></li>
				  <li><a><i class='glyphicon glyphicon-remove'></i> Delete</a></li>
				</ul>
			  </div>
			</div>
			Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.

			Media queries
			We use the following media queries to create the key breakpoints in our grid system.

			Liquid error: undefined method `join' for #
			We occasionally expand on these media queries to include a max-width to limit CSS to a narrower set of devices.

			Liquid error: undefined method `join' for #
			</div>
			<div class='cl'></div>
		</div>
		<div class='comment'>
			<div class='photo'>
				<img src='assets/foto/kucing.jpg' />
			</div>
			<div class='status'>
			<div class='name'>Zainu Rochim</div>
			Media queries
			We use the following media queries to create the key breakpoints in our grid system.
			</div>
			<div class='cl'></div>
		</div>
		<div class='comment'>
			<div class='photo'>
				<img src='assets/foto/Islam.jpg' />
			</div>
			<div class='status'>
			<div class='name'>Feisal</div>
			Liquid error: undefined method `join' for #
			We occasionally expand on these media queries to include a max-width to limit CSS to a narrower set of devices.
			</div>
			<div class='cl'></div>
		</div>
		<div class='comment'>
			<div class='photo'>
				<img src='assets/foto/kucing.jpg' />
			</div>
			<div class='status'>
			<form method='post'>
			<textarea name='comment'></textarea>
			<button type='submit' class='btn btn-sm btn-primary'>Comment</button>
			</form>
			</div>
			<div class='cl'></div>
		</div>
	</div>
</section>