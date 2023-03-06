<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Client;



class ManagersController extends Controller
{
    public function index(): View
    {
        $count = Client::count();
        $clients = null;
        $managerName = session()->get('name');
        if($managerName === 'managerA')
        {
            for($i = $count; $i >= 1; $i--)
            {
                if($i % 2 === 0)
                {
                    $clients[] = Client::get()->where('id', $i);
                }
            }
            return view('statements.index', compact('clients'));
        }
        elseif($managerName === 'managerB')
        {

            for($i = $count; $i >= 1; $i--)
            {
                if($i % 2 === 1)
                {
                    $clients[] = Client::get()->where('id', $i);
                }
            }
            return view('statements.index', compact('clients'));
        }
        else
        {
            return AuthorizationController::index();
        }

    }

    public function edit($id): View
    {
        $client = Client::find($id);

        return view('statements.edit', compact('client'));

    }
    public function update(): RedirectResponse
    {
        $inpId = request()->all();
        $client = Client::whereRaw('id = ?', [$inpId['id']])->get();
        foreach($client as $value)
        {
            $value->update(['comment' => $inpId['comment']]);
        }

        return redirect('/home');
    }


}
