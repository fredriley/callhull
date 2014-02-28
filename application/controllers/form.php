<?php
# CALL@Hull forms controller, handling forms and responses

class Form extends CI_Controller 
{

	# Constructor. 
	public function Form()
	{
		parent::__construct();

	}
	
	public function index()
	{
		$data['title'] = "CALL@Hull forms";
		$data['heading'] = "Forms on CALL@Hull"; 		
		$data['description'] = "";
		$data['keywords'] = "";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = ""; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('forms/form_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);		
	
	}
	
	public function suggest()
	{
		$data['title'] = "CALL@Hull: Suggest a site";
		$data['heading'] = "Suggest a site"; 		
		$data['description'] = "Suggest a site for inclusion in the CALL@Hull repository";
		$data['keywords'] = "CALL, TELL, languages";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Suggest a site"; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('forms/suggest_site_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		# add extra form validation JS after footer
		$this -> load -> view('validation_script_view');
	}
	
	public function contact()
	{
		$data['title'] = "CALL@Hull: contact";
		$data['heading'] = "Contact CALL@Hull"; 		
		$data['description'] = "Contact details for CALL@Hull";
		$data['keywords'] = "CALL, TELL, languages";
		$data['active_topnav'] = "Contact"; 
		$data['active_leftnav'] = ""; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('forms/contact_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		# add extra form validation JS after footer
		$this -> load -> view('validation_script_view');
	}	
	
	public function thanks()
	{
		$data['title'] = "CALL@Hull: thanks";
		$data['heading'] = "Contact CALL@Hull"; 		
		$data['description'] = "Contact details for CALL@Hull";
		$data['keywords'] = "CALL, TELL, languages";
		$data['active_topnav'] = "Contact"; 
		$data['active_leftnav'] = ""; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('forms/thanks_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);	
	}
	
	public function error()
	{
		$data['title'] = "CALL@Hull: error";
		$data['heading'] = "Error!"; 		
		$data['description'] = "CALL@Hull error page";
		$data['keywords'] = "";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = ""; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('forms/error_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);	
	
	}


} //end class	
?>
