<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
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
        $locations = [];
        self::showCategoryItemDropDown($dd_locations, 0, $locations);
        return view('backend.admin.location.index', compact('locations'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $newArray = [];
        self::showCategoryItemDropDown($dd_locations, 0, $newArray);
        $dd_locations = array_prepend(array_pluck($newArray, 'name', 'id'), 'Cấp Cha', '-1');
        return view('backend.admin.location.create', compact('roles', 'dd_locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location = new Location();
        $name = $request->input('name');
        $order = $request->input('order');
        $parentID = $request->input('parent');
        $isActive = $request->input('is_active');
        if ($parentID != CATEGORY_POST_CAP_CHA) {
            $location->parent_id = $parentID;
            $level = Location::where('id', '=', $parentID)->first()->level;
            $location->level = (int)$level + 1;
        } else
            $location->level = 0;
        if (!IsNullOrEmptyString($order)) {
            $location->order = $order;
        }
        if (!IsNullOrEmptyString($isActive)) {
            $location->is_active = 1;
        } else {
            $location->is_active = 0;
        }
        $location->name = $name;
        $location->path = chuyen_chuoi_thanh_path($name);
        $location->save();
        return redirect()->route('location.index')->with('success', 'Tạo Mới Thành Công Địa Điểm');
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
        $location= Location::find($id);
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
        $newArray = [];
        self::showCategoryItemDropDown($dd_locations, 0, $newArray);
        $dd_locations = array_prepend(array_pluck($newArray, 'name', 'id'), 'Cấp Cha', '-1');
        $dd_locations = array_map(function ($index, $value) {
            return ['index' => $index, 'value' => $value];
        }, array_keys($dd_locations), $dd_locations);
        return view('backend.admin.location.edit', compact('location', 'dd_locations'));
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
        $location= Location::find($id);
        $name = $request->input('name');
        $order = $request->input('order');
        $parentID = $request->input('parent');
        $isActive = $request->input('page_is_active');
        if ($parentID != LOCATION_CAP_CHA) {
            $location->parent_id = $parentID;
            $level = Location::where('id', '=', $parentID)->first()->level;
            $location->level = (int)$level + 1;
        } else
            $location->level = 0;
        if (!IsNullOrEmptyString($order)) {
            $location->order = $order;
        }
        if (!IsNullOrEmptyString($isActive)) {
            $location->is_active = 1;
        } else {
            $location->is_active = 0;
        }

        $location->name = $name;
        $location->path = chuyen_chuoi_thanh_path($name);
        $location->save();
        return redirect()->route('location.index')->with('success', 'Cập Nhật Thành Công Địa Điểm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::find($id);
        $location->delete();
        return redirect()->route('location.index')->with('success', 'Đã Xóa Thành Công');
    }

    public function showCategoryItemDropDown($dd_category_products, $parent_id = 0, &$newArray)
    {
        foreach ($dd_category_products as $key => $data) {
            if ($data->parent_id == $parent_id) {
                array_push($newArray, $data);
                $dd_category_products->forget($key);
                self::showCategoryItemDropDown($dd_category_products, $data->id, $newArray);
            }
        }
    }
    public function paste(Request $request)
    {
        $listId = $request->input('listID');
        $locations = Location::find(explode(',', $listId));
        foreach ($locations as $key => $data) {
            $data->name = $data->name . ' ' . rand(pow(10, 2), pow(10, 3) - 1);
            $data->path = chuyen_chuoi_thanh_path($data->name);
        }
        Location::insert($locations->toArray());
        return redirect()->route('location.index')->with('success', 'Tạo Mới Thành Công');
    }
}
