<div class="col list-container">
    <h2 class='section-header'>Rented Vehicle<a class="btn primary float-right" href="#">View all rented vehicle</a></h2>
    <div class="list fix">
        <h6>Rented Vehicle</h6>
        @if (count(auth()->user()->rented) != 0)
        @foreach (auth()->user()->rented as $item)
        @php
        $durCost = auth()->user()->vehicle($item->vehicle_id)->price * $item->rented_days;
        $tax = 15;
        $taxAmount = ($tax / 100) * $durCost;
        @endphp
        <a href="#"><span>{{auth()->user()->vehicle($item->vehicle_id)->name}}</span><span>Rent For: {{$item->rented_days}} / Day | Cost: ${{$durCost}} | ${{auth()->user()->vehicle($item->vehicle_id)->price}} / Day | Tax: {{$tax}}% | Ater Tax: ${{$durCost + $taxAmount}}</span></a>
        @endforeach
        @else
        <a href="#"><span>No vehicle rented</span></a>
        @endif
    </div>
</div>
