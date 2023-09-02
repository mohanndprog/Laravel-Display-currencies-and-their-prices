<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conis;
class HomeController extends Controller
{
    public function index()
    {
        // $data['blogs'] = Blog::select('id' , 'category', 'cover_img', 'detelis_img' ,'titel' , 'short_description'  , 'description')
        // ->orderBy('id' , 'desc')
        // ->take(3)]
        // ->with($data)
        // ->get();
        // $data['conis'] = Conis::select('id', 'dollars_shekels_sale' , 'dollars_shekels_buying' ,'dinar_shekel_sale' , 'dinar_shekel_buying' , 'dollars_dinars_sale'  ,'dollars_dinars_buying' , 'euro_shekel_sale' ,'euro_shekel_buying', 'created_at')->orderBy('id', 'DESC')->get();
        $data['coinses'] = Conis::first();
        return view('frontend.index')->with($data);
    }
}
