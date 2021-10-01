<?php

use Core\View;

class SaleOrderController
{
    function index() {
        echo View::make("admin/sale-order/sale-order-management");
    }

    function editSaleOrder() {
        echo View::make("admin/sale-order/edit-sale-order");
    }

}
