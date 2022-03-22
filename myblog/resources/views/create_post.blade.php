<x-app-layout>
    {{-- <x-slot name="header"> --}}
    @section('content')
        @extends('layouts.dashboard')
        <div x-data="setup()" :class="{ 'dark': isDark }">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white"
                style="margin-top: 42px;width:100%">
                @extends('layouts.header')
                <form action={{ route('dashboard.create.new') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="h-full mt-14 mb-10" style="margin-left:20px;">
                        <div style="display:flex">
                            <div>
                                <div class="py-12">
                                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                                        <div class="">
                                            <div class="post-form">
                                                <div class="post-form-backdrop closed"></div>
                                                {{-- <div class="post-section editor-title">
                                                    <h3 class="page-title">New Post</h3>
                                                </div> --}}
                                                <div class="post-section post-tagged-people">
                                                    <div class="form-group">
                                                        <label for="people-entry">Select People</label>
                                                        <div id="people-entry"></div>
                                                    </div>
                                                </div>
                                                <div class="post-section">
                                                    <label for="post-title">Post Content</label>
                                                    <div class="post-title">
                                                        <input type="text" name="title" id="post-title"
                                                            class="post-input large" placeholder="Title..." />
                                                    </div>
                                                    <div class="post-content">
                                                        <textarea name="content" class="post-input"
                                                            placeholder="Content..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="post-section post-media">
                                                    <div class="post-media-icon btn btn-default">
                                                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"
                                                            onClick="triggerClick()" id="profileDisplay"><i
                                                            class="glyphicon glyphicon-plus" style="height: 20px"></i><br>
                                                        Add Media
                                                        <input type="file" name="Image" value=""
                                                            onChange="displayImage(this)" id="profileImage"
                                                            class="form-control" style="display: none">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="post-section post-buttons">
                                                <div class="dropup pull-left">
                                                    <button type="button" class="btn btn-default dropdown-toggle"
                                                        data-toggle="dropdown" id="add-more-post-items">Add More <i
                                                            class="caret"></i></button>
                                                    <ul class="dropdown-menu" arial-labelledby="#add-more-post-items">
                                                        <li><a href="#" class="open-overlay" data-target=".activities">Add
                                                                Activities</a></li>
                                                        <li><a href="#" class="open-overlay" data-target=".targets">Add
                                                                Targets</a></li>
                                                    </ul>
                                                </div>
                                                <button type="submit" name="draft" class="btn btn-primary">Save
                                                    Draft</button>
                                                <button type="submit" name="publish"
                                                    class="btn btn-success">Publish</button>
                                            </div>
                                            <div class="post-form-overlay closed activities">
                                                <h4>Add Activity <button type="button" class="close">&times;</button></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit deserunt
                                                    necessitatibus eveniet tenetur repellat, eligendi doloremque maxime
                                                    corporis modi iusto consectetur accusamus commodi dignissimos
                                                    voluptates, dolor ipsam quasi soluta deleniti!</p>
                                            </div>
                                            <div class="post-form-overlay closed targets">
                                                <h4>Add Target <button type="button" class="close">&times;</button></h4>
                                                <div class="form-group">
                                                    <label for="target-text">Set Target:</label>
                                                    <input autofocus id="target-text" type="text" class="form-control" />
                                                </div>
                                                <button class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-12">
                                <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded"
                                    style="
                                            width: 450px;
                                        ">
                                    <div class="rounded-t mb-0 px-0 border-0">
                                        <div class="flex flex-wrap items-center px-4 py-2">
                                            <div class="relative w-full max-w-full flex-grow flex-1">
                                                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Recent
                                                    Post
                                                </h3>
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
                                                            Title</th>
                                                        <th
                                                            class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                            Status</th>
                                                        <th
                                                            class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $count = 0;?>
                                                    @foreach ($post as $posts)
                                                    <?php 
                                                        if($count == 3){
                                                            break;
                                                        }
                                                        ++$count;
                                                    ?>
                                                        <tr class="text-gray-700 dark:text-gray-100">
                                                            <th
                                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                                                {{ $posts->title }}</th>
                                                            <td
                                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                                {{ $posts->status }}</td>
                                                            <td
                                                                class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                                                <a href="http://127.0.0.1:8000/dashboard/show-posts/{{ $posts->id }}/{{ $posts->author_id }}"
                                                                    class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                                                    type="button">View</a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-bordered panel-info" style="margin-top: 20px">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="icon wb-search"></i> SEO Content</h3>
                                        <div class="panel-actions">
                                            <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                                aria-hidden="true"></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control" name="meta_description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="meta_keywords">Meta Keywords</label>
                                            <textarea class="form-control" name="meta_keywords"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="seo_title">SEO Title</label>
                                            <input type="text" class="form-control" name="seo_title" placeholder="SEO Title"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-bordered panel-info">
                                    <!-- ### DETAILS ### -->
                                    <div class="panel panel panel-bordered panel-warning">
                                        <div class="panel-heading">
                                            <h3 class="panel-title"><i class="icon wb-clipboard"></i> Post Details</h3>
                                            <div class="panel-actions">
                                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse"
                                                    aria-hidden="true"></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label for="slug">URL slug</label>
                                                <input type="text" class="form-control" id="slug" name="slug"
                                                    placeholder="slug" data-slug-origin=title data-slug-forceupdate=true>
                                            </div>
                                            <div class="form-group">
                                                <label for="status">Post Status</label>
                                                <select class="form-control" name="status">
                                                    <option value="PUBLISHED" selected="selected">published</option>
                                                    <option value="DRAFT">draft</option>
                                                    <option value="PENDING">pending</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="category_id">Post Category</label>
                                                <select class="form-control" name="category_id">
                                                    <option value="1">Category 1</option>
                                                    <option value="2" selected="selected">Category 2</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="featured">Featured</label>
                                                <input type="checkbox" name="featured">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
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
            }1
        </script>

    @endsection
    </div>
</x-app-layout>
