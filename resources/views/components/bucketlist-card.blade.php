@props(['bucketlist'])
<div class="group relative shadow-lg shadow-sky-900/40 rounded-md overflow-hidden transform transition-transform hover:scale-105 hover:shadow-2xl hover:shadow-sky-900/40">
    <div class="rounded-md aspect-h-1 aspect-w-1 w-full overflow-hidden bg-gray-200 lg:aspect-none border border-gray-300">
        @if ($bucketlist["image"])
            <img src="{{ asset('storage/'.$bucketlist['image']) }}"
                 class="h-52 w-52 object-cover object-center lg:h-52 lg:w-52 rounded-t-md"
                 alt="Bucket list image">
        @else
            <img src="{{ asset('default.webp') }}"
                 class="h-52 w-52 object-cover object-center lg:h-52 lg:w-52 rounded-t-md"
                 alt="Bucket list image">
        @endif
    </div>
    <div class="p-4 flex flex-col">
        <h3 class="text-md font-medium mb-2 text-pretty">
            <a href="/bucketlists/{{ $bucketlist['id'] }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $bucketlist['title'] }}
            </a>
        </h3>
        <p class="text-gray-500">{{ $bucketlist['status'] }}</p>
    </div>
</div>
