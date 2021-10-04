<?php

use Core\View;

class SupplierController
{

    public $supplierModel;

    function __construct()
    {
        $this->supplierModel = new SupplierModel;
    }

    function index() {
        $data = $this->supplierModel->getSupplierList();
        echo View::make("admin/supplier/supplier-management", ['data'=>$data]);
    }

    function addSupplier($request) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $status = $this->supplierModel->addSupplier(
                $request['supplierName'],
                $request['supplierPhone'],
                $request['supplierEmail'],
                $request['supplierAddress'],
                $request['supplierStatus']
            );
        }
        echo View::make("admin/supplier/add-supplier", ['status'=>$status ?? null]);
    }

    function editSupplier($request) {
        if (isset($request['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $status = $this->supplierModel->editSupplier(
                    $request['id'],
                    $request['supplierName'],
                    $request['supplierPhone'],
                    $request['supplierEmail'],
                    $request['supplierAddress'],
                    $request['supplierStatus']
                );
            }
            $supplierInfo = $this->supplierModel->getSupplierbyId($request['id']);
            if ($supplierInfo) {
                echo View::make("admin/supplier/edit-supplier", ['supplier'=>$supplierInfo, 'status'=>$status ?? null]);
                return;
            }
        }

        header("Location: /admin/quan-ly-nha-cung-cap");
    }

    function deleteSupplier($request) {
        if (isset($request['id'])) {
            $status = $this->supplierModel->deleteSupplier($request['id']);
        }
        header("Location: /admin/quan-ly-nha-cung-cap");
    }
}
