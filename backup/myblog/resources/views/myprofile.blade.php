<x-app-layout>
    {{-- <x-slot name="header"> --}}
    @section('content')
        @extends('layouts.dashboard')
        <div x-data="setup()" :class="{ 'dark': isDark }">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white"
                style="margin-top: -654px;width:100%">
                @extends('layouts.header')
            </div>



            <form action={{ route('dashboard.create.new') }} method="post" enctype="multipart/form-data">
                @csrf
                <div class="container">

                    <div class="profile1">

                        <div class="profile-image">

                            <img src="http://localhost/xampp/myblog/storage/app/public/{{ $auth_user->avatar }}" alt="">

                        </div>

                        <div class="profile-user-settings">

                            <h1 class="profile-user-name">{{ '@' . $auth_user->name }}</h1>

                            <button class="btn profile-edit-btn">Edit Profile</button>

                            <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog"
                                    aria-hidden="true"></i></button>

                        </div>

                        <div class="profile-stats">

                            <ul>
                                <li><span class="profile-stat-count">{{ $post_count }}</span> posts</li>
                                <li><span class="profile-stat-count">{{ $followers_count }}</span> followers</li>
                                <li><span class="profile-stat-count">{{ $following_count }}</span> following</li>
                                <li><span class="profile-stat-count">{{ $friends_count }}</span> friends</li>
                                <li><span class="profile-stat-count">{{ '0' }}</span> tags</li>

                            </ul>

                        </div>

                        <div class="profile-bio">

                            <p><span class="profile-real-name">Jane Doe</span> Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit ?????????????????</p>

                        </div>

                    </div>
                    <!-- End of profile section -->

                </div>

                <main>

                    <div class="container">

                        <div class="gallery"  style="margin-top: 360px;margin-left: 64px;">
                            @foreach ($post as $posts)
                                <?php
                                $comment_count = 0;
                                $likes_count = 0;
                                ?>
                                @foreach ($comment as $comments)
                                    <?php if ($posts->id == $comments->post_id) {
                                    ++$comment_count;
                                    } ?>
                                @endforeach
                                @foreach ($likes as $like)
                                    <?php if ($like->post_id == $posts->id) {
                                    ++$likes_count;
                                    } ?>
                                @endforeach
                                <div class="gallery-item" tabindex="0">

                                    <img src="http://localhost/xampp/myblog/storage/app/public/{{ $posts->image }}"
                                        class="gallery-image" alt="">

                                    <div class="gallery-item-info">

                                        <ul>
                                            <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span>
                                                @if ($likes_count > 0)
                                                    <i class="fas fa-heart" aria-hidden="true" style="color: red;"></i>
                                                @else
                                                    <i class="fas fa-heart" aria-hidden="true"></i>
                                                @endif
                                                {{ $likes_count }}
                                            </li>
                                            <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span>
                                                @if ($comment_count > 0)
                                                    <i class="fas fa-comment" aria-hidden="true"
                                                        style="color: #1e40af;"></i>
                                                @else
                                                    <i class="fas fa-comment" aria-hidden="true"></i>
                                                @endif
                                                {{ $comment_count }}
                                            </li>
                                        </ul>

                                    </div>

                                </div>
                            @endforeach

                        </div>
                        <!-- End of gallery -->

                        {{-- <div class="loader"></div> --}}

                    </div>
                    <!-- End of container -->

                </main>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>
        <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        
        <script>
            CKEDITOR.replace('content');
        </script>
        <script>
            $('#people-entry').magicSuggest({
                data: [{
                        name: 'Jimmy Hoffa'
                    },
                    {
                        name: 'Elvis Presley'
                    },
                    {
                        name: 'DB Cooper'
                    },
                    {
                        name: 'Marylin Monroe'
                    }
                ]
            })

            $('.post-form').on('click', '.open-overlay', function(e) {
                e.preventDefault()
                $($(this).data('target'))
                    .removeClass('closed')
                    .addClass('open')
                $('.post-form-backdrop')
                    .removeClass('closed')
            })
            $('.post-form').on('click', '.post-form-overlay .close', function() {
                $(this).parents('.post-form-overlay')
                    .addClass('closed')
                    .removeClass('open')
                $('.post-form-backdrop')
                    .addClass('closed')
            })
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
        </script>
        <script>
            function triggerClick(e) {
                document.getElementById('profileImage').click();
            }

            function displayImage(e) {
                if (e.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        document.getElementById('profileDisplay').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(e.files[0]);
                }
            }
        </script>

    @endsection
    </div>
</x-app-layout>
