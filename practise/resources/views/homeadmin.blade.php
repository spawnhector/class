<div style="display: flex">
    <h1>This Is The Admin Home Page</h1>
    <a style="position:absolute; right:40px;"  href={{route('logout')}}>Logout</a>
</div>
<button type="button"><a href={{route('post')}} style="text-decoration: none">Create A Post</a></button>
<button type="button"><a href={{route('admin.profile')}} style="text-decoration: none">My Profile</a></button>