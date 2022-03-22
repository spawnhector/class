<div>
    @error('email') 
        @php
            echo "
            <script>
                shakeModal(`{$message}`)
            </script>
            ";
        @endphp
    @enderror
    @error('password') 
        @php
            echo "
            <script>
                shakeModal(`{$message}`)
            </script>
            ";
        @endphp
    @enderror
    <input class="form-control" type="text" placeholder="Email" wire:model="email">
    <input class="form-control" type="password" placeholder="Password" wire:model="password">
    <input class="btn btn-default btn-login" type="button" value="login" wire:click='login'>
</div>
