<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-blue-100 to-purple-200 dark:from-gray-900 dark:to-gray-800">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white/90 dark:bg-gray-800/90 overflow-hidden shadow-2xl rounded-2xl p-8 backdrop-blur-sm hover:scale-[1.02] transition-all">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center text-2xl font-semibold">
                    🎉 {{ __("You're logged in!") }} 🎉
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="text-gray-900 dark:text-gray-100 text-center">
                    <a href="{{ route('button.page') }}" 
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-all">
                        ボタンページへ移動
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
