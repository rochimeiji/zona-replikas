$(function(){
	//Aksi Timeline
	$("[timeline-aksi]").click(function(){
		//edit
		if($(this).attr('timeline-aksi')=='edit'){
			$timeline = $("[timeline-status='"+$(this).attr('timeline-id')+"']");
			$cancel = $timeline.html();
			
			$edit = "<form method='post' id='status-edit'>"+
			"<input type='hidden' name='id_posting' value='"+$(this).attr('timeline-id')+"' />"+
			"<textarea name='posting' class='post'>"+
			$timeline.text()+"</textarea>"+
			"<div style='margin:5px 0px;' class='btn-group'><button type='submit' class='btn btn-dafault'>Edit</button><a class='btn btn-warning status-cancel'>Cancel</a></div></form>";
			$timeline.html($edit);
			
			$('#status-edit').submit(function(){
				$.ajax({url:'ajax/status_edit',type:'post',data:$("#status-edit").serialize()})
				$timeline.text($(this).find('textarea[name="posting"]').val());
				return false;
			});
			//cancel editing status
			$('.status-cancel').click(function(){
				$timeline.html($cancel)
			});
		}
		//delete
		if($(this).attr('timeline-aksi')=='delete'){
			var konfirm = confirm("Hapus?");
			if(konfirm){
				$("[timeline='"+$(this).attr('timeline-id')+"']").animate({'height':'hide'},250);
			}
		}
		//Load Event
		$('textarea').elastic();
	});
	//Aksi Comment
	$("[comment-aksi]").click(function(){
		//edit
		if($(this).attr('comment-aksi')=='edit'){
			$edit = "<form method='post'><textarea helo name='posting' class='status-edit'>"+$("[comment-status='"+$(this).attr('comment-id')+"']").text()+"</textarea>"+
			"<button type='submit' class='btn'>Edit</button></form>";
			$("[comment-status='"+$(this).attr('comment-id')+"']").html($edit);
		}
		//delete
		if($(this).attr('comment-aksi')=='delete'){
			var konfirm = confirm("Hapus?");
			if(konfirm){
				$("[comment='"+$(this).attr('comment-id')+"']").animate({'height':'hide'},250);
			}
		}
	});
	//Load Event
	$('textarea').elastic();
});