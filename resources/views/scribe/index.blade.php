<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: September 21 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://localhost";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.5.3.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Product Authentication</h1>
<p>APIs for managing basic auth functionality</p>
<h2>Get-Product Price</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product-price"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
            "product_type": "Gold &amp; Silver Plastic Rectangle",
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
}</code></pre>
<div id="execution-results-GETapi-product-price" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-product-price"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-product-price"></code></pre>
</div>
<div id="execution-error-GETapi-product-price" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-product-price"></code></pre>
</div>
<form id="form-GETapi-product-price" data-method="GET" data-path="api/product-price" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-product-price', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-product-price" onclick="tryItOut('GETapi-product-price');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-product-price" onclick="cancelTryOut('GETapi-product-price');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-product-price" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/product-price</code></b>
</p>
</form><h1>User Authentication</h1>
<p>APIs for managing basic auth functionality</p>
<h2>api/register</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "first_name": "John",
    "last_name": "Doe",
    "email": "John@gmail.com",
    "phone": "1122334455"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Success! registration completed",
    "data": {
        "first_name": "john",
        "last_name": "doe",
        "email": "john@gmail.com",
        "phone": "1122334455",
        "updated_at": "2021-02-18T12:14:01.000000Z",
        "created_at": "2021-02-18T12:14:01.000000Z",
        "id": 56,
        "full_name": "john doe",
        "role_name": "CLIENT",
        "roles": [
            {
                "id": 2,
                "name": "CLIENT",
                "guard_name": "web",
                "created_at": "2021-02-17T06:58:17.000000Z",
                "updated_at": "2021-02-17T06:58:17.000000Z",
                "pivot": {
                    "model_id": 56,
                    "role_id": 2,
                    "model_type": "App\\Models\\User"
                }
            }
        ]
    }
}</code></pre>
<div id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-register"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"></code></pre>
</div>
<div id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register"></code></pre>
</div>
<form id="form-POSTapi-register" data-method="POST" data-path="api/register" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-register" onclick="tryItOut('POSTapi-register');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-register" onclick="cancelTryOut('POSTapi-register');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-register" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/register</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>first_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="first_name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>last_name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="last_name" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>phone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="phone" data-endpoint="POSTapi-register" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/login</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "user@user.com",
    "password": "12345678"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "token": "6|Imv8VDsE27b1sRclxv91emCSIbLpxLmfvK3wFsAa",
    "data": {
        "id": 55,
        "first_name": "Abhik",
        "last_name": "paul",
        "email": "abhik421@gmail.com",
        "phone": "6655443321",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-17T15:13:27.000000Z",
        "updated_at": "2021-02-17T15:13:27.000000Z",
        "full_name": "Abhik paul",
        "role_name": "CLIENT"
    }
}</code></pre>
<div id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"></code></pre>
</div>
<div id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login"></code></pre>
</div>
<form id="form-POSTapi-login" data-method="POST" data-path="api/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-login" onclick="tryItOut('POSTapi-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-login" onclick="cancelTryOut('POSTapi-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="password" name="password" data-endpoint="POSTapi-login" data-component="body" required  hidden>
<br>

</p>

</form>
<h2>api/user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "data": {
        "id": 55,
        "first_name": "Abhik",
        "last_name": "paul",
        "email": "abhik421@gmail.com",
        "phone": "6655443321",
        "email_verified_at": null,
        "current_team_id": null,
        "profile_photo_path": null,
        "active": 0,
        "created_at": "2021-02-17T15:13:27.000000Z",
        "updated_at": "2021-02-17T15:13:27.000000Z",
        "full_name": "Abhik paul",
        "role_name": "CLIENT"
    }
}</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
<p>
<label id="auth-GETapi-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETapi-user" data-component="header"></label>
</p>
</form><h1>User Cart Authentication</h1>
<p>APIs for managing basic auth functionality</p>
<h2>Add To Cart</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/add-to-cart"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "status": true,
    "message": "Product successfully added your cart."
}</code></pre>
<div id="execution-results-POSTapi-add-to-cart" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-add-to-cart"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-add-to-cart"></code></pre>
</div>
<div id="execution-error-POSTapi-add-to-cart" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-add-to-cart"></code></pre>
</div>
<form id="form-POSTapi-add-to-cart" data-method="POST" data-path="api/add-to-cart" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-add-to-cart', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-add-to-cart" onclick="tryItOut('POSTapi-add-to-cart');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-add-to-cart" onclick="cancelTryOut('POSTapi-add-to-cart');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-add-to-cart" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/add-to-cart</code></b>
</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["javascript"];
        setupLanguages(languages);
    });
</script>
</body>
</html>