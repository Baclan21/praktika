<?php

namespace App\Http\Controllers;
use App\Models\Basket;
use App\Models\Producte as pr;
use App\Http\Requests\Postrequest;
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
        return redirect(route('test'))->with('success','Товар был удален');
    }
    public function store(Request $req){
        $k=$req->file('img');

        $filename=$k->move(public_path('uploads'), $k->getClientOriginalName());
        pr::create([
            'name'=> $req->input('name'),
        'img'=>'/public/uploads/'.$k->getClientOriginalName(),
            'price'=>$req->input('price'),
            'quantity'=>$req->input('quantity'),
            'description'=>$req->input('description'),
            'kategory'=>$req->input('kategory'),
        ]);
        return view('additem');

       }
       public function addstore(){

        return view('additem');
       }
    }
