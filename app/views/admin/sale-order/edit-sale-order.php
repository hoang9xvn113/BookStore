<?php include_once INCLUDE_PATH . "adminHeader.php" ?>


<div class="wrapper">
        <div class="row">
            <div class="col-12 col-m-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            Chi tiết đơn hàng 01
                        </h3>
                        <span><a href="" class="btn-2 bg-warning"><i class="fas fa-edit"></i> Cập nhật đơn hàng</a></span>
                    </div>
                    <div class="card-content">
                        <div class="form row">
                            <div class="col-12">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>Ảnh sách</th>
                                            <th>Tên sách</th>
                                            <th>Giá bán</th>
                                            <th>Số lượng</th>
                                            <th>Thành tiền</th>
                                        </tr>
                                    </thead>
        
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td></td>
                                            <td>The Knowledge: Tương Lai Bố Tướng (Tái Bản 2021</td>
                                            <td>100.000VND</td>
                                            <td><input type="number" name="" min="0" id=""></td>
                                            <td>500.000</td>
                                            <td></a> <a href="" class="btn-1 bg-danger"><i class="fas fa-backspace"></i> Xóa</a></td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <th colspan="5" style="text-align: right;">Tổng tiền: </th>
                                            <th>500000</th>
                                        </tr>
                                    </tfoot>
                                </table>

                                
                                <div class="col-7 row">
                                    <div class="col-4">
                                        <label for="">Trạng thái</label>
                                    </div>

                                    <div class="col-8">
                                        <select name="" id="">
                                            <option value="">Chưa vận chuyển</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-7 row">
                                    <div class="col-4">
                                        <label for="">Ngày vận chuyển</label>
                                    </div>

                                    <div class="col-8">
                                        <input type="date" name="" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include_once INCLUDE_PATH . "adminFooter.php" ?>