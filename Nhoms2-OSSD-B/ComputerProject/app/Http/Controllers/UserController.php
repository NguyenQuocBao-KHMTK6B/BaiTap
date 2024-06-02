<?php

namespace App\Http\Controllers;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\UserModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Hash;
use App\Models\BandModel;



class UserController extends Controller
{

    public function blog(){
       
        return view('blog');
    }

    public function About(){
       
        return view('About');
    }

    public function checkout(){
       
        return view('checkout');
    }

    public function contact(){
       
        return view('contact');
    }

    public function index(){
        // Lấy tất cả sản phẩm từ bảng tbl_product
        $products = ProductModel::paginate(20);

        // Chuyển dữ liệu qua view và trả về view user.home.blade.php với dữ liệu sản phẩm
        return view('user.home', ['products' => $products]);
    }

        public function shopcart()
    {
        $products = ProductModel::paginate(9);
        $categories = CategoryModel::all();
        $bands = BandModel::all();
        return view('user.shopcart', [
            'products' => $products,
            'categories' => $categories,
            'bands' => $bands,
        ]);
    }

    public function band()
    {
        $products = ProductModel::paginate(9);
        $categories = CategoryModel::all();
        $bands = BandModel::all();
        return view('user.shopcart', [
            'products' => $products,
            'categories' => $categories,
            'bands' => $bands,
        ]);
    }

    public function getbandProduct($band_id)
{
    // Truy vấn các sản phẩm thuộc bands được chọn
    $getbandProduct = ProductModel::where('band_id', $band_id)->paginate(9);

    // Truy vấn tất cả các hãng máy tính từ bảng bands
    $bands = BandModel::all();
    $categories = CategoryModel::all();

    // Trả về view với danh sách sản phẩm thuộc bands được chọn và danh sách categories
    return view('user.shopcart', ['products' => $getbandProduct, 'bands' => $bands, 'categories' => $categories]);
}


    public function categories()
    {
        $products = ProductModel::paginate(9);
        $categories = CategoryModel::all();
        $bands = BandModel::all();
        return view('user.shopcart', [
            'products' => $products,
            'categories' => $categories,
            'bands' => $bands,
        ]);
    }

    public function categoryProducts($category_id)
    {
        // Truy vấn các sản phẩm thuộc categories được chọn
        $categoryProducts = ProductModel::where('category_id', $category_id)->paginate(9);

        // Truy vấn tất cả các hãng máy tính từ bảng tbl_categories
        $categories = CategoryModel::all();
        $bands = BandModel::all();

        // Trả về view với danh sách sản phẩm thuộc categories được chọn và danh sách categories
        return view('user.shopcart', ['products' => $categoryProducts,'categories' => $categories, 'bands' => $bands]);
    }

    

    public function search(Request $request)
    {
        $categories = CategoryModel::all();
        $title = $request->input('SelectName');
        $products = ProductModel::where('title', 'like', '%' . $title . '%')->get();
        return view('user.search', [
            'products' => $products,
            'categories' => $categories,]);
    }

    public function productdetails($id)
    {
        // Tìm sản phẩm trong CSDL dựa trên ID
        $products = ProductModel::findOrFail($id);
        
        // Trả về view của trang chi tiết sản phẩm và truyền sản phẩm tìm được
        return view('user.productdetails', ['product' => $products]);
    }

    public function addCart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('user.login');
        }

        $product = ProductModel::findOrFail($id);
        $cart = session()->get('cart', []);
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "images" => $product->images,
                "name" => $product->name,
                "price" => $product->price,
                "quantity" => session()->get('quantity', 1), // Default quantity to 1 if not set in session
                "tola" => session()->get('tola', 1), // Default tola to 1 if not set in session
            ];
        }
        session()->put('cart', $cart);
        return redirect()->route('user.viewCart');
    }

    public function removeCart($id)
    {
        if (!Auth::check()) {
            return redirect()->route('user.login');
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('user.viewCart')->with('success', 'Product removed successfully');
    }


    public function viewCart()
    {
        if (!Auth::check()) {
            return redirect()->route('user.login');
        }
    
        $cart = session()->get('cart', []);
        $total = 0;
    
        foreach ($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
    
        return view('user.viewCart', compact('cart', 'total'));
    }
    


    public function showsignUpForm()
    {
        return view('user.showsignUpForm');
    }

    public function signUp(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        
        User::create([
            'name'     => $request->username,
            'email'=> $request->email,
            'role' => 1,
            'password' => Hash::make($request->password),

        ]);

        return redirect()->route('user.login.post')->with('msg', 'Tạo Tài Khoản thành công!');
        
    }
    
    public function showLoginForm()
    {
        return view('user.showLoginForm');
    }

    public function login(Request $request)
    {
        // Validate the input
 
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            if( Auth::user()->role == 0 )
            {
                return redirect()->route('/');

            }else  if( Auth::user()->role == 1 )
            {
                return redirect()->route('adminform');

            }

        }
    
        return redirect()->route('user.login')->with('error', 'Invalid email or password.');
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('user.login');
    }

    
}
