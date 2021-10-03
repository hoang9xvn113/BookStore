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
}
