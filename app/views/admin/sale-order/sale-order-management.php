<?php include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Quản lý đơn hàng bán
                        </h3>
                    </div>
                    <div class="card-content">
                        <table>
                            <thead>
                                <tr>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ giao</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày mua</th>
                                    <th>Ngày vận chuyện</th>
                                    <th>Trạng thái</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>030303</td>
                                    <td>Nguyên Trần</td>
                                    <td>Hữu Hòa, Thanh Trì</td>
                                    <td>300.000VNĐ</td>
                                    <td>23/06/2021</td>
                                    <td>26/06/2021</td>
                                    <th><small class="btn-1 bg-warning">Đang giao</small></th>
                                    <td><a href="" class="btn-1 bg-primary"><i class="fas fa-edit"></i> Xem</a> <a href="" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>