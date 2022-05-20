<?php

class Customer{
    public $id;
    public $name;
    public $perf_item_id;
    public $order_no;

    public function getCustomer($id){
        $this->id = $id;
        return 'Mholi Banks';
    }
}

$customer =  new Customer;

echo $customer->id;




?>