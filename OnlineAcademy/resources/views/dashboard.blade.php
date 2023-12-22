<x-app-layout>
    <x-slot name="header" class="mb-4">
       @if( session()->has('success'))
        <div> {{ session('success') }}</div>
        @endif
    </x-slot>
    <x-sidebar></x-sidebar>
    
</x-app-layout>
