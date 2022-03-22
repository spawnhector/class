<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Reply;
use App\Models\like;
use App\Models\follow;
use App\Models\Friends;
use App\Models\Active;
use App\Models\chat;
use App\Models\chat_info;
use App\Models\postView;
use App\Notifications\postNotification;
use App\Notifications\commentNotification;
use App\Notifications\likeNotification;
use App\Notifications\unlikeNotification;
use App\Notifications\followNotification;
use App\Notifications\unfollowNotification;
use App\Notifications\friendNotification;
use App\Notifications\friendconfirmedNotification;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Notification;

class DashboardController extends Controller
{


    public function index()
    {

        $auth_user = Auth::user();
        return view('post', ['auth_user' => $auth_user]);
        //    if(Auth::user()->hasRole('user')){
        //         return view('userdash');
        //    }elseif(Auth::user()->hasRole('blogwriter')){
        //         return view('blogwriterdash');
        //    }elseif(Auth::user()->hasRole('admin')){
        //         return view('admindashboard');
        //     }
    }

    // Trending AI made by Ronald Hector //
    public static function popular($post){

        $get_trending = [
            'post'=>[
                'like'=>[],
                'comment'=>[],
                'view'=>[]
            ]
        ];

        foreach ($post as $postss) {
            
            $check_views = postView::where('post_id', '=', $postss->id)->get();
            if (count($check_views) > 0) {
                $get_trending['post']['view']["$postss->id"]=count($check_views);
            }
            $check_comments = Comment::orderBy('created_at', 'desc')->where('post_id', '=', $postss->id)->get();
            if (count($check_comments) > 0) {
                $get_trending['post']['comment']["$postss->id"]=count($check_comments);
            }
            $check_likes = like::where('post_id', '=', $postss->id)->get();
            if (count($check_likes) > 0) {
                $get_trending['post']['like']["$postss->id"]=count($check_likes);
            }
        }

        arsort($get_trending['post']['like']);
        arsort($get_trending['post']['comment']);
        arsort($get_trending['post']['view']);

        $unique_trends = [];

        $get_key1 = array_keys($get_trending['post']['like']);
        $get_value1 = array_values($get_trending['post']['like']);
        for ($i=0; $i < count($get_key1); $i++) { 
            if (array_key_exists($get_key1[$i],$unique_trends)){
                if ($unique_trends[$get_key1[$i]] < $get_value1[$i]) {
                    $unique_trends[$get_key1[$i]] = $get_value1[$i];
                }
            }else{
                $unique_trends[$get_key1[$i]] = $get_value1[$i];
            }
        }
        $get_key2 = array_keys($get_trending['post']['comment']);
        $get_value2 = array_values($get_trending['post']['comment']);
        for ($i=0; $i < count($get_key2); $i++) {  
            if (array_key_exists($get_key2[$i],$unique_trends)){
                if ($unique_trends[$get_key2[$i]] < $get_value2[$i]) {
                    $unique_trends[$get_key2[$i]] = $get_value2[$i];
                }
            }else{
                $unique_trends[$get_key2[$i]] = $get_value2[$i];
            }
        }
        $get_key = array_keys($get_trending['post']['view']);
        $get_value = array_values($get_trending['post']['view']);
        for ($i=0; $i < count($get_key); $i++) {  
            if (array_key_exists($get_key[$i],$unique_trends)){
                if ($unique_trends[$get_key[$i]] < $get_value[$i]) {
                    $unique_trends[$get_key[$i]] = $get_value[$i];
                }
            }else{
                $unique_trends[$get_key[$i]] = $get_value[$i];
            }
        }
        
        arsort($unique_trends);

        return $unique_trends;
    }

    public function myprofile()
    {
        $post = Post::orderBy('created_at', 'desc')->get()->where('author_id', '=', Auth::user()->id);
        $post_count = 0;
        foreach ($post as $posts) {
            ++$post_count;
        }
        $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', Auth::user()->id);
        $followers_count = 0;
        foreach ($follow as $followers) {
            ++$followers_count;
        }
        $following = follow::orderBy('created_at', 'desc')->get()->where('user_id', '=', Auth::user()->id);
        $following_count = 0;
        foreach ($following as $follow) {
            ++$following_count;
        }
        $comment = Comment::orderBy('created_at', 'desc')->get();
        $user = User::find(Auth::user()->id);
        $auth_user = Auth::user();
        $friends = Friends::get()->where('userID1', '=', Auth::user()->id);
        if (count($friends) == 0) {
            $friends = Friends::get()->where('friendsID', '=', Auth::user()->id);
            $friends_count = 0;
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                    $confirmed = 1;
                } elseif ($friend->confirmed == 2) {
                    $confirmed = 2;
                }
            }
        } else {
            $friends_count = 0;
            $confirmed = 0;
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                    $confirmed = 1;
                } elseif ($friend->confirmed == 2) {
                    $confirmed = 2;
                }
            }
            $friendds = Friends::get()->where('friendsID', '=', Auth::user()->id);
            foreach ($friendds as $friend1) {
                if ($friend1->confirmed == 1) {
                    ++$friends_count;
                    $confirmed = 1;
                }
            }
        }

        return view('myprofile', [
            'auth_user' => $auth_user,
            'post' => $post,
            'post_count' => $post_count,
            'comment' => $comment,
            'likes' => like::get(),
            'followers_count' => $followers_count,
            'following_count' => $following_count,
            'user' => $user,
            'friends_count' => $friends_count
        ]);
    }
    public function viewprofile($id)
    {
        if ($id == Auth::user()->id) {
            $post = Post::orderBy('created_at', 'desc')->get()->where('author_id', '=', Auth::user()->id);
            $post_count = 0;
            foreach ($post as $posts) {
                ++$post_count;
            }
            $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', Auth::user()->id);
            $followers_count = 0;
            foreach ($follow as $followers) {
                ++$followers_count;
            }
            $following = follow::orderBy('created_at', 'desc')->get()->where('user_id', '=', Auth::user()->id);
            $following_count = 0;
            foreach ($following as $follow) {
                ++$following_count;
            }
            $comment = Comment::orderBy('created_at', 'desc')->get();

            $auth_user = Auth::user();
            $friends = Friends::get()->where('userID1', '=', Auth::user()->id);
            if (count($friends) == 0) {
                $friends = Friends::get()->where('friendsID', '=', Auth::user()->id);
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if ($friend->confirmed == 1) {
                        ++$friends_count;
                        $confirmed = 1;
                    } elseif ($friend->confirmed == 2) {
                        $confirmed = 2;
                    }
                }
            } else {
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if ($friend->confirmed == 1) {
                        ++$friends_count;
                        $confirmed = 1;
                    } elseif ($friend->confirmed == 2) {
                        $confirmed = 2;
                    }
                }
                $friendds = Friends::get()->where('friendsID', '=', Auth::user()->id);
                foreach ($friendds as $friend1) {
                    if ($friend1->confirmed == 1) {
                        ++$friends_count;
                        $confirmed = 1;
                    }
                }
            }
            return view('myprofile', [
                'auth_user' => $auth_user,
                'post' => $post,
                'post_count' => $post_count,
                'comment' => $comment,
                'likes' => like::get(),
                'followers_count' => $followers_count,
                'following_count' => $following_count,
                'friends_count' => $friends_count
            ]);
        } else {
            $post = Post::orderBy('created_at', 'desc')->get()->where('author_id', '=', $id);
            $post_count = 0;
            foreach ($post as $posts) {
                ++$post_count;
            }
            $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', $id);
            $followers_count = 0;
            foreach ($follow as $followers) {
                ++$followers_count;
            }
            $following = follow::orderBy('created_at', 'desc')->get()->where('user_id', '=', $id);
            $following_count = 0;
            foreach ($following as $follows) {
                ++$following_count;
            }
            $comment = Comment::orderBy('created_at', 'desc')->get();
            $auth_user = User::get()->where('id', '=', $id);
            $friends = Friends::get()->where('userID1', '=', $id);
            $is_friend = 0;
            if (count($friends) == 0) {
                $friends = Friends::get()->where('friendsID', '=', $id);
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if ($friend->confirmed == 1) {
                        ++$friends_count;
                        if ($friend->userID1 == Auth::user()->id) {
                            $is_friend = $friend->userID1;
                            $confirmed = 1;
                        }
                    } elseif ($friend->confirmed == 2) {
                        $is_friend = 0;
                        if ($friend->userID1 == Auth::user()->id) {
                            $confirmed = 2;
                        }
                    }
                }
            } else {
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if ($friend->confirmed == 1) {
                        ++$friends_count;
                        if ($friend->friendsID == Auth::user()->id) {
                            $is_friend = $friend->friendsID;
                            $confirmed = 1;
                        }
                    } elseif ($friend->confirmed == 2) {
                        if ($friend->friendsID == Auth::user()->id) {
                            $confirmed = 2;
                        }
                    }
                }
                $friendd = Friends::get()->where('friendsID', '=', $id);
                foreach ($friendd as $friendds) {
                    if ($friendds->confirmed == 1) {
                        ++$friends_count;
                        if ($friendds->userID1 == Auth::user()->id) {
                            $is_friend = $friendds->userID1;
                            $confirmed = 1;
                        }
                    } elseif ($friendds->confirmed == 2) {
                        if ($friendds->userID1 == Auth::user()->id) {
                            $confirmed = 2;
                        }
                    }
                }
            }
            return view('viewprofile', [
                'auth_user' => $auth_user,
                'post' => $post,
                'post_count' => $post_count,
                'comment' => $comment,
                'likes' => like::get(),
                'followers_count' => $followers_count,
                'following_count' => $following_count,
                'following' => $follow,
                'friends_count' => $friends_count,
                'confirmed' => $confirmed,
                'is_friend' => $is_friend

            ]);
        }
    }

    public function show()
    {
        $show_comment = "";
        $auth_user = Auth::user();
        return view('dashboard1', [
            'post' => Post::orderBy('created_at', 'desc')->get()->where('status', '=', 'PUBLISHED'),
            'likes' => like::orderBy('created_at', 'desc')->get(),
            'user' => User::get(), 'comments' => Comment::get(),
            'show_comment' => $show_comment,
            'auth_user' => $auth_user,
        ]);
    }

    public function post(Request $request,)
    {
        //    dd($request);.
        if ($request->has('toggle_comment')) {
            $show_comment = $request->toggle_comment;
            $datas = Post::get()->where('id', '=', $request->toggle_comment);
            $auth_user = Auth::user();
            return view('dashboard1', [
                'post' => Post::orderBy('created_at', 'desc')->get()->where('status', '=', 'PUBLISHED'),
                'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                'show_comment' => $show_comment,
                'replys' => Reply::orderBy('created_at', 'desc')->get(),
                'likes' => like::orderBy('created_at', 'desc')->get(),
                'datas' => $datas,
                'auth_user' => $auth_user
            ]);
        } elseif ($request->has('close')) {
            $datas = "";
            $show_comment = "";
            $auth_user = Auth::user();
            return view('dashboard1', [
                'post' => Post::orderBy('created_at', 'desc')->get()->where('status', '=', 'PUBLISHED'),
                'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                'show_comment' => $show_comment,
                'replys' => Reply::orderBy('created_at', 'desc')->get(),
                'likes' => like::orderBy('created_at', 'desc')->get(),
                'datas' => $datas,
                'auth_user' => $auth_user
            ]);
        } elseif ($request->has('save_comment')) {
            // dd($request);
            $datas = Post::get()->where('id', '=', $request->save_comment);
            $auth_user = Auth::user();
            $store = new Comment;
            $store->user_id = Auth::user()->id;
            $store->title = $request->title;
            $store->content = $request->content;
            $store->user_avatar = Auth::User()->avatar;
            $store->slug =  Str::of($request->title)->slug('-');
            $store->post_id =  $request->save_comment;
            $store->save();
            $show_comment = $request->save_comment;
            $slug = "";
            $post_author = "";
            $title = "";
            foreach ($datas as $data) {
                $slug = $data->slug;
                $title = $data->title;
                $author = User::find($data->author_id);
                // dd($author);
                $post_author = $author->name;
                // foreach ($author as $usertest ) {
                // }
            }
            $friends = Friends::get()->where('friendsID', '=', Auth::user()->id);
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    $users = User::find($friend->userID1);
                    Notification::send($users, new commentNotification(Auth::user()->name, Auth::user()->avatar, $slug, $title, $post_author));
                }
            }
            $friends1 = Friends::get()->where('userID1', '=', Auth::user()->id);
            foreach ($friends1 as $friend2) {
                if ($friend2->confirmed == 1) {
                    $users = User::find($friend2->friendsID);
                    Notification::send($users, new commentNotification(Auth::user()->name, Auth::user()->avatar, $slug, $title, $post_author));
                }
            }
            return view('dashboard1', [
                'post' => Post::orderBy('created_at', 'desc')->get()->where('status', '=', 'PUBLISHED'),
                'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                'show_comment' => $show_comment,
                'replys' => Reply::orderBy('created_at', 'desc')->get(),
                'likes' => like::orderBy('created_at', 'desc')->get(),
                'datas' => $datas,
                'auth_user' => $auth_user
            ]);
        } elseif ($request->has('save_reply')) {
            $show_comment = $request->get_comment;
            $did_reply = $request->save_reply;
            $auth_user = Auth::user();

            // vaildate content field
            if ($request->title == "") {
                $fail = "Please fill out the title field";
                $reply_field_amount = $request->reply_field_amount;
                return view('dashboard1', [
                    'post' => Post::orderBy('created_at', 'desc')->get(),
                    'post' => Post::orderBy('created_at', 'desc')->get()->where('status', '=', 'PUBLISHED'),
                    'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                    'show_comment' => $show_comment,
                    'did_reply' => $did_reply,
                    'replys' => Reply::orderBy('created_at', 'desc')->get(),
                    'likes' => like::orderBy('created_at', 'desc')->get(),
                    'fail' => $fail,
                    'reply_field_amount' => $reply_field_amount,
                    'auth_user' => $auth_user
                ]);
            } else {
                if ($request->content == "") {
                    $fail = "Please fill out the content field";
                    $reply_field_amount = $request->reply_field_amount;
                    $auth_user = Auth::user();
                    return view('dashboard1', [
                        'post' => Post::orderBy('created_at', 'desc')->get()->where('status', '=', 'PUBLISHED'),
                        'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                        'show_comment' => $show_comment,
                        'did_reply' => $did_reply,
                        'replys' => Reply::orderBy('created_at', 'desc')->get(),
                        'likes' => like::orderBy('created_at', 'desc')->get(),
                        'fail' => $fail,
                        'reply_field_amount' => $reply_field_amount,
                        'auth_user' => $auth_user
                        // 'datas'=> $datas
                    ]);
                } else {
                    $auth_user = Auth::user();
                    $store = new Reply;
                    $store->user_id = Auth::user()->id;
                    $store->title = $request->title;
                    $store->content = $request->content;
                    $store->image = Auth::User()->avatar;
                    $store->slug =  Str::of($request->title)->slug('-');
                    $store->comment_id =  $request->save_reply;
                    $store->save();
                    return view('dashboard1', [
                        'post' => Post::orderBy('created_at', 'desc')->get()->where('status', '=', 'PUBLISHED'),
                        'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                        'show_comment' => $show_comment,
                        'did_reply' => $did_reply,
                        'replys' => Reply::orderBy('created_at', 'desc')->get(),
                        'likes' => like::orderBy('created_at', 'desc')->get(),
                        'auth_user' => $auth_user
                        // 'datas'=> $datas
                    ]);
                }
            }
        }
    }

    public function noty_show_post($id, $is)
    {
        return view('show_post');
    }

    public function show_post($id, $is)
    {

        $post_check = Post::orderBy('created_at', 'desc')->get()->where('id', '=', $id);
        foreach ($post_check as $check) {
            if ($check->author_id != Auth::user()->id) {
                $check_view = postView::where('post_id', '=', $id)->where('user_id', '=', Auth::user()->id)->get();
                if (count($check_view) == 0) {
                    $store_view = new postView;
                    $store_view->post_id = $id;
                    $store_view->user_id = Auth::user()->id;
                    $store_view->save();
                }
            }
        }

        $this_post = Post::get()->where('id', '=', $id);
        $tags = "";
        foreach ($this_post as $check_tag) {
            $tags_get = explode(',',$check_tag->meta_keywords);
            foreach ($tags_get as $get_tags ) {  
                $tags .= 
                "
                <a class='tags' href=''>".$get_tags."</a>
                ";
            }
        }

        $popular = '';
        $split ="";
        $post = Post::orderBy('created_at', 'desc')->get()->where('author_id', '=', $is);
        $post_count = 0;
        $get_trends_key = array_keys($this->popular($post));
        for ($i=0; $i < count($get_trends_key); $i++) {
            if ($i > 0) {
                $split = "|||";
            } 
            $get_trends_post = Post::orderBy('created_at', 'desc')->get()->where('id', '=', $get_trends_key[$i]);
            foreach ($get_trends_post as $trends_post ) {
                $check_views = postView::where('post_id', '=', $trends_post->id)->get();
                $check_comments = Comment::orderBy('created_at', 'desc')->where('post_id', '=', $trends_post->id)->get();
                $check_likes = like::where('post_id', '=', $trends_post->id)->get();

                $popular .= ''.$split.'<a class="img-link"><img class="s-img" src="http://localhost/xampp/myblog/storage/app/public/' . $trends_post->image . '"><span class="popular-link">'.$trends_post->title.'<p class="popular-link-icon"><div class="stats2"><span>Like: '.count($check_likes).'</span> . <span>Comment: '.count($check_comments).'</span> . <span>View: '.count($check_views).'</span></div></p></span></a>';
            }
        }
        foreach ($post as $posts) {
            ++$post_count;
        }
        $post_count1 = 0;
        foreach ($this->popular($post) as $posts) {
            ++$post_count1;
        }
        $popular_count = $post_count1;
        // dd($this->popular($post));

        $hidden_pop = "
        <button hidden id='show_pop' value='".$popular."' onclick='get_popular(".$popular_count.")'></button>
        ";
        // to get followers for post
        $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', $is);
        $followers_count = 0;
        foreach ($follow as $followers) {
            ++$followers_count;
        }

        $following = follow::orderBy('created_at', 'desc')->get()->where('user_id', '=', $is);
        $following_count = 0;
        foreach ($following as $follows) {
            ++$following_count;
        }

        $friends = Friends::get()->where('userID1', '=', $is);
        if (count($friends) == 0) {
            $friends = Friends::get()->where('friendsID', '=', $is);
            $friends_count = 0;
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                }
            }
        } else {
            $friends_count = 0;
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                }
            }
            $friendd = Friends::get()->where('friendsID', '=', $is);
            foreach ($friendd as $friendds) {
                if ($friendds->confirmed == 1) {
                    ++$friends_count;
                }
            }
        }

        $likes = like::get();
        $views = postView::where('post_id', '=', $id)->get();
        $likes_count = 0;
        $views_count = count($views);;
        foreach ($likes as $like) {
            if ($like->post_id == $id) {
                ++$likes_count;
            }
        }

        $comment = Comment::orderBy('created_at', 'desc')->where('post_id', '=', $id)->get();
        $comment_count = count($comment);
        
        $count1 = 0;
        $get_comment = 0;
        $show_comment = "";
        // any changes made here must be made in "show_post_comment()"
        foreach ($comment as $comments) {
            ++$count1;
            $get_comment = $comments->post_id;
            $userss = User::get();
            $comment_author = "";
            foreach ($userss as $users) {
                if ($users->id == $comments->user_id) {
                    $comment_author = $users->name;
                }
            }
            $datestrain1 = explode(' ', $comments->created_at);
            $date1 = explode('-', $datestrain1[0]);
            $origin1 = new DateTime($comments->created_at);
            $target1 = new DateTime('now');
            $interval1 = $origin1->diff($target1);
            $comment_time = "";
            if ($interval1->y != 0) {
                $comment_time = $interval1->y . ' ' .
                    'Year';
            } elseif ($interval1->m != 0) {
                $comment_time = $interval1->m . ' ' .
                    'Months';
            } elseif ($interval1->d != 0) {
                $comment_time = $interval1->d . ' ' .
                    'Day';
            } elseif ($interval1->h != 0) {
                $comment_time = $interval1->h . ' ' .
                    'Hour';
            } elseif ($interval1->i != 0) {
                $comment_time = $interval1->i . ' ' .
                    'Min';
            } elseif ($interval1->s != 0) {
                $comment_time = $interval1->s . ' ' .
                    'Sec';
            }
            $replys = Reply::orderBy('created_at', 'desc')->where('comment_id', '=', $comments->id)->get();
            $reply_image = [];
            $count = count($replys);
            $reply_time = "";
            $replies_title = "";
            $replies_content = "";
            $show_reply_img = "";
            $reply_author = "";
            $show_comment_reply = "";
            foreach ($replys as $replies) {
                if ($comments->id == $replies->comment_id) {
                    $replies_title = $replies->title;
                    $replies_content = $replies->content;
                    array_push($reply_image, $replies->image);
                    foreach ($userss as $users) {
                        if ($users->id == $replies->user_id) {
                            $reply_author = $users->name;
                        }
                    }
                    $origin2 = new
                        DateTime($replies->created_at);
                    $target2 = new
                        DateTime('now');
                    $interval2 =
                        $origin2->diff($target2);
                    if ($interval2->y != 0) {
                        $reply_time =
                            $interval2->y
                            . ' ' .
                            'Year';
                    } elseif (
                        $interval2->m
                        != 0
                    ) {
                        $reply_time =
                            $interval2->m
                            . ' ' .
                            'Months';
                    } elseif (
                        $interval2->d
                        != 0
                    ) {
                        $reply_time =
                            $interval2->d
                            . ' ' .
                            'Day';
                    } elseif (
                        $interval2->h
                        != 0
                    ) {
                        $reply_time =
                            $interval2->h
                            . ' ' .
                            'Hour';
                    } elseif (
                        $interval2->i
                        != 0
                    ) {
                        $reply_time =
                            $interval2->i
                            . ' ' .
                            'Min';
                    } elseif (
                        $interval2->s
                        != 0
                    ) {
                        $reply_time =
                            $interval2->s
                            . ' ' .
                            'Sec';
                    }
                    $show_comment_reply .= 
                    "
                    <div
                        class='flex-1 pcr-body rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed' >
                        
                        <div class='space-y-4'
                            style='color: black;font-size:20px;margin:-2px;height:auto'>
                            <div class='flex' style=''>
                                <div
                                    class='flex-shrink-0 mr-3'>
                                    
                                    <img class='mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8'
                                        src='http://localhost/xampp/myblog/storage/app/public/".$replies->image."'
                                        alt=''>
                                </div>
                                <div
                                    class='flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed' style='font-size: 13px;background-color: #3e537e;box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);transition: all 1s;color: whitesmoke;'>
                                    <span style='font-size: 13px;'>
                                                @" . $reply_author . "
                                    </span>
                                    <span class='text-xs text-gray-400'>
                                        " . $reply_time . " ago
                                    </span>
                                    <p style='font-size: 16px'>" . $replies_title . "</p>
                                    <div class='flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed' style='background-color: #3e537e;box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);transition: all 1s;'>
                                        <p
                                        class='' style='width:400px'>
                                        " . $replies_content . "
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            }
            
            if (count($reply_image) > 0) {
                if (count($reply_image) == 1) {
                    $show_reply_img .=
                        "<img class='comment-reply-img rounded-full w-6 h-6 border border-white'
                        src='http://localhost/xampp/myblog/storage/app/public/".$reply_image[0]."'
                        alt=''>";
                } else {
                    $show_reply_img .=
                        "
                    <img class='comment-reply-img rounded-full w-6 h-6 border border-white'
                    src='http://localhost/xampp/myblog/storage/app/public/".$reply_image[0]."'
                    alt=''>
                    <img class='comment-reply-img1 rounded-full w-6 h-6 border border-white'
                        src='http://localhost/xampp/myblog/storage/app/public/".$reply_image[1]."'
                        alt=''>";
                }
            }
            $reply_button = "";
            if ($count > 0) {
                $reply_button .= 
                "
                <button type='button'
                    class=''
                    >
                    " . $count . " replies
                    <span style='width:20px;display:block;' onclick='show_reply(this," . $count1 . ")' id='btn" . $count1 . "'>
                        <?xml version='1.0' encoding='iso-8859-1'?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                        viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;position:relative;left: 9px;' xml:space='preserve'>
                        <g>
                            <g>
                                <path d='M498.347,117.973c-18.773-18.773-51.2-18.773-68.267,0L256,290.346L83.627,117.973
                                    c-8.534-8.534-22.186-13.653-34.133-13.653c-13.653,0-25.6,5.12-34.133,13.653C5.12,128.213,0,140.159,0,153.813
                                    s5.12,25.6,13.653,34.133l208.213,206.507c8.534,8.534,22.187,13.653,34.133,13.653c11.947,0,25.6-5.12,34.133-13.653
                                    L498.347,186.24C506.88,177.706,512,164.053,512,152.106C512,140.159,506.88,126.506,498.347,117.973z M472.747,162.346
                                    L266.24,370.56c-5.12,5.12-15.36,5.12-20.48,0L39.253,164.053c-3.413-3.413-5.12-6.827-5.12-10.24s1.706-6.827,5.12-10.24
                                    s6.827-5.12,10.24-5.12s6.827,1.707,10.24,5.12l184.32,184.32c3.413,3.413,6.827,5.12,11.946,5.12c5.12,0,8.534-1.707,11.947-5.12
                                    l184.32-186.027c5.12-5.12,15.36-5.12,20.48,0c3.413,3.413,5.12,6.827,5.12,10.24C477.867,157.226,476.16,160.639,472.747,162.346
                                    z'/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>
                    </span>
                    <span style='display:none;width:20px;' onclick='show_reply(this," . $count1 . ")' id='btnh" . $count1 . "'>
                        <?xml version='1.0' encoding='iso-8859-1'?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                            viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;position:relative;left: 9px;' xml:space='preserve'>
                        <g>
                            <g>
                                <path d='M499.693,324.665L290.917,117.6c-18.825-18.824-51.338-18.824-68.451,0L13.69,324.665C5.133,334.932,0,346.912,0,360.602
                                    c0,13.69,5.133,25.67,13.69,34.226c8.557,8.556,22.246,13.69,34.226,13.69c11.979,0,25.67-5.133,34.226-13.69l174.55-174.55
                                    l172.839,172.84c18.825,18.824,51.338,18.824,68.451,0c8.557-8.557,13.69-22.246,13.69-34.226
                                    C513.383,346.912,508.25,333.221,499.693,324.665z M474.024,369.158c-5.133,5.133-15.401,5.133-20.535,0L268.671,184.34
                                    c-6.845-6.845-17.113-6.845-23.958,0L59.895,370.87c-5.134,5.133-15.402,5.133-20.535,0c-3.423-3.423-5.133-6.845-5.133-10.268
                                    c0-3.423,1.711-6.845,5.133-10.268l207.064-208.776c3.423-3.423,6.845-5.134,10.268-5.134c3.423,0,6.845,1.712,10.268,5.134
                                    l207.065,207.065c3.423,3.423,5.133,6.845,5.133,10.268C479.158,362.313,477.446,367.447,474.024,369.158z'/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>
                    
                    </span>
                </button>
                ";
            } else {
                $reply_button .= 
                "
                <button type='button'
                    class=''
                    id='btn" . $comments->id . "'>
                    " . $count . " replies
                </button>
                ";
            }
            $scroll = "";
            if ($count > 5 ) {
                $scroll .= "show-post-comment-reply-body-scroll";
            }
            $show_comment .=
                "
            <div class='space-y-4 mt-5'>
                <div class='flex'>
                    <div class='flex-shrink-0 mr-3'>

                        <img class='mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10'
                            src='http://localhost/xampp/myblog/storage/app/public/" . $comments->user_avatar . "'
                            alt=''>
                    </div>
                    <div class='flex-1 commentss-comment rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed'>
                        <span style='font-size: 15px'>
                                    @" . $comment_author . "
                        </span> 
                        <span
                            class='text-xs text-gray-400'>
                            " . $comment_time . " ago
                        </span>
                        <p class='text-lg'>
                            " . $comments->content . "
                        </p>
                        <div class='mt-4 flex items-center'>


                            <div class='comment-footer'>
                            <div
                                class='flex -space-x-2 mr-2'>
                                " . $show_reply_img . "
                            </div>
                                ".$reply_button."
                                <div class='comment-reply'>
                                    <textarea class='comment-reply-content' name='' id='show-post-comment" . $count1 . "' placeholder='Reply to @" . $comment_author . " comment...' ></textarea><button onclick='post_commentg(".$comments->id."," . $count1 . ")' style='padding-left: 20px;color: whitesmoke;'><svg id='Capa_1' enable-background='new 0 0 512 512' height='30' viewBox='0 0 512 512' width='30' xmlns='http://www.w3.org/2000/svg'><g><path d='m512 256c0 140.67-112.436 254.425-253.097 255.984-5.353.059-10.669-.046-15.943-.31-5.045-.253-9.22-3.934-10.126-8.903-20.078-110.04-110.504-195.524-222.97-208.143-4.184-.469-7.538-3.722-8.038-7.902-1.219-10.188-1.84-20.558-1.826-31.077.191-142.281 117.504-257.676 259.771-255.622 139.646 2.016 252.229 115.847 252.229 255.973z' fill='#1e3fac'/><path d='m1.766 286.232 380.908-210.988c11.895-8.275 62.386 42.098 54.178 53.898l-193.245 382.563c-125.52-5.983-227.357-102.364-241.841-225.473z' fill='#1e3fac'/><path d='m462.409 75.155-219.562 315.62-103.238-18.385 317.492-318.905 3.709 3.709c4.81 4.811 5.484 12.376 1.599 17.961z' fill='#55a4f9'/><path d='m139.61 372.39-18.385-103.238 315.542-219.507c5.63-3.916 13.256-3.237 18.106 1.612l3.642 3.642zm103.237 18.385 20.198-20.198-49.189-37.077z' fill='#1380e2'/><path d='m184.157 303.801-62.932-34.648 18.385-18.385z' fill='#4172cc'/><path d='m454.998 51.383-270.822 252.437-115.303-115.303c-5.219-5.219-3.179-14.1 3.794-16.519l361.549-125.389c7.27-2.521 15.341-.667 20.782 4.774zm5.619 5.619-246.78 276.478 109.646 109.646c5.219 5.219 14.1 3.179 16.519-3.794l125.389-361.548c2.521-7.27.667-15.341-4.774-20.782z' fill='#a7d0fc'/><path d='m465.391 77.785-70.574 203.494c-12.609 36.357-58.911 46.992-86.121 19.782-19.548-19.548-20.439-50.957-2.03-71.581l153.951-172.478c5.441 5.441 7.295 13.512 4.774 20.783zm-31.176-31.176-203.494 70.574c-36.357 12.609-46.992 58.91-19.782 86.121l3.521 3.521c19.856 19.856 51.871 20.418 72.412 1.271l168.126-156.713c-5.441-5.441-13.512-7.295-20.783-4.774z' fill='#c8e2fd'/><path d='m199.979 352.149-69.297 69.296c-.976.977-2.256 1.465-3.535 1.465s-2.56-.488-3.535-1.465c-1.953-1.952-1.953-5.118 0-7.07l69.297-69.296c1.951-1.953 5.119-1.953 7.07 0 1.953 1.952 1.953 5.118 0 7.07zm6.54 23.512c-1.951-1.953-5.119-1.953-7.07 0l-35.354 35.355c-1.953 1.952-1.953 5.118 0 7.07.976.977 2.256 1.465 3.535 1.465s2.56-.488 3.535-1.465l35.354-35.355c1.953-1.952 1.953-5.118 0-7.07zm-56.569 49.497-14.142 14.143c-1.952 1.952-1.952 5.118.001 7.071.977.976 2.256 1.464 3.535 1.464s2.56-.488 3.536-1.465l14.142-14.143c1.952-1.952 1.952-5.118-.001-7.071-1.953-1.951-5.118-1.952-7.071.001zm44.815-10.342-14.143 14.142c-1.953 1.953-1.953 5.119-.001 7.071.977.977 2.257 1.465 3.536 1.465s2.56-.488 3.535-1.464l14.143-14.142c1.953-1.953 1.953-5.119.001-7.071-1.953-1.953-5.12-1.952-7.071-.001z' fill='#fff'/></g></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='reply_popup" . $count1 . "' id='replies'>
                        <div
                            style='width: 625px;margin-top: 10px;margin-left: 35px;top: 70px;background-color: #7fffd400;'>
                            <div class='show-post-comment-reply-body ".$scroll."'>
                                <div
                                    class='flex-shrink-0 mr-3'>
                                </div>
                                ".$show_comment_reply."
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <button hidden id='field1' value='" . $comment_count . "'></button>
            <button hidden id='post-id' value='" . $id . "'></button>
            ";
        }
        
        return view('show_post', [
            'this_post' => $this_post,
            'author' => User::find($is),
            'post_count' => $post_count,
            'comment' => $comment,
            'comment_count' => $comment_count,
            'show_comment' => $show_comment,
            'likes_count' => $likes_count,
            'views_count' => $views_count,
            'followers_count' => $followers_count,
            'following_count' => $following_count,
            'friends_count' => $friends_count,
            'hidden_pop'=>$hidden_pop,
            'count1' => $count1,
            'tags' => $tags
        ]);
    }

    public function show_post_comment($id,$ig,$is){
        $get_comment = Comment::orderBy('created_at', 'desc')->where('id', '=', $ig)->get();
        $current_comment_author = "";
        foreach ($get_comment as $comm ) {
            $get_user = User::where('id','=',$comm->user_id)->get();
            foreach ($get_user as $user ) {
                $current_comment_author = $user->name;
            }
        }
        $title = " Replied on @".$current_comment_author." comment";
        $store = new Reply;
        $store->user_id = Auth::user()->id;
        $store->title = $title;
        $store->content = $is;
        $store->image = Auth::User()->avatar;
        $store->slug =  Str::of($is)->slug('-');
        $store->comment_id = $ig;
        $store->save();
        $comment = Comment::orderBy('created_at', 'desc')->where('post_id', '=', $id)->get();
        $comment_count = count($comment);
        $show_comment = "";
        $count1 = 0;
        $get_comment = 0;

        // any changes made at "show_post()" in comment foreach loop must be made here
        foreach ($comment as $comments) {
            ++$count1;
            $get_comment = $comments->post_id;
            $userss = User::get();
            $comment_author = "";
            foreach ($userss as $users) {
                if ($users->id == $comments->user_id) {
                    $comment_author = $users->name;
                }
            }
            $datestrain1 = explode(' ', $comments->created_at);
            $date1 = explode('-', $datestrain1[0]);
            $origin1 = new DateTime($comments->created_at);
            $target1 = new DateTime('now');
            $interval1 = $origin1->diff($target1);
            $comment_time = "";
            if ($interval1->y != 0) {
                $comment_time = $interval1->y . ' ' .
                    'Year';
            } elseif ($interval1->m != 0) {
                $comment_time = $interval1->m . ' ' .
                    'Months';
            } elseif ($interval1->d != 0) {
                $comment_time = $interval1->d . ' ' .
                    'Day';
            } elseif ($interval1->h != 0) {
                $comment_time = $interval1->h . ' ' .
                    'Hour';
            } elseif ($interval1->i != 0) {
                $comment_time = $interval1->i . ' ' .
                    'Min';
            } elseif ($interval1->s != 0) {
                $comment_time = $interval1->s . ' ' .
                    'Sec';
            }
            $replys = Reply::orderBy('created_at', 'desc')->where('comment_id', '=', $comments->id)->get();
            $reply_image = [];
            $count = count($replys);
            $reply_time = "";
            $replies_title = "";
            $replies_content = "";
            $show_reply_img = "";
            $reply_author = "";
            $show_comment_reply = "";
            foreach ($replys as $replies) {
                if ($comments->id == $replies->comment_id) {
                    $replies_title = $replies->title;
                    $replies_content = $replies->content;
                    array_push($reply_image, $replies->image);
                    foreach ($userss as $users) {
                        if ($users->id == $replies->user_id) {
                            $reply_author = $users->name;
                        }
                    }
                    $origin2 = new
                        DateTime($replies->created_at);
                    $target2 = new
                        DateTime('now');
                    $interval2 =
                        $origin2->diff($target2);
                    if ($interval2->y != 0) {
                        $reply_time =
                            $interval2->y
                            . ' ' .
                            'Year';
                    } elseif (
                        $interval2->m
                        != 0
                    ) {
                        $reply_time =
                            $interval2->m
                            . ' ' .
                            'Months';
                    } elseif (
                        $interval2->d
                        != 0
                    ) {
                        $reply_time =
                            $interval2->d
                            . ' ' .
                            'Day';
                    } elseif (
                        $interval2->h
                        != 0
                    ) {
                        $reply_time =
                            $interval2->h
                            . ' ' .
                            'Hour';
                    } elseif (
                        $interval2->i
                        != 0
                    ) {
                        $reply_time =
                            $interval2->i
                            . ' ' .
                            'Min';
                    } elseif (
                        $interval2->s
                        != 0
                    ) {
                        $reply_time =
                            $interval2->s
                            . ' ' .
                            'Sec';
                    }
                    $show_comment_reply .= 
                    "
                    <div
                        class='flex-1 pcr-body rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed' >
                        
                        <div class='space-y-4'
                            style='color: black;font-size:20px;margin:-2px;height:auto'>
                            <div class='flex' style=''>
                                <div
                                    class='flex-shrink-0 mr-3'>
                                    
                                    <img class='mt-3 rounded-full w-6 h-6 sm:w-8 sm:h-8'
                                        src='http://localhost/xampp/myblog/storage/app/public/".$replies->image."'
                                        alt=''>
                                </div>
                                <div
                                    class='flex-1 bg-gray-100 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed' style='font-size: 13px;background-color: #3e537e;box-shadow: 0 0 3px 0 #ece3e5, 0 20px 25px 0 rgb(0 0 0 / 20%);transition: all 1s;color: whitesmoke;'>
                                    <span style='font-size: 13px;'>
                                                @" . $reply_author . "
                                    </span>
                                    <span class='text-xs text-gray-400'>
                                        " . $reply_time . " ago
                                    </span>
                                    <p style='font-size: 16px'>" . $replies_title . "</p>
                                    <div class='flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed' style='background-color: #3e537e;box-shadow: 0 0 5px 0 #88a7fdc2, 0 2px 25px 0 rgb(0 0 0 / 20%);transition: all 1s;'>
                                        <p
                                        class='' style='width:400px'>
                                        " . $replies_content . "
                                    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }
            }
            if (count($reply_image) > 0) {
                if (count($reply_image) == 1) {
                    $show_reply_img .=
                        "<img class='comment-reply-img rounded-full w-6 h-6 border border-white'
                        src='http://localhost/xampp/myblog/storage/app/public/".$reply_image[0]."'
                        alt=''>";
                } else {
                    $show_reply_img .=
                        "
                    <img class='comment-reply-img rounded-full w-6 h-6 border border-white'
                    src='http://localhost/xampp/myblog/storage/app/public/".$reply_image[0]."'
                    alt=''>
                    <img class='comment-reply-img1 rounded-full w-6 h-6 border border-white'
                        src='http://localhost/xampp/myblog/storage/app/public/".$reply_image[1]."'
                        alt=''>";
                }
            }
            $reply_button = "";
            if ($count > 0) {
                $reply_button .= 
                "
                <button type='button'
                    class=''
                    >
                    " . $count . " replies
                    <span style='width:20px;display:block;' onclick='show_reply(this," . $count1 . ")' id='btn" . $count1 . "'>
                        <?xml version='1.0' encoding='iso-8859-1'?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                        viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;position:relative;left: 9px;' xml:space='preserve'>
                        <g>
                            <g>
                                <path d='M498.347,117.973c-18.773-18.773-51.2-18.773-68.267,0L256,290.346L83.627,117.973
                                    c-8.534-8.534-22.186-13.653-34.133-13.653c-13.653,0-25.6,5.12-34.133,13.653C5.12,128.213,0,140.159,0,153.813
                                    s5.12,25.6,13.653,34.133l208.213,206.507c8.534,8.534,22.187,13.653,34.133,13.653c11.947,0,25.6-5.12,34.133-13.653
                                    L498.347,186.24C506.88,177.706,512,164.053,512,152.106C512,140.159,506.88,126.506,498.347,117.973z M472.747,162.346
                                    L266.24,370.56c-5.12,5.12-15.36,5.12-20.48,0L39.253,164.053c-3.413-3.413-5.12-6.827-5.12-10.24s1.706-6.827,5.12-10.24
                                    s6.827-5.12,10.24-5.12s6.827,1.707,10.24,5.12l184.32,184.32c3.413,3.413,6.827,5.12,11.946,5.12c5.12,0,8.534-1.707,11.947-5.12
                                    l184.32-186.027c5.12-5.12,15.36-5.12,20.48,0c3.413,3.413,5.12,6.827,5.12,10.24C477.867,157.226,476.16,160.639,472.747,162.346
                                    z'/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>
                    </span>
                    <span style='display:none;width:20px;' onclick='show_reply(this," . $count1 . ")' id='btnh" . $count1 . "'>
                        <?xml version='1.0' encoding='iso-8859-1'?>
                        <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                        <svg version='1.1' id='Layer_1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' x='0px' y='0px'
                            viewBox='0 0 512 512' style='enable-background:new 0 0 512 512;position:relative;left: 9px;' xml:space='preserve'>
                        <g>
                            <g>
                                <path d='M499.693,324.665L290.917,117.6c-18.825-18.824-51.338-18.824-68.451,0L13.69,324.665C5.133,334.932,0,346.912,0,360.602
                                    c0,13.69,5.133,25.67,13.69,34.226c8.557,8.556,22.246,13.69,34.226,13.69c11.979,0,25.67-5.133,34.226-13.69l174.55-174.55
                                    l172.839,172.84c18.825,18.824,51.338,18.824,68.451,0c8.557-8.557,13.69-22.246,13.69-34.226
                                    C513.383,346.912,508.25,333.221,499.693,324.665z M474.024,369.158c-5.133,5.133-15.401,5.133-20.535,0L268.671,184.34
                                    c-6.845-6.845-17.113-6.845-23.958,0L59.895,370.87c-5.134,5.133-15.402,5.133-20.535,0c-3.423-3.423-5.133-6.845-5.133-10.268
                                    c0-3.423,1.711-6.845,5.133-10.268l207.064-208.776c3.423-3.423,6.845-5.134,10.268-5.134c3.423,0,6.845,1.712,10.268,5.134
                                    l207.065,207.065c3.423,3.423,5.133,6.845,5.133,10.268C479.158,362.313,477.446,367.447,474.024,369.158z'/>
                            </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        </svg>
                    
                    </span>
                </button>
                ";
            } else {
                $reply_button .= 
                "
                <button type='button'
                    class=''
                    id='btn" . $comments->id . "'>
                    " . $count . " replies
                </button>
                ";
            }
            $scroll = "";
            if ($count > 5 ) {
                $scroll .= "show-post-comment-reply-body-scroll";
            }
            $show_comment .=
                "
            <div class='space-y-4 mt-5'>
                <div class='flex'>
                    <div class='flex-shrink-0 mr-3'>

                        <img class='mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10'
                            src='http://localhost/xampp/myblog/storage/app/public/" . $comments->user_avatar . "'
                            alt=''>
                    </div>
                    <div class='flex-1 commentss-comment rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed'>
                        <span style='font-size: 15px'>
                                    @" . $comment_author . "
                        </span> 
                        <span
                            class='text-xs text-gray-400'>
                            " . $comment_time . " ago
                        </span>
                        <p class='text-lg'>
                            " . $comments->content . "
                        </p>
                        <div class='mt-4 flex items-center'>


                            <div class='comment-footer'>
                            <div
                                class='flex -space-x-2 mr-2'>
                                " . $show_reply_img . "
                            </div>
                                ".$reply_button."
                                <div class='comment-reply'>
                                    <textarea class='comment-reply-content' name='' id='show-post-comment" . $count1 . "' placeholder='Reply to @" . $comment_author . " comment...' ></textarea><button onclick='post_commentg(".$comments->id."," . $count1 . ")' style='padding-left: 20px;color: whitesmoke;'><svg id='Capa_1' enable-background='new 0 0 512 512' height='30' viewBox='0 0 512 512' width='30' xmlns='http://www.w3.org/2000/svg'><g><path d='m512 256c0 140.67-112.436 254.425-253.097 255.984-5.353.059-10.669-.046-15.943-.31-5.045-.253-9.22-3.934-10.126-8.903-20.078-110.04-110.504-195.524-222.97-208.143-4.184-.469-7.538-3.722-8.038-7.902-1.219-10.188-1.84-20.558-1.826-31.077.191-142.281 117.504-257.676 259.771-255.622 139.646 2.016 252.229 115.847 252.229 255.973z' fill='#1e3fac'/><path d='m1.766 286.232 380.908-210.988c11.895-8.275 62.386 42.098 54.178 53.898l-193.245 382.563c-125.52-5.983-227.357-102.364-241.841-225.473z' fill='#1e3fac'/><path d='m462.409 75.155-219.562 315.62-103.238-18.385 317.492-318.905 3.709 3.709c4.81 4.811 5.484 12.376 1.599 17.961z' fill='#55a4f9'/><path d='m139.61 372.39-18.385-103.238 315.542-219.507c5.63-3.916 13.256-3.237 18.106 1.612l3.642 3.642zm103.237 18.385 20.198-20.198-49.189-37.077z' fill='#1380e2'/><path d='m184.157 303.801-62.932-34.648 18.385-18.385z' fill='#4172cc'/><path d='m454.998 51.383-270.822 252.437-115.303-115.303c-5.219-5.219-3.179-14.1 3.794-16.519l361.549-125.389c7.27-2.521 15.341-.667 20.782 4.774zm5.619 5.619-246.78 276.478 109.646 109.646c5.219 5.219 14.1 3.179 16.519-3.794l125.389-361.548c2.521-7.27.667-15.341-4.774-20.782z' fill='#a7d0fc'/><path d='m465.391 77.785-70.574 203.494c-12.609 36.357-58.911 46.992-86.121 19.782-19.548-19.548-20.439-50.957-2.03-71.581l153.951-172.478c5.441 5.441 7.295 13.512 4.774 20.783zm-31.176-31.176-203.494 70.574c-36.357 12.609-46.992 58.91-19.782 86.121l3.521 3.521c19.856 19.856 51.871 20.418 72.412 1.271l168.126-156.713c-5.441-5.441-13.512-7.295-20.783-4.774z' fill='#c8e2fd'/><path d='m199.979 352.149-69.297 69.296c-.976.977-2.256 1.465-3.535 1.465s-2.56-.488-3.535-1.465c-1.953-1.952-1.953-5.118 0-7.07l69.297-69.296c1.951-1.953 5.119-1.953 7.07 0 1.953 1.952 1.953 5.118 0 7.07zm6.54 23.512c-1.951-1.953-5.119-1.953-7.07 0l-35.354 35.355c-1.953 1.952-1.953 5.118 0 7.07.976.977 2.256 1.465 3.535 1.465s2.56-.488 3.535-1.465l35.354-35.355c1.953-1.952 1.953-5.118 0-7.07zm-56.569 49.497-14.142 14.143c-1.952 1.952-1.952 5.118.001 7.071.977.976 2.256 1.464 3.535 1.464s2.56-.488 3.536-1.465l14.142-14.143c1.952-1.952 1.952-5.118-.001-7.071-1.953-1.951-5.118-1.952-7.071.001zm44.815-10.342-14.143 14.142c-1.953 1.953-1.953 5.119-.001 7.071.977.977 2.257 1.465 3.536 1.465s2.56-.488 3.535-1.464l14.143-14.142c1.953-1.953 1.953-5.119.001-7.071-1.953-1.953-5.12-1.952-7.071-.001z' fill='#fff'/></g></svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='reply_popup" . $count1 . "' id='replies'>
                        <div
                            style='width: 625px;margin-top: 10px;margin-left: 35px;top: 70px;background-color: #7fffd400;'>
                            <div class='show-post-comment-reply-body ".$scroll."'>
                                <div
                                    class='flex-shrink-0 mr-3'>
                                </div>
                                ".$show_comment_reply."
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <button hidden id='field1' value='" . $comment_count . "'></button>
            <button hidden id='post-id' value='" . $id . "'></button>
            ";
        }
        
        return response(
            $data = $show_comment
        );
    }
    public function show_popular($id)
    {
        return response(
            $data = "it works"
        );
    }
    public function show_searchpost($id)
    {
        return view('show_post');
    }

    public function show_comment($id, $is)
    {
        return view('show_comment');
    }

    public function chat($id)
    {
        $check_chat = chat_info::where([
            ['to', '=', $id],
            ['from', '=', Auth::user()->id]
        ])->orWhere([
            ['to', '=', Auth::user()->id],
            ['from', '=', $id]
        ])->get();
        $start_chat = "";
        $new_chat_id = "";
        $chat_with = User::where('id', '=', $id)->get();
        $chat_with_name = "";
        foreach ($chat_with as $to) {
            $chat_with_name = $to->name;
        }
        if (count($check_chat) == 0) {
            $rand1 = rand(0, 9);
            $rand2 = rand(0, 9);
            $rand3 = rand(0, 9);
            $new_chat_id = "wehub" . $rand1 . $rand2 . $rand3;
            $store_nw_chat_id = new chat_info;
            $store_nw_chat_id->chat_id = $new_chat_id;
            $store_nw_chat_id->to = $id;
            $store_nw_chat_id->from = Auth::user()->id;
            $store_nw_chat_id->save();
            $chat_box =
                "
            <input hidden id='chat_id' value=" . $new_chat_id . ">
            <div id='mydiv' class='active_chat'>
                <div id='mydivheader'>@" . $chat_with_name . "</div>
                <div class='mydiv_body' id='mydiv_body'>
                    <div id='message_body'>
                    </div>
                </div>
                <div class='mydivfooter'>
                <textarea name='message' id='message1' placeholder='Message'></textarea><button onclick='chat_send()' style='padding-left: 20px;color: whitesmoke;'><svg id='Capa_1' enable-background='new 0 0 512 512' height='30' viewBox='0 0 512 512' width='30' xmlns='http://www.w3.org/2000/svg' style='position:absolute;bottom: 25px;'><g><path d='m512 256c0 140.67-112.436 254.425-253.097 255.984-5.353.059-10.669-.046-15.943-.31-5.045-.253-9.22-3.934-10.126-8.903-20.078-110.04-110.504-195.524-222.97-208.143-4.184-.469-7.538-3.722-8.038-7.902-1.219-10.188-1.84-20.558-1.826-31.077.191-142.281 117.504-257.676 259.771-255.622 139.646 2.016 252.229 115.847 252.229 255.973z' fill='#51489a'/><path d='m1.766 286.232 380.908-210.988c11.895-8.275 62.386 42.098 54.178 53.898l-193.245 382.563c-125.52-5.983-227.357-102.364-241.841-225.473z' fill='#5f55af'/><path d='m462.409 75.155-219.562 315.62-103.238-18.385 317.492-318.905 3.709 3.709c4.81 4.811 5.484 12.376 1.599 17.961z' fill='#55a4f9'/><path d='m139.61 372.39-18.385-103.238 315.542-219.507c5.63-3.916 13.256-3.237 18.106 1.612l3.642 3.642zm103.237 18.385 20.198-20.198-49.189-37.077z' fill='#1380e2'/><path d='m184.157 303.801-62.932-34.648 18.385-18.385z' fill='#4172cc'/><path d='m454.998 51.383-270.822 252.437-115.303-115.303c-5.219-5.219-3.179-14.1 3.794-16.519l361.549-125.389c7.27-2.521 15.341-.667 20.782 4.774zm5.619 5.619-246.78 276.478 109.646 109.646c5.219 5.219 14.1 3.179 16.519-3.794l125.389-361.548c2.521-7.27.667-15.341-4.774-20.782z' fill='#a7d0fc'/><path d='m465.391 77.785-70.574 203.494c-12.609 36.357-58.911 46.992-86.121 19.782-19.548-19.548-20.439-50.957-2.03-71.581l153.951-172.478c5.441 5.441 7.295 13.512 4.774 20.783zm-31.176-31.176-203.494 70.574c-36.357 12.609-46.992 58.91-19.782 86.121l3.521 3.521c19.856 19.856 51.871 20.418 72.412 1.271l168.126-156.713c-5.441-5.441-13.512-7.295-20.783-4.774z' fill='#c8e2fd'/><path d='m199.979 352.149-69.297 69.296c-.976.977-2.256 1.465-3.535 1.465s-2.56-.488-3.535-1.465c-1.953-1.952-1.953-5.118 0-7.07l69.297-69.296c1.951-1.953 5.119-1.953 7.07 0 1.953 1.952 1.953 5.118 0 7.07zm6.54 23.512c-1.951-1.953-5.119-1.953-7.07 0l-35.354 35.355c-1.953 1.952-1.953 5.118 0 7.07.976.977 2.256 1.465 3.535 1.465s2.56-.488 3.535-1.465l35.354-35.355c1.953-1.952 1.953-5.118 0-7.07zm-56.569 49.497-14.142 14.143c-1.952 1.952-1.952 5.118.001 7.071.977.976 2.256 1.464 3.535 1.464s2.56-.488 3.536-1.465l14.142-14.143c1.952-1.952 1.952-5.118-.001-7.071-1.953-1.951-5.118-1.952-7.071.001zm44.815-10.342-14.143 14.142c-1.953 1.953-1.953 5.119-.001 7.071.977.977 2.257 1.465 3.536 1.465s2.56-.488 3.535-1.464l14.143-14.142c1.953-1.953 1.953-5.119.001-7.071-1.953-1.953-5.12-1.952-7.071-.001z' fill='#fff'/></g></svg></button>
                </div>
            </div>
            ";
        } else {
            foreach ($check_chat as $chats) {
                $chat_box =
                    "
                <input hidden id='chat_id' value=" . $chats->chat_id . ">
                <div id='mydiv' class='active_chat'>
                    <div id='mydivheader'>@" . $chat_with_name . "</div>
                    <div class='mydiv_body' id='mydiv_body'>
                    </div>
                    <div class='mydivfooter'>
                    <textarea name='message' id='message1' placeholder='Message'></textarea><button onclick='chat_send()' style='padding-left: 20px;color: whitesmoke;'><svg id='Capa_1' enable-background='new 0 0 512 512' height='30' viewBox='0 0 512 512' width='30' xmlns='http://www.w3.org/2000/svg' style='position:absolute;bottom: 25px;'><g><path d='m512 256c0 140.67-112.436 254.425-253.097 255.984-5.353.059-10.669-.046-15.943-.31-5.045-.253-9.22-3.934-10.126-8.903-20.078-110.04-110.504-195.524-222.97-208.143-4.184-.469-7.538-3.722-8.038-7.902-1.219-10.188-1.84-20.558-1.826-31.077.191-142.281 117.504-257.676 259.771-255.622 139.646 2.016 252.229 115.847 252.229 255.973z' fill='#51489a'/><path d='m1.766 286.232 380.908-210.988c11.895-8.275 62.386 42.098 54.178 53.898l-193.245 382.563c-125.52-5.983-227.357-102.364-241.841-225.473z' fill='#5f55af'/><path d='m462.409 75.155-219.562 315.62-103.238-18.385 317.492-318.905 3.709 3.709c4.81 4.811 5.484 12.376 1.599 17.961z' fill='#55a4f9'/><path d='m139.61 372.39-18.385-103.238 315.542-219.507c5.63-3.916 13.256-3.237 18.106 1.612l3.642 3.642zm103.237 18.385 20.198-20.198-49.189-37.077z' fill='#1380e2'/><path d='m184.157 303.801-62.932-34.648 18.385-18.385z' fill='#4172cc'/><path d='m454.998 51.383-270.822 252.437-115.303-115.303c-5.219-5.219-3.179-14.1 3.794-16.519l361.549-125.389c7.27-2.521 15.341-.667 20.782 4.774zm5.619 5.619-246.78 276.478 109.646 109.646c5.219 5.219 14.1 3.179 16.519-3.794l125.389-361.548c2.521-7.27.667-15.341-4.774-20.782z' fill='#a7d0fc'/><path d='m465.391 77.785-70.574 203.494c-12.609 36.357-58.911 46.992-86.121 19.782-19.548-19.548-20.439-50.957-2.03-71.581l153.951-172.478c5.441 5.441 7.295 13.512 4.774 20.783zm-31.176-31.176-203.494 70.574c-36.357 12.609-46.992 58.91-19.782 86.121l3.521 3.521c19.856 19.856 51.871 20.418 72.412 1.271l168.126-156.713c-5.441-5.441-13.512-7.295-20.783-4.774z' fill='#c8e2fd'/><path d='m199.979 352.149-69.297 69.296c-.976.977-2.256 1.465-3.535 1.465s-2.56-.488-3.535-1.465c-1.953-1.952-1.953-5.118 0-7.07l69.297-69.296c1.951-1.953 5.119-1.953 7.07 0 1.953 1.952 1.953 5.118 0 7.07zm6.54 23.512c-1.951-1.953-5.119-1.953-7.07 0l-35.354 35.355c-1.953 1.952-1.953 5.118 0 7.07.976.977 2.256 1.465 3.535 1.465s2.56-.488 3.535-1.465l35.354-35.355c1.953-1.952 1.953-5.118 0-7.07zm-56.569 49.497-14.142 14.143c-1.952 1.952-1.952 5.118.001 7.071.977.976 2.256 1.464 3.535 1.464s2.56-.488 3.536-1.465l14.142-14.143c1.952-1.952 1.952-5.118-.001-7.071-1.953-1.951-5.118-1.952-7.071.001zm44.815-10.342-14.143 14.142c-1.953 1.953-1.953 5.119-.001 7.071.977.977 2.257 1.465 3.536 1.465s2.56-.488 3.535-1.464l14.143-14.142c1.953-1.953 1.953-5.119.001-7.071-1.953-1.953-5.12-1.952-7.071-.001z' fill='#fff'/></g></svg></button>
                    </div>
                </div>
                ";
            }
        }

        return response(
            $data = $chat_box
        );
    }

    public function chat_now($id, $is)
    {
        $chat = new chat;
        $chat->chat_id = $id;
        $chat->user_id = Auth::user()->id;
        $chat->message = $is;
        $chat->read = 2;
        $chat->save();
        $get_chat = chat::where('chat_id', '=', $id)->get();
        $show_chat = "";
        foreach ($get_chat as $chats) {

            if ($chats->user_id == Auth::user()->id) {
                $chat_date = $chats->created_at->diffForHumans();
                $show_chat .=
                    "
                <div class='me'><div class='me_text'><img class='chat_image' src='http://localhost/xampp/myblog/storage/app/public/" . Auth::user()->avatar . "' alt=''><span class='me_chat_datd'>" . $chat_date . "</span><p class='me_chat_txt'>" . $chats->message . "</p></div></div>
                ";
            } else {
                $chat_date = $chats->created_at->diffForHumans();
                $image = "";
                $get_user = User::where('id', '=', $chats->user_id)->get();
                foreach ($get_user as $users) {
                    $image = $users->avatar;
                }
                $show_chat .=
                    "
                <div class='you'><div class='you_text'><img class='chat_image_you' src='http://localhost/xampp/myblog/storage/app/public/" . $image . "' alt=''><span class='you_chat_datd'>" . $chat_date . "</span><p class='you_chat_txt'>" . $chats->message . "</p></div></div>
                ";
            }
        }
        return response(
            $data = $show_chat
        );
    }

    public function get_chat_now($id)
    {
        $get_chat = chat::where('chat_id', '=', $id)->get();
        $show_chat = "";
        $chat_date = "";
        foreach ($get_chat as $chats) {

            if ($chats->user_id == Auth::user()->id) {
                $chat_date = $chats->created_at->diffForHumans();
                $show_chat .=
                    "
                <div class='me'><div class='me_text'><img class='chat_image' src='http://localhost/xampp/myblog/storage/app/public/" . Auth::user()->avatar . "' alt=''><span class='me_chat_datd'>" . $chat_date . "</span><p class='me_chat_txt'>" . $chats->message . "</p></div></div>
                ";
            } else {
                $chat_date = $chats->created_at->diffForHumans();
                $image = "";
                $get_user = User::where('id', '=', $chats->user_id)->get();
                foreach ($get_user as $users) {
                    $image = $users->avatar;
                }
                $show_chat .=
                    "
                <div class='you'><div class='you_text'><img class='chat_image_you' src='http://localhost/xampp/myblog/storage/app/public/" . $image . "' alt=''><span class='you_chat_datd'>" . $chat_date . "</span><p class='you_chat_txt'>" . $chats->message . "</p></div></div>
                ";
            }
        }
        return response(
            $data = $show_chat
        );
    }

    public function active()
    {
        $friends = Friends::get()->where('userID1', '=', Auth::user()->id);
        $is_friend = [];
        if (count($friends) == 0) {
            $friends = Friends::get()->where('friendsID', '=', Auth::user()->id);
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    array_push($is_friend, $friend->userID1);
                }
            }
        } else {
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    array_push($is_friend, $friend->friendsID);
                }
            }
            $friendd = Friends::get()->where('friendsID', '=', Auth::user()->id);
            foreach ($friendd as $friendds) {
                if ($friendds->confirmed == 1) {
                    array_push($is_friend, $friendds->userID1);
                }
            }
        }
        $is_active = [];
        foreach ($is_friend as $friend_id) {
            $test_active = Active::get()->where('user_id', '=', $friend_id);
            foreach ($test_active as $active) {
                array_push($is_active, $active->user_id);
            }
        }
        $active_friends_count = count($is_active);

        $show_active = "";
        $count_check = 0;
        foreach ($is_active as $active) {
            if ($count_check == 2) {
                break;
            }
            ++$count_check;
            $active_user = User::get()->where('id', '=', $active);
            foreach ($active_user as $user_act) {
                $show_active .=
                    "
                <tr class='text-gray-700 dark:text-gray-100 chat'>
                    <th
                        class='border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left font-bold uppercase'>
                        " . $user_act->name . "</th>
                    <td
                        class='border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>
                        5,480</td>
                    <td
                        class='border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4'>
                        <div class='flex items-center'>
                        <button class='bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150' onclick='chat(this," . $user_act->id . ")'>Chat</button>
                        </div>
                    </td>
                </tr>
                ";
            }
        }

        $show_active_main =
            "
            <div
            class='relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded chat'>
            <div class='rounded-t mb-0 px-0 border-0'>
                <div class='flex flex-wrap items-center px-4 py-2'>
                    <div class='relative w-full max-w-full flex-grow flex-1'>
                        <h3 class='font-semibold text-base text-gray-900 dark:text-gray-50'>Active Friend's: " . $active_friends_count . "</h3>
                    </div>
                    <div class='relative w-full max-w-full flex-grow flex-1 text-right'>
                        <button
                            class='bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'
                            type='button'>See all</button>
                    </div>
                </div>
                <div class='block w-full overflow-x-auto'>
                    <table class='items-center w-full bg-transparent border-collapse'>
                        <thead>
                            <tr>
                                <th
                                    class='px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>
                                    Username</th>
                                <th
                                    class='px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left'>
                                    Online</th>
                                <th
                                    class='px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px'>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            " . $show_active . "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        ";

        return response(
            $data = $show_active_main
        );
    }

    public function create_post(Request $request)
    {

        $auth_user = Auth::user();
        $post_id = Auth::user()->id;
        $post = Post::orderBy('created_at', 'desc')->get()->where('author_id', '=', $post_id);
        if ($request->has('publish')) {
            // dd($request);
            if ($request->title == "" && $request->content == "") {
                return back()->with([
                    'message'    => __('Both title field and content field is required'),
                    'alert-type' => 'error',
                ]);
            } elseif ($request->content == "") {
                return back()->with([
                    'message'    => __('The content field is required'),
                    'alert-type' => 'error',
                ]);
            } elseif ($request->title == "") {
                return back()->with([
                    'message'    => __('The title field is required'),
                    'alert-type' => 'error',
                ]);
            } elseif ($request->title != "" && $request->content != "") {
                if ($image = $request->file('Image')->store('posts', 'public')) {
                    $save = new Post;
                    $save->author_id = Auth::user()->id;
                    $save->category_id = $request->category_id;
                    $save->title = $request->title;
                    $save->seo_title = $request->seo_title;
                    $save->excerpt = $request->excerpt;
                    $save->body = $request->content;
                    $save->image = $image;
                    $slug = "";
                    if ($request->slug != "") {
                        $save->slug = $request->slug;
                        $slug = $request->slug;
                    } else {
                        $save->slug = $slug = Str::of($request->title)->slug('-');
                    }
                    $save->meta_description = $request->meta_description;
                    $save->meta_keywords = $request->meta_keyword;
                    $save->status = $request->status;
                    $save->featured = 0;
                    $save->save();

                    $friends = Friends::get()->where('friendsID', '=', Auth::user()->id);
                    foreach ($friends as $friend) {
                        if ($friend->confirmed == 1) {
                            $users = User::find($friend->userID1);
                            Notification::send($users, new postNotification(Auth::user()->name, Auth::user()->avatar, $slug, $request->title));
                        }
                    }
                    $friends1 = Friends::get()->where('userID1', '=', Auth::user()->id);
                    foreach ($friends1 as $friend2) {
                        if ($friend2->confirmed == 1) {
                            $users = User::find($friend2->friendsID);
                            Notification::send($users, new postNotification(Auth::user()->name, Auth::user()->avatar, $slug, $request->title));
                        }
                    }
                }

                return back()->with([
                    'message'    => __('Post Published'),
                    'alert-type' => 'success', [
                        'auth_user' => $auth_user,
                        'post' => $post
                    ]
                ]);
            }
            $auth_user = Auth::user();
            return view('edit_post', ['auth_user' => $auth_user]);
        }
        return view('edit_post', [
            'auth_user' => $auth_user,
            'post' => $post
        ]);
    }

    public function like($id)
    {
        $save = new like;
        $save->user_id = Auth::user()->id;
        $save->post_id = $id;
        $save->save();
        $get_post = Post::get()->where('id', '=', $id);
        $post_owner = "";
        $post_title = "";
        foreach ($get_post as $post) {
            $post_owner = $post->author_id;
            $post_title = $post->title;
        }
        $users = User::find($post_owner);
        Notification::send($users, new likeNotification(Auth::user()->name, $post_title, Auth::user()->avatar, Auth::user()->id));
    }

    public function unlike($id)
    {
        $delete = like::where('post_id', '=', $id);
        $delete->delete();
        $get_post = Post::get()->where('id', '=', $id);
        $post_owner = "";
        $post_title = "";
        foreach ($get_post as $post) {
            $post_owner = $post->author_id;
            $post_title = $post->title;
        }
        $users = User::find($post_owner);
        Notification::send($users, new unlikeNotification(Auth::user()->name, $post_title, Auth::user()->avatar, Auth::user()->id));
    }

    public function follow($id)
    {
        $save = new follow;
        $save->user_id = Auth::user()->id;
        $save->follower_user_id = $id;
        $save->save();
        $users = User::find($id);
        Notification::send($users, new followNotification(Auth::user()->name, Auth::user()->avatar, Auth::user()->id));
        $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', $id);
        $followers_count = 0;
        foreach ($follow as $followers) {
            ++$followers_count;
        }
        return response()->json(
            $data = $followers_count
        );
    }

    public function unfollow($id)
    {
        $delete = follow::where('follower_user_id', '=', $id)->where('user_id', '=', Auth::user()->id);
        $delete->delete();
        $users = User::find($id);
        Notification::send($users, new unfollowNotification(Auth::user()->name, Auth::user()->avatar, Auth::user()->id));
        $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', $id);
        $followers_count = 0;
        foreach ($follow as $followers) {
            ++$followers_count;
        }
        return response()->json(
            $data = $followers_count

        );
    }

    public function friend($id)
    {
        $save = new Friends;
        $save->friendsID = $id;
        $save->userID1 = Auth::user()->id;
        $save->confirmed = 2;
        $save->save();
        $users = User::find($id);
        Notification::send($users, new friendNotification(Auth::user()->name, Auth::user()->avatar, Auth::user()->id));
    }

    public function confirmfriend($id, $notify_id)
    {
        $post = Post::orderBy('created_at', 'desc')->get()->where('author_id', '=', $id);
        $post_count = 0;
        foreach ($post as $posts) {
            ++$post_count;
        }
        $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', $id);
        $followers_count = 0;
        foreach ($follow as $followers) {
            ++$followers_count;
        }
        $following = follow::orderBy('created_at', 'desc')->get()->where('user_id', '=', $id);
        $following_count = 0;
        foreach ($following as $follows) {
            ++$following_count;
        }
        $comment = Comment::orderBy('created_at', 'desc')->get();
        $auth_user = User::get()->where('id', '=', $id);
        $friends = Friends::get()->where('userID1', '=', $id);
        $friends_count = 0;
        $confirmed = 0;
        if (count($friends) == 0) {
            $friends = Friends::get()->where('friendsID', '=', $id);
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 1;
                    }
                } elseif ($friend->confirmed == 2) {
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 2;
                    }
                }
            }
        } else {
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                    if ($friend->friendsID == Auth::user()->id) {
                        $confirmed = 1;
                    }
                } elseif ($friend->confirmed == 2) {
                    if ($friend->friendsID == Auth::user()->id) {
                        $confirmed = 2;
                    }
                }
            }
            $friends1 = Friends::get()->where('friendsID', '=', $id);
            foreach ($friends1 as $friend1) {
                if ($friend1->confirmed == 1) {
                    ++$friends_count;
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 1;
                    }
                } elseif ($friend->confirmed == 2) {
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 2;
                    }
                }
            }
        }

        $user = User::find(Auth::user()->id);
        foreach ($user->unreadNotifications as $value) {
            if ($notify_id == $value->id) {
                $value->update(['read_at' => now()]);
            }
        }
        return view('confirmfriend', [
            'auth_user' => $auth_user,
            'post' => $post,
            'post_count' => $post_count,
            'comment' => $comment,
            'likes' => like::get(),
            'followers_count' => $followers_count,
            'following_count' => $following_count,
            'following' => $follow,
            'friends_count' => $friends_count,
            'confirmed' => $confirmed

        ]);
    }

    public function toconfirmfriend($id)
    {

        $friends = Friends::all();
        foreach ($friends as $friend) {
            if ($friend->friendsID == Auth::user()->id && $friend->userID1 == $id) {
                $friend->confirmed = 1;
                $friend->save();
                $users = User::find($id);
                $name = $users->name;
                Notification::send($users, new friendconfirmedNotification(Auth::user()->name, Auth::user()->avatar));
            }
        }
        $friends = Friends::get()->where('userID1', '=', $id);
        $friends_count = 0;
        $confirmed = 0;
        if (count($friends) == 0) {
            $friends = Friends::get()->where('friendsID', '=', $id);
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 1;
                    }
                } elseif ($friend->confirmed == 2) {
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 2;
                    }
                }
            }
        } else {
            foreach ($friends as $friend) {
                if ($friend->confirmed == 1) {
                    ++$friends_count;
                    if ($friend->friendsID == Auth::user()->id) {
                        $confirmed = 1;
                    }
                } elseif ($friend->confirmed == 2) {
                    if ($friend->friendsID == Auth::user()->id) {
                        $confirmed = 2;
                    }
                }
            }
            $friends1 = Friends::get()->where('friendsID', '=', $id);
            foreach ($friends1 as $friend1) {
                if ($friend1->confirmed == 1) {
                    ++$friends_count;
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 1;
                    }
                } elseif ($friend->confirmed == 2) {
                    if ($friend->userID1 == Auth::user()->id) {
                        $confirmed = 2;
                    }
                }
            }
        }

        return response()->json(
            $data = $friends_count

        );
    }

    public function search($id)
    {
        $datas = "<div class='search_result_n'>";
        // $datas .= "<button class='search_result_count' name='search_result_count' id='search_result_count' value='0'></button>";
        function custom_echo1($x, $length)
        {
            if (strlen($x) <= $length) {
                return "<span class='content'>$x  </span>" . " ";
            } else {
                $y = substr($x, 0, $length) . '...' . ' ';
                return "<span class=''>$y</span>" . " ";
            }
        }
        $search_post = Post::orderBy('created_at', 'desc')
            ->where('title', 'like', $id)
            ->orWhere('slug', 'like', $id)
            ->orWhere('seo_title', 'like', $id)
            ->orWhere('meta_description', 'like', $id)
            ->orWhere('meta_keywords', 'like', $id)->get();
        $got_result = 0;
        $search_result_count = 0;
        if (count($search_post) > 0) {
            // if ($got_result == 0) {
            //     $add = "<span style='color:whitesmoke;'>Search Result For: ".$id."</span>";
            // }else{
            //     $add = "";
            // }
            if ($search_result_count == 3) {
                $add = "<button hidden class='search_result_no' name='search_result_count' id='search_result_no' value=" . $search_result_count . "></button>";
            } else {
                $add = "";
            }
            $got_result = 1;
            foreach ($search_post as $post) {
                ++$search_result_count;
                $content = custom_echo1($post->body, 50);
                $author = User::get()->where('id', '=', $post->author_id);
                $creator = "";
                foreach ($author as $ceator_info) {
                    $creator = $ceator_info->name;
                }
                $comments = Comment::orderBy('created_at', 'desc')->get();
                $commment_count = 0;
                foreach ($comments as $comment) {
                    if ($post->id == $comment->post_id) {
                        ++$commment_count;
                    }
                }
                $likes = like::orderBy('created_at', 'desc')->get();
                $likes_count = 0;
                foreach ($likes as $like) {
                    if ($like->post_id == $post->id) {
                        ++$likes_count;
                    }
                }

                $datas .= "
                <a href='http://127.0.0.1:8000/dashboard/show-searchpost/" . $post->id . "'>
                <li class='show_results'>
                    " . $add . "
                    <ul class='section four'>
                        <div class='text1 four'><img class='notify_img1'
                            src='http://localhost/xampp/myblog/storage/app/public/" . $post->image . "'
                            alt=''>
                        </div>
                        <li class='rect1 four'>
                            <div class='search_content'>
                                <span id='search_result_name'>Post</span><span id='search_title'>Author: " . $creator . "</span><span id='search_title'>, Title: " . $post->title . "</span>
                                <p>" . $content . "</p>
                                <div style='padding-left:30px'>
                                    <span>" . $commment_count . " Comment's</span> .
                                    <span>" . $likes_count . " Like's</span> .
                                    <span>0 View's</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                </a>";
            }
        } else {
            // $got_result = 0;
            // $datas = "
            // <li>
            //     <p>Search Result For: ".$id."<br />
            //         <span>No results found</span>
            //     </p>
            // </li>";
        }
        $search_user = User::where('name', '=', $id)
            ->orWhere('email', 'like', $id)->get();
        if (count($search_user) > 0) {
            // if ($got_result == 0) {
            //     $add = "<span style='color:whitesmoke;'>Search Result For: ".$id."</span>";
            // }else{
            //     $add = "";
            // }
            if ($search_result_count == 3) {
                $add = "<button hidden class='search_result_no' name='search_result_count' id='search_result_no' value=" . $search_result_count . "></button>";
            } else {
                $add = "";
            }
            $got_result = 1;
            foreach ($search_user as $user) {
                ++$search_result_count;
                if ($search_result_count == 2) {
                    $scroll = 'search_result_body';
                } else {
                    $scroll = '';
                }
                $post = Post::orderBy('created_at', 'desc')->get()->where('author_id', '=', $user->id);
                $post_count = 0;
                foreach ($post as $posts) {
                    ++$post_count;
                }
                $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id', '=', $user->id);
                $followers_count = 0;
                foreach ($follow as $followers) {
                    ++$followers_count;
                }
                $following = follow::orderBy('created_at', 'desc')->get()->where('user_id', '=', $user->id);
                $following_count = 0;
                foreach ($following as $follows) {
                    ++$following_count;
                }
                $friends = Friends::get()->where('userID1', '=', $user->id);
                if (count($friends) == 0) {
                    $friends = Friends::get()->where('friendsID', '=', $user->id);
                    $friends_count = 0;
                    foreach ($friends as $friend) {
                        if ($friend->confirmed == 1) {
                            ++$friends_count;
                        }
                    }
                } else {
                    $friends_count = 0;
                    foreach ($friends as $friend) {
                        if ($friend->confirmed == 1) {
                            ++$friends_count;
                        }
                    }
                    $friendd = Friends::get()->where('friendsID', '=', $user->id);
                    foreach ($friendd as $friendds) {
                        if ($friendds->confirmed == 1) {
                            ++$friends_count;
                        }
                    }
                }
                $datas .= "
                <a  href='http://127.0.0.1:8000/dashboard/" . $user->id . "/profile'>
                <li class='show_results'>
                    " . $add . "
                    <ul class='section four'>
                        <div class='text1 four'><img class='notify_img1'
                            src='http://localhost/xampp/myblog/storage/app/public/" . $user->avatar . "'
                            alt=''>
                        </div>
                        <li class='rect1 four'>
                            <div class='search_content'>
                                <span id='search_result_name'>Profile</span><span id='search_title'>@" . $user->name . "</span>
                                <p>this</p>
                                <div style='padding-left:30px'>
                                    <span>" . $post_count . " Post</span> .
                                    <span>" . $followers_count . " Follower's</span> .
                                    <span>" . $following_count . " Following</span> .
                                    <span>" . $friends_count . " Friend's</span> 
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                </a>
                ";
            }
        } else {
            if ($got_result == 0) {
                $datas = "
            <li>
                <p>Search Result For: " . $id . "<br />
                    <span>No results found</span>
                </p>
            </li>";
            }
        }
        $datas .= "</div>";
        return response(
            $data = $datas
        );
    }
    

    public function logout()
    {
        $delete = Active::where('user_id', '=', Auth::user()->id);
        $delete->delete();
        Auth::logout();
        return redirect()->route('voyager.login');
    }
}
