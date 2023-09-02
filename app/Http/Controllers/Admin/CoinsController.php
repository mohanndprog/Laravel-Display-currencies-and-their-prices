<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conis;
class CoinsController extends Controller
{
    public function index()
    {
        $data['coinses'] = Conis::first();
//  $data['coins'] = Conis::select('id', 'dollars_shekels_sale' , 'dollars_shekels_buying' ,'dinar_shekel_sale'  ,'dinar_shekel_buying'
//  ,'dollars_dinars_sale','dollars_dinars_buying','euro_shekel_sale' ,'euro_shekel_buying' )->get();

        return view('admin.coins.index')->with($data);

    }

    // public function create()
    // {
    //     return view('admin.faqs.create');
    // }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([

    //         'question' => 'required|string',
    //         'answer' => 'required|string',

    //     ]);

    //     Faq::create($data);
    //     return redirect(route('admin.faqs.index'));

    // }


    public function edit($id)
    {
        $data['coinses'] = Conis::findOrFail($id);
        return view('admin.coins.index')->with($data);
    }


    public function update(Request $request)
    {
        $data = $request->validate([
            'dollars_shekels_sale' => 'required|string',
            'dollars_shekels_buying' => 'required|string',
            'dinar_shekel_sale' => 'required|string',
            'dinar_shekel_buying' => 'required|string',
            'dollars_dinars_sale' => 'required|string',
            'dollars_dinars_buying' => 'required|string',
            'euro_shekel_sale' => 'required|string',
            'euro_shekel_buying' => 'required|string',



        ]);
        // $old_name =Faq::findOrFail($request->id)->image;


        Conis::findOrFail($request->id)->update($data);
        return redirect(route('admin.coins.index'));

    }



}
