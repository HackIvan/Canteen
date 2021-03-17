<?php



namespace App\Http\Controllers;
use App\Order;


use App\Product;
use App\Special;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $product = Product::take(8)->get();


        $orders = Order::take(3)
        ->orderBy('created_at', 'desc')
        ->get();
        $myToken = $orders->sortByDesc('name');


        $specials = Special::take(2)->get();

        return view('home', ['allProducts' => $product, 'recentOrders' => $orders, 'specMenu' => $specials ]);
    }


}

