<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryItem extends Model
{
    protected $fillable = [
        'id','name','path','description','image','image_mobile','level','parent_id','type','seo_title','seo_description','seo_keywords','order','isActive','created_at','updated_at'
    ];
    protected $table = 'category_items';
    protected $hidden = ['id'];
    public function products(){
        return $this->hasMany('App\Product','category_product_id');
    }
    public function getAllCategoryByType($type)
    {
        return $this->where('type', $type)->orderBy('order')->get();
    }
    public function getAllProductByCategory($type)
    {
        switch ($type) {
            case 'muabancanho':
                return $this->where('type', CATEGORY_PRODUCT)->where('path','can-ho-chung-cu')->first()->products;
                break;
            case 'muabandatnen':
                return $this->where('type', CATEGORY_PRODUCT)->where('path','dat-nen-du-an')->first()->products;
                break;
        }

    }
}
