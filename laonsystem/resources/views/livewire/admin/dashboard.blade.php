<div>
    @if ($screen == 'Search Result')
        @include('layout.admin.pages.search')
    @endif

    @if ($screen == 'Dashboard')
        @include('layout.admin.pages.dashboard')
    @endif

    @if ($screen == 'Loan Request')
        @include('layout.admin.pages.loan')
    @endif

    @if ($screen == 'Schedule Interview')
        @include('layout.admin.pages.interview')
    @endif
    
    @if ($screen == 'Begin Interview')
        @include('layout.admin.pages.beginInterview')
    @endif
    
    @if ($screen == 'Approved Loans')
        @include('layout.admin.pages.apprevedLoan')
    @endif
</div>
