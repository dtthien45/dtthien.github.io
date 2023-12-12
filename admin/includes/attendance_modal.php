<!-- Add -->
<div class="modal fade" id="addnew">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><b>Chấm công</b></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" action="attendance_add.php">
					<div class="form-group">
						<label for="employee" class="col-sm-3 control-label">Mã nhân viên</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="employee" name="employee" required>
						</div>
					</div>
					<div class="form-group">
						<label for="date_add" class="col-sm-3 control-label">Ngày</label>

						<div class="col-sm-9">
							<div class="form-group data-custon-pick" id="data_1">
								<div class="input-group date">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="text" class="form-control" id="date_add" name="date">
								</div>
							</div>
						</div>
					</div>
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
				<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
						class="fa fa-close"></i> Đóng</button>
				<button type="submit" class="btn btn-custon-four btn-primary" name="add"><i class="fa fa-save"></i>
					Lưu</button>
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
				<h4 class="modal-title"><b><span id="employee_name"></span></b></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" action="attendance_edit.php">
					<input type="hidden" id="attid" name="id">

					<div class="form-group">
						<label for="date_edit" class="col-sm-3 control-label">Ngày</label>

						<div class="col-sm-9">
							<div class="form-group data-custon-pick" id="data_1">
								<div class="input-group date">
									<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
									<input type="text" class="form-control" id="date_edit" name="date_edit">
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="edit_in" class="col-sm-3 control-label">Giờ vào</label>

						<div class="col-sm-9">
							<input type="time" class="form-control" id="edit_in" name="edit_in">
						</div>
					</div>
					<div class="form-group">
						<label for="edit_out" class="col-sm-3 control-label">Giờ về</label>

						<div class="col-sm-9">
							<input type="time" class="form-control" id="edit_out" name="edit_out">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
						class="fa fa-close"></i> Đóng</button>
				<button type="submit" class="btn btn-custon-four btn-success" name="edit"><i
						class="fa fa-check-square-o"></i>
					Cập nhật</button>
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
				<h4 class="modal-title"><b><span id="attendance_date"></span></b></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" action="attendance_delete.php">
					<input type="hidden" id="del_attid" name="id">
					<div class="text-center">
						<p>XÓA CHẤM CÔNG</p>
						<h2 id="del_employee_name" class="bold"></h2>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i
						class="fa fa-close"></i> Đóng</button>
				<button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i>
					Xóa</button>
				</form>
			</div>
		</div>
	</div>
</div>