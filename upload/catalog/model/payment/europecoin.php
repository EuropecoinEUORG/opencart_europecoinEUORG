<?php 
/*
Copyright (c) 2013 John Atkinson (jga) 2015 Matthias Klees
*/

class ModelPaymentEuropeCoin extends Model {
  	public function getMethod($address) {
		$this->load->language('payment/europecoin');
		
		if ($this->config->get('europecoin_status')) {
        	$status = TRUE;
		} else {
			$status = FALSE;
		}
		
		$method_data = array();
	
		if ($status) {  
      		$method_data = array( 
        		'code'         	=> 'europecoin',
        		'title'      	=> $this->language->get('text_title'),
			'sort_order' 	=> $this->config->get('europecoin_sort_order'),
      		);
    	}
   
    	return $method_data;
  	}
}
?>
