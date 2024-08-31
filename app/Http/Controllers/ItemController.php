<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10); // Fetch 10 items per page
        return view('items.index', compact('items'));
    }
}
