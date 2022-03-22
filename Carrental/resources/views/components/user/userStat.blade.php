<div class="col">
    {{-- <div class="">
        <div class="plf-img noUser">
            <span class="change-img"><i class="far fa-plus-square"></i></span>
        </div>
    </div> --}}
    @include('components.user.profileImage')
</div>
<div class="col">
    <div style="display: flex;margin: -23px;">
        <div class="list fix" style="margin-left: -265px;">
            <h6>Welcome User: {{$user->name}}</h6>
            <a>
                <span>Address:</span>
                @if ($user->address || $updatedAddress)
                    <span class="update_address" style="color: #2196f3;" >{{$user->address}}{{$updatedAddress}}</span>
                    
                @else
                    @if ($updateAddress)
                        <input wire:model="userAddress" class="form-control d-search d-search-fix"  placeholder="@error('userAddress'){{$message}}@enderror">
                        <span wire:click='updateUserData("address")' class="d-search-fix-save">Save</span>
                    @else
                        <span class="update_address" style="color: #2196f3;" wire:click='updateUser("address")'>Update Address</span>
                    @endif
                @endif
            </a>
            <a>
                <span>Telephone:</span>
                @if ($user->phone || $updatedTele)
                    <span class="update_tele" style="color: #2196f3;" >{{$user->phone}}{{$updatedTele}}</span>
                    
                @else
                    @if ($updateTele)
                        <input wire:model="userTele" type="number" class="form-control d-search d-search-fix"  placeholder="@error('userTele'){{$message}}@enderror">
                        <span wire:click='updateUserData("telephone")' class="d-search-fix-save">Save</span>
                    @else
                        <span class="update_tele" style="color: #2196f3;" wire:click='updateUser("telephone")'>Update Number</span>
                    @endif
                @endif
            </a><a>
                <span>HTMI:</span>
                <span>
                    <span class="update_tele" style="color: #2196f3;" >{{$user->htmi}}</span>
                </span>
            </a>
            <a>
                <span>Status:</span>
                <span style="color: #2196f3;">
                    @if ($user->status == 1)
                        Active
                    @endif
                </span>
            </a>
        </div>
        <div class="list fix">
            <h6>Alert</h6>
            <a href="#">
                <span class="progress" style="width:62.4%;"></span>
                <span>United States</span>
                <span>62.4%</span>
            </a>
            <a href="#">
                <span class="progress" style="width:15.0%;"></span>
                <span>India</span>
                <span>15.0%</span>
            </a><a href="#">
                <span class="progress" style="width:5.0%;"></span>
                <span>United Kingdom</span>
                <span>5.0%</span>
            </a>
            <a href="#">
                <span class="progress" style="width:5.0%;"></span>
                <span>Canada</span>
                <span>5.0%</span>
            </a>
        </div>
    </div>
</div>