<?php
# CALL@Hull home page controller

class Home extends CI_Controller 
{

	# Constructor. Not needed in this case, included for show. 
	#†Note that if you have a constructor you need to explicitly call its
	#†parent to inherit its methods and properties, otherwise they'll be locally overridden
	public function Home()
	{
		parent::__construct();

	}
	
	# CALL@Hull home page
	public function index()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull: home";
		$data['heading'] = "E-learning resources"; 		
		// for <meta> tags and DC
		$data['description'] = "Resources for language learners and teachers in higher education.s";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		$data['active_topnav'] = "Home"; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = ""; // active menu item
		$template['content'] = $this -> load -> view('home_view', $data, TRUE);
		$this -> load -> view('template1_view', $template);
		
	}	

	

} //end class	
?>
