<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Common;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    /**
     * Display a general resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function general()
    {
        return view('admin.common.index');
    }

    /**
     * Create a general resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Common::set('welcome_title', $request->welcome_title);
        Common::set('welcome_caption', $request->welcome_caption);
        Common::set('feature_1', $request->feature_1);
        Common::set('feature_2', $request->feature_2);
        Common::set('total_project', $request->total_project);
        Common::set('happy_client', $request->happy_client);
        return redirect()->route('general');
    }

    /**
     * Display a profile resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $about_text = Common::where('key', 'about_text')->value('value');
        return view('admin.profile.index', compact('about_text'));
    }

    /**
     * Create a profile resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProfile(Request $request, Common $common)
    {
        Common::where('key', 'about_text')->update([
            'value' => $request->about_text
        ]);
        return redirect()->route('profile');
    }
}
