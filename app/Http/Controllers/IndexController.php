<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class IndexController extends Controller
{
    public function viewIndex(): Factory|View
    {
        return view("index");
    }

    public function viewImprint(): Factory|View
    {
        return view("legal.imprint");
    }

    public function viewPrivacyPolicy(): Factory|View
    {
        return view("legal.privacy-policy");
    }

    public function viewLicences(): Factory|View
    {
        return view("legal.licences");
    }

    public function viewTOS(): Factory|View
    {
        return view("legal.tos");
    }

    public function viewEmailNotVerified(): Factory|View
    {
        return view("email.notVerified");
    }

    #region Links
    public function viewDiscord(): Redirector|RedirectResponse
    {
        return redirect()->away("https://discord.com/invite/KaqbjFpzsW");
    }

    public function viewGitHub(): Redirector|RedirectResponse
    {
        return redirect()->away("https://github.com/Endkind");
    }

    public function viewDockerHub(): Redirector|RedirectResponse
    {
        return redirect()->away("https://hub.docker.com/u/endkind");
    }

    public function viewPaperMCHangar(): Redirector|RedirectResponse
    {
        return redirect()->away("https://hangar.papermc.io/Endkind_Ender");
    }

    public function viewUptime(): Redirector|RedirectResponse
    {
        return redirect()->away("https://status.endkind.net/status/endermc");
    }

    public function viewShop(): Redirector|RedirectResponse
    {
        return redirect()->away("https://endermc.tebex.io/");
    }
    #endregion

    #region FAQ
    public function viewFAQ(): Factory|View
    {
        return view("faq.index");
    }
    #region
}
