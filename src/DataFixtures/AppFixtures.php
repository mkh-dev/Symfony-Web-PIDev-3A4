<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use App\Entity\ProdLike;
use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * Encodeur de mot de passe
     *
     * @var UserPasswordEncoderInterface
     */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        $users[] = $user;

        $user = new User();
        $user->setEmail('user@symfony.com')
            ->setPassword($this->encoder->encodePassword($user, 'password'));

        $manager->persist($user);
        $users[] = $user;

        for ($i = 0; $i < 20; $i++) {
            $user =new Users();
            $user ->setEmail($faker->email)
            -> setPassword($this->encoder->encodePassword($user, 'password'));
           $manager->persist($user);

        }

        for ($i = 0; $i < 20; $i++) {
            $post = new Post();
            $post->setTitle($faker->sentence(6))
                ->setIntroduction($faker->paragraph())
                ->setContent('<p>' . join(',', $faker->paragraphs()) . '</p>');

            $manager->persist($post);

            for ($j = 0; $j<mt_rand(0,10); $j++) {
                $like =new ProdLike();
                $like ->setProduit($produit)
                      ->setUser($faker->randomElement($users));
                $manager->persist($like);
                


            }

        }

        $manager->flush();
    }
}