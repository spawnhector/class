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
                                                <span>Like: {{$likes_count}}</span>
                                                .
                                                <span>Comment: <span id='comments_count'>{{$comment_count}}</span></span>
                                                .
                                                <span>View: {{$views_count}}</span>
                                                <span style="font-weight: 500;float: right;cursor: pointer;" onclick="show_to_comment()">LEAVE A COMMENT</span>
                                            </div>
                                            <div class="to_comment">
                                                <div class="to_comment_body flex-1 rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
                                                    {{-- <h1>to comment</h1> --}}
                                                    <div class="to_comment_show_txt" id="to_comment_show_txt"></div>
                                                    <div class="to_comment_section">
                                                        <input type="text" class="to_comment_txt" id="comment_txt_box" placeholder="Type here">
                                                        <button value={{$post->id}} class="send_comment" id="send_comment">
                                                            <svg id="Capa_1" enable-background="new 0 0 512 512" height="30" viewBox="0 0 512 512" width="30" xmlns="http://www.w3.org/2000/svg" style="position: relative;bottom: 6px;right: 6px;"><g><path d="m512 256c0 140.67-112.436 254.425-253.097 255.984-5.353.059-10.669-.046-15.943-.31-5.045-.253-9.22-3.934-10.126-8.903-20.078-110.04-110.504-195.524-222.97-208.143-4.184-.469-7.538-3.722-8.038-7.902-1.219-10.188-1.84-20.558-1.826-31.077.191-142.281 117.504-257.676 259.771-255.622 139.646 2.016 252.229 115.847 252.229 255.973z" fill="#1e3fac"></path><path d="m1.766 286.232 380.908-210.988c11.895-8.275 62.386 42.098 54.178 53.898l-193.245 382.563c-125.52-5.983-227.357-102.364-241.841-225.473z" fill="#1e3fac"></path><path d="m462.409 75.155-219.562 315.62-103.238-18.385 317.492-318.905 3.709 3.709c4.81 4.811 5.484 12.376 1.599 17.961z" fill="#55a4f9"></path><path d="m139.61 372.39-18.385-103.238 315.542-219.507c5.63-3.916 13.256-3.237 18.106 1.612l3.642 3.642zm103.237 18.385 20.198-20.198-49.189-37.077z" fill="#1380e2"></path><path d="m184.157 303.801-62.932-34.648 18.385-18.385z" fill="#4172cc"></path><path d="m454.998 51.383-270.822 252.437-115.303-115.303c-5.219-5.219-3.179-14.1 3.794-16.519l361.549-125.389c7.27-2.521 15.341-.667 20.782 4.774zm5.619 5.619-246.78 276.478 109.646 109.646c5.219 5.219 14.1 3.179 16.519-3.794l125.389-361.548c2.521-7.27.667-15.341-4.774-20.782z" fill="#a7d0fc"></path><path d="m465.391 77.785-70.574 203.494c-12.609 36.357-58.911 46.992-86.121 19.782-19.548-19.548-20.439-50.957-2.03-71.581l153.951-172.478c5.441 5.441 7.295 13.512 4.774 20.783zm-31.176-31.176-203.494 70.574c-36.357 12.609-46.992 58.91-19.782 86.121l3.521 3.521c19.856 19.856 51.871 20.418 72.412 1.271l168.126-156.713c-5.441-5.441-13.512-7.295-20.783-4.774z" fill="#c8e2fd"></path><path d="m199.979 352.149-69.297 69.296c-.976.977-2.256 1.465-3.535 1.465s-2.56-.488-3.535-1.465c-1.953-1.952-1.953-5.118 0-7.07l69.297-69.296c1.951-1.953 5.119-1.953 7.07 0 1.953 1.952 1.953 5.118 0 7.07zm6.54 23.512c-1.951-1.953-5.119-1.953-7.07 0l-35.354 35.355c-1.953 1.952-1.953 5.118 0 7.07.976.977 2.256 1.465 3.535 1.465s2.56-.488 3.535-1.465l35.354-35.355c1.953-1.952 1.953-5.118 0-7.07zm-56.569 49.497-14.142 14.143c-1.952 1.952-1.952 5.118.001 7.071.977.976 2.256 1.464 3.535 1.464s2.56-.488 3.536-1.465l14.142-14.143c1.952-1.952 1.952-5.118-.001-7.071-1.953-1.951-5.118-1.952-7.071.001zm44.815-10.342-14.143 14.142c-1.953 1.953-1.953 5.119-.001 7.071.977.977 2.257 1.465 3.536 1.465s2.56-.488 3.535-1.464l14.143-14.142c1.953-1.953 1.953-5.119.001-7.071-1.953-1.953-5.12-1.952-7.071-.001z" fill="#fff"></path></g></svg>
                                                        </button>
                                                        <div class="edit_coment" id="edit_coment" style="width: 0px">
                                                            edit
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>    
                                    </div>
                                    <div class="commentss">
                                        <div class="commentss-heading">
                                            
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
                                                <span>Follower: {{$followers_count}}</span>
                                                .
                                                <span>Following: {{$following_count}}</span>
                                                .
                                                <span>Friend: {{$friends_count}}</span>
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
                                        <div class="tag-container" id="tags">    
                                            {!! $tags !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach?>
                        
                    </div>
               

                    {!!$hidden_pop!!}
                    {!!$post_id1!!}
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
            this.vm = new Vue({
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
                    // shuffle(arrays) {
                    //     const shuffled = []
                    //     while (this.list.length > 0) {
                    //         const index = this.random(this.list.length - 1)
                    //         shuffled.push(this.list[index])
                    //         this.list.splice(index, 1)
                    //     }
                    //     // console.log(shuffled)
                    //     // alert('sd')
                    //     this.list = shuffled
                    // }
                }
                })
                var count_inc = 0
                this.vm.$children.forEach(element => {
                    element.children.forEach(element => {
                    element.elm.innerHTML =  get_pop[count_inc]
                    ++count_inc
                    // console.log(get_pop)
                });
            });
            
            // const shuffled = []
            // while (this.vm.list.length > 0) {
            //     const index = this.vm.random(this.vm.list.length - 1)
            //     shuffled.push(this.vm.list[index])
            //     this.vm.list.splice(index, 1)
            // }
            // // alert('shw')
            // this.vm.list = shuffled
            return this.vm
        } 

        $(document).ready(function() {
            function stickyInit($){
                function get_popular_onint() {
                    const xhttp = new XMLHttpRequest();
                    const post_id = document.getElementById('post-id').value
                    let url = new URL('http://127.0.0.1:8000/dashboard/show-popular/'+post_id+'');
                    xhttp.onload = function() {
                        var get_pop1 = document.getElementById("show_pop").value.split('|||')
                        var count = get_pop1.length
                        get_popular(count) 
                        // console.log()
                    }
                    xhttp.open('GET', url);
                    xhttp.send()
                }
                window.setInterval(get_popular_onint,1000);
            }
            jQuery(document).ready(function ($) {
                stickyInit($);
            });
            $('[data-toggle="popover"]').popover({
                html: true,
                trigger: 'click',
                placement: 'bottom',
                content: function () { 
                    return '<p class="tag-content">'+$(this).data('tag')+'</p><span class="tag-search">'+$(this).data('view')+'</span>'; 
                }
            });
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

        var commentt = ".to_comment"
        $(commentt).slideUp()

        var text = ''
        $(document).on('keyup','#comment_txt_box',function () {
            text = text.concat($(this).val())
            var coment = document.getElementById('to_comment_show_txt').innerText = text
            document.getElementById('comment_txt_box').value = ''
        })
        $(document).on('keydown','#comment_txt_box',function () {
            var key = event. keyCode || event. charCode;
            if( key == 8 ){
                var get_coment = document.getElementById('to_comment_show_txt').innerText
                var array_txt = get_coment.split("")
                var new_comment = ""
                for (let index = 0; index < array_txt.length - 1; index++) {
                    new_comment = new_comment.concat(array_txt[index])
                }
                text = document.getElementById('to_comment_show_txt').innerText = new_comment
                // console.log(array_txt)
            }
        })
        $(document).on('click','.send_comment',function () {
            function store_comment() {
                var user_post_comment = document.getElementById('to_comment_show_txt').innerText
                var user_post_comment_id = document.getElementById('send_comment').value
                const xhttp = new XMLHttpRequest();
                let url = new URL('http://127.0.0.1:8000/dashboard/get_post_comment/'+user_post_comment_id+'/'+user_post_comment+'');
                xhttp.onload = function() {
                    // alert(this.responseText)
                    document.getElementById('commentss-row').innerHTML = this.responseText
                    var comment_amunt  = document.getElementById('comments_count').innerText
                    var new_comment_amunt = parseInt(comment_amunt)+1
                    if (new_comment_amunt == 5) {
                        $('.commentss-body').addClass('comment-body-scroll')
                    }
                    document.getElementById('comments_count').innerText = new_comment_amunt
                    document.getElementById('to_comment_show_txt').innerText = ""
                    text = ""
                    var check = document.getElementById("field1").value + 1;
                    for (let i = 1; i <= check; i++) {
                        var value1 = ".reply_popup";
                        var value2 = i;
                        var value3 = value1.concat(value2);
                        $(value3).slideUp();
                    }
                }
                xhttp.open('GET', url);
                xhttp.send()
            }
            var coment = document.getElementById('to_comment_show_txt').innerText 
            // alert(coment)
            if (coment != "") {
                if (coment != ".") {
                    store_comment()
                }
            }
            
        })

        if (document.getElementById("field1") != null) {
            var check = document.getElementById("field1").value;
            for (let i = 1; i <= check; i++) {
                var value1 = ".reply_popup";
                var value2 = i;
                var value3 = value1.concat(value2);
                $(value3).slideUp();
            }
        }
        

        function show_to_comment() {
            $(commentt).slideDown()
        }

        function getSelectedText() {
            var text = "";
            if (typeof window.getSelection != "undefined") {
                text = window.getSelection().toString();
            } 
            else if (typeof document.selection != "undefined" && document.selection.type == "Text") {
                text = document.selection.createRange().text;
            }
            return text;
        }

        function doSomethingWithSelectedText() {
            var selectedText = getSelectedText();
            if (selectedText) {
                // alert("Got selected text " + selectedText);
                document.getElementById('edit_coment').style.width = '442px'
                document.getElementById('edit_coment').style.opacity = '1'
            }else{
                document.getElementById('edit_coment').style.width = '0'
                document.getElementById('edit_coment').style.opacity = '0'
            }
        }

        document.getElementById('to_comment_show_txt').onmouseup = doSomethingWithSelectedText;
        document.getElementById('to_comment_show_txt').onkeyup = doSomethingWithSelectedText;

        
    </script>
    @endsection
    </div>
</x-app-layout>
