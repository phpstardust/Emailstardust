<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');




class EmailstardustsController extends AppController {
	
	public $uses = array();
	
	public $components = array('Session','Cookie','RequestHandler');
	
	public $helpers = array('Html', 'Form', 'Session', 'Emailstardust.Emailstardust');

	
	
	
	public function sendmail() {
		
		$Email = new CakeEmail();
		$Email->template('Emailstardust.stardust', 'Emailstardust.stardustlayout');
		$Email->emailFormat('html');
		$Email->to(Configure::read('Emailstardust.to'));
		$Email->from(array(Configure::read('Emailstardust.from.email') => Configure::read('Emailstardust.from.name')));
		$Email->subject(Configure::read('Emailstardust.subject'));
		if ($Email->send()) $this->redirect(Configure::read('Emailstardust.sentRedirect'));
		
		exit;
		
	}
	
	
	
	
}

?>
