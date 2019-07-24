<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(){
        $categories=Category::where('publication_status',1)->get();
        $brands=Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
    public function saveProductInfo(Request $request){
       $productImage = $request->file('product_image');
       $imageName=$productImage->getClientOriginalName();
       $directory= 'product-images/';

        $imgUrl=$directory.$imageName;
        Image::make($productImage)->resize(250,200)->save($imgUrl);

       $product =new Product();
       $product->category_id=$request->category_id;
       $product->brand_id=$request->brand_id;
       $product->product_name=$request->product_name;
       $product->product_code=$request->product_code;
       $product->product_price=$request->product_price;
       $product->product_quantity=$request->product_quantity;
       $product->long_description=$request->long_description;
       $product->short_description=$request->short_description;
       $product->product_image=$imgUrl;
       $product->publication_status=$request->publication_status;
       $product->save();

       return redirect('/add-product')->with('message','product Info save successfully');

    }
    public function manageProductInfo(){
        $products=DB::table('products')
            ->join('categories','products.category_id','=','categories.id')
            ->join('brands','products.brand_id','=','brands.id')
            ->select('products.*','categories.category_name','brands.brand_name')
            ->get();

        return view('admin.product.manage-product',['products'=>$products]);
    }
    public function viewProductInfo($id){

        $product=DB::table('products')
            ->join('categories','products.category_id','=','categories.id')
            ->join('brands','products.brand_id','=','brands.id')
            ->select('products.*','categories.category_name','brands.brand_name')
            ->where('products.id',$id)
            ->first();

        return view('admin.product.view-product',['product'=>$product]);

 }
    public function unpublishProductInfo($id){
        $productById=Product::find($id);
        $productById->publication_status=0;
        $productById->save();

        return redirect('manage-product')->with('message','Product Info Update successfully');
    }

    public function publishProductInfo($id){
        $productById=Product::find($id);
        $productById->publication_status=1;
        $productById->save();

        return redirect('manage-product')->with('message','Product Info Update Successfully');

    }
    public function editProductInfo($id){
        $product=Product::find($id);
        $categories=Category::where('publication_status',1)->get();
        $brands=Brand::where('publication_status',1)->get();

        return view('admin.product.edit-product',[
            'product'=>$product,
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
    public function updateProductInfo(Request $request){

        $product_image=$request->file('product_image');
        if($product_image){
           $product=Product::find($request->product_id);
           unlink($product->product_image);

           $productImage=$request->file('product_image');
           $imageName=$product_image->getClientOriginalName();
           $directory='product-images/';
           $imageUrl=$directory.$imageName;
           Image::make($productImage)->resize(500,300)->save($imageUrl);


            $product->category_id=$request->category_id;
            $product->brand_id=$request->brand_id;
            $product->product_name=$request->product_name;
            $product->product_code=$request->product_code;
            $product->product_price=$request->product_price;
            $product->product_quantity=$request->product_quantity;
            $product->long_description=$request->long_description;
            $product->short_description=$request->short_description;
            $product->product_image=$imageUrl;
            $product->publication_status=$request->publication_status;
            $product->save();

        }
        else{
            $product=Product::find($request->product_id);

            $product->category_id=$request->category_id;
            $product->brand_id=$request->brand_id;
            $product->product_name=$request->product_name;
            $product->product_code=$request->product_code;
            $product->product_price=$request->product_price;
            $product->product_quantity=$request->product_quantity;
            $product->long_description=$request->long_description;
            $product->short_description=$request->short_description;
            $product->publication_status=$request->publication_status;
            $product->save();

        }

        return redirect('manage-product')->with('message','Product Info Update Sucessfully');
    }
    public function delateProductInfo($id){
        //delete
        $productById=Product::find($id);
        unlink($productById->product_image);
        $productById->delete();
        return redirect('manage-product')->with('message','Product Delete Sucessfully');
    }

}

