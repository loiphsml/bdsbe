<?php

namespace App\Repositories\Frontend;

use Illuminate\Http\Request;

interface FrontendRepositoryInterface
{
    public function getFrontend();

    public function getSearch(Request $request);

    public function getDistrict(Request $request);

    public function getDetailProduct($path);

    public function getPageContent($path);

    public function getDataConfig();

    public function getFrontEndInfo();

    public function getAllDuAnByType($type);

}