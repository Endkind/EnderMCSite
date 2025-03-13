<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GameModeController extends Controller
{
    public function viewIndex() : Factory|View {
        return view('gamemode.index');
    }

    public function viewCommunityCraft() : Factory|View {
        return view('gamemode.communitycraft');
    }

    public function viewTNTTag() : Factory|View {
        return view('gamemode.tnt_tag');
    }

    public function viewAllAgainstAll() : Factory|View {
        return view('gamemode.all_against_all');
    }
}
