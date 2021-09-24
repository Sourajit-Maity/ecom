<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductPrice;
use App\Models\Product;
use App\Http\Resources\ProductPriceResource;
/**
 * @group  Product Authentication
 *
 * APIs for managing basic auth functionality
 */
class ProductController extends Controller
{
    /** 
 * Get-Product Price
 * @response  {
    "status": true,
    "data": [
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "21.09",
            "price_range": "26-50"
        },
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "19.23",
            "price_range": "51-100"
        },
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "18.14",
            "price_range": "101-199"
        },
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "17.75",
            "price_range": "200-499"
        },
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "17.07",
            "price_range": "500"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "26.37",
            "price_range": "1-5"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "24.88",
            "price_range": "6-15"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "23.44",
            "price_range": "16-25"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "22.09",
            "price_range": "26-50"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "20.23",
            "price_range": "51-100"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "19.14",
            "price_range": "101-199"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "18.75",
            "price_range": "200-499"
        },
        {
            "product_type": "Framed Metallic Oval Badges",
            "product_category": "FrOvBRSBadge",
            "price": "18.07",
            "price_range": "500"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "19.42",
            "price_range": "16-25"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "17.99",
            "price_range": "26-50"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "16.04",
            "price_range": "51-100"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "14.90",
            "price_range": "101-199"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "14.49",
            "price_range": "200-499"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "13.77",
            "price_range": "500"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "23.04",
            "price_range": "1-5"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "21.48",
            "price_range": "6-15"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "19.97",
            "price_range": "16-25"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "18.55",
            "price_range": "26-50"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "16.59",
            "price_range": "51-100"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "15.45",
            "price_range": "101-199"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "15.04",
            "price_range": "200-499"
        },
        {
            "product_type": "Framed metallic Badges",
            "product_category": "FRBRSBadge",
            "price": "14.32",
            "price_range": "500"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "19.37",
            "price_range": "1-5"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "17.88",
            "price_range": "6-15"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "16.44",
            "price_range": "16-25"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "15.06",
            "price_range": "26-50"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "13.23",
            "price_range": "51-100"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "12.14",
            "price_range": "101-199"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "11.75",
            "price_range": "200-499"
        },
        {
            "product_type": "Oval White Badges",
            "product_category": "OvBadge",
            "price": "11.07",
            "price_range": "500"
        },
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "25.37",
            "price_range": "1-5"
        },
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "23.88",
            "price_range": "6-15"
        },
        {
            "product_type": "Framed Oval White Badges",
            "product_category": "FrOvBadge",
            "price": "22.44",
            "price_range": "16-25"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "14.02",
            "price_range": "16-25"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "12.66",
            "price_range": "26-50"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "10.80",
            "price_range": "51-100"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "9.71",
            "price_range": "101-199"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "9.32",
            "price_range": "200-499"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "8.64",
            "price_range": "500"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "1-5"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "6-15"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "16-25"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "26-50"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "51-100"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "101-199"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "200-499"
        },
        {
            "product_type": "Framed White Badges",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "500"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "22.49",
            "price_range": "1-5"
        },
        {
            "product_type": "Framed Gold or Silver Badges",
            "product_category": "FRGBadge",
            "price": "20.93",
            "price_range": "6-15"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "15.37",
            "price_range": "1-5"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "13.88",
            "price_range": "6-15"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "12.44",
            "price_range": "16-25"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "11.09",
            "price_range": "26-50"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "9.23",
            "price_range": "51-100"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "8.14",
            "price_range": "101-199"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "7.75",
            "price_range": "200-499"
        },
        {
            "product_type": "White Plastic Rectangle",
            "product_category": "DigBadge",
            "price": "7.07",
            "price_range": "500"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "16.42",
            "price_range": "1-5"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "14.93",
            "price_range": "6-15"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "16.42",
            "price_range": "13.49"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "12.14",
            "price_range": "26-50"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "10.28",
            "price_range": "51-100"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "9.19",
            "price_range": "101-199"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "8.80",
            "price_range": "200-499"
        },
        {
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_category": "SMSBadge",
            "price": "8.12",
            "price_range": "500"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "16.95",
            "price_range": "1-5"
        },
        {
            "product_type": "Metallic Plastic Rectangle",
            "product_category": "BRSBadge",
            "price": "15.46",
            "price_range": "6-15"
        }
    ]
}
 
 */
    public function productPrice()
{
    $productprice = ProductPrice::select('name','slug','1-5','6-15','16-25','26-50','51-100','101-199','200-499','500+','magnet','pin','swivel_clip')
    ->latest()->get()->groupBy('slug');

    //$price = ProductPriceResource::collection($productprice)->groupBy('slug');
    
    if(count($productprice) > 0){
        return response()->json(["status" => true, "data" => $productprice]);
    }
    else{
        return response()->json(["status" => true, "message" => "product price not found"]);
    }
}
}
