<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Categories;
/**
 * Description of CategoriesData
 *
 * @author sohrab
 */
class CategoriesData extends AbstractFixture implements OrderedFixtureInterface {
    //put your code here
    public function load(ObjectManager $manager) {
       
        $categorie1 = new Categories();
        $categorie1->setNom("Veste");
        $categorie1->setImage($this->getReference("media1"));
        
        $manager->persist($categorie1);
        
        $categorie2 = new Categories();
        $categorie2->setNom("Pantalon");
        $categorie2->setImage($this->getReference("media4"));
        
        $manager->persist($categorie2);
        
        $manager->flush();
        
        $this->addReference('categorie1', $categorie1);
        $this->addReference('categorie2', $categorie2);
        
    }


    public function getOrder(){
        return 2;
    }
}
