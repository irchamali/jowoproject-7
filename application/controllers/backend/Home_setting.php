<?php

class Home_setting extends CI_Controller
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
		$data = $this->setting_model->get_home_data()->row();
		$x['home_id'] = $data->home_id;
		$x['title_1'] = $data->home_title_1;
		$x['caption_1'] = $data->home_caption_1;
		$x['caption_2'] = $data->home_caption_2;
		$x['caption_3'] = $data->home_caption_3;
		$x['slide_1'] = $data->home_slide_1;
		$x['slide_2'] = $data->home_slide_2;
		$x['slide_3'] = $data->home_slide_3;
		$this->load->view('backend/v_home_setting', $x);
	}

	function update()
	{
		$home_id = htmlspecialchars($this->input->post('home_id', TRUE), ENT_QUOTES);
		$title1 = htmlspecialchars($this->input->post('title1', TRUE), ENT_QUOTES);
		$caption1 = htmlspecialchars($this->input->post('caption1', TRUE), ENT_QUOTES);
		$caption2 = htmlspecialchars($this->input->post('caption2', TRUE), ENT_QUOTES);
		$caption3 = htmlspecialchars($this->input->post('caption3', TRUE), ENT_QUOTES);

		$config['upload_path'] = './theme/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['sld_1']['name']) && !empty($_FILES['sld_2']['name']) && !empty($_FILES['sld_3']['name'])) {
			if ($this->upload->do_upload('sld_1')) {
				$sld_1 = $this->upload->data();
				$slide_1 = $sld_1['file_name'];
			}
			if ($this->upload->do_upload('sld_2')) {
				$sld_2 = $this->upload->data();
				$slide_2 = $sld_2['file_name'];
			}
			if ($this->upload->do_upload('sld_3')) {
				$sld_3 = $this->upload->data();
				$slide_3 = $sld_3['file_name'];
			}
			$this->setting_model->update_information($home_id, $title1, $caption1, $caption2, $caption3, $slide_1, $slide_2, $slide_3,);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} elseif (!empty($_FILES['sld_1']['name']) && empty($_FILES['sld_2']['name']) && empty($_FILES['sld_3']['name'])) {
			if ($this->upload->do_upload('sld_1')) {
				$sld_1 = $this->upload->data();
				$slide_1 = $sld_1['file_name'];
			}
			$this->setting_model->update_information_1($home_id, $caption1, $caption2, $caption3, $title1, $slide_1);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} elseif (empty($_FILES['sld_1']['name']) && !empty($_FILES['sld_2']['name']) && empty($_FILES['sld_3']['name'])) {
			if ($this->upload->do_upload('sld_2')) {
				$sld_2 = $this->upload->data();
				$slide_2 = $sld_2['file_name'];
			}
			$this->setting_model->update_information_2($home_id, $caption1, $caption2, $caption3, $title1, $slide_2);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} elseif (empty($_FILES['sld_1']['name']) && empty($_FILES['sld_2']['name']) && !empty($_FILES['sld_3']['name'])) {
			if ($this->upload->do_upload('sld_3')) {
				$sld_3 = $this->upload->data();
				$slide_3 = $sld_3['file_name'];
			}
			$this->setting_model->update_information_3($home_id, $caption1, $caption2, $caption3, $title1, $slide_3);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		} else {
			$this->setting_model->update_information_noimg($home_id, $caption1, $caption2, $caption3, $title1);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/home_setting');
		}
	}
}
