<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Massage;
use Illuminate\Support\Facades\Session;
class MessageController extends Controller
{
    public function contact(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'email' => 'required|string|max:191',
            'phone' => 'required|string|max:191',
            'massage' => 'required|string',

        ]);

        Massage::create($data);

        Session::flash('statuscode' , 'success');
        return redirect()->back()->with('status', 'Form submitted successfully!');
    }

}
