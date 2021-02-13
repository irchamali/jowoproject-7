<?php

class Setting_model extends CI_Model
{

	function get_home_data()
	{
		$query = $this->db->get('tbl_home', 1);
		return $query;
	}

	function update_information($home_id, $caption1, $caption2, $caption3, $title1, $slide_1, $slide_2, $slide_3)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_1', $slide_1);
		$this->db->set('home_slide_2', $slide_2);
		$this->db->set('home_slide_3', $slide_3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_1($home_id, $caption1, $caption2, $caption3, $title1, $slide_1)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_1', $slide_1);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_2($home_id, $caption1, $caption2, $caption3, $title1, $slide_2)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_2', $slide_2);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_3($home_id, $caption1, $caption2, $caption3, $title1, $slide_3)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->set('home_slide_3', $slide_3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}

	function update_information_noimg($home_id, $caption1, $caption2, $caption3, $title1)
	{
		$this->db->set('home_title_1', $title1);
		$this->db->set('home_caption_1', $caption1);
		$this->db->set('home_caption_2', $caption2);
		$this->db->set('home_caption_3', $caption3);
		$this->db->where('home_id', $home_id);
		$this->db->update('tbl_home');
	}


	// About information
	function get_about_data()
	{
		$query = $this->db->get('tbl_about', 1);
		return $query;
	}

	function update_information_about($about_id, $title, $subtitle, $image, $description, $link)
	{
		$this->db->set('about_title', $title);
		$this->db->set('about_subtitle', $subtitle);
		$this->db->set('about_image', $image);
		$this->db->set('about_description', $description);
		$this->db->set('about_link', $link);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}

	function update_information_about_noimg($about_id, $title, $subtitle, $description, $link)
	{
		$this->db->set('about_title', $title);
		$this->db->set('about_subtitle', $subtitle);
		$this->db->set('about_description', $description);
		$this->db->set('about_link', $link);
		$this->db->where('about_id', $about_id);
		$this->db->update('tbl_about');
	}


	// Service information
	function get_service_data()
	{
		$query = $this->db->get('tbl_service', 1);
		return $query;
	}

	function update_information_service($service_id, $title, $subtitle, $service1, $description1, $service2, $description2, $service3, $description3, $service4, $description4, $service5, $description5, $service6, $description6)
	{
		$this->db->set('service_title', $title);
		$this->db->set('service_subtitle', $subtitle);
		$this->db->set('service_service1', $service1);
		$this->db->set('service_description1', $description1);
		$this->db->set('service_service2', $service2);
		$this->db->set('service_description2', $description2);
		$this->db->set('service_service3', $service3);
		$this->db->set('service_description3', $description3);
		$this->db->set('service_service4', $service4);
		$this->db->set('service_description4', $description4);
		$this->db->set('service_service5', $service5);
		$this->db->set('service_description5', $description5);
		$this->db->set('service_service6', $service6);
		$this->db->set('service_description6', $description6);

		$this->db->where('service_id', $service_id);
		$this->db->update('tbl_service');
	}


	// Reason information
	function get_reason_data()
	{
		$query = $this->db->get('tbl_reason', 1);
		return $query;
	}

	function update_information_reason($reason_id, $title, $subtitle, $why1, $how1, $why2, $how2, $why3, $how3)
	{
		$this->db->set('reason_title', $title);
		$this->db->set('reason_subtitle', $subtitle);
		$this->db->set('reason_why1', $why1);
		$this->db->set('reason_how1', $how1);
		$this->db->set('reason_why2', $why2);
		$this->db->set('reason_how2', $how2);
		$this->db->set('reason_why3', $why3);
		$this->db->set('reason_how3', $how3);

		$this->db->where('reason_id', $reason_id);
		$this->db->update('tbl_reason');
	}


	//Portfolio information
	function get_portfolio_data()
	{
		$query = $this->db->get('tbl_portfolio', 1);
		return $query;
	}

	function update_portfolio($portfolio_id, $title, $subtitle, $project1, $image1, $desc1, $link1, $project2, $image2, $desc2, $link2, $project3, $image3, $desc3, $link3)
	{
		$this->db->set('portfolio_title', $title);
		$this->db->set('portfolio_subtitle', $subtitle);
		$this->db->set('portfolio_project1', $project1);
		$this->db->set('portfolio_image1', $image1);
		$this->db->set('portfolio_desc1', $desc1);
		$this->db->set('portfolio_link1', $link1);
		$this->db->set('portfolio_project2', $project2);
		$this->db->set('portfolio_image2', $image2);
		$this->db->set('portfolio_desc2', $desc2);
		$this->db->set('portfolio_link2', $link2);
		$this->db->set('portfolio_project3', $project3);
		$this->db->set('portfolio_image3', $image3);
		$this->db->set('portfolio_desc3', $desc3);
		$this->db->set('portfolio_link3', $link3);

		$this->db->where('portfolio_id', $portfolio_id);
		$this->db->update('tbl_portfolio');
	}

	function update_portfolio_1($portfolio_id, $title, $subtitle, $project1, $image1, $desc1, $link1, $project2, $desc2, $link2, $project3, $desc3, $link3)
	{
		$this->db->set('portfolio_title', $title);
		$this->db->set('portfolio_subtitle', $subtitle);
		$this->db->set('portfolio_project1', $project1);
		$this->db->set('portfolio_image1', $image1);
		$this->db->set('portfolio_desc1', $desc1);
		$this->db->set('portfolio_link1', $link1);
		$this->db->set('portfolio_project2', $project2);
		$this->db->set('portfolio_desc2', $desc2);
		$this->db->set('portfolio_link2', $link2);
		$this->db->set('portfolio_project3', $project3);
		$this->db->set('portfolio_desc3', $desc3);
		$this->db->set('portfolio_link3', $link3);

		$this->db->where('portfolio_id', $portfolio_id);
		$this->db->update('tbl_portfolio');
	}

	function update_portfolio_2($portfolio_id, $title, $subtitle, $project1, $desc1, $link1, $project2, $image2, $desc2, $link2, $project3, $desc3, $link3)
	{
		$this->db->set('portfolio_title', $title);
		$this->db->set('portfolio_subtitle', $subtitle);
		$this->db->set('portfolio_project1', $project1);
		$this->db->set('portfolio_image2', $image2);
		$this->db->set('portfolio_desc1', $desc1);
		$this->db->set('portfolio_link1', $link1);
		$this->db->set('portfolio_project2', $project2);
		$this->db->set('portfolio_desc2', $desc2);
		$this->db->set('portfolio_link2', $link2);
		$this->db->set('portfolio_project3', $project3);
		$this->db->set('portfolio_desc3', $desc3);
		$this->db->set('portfolio_link3', $link3);

		$this->db->where('portfolio_id', $portfolio_id);
		$this->db->update('tbl_portfolio');
	}

	function update_portfolio_3($portfolio_id, $title, $subtitle, $project1, $desc1, $link1, $project2, $desc2, $link2, $project3, $image3, $desc3, $link3)
	{
		$this->db->set('portfolio_title', $title);
		$this->db->set('portfolio_subtitle', $subtitle);
		$this->db->set('portfolio_project1', $project1);
		$this->db->set('portfolio_image3', $image3);
		$this->db->set('portfolio_desc1', $desc1);
		$this->db->set('portfolio_link1', $link1);
		$this->db->set('portfolio_project2', $project2);
		$this->db->set('portfolio_desc2', $desc2);
		$this->db->set('portfolio_link2', $link2);
		$this->db->set('portfolio_project3', $project3);
		$this->db->set('portfolio_desc3', $desc3);
		$this->db->set('portfolio_link3', $link3);

		$this->db->where('portfolio_id', $portfolio_id);
		$this->db->update('tbl_portfolio');
	}

	function update_portfolio_noimg($portfolio_id, $title, $subtitle, $project1, $desc1, $link1, $project2, $desc2, $link2, $project3, $desc3, $link3)
	{
		$this->db->set('portfolio_title', $title);
		$this->db->set('portfolio_subtitle', $subtitle);
		$this->db->set('portfolio_project1', $project1);
		$this->db->set('portfolio_desc1', $desc1);
		$this->db->set('portfolio_link1', $link1);
		$this->db->set('portfolio_project2', $project2);
		$this->db->set('portfolio_desc2', $desc2);
		$this->db->set('portfolio_link2', $link2);
		$this->db->set('portfolio_project3', $project3);
		$this->db->set('portfolio_desc3', $desc3);
		$this->db->set('portfolio_link3', $link3);

		$this->db->where('portfolio_id', $portfolio_id);
		$this->db->update('tbl_portfolio');
	}
}
