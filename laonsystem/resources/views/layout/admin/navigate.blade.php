<h1>
    @if ($screen == 'Schedule Interview')
        @if ($borrower_id)
            @if ($interview_type)
                Reschedule Interview for {{$borrower::where('id','=',$borrower_id)->first()->full_nm}}
            @else
                {{$screen}} for {{$borrower::where('id','=',$borrower_id)->first()->full_nm}}
            @endif
        @else
            {{$screen}}
        @endif
    @else
        {{$screen}}
    @endif
</h1>
<ul>
    <li><a href="#">Admin</a></li>
    @if ($screen == 'Dashboard')
        <li class="divider"><i class="fas fa-arrow-right"></i></li>
        <li wire:click="screen('Dashboard')" class="pointer">{{$screen}}</li>
    @else
        <li class="divider"><i class="fas fa-arrow-right"></i></li>
        <li wire:click="screen('Dashboard')" class="pointer">Dashboard</li>
        <li class="divider"><i class="fas fa-arrow-right"></i></li>
        <li>{{$screen}}</li>
    @endif
</ul>