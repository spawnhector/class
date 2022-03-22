<div>
    <input class="form-control" type="text" placeholder="Name" wire:model="reg_name">
    <input class="form-control" type="text" placeholder="Email" wire:model="reg_email">
    <input class="form-control" type="password" placeholder="Password" wire:model="reg_password">
    <input class="form-control" type="password" placeholder="Repeat Password" wire:model="reg_password_confirmation">
    <input class="btn btn-default btn-register" type="submit" value="Create account" wire:click='register'>
</div>
