<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    class pagesController extends Controller
{
    public function getVideos ()
    {
        return view('pages.videos');
    }


    public function getHome () {
    return view('pages.index');
    }

    public function getMyCodeLabTasks()
    {
        return view('pages.myCodelabTasks');
    }

        public function getDay2()
        {
            return view('pages.secondDay');
        }

        public function getHw()
        {
            return view('pages.hw');
        }

        public function getHw2()
        {
            return view('pages.Hw2');
        }

            public function getDay3()
        {
            return view('pages.thirdDay');
        }


            public function getDay4()
        {
            return view('pages.fourthDay');
        }

        public function getDay5()
        {
            return view('pages.fifthDay');
        }

        public function getSignUp()
        {
            return view('pages.signUp');
        }

        public function getLogin()
        {
            return view('pages.login');
        }

    }