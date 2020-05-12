<?php


namespace App\DataFixtures;



use App\Entity\Role;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture

{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;
    /**
     * @var \Faker\Factory
     */
    private $faker;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->faker = \Faker\Factory::create();
    }

    public function load(ObjectManager $manager)
    {
        $this->loadUsers($manager);
    }


    public function loadUsers(ObjectManager $manager)
    {
        $adminRole = new Role();
        $adminRole->setTitre('ROLE_ADMIN');
        $manager->persist($adminRole);
        $adminUser = new Utilisateur();
        $adminUser->setNom('mobiliteA')
            ->setEmail('mobiliteA@gmail.com')
            ->setPrenom('mobiliteA')
            ->setPassword(
                $this->passwordEncoder->encodePassword(
                    $adminUser,
                    'password'
                )
            )
            ->addUserRole($adminRole);
        $manager->persist($adminUser);
        $Utilisateur = new Utilisateur();
        $Utilisateur->setNom('Contact1')
            ->setEmail('Contact1@gmail.com')
            ->setPrenom('Contact1')
            ->setPassword(
                $this->passwordEncoder->encodePassword(
                    $Utilisateur,
                    'Contact123'
                )
            );

        $manager->persist($Utilisateur);
        $manager->flush();
    }
}
