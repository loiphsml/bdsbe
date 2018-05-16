<?php

namespace App\Repositories\Frontend;


//use App\CategoryItem;
//use App\Config;
//use App\Post;
use App\Config;
use App\Location;
use App\Post;
use App\Product;
use Illuminate\Http\Request;

class FrontendRepository implements FrontendRepositoryInterface
{
//    public function getAllSidebar()
//    {
//        $sidebar = [];
////        $categoryPosts = CategoryItem::where('type', 0)->get();
//        $categoryProducts = CategoryItem::where('type', 1)->where('isActive', 1)->orderBy('order')->get();
////        $sidebar['categoryPosts'] = $categoryPosts;
//        $sidebar['categoryProducts'] = $categoryProducts;
//        return $sidebar;
//    }
//
//
//    public function getServiceByCategory($path)
//    {
//        $data = [];
//        $categoryPost = CategoryItem::where('path', $path)->first();
//        $posts = Post::where('category_post_id', $categoryPost->id)->get();
//        $page = Post::find($categoryPost->page_id);
//        $data['categoryPost'] = $categoryPost;
//        $data['posts'] = $posts;
//        $data['page'] = $page;
//        return $data;
//    }
//
//    public function getAllListCategoryAndProduct()
//    {
//        $categoryProducts = CategoryItem::where('type', 1)->where('level', 0)->where('isActive', 1)->orderBy('order')->get();
//        foreach ($categoryProducts as $key => $data) {
//            $products = Product::whereIn('category_product_id', function ($query) use ($data) {
//                $query->select('id')->from(with(new CategoryItem)->getTable())->where('parent_id', $data->id);
//            })->orderBy('id', 'DESC')->take(8)->get();
//            if (count($products) == 0) {
//                unset($categoryProducts[$key]);
//            } else {
//                $data->listProduct = $products;
//            }
//        }
//        $news = Post::where('post_type', function ($query) {
//            $query->select('id')->from(with(new CategoryItem)->getTable())->where('path', 'cong-trinh-mau');
//        })->take(3)->get();
//        foreach ($news as $key => $item) {
//            $item->description = cat_chuoi_dai_thanh_ngan(loai_bo_html_tag($item->description), 90);
//        }
//        $data['categoryProducts'] = $categoryProducts;
//        $data['news'] = $news;
//        return $data;
//    }
//
//    public function getProductInfo($productPath)
//    {
//        $data = [];
//        $product = Product::where('path', $productPath)->first();
//        $product->price = number_format($product->price, 0, ',', '.');
//        $product->final_price = number_format($product->final_price, 0, ',', '.');
//        $orther = Product::where('category_product_id', $product->category_product_id)->where('id', '!=', $product->id)->get();
//        foreach ($orther as $key => $data) {
//            $data->price = number_format($data->price, 0, ',', '.');
//            $data->final_price = number_format($data->final_price, 0, ',', '.');
//        }
//        $data['product'] = $product;
//        $data['orther'] = $orther;
//        return $data;
//    }
//
//    public function getServiceInfo($categoryPath, $servicePath)
//    {
//        $data = [];
//        $service = Post::where('path', $servicePath)->first();
//        $orther = Post::where('category_post_id', $service->category_post_id)->where('id', '!=', $service->id)->get();
//        $data['service'] = $service;
//        $data['orther'] = $orther;
//        return $data;
//    }
//
//    public function getFrontEndInfo()
//    {
//        $data = [];
//        $configContact = Config::where('name', 'config-contact')->first();
//        $data['configContact'] = $configContact;
//        $categoryMain = CategoryItem::where('type', CATEGORY_PRODUCT)->where('level', MENU_GOC)->get();
//        $data['categoryMain'] = $categoryMain;
//        return $data;
//    }
//
//    public function getMainPage($path)
//    {
//        $page = Post::where('path', $path)->get();
//        return $page;
//    }
//
//    public function getSearch($keySearch)
//    {
//        $data = [];
//        $keySearch = preg_replace('/\s+/', ' ', $keySearch);
//        $products = Product::where('name', 'like', '%' . $keySearch . '%')->orderBy('id', 'DESC')->get();
//        $data['products'] = $products;
//        $data['key-search'] = $keySearch;
//        return $data;
//    }
//
//    public function getProductByCategoryMain($path)
//    {
//        $data = [];
//        $categoryMain = CategoryItem::where('path', $path)->first();
//        $categorySub = CategoryItem::where('parent_id', $categoryMain->id)->get();
//        $products = $products = Product::whereIn('category_product_id', function ($query) use ($categoryMain) {
//            $query->select('id')->from(with(new CategoryItem)->getTable())->where('parent_id', $categoryMain->id);
//        })->orderBy('id', 'DESC')->get();
//        foreach ($products as $key => $data) {
//            $data->price = number_format($data->price, 0, ',', '.');
//            $data->final_price = number_format($data->final_price, 0, ',', '.');
//        }
//        $data['category'] = $categoryMain;
//        $data['categorySub'] = $categorySub;
//        $data['products'] = $products;
//        $data['type'] = 1;
//        return $data;
//    }
//
//    public function getProductByCategorySub($pathParent, $pathSub)
//    {
//        $data = [];
//        $categorySub = CategoryItem::where('path', $pathSub)->first();
//        $products = Product::where('category_product_id', $categorySub->id)->get();
//        foreach ($products as $key => $data) {
//            $data->price = number_format($data->price, 0, ',', '.');
//            $data->final_price = number_format($data->final_price, 0, ',', '.');
//        }
//        $data['category'] = $categorySub;
//        $data['categorySub'] = [];
//        $data['products'] = $products;
//        $data['type'] = 2;
//        return $data;
//    }
//
//    public function getPageContent($path)
//    {
//        $data = [];
//        $page = Post::where('path', $path)->first();
//        $data['page'] = $page;
//        return $data;
//    }
//
//    public function getCategoryPostContent($path)
//    {
//        $data = [];
//        $categoryPost = CategoryItem::where('path', $path)->first();
//        $posts = Post::where('post_type', $categoryPost->id)->get();
//        $categoryPost->posts = $posts;
//        $data['categoryPost'] = $categoryPost;
//        $data['type'] = 1;
//        return $data;
//    }
//
//    public function getPostDetail($pathParent, $pathSub)
//    {
//
////        $categoryPost = CategoryItem::where('path', $pathParent)->first();
//        $post = Post::where('path', $pathSub)->first();
//        $data['post'] = $post;
//        $data['type'] = 2;
//        return $data;
//    }
//
//    public function getAllNews()
//    {
//        $data = [];
//        $newsMain = CategoryItem::where('path', 'tin-tuc')->first();
//        $news = Post::where('post_type', $newsMain->id)->get();
//        $data['newsMain'] = $newsMain;
//        $data['news'] = $news;
//        $data['type'] = 1;
//        return $data;
//    }
//
//    public function getNewsDetail($path)
//    {
//        $data = [];
//        $news = Post::where('path', $path)->first();
//
//        $others = Post::where('post_type', function ($query) {
//            $query->select('id')->from(with(new CategoryItem)->getTable())->where('path', 'tin-tuc');
//        })->where('id', '!=', $news->id)->get();
//        $data['news'] = $news;
//        $data['others'] = $others;
//        $data['type'] = 2;
//        return $data;
//    }
    public function getFrontend()
    {
        $data = [];
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
        $districts = Location::where('parent_id', $id)->get();
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
        $contact = Config::whereIn('name', ['config-email', 'config-phone', 'config-name'])->get();
        foreach ($contact as $key => $item) {
            if ($item->name == 'config-phone')
                $data['config-phone'] = $item->content;
            if ($item->name == 'config-email')
                $data['config-email'] = $item->content;
            if ($item->name == 'config-name')
                $data['config-name'] = $item->content;
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


}