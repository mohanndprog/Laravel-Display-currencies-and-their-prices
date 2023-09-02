<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Massage;
class MessagesController extends Controller
{
    public function index()
    {

        $data['messages'] = Massage::select('id', 'first_name' , 'last_name' ,'phone' , 'email' , 'massage'  , 'created_at')->orderBy('id', 'DESC')->get();
        return view('admin.messages.index')->with($data);

    }



    public function delete($id)
    {

        Massage::findOrFail($id)->delete();

        return back();
    }

}
