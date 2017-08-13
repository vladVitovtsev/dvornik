<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Events\Frontend\Auth\UserRegistered;
use App\Models\Order;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\Frontend\Auth\RegisterRequest;
use App\Repositories\Frontend\Access\User\UserRepository;

class RamkaController extends Controller
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $user;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        // Where to redirect users after registering
        $this->redirectTo = route(homeRoute());

        $this->user = $user;
    }

    public function index()
    {
        return view('frontend.my-ramka.index');
    }

    public function buy(RegisterRequest $request)
    {
        if(!empty($request->input('id'))) {
            $user = User::find($request->input('id'));
        }else {

            $user = $this->user->create($request->only('first_name', 'last_name', 'email', 'phone', 'password'));
            event(new UserRegistered($user));

        }

        $order = new Order();
        $order->user_id = $user->id;
        $order->products = $request->input('recipient');
        $order->color = $request->input('color');
        $order->count = $request->input('count');
        $order->save();

        return redirect($this->redirectPath())->withFlashSuccess(
            $user->first_name
            . ", Поздравлем! Ваш заказ принят. В ближайшее время с Вами свяжется наш Менеджер."
            . " Хорошего дня!"
        );
    }
}
