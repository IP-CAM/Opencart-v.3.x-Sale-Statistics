<?php
class ModelCustomSaleStats extends Model {

    public function getMonthlyTotal() {
        $query = $this->db->query("SELECT SUM(`total`) 'total_month' FROM `" . DB_PREFIX ."order` WHERE order_status_id > 1 AND date_added >= '" . date('Y-m-01') ."'");

        return $query->row;
    }

    public function get30Total() {
        $query = $this->db->query("SELECT SUM(`total`) 'total_30' FROM `" . DB_PREFIX ."order` WHERE order_status_id > 1 AND date_added >= '" . date('Y-m-d', strtotime('-30 days')) ."'");

        return $query->row;
    }
}
?>