<?php include_once INCLUDE_PATH . "adminHeader.php" ?>

<!-- Wrapper -->
<div class="wrapper">
    <div class="row">
        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-primary">
                <i class="fas fa-money-bill"></i>
                <h3>10.000.000 VNĐ</h3>
                <p>Doanh thu trong tháng</p>
            </div>
        </div>

        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-success">
                <i class="fas fa-shopping-cart"></i>
                <h3>50 đơn hàng</h3>
                <p>Tổng đơn hàng trong tháng</p>
            </div>
        </div>

        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-warning">
                <i class="fas fa-spinner"></i>
                <h3>30 đơn hàng</h3>
                <p>Đơn hàng đang giao</p>
            </div>
        </div>

        <div class="col-3 col-m-6 col-sm-6">
            <div class="counter bg-danger">
                <i class="fas fa-recycle"></i>
                <h3>3 đơn hàng</h3>
                <p>Đơn hàng hủy</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-8 col-m-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Table
                    </h3>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="card-content">
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>STT</th>
                                <th>STT</th>
                                <th>STT</th>
                                <th>STT</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Nguyen Van Honag</td>
                                <td>Nguyen Van Honag</td>
                                <td>Nguyen Van Honag</td>
                                <td>Nguyen Van Honag</td>
                                <td>Nguyen Van Honag</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-4 col-m-12 col-m-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        Process Bar
                    </h3>
                    <i class="fas fa-ellipsis-h"></i>
                </div>
                <div class="card-content">
                    <div class="process-wrapper">
                        <p>
                            Less than 1 hour
                            <span class="float-right">50%</span>
                        </p>

                        <div class="process">
                            <div class="bg-success" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="process-wrapper">
                        <p>
                            Less than 1 hour
                            <span class="float-right">50%</span>
                        </p>

                        <div class="process">
                            <div class="bg-success" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="process-wrapper">
                        <p>
                            Less than 1 hour
                            <span class="float-right">50%</span>
                        </p>

                        <div class="process">
                            <div class="bg-success" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="process-wrapper">
                        <p>
                            Less than 1 hour
                            <span class="float-right">50%</span>
                        </p>

                        <div class="process">
                            <div class="bg-success" style="width: 50%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-m-12 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h3>
                        ChartJs
                    </h3>
                </div>
                <div class="card-content">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once INCLUDE_PATH . "adminFooter.php" ?>