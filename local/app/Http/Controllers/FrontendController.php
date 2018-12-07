<?php

namespace App\Http\Controllers;

use App\Repositories\Frontend\FrontendRepositoryInterface;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $frontendRepository;

    public function __construct(FrontendRepositoryInterface $frontendRepository)
    {
        $this->frontendRepository = $frontendRepository;
    }

    public function getFrontend()
    {
        $data = $this->frontendRepository->getFrontend();
        return view('frontend.home.index', compact('data'));
    }

    public function getDistrict(Request $request)
    {
        $data = $this->frontendRepository->getDistrict($request);
        return response()->json([
            'success' => $data['success'],
            'districts' => $data['districts']
        ]);
    }

    public function getSearch(Request $request)
    {
        $data = $this->frontendRepository->getSearch($request);
        return view('frontend.search.index', compact('data'));
    }

    public function getDetailProduct($path)
    {
        $data = $this->frontendRepository->getDetailProduct($path);
        return view('frontend.canhochitiet.index', compact('data'));
    }
    public function getPageContent($path)
    {
        $data = $this->frontendRepository->getPageContent($path);
        return view('frontend.page.index', compact('data'));
    }

    public function getAllDuAnByType($type)
    {
        $data = $this->frontendRepository->getAllDuAnByType($type);
        return view('frontend.danhsachcanho.index', compact('data'));
    }

}

