<!-- Add -->
<div class="modal fade" id="addnew">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><b>Khấu trừ tiền lương</b></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal add-deduction" method="POST" action="deduction_add.php">
					<div class="form-group">
						<label for="employee" class="col-sm-3 control-label">Mã nhân viên</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="employee" name="employee">
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-3 control-label">Mô tả</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="description" name="description">
						</div>
					</div>
					<div class="form-group">
						<label for="amount_money" class="col-sm-3 control-label">Lượng tiền</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="amount_money" name="amount">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
						class="fa fa-close"></i> Đóng</button>
				<button type="submit" class="btn btn-custon-four btn-success" name="add"><i class="fa fa-save"></i>
					Lưu</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title"><b>Cập nhật</b></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal edit-deduction" method="POST" action="deduction_edit.php">

					<input type="hidden" class="decid" name="id">
					<div class="form-group">
						<label for="edit_description" class="col-sm-3 control-label">Mô tả</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="edit_description" name="description">
						</div>
					</div>
					<div class="form-group">
						<label for="edit_amount" class="col-sm-3 control-label">Lượng tiền</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="edit_amount" name="amount">
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
						class="fa fa-close"></i> Đóng</button>
				<button type="submit" class="btn btn-custon-four btn-success" name="edit"><i
						class="fa fa-check-square-o"></i> Cập nhật</button>
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
				<h4 class="modal-title"><b>Xóa khoản khấu trừ</b></h4>
			</div>
			<div class="modal-body">
				<form class="form-horizontal" method="POST" action="deduction_delete.php">
					<input type="hidden" class="decid" name="id">
					<div class="text-center">
						<p>XÓA</p>
						<h2 id="del_deduction" class="bold"></h2>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
						class="fa fa-close"></i> Đóng</button>
				<button type="submit" class="btn btn-custon-four btn-danger" name="delete"><i class="fa fa-trash"></i>
					Xóa</button>
				</form>
			</div>
		</div>
	</div>
</div>