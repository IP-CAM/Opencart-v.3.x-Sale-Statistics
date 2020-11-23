<?php

class ControllerCustomSaleStats extends Controller{

    public function index(){
        $this->load->model('custom/sale_stats');
        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->load->model('custom/sale_stats');
        $data['total_monthly'] = (float)($this->model_custom_sale_stats->getMonthlyTotal())['total_month'];
        $data['total_30'] = (float)($this->model_custom_sale_stats->get30Total())['total_30'];

        $this->response->setOutput($this->load->view("custom/sale_stats", $data));
    }
}