<?php

namespace App\Http\Controllers;

use App\Models\BucketList;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class BucketListController extends Controller
{
    private array $categories = ['Travel', "Skills & Learning", "Fitness & Health",
        "Creative & Hobbies", "Career & Personal Development",
        "Adventure & Experiences", "Financial Goals", "Family & Relationships",
        "Volunteer & Charity", "Lifestyle & Minimalism"];

    private array $statuses = ['Pending', 'In progress', 'Completed'];

    public function index()
    {
        $bucketlists = BucketList::where('user_id', Auth::id())->latest()->simplePaginate(16);

        return view('bucketlists.index', [
            'bucketlists' => $bucketlists,
            'categories' => $this->categories,
            'statuses' => $this->statuses
        ]);
    }

    public function create()
    {
        return view('bucketlists.create', [
            'categories' => $this->categories,
            'statuses' => $this->statuses
        ]);
    }

    public function show(BucketList $bucketlist)
    {
        return view('bucketlists.show', ['bucketlist' => $bucketlist]);
    }

    public function store()
    {
        request()->validate([
            'title' => ['required', 'min:3', 'max:30'],
            'description' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string'],
            'deadline' => ['nullable', 'date'],
            'status' => ['required', Rule::in("Pending", "In progress", "Completed")],
            'image' => ['nullable', File::types(['jpg', 'png'])]
        ]);

        if (request()->hasFile('image')) {
            $imagePath = request()->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        $bucketlist = BucketList::create([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status'),
            'category' => request('category'),
            'deadline' => request('deadline'),
            'user_id' => Auth::id(),
            'image' => $imagePath
        ]);

        return redirect('/bucketlists');
    }

    public function edit(BucketList $bucketlist)
    {
        return view('bucketlists.edit', ['bucketlist' => $bucketlist,
            'categories' => $this->categories,
            'statuses' => $this->statuses]);
    }

    public function update(BucketList $bucketlist)
    {

        request()->validate([
            'title' => ['required', 'min:3', 'max:30'],
            'description' => ['nullable', 'string', 'max:255'],
            'category' => ['nullable', 'string'],
            'deadline' => ['nullable', 'date'],
            'status' => ['required', Rule::in("Pending", "In progress", "Completed")],
            'image' => ['nullable', File::types(['jpg', 'png'])]
        ]);

        if (request()->hasFile('image')) {
            $imagePath = request()->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        $bucketlist->update([
            'title' => request('title'),
            'description' => request('description'),
            'status' => request('status'),
            'category' => request('category'),
            'deadline' => request('deadline'),
            'image' => $imagePath,
        ]);

        return redirect('/bucketlists');
    }

    public function destroy(BucketList $bucketlist)
    {
        $bucketlist->delete();

        return redirect('/bucketlists');
    }
}
