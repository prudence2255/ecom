<?php

namespace Ecom\NewProduct\Http\Controllers\Shop;

use Illuminate\Routing\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Ecom\NewProduct\Models\NewProduct;
use Webkul\Product\Models\ProductProxy;

class NewProductController extends Controller
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
       $data = ProductProxy::with(['attribute_values', 'images'])->get();

        return view($this->_config['view'])->with('slides', $data);
    }


}
