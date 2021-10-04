<?php

use Core\View;

class SaleOrderController
{
    public $saleOrderModel;

    function __construct()
    {
        $this->saleOrderModel = new SaleOrderModel;
    }

    function index() {
        $saleOrderList = $this->saleOrderModel->getSaleOrderList();
        echo View::make("admin/sale-order/sale-order-management", ['saleOrders'=>$saleOrderList]);
    }

    function editSaleOrder($request) {
        if (isset($request['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $status = $this->saleOrderModel->updateSaleOrder(
                    $request['id'],
                    $request['date'],
                    $request['status']
                );
            }
            $saleOrderDetail = $this->saleOrderModel->getSaleOrderDetail($request['id']);
            if ($saleOrderDetail) {
                echo View::make("admin/sale-order/edit-sale-order", ['saleOrderDetail'=>$saleOrderDetail, 'status'=>$status]);
                return;
            }
        }

        header("Location: /admin/quan-ly-don-hang-ban");
    }

    function cancelSaleOrder($request) {
        if (isset($request['id'])) {
            $status = $this->saleOrderModel->cancelSaleOrder($request['id']);
        }
        header("Location: /admin/quan-ly-don-hang-ban");
    }

}
