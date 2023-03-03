<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Product extends Controller
{
    public function baskets() {
        $id_user=Auth::user()->id;
       $p=Basket::where("user_id",$id_user)->get();
      // $p[0]->products->all();
        Auth::user()->id;
       return view('basket', compact('p'));
    }
    public function products($id){
            $test=Basket::create([
                'user_id'=> Auth::user()->id,
                'product_id'=>$id,
                'quantity'=>1,
            ]);
            return redirect('/katalog/1');
    }
    public function slider($id="id", $sort="desc"){
        $a=Basket::orderby($id,$sort)->limit(5)->get();
        return view('about',['a' => $a]);
    }
    public function deletet($id){
        Basket::find($id)->delete();
        return redirect()->route('delete')->with('Товар был удален');
    }

}
