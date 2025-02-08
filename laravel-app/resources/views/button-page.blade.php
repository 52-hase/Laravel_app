<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Button Page') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded transition-all">
            押せるだけのボタン
        </button>
    </div>
</x-app-layout>
