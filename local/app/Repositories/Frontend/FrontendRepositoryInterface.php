<?php

namespace App\Repositories\Frontend;

use Illuminate\Http\Request;

interface FrontendRepositoryInterface
{
//    public function getAllSidebar();
//
//    public function getProductByCategoryMain($path);
//
//    public function getProductByCategorySub($pathParent, $pathSub);
//
//    public function getServiceByCategory($path);
//
//    public function getAllListCategoryAndProduct();
//
//    public function getProductInfo($productPath);
//
//    public function getServiceInfo($categoryPath, $servicePath);
//
//    public function getFrontEndInfo();
//
//    public function getMainPage($path);
//
//    public function getSearch($keySearch);
//
//    public function getPageContent($path);
//
//    public function getCategoryPostContent($path);
//
//    public function getPostDetail($pathParent, $pathSub);
//
//    public function getAllNews();
//
//    public function getNewsDetail($path);
    public function getFrontend();

    public function getSearch(Request $request);

    public function getDistrict(Request $request);

    public function getDetailProduct($path);

    public function getPageContent($path);

    public function getDataConfig();

    public function getFrontEndInfo();

}