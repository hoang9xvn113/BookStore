<?php

use Core\Model;

class SaleOrderModel extends Model
{
    function getSaleOrderList()
    {
        $select = "select sale_order.id, customer.name, address, purchase_date, delivery_date,  SUM(book.price*sale_order_detail.amount) as total, sale_order.status 
        from sale_order, customer, sale_order_detail, book 
        where customer.id = customer_id AND sale_order_detail.book_id = book.id and sale_order_detail.sale_order_id = sale_order.id
        GROUP BY sale_order.id 
        order by status asc, sale_order.id asc";
        return $this->select($select);
    }

    function addSaleOrder(
        $customer_id,
        $address,
        $data
    ) {
        if (empty($data) || empty($address) || $customer_id === "") {
            return false;
        }
        $insert_sale_order = "insert into sale_order(customer_id, address) 
                              values($customer_id, '$address')";
        $create_status = $this->insert($insert_sale_order);
        if ($create_status) {
            $select = "select id from sale_order order by id desc";
            $id = $this->select($select)[0]['id'];
            $insert = "";
            foreach ($data as $params) {
                $insert .= "insert into sale_order_detail(sale_order_id, book_id , amount) 
                values($id, $params[0], $params[1]);";
            }

            return $this->insert_multi($insert);
        }

        return false;
    }

    function getSaleOrderDetail($id)
    {
        $select = "SELECT book.image, book.name, book.price, sale_order_detail.amount FROM book, sale_order_detail 
                   WHERE book_id = book.id 
                   AND sale_order_id=$id";
        return $this->select($select);
    }

    function updateSaleOrder($id, $delivery_date ,$status = 0)
    {
        $update = "update sale_order set 
                   delivery_date = '$delivery_date',
                   status=$status 
                   where id=$id";

        return $this->update($update);
    }

    function getSaleinMonth() {
        $select = "SELECT SUM(book.price * sale_order_detail.amount) as total FROM sale_order, sale_order_detail, book 
        WHERE sale_order.id = sale_order_detail.sale_order_id AND book.id = sale_order_detail.book_id AND MONTH(sale_order.purchase_date) = MONTH(CURRENT_DATE())";
        return $this->select($select)[0]['total'];
    }

    function getNumberOrderinMonth() {
        $select = "SELECT COUNT(id) as numberOrder FROM sale_order WHERE month(sale_order.purchase_date) = month(CURRENT_DATE)";
        return $this->select($select)[0]['numberOrder'];
    }

    function getOrderunActiveinMoth() {
        $select = "SELECT COUNT(id) as numberOrder FROM sale_order WHERE month(sale_order.purchase_date) = month(CURRENT_DATE) and sale_order.status = 0";
        return $this->select($select)[0]['numberOrder'];
    }

    function getOrderCancelinMoth() {
        $select = "SELECT COUNT(id) as numberOrder FROM sale_order WHERE month(sale_order.purchase_date) = month(CURRENT_DATE) and sale_order.status = -1";
        return $this->select($select)[0]['numberOrder'];
    }

    function cancelSaleOrder($id) {
        if ($id === "") return false;
        $update = "update sale_order set status=-1 where id=$id and status=0 ";
        return $this->update($update);
    }
}
