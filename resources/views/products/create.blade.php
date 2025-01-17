<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Create new product') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("create a new product") }}
        </p>
    </header>

    <form method="post" action="{{ route('products.store')}}" class="mt-6 space-y-6">
        @csrf
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" 
                :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="price" :value="__('Price')" />
            <x-text-input id="price" name="price" type="number" class="mt-1 block w-full" 
            :value="old('price')" required autocomplete="price" />
            <x-input-error class="mt-2" :messages="$errors->get('price')" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" 
            :value="old('description')" required autocomplete="" />
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>
        <div>
            <x-input-label for="image" :value="__('Image')" />
            <x-text-input id="image" name="image" type="text" class="mt-1 block w-full" 
            :value="old('image')" required autocomplete="" />
            <x-input-error class="mt-2" :messages="$errors->get('image')" />
        </div>
        <div>
            <x-primary-button class="ml-4">{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
  
</x-app-layout>
