<?php
# CALL@Hull about page controller

class About extends CI_Controller 
{

	# Constructor. Not needed in this case, included for show. 
	#†Note that if you have a constructor you need to explicitly call its
	#†parent to inherit its methods and properties, otherwise they'll be locally overridden
	public function About()
	{
		parent::__construct();

	}
	
	// about page
	public function index()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "About CALL@Hull";
		$data['heading'] = "About CALL@Hull"; 		
		// for <meta> tags and DC
		$data['description'] = "The history and purpose of the CALL@Hull repository, criteria for site inclusion, and technical notes. ";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		$data['active_topnav'] = "About"; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = "About CALL@Hull"; // active menu item
		$template['content'] = $this -> load -> view('about/about_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		
	}
	
	public function news()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull news";
		$data['heading'] = "CALL@Hull news"; 		
		// for <meta> tags and DC
		$data['description'] = "News from CALl@Hull ";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		$data['active_topnav'] = "About"; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = "News"; // active menu item
		$template['content'] = $this -> load -> view('about/news_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
		public function criteria()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull site selection criteria";
		$data['heading'] = "CALL@Hull selection criteria"; 		
		// for <meta> tags and DC
		$data['description'] = "Selection criteria for resources to be added to the CALL@Hull repository ";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		$data['active_topnav'] = "About"; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = "Selection criteria"; // active menu item
		$template['content'] = $this -> load -> view('about/criteria_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
		public function technotes()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull technical notes";
		$data['heading'] = "Technical notes"; 		
		// for <meta> tags and DC
		$data['description'] = "Technical notes on the CALL@Hull repository ";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		$data['active_topnav'] = "About"; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = "Technical notes"; // active menu item
		$template['content'] = $this -> load -> view('about/technotes_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}

	public function cticml()
	{
		$data['title'] = "CTI Centre for Modern Languages";
		$data['heading'] = "CTI Centre for Modern Languages"; 		
		// for <meta> tags and DC
		$data['description'] = "History of the CTI Centre for Modern Languages";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		$data['active_topnav'] = "About"; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = "About CALL@Hull"; // active menu item
		$template['content'] = $this -> load -> view('about/cticml_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
} //end class	
?>
