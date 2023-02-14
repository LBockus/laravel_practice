<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Managers\FileManager;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(protected FileManager $fileManager)
    {
    }

    public function index()
    {
        $products = Product::query()->with(['category', 'status'])->get();
        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        // Tikriname, ar užklausa turi failą ir ar jis yra validus paveikslėlio failas
        $file = $this->fileManager->saveFile($request, 'foto','img/products');
        // Ši kodo dalis atsakinga uz paveiksliuko isaugojima produkto lenteleje
        $product->image = $file->url;
        $product->save();

        return redirect()->route('products.show', $product);
    }

    public
    function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public
    function showBySlug(Product $product)
    {
        return view('product.show', ['product' => $product]);
    }

    public
    function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public
    function update(Request $request, Product $product)
    {
        $product->update($request->all());

        // Paimti sena paveiksla ir istrinti ji is serverio
        // $this->fileManager->removeFile($product->image, ??, ??);
        $file = $this->fileManager->saveFile($request, 'foto','img/products');
        // Ši kodo dalis atsakinga uz paveiksliuko isaugojima produkto lenteleje
        $product->image = $file->url;
        $product->save();

        return redirect()->route('products.show', $product);
    }

    public
    function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
