<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Models\Setting;
use App\Models\StaticPages;
use Illuminate\Http\Request;

class FrontQuestionController extends Controller
{
    public function questions(){
        $mypages = StaticPages::all();
        $questions1 = Question::query()->inRandomOrder()->first();
        $questions2 = Question::query()->find(2)->first();
        $questions3 = Question::query()->where('id',4)->first();
        $questions4 = Question::query()->where('id',5)->first();
        $questions5 = Question::query()->where('id',6)->first();
        $settings =Setting::all();
        $sliderCategory = Category::all();
        return view('pages.laws',compact(['questions1','questions2','questions3','questions4','questions5','questions5','mypages','settings','sliderCategory']));

    }
}
