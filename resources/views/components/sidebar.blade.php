<aside class="w-64 bg-gray-100 p-6 space-y-6 border-r border-gray-300">
    <h4 class="text-lg font-semibold text-gray-800">Statuses</h4>
    <hr>
    <ul class="space-y-2">
        <li>
            <a href="/" class="block px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200">
                All statuses
            </a>
        </li>
        @foreach($statuses as $status)
            <li>
                <a href="{{ route('search', ['status' => $status]) }}"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 {{ request('category') == $status ? 'bg-gray-200' : '' }}">
                    {{ $status }}
                </a>
            </li>
        @endforeach
    </ul>
    <h4 class="text-lg font-semibold text-gray-800">Categories</h4>
    <hr>
    <ul class="space-y-2">
        <li>
            <a href="/" class="block px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200">
                All Categories
            </a>
        </li>
        @foreach($categories as $category)
            <li>
                <a href="{{ route('search', ['category' => $category]) }}"
                   class="block px-4 py-2 rounded-md text-gray-700 hover:bg-gray-200 {{ request('category') == $category ? 'bg-gray-200' : '' }}">
                    {{ $category }}
                </a>
            </li>
        @endforeach
    </ul>
</aside>
