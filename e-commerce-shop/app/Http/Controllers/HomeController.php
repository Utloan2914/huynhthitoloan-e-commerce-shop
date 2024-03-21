<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $items = [
            ['name' => 'Traditional Wear'],
            ['name' => 'Western Wear'],
            ['name' => 'Swim & Beachwear'],
            ['name' => 'Winter & Seasonal Wear'],
            ['name' => 'Beauty & Grooming'],
            ['name' => 'Juwelley'],
            ['name' => 'Personal care Appliances'],
            ['name' => 'International Brands'],
            ['name' => 'Foot Wear'],
            ['name' => 'Watches'],
            ['name' => 'Accessories']
        ];
        $product = [
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '290 Bdt',
                'discount' => '330 Bdt',
                'image' => 'https://centimet.vn/wp-content/uploads/DSCF1486.jpg'
            ],
            [
                'name' => 'LEXRX face cream',
                'price' => '800 Bdt',
                'discount' => '700 Bdt',
                'image' => 'https://vivita.vn/wp-content/uploads/2023/07/arinamin-ex-plus.jpg'
            ],
            [
                'name' => 'Camera',
                'price' => '230 Bdt',
                'discount' => '100 Bdt',
                'image' => 'https://cdn.vjshop.vn/tin-tuc/7-buoc-chup-anh-mon-an-dep-tai-nha/chup-anh-mon-an-dep-13.jpg'
            ],
            [
                'name' => 'Sky blue kids shoe',
                'price' => '700 Bdt',
                'discount' => '88 Bdt',
                'image' => 'https://kiza.vn/media/wysiwyg/products/converse/KCV012/xanh-navy-thap-03.JPG'
            ],
            [
                'name' => 'Brown leather wallet',
                'price' => '288 Bdt',
                'discount' => '222 Bdt',
                'image' => 'https://cf.shopee.vn/file/080ad026e9e92f0230a8fbc76335b519'
            ]
            ];
        return view('client',['items' => $items],['images'=> $product]);
    }
}
