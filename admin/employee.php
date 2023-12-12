<?php include 'includes/session.php'; ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Danh sách nhân viên - The Monkey Gallery</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/header.php'; ?>
</head>

<body>
    <?php include 'includes/menubar.php'; ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="header-advance-area">
            
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <ul class="breadcome-menu">
                                    <li><a href="home.php">Trang chủ</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Quản lý nhân sự</span> <span
                                            class="bread-slash">/</span>
                                    </li>
                                    </li>
                                    <li><span class="bread-blod">Danh sách nhân viên</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo "
                        <div class='alert alert-danger alert-dismissible'>
                         <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                         <h4><i class='icon fa fa-warning'></i> Lỗi!</h4>
                         " . $_SESSION['error'] . "
                        </div>
                       ";
                            unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['success'])) {
                            echo "
                        <div class='alert alert-success alert-dismissible'>
                         <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                         <h4><i class='icon fa fa-check'></i> Thành công!</h4>
                         " . $_SESSION['success'] . "
                        </div>
                       ";
                            unset($_SESSION['success']);
                        }
                        ?>
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Danh Sách <span class="table-project-n">Nhân</span> Viên</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <a href="#addnew" data-toggle="modal"
                                            class="btn btn-custon-four btn-primary">Thêm</a>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                        data-key-events="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-click-to-select="true"
                                        data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">Mã nhân viên</th>
                                                <th data-field="photo">Ảnh</th>
                                                <th data-field="name">Tên nhân viên</th>
                                                <th data-field="position">Vị trí</th>
                                                <th data-field="work-shift">Ca làm việc</th>
                                                <th data-field="date">Ngày bắt đầu làm việc</th>
                                                <th data-field="action">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT *, employees.id AS empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id";
                                            $query = $conn->query($sql);
                                            while ($row = $query->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $row['employee_id']; ?>
                                                    </td>
                                                    <td><img src="<?php echo (!empty($row['photo'])) ? '../img/profile/' . $row['photo'] : '../img/profile/1.jpg'; ?>"
                                                            width="30px" height="30px"> <a href="#edit_photo"
                                                            data-toggle="modal" class="pull-right photo"
                                                            data-id="<?php echo $row['empid']; ?>"><span
                                                                class="fa fa-edit"></span></a></td>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['firstname'] . ' ' . $row['lastname']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['description']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo date('h:i A', strtotime($row['time_in'])) . ' - ' . date('h:i A', strtotime($row['time_out'])); ?>
                                                    </td>
                                                    <td>
                                                        <?php echo date('M d, Y', strtotime($row['created_on'])) ?>
                                                    </td>
                                                    <td class="datatable-ct"><button
                                                            class="btn btn-custon-three btn-success edit"
                                                            data-id="<?php echo $row['empid']; ?>"><i
                                                                class="fa fa-edit"></i> Sửa</button>
                                                        <button class="btn btn-custon-four btn-danger delete"
                                                            data-id="<?php echo $row['empid']; ?>"><i class="fa fa-trash"
                                                                aria-hidden="true"></i>
                                                            Xóa</button>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'includes/employee_modal.php'; ?>
    </div>


    <script>
        $(function () {
            // set focus to firstname input field when the addnew modal is shown
            $('#addnew').on('shown.bs.modal', function () {
                $('#firstname').focus();
            });

            $('body').on('click', '.edit', function (e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $('body').on('click', '.delete', function (e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                getRow(id);
            });

            $('body').on('click', '.photo', function (e) {
                e.preventDefault();
                var id = $(this).data('id');
                getRow(id);
            });
        });


        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'employee_row.php',
                data: { id: id },
                dataType: 'json',
                success: function (response) {
                    $('.empid').val(response.empid);
                    $('.employee_id').html(response.employee_id);
                    $('.del_employee_name').html(response.firstname + ' ' + response.lastname);
                    $('#employee_name').html(response.firstname + ' ' + response.lastname);
                    $('#edit_firstname').val(response.firstname);
                    $('#edit_lastname').val(response.lastname);
                    $('#edit_address').val(response.address);
                    $('#date_edit').val(response.birthdate);
                    $('#edit_contact').val(response.contact_info);
                    $('#gender_val').val(response.gender).html(response.gender);
                    $('#position_val').val(response.position_id).html(response.description);
                    $('#schedule_val').val(response.schedule_id).html(response.time_in + ' - ' + response.time_out);
                }
            });
        }
    </script>
    <?php include 'includes/footer.php'; ?>
    <script>
        $(document).ready(function () {
            $('#date_add').datepicker({
                format: 'yyyy/mm/dd'
            });</script>
    });
</body>

</html>