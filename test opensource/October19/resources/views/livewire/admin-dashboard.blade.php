<div>
    <link rel="stylesheet" href="{{asset('css/admin.dashboard.css')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            
                        {{ __('You are logged in as a admin!') }}
                        <span class="ml-4 open" style="cursor: pointer;">View Students</span>
                        <span class="ml-4 openSubject" style="cursor:pointer;">View Subjects</span>
                        <a href="{{route('admin.getsubjectchoice')}}"><span class="ml-4 openSubjectChoice" style="cursor: pointer;">View StudentChoice</span></a>
                        <a href="{{route('helper')}}"><span class="ml-4 openSubjectChoice" style="cursor: pointer;">Helper</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-frame">
        <div class="modal">
            <div class="modal-inset">
                <div class="button close">
                    <i class="fa fa-close"></i>
                </div>
                <div class="modal-body">
                    <div class="modal-head"></div>
                    <div class="close"><i class="far fa-window-close"></i></div>
                    <div class="modal-body-body " >
                        <div class="loading">Loading&#8230;</div>
                        
                    </div>
                </div>
            </div>
        </div>
      </div>
      
      <div class="modal-overlay"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
    <script src="https://kit.fontawesome.com/1e7319fbc7.js" crossorigin="anonymous"></script>
    @include('script/admin-dashboard')
</div>
