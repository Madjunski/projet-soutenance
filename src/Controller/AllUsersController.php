<?php

namespace App\Controller;

use App\Repository\UsersRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AllUsersController extends AbstractController
{
    /**
     * @Route("/all-users", name="all_users")
     */
    public function index(UsersRepository $usersRepository): Response
    {
        // $user = $usersRepository->find($id);
        // $skills= $user->getSkills();
        $users = $usersRepository->findAll();
        return $this->render('all_users/all-users.html.twig', [
            'users' => $users
        ]);
    }
}