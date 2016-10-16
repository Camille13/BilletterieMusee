<?php 
describe('Test Billetterie', function()   {
    
    it('Calcule Age', function() {
    expect(Musee\BilletterieBundle\Services\Prix::calculeAge('1990-03-10', '2016-10-13'))->toBe(26);
    });
    
    it('Ferme le mardi et dimanche', function() {
    expect(\Musee\BilletterieBundle\Services\Validator\DateReservationValidator::jourOff('2016-10-11'))->toBe(true);
    });
    
      it('Ferme le 01 janvier 2017', function() {
    expect(\Musee\BilletterieBundle\Services\Validator\DateReservationValidator::jourFerie('2017-01-01'))->toBe(true);
    });
    
    it('Ferie ou jour off', function() {
    expect(\Musee\BilletterieBundle\Services\Validator\DateReservationValidator::noReservable('2017-01-01'))->toBe(true);
    });
    
    it('Cleaner', function() {
    expect(Musee\BilletterieBundle\Services\Clean::paiementAnnule())->toBe(0);
    });
});

?>