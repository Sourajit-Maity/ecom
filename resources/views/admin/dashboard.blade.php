<x-admin-layout title="Dashboard">
    <x-slot name="subHeader">
        <x-admin.sub-header headerTitle="Dashboard">
            {{-- <x-admin.breadcrumbs>
                    <x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
            </x-admin.breadcrumbs> --}}
            <x-slot name="toolbar">
            </x-slot>
        </x-admin.sub-header>
</x-slot>

<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total users" description="Total user available in this system" :count="$count['userCount']" href="{{ route('users.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total blocked users" description="Total blocked user available in this system" :count="$count['blockedUserCount'] " href="{{ route('users.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total active users" description="Total active user available in this system" :count="$count['activeUserCount'] " href="{{ route('users.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>
<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total faqs" description="Total user available in this system" :count="$count['faqCount']" href="{{ route('faq-master.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total inactive faqs" description="Total inactive faq available in this system" :count="$count['blockedFaqCount'] " href="{{ route('faq-master.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total active faqs" description="Total active faq available in this system" :count="$count['activeFaqCount'] " href="{{ route('faq-master.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>


<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Review" description="Total Review available in this system" :count="$count['reviewCount']" href="{{ route('review-master.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total blocked Review" description="Total blocked Review available in this system" :count="$count['blockedReviewCount'] " href="{{ route('review-master.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total active Review" description="Total active Review available in this system" :count="$count['activeReviewCount'] " href="{{ route('review-master.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>
<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Contact Form" description="Total Contact Form available in this system" :count="$count['contactCount']" href="{{ route('contact-form.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total blocked Contact Form" description="Total blocked Contact Form available in this system" :count="$count['blockedContactCount'] " href="{{ route('contact-form.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total active Contact Form" description="Total active Contact Form available in this system" :count="$count['activeContactCount'] " href="{{ route('contact-form.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>


<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Product" description="Total Product available in this system" :count="$count['productCount']" href="{{ route('product.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total blocked Product" description="Total blocked Product available in this system" :count="$count['blockedProductCount'] " href="{{ route('product.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total active Product" description="Total active Product available in this system" :count="$count['activeProductCount'] " href="{{ route('product.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>



<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Product price" description="Total product price available in this system" :count="$count['productpriceCount']" href="{{ route('product-price.index') }}" />
                    <x-admin.dashboard-count-widget-item title="Total blocked Product price" description="Total blocked product price available in this system" :count="$count['blockedProductpriceCount'] " href="{{ route('product-price.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total active Products price" description="Total active product price available in this system" :count="$count['activeProductpriceCount'] " href="{{ route('product-price.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
        </div>
    </div>
</div>


<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total Country" description="Total country available in this system" :count="$count['countryCount']" href="{{ route('country.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
           
        </div>
    </div>
</div>


<div class="kt-portlet">
    <div class="kt-portlet__body kt-portlet__body--fit">
        <div class="row row-no-padding row-col-separator-xl">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <x-admin.dashboard-count-widget>
                    <x-admin.dashboard-count-widget-item title="Total State" description="Total state available in this system" :count="$count['stateCount']" href="{{ route('state.index') }}" />
                </x-admin.dashboard-count-widget>
            </div>
            
        </div>
    </div>
</div>

</x-admin-layout>