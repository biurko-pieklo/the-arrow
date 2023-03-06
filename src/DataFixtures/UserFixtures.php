<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setLogin('admin');
        $user->setPassword('admin');
        $user->setDisplayName('The Administrator');

        $post = new Post();
        $post->setContent('Hello World');
        $post->setAuthor($user);
        $post->setLikes(0);

        $manager->persist($user);
        $manager->persist($post);

        $manager->flush();
    }
}
