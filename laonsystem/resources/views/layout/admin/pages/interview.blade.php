
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
        @if ($borrower_id)
            @if ($result)
                <div class="card mt-5 p-5">
                    <div class="mt-5">
                        {{$result}}
                    </div>
                </div>
            @endif
            @if ($interview_type)
                @include('layout.admin.pages.reschedule')
            @else
                @include('layout.admin.pages.schedule')
            @endif
        @else
            <div class="container">
                <div class="justify-center">
                    <div class="">
                        <div class="card mt-5 p-5">
                            <h3>Selct Applicant</h3>
                            <div class="mt-5">
                                <form>
                                    <div class="mb-5">
                                        {{-- <label class="label block mb-2" for="category">Category</label> --}}
                                        <div class="custom-select">
                                            <select wire:model="borrower_id" value="" class="form-control">
                                                <option>Select</option>
                                                @foreach ($borrower::get() as $item)
                                                    @if (!$interviews::where('borrower_id','=',$item->id)->first())
                                                        <option value="{{$item->id}}">{{$item->full_nm}}</option>
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