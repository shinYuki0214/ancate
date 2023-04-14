<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        //
        $topage = true;
        return view('form.index', compact('topage'));
    }
    public function checkPage1(Request $request)
    {
        $request->session()->put('q1', $request->question1);
        $request->session()->put('q2', $request->question2);
        $request->session()->put('q3', $request->question3);
        $request->session()->put('q4', $request->question4);
        if ($request->question4 == 5) {
            return to_route('google');
            exit;
        } else {
            return to_route('page2');
        }
    }
    public function page2()
    {
        //
        return view('form.index2');
    }
    public function checkPage2(Request $request)
    {
        $data = $request->session()->all();
        $q1 = $data['q1'];
        $q2 = $data['q2'];
        $q3 = $data['q3'];
        $q4 = $data['q4'];
        $q5 = $request->question5;

        Form::create([
            'q1' => $q1,
            'q2' => $q2,
            'q3' => $q3,
            'q4' => $q4,
            'q5' => $q5,
        ]);

        return to_route('thanks');
    }

    public function google()
    {
        //
        return view('form.google');
    }

    public function checkGoogle(Request $request)
    {
        if ($request->googleReview) {
            $data = $request->session()->all();
            $q1 = $data['q1'];
            $q2 = $data['q2'];
            $q3 = $data['q3'];
            $q4 = $data['q4'];
            $q5 = 'googleで評価';
            Form::create([
                'q1' => $q1,
                'q2' => $q2,
                'q3' => $q3,
                'q4' => $q4,
                'q5' => $q5,
            ]);
            return to_route('googleThanks');
            exit;
        }

        return to_route('page2');
    }

    public function thanks()
    {
        //
        return view('form.thanks');
    }
    public function googleThanks()
    {
        //
        return view('form.googlethanks');
    }
}
