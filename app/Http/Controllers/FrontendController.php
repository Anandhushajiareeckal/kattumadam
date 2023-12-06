<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\history;
use App\Models\pooja;
use App\Models\offering;
use App\Models\offering_detail;
use App\Models\pooja_timing;
use App\Models\gallery;
use App\Models\tt_about;
use App\Models\contact;
use App\Models\baner;
use App\Models\home_banner;
use App\Models\festivals;
use App\Models\about;
use App\Models\home_about;
class FrontendController extends Controller
{
    public function index(){
        $home_banner = home_banner::all();
        $gallery = gallery::all();
        $event = event::all();
        $home_about = home_about::find($id = 1);
        return view('frontend.index',[
            'home_banner'=>$home_banner,
            'gallery'=>$gallery,
            'event'=>$event,
            'home_about'=>$home_about
        ]);
    }

    public function about(){
        $banner = baner ::find($id=1) ;
        $about = about::find($id=1);
        return view('frontend.about',[
            'banner'=>$banner,
            'about'=>$about,
        ]);
    }

    public function history(){
        $history = history::find($id=1);
        $banner = baner ::find($id=2) ;
        $event = event::all();
        return view('frontend.history',[
            'history'=>$history,
            'banner'=>$banner,
            'event'=>$event,
        ]);
    }

    public function poojas(){
        $pooja = pooja::find($id=1);
        $banner = baner ::find($id=3) ;
        $event = event::all();
        return view('frontend.poojas',[
            'pooja'=>$pooja,
            'banner'=>$banner,
            'event'=>$event,
        ]);
    }

    public function pooja_time(){
        $pooja_timing = pooja_timing::find($id=1);
        $banner = baner ::find($id=4);
        return view('frontend.pooja_time',['pooja_timing'=>$pooja_timing,'banner'=>$banner]);
    }

    public function gallery(){
        $gallery = gallery::all();
        $banner = baner ::find($id=6) ;
        return view('frontend.gallery',['gallery'=>$gallery,'banner'=>$banner]);
    }

    public function events(){
        $event = event::all();
        $banner = baner ::find($id=7);
        return view('frontend.event',['event'=>$event,'banner'=>$banner]);
    }

    public function event_detail(string $id){
        $event = event::find($id);
        $banner = baner ::find($id=7);
        return view('frontend.event_detail',['event'=>$event,'banner'=>$banner]);
    }

    public function offerings(){
        $offering = offering::all();
        $offering_details = offering_detail::all();
        $banner = baner ::find($id=5);
        return view('frontend.offerings',[
            'offering'=>$offering,
            'offering_details' =>$offering_details,
            'banner'=>$banner
        ]);
    }

    public function festivals(){
        $festivals = festivals::find($id=1);
        $banner = baner ::find($id=8) ;
        $event = event::all();
        return view('frontend.festivals',[
            'banner'=>$banner,
            'festivals'=>$festivals,
            'event'=>$event 
        ]);
    }

    public function tt_about(){
        $tt_about = tt_about::find($id = 1);
        $banner = baner ::find($id=8) ;
        return view('frontend.tt_about',['tt_about'=>$tt_about,'banner'=>$banner]);
    }

    public function tt_history(){
        $tt_history = tt_about::find($id = 2);
        $banner = baner ::find($id=10) ;
        $event = event::all();
        return view('frontend.tt_history',[
            'tt_history'=>$tt_history,
            'banner'=>$banner,
            'event'=>$event 
        ]);
    }

    public function contact(){
        $contact = contact::find($id = 1);
        $banner = baner ::find($id=11) ;
        return view('frontend.contact',['contact'=>$contact,'banner'=>$banner]);
    }
}
