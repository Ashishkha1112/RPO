<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard_model extends CI_Model {

    public function count_products() {
        return $this->db->count_all('product');
    }
     public function count_order() {
   return $this->db->count_all_results('orders');
    }
     public function count_revenue() {
            $this->db->select_sum('product_price', 'total_price');
            $this->db->from('product');
            $this->db->where('product_status', 2);
            $query = $this->db->get();

    return $query;
    }
     public function count_sell() {
        $this->db->where('order_status', 1);
        return $this->db->count_all_results('orders');
    }
}
