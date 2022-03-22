<section class="breadcrumb">
    @include('layout.admin.navigate')
</section>
<div>
    <div class="lg:w-full lg:px-4">
        <div>
            @include('layout.admin.card')
        </div>
    </div>
    <div class="lg:-mx-4">
        
        <div class="flex">
            <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">
                <div class="card mt-5 p-5">
                    <h3>Recent Applicants</h3>
                    <table class="table table_list mt-3 w-full">
                        <thead>
                            <tr>
                                <th class="ltr:text-left rtl:text-right uppercase">Borrower</th>
                                <th class="text-center uppercase">Branch</th>
                                <th class="text-center uppercase">Date Applied</th>
                                <th class="text-center uppercase">View</th>
                                <th class="uppercase"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($borrower::latest()->paginate(3) as $item)
                                <tr>
                                    <td>{{$item->full_nm}}</td>
                                    <td class="text-center">{{$item->branch->branch_nm}}</td>
                                    <td class="text-center">{{ $item->created_at->diffForHumans()}}</td>
                                    <td class="text-center">
                                        <div wire:click="screen('Loan Request',{{$item->id}})" class="badge badge_outlined badge_secondary uppercase pointer">View</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a wire:click="screen('Loan Request')" class="btn btn_primary mt-5">Show all Applicants</a>
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