<?php
# CALL@Hull languages resources section controller

class Languages extends CI_Controller 
{

	# Constructor. 
	public function Languages()
	{
		parent::__construct();

	}
	
	# NB: Both index and general are the same. There's no link to the languages index so 
	# this is in case of URL editing to <host>/languages/
	public function index()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull: General languages resources";
		$data['heading'] = "General language resources"; 		
		// for <meta> tags and DC
		$data['description'] = "General resources for teachers and learners of languages in higher education ";
		$data['keywords'] = "linguistics, dictionaries, grammars, translation, interpreting, CALL";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "General"; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('languages/general_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		
	}
	
	public function latest()
	{
		// define some vars to pass to the nav and page views
		$data['title'] = "CALL@Hull: Latest resources";
		$data['heading'] = "Latest resources"; 		
		// for <meta> tags and DC
		$data['description'] = "Latest resources added to the CALL@Hull language resource repository. ";
		$data['keywords'] = "CALL, TELL, CTICML, Hull, languages";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Latest resources"; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('languages/latest_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
	public function general()
	{
		$data['title'] = "CALL@Hull: General languages resources";
		$data['heading'] = "General language resources"; 		
		$data['description'] = "General resources for teachers and learners of languages in higher education ";
		$data['keywords'] = "linguistics, dictionaries, grammars, translation, interpreting, CALL";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "General"; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('languages/general_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
		public function language()
	{
		$data['title'] = "CALL@Hull: language-specific sites";
		$data['heading'] = "Language-specific sites"; 		
		// for <meta> tags and DC
		$data['description'] = "Resources for teachers and learners of specific languages in higher education";
		$data['keywords'] = "CALL, Hull, language learning, language teaching, CTI, CTICML, LTSN, LLAS";
		$data['active_topnav'] = ""; // active menu item
		$data['active_leftnav'] = "Language-specific"; // active menu item
		$data['active_submenu'] = ""; // active menu item
		$template['content'] = $this -> load -> view('languages/language_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
		public function balkan()
	{
		$data['title'] = "CALL@Hull: Balkan languages sites";
		$data['heading'] = "Balkan languages sites"; 		
		$data['description'] = "Resources for language learners and teachers of Balkan languages ";
		$data['keywords'] = "albanian, greek, turkish, macedonian, slovenian, balkan";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Balkan";
		$template['content'] = $this -> load -> view('languages/balkan_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
		public function celtic()
	{
		$data['title'] = "CALL@Hull: Celtic languages sites";
		$data['heading'] = "Celtic languages sites"; 		
		$data['description'] = "Resources for language learners and teachers of Celtic languages ";
		$data['keywords'] = "celtic, irish, welsh, cymraeg, gaelic, gaelge, gàidhlig, manx, breton";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Celtic";
		$template['content'] = $this -> load -> view('languages/celtic_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}

		public function english()
	{
		$data['title'] = "CALL@Hull: English (TEFL/TESL) sites";
		$data['heading'] = "English (TEFL/TESL) sites"; 		
		$data['description'] = "Resources for language learners and teachers of English as a foreign or second language ";
		$data['keywords'] = "english, TEFL, TESL, TESOL, ESL, EFL";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "English";
		$template['content'] = $this -> load -> view('languages/english_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
		public function dutch()
	{
		$data['title'] = "CALL@Hull: Resources for language learners and teachers of Dutch";
		$data['heading'] = "Dutch language sites"; 		
		$data['description'] = "Resources for language learners and teachers of English as a foreign or second language ";
		$data['keywords'] = "dutch, hollands, netherlands, lagelands";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Dutch";
		$template['content'] = $this -> load -> view('languages/dutch_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
		public function french()
	{
		$data['title'] = "CALL@Hull: Resources for language learners and teachers of French";
		$data['heading'] = "French language sites"; 		
		$data['description'] = "Resources for language learners and teachers of French languages. ";
		$data['keywords'] = "french, francais";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "French";
		$template['content'] = $this -> load -> view('languages/french_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
	public function german()
	{
		$data['title'] = "CALL@Hull: Resources for language learners and teachers of German";
		$data['heading'] = "German language sites"; 		
		$data['description'] = "Resources for language learners and teachers of German. ";
		$data['keywords'] = "german, deutsch";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "German";
		$template['content'] = $this -> load -> view('languages/german_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
	public function iberian()
	{
		$data['title'] = "CALL@Hull: Iberian languages sites";
		$data['heading'] = "Iberian languages sites"; 		
		$data['description'] = "Resources for language learners and teachers of Iberian languages. ";
		$data['keywords'] = "iberian, spanish, castillano, castilean, catalan, valencian, portuguese, basque, galician";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Iberian";
		$template['content'] = $this -> load -> view('languages/iberian_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
	public function indian()
	{
		$data['title'] = "CALL@Hull: Indian languages sites";
		$data['heading'] = "Indian languages sites"; 		
		$data['description'] = "Resources for language learners and teachers of languages of the Indian subcontinent.";
		$data['keywords'] = "indian, gujurati, hindi, malayalam";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Indian";
		$template['content'] = $this -> load -> view('languages/indian_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}
	
	public function italian()
	{
		$data['title'] = "CALL@Hull: Italian languages sites";
		$data['heading'] = "Italian languages sites"; 		
		$data['description'] = "Resources for language learners and teachers of languages of the Indian subcontinent.";
		$data['keywords'] = "italian, italiano";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Italian";
		$template['content'] = $this -> load -> view('languages/italian_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}	

	public function mideast()
	{
		$data['title'] = "CALL@Hull: Middle Eastern languages sites";
		$data['heading'] = "Middle Eastern languages sites"; 		
		$data['description'] = "Resources for learners and teachers of languages of the Middle East";
		$data['keywords'] = "arabic, hebrew, maltese";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Middle East";
		$template['content'] = $this -> load -> view('languages/mideast_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}

	public function oriental()
	{
		$data['title'] = "CALL@Hull: Oriental languages sites";
		$data['heading'] = "Oriental languages sites"; 		
		$data['description'] = "Resources for language learners and teachers of Oriental languages.";
		$data['keywords'] = "japanese, chinese, mandarin, korean, indonesian, vietnamese";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Oriental";
		$template['content'] = $this -> load -> view('languages/oriental_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}

	public function scandinavian()
	{
		$data['title'] = "CALL@Hull: Scandinavian languages sites";
		$data['heading'] = "Scandinavian languages sites"; 		
		$data['description'] = "Resources for language learners and teachers of Scandinavian languages.";
		$data['keywords'] = "danish, finnish, swedish, suomi, sverige, dansk, norwegian, scandinavia";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Language-specific";
		$data['active_submenu'] = "Scandinavian";
		$template['content'] = $this -> load -> view('languages/scandinavian_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}

	public function multi()
	{
		$data['title'] = "CALL@Hull: Multilingual languages sites";
		$data['heading'] = "Multilingual languages sites"; 		
		$data['description'] = "Multilingual resources for language learners and teachers ";
		$data['keywords'] = "CALL, TELL, multilingual, dictionaries, grammars, media";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Multilingual"; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('languages/multi_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
		
	}
	
	public function oer()
	{
		$data['title'] = "CALL@Hull: Open Educational Resources (OER)";
		$data['heading'] = "Open Educational Resources (OER)"; 		
		$data['description'] = "Open Educational Resources for language teaching and learning ";
		$data['keywords'] = "oer, call, open educational resources, languages, creative commons";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "OER"; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('languages/oer_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}	
	
	public function internet()
	{
		$data['title'] = "CALL@Hull: Internet- and Technology-enhanced language learning";
		$data['heading'] = "Internet- and Technology-enhanced language learning"; 		
		$data['description'] = "Internet- and Technology-enhanced learning resources for language teachers and learners";
		$data['keywords'] = "CALL, TELL, OER, MOOC";
		$data['active_topnav'] = ""; 
		$data['active_leftnav'] = "Internet"; 
		$data['active_submenu'] = ""; 
		$template['content'] = $this -> load -> view('languages/internet_view', $data, TRUE);
		$this -> load -> view('template2_view', $template);
	}	
	
	

} //end class	
?>
