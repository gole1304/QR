<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('public.products', ['products' => $products]);
    }
    public function show_all_products(Request $request)
    {
        $products = Product::all();
        return view('private.edit_product', ['products' => $products]);
    }
    public function show_delete_form($id)
    {
        $item = Product::find($id);
        return view('private.deleteForm', ['item' => $item]);
    }
    public function remove_product(Request $request)
    {
        Product::destroy($request->id);
        return redirect('home/all-products');
    }
    public function show_update_form($id)
    {
        $item = Product::find($id);
        return view('private.updateForm', ['item' => $item]);
    }
    public function update_product(Request $request)
    {
        $validated = $request->validate(
            [
                'naziv' => 'required|max:100',
                'kolicina' => 'numeric',
                'cijena' => 'numeric',
                'kolicina_2' => 'numeric',
                'cijena_2' => 'numeric',
                'brend' => 'required'
            ],
            $messages = [
                'numeric' => ':attribute mora biti broj',
                'required' => ':attribute je obavezno polje'
            ]
        );
        Product::where(['id' => $request->id])->update([
            'title' => $request->naziv,
            'brend' => $request->brend,
            'size' => $request->kolicina,
            'price' => $request->cijena,
            'size2' => $request->kolicina_2,
            'price2' => $request->cijena_2
        ]);
        return redirect('home/all-products');
    }
    public function show_add_form(Request $request)
    {
        return view('private.addProduct');
    }
    public function add_product(Request $request)
    {
        $validated = $request->validate(
            [
                'naziv' => 'required|max:100',
                'kolicina' => 'numeric',
                'cijena' => 'numeric',
                'brend' => 'required',
                'kolicina_2' => 'numeric',
                'cijena_2' => 'numeric',
                'slika' => 'required|mimes:png,jpg'
            ],
            $messages = [
                'numeric' => ':attribute mora biti broj',
                'required' => ':attribute je obavezno polje',
            ]
        );
        if ($request->hasFile('slika')) {
            $img = $request->file('slika');
            $img_name = time() . $img->getClientOriginalName();
            $img->move(public_path('assets'), $img_name);
        }
        Product::create([
            'title' => $request->naziv,
            'brend' => $request->brend,
            'size' => $request->kolicina,
            'price' => $request->cijena,
            'size2' => $request->kolicina_2,
            'price2' => $request->cijena_2,
            'image' => (isset($img_name)) ? $img_name : null
        ]);
        return redirect('home/add-new')->with('success', 'Uspješno ste dodali proizvod!');;
    }
}
