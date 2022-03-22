<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use App\Models\Reply;
use App\Models\like;
use App\Models\follow;
use App\Models\Friends;
use App\Notifications\postNotification;
use App\Notifications\commentNotification;
use App\Notifications\likeNotification;
use App\Notifications\unlikeNotification;
use App\Notifications\followNotification;
use App\Notifications\unfollowNotification;
use App\Notifications\friendNotification;
use App\Notifications\friendconfirmedNotification;
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
        return view('post',['auth_user' => $auth_user]);
        //    if(Auth::user()->hasRole('user')){
        //         return view('userdash');
        //    }elseif(Auth::user()->hasRole('blogwriter')){
        //         return view('blogwriterdash');
        //    }elseif(Auth::user()->hasRole('admin')){
        //         return view('admindashboard');
        //     }
    }

    public function myprofile()
    {
        $post = Post::orderBy('created_at', 'desc')->get()->where('author_id','=',Auth::user()->id);
        $post_count = 0;
        foreach($post as $posts){
            ++$post_count;
        }
        $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id','=',Auth::user()->id);
        $followers_count = 0;
        foreach($follow as $followers){
            ++$followers_count;
        }
        $following = follow::orderBy('created_at', 'desc')->get()->where('user_id','=',Auth::user()->id);
        $following_count = 0;
        foreach($following as $follow){
            ++$following_count;
        }
        $comment = Comment::orderBy('created_at', 'desc')->get();
        $user = User::find(Auth::user()->id);
        $auth_user = Auth::user();
        $friends = Friends::get()->where('userID1','=',Auth::user()->id);
        if (count($friends) == 0) {
            $friends = Friends::get()->where('friendsID','=',Auth::user()->id);
            $friends_count = 0;
            $confirmed = 0;
            foreach ($friends as $friend) {
                if($friend->confirmed == 1){
                    ++$friends_count;
                    $confirmed = 1;
                }elseif($friend->confirmed == 2){
                    $confirmed = 2;
                }
            }
        }else{
            $friends_count = 0;
            $confirmed = 0;
            foreach ($friends as $friend) {
                if($friend->confirmed == 1){
                    ++$friends_count;
                    $confirmed = 1;
                }elseif($friend->confirmed == 2){
                    $confirmed = 2;
                }
            } 
        }
            
        return view('myprofile',[
            'auth_user' => $auth_user,
            'post' => $post,
            'post_count'=>$post_count,
            'comment'=>$comment,
            'likes'=>like::get(),
            'followers_count'=>$followers_count,
            'following_count'=>$following_count,
            'user'=>$user,
            'friends_count'=>$friends_count
        ]);
    }
    public function viewprofile($id)
    {
        if($id == Auth::user()->id){
            $post = Post::orderBy('created_at', 'desc')->get()->where('author_id','=',Auth::user()->id);
            $post_count = 0;
            foreach($post as $posts){
                ++$post_count;
            }
            $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id','=',Auth::user()->id);
            $followers_count = 0;
            foreach($follow as $followers){
                ++$followers_count;
            }
            $following = follow::orderBy('created_at', 'desc')->get()->where('user_id','=',Auth::user()->id);
            $following_count = 0;
            foreach($following as $follow){
                ++$following_count;
            }
            $comment = Comment::orderBy('created_at', 'desc')->get();
            
            $auth_user = Auth::user();
            $friends = Friends::get()->where('userID1','=',Auth::user()->id);
            if (count($friends) == 0) {
                $friends = Friends::get()->where('friendsID','=',Auth::user()->id);
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if($friend->confirmed == 1){
                        ++$friends_count;
                        $confirmed = 1;
                    }elseif($friend->confirmed == 2){
                        $confirmed = 2;
                    }
                }
            }else{
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if($friend->confirmed == 1){
                        ++$friends_count;
                        $confirmed = 1;
                    }elseif($friend->confirmed == 2){
                        $confirmed = 2;
                    }
                } 
            }
            return view('myprofile',[
                'auth_user' => $auth_user,
                'post' => $post,
                'post_count'=>$post_count,
                'comment'=>$comment,
                'likes'=>like::get(),
                'followers_count'=>$followers_count,
                'following_count'=>$following_count,
                'friends_count'=>$friends_count
            ]);
        }else{
            $post = Post::orderBy('created_at', 'desc')->get()->where('author_id','=',$id);
            $post_count = 0;
            foreach($post as $posts){
                ++$post_count;
            }
            $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id','=',$id);
            $followers_count = 0;
            foreach($follow as $followers){
                ++$followers_count;
            }
            $following = follow::orderBy('created_at', 'desc')->get()->where('user_id','=',$id);
            $following_count = 0;
            foreach($following as $follows){
                ++$following_count;
            }
            $comment = Comment::orderBy('created_at', 'desc')->get();
            $auth_user = User::get()->where('id','=',$id);
            $friends = Friends::get()->where('userID1','=',$id);
            
            $is_friend = 0;
            if (count($friends) == 0) {
                $friends = Friends::get()->where('friendsID','=',$id);
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if($friend->confirmed == 1){
                        ++$friends_count;
                        if ($friend->userID1 == Auth::user()->id) {
                            $is_friend = $friend->userID1;
                            $confirmed = 1;
                        }
                    }elseif($friend->confirmed == 2){
                        $is_friend = 0;
                        $confirmed = 2;
                    }
                }
            }else{
                $friends_count = 0;
                $confirmed = 0;
                foreach ($friends as $friend) {
                    if($friend->confirmed == 1){
                        ++$friends_count;
                        if ($friend->friendsID == Auth::user()->id) {
                            $is_friend = $friend->friendsID;
                            $confirmed = 1;
                        }
                        $friendd = Friends::get()->where('friendsID','=',$id);
                        foreach ($friendd as $friendds) {
                            if($friendds->confirmed == 1){
                                ++$friends_count;
                                if ($friendds->userID1 == Auth::user()->id) {
                                    $is_friend = $friendds->userID1;
                                    $confirmed = 1;
                                }
                            }elseif($friendds->confirmed == 2){
                                $confirmed = 2;
                            }
                        }
                    }elseif($friend->confirmed == 2){
                        $confirmed = 2;
                    }
                } 
            }
            return view('viewprofile',[
                'auth_user' => $auth_user,
                'post' => $post,
                'post_count'=>$post_count,
                'comment'=>$comment,
                'likes'=>like::get(),
                'followers_count'=>$followers_count,
                'following_count'=>$following_count,
                'following'=>$follow,
                'friends_count'=>$friends_count,
                'confirmed'=>$confirmed,
                'is_friend'=>$is_friend

            ]);  
        }
    }

    public function show()
    {    
        $namespacePrefix = Auth::guard(app('VoyagerGuard'))->user();
        // dd($namespacePrefix);
        $show_comment = "";
        $auth_user = Auth::user();
        return view('dashboard1', [
            'post' => Post::orderBy('created_at', 'desc')->get()->where('status','=','PUBLISHED'),
            'likes' => like::orderBy('created_at', 'desc')->get(),
            'user' => User::get(), 'comments' => Comment::get(),
            'show_comment' => $show_comment,
            'auth_user' => $auth_user
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
                'post' => Post::orderBy('created_at', 'desc')->get()->where('status','=','PUBLISHED'),
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
                'post' => Post::orderBy('created_at', 'desc')->get()->where('status','=','PUBLISHED'),
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
            foreach ($datas as $data ) {
                $slug = $data->slug;
                $title = $data->title;
                $author = User::find($data->author_id);
                // dd($author);
                $post_author = $author->name;
                // foreach ($author as $usertest ) {
                // }
            }
            $friends = Friends::get()->where('friendsID','=',Auth::user()->id);
            foreach ($friends as $friend) {
                if($friend->confirmed == 1){
                    $users = User::find($friend->userID1);
                    Notification::send($users, new commentNotification(Auth::user()->name,Auth::user()->avatar,$slug,$title,$post_author));
                    
                }
            }
            $friends1 = Friends::get()->where('userID1','=',Auth::user()->id);
            foreach ($friends1 as $friend2) {
                if($friend2->confirmed == 1){
                    $users = User::find($friend2->friendsID);
                    Notification::send($users, new commentNotification(Auth::user()->name,Auth::user()->avatar,$slug,$title,$post_author));
                }
            }
            return view('dashboard1', [
                'post' => Post::orderBy('created_at', 'desc')->get()->where('status','=','PUBLISHED'),
                'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                'show_comment' => $show_comment,
                'replys' => Reply::orderBy('created_at', 'desc')->get(),
                'likes' => like::orderBy('created_at', 'desc')->get(),
                'datas' => $datas,
                'auth_user' => $auth_user
            ]);
        }elseif ($request->has('save_reply')) {
            $show_comment = $request->get_comment;
            $did_reply = $request->save_reply;
            $auth_user = Auth::user();

            // vaildate content field
            if($request->title == ""){
                $fail = "Please fill out the title field";
                $reply_field_amount = $request->reply_field_amount;
                return view('dashboard1', [
                    'post' => Post::orderBy('created_at', 'desc')->get(),
                    'post' => Post::orderBy('created_at', 'desc')->get()->where('status','=','PUBLISHED'),
                    'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                    'show_comment' => $show_comment,
                    'did_reply' => $did_reply,
                    'replys' => Reply::orderBy('created_at', 'desc')->get(),
                    'likes' => like::orderBy('created_at', 'desc')->get(),
                    'fail'=> $fail,
                    'reply_field_amount'=> $reply_field_amount,
                    'auth_user' => $auth_user
                ]);
            }else{
                if($request->content == ""){
                    $fail = "Please fill out the content field";
                    $reply_field_amount = $request->reply_field_amount;
                    $auth_user = Auth::user();
                    return view('dashboard1', [
                        'post' => Post::orderBy('created_at', 'desc')->get()->where('status','=','PUBLISHED'),
                        'user' => User::get(), 'comments' => Comment::orderBy('created_at', 'desc')->get(),
                        'show_comment' => $show_comment,
                        'did_reply' => $did_reply,
                        'replys' => Reply::orderBy('created_at', 'desc')->get(),
                        'likes' => like::orderBy('created_at', 'desc')->get(),
                        'fail'=> $fail,
                        'reply_field_amount'=> $reply_field_amount,
                        'auth_user' => $auth_user
                        // 'datas'=> $datas
                    ]);
                }else{
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
                        'post' => Post::orderBy('created_at', 'desc')->get()->where('status','=','PUBLISHED'),
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

    public function show_post($id,$is){
        return view('show_post');
    }
    public function show_comment($id,$is){
        return view('show_comment');
    }

    public function create_post(Request $request){
        
        $auth_user = Auth::user();
        $post_id = Auth::user()->id;
        $post = Post::orderBy('created_at', 'desc')->get()->where('author_id','=',$post_id);
        if($request->has('publish')){
            // dd($request);
            if ($request->title == "" && $request->content == "") {
                return back()->with([
                    'message'    => __('Both title field and content field is required'),
                    'alert-type' => 'error',
                ]);
            }elseif ($request->content == "") {
                return back()->with([
                    'message'    => __('The content field is required'),
                    'alert-type' => 'error',
                ]);
            }elseif ($request->title == "") {
                return back()->with([
                    'message'    => __('The title field is required'),
                    'alert-type' => 'error',
                ]);
            }elseif ($request->title != "" && $request->content != "") {
                if($image = $request->file('Image')->store('posts','public')){
                    $save = new Post;
                    $save->author_id = Auth::user()->id;
                    $save->category_id = $request->category_id;
                    $save->title = $request->title;
                    $save->seo_title = $request->seo_title;
                    $save->excerpt = $request->excerpt;
                    $save->body = $request->content;
                    $save->image = $image;
                    $slug = "";
                    if($request->slug != ""){
                        $save->slug = $request->slug;
                        $slug = $request->slug;
                    }else{
                        $save->slug = $slug = Str::of($request->title)->slug('-');
                        
                    }
                    $save->meta_description = $request->meta_description;
                    $save->meta_keywords = $request->meta_keyword;
                    $save->status = $request->status;
                    $save->featured = 0;
                    $save->save();

                    $friends = Friends::get()->where('friendsID','=',Auth::user()->id);
                    foreach ($friends as $friend) {
                        if($friend->confirmed == 1){
                            $users = User::find($friend->userID1);
                            Notification::send($users, new postNotification(Auth::user()->name,Auth::user()->avatar,$slug,$request->title));
                            
                        }
                    }
                    $friends1 = Friends::get()->where('userID1','=',Auth::user()->id);
                    foreach ($friends1 as $friend2) {
                        if($friend2->confirmed == 1){
                            $users = User::find($friend2->friendsID);
                            Notification::send($users, new postNotification(Auth::user()->name,Auth::user()->avatar,$slug,$request->title));
                        }
                    }
                }

                return back()->with([
                    'message'    => __('Post Published'),
                    'alert-type' => 'success',[
                        'auth_user' => $auth_user,
                        'post' => $post
                        ]
                ]);
            }
            $auth_user = Auth::user();
            return view('edit_post',['auth_user' => $auth_user]); 
        }
        return view('edit_post',[
            'auth_user' => $auth_user,
            'post' => $post
        ]);
    }

    public function like($id){
        $save = new like;
        $save->user_id = Auth::user()->id;
        $save->post_id = $id;
        $save->save();
        $get_post = Post::get()->where('id','=',$id);
        $post_owner = "";
        $post_title = "";
        foreach ($get_post as $post) {
            $post_owner = $post->author_id;
            $post_title = $post->title;
        }
        $users = User::find($post_owner);
        Notification::send($users, new likeNotification(Auth::user()->name,$post_title,Auth::user()->avatar,Auth::user()->id));
    }

    public function unlike($id){
        $delete = like::where('post_id','=',$id);
        $delete->delete();
        $get_post = Post::get()->where('id','=',$id);
        $post_owner = "";
        $post_title = "";
        foreach ($get_post as $post) {
            $post_owner = $post->author_id;
            $post_title = $post->title;
        }
        $users = User::find($post_owner);
        Notification::send($users, new unlikeNotification(Auth::user()->name,$post_title,Auth::user()->avatar,Auth::user()->id));
    }

    public function follow($id){
        $save = new follow;
        $save->user_id = Auth::user()->id;
        $save->follower_user_id = $id;
        $save->save();
        $users = User::find($id);
        Notification::send($users, new followNotification(Auth::user()->name,Auth::user()->avatar,Auth::user()->id));
        
    }

    public function unfollow($id){
        $delete = follow::where('follower_user_id','=',$id);
        $delete->delete();
        $users = User::find($id);
        Notification::send($users, new unfollowNotification(Auth::user()->name,Auth::user()->avatar,Auth::user()->id));
    }

    public function friend($id){
        $save = new Friends;
        $save->friendsID = $id;
        $save->userID1 = Auth::user()->id;
        $save->confirmed = 2;
        $save->save();
        $users = User::find($id);
        Notification::send($users, new friendNotification(Auth::user()->name,Auth::user()->avatar,Auth::user()->id));
    }

    public function confirmfriend($id,$notify_id)
    {
        $post = Post::orderBy('created_at', 'desc')->get()->where('author_id','=',$id);
            $post_count = 0;
            foreach($post as $posts){
                ++$post_count;
            }
            $follow = follow::orderBy('created_at', 'desc')->get()->where('follower_user_id','=',$id);
            $followers_count = 0;
            foreach($follow as $followers){
                ++$followers_count;
            }
            $following = follow::orderBy('created_at', 'desc')->get()->where('user_id','=',$id);
            $following_count = 0;
            foreach($following as $follows){
                ++$following_count;
            }
            $comment = Comment::orderBy('created_at', 'desc')->get();
            $auth_user = User::get()->where('id','=',$id);
            $friends = Friends::get()->where('userID1','=',$id);
            $friends_count = 0;
            $confirmed = 0;
            if (count($friends) == 0) {
                $friends = Friends::get()->where('friendsID','=',$id);
                foreach ($friends as $friend) {
                    if($friend->confirmed == 1){
                        ++$friends_count;
                        if($friend->userID1 == Auth::user()->id){
                            $confirmed = 1;
                        }
                    }elseif($friend->confirmed == 2){
                        if($friend->userID1 == Auth::user()->id){
                            $confirmed = 2;
                        }
                    }
                }
            }else {
                foreach ($friends as $friend) {
                    if($friend->confirmed == 1){
                        ++$friends_count;
                        if($friend->friendsID == Auth::user()->id){
                            $confirmed = 1;
                        }
                    }elseif($friend->confirmed == 2){
                        if($friend->friendsID == Auth::user()->id){
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
                // dd($value->id);
                // dd($notify_id);
            }
            return view('confirmfriend',[
                'auth_user' => $auth_user,
                'post' => $post,
                'post_count'=>$post_count,
                'comment'=>$comment,
                'likes'=>like::get(),
                'followers_count'=>$followers_count,
                'following_count'=>$following_count,
                'following'=>$follow,
                'friends_count'=>$friends_count,
                'confirmed'=>$confirmed

            ]);  
    }

    public function toconfirmfriend($id)
    {
        
        $friends = Friends::all();
        foreach ($friends as $friend) {
            if($friend->friendsID == Auth::user()->id && $friend->userID1 == $id){
                $friend->confirmed = 1;
                $friend->save();
                $users = User::find($id);
                $name = $users->name;
                Notification::send($users, new friendconfirmedNotification(Auth::user()->name,Auth::user()->avatar));
            }
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('voyager.login');
    }
}
