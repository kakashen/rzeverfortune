<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  private $product;
  private $banner;

  public function __construct(Product $product, Banner $banner)
  {
    $this->product = $product;
    $this->banner = $banner;

  }

  public function index()
  {
    $products = $this->product->get();
    $banners = $this->banner->orderBy('sort', 'desc')->get();
    //dd($banners);
    //dd($products);
    return view('index',compact('products','banners'));
  }
}
