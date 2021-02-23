<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function storeContact(Request $request)
    {
        $validate = $request->validate([
            'name'  => 'required|min:5|max:100',
            'email' => 'required|max:255',
            'text'  => 'required',
        ]);
        $validate['type'] = 'Обратная связь';

        session()->flash('success', 'Ваше сообщение успешно отправленно.В ближайшее время с Вами свяжется наш Сотрудник');

        Feedback::create($validate);

        return redirect()->back();
    }

    public function storeOrder(Request $request)
    {
        $validate = $request->validate([
            'name'  => 'required|min:5|max:100',
            'email' => 'required|max:255',
            'tel'  => 'required',
            'text'  => 'required',
        ]);
        $validate['type'] = 'Заказ на ремонт';

        session()->flash('success', 'Ваше сообщение успешно отправленно.В ближайшее время с Вами свяжется наш Сотрудник');

        Feedback::create($validate);

        return redirect()->back();
    }

    public function storeTel(Request $request)
    {
        $validate = $request->validate([
            'name'  => 'required|min:5|max:100',
            'tel'  => 'required',
        ]);
        $validate['type'] = 'Заказ на звонок';

        session()->flash('success', 'Ваше сообщение успешно отправленно.В ближайшее время с Вами свяжется наш Сотрудник');

        Feedback::create($validate);

        return redirect()->back();
    }
}
