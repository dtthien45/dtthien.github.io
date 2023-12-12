<!-- Add -->
<div class="modal fade" id="addnew">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b>Thêm nhân viên</b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal add-employee" method="POST" action="employee_add.php" enctype="multipart/form-data">
          <div class="form-group">
            <label for="firstname" class="col-sm-3 control-label">Họ và tên đệm</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="firstname" name="firstname">
            </div>
          </div>

          <div class="form-group">
            <label for="lastname" class="col-sm-3 control-label">Tên</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="lastname" name="lastname">
            </div>
          </div>

          <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Địa chỉ</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="address" id="address"></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="date_add" class="col-sm-3 control-label">Ngày/tháng/năm sinh(yyyy/mm/d)</label>
            <div class="col-sm-9">
              <div class="form-group data-custon-pick" id="data_1">
                <div class="input-group date">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="text" class="form-control" id="date_add" name="birthdate">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="contact" class="col-sm-3 control-label">Thông tin liên lạc</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="contact" name="contact">
            </div>
          </div>

          <div class="form-group">
            <label for="gender" class="col-sm-3 control-label">Giới tính</label>
            <div class="col-sm-9">
              <select class="form-control" name="gender" id="gender">
                <option value="" selected>- Chọn -</option>
                <option value="Nam">Nam</option>
                <option value="Nữ">Nữ</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="position" class="col-sm-3 control-label">Vị trí</label>
            <div class="col-sm-9">
              <select class="form-control" name="position" id="position">
                <option value="" selected>- Chọn -</option>
                <?php
                $sql = "SELECT * FROM position";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                echo "
                      <option value='" . $prow['id'] . "'>" . $prow['description'] . "</option>
                      ";
                    }
                ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="schedule" class="col-sm-3 control-label">Ca làm việc</label>
            <div class="col-sm-9">
              <select class="form-control" id="schedule" name="schedule">
                <option value="" selected>- Chọn -</option>
                <?php
                $sql = "SELECT * FROM schedules";
                $query = $conn->query($sql);
                while ($srow = $query->fetch_assoc()) {
                echo "
                      <option value='" . $srow['id'] . "'>" . $srow['time_in'] . ' - ' . $srow['time_out'] . "</option>
                      ";
                }                  
                ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Chọn ảnh</label>
            <div class="col-sm-9">
              <input type="file" name="photo" id="photo" accept="image/*">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Đóng</button>
        <button type="submit" class="btn btn-custon-four btn-primary" name="add"><i class="fa fa-save"></i> Lưu</button>
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
        <h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal edit-employee" method="POST" action="employee_edit.php">
          <input type="hidden" class="empid" name="id">
          <div class="form-group">
            <label for="edit_firstname" class="col-sm-3 control-label">Họ và tên đệm</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_firstname" name="firstname">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_lastname" class="col-sm-3 control-label">Tên</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_lastname" name="lastname">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_address" class="col-sm-3 control-label">Địa chỉ</label>

            <div class="col-sm-9">
              <textarea class="form-control" name="address" id="edit_address"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="date_edit" class="col-sm-3 control-label">Ngày/tháng/năm sinh (yyyy/mm/dd)</label>

            <div class="col-sm-9">
              <div class="form-group data-custon-pick" id="data_1">
                <div class="input-group date">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="text" class="form-control" id="date_edit" name="birthdate">
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_contact" class="col-sm-3 control-label">Thông tin liên lạc</label>

            <div class="col-sm-9">
              <input type="text" class="form-control" id="edit_contact" name="contact">
            </div>
          </div>
          <div class="form-group">
            <label for="edit_gender" class="col-sm-3 control-label">Giới tính</label>

            <div class="col-sm-9">
              <select class="form-control" name="gender" id="edit_gender">
                <option selected id="gender_val"></option>
                <option value="Male">Nam</option>
                <option value="Female">Nữ</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_position" class="col-sm-3 control-label">Vị trí</label>

            <div class="col-sm-9">
              <select class="form-control" name="position" id="edit_position">
                <option selected id="position_val"></option>
                <?php
                $sql = "SELECT * FROM position";
                $query = $conn->query($sql);
                while ($prow = $query->fetch_assoc()) {
                echo "
                      <option value='" . $prow['id'] . "'>" . $prow['description'] . "</option>
                ";
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="edit_schedule" class="col-sm-3 control-label">Ca làm việc</label>

            <div class="col-sm-9">
              <select class="form-control" id="edit_schedule" name="schedule">
                <option selected id="schedule_val"></option>
                <?php
                $sql = "SELECT * FROM schedules";
                $query = $conn->query($sql);
                while ($srow = $query->fetch_assoc()) {
                echo "
                      <option value='" . $srow['id'] . "'>" . $srow['time_in'] . ' - ' . $srow['time_out'] . "</option>
                      ";
                }
                ?>
              </select>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Đóng</button>
        <button type="submit" class="btn btn-custon-four btn-success" name="edit"><i class="fa fa-check-square-o"></i> Cập
          nhật</button>
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
        <h4 class="modal-title"><b><span class="employee_id"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="employee_delete.php">
          <input type="hidden" class="empid" name="id">
          <div class="text-center">
            <p>XÓA NHÂN VIÊN</p>
            <h2 class="bold del_employee_name"></h2>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Đóng</button>
        <button type="submit" class="btn btn-custon-four btn-danger" name="delete"><i class="fa fa-trash"></i> Xóa</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><b><span class="del_employee_name"></span></b></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="employee_edit_photo.php" enctype="multipart/form-data">
          <input type="hidden" class="empid" name="id">
          <div class="form-group">
            <label for="photo" class="col-sm-3 control-label">Chọn ảnh</label>

            <div class="col-sm-9">
              <input type="file" id="photo" name="photo">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-custon-four btn-default pull-left" data-dismiss="modal"><i
            class="fa fa-close"></i> Đóng</button>
        <button type="submit" class="btn btn-custon-four btn-success" name="upload"><i class="fa fa-check-square-o"></i> Cập
          nhật</button>
        </form>
      </div>
    </div>
  </div>
</div>

