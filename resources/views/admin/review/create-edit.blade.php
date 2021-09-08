<x-admin-layout title="Review Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $review ? 'Edit' : 'Add' }} Review">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('review-master.index') }}" value="Review List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $review ? 'Edit' : 'Add' }} Review" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.review.review-create-edit :review="$review"/>
</x-admin-layout>