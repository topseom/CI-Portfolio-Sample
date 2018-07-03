<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
        parent::__construct();
	}
	public function index()
	{
		$welcome = array(
					 "title" => 'HI, MY NAME IS <span style="color: #fff;">Narttakarn Kaewting</span> !!',
					 "subtitle1" => "Welcome to",
					 "subtitle2" => "Portfolio",
					 "text_button" => "MY PORTFOLIO",
					 "image"=>base_url()."assets/images/bg1.jpg"
					);
		$dashboard = array(
					 "title" => 'SOME OF MY <span style="color: #fff;">BEST EXPERIENCE</span>',
					 "image"=>base_url()."assets/images/bg2.jpg"
					);
		$slides = array(
					array(
							"title"=>"RESUME",
							"subtitle"=>"",
							"description"=>"",
							"image"=>base_url()."assets/images/resume.jpg",
							"d_hoffset"=>"['350','300','-160','-80']",
							"d_voffset"=>"['330','280','350','200']",
							"b_hoffset"=>"['400','400','-175','-175']",
							"b_voffset"=>"['50','50','50','50']"
						 ),
					array(
							"title"=>"CERTIFICATE",
							"subtitle"=>"International English Camp Program",
							"description"=>"I had completed International English camp program at Spring college international (Singapore) conducted 22 May 2014 to 3 June 2014.",
							"image"=>base_url()."assets/images/p1.jpg",
							"d_hoffset"=>"['560','460','0','80']",
							"d_voffset"=>"['330','280','350','200']",
							"b_hoffset"=>"['330','330','-105','-105']",
							"b_voffset"=>"['50','50','50','50']"
						 ),
					array(
							"title"=>"KONSUROK",
							"subtitle"=>"CREATIVE AND SCRIPT WRITTER",
							"description"=>"I had a trainee at Konsurok Thai PBS Channel in December 2016 to Febrauary 2017. I was a creative and script writter and provide information about health for elderly people.",
							"image"=>base_url()."assets/images/y3.png",
							"d_hoffset"=>"['770','620','160','-80']",
							"d_voffset"=>"['330','280','350','310']",
							"b_hoffset"=>"['260','260','-35','-35']",
							"b_voffset"=>"['50','50','50','50']"
						 ),
					array(
							"title"=>"SPICE",
							"subtitle"=>"FREELANCE WRITTER",
							"description"=>"I had a freelance writter at Spice which public on www.spiceee.net. I wrote articles, made collection and outfit about women style.",
							"image"=>base_url()."assets/images/spice.png",
							"d_hoffset"=>"['350','300','-160','80']",
							"d_voffset"=>"['473','390','460','310']",
							"b_hoffset"=>"['190','190','35','35']",
							"b_voffset"=>"['50','50','50','50']"
						 ),
					array(
							"title"=>"JELLY",
							"subtitle"=>"FREELANCE WRITTER",
							"description"=>"I am a freelance writter at Jelly which public on www.jelly.in.th. I writting about women style such as beauty, fashion, health , etc.",
							"image"=>base_url()."assets/images/jelly2.png",
							"d_hoffset"=>"['560','460','0','-80']",
							"d_voffset"=>"['473','390','460','420']",
							"b_hoffset"=>"['120','120','105','105']",
							"b_voffset"=>"['50','50','50','50']"
						 ),
					array(
							"title"=>"READ ME",
							"subtitle"=>"FREELANCE WRITTER",
							"description"=>"I writting review my special journey at Readme which public at th.readme.me.",
							"image"=>base_url()."assets/images/readme.png",
							"d_hoffset"=>"['770','620','160','80']",
							"d_voffset"=>"['473','390','460','420']",
							"b_hoffset"=>"['50','50','175','175']",
							"b_voffset"=>"['50','50','50','50']"
						 ),
					
					   
				  );
		
		
		$data = array("welcome"=>$welcome,"dashboard"=>$dashboard,"slides"=>$slides,"facebook"=>"https://web.facebook.com/narttakarn","twitter"=>"https://twitter.com/NarttakarnK");
		//echo "<pre>";print_r($data);exit;
		$this->load->view('site',$data);
	}
	
	public function test()
	{
		echo base_url();
	}
}
