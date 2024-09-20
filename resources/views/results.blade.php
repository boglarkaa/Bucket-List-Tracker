<x-layout>
    <div class="flex">
        <x-sidebar :categories="$categories" :statuses="$statuses"/>

        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <x-button href="bucketlists/create" class="hover:bg-orange-400">Add Goal</x-button>
                <form action="search">
                    <x-forms.input :label="false" name="q" placeholder="Search by title..."></x-forms.input>
                </form>
            </div>

            @if($bucketlists->isEmpty())
                <div class="flex flex-col items-center mt-10 text-center">
                    <img src="{{ asset('no-result.png') }}" alt="No results found" class="w-48 h-48 mb-6">

                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">No Results Found</h2>
                    <p class="text-gray-500 mb-4">Sorry, we couldn’t find any bucket list items matching your search.
                        Try
                        adjusting your search terms or filters.</p>

                    <a href="/" class="bg-primary text-white px-4 py-2 rounded-md shadow-md mb-2">
                        Return to Home
                    </a>
                </div>
            @endif

            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($bucketlists as $bucketlist)
                    <x-bucketlist-card :$bucketlist/>
                @endforeach
            </div>
        </div>
    </div>


</x-layout>