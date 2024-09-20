<x-layout>
    <div class="flex">
        @auth
            <x-sidebar :categories="$categories" :statuses="$statuses"/>
        @endauth

        <main class="flex-1 p-6">
            @auth
                <div class="flex justify-between items-center mb-6">
                    <x-button href="bucketlists/create" class="hover:bg-orange-400">Add Goal</x-button>
                    <form action="search" method="GET" class="flex items-center space-x-2">
                        <x-forms.input :label="false" name="q" placeholder="Search by title..."
                        ></x-forms.input>
                    </form>
                </div>
            @endauth

            @if($bucketlists->isEmpty())
                <div class="flex flex-col items-center mt-10">
                    <img src="{{ asset('empty-state.png') }}" alt="No bucket list items" class="w-48 h-48 mb-6">

                    <h2 class="text-2xl font-semibold text-gray-700 mb-2">No Bucket List Items Yet</h2>
                    <p class="text-gray-500 mb-4">It looks like you haven’t added any goals to your bucket list yet.
                        Start by adding your first one!</p>

                    @auth
                        <x-button href="bucketlists/create"
                                  class="bg-accent text-white hover:bg-orange-400 px-4 py-2 rounded-md shadow-md">
                            Add Your First Goal
                        </x-button>
                    @else
                        <a href="/login" class="bg-accent hover:bg-orange-400 text-white px-4 py-2 rounded-md shadow-md">
                            Log in to Add Your First Goal
                        </a>
                        <p class="mt-4">Don't have an account? <a href="/register" class="underline">Register!</a></p>
                    @endauth
                </div>
            @endif

            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                @foreach ($bucketlists as $bucketlist)
                    <x-bucketlist-card :$bucketlist/>
                @endforeach
            </div>
            <div class="flex justify-center mt-3">
                {{$bucketlists->links()}}
            </div>
        </main>
    </div>
</x-layout>
