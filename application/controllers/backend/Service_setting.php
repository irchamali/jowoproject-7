<?php

class Service_setting extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != TRUE) {
            $url = base_url('administrator');
            redirect($url);
        };
        $this->load->model('backend/Setting_model', 'setting_model');
        $this->load->library('upload');
        $this->load->helper('text');
    }

    function index()
    {
        $data = $this->setting_model->get_service_data()->row();
        $x['service_id'] = $data->service_id;
        $x['service_title'] = $data->service_title;
        $x['service_subtitle'] = $data->service_subtitle;
        $x['service_service1'] = $data->service_service1;
        $x['service_description1'] = $data->service_description1;
        $x['service_service2'] = $data->service_service2;
        $x['service_description2'] = $data->service_description2;
        $x['service_service3'] = $data->service_service3;
        $x['service_description3'] = $data->service_description3;
        $x['service_service4'] = $data->service_service4;
        $x['service_description4'] = $data->service_description4;
        $x['service_service5'] = $data->service_service5;
        $x['service_description5'] = $data->service_description5;
        $x['service_service6'] = $data->service_service6;
        $x['service_description6'] = $data->service_description6;

        $this->load->view('backend/v_service_setting', $x);
    }

    function update()
    {
        $service_id = htmlspecialchars($this->input->post('service_id', TRUE), ENT_QUOTES);
        $service_title = $this->input->post('service_title', TRUE);
        $service_subtitle = $this->input->post('service_subtitle', TRUE);
        $service_service1 = $this->input->post('service_service1', TRUE);
        $service_description1 = $this->input->post('service_description1', TRUE);
        $service_service2 = $this->input->post('service_service2', TRUE);
        $service_description2 = $this->input->post('service_description2', TRUE);
        $service_service3 = $this->input->post('service_service3', TRUE);
        $service_description3 = $this->input->post('service_description3', TRUE);
        $service_service4 = $this->input->post('service_service4', TRUE);
        $service_description4 = $this->input->post('service_description4', TRUE);
        $service_service5 = $this->input->post('service_service5', TRUE);
        $service_description5 = $this->input->post('service_description5', TRUE);
        $service_service6 = $this->input->post('service_service6', TRUE);
        $service_description6 = $this->input->post('service_description6', TRUE);

        $this->setting_model->update_information_service($service_id, $service_title, $service_subtitle, $service_service1, $service_description1, $service_service2, $service_description2, $service_service3, $service_description3, $service_service4, $service_description4, $service_service5, $service_description5, $service_service6, $service_description6);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/service_setting');
    }
}
