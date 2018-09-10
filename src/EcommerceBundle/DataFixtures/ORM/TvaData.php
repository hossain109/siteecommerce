<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;;
use EcommerceBundle\Entity\Tva;


/**
 * Description of ProduitsData
 *
 * @author sohrab
 */
class TvaData extends AbstractFixture implements OrderedFixtureInterface{
    //put your code here

    public function load(ObjectManager $manager) {
        
        $tva1 = new Tva();
        $tva1->setMultiplicate(".98");
        $tva1->setValeur("20%");
        $tva1->setNom("0");
        
        $manager->persist($tva1);
                
        $tva2 = new Tva();
        $tva2->setMultiplicate(".672");
        $tva2->setValeur("1.75%");
        $tva2->setNom("1");
        
        $manager->persist($tva1);
        
        $this->addReference('tva1', $tva1);
        $this->addReference("tva2", $tva2);
        
        $manager->flush();
        
    }
    
    
    public function getOrder(){
        return 3;
    }


}
