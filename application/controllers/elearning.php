<?php
# CALL@Hull E-learning section controller

class Elearning extends CI_Controller 
{

	# Constructor. Not needed in this case, included for show. 
	#†Note that if you have a constructor you need to explicitly call its
	#†parent to inherit its methods and properties, otherwise they'll be locally overridden
	public function Elearning()
	{
		parent::__construct();

	}
	
	// elearning home page
	public function index()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull: e-learning resources";
		$data['heading'] = "E-learning resources"; 		
		// for <meta> tags and DC
		$data['description'] = "General e-learning resources for CALL and TELL practitioners";
		$data['keywords'] = "CALL, TELL, e-learning, elearning, images, OTiS, pedagogy";
		$data['active_topnav'] = ""; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = ""; // active menu item
		$template['content'] = $this -> load -> view('elearning/elearning_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		
	}

	// OTiS online learning ebook
	public function otis()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull: OTiS Online Tutoring E-book";
		$data['heading'] = "OTiS Online Tutoring E-book"; 		
		// for <meta> tags and DC
		$data['description'] = "The OTiS Online Tutoring E-book";
		$data['keywords'] = "CALL, TELL, e-learning, elearning, OTiS, pedagogy, RGU, Scotcit";
		$data['active_topnav'] = ""; // active menu item
		$data['active_leftnav'] = "OTiS"; // active menu item
		$data['active_submenu'] = ""; // active menu item
		$template['content'] = $this -> load -> view('elearning/otis_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		
	}	
	
	// Media repositories
	public function media()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull: Media repositories";
		$data['heading'] = "Media repositories for e-learning"; 		
		// for <meta> tags and DC
		$data['description'] = "Online audio, video and image repositories for e-learning practitioners and developers";
		$data['keywords'] = "CALL, TELL, e-learning, elearning, OTiS, pedagogy, RGU, Scotcit";
		$data['active_topnav'] = ""; // active menu item
		$data['active_leftnav'] = "Media repositories"; // active menu item
		$data['active_submenu'] = ""; // active menu item
		$template['content'] = $this -> load -> view('elearning/media_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		
	}	


} //end class	
?>
