<x-admin-layout title="Product Price Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $price ? 'Edit' : 'Add' }} Product Price">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('price.index') }}" value="Product Price List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $price ? 'Edit' : 'Add' }} Product Price" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.product-price.product-price-create-edit :price="$price"/>
</x-admin-layout>