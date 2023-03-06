<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Manager;


class AuthorizationController extends Controller
{
    public static function index(): View
    {
        return view('authorization');
    }

    public function store(): RedirectResponse
    {
        $this->validate(request(), [
            'username' => 'required',
            'password' => 'required',
        ],
            [
            'required' => 'Это поле является обязательным',
        ]);

        $inpUsername = request()->input('username');
        $inpPassword = request()->input('password');

        $dbManager = Manager::whereRaw('username = ? and password = ?', [$inpUsername, $inpPassword])->value('id');

        if($dbManager !== null)
        {
            session(['name' => $inpUsername]);
            return redirect('/home');
        }

        return redirect('/manager');

    }
}
