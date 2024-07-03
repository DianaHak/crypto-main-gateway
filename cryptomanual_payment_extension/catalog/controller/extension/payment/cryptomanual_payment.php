<?php
  /**
  * Webkul Software.
  *
  * @category Webkul
  * @package Opencart Module Tutorial
  * @author Webkul
  * @license https://store.webkul.com/license.html
  */
 
  class ControllerExtensionPaymentCryptoManualPayment extends Controller {
    public function index() {
        $data = array();
        $this->load->language('extension/payment/cryptomanual_payment');

           return $this->load->view('extension/payment/cryptomanual_payment', $data);
    }

    public function send() {
            $json = array();
            if(isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'cryptomanual_payment') {
            $this->load->language('extension/payment/cryptomanual_payment');
    
            $this->load->model('checkout/order');
    
            $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_cryptomanual_payment_order_status_id'),'', true);
            
            $json['redirect'] = $this->url->link('checkout/success');
            }
            
            $this->response->addHeader('Content-Type: application/json');
            $this->response->setOutput(json_encode($json));        
        }
        
    }