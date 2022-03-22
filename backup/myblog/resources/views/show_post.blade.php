<x-app-layout>
    {{-- <x-slot name="header"> --}}
    @section('content')
        @extends('layouts.dashboard')
        <div x-data="setup()" :class="{ 'dark': isDark }">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white"
                style="margin-top: 42px;width:100%">
                @extends('layouts.header')
                    <div class="h-full mt-14 mb-10" style="margin-left:20px;">
                        <?php foreach($this_post as $post):?>
                            <div class="container4" style="display: flex">

                                <div class="leftt">
                                    <!--   Artice 1 at the top left corner  -->
                    
                                    <div class="article-1">
                                        <img class="img-1" src="http://localhost/xampp/myblog/storage/app/public/{{ $post->image }}" alt="forest image">
                                        <div class="article-content1">
                                            <h2 class="article-heading">{{ $post->title }}</h2>
                                            <p class="article-txt">
                                                {!! $post->body !!}
                                            </p>
                                            <br>
                                            <div class="stats1">
                                                <span>Like's: {{$likes_count}}</span>
                                                .
                                                <span>Comment's: {{$comment_count}}</span>
                                                .
                                                <span>View's: {{$views_count}}</span>
                                            </div>
                                            <br>
                                        </div>    
                                    </div>
                                    <div class="commentss">
                                        <div class="commentss-heading">
                                            <h1>Comment</h1>
                                        </div>
                                        <?php 
                                        $scroll = "";
                                        if ($count1 > 4) {
                                            $scroll = "comment-body-scroll";
                                        }
                                        ?>
                                        <div class="commentss-body {{$scroll}}">
                                            <div class="commentss-row" id="commentss-row">
                                                {!! $show_comment !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="rightt">
                                    <!--   Artice 2 at the top right corner  -->
                                    <div class="article-2">
                                        <img class="img-2" src="http://localhost/xampp/myblog/storage/app/public/{{ $author->avatar }}" alt="Mountains with clear blue sky">
                                        <div class="article-content">
                                            <h2 class="article-heading">Author: {{ "@".$author->name }}</h2>
                                            <p>Bio:</p>
                                            <br>
                                            <div class="stats">
                                                <span>Post: {{$post_count}}</span>
                                                .
                                                <span>Follower's: {{$followers_count}}</span>
                                                .
                                                <span>Following: {{$following_count}}</span>
                                                .
                                                <span>Friend's: {{$friends_count}}</span>
                                            </div>
                                        </div>                   
                                    </div>
                        
                                    <!--   Artice 3 at the popular corner  -->
                        
                                    <div class="article-3">
                                        <p class="popular">Trending Post For {{ "@".$author->name }}</p>
                                        <div id="app">
                                            <transition-group tag="ul" name="list">
                                              <li v-for="item in list" :key="item.id" id='popular'>
                                              </li>
                                            </transition-group>
                                        </div>
                                        {{-- <a class="img-link" href="#"><img class="s-img" src="https://i.ibb.co/CwnPnD5/2.jpg" alt=""><span class="popular-link">Lorem</span></a>
                                        <a class="img-link" href="#"><img class="s-img" src="https://i.ibb.co/3yLPVzP/3.jpg" alt=""><span class="popular-link">Ipsum</span></a>
                                        <a class="img-link" href="#"><img class="s-img" src="https://i.ibb.co/PjNYQd9/4.jpg" alt=""><span class="popular-link">Dolor</span></a>
                                        <a class="img-link" href="#"><img class="s-img" src="https://i.ibb.co/6Zn6TTL/5.jpg" alt=""><span class="popular-link">Tenetur</span></a> --}}
                                    </div>
                        
                                    <!--   Atricle 5 at the tags corner  -->       
                        
                                    <div class="article-5">
                                        <p class="popular">Tags</p>
                                        <div class="tag-container">    
                                            {!! $tags !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach?>
                        
                    </div>
               

                    {!!$hidden_pop!!}
            </div>
        </div>
        </div>
        
        <script> 
           document.getElementById("show_pop").click()
            function get_popular(count) {
                var get_pop = document.getElementById("show_pop").value.split('|||')
                // console.log(get_pop[0])
                var lists = []
                var post_count = count
                for (let count_list = 0; count_list < post_count; count_list++) {
                    lists.push({ id: count_list })
                    
                }
                const vm = new Vue({
                el: '#app',
                data: {
                    maxId: post_count,
                    list: lists
                    
                },
                methods: {
                    random(max) {
                    return Math.floor(Math.random() * (max + 1))
                    },
                    add() {
                    const id = ++this.maxId
                    const index = this.list.length + 1
                    this.list.splice(index, 0, { id })
                    },
                    remove() {
                    const index = this.list.length - 1
                    this.list.splice(index, 1)
                    },
                    shuffle() {
                    const shuffled = []
                    while (this.list.length > 0) {
                        const index = this.random(this.list.length - 1)
                        shuffled.push(this.list[index])
                        this.list.splice(index, 1)
                    }
                    this.list = shuffled
                    }
                }
                })
                var count_inc = 0
                vm.$children.forEach(element => {
                    element.children.forEach(element => {
                    element.elm.innerHTML =  get_pop[count_inc]
                    ++count_inc
                    console.log(get_pop)
                });
                });
                // console.log(vm)
            } 
        $(document).ready(function() {
            
            
            function stickyInit($){
                function get_popular_onint() {
                    const xhttp = new XMLHttpRequest();
                    const post_id = document.getElementById('post-id').value
                    let url = new URL('http://127.0.0.1:8000/dashboard/show-popular/'+post_id+'');
                    xhttp.onload = function() {
                        // console.log(this.responseText);
                    }
                    xhttp.open('GET', url);
                    xhttp.send()
                }
                window.setInterval(get_popular_onint,1000);
            }
            jQuery(document).ready(function ($) {
                stickyInit($);
            });


            var check = document.getElementById("field1").value;
            for (let i = 1; i <= check; i++) {
                var value1 = ".reply_popup";
                var value2 = i;
                var value3 = value1.concat(value2);
                $(value3).slideUp();
            }

            
        });

        
        function post_commentg(clr,mbid){
            const xhttp = new XMLHttpRequest();
            const post_comments = document.getElementById('show-post-comment'+mbid+'').value
            const post_id = document.getElementById('post-id').value
            let url = new URL('http://127.0.0.1:8000/dashboard/show-posts-comment/'+post_id+'/'+clr+'/'+post_comments+'');
            xhttp.onload = function() {
                document.getElementById('commentss-row').innerHTML = this.responseText
                // console.log(this.responseText);
                var check = document.getElementById("field1").value;
                for (let i = 1; i <= check; i++) {
                    var value1 = ".reply_popup";
                    var value2 = i;
                    var value3 = value1.concat(value2);
                    $(value3).slideUp();
                }
                
            }
            xhttp.open('GET', url);
            xhttp.send()
            document.getElementById('show-post-comment'+mbid+'').value = ''
        }
        
        function show_reply(elmnt, clr) {
            var value1 = ".reply_popup"
            var value2 = clr
            var value3 = value1.concat(value2)
            var check_show_reply1 = "btn"
            var check_show_reply2 = clr
            var check_show_reply3 = check_show_reply1.concat(check_show_reply2)
            var check_show_reply4 = "btnh"
            var check_show_reply5 = clr
            var check_show_reply6 = check_show_reply4.concat(check_show_reply5)
            if (document.getElementById(check_show_reply3).style.display == 'block') {
                $(value3).slideDown();
                document.getElementById(check_show_reply3).style.display = 'none'
                document.getElementById(check_show_reply6).style.display = 'block'
            } else {
                $(value3).slideUp();
                document.getElementById(check_show_reply3).style.display = 'block'
                document.getElementById(check_show_reply6).style.display = 'none'
            }
        }

        function close_reply(elmnt, clr) {
            var value1 = ".reply_popup";
            var value2 = clr;
            var value3 = value1.concat(value2);
        }

    </script>
    @endsection
    </div>
</x-app-layout>
