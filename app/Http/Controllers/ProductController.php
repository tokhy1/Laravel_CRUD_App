<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->get(['id', 'product_name', 'product_description', 'product_price']);
        return view('products.select_products', ["products" => $products]);
    }

    public function create()
    {
        return view('products.add_product');
    }

    public function insert(Request $request)
    {
        DB::table('products')->insert([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
        ]);

        return redirect('/products')->with('success', 'Data inserted successfully!');

    }

    public function delete($id)
    {
        DB::table('products')->where('id', $id)->delete();
        return redirect('/products')->with('success', 'Data deleted successfully!');
    }

    public function showUpdate($id)
    {
        // get the first result of product data from the database
        $product = DB::table('products')->where('id', $id)->first();
        return view('products.update_product', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        DB::table('products')->where('id', $id)->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'product_price' => $request->product_price,
        ]);

        return redirect('/products')->with('success', 'Product updated successfully!');
    }
}
