<x-admin-layout title="Production Time Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="Production Time List">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item href="{{ route('admin.dashboard') }}" value="Dashboard" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('timeproduction.index') }}" value="Production Time List" />
				</x-admin.breadcrumbs>

			    <x-slot name="toolbar" >
					<!-- <a href="{{route('product.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
						<i class="la la-plus"></i>
						Add New Product
					</a> -->
				</x-slot>
			</x-admin.sub-header>
    </x-slot>
	<livewire:admin.production-time.production-time-list/>
</x-admin-layout>