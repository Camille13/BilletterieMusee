<?php

// src/Musee/BilletterieBundle/Services/Stripe.php


namespace Musee\BilletterieBundle\Services;


class Stripe

{
    /*
     * @var string
     */
  private $secretKey="sk_test_81g2vxy1Lqr9ZU1BRrTroBPt";
 
  
  
  /**
     * Get sercretKey
     *
     * @return string
     */
 
public function getSecretKey()
{
 return $this->secretKey;   
}


public function __construct(){
    
\Stripe\Stripe::setApiKey($this->getSecretKey());
}

/*
 * @param string $token
 * @param string $emailStripe
 * @param string $montant
 */
    
public function paiementStripe ($token, $emailStripe, $montant)
{
    try {

       $customer = \Stripe\Customer::create(array(
      'email' => $emailStripe,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $montant.'00',
      'currency' => 'eur'
  ));   
        
        
} catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
    

}
    
    
    
    
}