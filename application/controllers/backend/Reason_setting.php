<?php

class Reason_setting extends CI_Controller
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
        $data = $this->setting_model->get_reason_data()->row();
        $x['reason_id'] = $data->reason_id;
        $x['reason_title'] = $data->reason_title;
        $x['reason_subtitle'] = $data->reason_subtitle;
        $x['reason_why1'] = $data->reason_why1;
        $x['reason_how1'] = $data->reason_how1;
        $x['reason_why2'] = $data->reason_why2;
        $x['reason_how2'] = $data->reason_how2;
        $x['reason_why3'] = $data->reason_why3;
        $x['reason_how3'] = $data->reason_how3;

        $this->load->view('backend/v_reason_setting', $x);
    }

    function update()
    {
        $reason_id = htmlspecialchars($this->input->post('reason_id', TRUE), ENT_QUOTES);
        $reason_title = $this->input->post('reason_title', TRUE);
        $reason_subtitle = $this->input->post('reason_subtitle', TRUE);
        $reason_why1 = $this->input->post('reason_why1', TRUE);
        $reason_how1 = $this->input->post('reason_how1', TRUE);
        $reason_why2 = $this->input->post('reason_why2', TRUE);
        $reason_how2 = $this->input->post('reason_how2', TRUE);
        $reason_why3 = $this->input->post('reason_why3', TRUE);
        $reason_how3 = $this->input->post('reason_how3', TRUE);

        $this->setting_model->update_information_reason($reason_id, $reason_title, $reason_subtitle, $reason_why1, $reason_how1, $reason_why2, $reason_how2, $reason_why3, $reason_how3);
        $this->session->set_flashdata('msg', 'success');
        redirect('backend/reason_setting');
    }
}
