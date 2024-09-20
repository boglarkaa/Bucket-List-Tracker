<?php

namespace App\Http\Controllers;

use App\Models\BucketList;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    private array $categories = ['Travel', "Skills & Learning", "Fitness & Health",
        "Creative & Hobbies", "Career & Personal Development",
        "Adventure & Experiences", "Financial Goals", "Family & Relationships",
        "Volunteer & Charity", "Lifestyle & Minimalism"];
    private array $statuses = ['Pending', 'In progress', 'Completed'];

    public function __invoke(Request $request)
    {
        $query = BucketList::with(['user']);

        if ($request->has('q') && $request->input('q') !== '') {
            $query->where('title', 'LIKE', '%' . $request->input('q') . '%')
                ->where('user_id', '=', request()->user()->id);
        }

        if ($request->has('category') && $request->input('category') !== '') {
            $query->where('category', $request->input('category'))
                ->where('user_id', '=', request()->user()->id);
        }

        if ($request->has('status') && $request->input('status') !== '') {
            $query->where('status', $request->input('status'))
                ->where('user_id', '=', request()->user()->id);
        }

        $bucketlists = $query->get();

        return view('results', ['bucketlists' => $bucketlists,
            'categories' => $this->categories,
            'statuses' => $this->statuses]);
    }
}
