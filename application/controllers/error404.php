<?php
# CALL@Hull 404 error controller

class Error404 extends CI_Controller 
{

	# Constructor. Not needed in this case, included for show. 
	#†Note that if you have a constructor you need to explicitly call its
	#†parent to inherit its methods and properties, otherwise they'll be locally overridden
	public function Error404()
	{
		parent::__construct();

	}
	
	# Custom 404 error page
	public function index()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull: 404 not found";
		$data['heading'] = "404: URL not found"; 		
		// for <meta> tags and DC
		$data['description'] = "";
		$data['keywords'] = "";
		$data['active_topnav'] = ""; // active menu item
		$data['active_leftnav'] = ""; // active menu item
		$data['active_submenu'] = ""; // active menu item
		$template['content'] = $this -> load -> view('404_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		
	}	

	

} //end class	
?>
