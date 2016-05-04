<?php

namespace DefiBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use DefiBundle\Entity\Sport;

class SportsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $sport1 = new Sport();
        $sport1->setNomSport('Football');
        $manager->persist($sport1);
        $manager->flush();


        $sport2 = new Sport();
        $sport2->setNomSport('Tennis');
        $manager->persist($sport2);
        $manager->flush();


        $sport3 = new Sport();
        $sport3->setNomSport('Tennis de Table');
        $manager->persist($sport3);
        $manager->flush();


        $sport4 = new Sport();
        $sport4->setNomSport('Basketball');
        $manager->persist($sport4);
        $manager->flush();


        $sport5 = new Sport();
        $sport5->setNomSport('HandBall');
        $manager->persist($sport5);
        $manager->flush();


        $sport6 = new Sport();
        $sport6->setNomSport('Squash');
        $manager->persist($sport6);
        $manager->flush();


        $sport7 = new Sport();
        $sport7->setNomSport('Rugby');
        $manager->persist($sport7);
        $manager->flush();


        $sport8 = new Sport();
        $sport8->setNomSport('Volley-Ball');
        $manager->persist($sport8);
        $manager->flush();

        $this->addReference('Football', $sport1);
        $this->addReference('Tennis', $sport2);
        $this->addReference('Tennis de Table', $sport3);
        $this->addReference('Basketball', $sport4);
        $this->addReference('HandBall', $sport5);
        $this->addReference('Squash', $sport6);
        $this->addReference('Rugby', $sport7);
        $this->addReference('Volley-Ball', $sport8);
    }

    public function getOrder()
    {
        return 1; // l'ordre dans lequel les fichiers sont chargés
    }
}