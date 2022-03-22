<div>
    <div onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer close-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ed7001" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>
    <div class="mt-5">
        {{$result}}
        <div class="mb-5">
            <label class="label block mb-2" for="title">Branch Name</label>
            <input wire:model="branch_nm" type="text" class="form-control">
            @error('branch_nm')
                {{$message}}
            @enderror
        </div>
        <div class="mt-10">
            <button wire:click="addBranch()" class="btn btn_primary uppercase">Submit</button>
        </div>
    </div>
</div>
