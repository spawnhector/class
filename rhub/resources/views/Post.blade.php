<?php

use App\Models\Reply;
use Illuminate\Support\Facades\DB;
function custom_echo($x, $length)
{
if (strlen($x) <= $length) { echo "<span class='content'>$x</span>" ; } else { $y=substr($x, 0, $length) . '...' ;
    echo "<span class='content'>$y<a href='#' class='viewmore'>VIEW MORE<i class='fas fa-angle-right'></i></a></span>" ;
    } } function datecreate($date) { if ($date=='1' ) { echo 'JAN' ; } elseif ($date=='2' ) { echo 'FEB' ; } elseif
    ($date=='3' ) { echo 'MAR' ; } elseif ($date=='4' ) { echo 'APR' ; } elseif ($date=='5' ) { echo 'MAY' ; } elseif
    ($date=='6' ) { echo 'JUN' ; } elseif ($date=='7' ) { echo 'JUL' ; } elseif ($date=='8' ) { echo 'AUG' ; } elseif
    ($date=='9' ) { echo 'SEP' ; } elseif ($date=='10' ) { echo 'OCT' ; } elseif ($date=='11' ) { echo 'NOV' ; } elseif
    ($date=='12' ) { echo 'DEC' ; } } ?> <x-app-layout>
    {{-- <x-slot name="header"> --}}
    @section('content')
        @extends('layouts.dashboard')
        <div x-data="setup()" :class="{ 'dark': isDark }">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white"
                style="margin-top: 42px;width:100%">

                <!-- Header -->
                <div class="fixed w-full flex items-center justify-between h-14 text-white z-10"
                    style="position: fixed;top:0;width:1450px">

                    <div class="flex justify-between items-center h-14 bg-blue-800 dark:bg-gray-800 header-right">
                        <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline"
                            style="margin-left: 50px">
                            {{ config('app.name', 'Laravel') }}
                        </a>

                        <ul class="flex items-center" style="outline: none">
                            <li>
                                <button aria-hidden="true" @click="toggleTheme"
                                    class="group p-2 transition-colors duration-200 rounded-full shadow-md bg-blue-200 hover:bg-blue-200 dark:bg-gray-50 dark:hover:bg-gray-200 text-gray-900 focus:outline-none">
                                    <svg x-show="isDark" width="24" height="24"
                                        class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                                    </svg>
                                    <svg x-show="!isDark" width="24" height="24"
                                        class="fill-current text-gray-700 group-hover:text-gray-500 group-focus:text-gray-700 dark:text-gray-700 dark:group-hover:text-gray-500 dark:group-focus:text-gray-700"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="flex items-center mr-4 hover:text-blue-100"
                                    onclick="event.preventDefault();
                                                                            document.getElementById('logout-form').submit();">
                                    <span class="inline-flex mr-1">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                            </path>
                                        </svg>
                                    </span>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./Header -->



                <div class="h-full mt-14 mb-10">

                    <div style="display:grid">
                        <div style="grid-column:1;">
                            <!-- Statistics Cards -->
                            <div class="grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4"
                                style="position: fixed;width: 22rem;top: 7.5rem;">

                                <div
                                    class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                                    <div
                                        class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                                        <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="text-right">
                                        <p class="text-2xl">1,257 </p>
                                        <p>Visitors</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ./Statistics Cards -->
                        </div>


                        <style>
                            .viewmore {
                                background-color: #1e40af;
                                margin-left: 10px;
                                padding: 5px;
                                font-size: 11px;
                                color: whitesmoke;
                                border-radius: 3px;
                                letter-spacing: 1.5px;
                            }

                            .content {
                                line-height: 30px;
                            }

                            .viewmore:hover {
                                color: whitesmoke;
                            }

                            .fas {
                                margin-left: 6px;
                                margin-right: 6px;
                            }

                            .viewmore:hover .fas {
                                color: #e74c3c;
                            }

                        </style>
                        <div style="grid-column:2;">
                            <!-- Task Summaries -->
                            <div class=" p-4 gap-4 text-black dark:text-white" style="width:500px;margin-right:90px">
                                <div class="md:col-span-2 xl:col-span-3" style="margin-bottom: 20px">
                                    <h3 class="text-lg font-semibold">Task summaries of recent sprints</h3>
                                </div>
                                {{-- here --}}

                                <?php foreach ($post as $user_post): ?>
                                {{-- {{dd($post)}} --}}
                                {{-- {{dd($comments)}} --}}
                                <?php
                                $datestrain = explode(' ', $user_post->created_at);
                                $date = explode('-', $datestrain[0]);
                                $origin = new DateTime($user_post->created_at);
                                $target = new DateTime('now');
                                $interval = $origin->diff($target);

                                $image = explode('.', $user_post->image);
                                ?>
                                <div class="md:col-span-2 xl:col-span-1" style="margin-bottom:20px">
                                    <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                                        <div class="flex justify-between py-1 text-black dark:text-white">
                                            <h3 class="text-sm font-semibold">
                                                @foreach ($user as $users)
                                                    @if ($users->id == $user_post->author_id)
                                                        {{ '#' . $users->name }}
                                                    @endif
                                                @endforeach
                                            </h3>
                                            <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                <path
                                                    d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                                            </svg>
                                        </div>
                                        <div class="text-sm text-black dark:text-gray-50 mt-2">
                                            <div class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer"
                                                style="font-size:11px;font-weight:bold">


                                                <div class="post-module">
                                                    <!-- Thumbnail-->
                                                    <div class="thumbnail">
                                                        <div class="date">
                                                            <div class="day">{{ $date[2] }}</div>
                                                            <div class="month"><?php datecreate($date[1]);
                                                                ?></div>
                                                        </div><img
                                                            src="http://localhost/xampp/rhub/storage/app/{{ $user_post->image }}"
                                                            alt="" style="height: 300px;">
                                                    </div>
                                                    <!-- Post Content-->
                                                    <div class="post-content">
                                                        <div class="category">

                                                            <?php
                                                            $query = 'SELECT `name`,`parent_id` FROM `categories` WHERE
                                                            `id`=?';
                                                            $categore = DB::select($query, [$user_post->category_id]);
                                                            $countu = count($categore);
                                                            foreach ($categore as $dos) {
                                                            if ($dos->parent_id == null) {
                                                            echo "<span>$dos->name</span>";
                                                            break;
                                                            } else {
                                                            $query1 = 'SELECT `name`,`parent_id` FROM `categories` WHERE
                                                            `id`=? || `id`=?';
                                                            $categore1 = DB::select($query1, [$user_post->category_id,
                                                            $dos->parent_id]);
                                                            $countu1 = count($categore1);
                                                            $count1 = 0;
                                                            foreach ($categore1 as $dos1) {
                                                            if ($count1 == $countu1 - 1) {
                                                            echo "<span>$dos1->name </span>";
                                                            } else {
                                                            if ($dos1->parent_id == null) {
                                                            echo "<span>$dos1->name <i class='fas fa-angle-right'
                                                                    id='route-arrow' style='color: #1e40af;'></i></span>";
                                                            } else {
                                                            $query2 = 'SELECT `name`,`parent_id` FROM `categories` WHERE
                                                            `id`=? || `id`=?';
                                                            $categore2 = DB::select($query2, [$dos1->parent_id,
                                                            $dos->parent_id]);
                                                            $countu2 = count($categore2);
                                                            $count2 = 0;
                                                            foreach ($categore2 as $dos2) {
                                                            if ($count2 == $countu2 - 1) {
                                                            echo "<span>$dos2->name<i class='fas fa-angle-right'
                                                                    id='route-arrow' style='color: #1e40af;'></i></span>";
                                                            } else {
                                                            if ($dos2->parent_id == null) {
                                                            echo "<span>$dos2->name <i class='fas fa-angle-right'
                                                                    id='route-arrow' style='color: #1e40af;'></i></span>";
                                                            } else {
                                                            // to continue
                                                            // echo "<span>$dos->name 2</span>";
                                                            }
                                                            }
                                                            ++$count2;
                                                            }
                                                            }
                                                            }
                                                            ++$count1;
                                                            }
                                                            }
                                                            }
                                                            ?>

                                                        </div>
                                                        <h1 class="title">{{ $user_post->title }}</h1>
                                                        <h2 class="sub_title">The city that never sleeps.</h2>
                                                        <div style="padding: 10px">
                                                            <?php custom_echo($user_post->body, 100); ?>
                                                        </div>
                                                        <div class="post-meta">
                                                            {{-- <button type="submit" name="toggle_comment" id="myBtn" ><span><i class="fa fa-comments"></i><a> 39 comments</a></span></button> --}}
                                                            <form action={{ route('dashboard.comment') }} method="post">
                                                                @csrf
                                                                <span class="timestamp"><i class="fa fa-clock-"></i>
                                                                    <?php if ($interval->y != 0) {
                                                                    echo $interval->y . ' ' . 'Year';
                                                                    } elseif ($interval->m != 0) {
                                                                    echo $interval->m . ' ' . 'Months';
                                                                    } elseif ($interval->d != 0) {
                                                                    echo $interval->d . ' ' . 'Day';
                                                                    } elseif ($interval->h != 0) {
                                                                    echo $interval->h . ' ' . 'Hour';
                                                                    } elseif ($interval->i != 0) {
                                                                    echo $interval->i . ' ' . 'Min';
                                                                    } elseif ($interval->s != 0) {
                                                                    echo $interval->s . ' ' . 'Sec';
                                                                    } ?>
                                                                    ago
                                                                </span>
                                                                <button name="toggle_comment"
                                                                    value={{ $user_post->id }}><span><i
                                                                            class="fa fa-comments"></i><a>
                                                                                <?php 
                                                                                    $count_comment = 0;
                                                                                    foreach($comments as $comment){
                                                                                        if($user_post->id == $comment->post_id){
                                                                                            ++$count_comment;                                                                                        }
                                                                                    }
                                                                                ?>
                                                                            {{ $count_comment }} comments</a></span></button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                                <?php
                                // $show_comment = "";
                                // if (isset($_GET['toggle_comment'])) {
                                // $show_comment = $_GET['toggle_comment'];
                                // }
                                ?>

                                <?php if (!empty($show_comment)): ?>
                                <style>
                                    #myModal {
                                        display: block;
                                    }

                                </style>
                                <?php endif; ?>
                                <div class="container">
                                    <!-- The Modal -->
                                    <div id="myModal" class="modal" style="background-color: #000000c7;">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="max-w-xl mx-auto mt-10">
                                                {{-- write --}}
                                                <div class="bg-white p-5 modal__content rounded">
                                                    <div class="modal__header mb-4">
                                                        <div class="p-2 rounded-full bg-purple-lightest inline-block">
                                                            <i class="fas fa-comments text-2xl text-purple-dark"></i>
                                                        </div>
                                                    </div>
                                                    <form action={{ route('dashboard.comment') }} method="post">
                                                        @csrf
                                                        <div class="modal__body">
                                                            <p class="text-grey-darkest font-medium mb-1 text-base"> Leave a
                                                                Comment</p>
                                                            <small class="text-grey-dark tracking-wide font-light"> Type
                                                                your
                                                                Comment Below</small>
                                                            <div
                                                                class="mt-4 border border-grey w-full border-1 rounded p-2 relative focus:border-red ">
                                                                <input type="text"
                                                                    name="content"
                                                                    class="pl-8 text-grey-dark font-light w-full text-sm font-medium tracking-wide"
                                                                    placeholder="Type your commnet...">
                                                                <img src="https://content-static.upwork.com/uploads/2014/10/01073427/profilephoto1.jpg"
                                                                    alt=""
                                                                    class="w-6 rounded-full absolute pin-l pin-t ml-2 "
                                                                    style="/* margin-top: -2rem; */position: absolute;top: -8rem;right: 2rem;width: 6rem;">
                                                            </div>
                                                            <div class="mt-6  border"></div>
                                                            <div class="flex relative mt-6">
                                                                <i class="fas fa-globe text-grey-dark"></i>
                                                                <div class=" ml-2 ">
                                                                    <p
                                                                        class="font-medium text-sm text-grey-darkest font-semibold">
                                                                        Anyone can view this commnet.</p>
                                                                    <small class="text-grey-dark text-xs ">If turned off,
                                                                        only
                                                                        the owner sees your commmet</small>

                                                                    <i class="fas fa-toggle-on fa-2x ml-auto text-blue"></i>
                                                                </div>
                                                            </div>
                                                            <div class="modal__footer mt-6">
                                                                <div class="text-right">
                                                                    <button name="toggle_comment"
                                                                        class="bg-white border-2 p-3 rounded text-sm font-semibold hover:bg-grey-light">Cancel</button>
                                                                    <button
                                                                        class="bg-white border-2 p-3 rounded text-sm font-semibold hover:bg-grey-light">Submit
                                                                        Comment</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                {{-- show --}}
                                                <div class="antialiased mx-auto max-w-screen-sm"
                                                    style="font-size: 25px;color: whitesmoke;">
                                                    @foreach ($comments as $comment)
                                                        <?php if ($show_comment == $comment->post_id): ?>
                                                        <?php
                                                        $datestrain1 = explode(' ', $comment->created_at);
                                                        $date1 = explode('-', $datestrain1[0]);
                                                        $origin1 = new DateTime($comment->created_at);
                                                        $target1 = new DateTime('now');
                                                        $interval1 = $origin1->diff($target1);
                                                        ?>
                                                        <h3 class=" mb-4 text-lg font-semibold text-gray-900"
                                                            style="font-size: 20px;color: whitesmoke;">Comments</h3>
                                                        <div class="space-y-4">
                                                            <div class="flex">
                                                                <div class="flex-shrink-0 mr-3">
                                                                    <?php
                                                                    $set_img_size = explode('.', $comment->image);
                                                                    $join = $set_img_size[0] . '-small.' . $set_img_size[1];
                                                                    ?>
                                                                    <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                                        src="http://localhost/xampp/rhub/storage/app/{{ $join }}"
                                                                        alt="">
                                                                </div>
                                                                <div
                                                                    class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                                    <strong>Sarah</strong> <span
                                                                        class="text-xs text-gray-400">
                                                                        <?php if ($interval1->y != 0) {
                                                                        echo $interval1->y . ' ' . 'Year';
                                                                        } elseif ($interval1->m != 0) {
                                                                        echo $interval1->m . ' ' . 'Months';
                                                                        } elseif ($interval1->d != 0) {
                                                                        echo $interval1->d . ' ' . 'Day';
                                                                        } elseif ($interval1->h != 0) {
                                                                        echo $interval1->h . ' ' . 'Hour';
                                                                        } elseif ($interval1->i != 0) {
                                                                        echo $interval1->i . ' ' . 'Min';
                                                                        } elseif ($interval1->s != 0) {
                                                                        echo $interval1->s . ' ' . 'Sec';
                                                                        } ?> ago
                                                                    </span>
                                                                    <p class="text-lg">
                                                                        {{ $comment->content }}
                                                                    </p>
                                                                    <div class="mt-4 flex items-center">
                                                                        <?php
                                                                        $reply_image = [];
                                                                        $count = 0;
                                                                        foreach ($replys as $replies) {
                                                                        if ($replies->comment_id == $comment->id) {
                                                                        $set_img_size = explode('.', $replies->image);
                                                                        $join = $set_img_size[0] . '-cropped.' .
                                                                        $set_img_size[1];
                                                                        // print_r($join);
                                                                        array_push($reply_image, $join);
                                                                        $count = $count + 1;
                                                                        }
                                                                        }
                                                                        ?>
                                                                        <div class="flex -space-x-2 mr-2">
                                                                            <img class="rounded-full w-6 h-6 border border-white"
                                                                                src="http://localhost/xampp/rhub/storage/app/{{ $reply_image[0] }}"
                                                                                alt="">
                                                                            <img class="rounded-full w-6 h-6 border border-white"
                                                                                src="http://localhost/xampp/rhub/storage/app/{{ $reply_image[1] }}"
                                                                                alt="">
                                                                        </div>
                                                                        

                                                                        <button type="button" class="btn btn2 btn-primary">
                                                                            {{ $count . ' replies' }}
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="reply_popup" id="replies">
                                                                    <div
                                                                        style="width: 505px;left: -110px;top: 70px;background-color: #7fffd400;">
                                                                        <div class="flex">
                                                                            <div class="flex-shrink-0 mr-3">
                                                                                <?php
                                                                                $set_img_size = explode('.',
                                                                                $comment->image);
                                                                                $join = $set_img_size[0] . '-small.' .
                                                                                $set_img_size[1];
                                                                                ?>
                                                                                <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                                                    src="http://localhost/xampp/rhub/storage/app/{{ $join }}"
                                                                                    alt="">
                                                                            </div>
                                                                            <div
                                                                                class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                                                <strong>Sarah</strong> <span
                                                                                    class="text-xs text-gray-400">
                                                                                    <?php if ($interval1->y
                                                                                    != 0) {
                                                                                    echo $interval1->y . ' ' . 'Year';
                                                                                    } elseif ($interval1->m != 0) {
                                                                                    echo $interval1->m . ' ' . 'Months';
                                                                                    } elseif ($interval1->d != 0) {
                                                                                    echo $interval1->d . ' ' . 'Day';
                                                                                    } elseif ($interval1->h != 0) {
                                                                                    echo $interval1->h . ' ' . 'Hour';
                                                                                    } elseif ($interval1->i != 0) {
                                                                                    echo $interval1->i . ' ' . 'Min';
                                                                                    } elseif ($interval1->s != 0) {
                                                                                    echo $interval1->s . ' ' . 'Sec';
                                                                                    } ?> ago
                                                                                </span><button type="button" class="btn btn1 btn-primary">
                                                                                  close
                                                                              </button>
                                                                                <p class="text-lg">
                                                                                    {{ $comment->content }}
                                                                                </p>
                                                                                <h4
                                                                                    class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">
                                                                                    Replies</h4>
                                                                                <?php foreach ($replys as
                                                                                $replies): ?>
                                                                                <?php if
                                                                                ($replies->comment_id == $comment->id): ?>
                                                                                <div class="space-y-4"
                                                                                    style="color: black;font-size:20px;margin:20px">
                                                                                    <div class="flex">
                                                                                        <div class="flex-shrink-0 mr-3">
                                                                                            <?php
                                                                                            $set_img_size = explode('.',
                                                                                            $replies->image);
                                                                                            $join = $set_img_size[0] .
                                                                                            '-cropped.' . $set_img_size[1];
                                                                                            ?>
                                                                                            <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                                                                src="http://localhost/xampp/rhub/storage/app/{{ $join }}"
                                                                                                alt="">
                                                                                        </div>
                                                                                        <?php
                                                                                        $origin2 = new
                                                                                        DateTime($replies->created_at);
                                                                                        $target2 = new DateTime('now');
                                                                                        $interval2 =
                                                                                        $origin2->diff($target2);
                                                                                        ?>
                                                                                        <div
                                                                                            class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                                                            <strong>Sarah</strong>
                                                                                            <span
                                                                                                class="text-xs text-gray-400">
                                                                                                <?php if
                                                                                                ($interval2->y != 0) {
                                                                                                echo $interval2->y . ' ' .
                                                                                                'Year';
                                                                                                } elseif ($interval2->m !=
                                                                                                0) {
                                                                                                echo $interval2->m . ' ' .
                                                                                                'Months';
                                                                                                } elseif ($interval2->d !=
                                                                                                0) {
                                                                                                echo $interval2->d . ' ' .
                                                                                                'Day';
                                                                                                } elseif ($interval2->h !=
                                                                                                0) {
                                                                                                echo $interval2->h . ' ' .
                                                                                                'Hour';
                                                                                                } elseif ($interval2->i !=
                                                                                                0) {
                                                                                                echo $interval2->i . ' ' .
                                                                                                'Min';
                                                                                                } elseif ($interval2->s !=
                                                                                                0) {
                                                                                                echo $interval2->s . ' ' .
                                                                                                'Sec';
                                                                                                } ?>
                                                                                                ago
                                                                                            </span>
                                                                                            <p class="text-lg sm:text-sm">
                                                                                                {{ $replies->content }}
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <?php endif; ?>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php endif; ?>
                                                    @endforeach
                                                </div>
                                                {{--  --}}
                                            </div>
                                        </div>

                                    </div>
                                    {{-- here --}}
                                </div>
                                <!-- ./Task Summaries -->
                            </div>
                            <div style="grid-column:3;width: 364px;position:fixed;right: 40px;top: 120px;height:500px">
                                <!-- Social Traffic -->
                                <div
                                    class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                                    <div class="rounded-t mb-0 px-0 border-0">
                                        <div class="flex flex-wrap items-center px-4 py-2">
                                            <div class="relative w-full max-w-full flex-grow flex-1">
                                                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Social
                                                    Traffic</h3>
                                            </div>
                                            <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                                <button
                                                    class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                    type="button">See all</button>
                                            </div>
                                        </div>
                                        <div class="block w-full overflow-x-auto">
                                            <table class="items-center w-full bg-transparent border-collapse">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                            Referral</th>
                                                        <th
                                                            class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                            Visitors</th>
                                                        <th
                                                            class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="text-gray-700 dark:text-gray-100">
                                                        <th
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                            Facebook</th>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            5,480</td>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            <div class="flex items-center">
                                                                <span class="mr-2">70%</span>
                                                                <div class="relative w-full">
                                                                    <div
                                                                        class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                                        <div style="width: 70%"
                                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-gray-700 dark:text-gray-100">
                                                        <th
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                            Twitter</th>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            3,380</td>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            <div class="flex items-center">
                                                                <span class="mr-2">40%</span>
                                                                <div class="relative w-full">
                                                                    <div
                                                                        class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                                        <div style="width: 40%"
                                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-gray-700 dark:text-gray-100">
                                                        <th
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                            Instagram</th>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            4,105</td>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            <div class="flex items-center">
                                                                <span class="mr-2">45%</span>
                                                                <div class="relative w-full">
                                                                    <div
                                                                        class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                                                                        <div style="width: 45%"
                                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-gray-700 dark:text-gray-100">
                                                        <th
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                            Google</th>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            4,985</td>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            <div class="flex items-center">
                                                                <span class="mr-2">60%</span>
                                                                <div class="relative w-full">
                                                                    <div
                                                                        class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                                                                        <div style="width: 60%"
                                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="text-gray-700 dark:text-gray-100">
                                                        <th
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                            Linkedin</th>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            2,250</td>
                                                        <td
                                                            class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                            <div class="flex items-center">
                                                                <span class="mr-2">30%</span>
                                                                <div class="relative w-full">
                                                                    <div
                                                                        class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                                                                        <div style="width: 30%"
                                                                            class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-700">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./Social Traffic -->
                                {{-- <!-- Recent Activities -->
                                <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded" style="margin-top:20px">
                                    <div class="rounded-t mb-0 px-0 border-0">
                                    <div class="flex flex-wrap items-center px-4 py-2">
                                        <div class="relative w-full max-w-full flex-grow flex-1">
                                        <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recent Activities</h3>
                                        </div>
                                        <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                                        <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                                        </div>
                                    </div>
                                    <div class="block w-full">
                                        <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Today
                                        </div>
                                        <ul class="my-1">
                                        <li class="flex px-4">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-indigo-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36"><path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path></svg>
                                            </div>
                                            <div class="flex-grow flex items-center border-b border-gray-100 dark:border-gray-400 text-sm text-gray-600 dark:text-gray-100 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Nick Mark</a> mentioned <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Sara Smith</a> in a new post
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                                                </a>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        <li class="flex px-4">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-red-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36"><path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path></svg>
                                            </div>
                                            <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                The post <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Post Name</a> was removed by <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Nick Mark</a>
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                                                </a>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                        <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        Yesterday
                                        </div>
                                        <ul class="my-1">
                                        <li class="flex px-4">
                                            <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3">
                                            <svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36"><path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path></svg>
                                            </div>
                                            <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                                            <div class="flex-grow flex justify-between items-center">
                                                <div class="self-center">
                                                <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">240+</a> users have subscribed to <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Newsletter #1</a>
                                                </div>
                                                <div class="flex-shrink-0 ml-2">
                                                <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                                                    View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                                                </a>
                                                </div>
                                            </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <!-- ./Recent Activities --> --}}
                            </div>
                        </div>


                        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">




                        </div>



                  
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
            <script>
                const setup = () => {
                    const getTheme = () => {
                        if (window.localStorage.getItem('dark')) {
                            return JSON.parse(window.localStorage.getItem('dark'))
                        }
                        return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches
                    }

                    const setTheme = (value) => {
                        window.localStorage.setItem('dark', value)
                    }

                    return {
                        loading: true,
                        isDark: getTheme(),
                        toggleTheme() {
                            this.isDark = !this.isDark
                            setTheme(this.isDark)
                        },
                    }
                }
                $(window).load(function() {
                    $('.post-module').hover(function() {
                        $(this).find('.description').stop().animate({
                            height: "toggle",
                            opacity: "toggle"
                        }, 300);
                    });
                });

                // function openForm() {
                //     if (document.getElementById("replies").style.display == "block") {
                //         document.getElementById("replies").style.display = "none";
                //     } else {
                //         document.getElementById("replies").style.display = "block";
                //     }
                // }
                // $(document).ready(function() {
                //     $("#flip").click(function() {
                //         $("#replies").slideDown("slow");
                //     });
                // });
            </script>
            <script>
              $(document).ready(function(){
                $(".btn1").click(function(){
                  $(".reply_popup").slideUp();
                });
                $(".btn2").click(function(){
                  $(".reply_popup").slideDown();
                });
              });
              </script>

        @endsection
    </div>
    </x-app-layout>
