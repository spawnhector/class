<section class="breadcrumb">
    @include('layout.admin.navigate')
</section>
<div>
    <div class="lg:w-full lg:px-4">
        <!-- Summaries -->
        <div>
            @include('layout.admin.card')
        </div>
    </div>
    <div class="lg:-mx-4">
        
        <div class="flex">
            <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">
                <div class="card mt-5 p-5">
                    <h3>Recent Posts</h3>
                    <table class="table table_list mt-3 w-full">
                        <thead>
                            <tr>
                                <th class="ltr:text-left rtl:text-right uppercase">Title</th>
                                <th class="w-px uppercase">Views</th>
                                <th class="w-px uppercase">Pulbished</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                                <td class="text-center">100</td>
                                <td class="text-center">
                                    <div class="badge badge_outlined badge_secondary uppercase">Draft</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Donec tempor lacus quis ex ullamcorper, ut cursus dui pellentesque.</td>
                                <td class="text-center">150</td>
                                <td class="text-center">
                                    <div class="badge badge_outlined badge_success uppercase">Published</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Quisque molestie velit sed elit finibus, nec gravida nunc finibus.</td>
                                <td class="text-center">300</td>
                                <td class="text-center">
                                    <div class="badge badge_outlined badge_warning uppercase">Pending</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Morbi nec nisl ac libero facilisis finibus vitae fringilla dolor.</td>
                                <td class="text-center">120</td>
                                <td class="text-center">
                                    <div class="badge badge_outlined badge_success uppercase">Published</div>
                                </td>
                            </tr>
                            <tr>
                                <td>Donec suscipit libero in nibh fringilla hendrerit.</td>
                                <td class="text-center">180</td>
                                <td class="text-center">
                                    <div class="badge badge_outlined badge_secondary uppercase">Draft</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn_primary mt-5">Show all Posts</a>
                </div>
            </div>

            <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">
                <div class="card mt-5 p-5">
                    <h3>Quick Post</h3>
                    <div class="mt-5">
                        <form>
                            <div class="mb-5">
                                <label class="label block mb-2" for="title">Title</label>
                                <input id="title" type="text" class="form-control">
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="content">Content</label>
                                <textarea id="content" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="mb-5">
                                <label class="label block mb-2" for="category">Category</label>
                                <div class="custom-select">
                                    <select class="form-control">
                                        <option>Select</option>
                                        <option>Option</option>
                                    </select>
                                    <div class="custom-select-icon la la-caret-down"></div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <button class="btn btn_primary uppercase">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>