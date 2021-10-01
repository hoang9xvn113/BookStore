<?php

use Core\Model;

class ImportOrderModel extends Model
{
    function createOrderImport($supplierId) {
        $insert = "insert into import_order(supplier_id) values($supplierId)";
        return $this->insert($insert);
    }

    function getLastIdImportOrder() {
        $select = "select id from import_order order by id desc limit 1";
        return $this->select($select)[0]['id'];
    }

    function getImportOrderList() {
        $select = "select import_order.id, name, creation_date, receive_date, import_order.status, SUM(amount*price) as total_money FROM import_order, supplier, import_order_detail
        WHERE import_order.supplier_id = supplier.id  AND import_order.id = import_order_detail.import_order_id GROUP BY import_order_detail.import_order_id ";
        
        return $this->select($select);
    }

    function getImportOrderDetail($id) {
        $select = "select book_id, image, name, import_order_detail.amount, import_order_detail.price FROM book, import_order_detail WHERE book_id = id AND import_order_detail.import_order_id = $id";
        return $this->select($select);
    }

    function updateImportOrder($id, $receive_date, $status=0) {
        if ($status == 0) {
            return false;
        }
        $update = "update import_order set 
                   receive_date='$receive_date',
                   status=$status where id=$id";
        $check = $this->update($update);
        $status = false;
        if ($check) {
            $select = "select book_id, amount from import_order_detail where import_order_id = $id";
            $data = $this->select($select);
            foreach($data as $params) {
                $book_id = $params['book_id'];
                $amount = $params['amount'];
                $update_book = "update book set amount = amount + $amount where id=$book_id";
                $status = $this->update($update_book);
            }
        }
        return $status;
    }

    function getImportOrder($id) {
        $select = "select * from import_order where id=$id";
        return $this->select($select)[0];
    }

    function addBooktoImportOrder($id, $data) {
        $insert = "";
        foreach($data as $params) {
            $insert .= "insert into import_order_detail(import_order_id, book_id, amount, price) values(
                $id, $params[0], $params[1], '$params[2]'
            );";
        } 
        return $this->insert_multi($insert);
    }

    
}
