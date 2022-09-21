<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\product;

class mycontroller extends Controller
{
    function insert(Request $req){
    	$name = $req->get('pname');
    	$price = $req->get('pprice');
    	$image=$req->file('image')->getClientOriginalName();
    	//move uploaded files
    	$req->image->move(public_path('images'),$image);
      //return $req->input();
    $prod =new product();
    $prod->Pname =$name;
    $prod->Pprice=$price;
    $prod->image=$image;
    $prod->save();
    return redirect('/');
    }
    function readdata(){
    	$pdata = product::all();
    	return view('insertRead',['data'=>$pdata]);
    }
function updateordelete(Request $req){
	$id =$req->get('id');
	$name= $req->get('name');
	$price=$req->get('price');
	if($req->get('update') == 'Update'){
		return view('updateview',['id'=>$id,'pname'=>$name,'pprice'=>$price]);
	}
	else{
		$prod = product::find($id);
		$prod->delete();
	}
	return redirect('/');

}
function update(Request $req){
	$ID=$req->get('id');
	$name= $req->get('pname');
	$price=$req->get('pprice');
	$prod = product::find($ID);
	 //echo("$prod");
	$prod->pname = $name;
	$prod->pprice = $price;
	$prod->save();
	return redirect('/');

}
}
