<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function success(): View
    {
        return view('success');
    }

    public function store(): RedirectResponse
    {

        $this->validate(request(), [
            'email' => 'required|email:rfc,dns',
            'name' => 'required|alpha',
            'lastName' => 'required|alpha',
            'phone' => 'required|digits:11'
        ],
            [
            'email' => 'Неверно указан email(Прим.: name@mail.ru)',
            'required' => 'Это поле является обязательным',
            'alpha' => 'Это поле должны содержать только буквы',
            'digits' => 'Номер телефона должен содержать :digits цифр(Прим.: 80291234567)'
        ]);

        Client::create(request()->all());

        return redirect('/success');
    }

}
