<?php

namespace App\Tests\Entity;

use App\Entity\Booking; 
use PHPUnit\Framework\TestCase;

class BookingTest extends TestCase 
{
   public function testOfBooking()
   {
        $testb = new Booking;

        $testb->setBookingnumber('1a2b3CE7');
        $testb->setEmail('emailtest@phpunit.fr');
        $testb->setVisitdate('25/05/2019');
        $testb->setTotalprice('32');

        $this->assertEquals('1a2b3CE7', $testb->getBookingnumber());
        $this->assertEquals('emailtest@phpunit.fr', $testb->getEmail());
        $this->assertEquals('25/05/2019', $testb->getVisitdate());
        $this->assertEquals('32', $testb->getTotalprice());
   }
    //    est ce que je dois parler de la collection de tickets ?
}