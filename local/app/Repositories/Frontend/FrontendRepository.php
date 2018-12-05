<?php

namespace App\Repositories\Frontend;


use App\CategoryItem;
//use App\Config;
//use App\Post;
use App\Config;
use App\Location;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

class FrontendRepository implements FrontendRepositoryInterface
{
    public function getFrontend()
    {
        $data = [];
        $category = new CategoryItem();
        $featuredProject = $category->getAllCategoryByType(CATEGORY_PRODUCT);
        $products = Product::where('isActive', ACTIVE)->orderBy('id', 'DESC')->get();
        foreach ($products as $key => $item) {
            $location = $item->location->name;
            if ($item->location->parent_id != 0) {
                $location = $location . ',' . Location::where('id', $item->location->parent_id)->first()->name;
            }
            $item->location = $location;
        }
        $configContact = Config::where('name', 'config-contact')->first();
        $data['products'] = $products;
        $data['configContact'] = $configContact;
        $data['featuredProject']=$featuredProject;
        return $data;
    }

    public function getDataSearch()
    {
        $cities = Location::where('level', 0)->orderBy('order')->get();
        $dd_locations_city = array_prepend(array_pluck($cities, 'name', 'id'), '--Chọn Khu Vực--', '-1');
        $data['dd_locations_city'] = $dd_locations_city;
        return $data;
    }

    public function getSearch(Request $request)
    {
        $data = [];
        $name = $request->input('name');
        $district = $request->input('district');
        $city = $request->input('city');
        $price = $request->input('price');
        $areaFrom = $request->input('area-from');
        $areaTo = $request->input('area-to');
        $products = Product::query();
        if (!IsNullOrEmptyString($name)) {
            $name = preg_replace('/\s+/', ' ', $name);
            $products->where('name', 'like', '%' . $name . '%');
        }
        if (!IsNullOrEmptyString($city)) {
            if ($city !== '-1')
                if ($district == '-1') {
                    $location = Location::select('id')->where('parent_id', $city)->get();
                    $products->whereIn('location_id', $location);
                }
        }
        if (!IsNullOrEmptyString($district)) {
            if ($district !== '-1') {
                $products->where('location_id', $district);
            }
        }
        if (!IsNullOrEmptyString($areaFrom)) {
            $products->where('area', '>=', $areaFrom);
        }
        if (!IsNullOrEmptyString($areaTo)) {
            $products->where('area', '<=', $areaTo);
        }


        $products = $products->get();
        if (!IsNullOrEmptyString($price)) {
            if ($price !== '-1') {
                $price = explode('-', $price);
                foreach ($products as $key => $item) {
                    if ($item->unit_id == 2) {
                        if ($item->price <= $price[0] || $item->price >= $price[1])
                            $products->forget($key);
                    } elseif ($item->unit_id == 1) {
                        $final_price = (int)$item->price * (int)$item->area;
                        if ($final_price < $price[0] || $final_price > $price[1])
                            $products->forget($key);
                    } else {

                        $final_price = (int)$item->price * 1000;
//                        dd($price);
                        if ($final_price < $price[0] || $final_price > $price[1])
                            $products->forget($key);
                    }
                }
            }
        }
        foreach ($products as $key => $item) {
            $location = $item->location->name;
            if ($item->location->parent_id != 0) {
                $location = $location . ', ' . Location::where('id', $item->location->parent_id)->first()->name;
            }

            $item->description = loai_bo_html_tag($item->description);
            $item->location = $location;
        }
        $data['products'] = $products;
        return $data;
    }

    public function getDistrict(Request $request)
    {
        $data = [];
        $id = $request['id'];
        $districts = Location::where('parent_id', $id)->orderBy('order')->get();
        $data['success'] = 'success';
        $data['districts'] = $districts;
        return $data;
    }

    public function getDetailProduct($path)
    {
        $data = [];
        $product = Product::where('path', $path)->first();
        $location = $product->location->name;
        if ($product->location->parent_id != 0) {
            $location = $location . ', ' . Location::where('id', $product->location->parent_id)->first()->name;
        }
        $product->finalLocation = $location;
        $product->description = loai_bo_html_tag($product->description);
        $otherProduct = Product::where('id', '!=', $product->id)->take(6)->get();
        foreach ($otherProduct as $key => $item) {
            $item->description = loai_bo_html_tag($item->description);
        }
        $contact = Config::whereIn('name', ['config-email', 'config-phone', 'config-name','config-img-personal'])->get();
        foreach ($contact as $key => $item) {
            if ($item->name == 'config-phone')
                $data['config-phone'] = $item->content;
            if ($item->name == 'config-email')
                $data['config-email'] = $item->content;
            if ($item->name == 'config-name')
                $data['config-name'] = $item->content;
            if ($item->name == 'config-img-personal')
                $data['config-img-personal'] = $item->content;
        }
        $data['product'] = $product;
        $data['otherProduct'] = $otherProduct;
        return $data;
    }

    public function getPageContent($path)
    {
        $data = [];
        $page = Post::where('path', $path)->first();
        $data['page'] = $page;
        return $data;
    }

    public function getDataConfig()
    {
        $data = [];
        $configs = Config::whereIn('name', ['config-phone', 'config-email', 'config-address'])->orderBy('order')->get();
        foreach ($configs as $key => $item) {
            if ($item->name == 'config-phone')
                $data['config-phone'] = $item->content;
            if ($item->name == 'config-email')
                $data['config-email'] = $item->content;
            if ($item->name == 'config-address')
                $data['config-address'] = $item->content;
        }
        return $data;
    }

    public function getFrontEndInfo()
    {
        $data = [];
        $products = Product::select('name', 'path')->orderBy('id', 'DESC')->get();
        $data['products'] = $products;
        return $data;
    }

    public function getAllDuAnByType($type)
    {
        $data = [];
        $category = new CategoryItem();
        $products=$category->getAllProductByCategory($type);
        $data['products'] = $products;
        return $data;
        // TODO: Implement getAllDuAnByType() method.
    }


}