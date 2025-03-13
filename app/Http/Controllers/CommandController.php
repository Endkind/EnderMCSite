<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CommandController extends Controller
{
    public function viewIndex() : Factory|View {
        return view('command.index');
    }

    #region General
    public function viewGeneral() : Factory|View {
        return view('command.general');
    }

    public function viewGeneralLobby() : Factory|View {
        return view('command.general.lobby');
    }
    #endregion

    #region CommunityCraft
    public function viewCommunityCraft1_20_1(): Factory|View {
        return view('command.communitycraft.1_20_1');
    }

    public function viewCommunityCraft1_21_4(): Factory|View {
        return view('command.communitycraft.1_21_4');
    }
    #endregion
}
