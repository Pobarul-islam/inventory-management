<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePageItem;
use Illuminate\Http\Request;

class AdminHomePageController extends Controller
{
    public function index()
    {
        $page_data = HomePageItem::where('id', 1)->first();
        return view('admin.home_banner_show', compact('page_data'));
    }
}
