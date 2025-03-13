<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RuleController extends Controller
{
    public function viewIndex() : Factory|View {
        return view('rule.index');
    }

    public function viewGeneral() : Factory|View {
        return view('rule.general');
    }

    public function viewCommunityCraft() : Factory|View {
        return view('rule.communitycraft');
    }
}
