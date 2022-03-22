<div>
    <aside class="menu-bar menu-sticky">
        <div class="menu-items">
            <div class="menu-header hidden">
                <a href="#" class="flex items-center mx-8 mt-8">
                    <span class="avatar w-16 h-16">JD</span>
                    <div class="ltr:ml-4 rtl:mr-4 ltr:text-left rtl:text-right text-gray-700 dark:text-gray-500">
                        <h5>John Doe</h5>
                        <p class="mt-2">Editor</p>
                    </div>
                </a>
                <hr class="mx-8 my-4">
            </div>
            <a class="link">
                <span wire:click="screen('Dashboard')" class="title">Dashboard</span>
            </a>
            <a wire:click="screen('Loan Request')" href="#no-link" class="link" >
                <span class="title">Loan Request</span>
            </a>
            <a wire:click="screen('Schedule Interview')" href="#no-link" class="link">
                <span class="title">Schedule Interview</span>
            </a>
            <a wire:click="screen('Begin Interview')" href="#no-link" class="link">
                <span class="title">Begin Interview</span>
            </a>
            <a wire:click="screen('Approved Loans')" class="link">
                <span class="title">Approved Loans</span>
            </a>
        </div>
    </aside>
</div>
