<?php

class Portfolio_setting extends CI_Controller
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
        $data = $this->setting_model->get_portfolio_data()->row();
        $x['portfolio_id'] = $data->portfolio_id;
        $x['title'] = $data->portfolio_title;
        $x['subtitle'] = $data->portfolio_subtitle;
        $x['project1'] = $data->portfolio_project1;
        $x['image1'] = $data->portfolio_image1;
        $x['desc1'] = $data->portfolio_desc1;
        $x['project2'] = $data->portfolio_project2;
        $x['image2'] = $data->portfolio_image2;
        $x['desc2'] = $data->portfolio_desc2;
        $x['project3'] = $data->portfolio_project3;
        $x['image3'] = $data->portfolio_image3;
        $x['desc3'] = $data->portfolio_desc3;
        $x['project4'] = $data->portfolio_project4;
        $x['image4'] = $data->portfolio_image4;
        $x['desc4'] = $data->portfolio_desc4;
        $x['project5'] = $data->portfolio_project5;
        $x['image5'] = $data->portfolio_image5;
        $x['desc5'] = $data->portfolio_desc5;
        $this->load->view('backend/v_portfolio_setting', $x);
    }

    function update()
    {
        $portfolio_id = htmlspecialchars($this->input->post('portfolio_id', TRUE), ENT_QUOTES);
        $title = htmlspecialchars($this->input->post('title', TRUE), ENT_QUOTES);
        $subtitle = htmlspecialchars($this->input->post('subtitle', TRUE), ENT_QUOTES);
        $project1 = htmlspecialchars($this->input->post('project1', TRUE), ENT_QUOTES);
        $desc1 = htmlspecialchars($this->input->post('desc1', TRUE), ENT_QUOTES);
        $project2 = htmlspecialchars($this->input->post('project2', TRUE), ENT_QUOTES);
        $desc2 = htmlspecialchars($this->input->post('desc2', TRUE), ENT_QUOTES);
        $project3 = htmlspecialchars($this->input->post('project3', TRUE), ENT_QUOTES);
        $desc3 = htmlspecialchars($this->input->post('desc3', TRUE), ENT_QUOTES);
        $project4 = htmlspecialchars($this->input->post('project4', TRUE), ENT_QUOTES);
        $desc4 = htmlspecialchars($this->input->post('desc4', TRUE), ENT_QUOTES);
        $project5 = htmlspecialchars($this->input->post('project5', TRUE), ENT_QUOTES);
        $desc5 = htmlspecialchars($this->input->post('desc5', TRUE), ENT_QUOTES);
        
        $config['upload_path'] = './theme/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = FALSE;

        $this->upload->initialize($config);
        if (!empty($_FILES['img_1']['name']) && !empty($_FILES['img_2']['name']) && !empty($_FILES['img_3']['name']) && !empty($_FILES['img_4']['name']) && !empty($_FILES['img_5']['name'])) {
            if ($this->upload->do_upload('img_1')) {
                $img_1 = $this->upload->data();
                $image1 = $img_1['file_name'];
            }
            if ($this->upload->do_upload('img_2')) {
                $img_2 = $this->upload->data();
                $image2 = $img_2['file_name'];
            }
            if ($this->upload->do_upload('img_3')) {
                $img_3 = $this->upload->data();
                $image3 = $img_3['file_name'];
            }
            if ($this->upload->do_upload('img_4')) {
                $img_4 = $this->upload->data();
                $image4 = $img_4['file_name'];
            }
            if ($this->upload->do_upload('img_5')) {
                $img_5 = $this->upload->data();
                $image5 = $img_5['file_name'];
            }
            $this->setting_model->update_portfolio($portfolio_id, $title, $subtitle, $project1, $image1, $desc1, $project2, $image2, $desc2, $project3, $image3, $desc3, $project4, $image4, $desc4, $project5, $image5, $desc5);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/portfolio_setting');
        } elseif (!empty($_FILES['img_1']['name']) && empty($_FILES['img_2']['name']) && empty($_FILES['img_3']['name']) && empty($_FILES['img_4']['name']) && empty($_FILES['img_5']['name'])) {
            if ($this->upload->do_upload('img_1')) {
                $img_1 = $this->upload->data();
                $image1 = $img_1['file_name'];
            }
            $this->setting_model->update_portfolio_1($portfolio_id, $title, $subtitle, $project1, $image1, $desc1, $project2, $desc2,  $project3, $desc3, $project4, $desc4, $project5, $desc5);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/portfolio_setting');
        } elseif (empty($_FILES['img_1']['name']) && !empty($_FILES['img_2']['name']) && empty($_FILES['img_3']['name']) && empty($_FILES['img_4']['name']) && empty($_FILES['img_5']['name'])) {
            if ($this->upload->do_upload('img_2')) {
                $img_2 = $this->upload->data();
                $image2 = $img_2['file_name'];
            }
            $this->setting_model->update_portfolio_2($portfolio_id, $title, $subtitle, $project1, $desc1, $project2, $image2, $desc2,  $project3, $desc3, $project4, $desc4, $project5, $desc5);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/portfolio_setting');
        } elseif (empty($_FILES['img_1']['name']) && empty($_FILES['img_2']['name']) && !empty($_FILES['img_3']['name']) && empty($_FILES['img_4']['name']) && empty($_FILES['img_5']['name'])) {
            if ($this->upload->do_upload('img_3')) {
                $img_3 = $this->upload->data();
                $image3 = $img_3['file_name'];
            }
            $this->setting_model->update_portfolio_3($portfolio_id, $title, $subtitle, $project1, $desc1, $project2, $desc2, $project3, $image3, $desc3, $project4, $desc4, $project5, $desc5);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/portfolio_setting');
        } elseif (empty($_FILES['img_1']['name']) && empty($_FILES['img_2']['name']) && empty($_FILES['img_3']['name']) && !empty($_FILES['img_4']['name']) && empty($_FILES['img_5']['name'])) {
            if ($this->upload->do_upload('img_4')) {
                $img_4 = $this->upload->data();
                $image4 = $img_4['file_name'];
            }
            $this->setting_model->update_portfolio_4($portfolio_id, $title, $subtitle, $project1, $desc1, $project2, $desc2, $project3, $desc3, $project4, $image4, $desc4, $project5, $desc5);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/portfolio_setting');
        }elseif (empty($_FILES['img_1']['name']) && empty($_FILES['img_2']['name']) && empty($_FILES['img_3']['name']) && empty($_FILES['img_4']['name']) && !empty($_FILES['img_5']['name'])) {
            if ($this->upload->do_upload('img_5')) {
                $img_5 = $this->upload->data();
                $image5 = $img_5['file_name'];
            }
            $this->setting_model->update_portfolio_5($portfolio_id, $title, $subtitle, $project1, $desc1, $project2, $desc2, $project3, $desc3, $project4, $desc4, $project5, $image5, $desc5);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/portfolio_setting');
        } else {
            $this->setting_model->update_portfolio_noimg($portfolio_id, $title, $subtitle, $project1, $desc1, $project2, $desc2,  $project3, $desc3, $project4, $desc4, $project5, $desc5);
            $this->session->set_flashdata('msg', 'success');
            redirect('backend/portfolio_setting');
        }
    }
}
