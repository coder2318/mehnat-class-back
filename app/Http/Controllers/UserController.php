<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Mehnat\User\Entities\User;
use Mehnat\User\Services\UserService;
use Mehnat\User\Repositories\UserRepository;

class UserController extends Controller
{
    private $usersClass;
    private $userService;
    private $userRepository;

    public function __construct()
    {
        $this->usersClass = User::class;
        $this->userService = new UserService;
        $this->userRepository = new UserRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->usersClass::query();

        $users = $this->userService->filter($users);
        $users = $this->userService->sort($users);
        // get users
        $users = $this->userRepository->getAll($users);
        
        return response()->json($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = $this->userRepository->create($request);
        $profile = $this->userProfileRepository->create($user);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
