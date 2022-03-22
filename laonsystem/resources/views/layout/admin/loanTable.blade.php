@if ($borrower_id)
    <table class="table table-auto table_hoverable w-full">
        <thead>
            <tr>
                <th class="ltr:text-left rtl:text-right uppercase">Borrower</th>
                <th class="text-center uppercase">Request Amount</th>
                <th class="text-center uppercase">Documents</th>
                <th class="text-center uppercase">Status</th>
                <th class="text-center uppercase">Date Applied</th>
                <th class="text-center uppercase">Schedule Interview</th>
                <th class="uppercase"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrower::where('id','=',$borrower_id)->get() as $item)
                <tr>
                    <td>{{$item->full_nm}}</td>
                    <td class="text-center">{{$item->loan_amount}}</td>
                    <td class="text-center">
                        <div wire:click="viewDocument({{$item->id}})" class="badge badge_outlined badge_secondary uppercase pointer">view</div>
                    </td>
                    <td class="text-center">
                        @if ($item->status == 0)
                            Pending
                        @else
                            Approved
                        @endif
                    </td>
                    <td class="text-center">{{date('j F Y',strtotime(explode(' ',$item->created_at)[0]))}}</td>
                    <td class="text-center">
                        @if ($this->chechSchedule($item->id))
                            <div wire:click="screen('Schedule Interview',{{$item->id}},'RESCHEDULE')" class="badge badge_outlined badge_secondary uppercase pointer">RESCHEDULE</div>
                        @else
                            <div wire:click="screen('Schedule Interview',{{$item->id}})" class="badge badge_outlined badge_secondary uppercase pointer">SCHEDULE</div>
                        @endif
                    </td>
                    <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                        <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                            <a href="#" class="btn btn-icon btn_outlined btn_secondary">
                                <span class="la la-pen-fancy"></span>
                            </a>
                            <a href="#" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                                <span class="la la-trash-alt"></span>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <table class="table table-auto table_hoverable w-full">
        <thead>
            <tr>
                <th class="ltr:text-left rtl:text-right uppercase">Borrower</th>
                <th class="text-center uppercase">Request Amount</th>
                <th class="text-center uppercase">Documents</th>
                <th class="text-center uppercase">Status</th>
                <th class="text-center uppercase">Date Applied</th>
                <th class="text-center uppercase">Schedule Interview</th>
                <th class="uppercase"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrower::get() as $item)
            <tr>
                <td>{{$item->full_nm}}</td>
                <td class="text-center">{{$item->loan_amount}}</td>
                <td class="text-center">
                    <div wire:click="viewDocument({{$item->id}})" class="badge badge_outlined badge_secondary uppercase pointer">view</div>
                </td>
                <td class="text-center">
                    @if ($item->status == 0)
                        Pending
                    @else
                        Approved
                    @endif
                </td>
                <td class="text-center">{{date('j F Y',strtotime(explode(' ',$item->created_at)[0]))}}</td>
                <td class="text-center">
                    @if ($this->chechSchedule($item->id))
                        <div wire:click="screen('Schedule Interview',{{$item->id}},'RESCHEDULE')" class="badge badge_outlined badge_secondary uppercase pointer">RESCHEDULE</div>
                    @else
                        <div wire:click="screen('Schedule Interview',{{$item->id}})" class="badge badge_outlined badge_secondary uppercase pointer">SCHEDULE</div>
                    @endif
                </td>
                <td class="ltr:text-right rtl:text-left whitespace-nowrap">
                    <div class="inline-flex ltr:ml-auto rtl:mr-auto">
                        <a href="#" class="btn btn-icon btn_outlined btn_secondary">
                            <span class="la la-pen-fancy"></span>
                        </a>
                        <a href="#" class="btn btn-icon btn_outlined btn_danger ltr:ml-2 rtl:mr-2">
                            <span class="la la-trash-alt"></span>
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table> 
@endif