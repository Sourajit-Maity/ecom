<x-admin-layout title="Product Price Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $productprice ? 'Edit' : 'Add' }} Product Price">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('product-price.index') }}" value="Product Price List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $productprice ? 'Edit' : 'Add' }} Product Price" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.product-price.product-price-create-edit :productprice="$productprice"/>
</x-admin-layout>