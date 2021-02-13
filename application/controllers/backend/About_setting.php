<?php

class About_setting extends CI_Controller
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
		$data = $this->setting_model->get_about_data()->row();
		$x['about_id'] = $data->about_id;
		$x['about_title'] = $data->about_title;
		$x['about_subtitle'] = $data->about_subtitle;
		$x['about_image'] = $data->about_image;
		$x['about_description'] = $data->about_description;
		$x['about_link'] = $data->about_link;

		$this->load->view('backend/v_about_setting', $x);
	}

	function update()
	{
		$about_id = htmlspecialchars($this->input->post('about_id', TRUE), ENT_QUOTES);
		$about_title = $this->input->post('about_title', TRUE);
		$about_subtitle = $this->input->post('about_subtitle', TRUE);
		$about_description = $this->input->post('about_description', TRUE);
		$about_link = $this->input->post('about_link', TRUE);

		$config['upload_path'] = './theme/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = FALSE;

		$this->upload->initialize($config);
		if (!empty($_FILES['about_image']['name'])) {
			if ($this->upload->do_upload('about_image')) {
				$about_image = $this->upload->data();
				$image = $about_image['file_name'];
			}
			$this->setting_model->update_information_about($about_id, $about_title, $about_subtitle, $image, $about_description, $about_link);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		} else {
			$this->setting_model->update_information_about_noimg($about_id, $about_title, $about_subtitle, $about_description, $about_link,);
			$this->session->set_flashdata('msg', 'success');
			redirect('backend/about_setting');
		}
	}
}
