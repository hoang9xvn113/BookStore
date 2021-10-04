<?php

use Core\View;

class ImportOrderController {
    
    public $supplierModel;
    public $bookModel;
    public $importOrderModel;

    function __construct()
    {
        $this->supplierModel = new SupplierModel;
        $this->bookModel = new BookModel;
        $this->importOrderModel = new ImportOrderModel;
    }

    function index() {
        $importOrders = $this->importOrderModel->getImportOrderList();
        echo View::make("admin/import-order/import-order-management", 
        [
            'importOrders'=>$importOrders,
        ]);
    }

    function addImportOrder($request) {
        $suppliers = $this->supplierModel->getSupplierList();
        $books = $this->bookModel->getBookList();

        if (isset($request['total']) && is_int((int) $request['total'])) {
            $total = $request['total'];
        } else {
            $total = 1;
        }

        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $length = (count($request)-1)/3;
            for($i=1;$i<=$length;$i++) {
                $data[$i][] = $request['bookId' . $i];
                $data[$i][] = $request['bookAmount' . $i];
                $data[$i][] = $request['bookPrice'. $i];
            }
            
            $status = $this->importOrderModel->createOrderImport($request['supplierId']);
            if ($status) {
                $importOrderId = $this->importOrderModel->getLastIdImportOrder();
                $status = $this->importOrderModel->addBooktoImportOrder($importOrderId, $data);
            }
            
        }

        echo View::make("admin/import-order/add-import-order", 
        ['suppliers'=>$suppliers, 
         'books'=>$books, 
         'total'=>$total,
         'status'=>$status ?? null]);
    }

    function editImportOrder($request) {
        if (isset($request['id'])) {
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $status = $this->importOrderModel->updateImportOrder(
                    $request['id'], 
                    $request['importOrderReceive'],
                    $request['importOrderStatus']
                );

            }

            $importOrderDetail = $this->importOrderModel->getImportOrderDetail($request['id']);
            $importOrder = $this->importOrderModel->getImportOrder($request['id']);
            if ($importOrderDetail) {
                echo View::make("admin/import-order/edit-import-order", [
                    'importOrderDetail'=>$importOrderDetail,
                    'importOrder'=>$importOrder,
                    'status'=>$status ?? null
                ]);
                return;
            }
        }

        header("Location: /admin/quan-ly-don-hang-nhap");
    }

    function cancelImportOrder($request) {
        if (isset($request['id'])) {
            $status = $this->importOrderModel->cancelImportOrder($request['id']);
        }
        header("Location: /admin/quan-ly-don-hang-nhap");
    }
        
}