<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.setting.index');
    }

    public function general(Request $request)
    {
        Setting::set('site_name', $request->site_name);
        Setting::set('footer_text', $request->footer_text);
        return redirect()->route('setting');
    }
    public function address(Request $request)
    {
        Setting::set('address', $request->address);
        Setting::set('email', $request->email);
        Setting::set('mobile', $request->mobile);
        return redirect()->route('setting');
    }

    public function social(Request $request)
    {
        Setting::set('instagram', $request->instagram);
        Setting::set('facebook', $request->facebook);
        Setting::set('twitter', $request->twitter);
        Setting::set('linkedin', $request->linkedin);
        return redirect()->route('setting');
    }
}
