<x-app-layout>
    {{-- <x-slot name="header"> --}}
    @section('content')
        @extends('layouts.dashboard')
        <div x-data="setup()" :class="{ 'dark': isDark }">
            <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white"
                style="margin-top: 42px;width:100%">
                @extends('layouts.header')
                <form action={{ route('dashboard.create.new') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="h-full mt-14 mb-10" style="margin-left:20px;">
                        {{-- body here --}}
                    </div>
                </form>


            </div>
        </div>
        </div>
    @endsection
    </div>
</x-app-layout>
