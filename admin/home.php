<?php include 'includes/session.php'; ?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hệ thống quản lý nhân sự - The Monkey Gallery</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'includes/header.php'; ?>
</head>

<body>
    
    <?php 'timezone.php';
    $today = date('Y-m-d');
    $year = date('Y');
    if (isset($_GET['year'])) {
        $year = $_GET['year'];
    }
    ?>
    <?php include 'includes/menubar.php'; ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
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
        <div class="header-advance-area">
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <ul class="breadcome-menu">
                                    <li><a href="home1.php">Trang chủ</a> <span class="bread-slash">/</span>
                                    </li>
                                    <li><span class="bread-blod">Bảng điều khiển</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs">
                            <h3 class="box-title">Tổng số nhân viên</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right sp-cn-r"> <span class="counter">
                                        <?php
                                        $sql = "SELECT * FROM employees";
                                        $query = $conn->query($sql);
                                        echo $query->num_rows;
                                        ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 table-mg-t-pro-n">
                            <h3 class="box-title">Tỉ lệ đến đúng giờ</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right graph-two-ctn">
                                    <span class="counter">
                                        <?php
                                        $sql = "SELECT * FROM attendance";
                                        $query = $conn->query($sql);
                                        $total = $query->num_rows;

                                        $sql = "SELECT * FROM attendance WHERE status = 1";
                                        $query = $conn->query($sql);
                                        $early = $query->num_rows;

                                        $percentage = ($early / $total) * 100;
                                        echo number_format($percentage, 2);
                                        ?>
                                    </span>%
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Đến đúng giờ hôm nay</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right graph-three-ctn">
                                    <span class="counter">
                                        <?php
                                        $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 1";
                                        $query = $conn->query($sql);
                                        echo $query->num_rows;
                                        ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                            <h3 class="box-title">Đến muộn hôm nay</h3>
                            <ul class="list-inline two-part-sp">
                                <li>
                                    <div id="sparklinedash4"></div>
                                </li>
                                <li class="text-right graph-four-ctn"> <span class="counter">
                                        <?php
                                        $sql = "SELECT * FROM attendance WHERE date = '$today' AND status = 0";
                                        $query = $conn->query($sql);

                                        echo $query->num_rows;
                                        ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts Start-->
        <div class="charts-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                        <div class="charts-single-pro text-center">
                            <div class="box-header with-border">
                                <h4 class="box-title">Báo cáo chấm công hàng tháng</h4>
                                <div class="box-tools pull-right">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label>Chọn năm: </label>
                                            <select class="form-control input-sm" id="choose_year">
                                                <?php
                                                for ($i = 2016; $i <= 2060; $i++) {
                                                    $selected = ($i == $year) ? 'selected' : '';
                                                    echo "<option value='" . $i . "' " . $selected . ">" . $i . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <canvas id="barchart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        $year = isset($_GET['year']) ? $_GET['year'] : date('Y');
        $and = 'AND YEAR(date) = ' . $year;
        $months = array();
        $ontime = array();
        $late = array();
        for ($m = 1; $m <= 12; $m++) {
            $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 1 $and";
            $result = $conn->query($sql);
            array_push($ontime, $result->num_rows);

            $sql = "SELECT * FROM attendance WHERE MONTH(date) = '$m' AND status = 0 $and";
            $result2 = $conn->query($sql);
            array_push($late, $result2->num_rows);

            $num = str_pad($m, 2, 0, STR_PAD_LEFT);
            $month = date('M', mktime(0, 0, 0, $m, 1));
            array_push($months, $month);
        }

        $months = json_encode($months);
        $late = json_encode($late);
        $ontime = json_encode($ontime);
        ?>

        <script src="../js/charts/Chart.js"></script>

        <script>
            var ctx = document.getElementById("barchart");
            var barchart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: <?php echo $months; ?>,
                    datasets: [{
                        label: 'Đúng giờ',
                        data: <?php echo $ontime; ?>,
                        borderWidth: 1,
                        yAxisID: "y-axis-1",
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                    }, {
                        label: 'Đi muộn',
                        data: <?php echo $late; ?>,
                        borderWidth: 1,
                        yAxisID: "y-axis-1",
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                    }]
                },
                options: {
                    responsive: true,
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    },
                    scales: {
                        yAxes: [{
                            type: "linear",
                            display: true,
                            position: "left",
                            id: "y-axis-1",
                        }, {
                            type: "linear",
                            display: true,
                            position: "right",
                            id: "y-axis-2",
                            gridLines: {
                                drawOnChartArea: false
                            }
                        }],
                    }
                }
            });
        </script>
        <script>
            // Get the year selection dropdown
            var chooseYear = document.getElementById('choose_year');
            // Listen to the change event
            chooseYear.addEventListener('change', function () {
                // Reload the page with the selected year as a parameter
                window.location.href = '?year=' + chooseYear.value;
            });
        </script>
        <!-- Charts End-->

    </div>
    <?php include 'includes/footer.php'; ?>

   

</body>

</html>