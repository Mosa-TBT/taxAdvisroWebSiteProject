<?php

namespace App\Http\Controllers;

use App\Models\AboutPageContent;
use App\Models\ContactDetails;
use App\Models\HeroSection;
use App\Models\Service;
use App\Models\TrustReason;

class PagesController extends Controller
{
    public function showHome() {

        return view('home', [
            'services' => Service::limit(6)->get(),
            'trustReasons' => TrustReason::all(),
            "hero" => HeroSection::where("page", "home")->first(),
        ]);

    }

    public function showService() {

        return view('services', [
            'services' => Service::all(),
            "hero" => HeroSection::where("page", "services")->first(),
        ]);

    }

    public function showAbout() {

        return view('about', [
            "sections" => AboutPageContent::all(),
            "hero" => HeroSection::where("page", "about")->first(),
        ]);

    }

    public function showContact() {

        return view('contact', [
            "contactDetails" => ContactDetails::first(),
            "hero" => HeroSection::where("page", "contact")->first(),
        ]);

    }
}
