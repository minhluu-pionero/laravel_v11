<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;

class HomeController
{
    public function __construct(protected UserRepository $userRepository)
    {
    }

    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        $this->userRepository->getUser();
        return view('about');
    }
}
