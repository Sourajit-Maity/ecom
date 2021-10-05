<x-admin-layout title="Production Time Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $productiontime ? 'Edit' : 'Add' }} Product">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('timeproduction.index') }}" value="ProductTion Time List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $productiontime ? 'Edit' : 'Add' }} Product" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.production-time.production-time-create-edit :productiontime="$productiontime"/>
</x-admin-layout>