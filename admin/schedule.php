<?php include 'includes/session.php'; ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lịch làm việc cố định - The Monkey Gallery</title>
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
                                    </li>
                                    <li><span class="bread-blod">Lịch làm việc</span>
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
                            <div class="sparkline13-hd">
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
                                <div class="main-sparkline13-hd">
                                    <h1>Lịch làm việc <span class="table-project-n">cố định</span></h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <a href="#addnew" data-toggle="modal"
                                            class="btn btn-custon-four btn-primary">Thêm</a>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                        data-show-pagination-switch="true" data-show-refresh="true"
                                        data-key-events="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-click-to-select="true"
                                        data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="time-in">Giờ vào</th>
                                                <th data-field="time-out">Giờ về</th>
                                                <th data-field="action">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM schedules";
                                            $query = $conn->query($sql);
                                            while ($row = $query->fetch_assoc()) {
                                                echo "
                                                <tr>
                                                    <td>" . date('h:i A', strtotime($row['time_in'])) . "</td>
                                                    <td>" . date('h:i A', strtotime($row['time_out'])) . "</td>
                                                    <td>
                                                        <button class='btn btn-custon-four btn-success edit' data-id='" . $row['id'] . "'><i class='fa fa-edit'></i> Sửa</button>
                                                        <button class='btn btn-custon-four btn-danger delete' data-id='" . $row['id'] . "'><i class='fa fa-trash'></i> Xóa</button>
                                                    </td>
                                                </tr>
                                            ";
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
    <?php include 'includes/schedule_modal.php'; ?>
    </div>

    <script>
        
        $(function () {
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
        });

        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'schedule_row.php',
                data: { id: id },
                dataType: 'json',
                success: function (response) {
                    $('#timeid').val(response.id);
                    $('#edit_time_in').val(response.time_in);
                    $('#edit_time_out').val(response.time_out);
                    $('#del_timeid').val(response.id);
                    $('#del_schedule').html(response.time_in + ' - ' + response.time_out);
                }
            });
        }
    </script>
    <?php include 'includes/footer.php'; ?>
</body>

</html>