<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Visitor_model', 'visitor_model');
        $this->load->model('Home_model', 'home_model');
        $this->load->model('Site_model', 'site_model');
        $this->visitor_model->count_visitor();
        $this->load->helper('text');
    }
    function index()
    {
        //$this->output->enable_profiler(TRUE);
        $site = $this->site_model->get_site_data()->row_array();
        $data['site_name'] = $site['site_name'];
        $data['site_title'] = $site['site_title'];
        $data['site_desc'] = $site['site_description'];
        $data['site_twitter'] = $site['site_twitter'];
        $data['site_image'] = $site['site_logo_big'];

        $data['post_header'] = $this->home_model->get_post_header();
        $data['post_header_2'] = $this->home_model->get_post_header_2();
        $data['post_header_3'] = $this->home_model->get_post_header_3();
        $data['latest_post'] = $this->home_model->get_latest_post();
        $data['popular_post'] = $this->home_model->get_popular_post();
        $home = $this->db->get('tbl_home', 1)->row();
        $data['title_1'] = $home->home_title_1;
        $data['caption_1'] = $home->home_caption_1;
        $data['caption_2'] = $home->home_caption_2;
        $data['caption_3'] = $home->home_caption_3;
        $data['slide_1'] = $home->home_slide_1;
        $data['slide_2'] = $home->home_slide_2;
        $data['slide_3'] = $home->home_slide_3;

        $about = $this->db->get('tbl_about', 1)->row();
        $data['about_title'] = $about->about_title;
        $data['about_subtitle'] = $about->about_subtitle;
        $data['about_image'] = $about->about_image;
        $data['about_description'] = $about->about_description;
        $data['about_link'] = $about->about_link;

        $service = $this->db->get('tbl_service', 1)->row();
        $data['service_title'] = $service->service_title;
        $data['service_subtitle'] = $service->service_subtitle;
        $data['service_service1'] = $service->service_service1;
        $data['service_description1'] = $service->service_description1;
        $data['service_service2'] = $service->service_service2;
        $data['service_description2'] = $service->service_description2;
        $data['service_service3'] = $service->service_service3;
        $data['service_description3'] = $service->service_description3;
        $data['service_service4'] = $service->service_service4;
        $data['service_description4'] = $service->service_description4;
        $data['service_service5'] = $service->service_service5;
        $data['service_description5'] = $service->service_description5;
        $data['service_service6'] = $service->service_service6;
        $data['service_description6'] = $service->service_description6;

        $portfolio = $this->db->get('tbl_portfolio', 1)->row();
        $data['portfolio_title'] = $portfolio->portfolio_title;
        $data['portfolio_subtitle'] = $portfolio->portfolio_subtitle;
        $data['portfolio_project1'] = $portfolio->portfolio_project1;
        $data['portfolio_image1'] = $portfolio->portfolio_image1;
        $data['portfolio_desc1'] = $portfolio->portfolio_desc1;
        $data['portfolio_link1'] = $portfolio->portfolio_link1;
        $data['portfolio_project2'] = $portfolio->portfolio_project2;
        $data['portfolio_image2'] = $portfolio->portfolio_image2;
        $data['portfolio_desc2'] = $portfolio->portfolio_desc2;
        $data['portfolio_link2'] = $portfolio->portfolio_link2;
        $data['portfolio_project3'] = $portfolio->portfolio_project3;
        $data['portfolio_image3'] = $portfolio->portfolio_image3;
        $data['portfolio_desc3'] = $portfolio->portfolio_desc3;
        $data['portfolio_link3'] = $portfolio->portfolio_link3;

        $reason = $this->db->get('tbl_reason', 1)->row();
        $data['reason_title'] = $reason->reason_title;
        $data['reason_subtitle'] = $reason->reason_subtitle;
        $data['reason_why1'] = $reason->reason_why1;
        $data['reason_how1'] = $reason->reason_how1;
        $data['reason_why2'] = $reason->reason_why2;
        $data['reason_how2'] = $reason->reason_how2;
        $data['reason_why3'] = $reason->reason_why3;
        $data['reason_how3'] = $reason->reason_how3;

        $data['testimonial'] = $this->db->get('tbl_testimonial');

        $site_info = $this->db->get('tbl_site', 1)->row();
        $data['logo'] =  $site_info->site_logo_header;
        $data['icon'] = $site_info->site_favicon;

        $this->load->view('home_view', $data);
    }
}
