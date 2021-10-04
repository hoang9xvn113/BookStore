<?php

use Core\View;

class AdminController {

    public $saleOrderModel;

    function __construct()
    {
        $this->saleOrderModel = new SaleOrderModel;
    }

    public function index() {
        $notify = [
            "total"=>$this->saleOrderModel->getSaleinMonth(),
            "numberOrder"=>$this->saleOrderModel->getNumberOrderinMonth(),
            "unActiveNumber"=>$this->saleOrderModel->getOrderunActiveinMoth(),
            "cancelNumber"=>$this->saleOrderModel->getOrderCancelinMoth()
        ];
        echo View::make('admin/index', ['notify'=>$notify]);
    }


}