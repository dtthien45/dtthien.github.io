<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Thêm lịch làm việc cố định</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal add-schedule" method="POST" action="schedule_add.php">
          		  <div class="form-group">
                  	<label for="time_in" class="col-sm-3 control-label">Giờ vào</label>

                  	<div class="col-sm-9">
                    	 <input type="time" class="form-control" id="time_in" name="time_in">
                  	</div>
                </div>
                <div class="form-group">
                    <label for="time_out" class="col-sm-3 control-label">Giờ về</label>

                    <div class="col-sm-9">
                        <input type="time" class="form-control" id="time_out" name="time_out">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-custon-four btn-primary" name="add"><i class="fa fa-save"></i> Lưu</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Sửa lịch làm việc cố định</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal edit-schedule" method="POST" action="schedule_edit.php">
            		<input type="hidden" id="timeid" name="id">
                <div class="form-group">
                    <label for="edit_time_in" class="col-sm-3 control-label">Giờ vào</label>

                    <div class="col-sm-9">
                        <input type="time" class="form-control" id="edit_time_in" name="time_in">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_time_out" class="col-sm-3 control-label">Giờ về</label>

                    <div class="col-sm-9">
                        <input type="time" class="form-control" id="edit_time_out" name="time_out">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-custon-four btn-success" name="edit"><i class="fa fa-check-square-o"></i> Cập nhật</button>
            	</form>
          	</div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Xóa lịch làm việc cố định</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal" method="POST" action="schedule_delete.php">
            		<input type="hidden" id="del_timeid" name="id">
            		<div class="text-center">
	                	<p>XÓA LỊCH LÀM VIỆC</p>
	                	<h2 id="del_schedule" class="bold"></h2>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-custon-four btn-danger" name="delete"><i class="fa fa-trash"></i> Xóa</button>
            	</form>
          	</div>
        </div>
    </div>
</div>


     