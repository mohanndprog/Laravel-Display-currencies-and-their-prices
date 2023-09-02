<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conis;
use App\Models\Massage;
class HomepageController extends Controller
{
    public function index()
    {

        // $data['conis'] = Conis::select('id', 'dollars_shekels_sale' , 'dollars_shekels_buying' ,'dinar_shekel_sale' , 'dinar_shekel_buying' , 'dollars_dinars_sale'  ,'dollars_dinars_buying' , 'euro_shekel_sale' ,'euro_shekel_buying', 'created_at')->orderBy('id', 'DESC')->get();
        $data['messages'] = Massage::select('id', 'first_name' , 'created_at')->orderBy('id', 'DESC')->get();
        // $data['blogs'] = Blog::select('id' , 'category', 'cover_img', 'detelis_img' ,'titel' , 'short_description'  , 'description')->orderBy('id', 'DESC')->get();

        $data['messages_count'] = Massage::count();
        // $data['newsletter_count'] = newsletter::count();
        // $data['blogs_count'] = Blog::count();
        // ->with($data)
        $data['coinses'] = Conis::first();
        return view('admin.index')->with($data);
    }
}
