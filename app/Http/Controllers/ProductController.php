<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller  {
    public function index() {
        $products = Product::orderBy( 'id', 'desc' )->get();
        $total = Product::count();
        return view( 'admin.product.home', compact( 'products', 'total' ) );
    }
    //aman

    public function create() {
        return view( 'admin.product.create' );
    }
    //aman

    public function save( Request $request ) {
        $validation = $request->validate( [
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
        ] );

        $data = Product::create( $validation );
        if ( $data ) {
            session()->flash( 'success', 'Product Add Successfully' );
            return redirect( route( 'admin.products' ) );
        } else {
            session()->flash( 'error', 'Some problem occurred' );
            return redirect( route( 'admin.products.create' ) );
        }
    }
    //aman

    public function edit( $id ) {
        $products = Product::findOrFail( $id );
        return view( 'admin.product.update', compact( 'products' ) );
    }
    //aman

    public function update( Request $request, $id ) {
        $request->validate( [
            'title' => 'required',
            'category' => 'required',
            'price' => 'required',
        ] );
        $products = Product::findOrFail( $id );
        $products->title = $request->title;
        $products->category = $request->category;
        $products->price = $request->price;
        $products->save();

        if ( $products ) {
            session()->flash( 'success', 'Product Successfully Updated' );
            return redirect( route( 'admin.products' ) );
        } else {
            session()->flash( 'error', 'Some Problem Occurred' );
            return redirect( route( 'admin.products.edit', $id ) );
        }
    }
    //belom bisa muncul data sebelumnya

    public function delete( $id ) {
        $products = Product::findOrFail( $id )->delete();
        if ( $products ) {
            session()->flash( 'success', 'Product Successfully Deleted' );
            return redirect( route( 'admin.products' ) );
        } else {
            session()->flash( 'error', 'Product Deletion Failed' );
            return redirect( route( 'admin.products' ) );
        }
    }
}
