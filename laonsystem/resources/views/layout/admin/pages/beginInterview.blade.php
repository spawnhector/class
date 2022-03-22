<section class="breadcrumb">
    @include('layout.admin.navigate')
</section>
<div>
    <div class="lg:-mx-4">
        @if ($borrower_id)
            @if ($result)
                <div class="card mt-5 p-5">
                    <div class="mt-5">
                        {{$result}}
                    </div>
                </div>
            @endif
            <div class="flex ml-8">
                <div class="card mt-5 p-5" style="width: 474px;height:237px">
                    <h3>
                        Begin Zoom Interview
                        <button  class="border border-gray-700 text-gray-700 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                            Open In-App
                        </button>
                    </h3>
                    <p>
                        Meeting Link: <br><a href="{{$borrower::find($borrower_id)->interview->toArray()[0]['meeting_url']}}">{{$borrower::find($borrower_id)->interview->toArray()[0]['meeting_url']}}</a>.
                    </p>
                    <br>
                    <p>
                        Meeting Password: <br>{{$borrower::find($borrower_id)->interview->toArray()[0]['meeting_pass']}}
                    </p>
                </div>
                <div class="divider-y mt-10 "></div>
                <div class="card mt-5 p-5" style="width: 474px;height:237px">
                    <h3>Begin Walk-In Interview</h3>
                </div>
            </div>
        @else
            <div class="lg:w-full lg:px-4">
                <!-- Summaries -->
                <div>
                    @include('layout.admin.card')
                </div>
            </div>
            <div class="container">
                <div class="justify-center">
                    <div class="">
                        <div class="card mt-5 p-5">
                            <div clas="flex">
                                <h3>Select Applicant</h3>
                                {{-- @livewire('admin.search-applicants') --}}
                            </div>
                            <div class="mt-5">
                                <form>
                                    <div class="mb-5">
                                        <div class="custom-select">
                                            {{-- @if ($interview_searchResult)
                                                <div class="search-app form-control">
                                                    @foreach ($interview_searchResult as $item)
                                                        <div class="search-app-row py-2 pl-1 hover:bg-blue-500" wire:click="setBorrower_Id({{$item->borrower->id}})">{{$item->borrower->full_nm}} - {{$item->meeting_url}}</div>
                                                    @endforeach
                                                </div>
                                            @endif --}}
                                            <select wire:model="borrower_id" class="form-control" >
                                                <option>Select</option>
                                                @foreach ($borrower::get() as $item)
                                                @if ($get = $interviews::where('borrower_id','=',$item->id)->first())
                                                        <option value="{{$item->id}}">{{$item->full_nm}}  -  {{$get->meeting_url}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            <div class="custom-select-icon"><i class="fas fa-arrow-down"></i></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>