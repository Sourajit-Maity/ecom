<x-admin-layout title="contact Management">
    <x-slot name="subHeader">
            <x-admin.sub-header headerTitle="{{ $contact ? 'Edit' : 'Add' }} contact">
				<x-admin.breadcrumbs>
						<x-admin.breadcrumbs-item  value="Dashboard" href="{{ route('admin.dashboard') }}" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item href="{{ route('contact-form.index') }}" value="contact List" />
						<x-admin.breadcrumbs-separator />
						<x-admin.breadcrumbs-item  value="{{ $contact ? 'Edit' : 'Add' }} contact" />

				</x-admin.breadcrumbs>
				<x-slot name="toolbar">	
				</x-slot>
			</x-admin.sub-header>
	</x-slot>
	<livewire:admin.contact.contact-create-edit :contact="$contact"/>
</x-admin-layout>