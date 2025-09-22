<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    public function create()
    {
        return view('portfolio.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'live_link' => 'nullable|url',
            'github_link' => 'nullable|url',
            'image' => 'nullable|image|max:2048'
        ]);

        $profile = Auth::user()->profile;

        $path = null;
        if($request->hasFile('image'))
        {
            $path = $request->file('image')->store('portfolio_images', 'public');
        }
        
        $profile->portfolios()->create([
            'title' => $request->title,
            'description' => $request->description,
            'live_link' => $request->live_link,
            'github_link' => $request->github_link,
            'image' => $path
        ]);
        return redirect('profile.edit');
    }
}
