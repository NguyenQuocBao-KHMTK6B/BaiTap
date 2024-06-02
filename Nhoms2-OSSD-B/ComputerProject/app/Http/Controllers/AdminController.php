<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function dash_board(){
        return view('admin.dashboard',[
            'product' => DB::table('products')->count(),
            'categories' => DB::table('categories')->count(),
            'users' => DB::table('users')->count(),
        ]);
    }

    public function adminform(){

        // Chuyển dữ liệu qua view và trả về view adminform.blade với dữ liệu sản phẩm
        return view('adminform');
    }

    public function listProduct()
    {
        $listproducts = ProductModel::paginate(8);
        return view('admin.listProduct', compact('listproducts'));
    }
    

    public function formeditProduct($id) {
        $product = ProductModel::find($id);
        
        if (!$product) {
            return redirect()->route('listProduct')->with("Note", "Sản phẩm không tồn tại");
        }
    
        return view('admin.editProduct', ['product' => $product]);
    }
    
    

    public function editProduct(Request $request) {
        // Tìm sản phẩm theo ID
        $product = ProductModel::find($request->product_id);
    
        if (!$product) {
            return redirect()->route('admin.editProduct', ['id' => $request->product_id])->with("Note", "Cập nhật không thành công");
        }
    
        // Cập nhật các thuộc tính của sản phẩm
        $product->category_id = $request->category_id;
        $product->band_id = $request->band_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;
    
        // Kiểm tra và xử lý file ảnh mới
        if ($request->hasFile('images') && $request->file('images')->isValid()) {
            $image = $request->file('images');
            $pimage = 'data:image/png;base64,' . base64_encode(file_get_contents($image->getRealPath()));
            $product->images = $pimage;
        }
    
        // Lưu sản phẩm
        $product->save();
    
        return redirect()->route('admin.editProduct', ['id' => $product->product_id])->with("Note", "Cập nhật thành công");
    }


    public function formaddProduct()
    {
        return view('admin.addProduct');
    }
    function addProduct(Request $request){
        $product = new ProductModel;
        $product->product_id = $request->product_id;
        $product->category_id = $request->category_id;
        $product->band_id = $request->band_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->description = $request->description;

        // Kiểm tra và xử lý file ảnh mới
        if ($request->hasFile('images') && $request->file('images')->isValid()) {
            $image = $request->file('images');
            $pimage = 'data:image/png;base64,' . base64_encode(file_get_contents($image->getRealPath()));
            $product->images = $pimage;
        }
        $product->save();
        return redirect('admin/addProduct')->with("Note","thêm mới thành công");
    }

    function deleteProduct($product_id){
        $product = ProductModel::where('product_id',$product_id)->first();
        $product->delete();
        return redirect('admin/listProduct')->with("Note","xóa thành công!");
    }

    ///////////////// edit user

    public function listUser()
    {
        $listusers = User::paginate(8);
        return view('admin.listUser', compact('listusers'));
    }

    public function formaddUser()
    {
        return view('admin.addUser');
    }
    function addUser(Request $request){
        $adduser = new User;
        $adduser->id = $request->id;
        $adduser->name = $request->name;
        $adduser->email = $request->email;
        $adduser->role = $request->role;
        $adduser->password = $request->password;   
        $adduser->save();
        return redirect('admin/addUser')->with("Note","thêm mới thành công");
    }
    
    
    
}
