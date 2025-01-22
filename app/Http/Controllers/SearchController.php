<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchRequest;
use App\Models\Car;

class SearchController extends Controller
{


    /**
     * Show the search form to the user.
     *
     * This method displays the search page where users can input their search terms.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $query = ''; // Default value for search input
        return view('search', compact('query'));
    }

    /**
     * Display the search results.
     *
     * @param \App\Http\Requests\SearchRequest $request
     * @return \Illuminate\View\View
     */
    public function searchResult(SearchRequest $request)
    {
        try {
            $query = $request->input('search');
            $cars = $query ? Car::with('manufacturer')->search($query)->get() : [];
            return view('search', compact('cars', 'query'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An unexpected error occurred. Please try again.']);
        }
    }
}
