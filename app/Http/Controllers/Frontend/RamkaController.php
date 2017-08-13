<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Models\Access\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RamkaController extends Controller
{
    public function index()
    {
        return view('frontend.my-ramka.index');
    }

    public function buy(RegisterRequest $request)
    {
        if(empty($request->input('id'))) {
            $client = User::find($request->input('id'));
        }else {

            if (config('access.users.confirm_email') || config('access.users.requires_approval')) {
                $user = $this->user->create($request->only('first_name', 'last_name', 'email', 'password'));
                event(new UserRegistered($user));

                return redirect($this->redirectPath())->withFlashSuccess(
                    config('access.users.requires_approval') ?
                        trans('exceptions.frontend.auth.confirmation.created_pending') :
                        trans('exceptions.frontend.auth.confirmation.created_confirm')
                );
            } else {
                access()->login($this->user->create($request->only('first_name', 'last_name', 'email', 'password')));
                event(new UserRegistered(access()->user()));

                return redirect($this->redirectPath());
            }
        }
    }
}
