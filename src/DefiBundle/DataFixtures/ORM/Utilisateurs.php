<?php

namespace DefiBundle\DataFixtures\ORM;

use DefiBundle\Entity\Sport;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use DefiBundle\Entity\Utilisateurs;

class UtilisateursData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $utilisateur1 = new Utilisateurs();
        $utilisateur1->setUsername('admin');
        $utilisateur1->setUsernameCanonical('admin');
        $utilisateur1->setEmail('admin@gmail.com');
        $utilisateur1->setEmailCanonical('admin@gmail.com');
        $utilisateur1->setEnabled(1);
        $utilisateur1->setPassword('admin');
        $utilisateur1->setLocked(0);
        $utilisateur1->setExpired(0);
        $utilisateur1->setCredentialsExpired(0);
        $utilisateur1->setPseudo('Outer');
        $utilisateur1->setSexe('h');


        $manager->persist($utilisateur1);
        $manager->flush();
    }

    public function getOrder()
    {
        return 2; // l'ordre dans lequel les fichiers sont chargés
    }
}