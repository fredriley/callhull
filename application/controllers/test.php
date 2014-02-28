<?php
# CALL@Hull about page controller

class Test extends CI_Controller 
{

	# Constructor. Not needed in this case, included for show. 
	#†Note that if you have a constructor you need to explicitly call its
	#†parent to inherit its methods and properties, otherwise they'll be locally overridden
	public function Test()
	{
		parent::__construct();

	}
	
	// about page
	public function index()
	{
		// define some vars to pass to the nav and page views
		# <head> elements
		$data['title'] = "CALL@Hull: TEST";
		$data['heading'] = "Test Home page"; 
		// for <meta> tags and DC
		$data['description'] = "Resources for language learners and teachers in higher education.";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		# build page by loading 'building blocks'
		# top navigation bar and banner
		$data['active_topnav'] = "Home"; // active menu item
		# left navigation bar and banner
		$data['active_leftnav'] = ""; // active menu item
		//$template['content'] = $this->load->view('test_view',$data,TRUE);
		$template['content'] = $this -> load -> view('test_view', $data, TRUE);
		//$this->load->view('page_template',$template);
		$this -> load -> view('template1_view', $template);
		
	}
	
	public function about()
	{
		// define some vars to pass to the nav and page views
		# <head> elements
		$data['title'] = "CALL@Hull: TEST 2 (About)";
		$data['heading'] = "Test About page"; 		
		// for <meta> tags and DC
		$data['description'] = "The history and purpose of the CALL@Hull repository, criteria for site inclusion, and technical notes. ";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		# build page by loading 'building blocks'
		# top navigation bar and banner
		$data['active_topnav'] = "About"; // active menu item
		# left navigation bar and banner
		$data['active_leftnav'] = ""; // active menu item
		# submenu
		$data['active_submenu'] = "About CALL@Hull"; // active menu item
		//$template['content'] = $this->load->view('test_view',$data,TRUE);
		$template['content'] = $this -> load -> view('about/about_view', $data, TRUE);
		//$this->load->view('page_template',$template);
		$this -> load -> view('template2_view', $template);
		
	}

} //end class	
?>
