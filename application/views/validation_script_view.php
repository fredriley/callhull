<?php
/**
* Form validation script
* The JS below is included after the footer view in the 'suggest a site' and 'contact' forms, 
* to validate form entry. Additional validation and security is handled by
* the Techtite FormMail script server-side
* @author Fred Riley <fred.riley@gmail.com>
* @package CALL@Hull
* @version 1.0

*/

?>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">

 $(document).ready(function()
 {

	// Validation code
	// ---------------
	// Documentation at http://docs.jquery.com/Plugins/Validation
	$("#frm_email").validate();	
	
 }); // end document ready
</script>