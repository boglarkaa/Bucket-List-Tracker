<x-layout>
    <form method="POST" action="/bucketlists"
          class="max-w-lg mx-auto bg-white p-6 shadow-lg rounded-lg space-y-8"
          enctype="multipart/form-data">
        @csrf

        <h2 class="text-2xl font-bold text-text mb-6">Create a New Goal</h2>

        <x-form-field class="sm:col-span-6">
            <x-forms.input type="text"
                           name="title"
                           id="title"
                           placeholder="Travel to..."
                           label="Title"
                           class="mt-2"
                           required/>
            <x-forms.error name="title"/>
        </x-form-field>

        <x-form-field class="sm:col-span-6">
            <x-forms.textarea id="description" rows="3"
                              class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 mt-2"
                              placeholder="Describe your goal"
                              label="Description"
                              name="description"/>
            <x-forms.error name="description"/>
        </x-form-field>

        <x-form-field class="sm:col-span-6">
            <x-forms.select name="category" id="category"
                            label="Category"
                            class="bg-gray-50 border border-gray-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-2"
            >
                <option value="" disabled selected>Select a category</option>
                @foreach($categories as $category)
                    <option value="{{$category}}">{{$category}}</option>
                @endforeach
            </x-forms.select>
            <x-forms.error name="category"/>
        </x-form-field>

        <x-form-field class="sm:col-span-6">
            <x-forms.select id="status" name="status"
                            class="bg-gray-50 border border-gray-300 text-stone-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full mt-2"
                            label="Status"
                            required>
                <option value="" disabled selected>Choose a status</option>
                @foreach($statuses as $status)
                    <option value="{{$status}}">{{$status}}</option>
                @endforeach
            </x-forms.select>
            <x-forms.error name="status"/>
        </x-form-field>

        <x-form-field class="sm:col-span-6">
            <x-forms.datepicker name="deadline" id="deadline"
                                label="Deadline"
                                placeholder="Select date"/>
            <x-forms.error name="deadline"/>
        </x-form-field>

        <x-form-field class="sm:col-span-6">
            <x-forms.image-input name="image" id="image"
                                 label="Upload Image"/>
            <x-forms.error name="image"/>
        </x-form-field>

        <div class="flex items-center justify-between mt-8">
            <a class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-3.5 py-2.5 rounded-md"
               href="/bucketlists">Cancel</a>
            <x-forms.button type="submit"
                            class="bg-accent text-white hover:bg-orange-400 rounded-lg px-4 py-2 shadow-md">
                Save
            </x-forms.button>
        </div>
    </form>
</x-layout>
