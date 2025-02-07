
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
                {{ Auth::user()->name }}
            </h2>
            <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
                {{ Auth::user()->email }}
            </h2>
        </div>