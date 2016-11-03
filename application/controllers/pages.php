<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view( $page = 'home' )
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
	{
		// Whoops, we don't have a page for that!
		show_404();
	}

	    $page_name = strtoupper($page);
		$data['title'] = "ICTLab | $page_name";

		$this->load->view('templates/header', $data);
        $this->load->view('templates/navigation');
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer');

	}
}

?>
