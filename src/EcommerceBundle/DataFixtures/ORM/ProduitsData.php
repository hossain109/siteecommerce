<?php

namespace EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EcommerceBundle\Entity\Produits;


/**
 * Description of ProduitsData
 *
 * @author sohrab
 */
class ProduitsData extends AbstractFixture implements OrderedFixtureInterface{
    //put your code here

    public function load(ObjectManager $manager) {
        
        $produit1 = new Produits();
        $produit1->setNom("Pantalon skinny uni poches zippées");
        $produit1->setDescription("Les femmes composent leur tenue quotidienne à partir de ce pantalon skinny aussi confortable qu'élégant. Sobre, ce modèle Mosquitos sert de base à nos hauts préférés, des plus classiques aux plus colorés. Son détail mode ? Des poches zippées sous la taille.");
        $produit1->setPrix("17");
        $produit1->setDisponible("1");
        $produit1->setCategorie($this->getReference('categorie1'));
        $produit1->setImage($this->getReference("media1"));
        $produit1->setTva($this->getReference('tva1'));

        
        $manager->persist($produit1);
        
        $produit2 = new Produits();
        $produit2->setNom("Pantalon skinny uni");
        $produit2->setDescription("- Pantalon pour femme- LH- Coupe skinny- Uni- 2 poches cavalières devant- 2 poches plaquées au dos- Taille élastique ");
        $produit2->setPrix("7");
        $produit2->setDisponible("1");
        $produit2->setCategorie($this->getReference('categorie1'));
        $produit2->setImage($this->getReference("media2"));
        $produit2->setTva($this->getReference('tva1'));
        
        $manager->persist($produit2);
        
        $produit3 = new Produits();
        $produit3->setNom("Pantalon miss liberto");
        $produit3->setDescription("MISS LIBERTO Pantalon ");
        $produit3->setPrix("27");
        $produit3->setDisponible("1");
        $produit3->setCategorie($this->getReference('categorie1'));
        $produit3->setImage($this->getReference("media3"));
        $produit3->setTva($this->getReference('tva1'));
        
        $manager->persist($produit3);
        
        $produit4 = new Produits();
        $produit4->setNom("Doudoune unie cintrée");
        $produit4->setDescription("Avec cette doudoune LH, les femmes restent à l’abri du froid tout en mettant leur silhouette en valeur. Dotée d’une coupe cintrée, d’une ouverture zippée et d’une capuche, celle pièce épouse les formes du buste. Elle accompagne aussi bien les tenues casuals que les tenues plus sophistiquées. ");
        $produit4->setPrix("30");
        $produit4->setDisponible("1");
        $produit4->setCategorie($this->getReference('categorie2'));
        $produit4->setImage($this->getReference("media4"));
        $produit4->setTva($this->getReference('tva2'));
        
        $manager->persist($produit4);
        
        $produit5 = new Produits();
        $produit5->setNom("Doudoune mi-longue capuche imitation fourrur");
        $produit5->setDescription("MISS LIBERTO Doudoune mi-longue capuche imitation fourrure ");
        $produit5->setPrix("20");
        $produit5->setDisponible("0");
        $produit5->setCategorie($this->getReference('categorie2'));
        $produit5->setImage($this->getReference("media5"));
        $produit5->setTva($this->getReference('tva2'));
        
        $manager->persist($produit5);
        
        $produit6 = new Produits();
        $produit6->setNom("Parka fourrée à capuche");
        $produit6->setDescription("Doublée fourrure aux 2/3 avec une confortable capuche bordée de fausse fourrure, la parka pour femme Lady Blush garde au chaud ! Élastique à la taille, elle dispose de 2 grandes poches plaquées à rabat sur le devant. L'ouverture centrale zippée est recouverte d’une patte pressionnée pour empêcher le passage du froid ");
        $produit6->setPrix("70");
        $produit6->setDisponible("1");
        $produit6->setCategorie($this->getReference('categorie2'));
        $produit6->setImage($this->getReference("media6"));
        $produit6->setTva($this->getReference('tva2'));
        
        $manager->persist($produit6);        
        
        $manager->flush();
        
    }
    
    
    public function getOrder(){
        return 4;
    }


}
