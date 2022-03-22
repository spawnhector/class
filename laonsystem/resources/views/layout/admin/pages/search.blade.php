
@if ($searchResult != null)
    @foreach ($searchResult as $item)
        <div class="card card_row card_hoverable mt-2">
            <div>
                <div class="image">
                    <div class="aspect-w-4 aspect-h-3">
                        <img src="https://yetiadmin.yetithemes.net/demo/assets/images/potato.jpg">
                    </div>
                    <div class="badge badge_outlined badge_secondary uppercase absolute top-0 ltr:right-0 rtl:left-0 mt-2 ltr:mr-2 rtl:ml-2">
                        @if ($item['status'] == 0)
                            Pending
                        @else
                            Approved
                        @endif
                    </div>
                </div>
            </div>
            <div class="header">

                <h5>{{$item['full_nm']}}.</h5>
                <div class="flex">
                    <button wire:click="screen('Loan Request',{{$item['id']}})" class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                        View Request
                    </button>
                    @if ($this->hasInterview($item['id']))
                        <button wire:click="screen('Begin Interview',{{$item['id']}})" class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Begin Interview
                        </button>
                        <button wire:click="screen('Schedule Interview',{{$item['id']}},'RESCHEDULE')" class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Reschedule Interview
                        </button>
                    @else
                        <button wire:click="screen('Schedule Interview',{{$item['id']}})" class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Schedule Interview
                        </button>
                    @endif
                </div>
            </div>
            <div class="body">
                <h6 class="uppercase">Request Amount</h6>
                <p>${{$item['loan_amount']}}</p>
                <h6 class="uppercase mt-auto">Date Created</h6>
                <p>{{date('j F Y',strtotime(explode(' ',$item['created_at'])[0]))}}</p>
            </div>
            <div class="actions">
                <div class="dropdown ltr:-ml-3 rtl:-mr-3 lg:ltr:ml-auto lg:rtl:mr-auto">
                    <button class="btn-icon text-gray-600 hover:text-primary" data-toggle="dropdown-menu" aria-expanded="false">
                        <span class="la la-ellipsis-v text-4xl leading-none"></span>
                    </button>
                    <div class="dropdown-menu">
                        <a href="#">Dropdown Action</a>
                        <a href="#">Link</a>
                        <hr>
                        <a href="#">Something Else</a>
                    </div>
                </div>
                <a href="#" class="btn btn-icon btn_outlined btn_secondary mt-auto ltr:ml-auto rtl:mr-auto lg:ltr:ml-0 lg:rtl:mr-0">
                    <span class="la la-pen-fancy"></span>
                </a>
                <a href="#" class="btn btn-icon btn_outlined btn_danger lg:mt-2 ltr:ml-2 rtl:mr-2 lg:ltr:ml-0 lg:rtl:mr-0">
                    <span class="la la-trash-alt"></span>
                </a>
            </div>
        </div>
    @endforeach
@endif