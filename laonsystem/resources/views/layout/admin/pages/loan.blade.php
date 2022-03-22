<section class="breadcrumb">
    @include('layout.admin.navigate')
</section>
<div>
    <div class="lg:w-full lg:px-4">
        <div>
            @include('layout.admin.card')
        </div>
    </div>
    <div class="card p-10 mt-4" >
        <div class="flex flex-row">
            @if ($document_id)
                @include('layout.admin.documents')
            @else
                @include('layout.admin.loanTable')
            @endif
        </div>
    </div>
</div>