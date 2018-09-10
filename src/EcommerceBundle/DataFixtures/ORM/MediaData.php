<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Media;


/**
 * Description of ProduitsData
 *
 * @author sohrab
 */
class MediaData extends AbstractFixture implements OrderedFixtureInterface{
    //put your code here

    public function load(ObjectManager $manager) {
        
        $media1 = new Media();
        $media1->setPath("img/pic1.jpg");
        $media1->setAlt("veste");
        
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath("img/pic2.jpg");
        $media2->setAlt("veste");
        
        $manager->persist($media2);
        
        $media3 = new Media();
        $media3->setPath("img/pic3.jpg");
        $media3->setAlt("veste");
        
        $manager->persist($media3);
        
        $media4 = new Media();
        $media4->setPath("img/pic4.jpg");
        $media4->setAlt("pantalon");
        
        $manager->persist($media4);
        
        $media5 = new Media();
        $media5->setPath("img/pic5.jpg");
        $media5->setAlt("pantalon");
        
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath("img/pic6.jpg");
        $media6->setAlt("pantalon");
        
        $manager->persist($media6);
        
        $manager->flush();
                
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);
        $this->addReference('media6', $media6);
    }
    
    
    public function getOrder(){
        return 1;
    }


}
