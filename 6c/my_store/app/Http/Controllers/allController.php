<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cashier;
use App\Category;
use App\Product;
use DB;
class allController extends Controller
{
    public function index()
    {
    	$products = Product::join('cashier','cashier.id','=','product.id_cashier')
    				->join('category','category.id','=','product.id_category')
    				->select('cashier.name as cashier','product.*','category.name as category')
    				->get();
    	$categories = Category::all();
    	$cashiers = Cashier::all();
    	return view('welcome',['products' => $products,'cashiers' => $cashiers,'categories' => $categories]);
    }

    public function others()
    {
    	$categories = Category::all();
    	$cashiers = Cashier::all();

    	return view('others',['cashiers' => $cashiers,'categories' => $categories]);
    }

    public function add(Request $request)
    {
    	Product::insert($request->except('_token'));
    	return redirect()->route('home')->with(['success' => 'Product has been added']);
    }
    public function cashierAdd(Request $request)
    {
    	Cashier::insert($request->except('_token'));
    	return redirect()->route('others')->with(['success' => 'Cashier has been added']);
    }

    public function categoryAdd(Request $request)
    {
    	Category::insert($request->except('_token'));
    	return redirect()->route('others')->with(['success' => 'Category has been added']);
    }

    public function categoryEdit(Request $request)
    {
    	$category = Category::find($request->id);
    	$category->update($request->except('_token'));

    	return redirect()->route('others')->with(['success' => 'Category has been updated']);
    }

    public function cashierEdit(Request $request)
    {
    	$cashier = Cashier::find($request->id);
    	$cashier->update($request->except('_token'));

    	return redirect()->route('others')->with(['success' => 'Cashier has been updated']);
    }

    public function cashierDelete($id)
    {
    	DB::table('product')->where('id_cashier','=',$id)->delete();
    	$cashier = Cashier::find($id);
    	$cashier->delete();

    	return redirect()->route('others')->with(['success' => 'Cashier has been deleted']);
    }
    public function categoryDelete($id)
    {
    	DB::table('product')->where('id_category','=',$id)->delete();
    	$cashier = Category::find($id);
    	$cashier->delete();

    	return redirect()->route('others')->with(['success' => 'Category has been deleted']);
    }
    public function productDelete($id)
    {
    	$product = Product::find($id);
    	$product->delete();

    	return redirect()->route('home')->with(['success' => 'Product has been deleted']);
    }

}
