<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestbookController extends Controller
{
    public function create()
    {
        return view('guestbook.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:500',
            'notes' => 'nullable|string|max:255',
        ]);

        Guest::create($request->all());

        return redirect()->back()->with('success', 'Thank you for your message!');
    }
}
