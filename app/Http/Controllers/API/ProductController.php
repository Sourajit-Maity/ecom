<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductPrice;
use App\Models\Product;
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
            "id": 60,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "21.09",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 61,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "19.23",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 62,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "18.14",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 63,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "17.75",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 64,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "17.07",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 65,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "26.37",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 66,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "24.88",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 67,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "23.44",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 68,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "22.09",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 69,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "20.23",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 70,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "19.14",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 71,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "18.75",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 72,
            "product_type": "Framed Metallic Oval Badges",
            "product_type_slug": "framed_metallic_oval",
            "product_category": "FrOvBRSBadge",
            "price": "18.07",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:54.000000Z",
            "updated_at": "2021-09-21T10:24:54.000000Z",
            "deleted_at": null
        },
        {
            "id": 35,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "19.42",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 36,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "17.99",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 37,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "16.04",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 38,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "14.90",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 39,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "14.49",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 40,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "13.77",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 41,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "23.04",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 42,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "21.48",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 43,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "19.97",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 44,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "18.55",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 45,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "16.59",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 46,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "15.45",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 47,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "15.04",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 48,
            "product_type": "Framed metallic Badges",
            "product_type_slug": "framed_metallic",
            "product_category": "FRBRSBadge",
            "price": "14.32",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 49,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "19.37",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 50,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "17.88",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 51,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "16.44",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 52,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "15.06",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 53,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "13.23",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 54,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "12.14",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 55,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "11.75",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 56,
            "product_type": "Oval White Badges",
            "product_type_slug": "oval_white",
            "product_category": "OvBadge",
            "price": "11.07",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 57,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "25.37",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 58,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "23.88",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 59,
            "product_type": "Framed Oval White Badges",
            "product_type_slug": "framed_oval_white",
            "product_category": "FrOvBadge",
            "price": "22.44",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:53.000000Z",
            "updated_at": "2021-09-21T10:24:53.000000Z",
            "deleted_at": null
        },
        {
            "id": 19,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "14.02",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 20,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "12.66",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 21,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "10.80",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 22,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "9.71",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 23,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "9.32",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 24,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "8.64",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 25,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 26,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 27,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 28,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 29,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 30,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 31,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 32,
            "product_type": "Framed White Badges",
            "product_type_slug": "framed_white",
            "product_category": "FRBadge",
            "price": "21.39",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 33,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "22.49",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 34,
            "product_type": "Framed Gold or Silver Badges",
            "product_type_slug": "framed_gold_silver",
            "product_category": "FRGBadge",
            "price": "20.93",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:52.000000Z",
            "updated_at": "2021-09-21T10:24:52.000000Z",
            "deleted_at": null
        },
        {
            "id": 1,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "15.37",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 2,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "13.88",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 3,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "12.44",
            "price_range": "16-25",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 4,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "11.09",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 5,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "9.23",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 6,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "8.14",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 7,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "7.75",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 8,
            "product_type": "White Plastic Rectangle",
            "product_type_slug": "white_plastic",
            "product_category": "DigBadge",
            "price": "7.07",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 9,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "16.42",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 10,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "14.93",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 11,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "16.42",
            "price_range": "13.49",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 12,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "12.14",
            "price_range": "26-50",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 13,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "10.28",
            "price_range": "51-100",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 14,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "9.19",
            "price_range": "101-199",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 15,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "8.80",
            "price_range": "200-499",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 16,
            "product_type": "Gold & Silver Plastic Rectangle",
            "product_type_slug": "gold_silver_plastic",
            "product_category": "SMSBadge",
            "price": "8.12",
            "price_range": "500",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 17,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "16.95",
            "price_range": "1-5",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        },
        {
            "id": 18,
            "product_type": "Metallic Plastic Rectangle",
            "product_type_slug": "metalic_plastic",
            "product_category": "BRSBadge",
            "price": "15.46",
            "price_range": "6-15",
            "user_id": null,
            "created_at": "2021-09-21T10:24:51.000000Z",
            "updated_at": "2021-09-21T10:24:51.000000Z",
            "deleted_at": null
        }
    ]
}
 
 */
    public function productPrice()
{
    $productprice = ProductPrice::latest()->get();
    
    if(count($productprice) > 0){
        return response()->json(["status" => true, "data" => $productprice]);
    }
    else{
        return response()->json(["status" => true, "message" => "product price not found"]);
    }
}
}
