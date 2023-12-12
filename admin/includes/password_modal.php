<!-- Add -->
<div class="modal fade" id="pass_change">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title"><b>Đổi mật khẩu</b></h4>
          	</div>
          	<div class="modal-body">
            	<form class="form-horizontal change-password" method="POST" action="password_update.php?return=<?php echo basename($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="pass_old" class="col-sm-3 control-label">Mật khẩu cũ</label>

                    <div class="col-sm-9">
                      <input type="password" class="form-control" id="pass_old" name="pass_old" placeholder="Nhập mật khẩu cũ" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass_new" class="col-sm-3 control-label">Mật khẩu mới</label>

                    <div class="col-sm-9"> 
                      <input type="password" class="form-control" id="pass_new" name="pass_new" placeholder="Nhập mật khẩu mới">
                    </div>
                </div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Đóng</button>
            	<button type="submit" class="btn btn-custon-four btn-success" name="save"><i class="fa fa-check-square-o"></i> Lưu</button>
            	</form>
          	</div>
        </div>
    </div>
</div>