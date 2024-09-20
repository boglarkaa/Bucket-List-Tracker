<x-layout>
    <div class="max-w-lg mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-2xl font-bold text-gray-900">Bucketlist Goal</h3>
        </div>
        <div class="px-6 py-4">
            <dl class="divide-y divide-gray-200">
                <div class="py-4 flex items-start justify-between">
                    <dt class="text-sm font-semibold text-gray-600">Title</dt>
                    <dd class="text-sm text-gray-700">{{$bucketlist["title"]}}</dd>
                </div>
                <div class="py-4 flex items-start justify-between">
                    <dt class="text-sm font-semibold text-gray-600">Description</dt>
                    <dd class="text-sm text-gray-700">{{$bucketlist["description"] ?? 'None'}}</dd>
                </div>
                <div class="py-4 flex items-start justify-between">
                    <dt class="text-sm font-semibold text-gray-600">Status</dt>
                    <dd class="text-sm text-gray-700">{{$bucketlist["status"]}}</dd>
                </div>
                <div class="py-4 flex items-start justify-between">
                    <dt class="text-sm font-semibold text-gray-600">Category</dt>
                    <dd class="text-sm text-gray-700">{{$bucketlist["category"] ?? "None"}}</dd>
                </div>
                <div class="py-4 flex items-start justify-between">
                    <dt class="text-sm font-semibold text-gray-600">Deadline</dt>
                    <dd class="text-sm text-gray-700">{{$bucketlist["deadline"] ?? "Not defined"}}</dd>
                </div>
            </dl>
        </div>
        <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
            <a class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3.5 py-2.5 rounded-md" href="/bucketlists">Back</a>
            <div class="flex items-center gap-4">
                <x-button href="/bucketlists/{{$bucketlist->id}}/edit" class="bg-accent hover:bg-orange-400 text-white">Edit Goal</x-button>
                <x-forms.button form="delete-form" class="bg-secondary hover:bg-red-900 text-white">Delete</x-forms.button>
            </div>
        </div>
    </div>
    <form method="POST" action="/bucketlists/{{$bucketlist->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
