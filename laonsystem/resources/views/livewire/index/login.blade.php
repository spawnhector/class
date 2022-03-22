<div>
    <div wire:click="clearModal()" onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer close-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ed7001" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>
    <div class="">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        {{$result}}
                        <input wire:model="email" type="email" class="form-control" placeholder="Email">
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>	
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input wire:model="password" type="password" class="form-control" placeholder="Password">
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>	
                </div>
            </div>
            <div class="form-group">
                <input wire:click="login()" type="submit" class="btn btn-block" value="Submit">
            </div>
    </div>
</div>
