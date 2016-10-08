<?php 

namespace Musee\BilletterieBundle\Tests\Services;
use Musee\BilletterieBundle\Services\Prix;

class PrixTest extends \PHPUnit_Framework_TestCase
{
	
   public function testcalculeAge() {
		$prix = $this->container->get('musee_billetterie.prix');
        $calcul=$prix->calculeAge('10-03-1990', '07-10-2016');
		$this->assertEquals('26', $calcul);
	
    }	
	
	
	
	
}

<?php



 