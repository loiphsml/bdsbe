<?php

namespace App\Http\Controllers;


use App\CategoryItem;
use App\Location;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::orderBy('id', 'DESC')->paginate(5);
        $products->makeVisible('id');
        return view('backend.admin.product.index', compact('products'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dd_category_products = CategoryItem::where('type', CATEGORY_PRODUCT)->orderBy('order')->get();
        foreach ($dd_category_products as $key => $data) {
            if ($data->level == CATEGORY_PRODUCT_CAP_1) {
                $data->name = ' ---- ' . $data->name;
            } else if ($data->level == CATEGORY_PRODUCT_CAP_2) {
                $data->name = ' --------- ' . $data->name;
            } else if ($data->level == CATEGORY_PRODUCT_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            }
        }
        $newArray1 = [];
        self::showCategoryDropDown($dd_category_products, 0, $newArray1);
        $dd_category_products = array_pluck($newArray1, 'name', 'id');

        $dd_locations = Location::orderBy('order')->get();
        foreach ($dd_locations as $key => $data) {
            if ($data->level == LOCATION_CAP_1) {
                $data->name = ' ---- ' . $data->name;
            } else if ($data->level == LOCATION_CAP_2) {
                $data->name = ' --------- ' . $data->name;
            } else if ($data->level == LOCATION_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            }
        }
        $newArray2 = [];
        self::showCategoryDropDown($dd_locations, 0, $newArray2);
        $dd_locations = array_pluck($newArray2, 'name', 'id');
        return view('backend.admin.product.create', compact('roles', 'dd_category_products', 'dd_locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $name = $request->input('name');
        $description = $request->input('description');
        $content = $request->input('content');
        $order = $request->input('order');
        $isActive = $request->input('is_active');
        $categoryProductID = $request->input('category_product');
        $locationID = $request->input('location_product');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $seoKeywords = $request->input('seo_keywords');
        $price = $request->input('price');
        $area = $request->input('area');
        if (!IsNullOrEmptyString($price)) {
            $product->price = $price;
        }
        if (!IsNullOrEmptyString($area)) {
            $product->area = $area;
        }
        if (!IsNullOrEmptyString($order)) {
            $product->order = $order;
        }
        if (!IsNullOrEmptyString($isActive)) {
            $product->isActive = 1;
        }
        if (!IsNullOrEmptyString($description)) {
            $product->description = $description;
        }
        if (!IsNullOrEmptyString($seoTitle)) {
            $product->seo_title = $seoTitle;
        }
        if (!IsNullOrEmptyString($seoDescription)) {
            $product->seo_description = $seoDescription;
        }
        if (!IsNullOrEmptyString($seoKeywords)) {
            $product->seo_keywords = $seoKeywords;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $product->name = $name;
        $product->path = chuyen_chuoi_thanh_path($name);
        $product->image = $image;
        $product->content = $content;
        $product->category_product_id = $categoryProductID;
        $product->location_id = $locationID;
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Tạo Mới Thành Công Sản Phẩm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $dd_category_products = CategoryItem::where('type', CATEGORY_PRODUCT)->orderBy('order')->get();
        foreach ($dd_category_products as $key => $data) {
            if ($data->level == CATEGORY_PRODUCT_CAP_1) {
                $data->name = ' ---- ' . $data->name;
            } else if ($data->level == CATEGORY_PRODUCT_CAP_2) {
                $data->name = ' --------- ' . $data->name;
            } else if ($data->level == CATEGORY_PRODUCT_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            }
        }
        $newArray1 = [];
        self::showCategoryDropDown($dd_category_products, 0, $newArray1);
        $dd_category_products = array_pluck($newArray1, 'name', 'id');
        $dd_category_products = array_map(function ($index, $value) {
            return ['index' => $index, 'value' => $value];
        }, array_keys($dd_category_products), $dd_category_products);

        $dd_locations = Location::orderBy('order')->get();
        foreach ($dd_locations as $key => $data) {
            if ($data->level == LOCATION_CAP_1) {
                $data->name = ' ---- ' . $data->name;
            } else if ($data->level == LOCATION_CAP_1_CAP_2) {
                $data->name = ' --------- ' . $data->name;
            } else if ($data->level == LOCATION_CAP_1_CAP_3) {
                $data->name = ' ------------------ ' . $data->name;
            }
        }
        $newArray2 = [];
        self::showCategoryDropDown($dd_locations, 0, $newArray2);
        $dd_locations = array_pluck($newArray2, 'name', 'id');
        $dd_locations = array_map(function ($index, $value) {
            return ['index' => $index, 'value' => $value];
        }, array_keys($dd_locations), $dd_locations);

        return view('backend.admin.product.edit', compact('product', 'dd_category_products','dd_locations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $name = $request->input('name');
        $description = $request->input('description');
        $content = $request->input('content');
        $order = $request->input('order');
        $isActive = $request->input('is_active');
        $categoryProductID = $request->input('category_product');
        $locationID = $request->input('location_product');
        $seoTitle = $request->input('seo_title');
        $seoDescription = $request->input('seo_description');
        $seoKeywords = $request->input('seo_keywords');
        $price = $request->input('price');
        $area = $request->input('area');
        if (!IsNullOrEmptyString($price)) {
            $product->price = $price;
        }
        if (!IsNullOrEmptyString($area)) {
            $product->area = $area;
        }
        if (!IsNullOrEmptyString($order)) {
            $product->order = $order;
        }
        if (!IsNullOrEmptyString($isActive)) {
            $product->isActive = 1;
        }
        if (!IsNullOrEmptyString($description)) {
            $product->description = $description;
        }
        if (!IsNullOrEmptyString($seoTitle)) {
            $product->seo_title = $seoTitle;
        }
        if (!IsNullOrEmptyString($seoDescription)) {
            $product->seo_description = $seoDescription;
        }
        if (!IsNullOrEmptyString($seoKeywords)) {
            $product->seo_keywords = $seoKeywords;
        }
        $image = $request->input('image');
        $image = substr($image, strpos($image, 'images'), strlen($image) - 1);
        $product->name = $name;
        $product->path = chuyen_chuoi_thanh_path($name);
        $product->image = $image;
        $product->content = $content;
        $product->category_product_id = $categoryProductID;
        $product->location_id = $locationID;
        $product->user_id = Auth::user()->id;
        $product->save();
        return redirect()->route('product.index')->with('success', 'Tạo Mới Thành Công Sản Phẩm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index')->with('success', 'Đã Xóa Thành Công');
    }

    public function search(Request $request)
    {
        $keywords = preg_replace('/\s+/', ' ', $request->input('txtSearch'));
        $products = Product::where('name', 'like', '%' . $keywords . '%')->orderBy('id', 'DESC')->paginate(5);
        return view('backend.admin.product.index', compact('products', 'keywords'))->with('i', ($request->input('product', 1) - 1) * 5);
    }

    public function showCategoryDropDown($dd_category_products, $parent_id = 0, &$newArray)
    {
        foreach ($dd_category_products as $key => $data) {
            if ($data->parent_id == $parent_id) {
                array_push($newArray, $data);
                $dd_category_products->forget($key);
                self::showCategoryDropDown($dd_category_products, $data->id, $newArray);
            }
        }
    }

    public function paste(Request $request)
    {
        $listId = $request->input('listID');
        $products = Product::find(explode(',', $listId));
        foreach ($products as $key => $data) {
            $data->name = $data->name . ' ' . rand(pow(10, 2), pow(10, 3) - 1);
            $data->path = chuyen_chuoi_thanh_path($data->name);
        }
        Product::insert($products->toArray());
        return redirect()->route('product.index')->with('success', 'Tạo Mới Thành Công Sản Phẩm');
    }
}
