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
                @extends('layouts.header')
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
                                        <p class="text-2xl">0 </p>
                                        <p>Friend's</p>
                                    </div>
                                </div>
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
                                        <p>Follower's</p>
                                    </div>
                                </div>
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
                                        <p>Share's</p>
                                    </div>
                                </div>
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
                                        <p>Like's</p>
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
                            <div class=" p-4 gap-4 text-black dark:text-white" style="width:500px;margin-right:130px">
                                <div class="md:col-span-2 xl:col-span-3" style="margin-bottom: 20px">
                                    <h3 class="text-lg font-semibold">Task summaries of recent sprints</h3>
                                </div>
                                {{-- here --}}


                                {{-- loop and display current user post --}}
                                <?php foreach ($post as $user_post): ?>
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

                                              {{-- to get the username for current post --}}
                                                @foreach ($user as $users)
                                                    @if ($users->id === $user_post->author_id)
                                                        <a href={{'dashboard/'.$users->id.'/profile'}}>{{ '@' . $users->name }}</a>
                                                    @endif
                                                @endforeach
                                              {{-- end of get username for post --}}
                                              
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
                                                            src="http://localhost/xampp/myblog/storage/app/public/{{ $user_post->image }}"
                                                            alt="" style="height: 300px;">
                                                    </div>
                                                    <!-- Post Content-->
                                                    <div class="post-content">
                                                        <div class="category">

                                                          {{-- set the category for the post --}}
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
                                                          {{-- end of set comment for post --}}

                                                        </div>
                                                        <h1 class="title">{{ $user_post->title }}</h1>
                                                        <h2 class="sub_title">The city that never sleeps.</h2>
                                                        <div style="padding: 10px">
                                                            <?php custom_echo($user_post->body, 100); ?>
                                                        </div>
                                                        <div class="post-meta">
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

                                                                {{-- to get comment tied to current post --}}
                                                                <button name="toggle_comment"
                                                                    {{-- set comment button based on post id --}}
                                                                    value={{ $user_post->id }}><span><i  
                                                                            class="fa fa-comments"></i><a>

                                                                            {{-- chech the amount of comments for current post --}}
                                                                            <?php
                                                                            $count_comment = 0;
                                                                            foreach ($comments as $comment) {
                                                                            if ($user_post->id == $comment->post_id) {
                                                                            ++$count_comment;
                                                                            }
                                                                            }
                                                                            ?>
                                                                            {{-- end of check comments --}}
                                                                            {{ $count_comment }}
                                                                            comments</a></span></button>
                                                                            @if (Auth::user()->id != $user_post->author_id) 
                                                                                <div onclick="like(this,{{ $user_post->id }})"
                                                                                    <?php 
                                                                                    $count_like1 = 0;
                                                                                    foreach($likes as $like){
                                                                                        if($like->post_id == $user_post->id && $auth_user->id == $like->user_id){
                                                                                            ++$count_like1;
                                                                                            echo "class='toggle-like like like-yes'";
                                                                                        }
                                                                                    }
                                                                                    if($count_like1 == 0){
                                                                                            echo "class='toggle-like like like-no'";
                                                                                        }
                                                                                    ?>
                                                                                    ></div>
                                                                            @endif
                                                                {{-- end of get comment --}}
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
                                {{-- end of loop for user post --}}


                                {{-- to check if user click comment button on post --}}
                                <?php if (!empty($show_comment)): ?>
                                <style>
                                    #myModal1 {
                                        display: block;
                                    }
                                </style>
                                <?php endif; ?>
                                {{-- end of check main comment button check --}}


                                {{-- to check if  user did reply and display modal --}}
                                @if (isset($did_reply))
                                  <button hidden id="did_reply" value={{$did_reply}}></button>
                                @else
                                  <button hidden id="did_reply" value=""></button>
                                @endif
                                {{-- end of check reply --}}

                                <div class="container">
                                    <!-- The Modal -->
                                    <div id="myModal1" class="modal " style="background-color: #000000c7;">
                                        <div class="modal-dialog">
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
                                                                <input type="text" name="title"
                                                                    class="pl-8 text-grey-dark font-light w-full text-sm font-medium tracking-wide"
                                                                    style="margin: 0px 0px 5px 0px" placeholder="Title...">
                                                                <input type="text" name="content"
                                                                    class="pl-8 text-grey-dark font-light w-full text-sm font-medium tracking-wide"
                                                                    placeholder="Type your commnet...">

                                                                @if (!empty($datas))
                                                                    @foreach ($datas as $data)

                                                                        <img style="/* margin-top: -2rem; */position: absolute;top: -8rem;right: 2rem;width: 80px;height: 80px;border-radius: 360%;"
                                                                            src="http://localhost/xampp/myblog/storage/app/public/{{ $data->image }}"
                                                                            alt=""
                                                                            class="w-6 rounded-full absolute pin-l pin-t ml-2 ">
                                                                    @endforeach
                                                                @endif
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
                                                                    <button type="submit" name="close"
                                                                        class="bg-white border-2 p-3 rounded text-sm font-semibold hover:bg-grey-light">Cancel</button>
                                                                    <button type="submit" name="save_comment"
                                                                        value={{ $show_comment }}
                                                                        class="bg-white border-2 p-3 rounded text-sm font-semibold hover:bg-grey-light">Submit
                                                                        Comment</button>
                                                                        <?php $check_if = 0;?>
                                                                        @foreach ($comments as $comment)
                                                                        <?php if ($show_comment ==
                                                                        $comment->post_id): ?>
                                                                        <?php ++$check_if;?>
                                                                        <?php endif?>
                                                                        @endforeach
                                                                        @if ($check_if > 0)  
                                                                        <button type="button" class="btn btn-primary"
                                                                            data-toggle="modal" data-target="#myModal" id="open_modal">
                                                                            comments
                                                                        </button>
                                                                        @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="container">
                                                    <!-- The Modal -->
                                                    <div class="modal" id="myModal">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">

                                                                <!-- Modal body -->
                                                                <div class="modal-body" style="font-size: 20px;">
                                                                    {{-- show --}}
                                                                    <div class="antialiased mx-auto max-w-screen-sm "
                                                                        style="font-size: 25px;color: grey;">
                                                                        <h3 class=" mb-4 text-lg font-semibold text-gray-900"
                                                                            style="font-size: 20px;color: grey;">
                                                                            Comments</h3>
                                                                        <?php $count1 = 0; 
                                                                        $get_comment = 0;?>
                                                                        @foreach ($comments as $comment)

                                                                            <?php if ($show_comment ==
                                                                            $comment->post_id): ?>
                                                                            {{-- {{dd($comments)}} --}}
                                                                            <?php
                                                                            $get_comment = $show_comment;
                                                                            $datestrain1 = explode(' ',
                                                                            $comment->created_at);
                                                                            $date1 = explode('-', $datestrain1[0]);
                                                                            $origin1 = new DateTime($comment->created_at);
                                                                            $target1 = new DateTime('now');
                                                                            $interval1 = $origin1->diff($target1);

                                                                            $count1 = $count1 + 1;
                                                                            ?>
                                                                            <div class="space-y-4 mt-5">
                                                                                <div class="flex">
                                                                                    <div class="flex-shrink-0 mr-3">

                                                                                        <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
                                                                                            src="http://localhost/xampp/myblog/storage/app/public/{{ $comment->user_avatar }}"
                                                                                            alt="">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                                                        <span style="font-size: 15px">
                                                                                          {{-- to get the username for current comment --}}
                                                                                              @foreach ($user as $users)
                                                                                              @if ($users->id == $comment->user_id)
                                                                                                  {{ '@' . $users->name }}
                                                                                              @endif
                                                                                              @endforeach
                                                                                          {{-- end of get username for comment --}}
                                                                                        </span> <span
                                                                                            class="text-xs text-gray-400">
                                                                                            <?php if
                                                                                            ($interval1->y != 0) {
                                                                                            echo $interval1->y . ' ' .
                                                                                            'Year';
                                                                                            } elseif ($interval1->m != 0) {
                                                                                            echo $interval1->m . ' ' .
                                                                                            'Months';
                                                                                            } elseif ($interval1->d != 0) {
                                                                                            echo $interval1->d . ' ' .
                                                                                            'Day';
                                                                                            } elseif ($interval1->h != 0) {
                                                                                            echo $interval1->h . ' ' .
                                                                                            'Hour';
                                                                                            } elseif ($interval1->i != 0) {
                                                                                            echo $interval1->i . ' ' .
                                                                                            'Min';
                                                                                            } elseif ($interval1->s != 0) {
                                                                                            echo $interval1->s . ' ' .
                                                                                            'Sec';
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
                                                                                            if ($replies->comment_id ==
                                                                                            $comment->id) {
                                                                                            array_push($reply_image,
                                                                                            $replies->image);
                                                                                            $count = $count + 1;
                                                                                            }
                                                                                            }
                                                                                            ?>
                                                                                            <div
                                                                                                class="flex -space-x-2 mr-2">
                                                                                                @if (count($reply_image) > 0)
                                                                                                  @if (count($reply_image) == 1)
                                                                                                    <img class="rounded-full w-6 h-6 border border-white"
                                                                                                        src="http://localhost/xampp/myblog/storage/app/public/{{ $reply_image[0] }}"
                                                                                                        alt="">
                                                                                                  @else
                                                                                                      <img class="rounded-full w-6 h-6 border border-white"
                                                                                                      src="http://localhost/xampp/myblog/storage/app/public/{{ $reply_image[0] }}"
                                                                                                      alt="">
                                                                                                      <img class="rounded-full w-6 h-6 border border-white"
                                                                                                          src="http://localhost/xampp/myblog/storage/app/public/{{ $reply_image[1] }}"
                                                                                                          alt="">
                                                                                                  @endif
                                                                                                @endif
                                                                                            </div>


                                                                                            <button type="button"
                                                                                                class="btn btn-primary"
                                                                                                onclick="show_reply(this,{{ $count1 }})"
                                                                                                id="btn{{ $count1 }}">
                                                                                                {{ $count . ' replies' }}
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class=<?php
                                                                                        echo 'reply_popup' . $count1; ?> id="replies">
                                                                                        <div
                                                                                            style="width: 525px;margin-top: 10px;margin-left: 35px;top: 70px;background-color: #7fffd400;">
                                                                                            <div class="flex">
                                                                                                <div
                                                                                                    class="flex-shrink-0 mr-3">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                                                                    <form action={{ route('dashboard.comment') }} method="post">
                                                                                                        @csrf
                                                                                                        <div
                                                                                                            class="mt-4 border border-grey w-full border-1 rounded p-2 relative focus:border-red ">
                                                                                                            @if (isset($reply_field_amount))
                                                                                                              @if ($reply_field_amount == $count1)
                                                                                                                @if (isset($fail))
                                                                                                                  <span>{{$fail}}</span>
                                                                                                                @endif
                                                                                                              @endif
                                                                                                            @endif
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                name="title"
                                                                                                                class="pl-8 text-grey-dark font-light w-full text-sm font-medium tracking-wide"
                                                                                                                placeholder="title...">
                                                                                                            <input
                                                                                                                type="text"
                                                                                                                name="content"
                                                                                                                class="pl-8 text-grey-dark font-light w-full text-sm font-medium tracking-wide"
                                                                                                                placeholder="Leave A Reply...">
                                                                                                                <button type="submit" name="save_reply"
                                                                                                                value={{ $comment->id }}
                                                                                                                class="bg-white border-2 p-3 rounded text-sm font-semibold hover:bg-grey-light">Submit
                                                                                                                reply</button>
                                                                                                                <input hidden name="get_comment" value={{$get_comment }}>
                                                                                                                <input hidden name="reply_field_amount" value={{$count1 }}>
                                                                                                        </div>
                                                                                                    </form>
                                                                                                    <button type="button"
                                                                                                        class="btn btn1 btn-primary"
                                                                                                        onclick="close_reply(this,{{ $count1 }})">
                                                                                                        close
                                                                                                    </button>
                                                                                                    
                                                                                                    <?php
                                                                                                    $show_reply_header = 0;
                                                                                                    foreach ($replys as
                                                                                                    $replies): ?>
                                                                                                    <?php if
                                                                                                    ($replies->comment_id ==
                                                                                                    $comment->id): ?>
                                                                                                    @if ($show_reply_header == 0)
                                                                                                    <h4
                                                                                                    class="my-5 uppercase tracking-wide text-gray-400 font-bold text-xs">
                                                                                                    Replies</h4>
                                                                                                    <?php ++$show_reply_header; ?>
                                                                                                    @endif
                                                                                                    <div class="space-y-4"
                                                                                                        style="color: black;font-size:20px;margin:20px">
                                                                                                        <div class="flex">
                                                                                                            <div
                                                                                                                class="flex-shrink-0 mr-3">
                                                                                                                
                                                                                                                <img class="mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8"
                                                                                                                    src="http://localhost/xampp/myblog/storage/app/public/{{ $replies->image }}"
                                                                                                                    alt="">
                                                                                                            </div>
                                                                                                            <?php
                                                                                                            $origin2 = new
                                                                                                            DateTime($replies->created_at);
                                                                                                            $target2 = new
                                                                                                            DateTime('now');
                                                                                                            $interval2 =
                                                                                                            $origin2->diff($target2);
                                                                                                            ?>
                                                                                                            <div
                                                                                                                class="flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                                                                                <span style="font-size: 13px">
                                                                                                                  {{-- to get the username for current comment --}}
                                                                                                                      @foreach ($user as $users)
                                                                                                                      @if ($users->id == $replies->user_id)
                                                                                                                          {{ '@' . $users->name }}
                                                                                                                      @endif
                                                                                                                      @endforeach
                                                                                                                  {{-- end of get username for comment --}}
                                                                                                                </span>
                                                                                                                <span
                                                                                                                    class="text-xs text-gray-400">
                                                                                                                    <?php if
                                                                                                                    ($interval2->y
                                                                                                                    != 0) {
                                                                                                                    echo
                                                                                                                    $interval2->y
                                                                                                                    . ' ' .
                                                                                                                    'Year';
                                                                                                                    } elseif
                                                                                                                    ($interval2->m
                                                                                                                    != 0) {
                                                                                                                    echo
                                                                                                                    $interval2->m
                                                                                                                    . ' ' .
                                                                                                                    'Months';
                                                                                                                    } elseif
                                                                                                                    ($interval2->d
                                                                                                                    != 0) {
                                                                                                                    echo
                                                                                                                    $interval2->d
                                                                                                                    . ' ' .
                                                                                                                    'Day';
                                                                                                                    } elseif
                                                                                                                    ($interval2->h
                                                                                                                    != 0) {
                                                                                                                    echo
                                                                                                                    $interval2->h
                                                                                                                    . ' ' .
                                                                                                                    'Hour';
                                                                                                                    } elseif
                                                                                                                    ($interval2->i
                                                                                                                    != 0) {
                                                                                                                    echo
                                                                                                                    $interval2->i
                                                                                                                    . ' ' .
                                                                                                                    'Min';
                                                                                                                    } elseif
                                                                                                                    ($interval2->s
                                                                                                                    != 0) {
                                                                                                                    echo
                                                                                                                    $interval2->s
                                                                                                                    . ' ' .
                                                                                                                    'Sec';
                                                                                                                    } ?>
                                                                                                                    ago
                                                                                                                </span>
                                                                                                                <p style="font-size: 16px">{{$replies->title."."}}</p>
                                                                                                                <div class="flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed" style="background-color: white">
                                                                                                                  <p
                                                                                                                    class="text-lg sm:text-sm">
                                                                                                                    {{ $replies->content }}
                                                                                                                </p>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <?php
                                                                                                    endif; ?>
                                                                                                    <?php
                                                                                                    endforeach; ?>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <?php endif; ?>
                                                                        @endforeach
                                                                        <button hidden id="field1"
                                                                            value={{ $count1 }}></button>
                                                                    </div>
                                                                    {{--  --}}
                                                                </div>

                                                                <!-- Modal footer -->
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

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
                                                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Friend's</h3>
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
                                                            Username</th>
                                                        <th
                                                            class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                            Active</th>
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
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
                        </div>




                    </div>
                </div>
            </div>
            <script>
                function like(elmnt, clr) {
                    event.target.classList.toggle("like-no");
                    event.target.classList.toggle("like-yes");
                    if (event.target.classList.contains("like-yes")) {
                    console.log("✅💾 Saving like...");
                    likes(clr);
                    } else {
                    console.log("❌ Removing like...");
                    unlike(clr);
                    }
                }
                const unlike = (elem) => {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        
                        url: "/dashboard/"+elem+"/unlike",
                        type: "POST",
                        data: {id: elem},
                        success: function(response) {
                            //  alert('Ajax form has been submitted successfully '.concat(elem));
                        }
                    });
                }
                const likes = (elem) => {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        
                        url: "/dashboard/"+elem+"/like",
                        type: "POST",
                        data: {id: elem},
                        success: function(response) {
                            // alert('Ajax form has been submitted successfully '.concat(elem));
                        }
                    });
                }
            </script>
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
            </script>
            <script>
                $(document).ready(function() {
                    var check = document.getElementById("field1").value;
                    for (let i = 1; i <= check; i++) {
                        var value1 = ".reply_popup";
                        var value2 = i;
                        var value3 = value1.concat(value2);
                        $(value3).slideUp();
                    }

                    
                    var reply = document.getElementById("did_reply").value;
                    if(reply != ""){
                      document.getElementById("open_modal").click()
                      // document.getElementById("myModal").style.display="block";
                    }

                });

                function show_reply(elmnt, clr) {
                    var value1 = ".reply_popup";
                    var value2 = clr;
                    var value3 = value1.concat(value2);
                    $(value3).slideDown();
                }

                function close_reply(elmnt, clr) {
                    var value1 = ".reply_popup";
                    var value2 = clr;
                    var value3 = value1.concat(value2);
                    $(value3).slideUp();
                }
            </script>

        @endsection
    </div>
    </x-app-layout>
