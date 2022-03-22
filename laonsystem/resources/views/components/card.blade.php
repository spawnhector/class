<div>
    @props(['cardCount'])
    <div  class="lg:flex">
        @for ($i = 0; $i < (int)$cardCount; $i++)
            <div class="lg:w-1/3 lg:px-4 pt-5 lg:pt-0
            ">
                <div class="card px-4 py-8 text-center lg:transform hover:scale-110 hover:shadow-lg transition-transform duration-200">
                    <p class="mt-2">{{$cardInfo['cardHead'][$i]}}</p>
                    <div class="text-primary mt-5 text-3xl leading-none">
                        <div>
                            <div class="flex justify-center">
                                <div>
                                    {!! $cardInfo['cardBody'][$i] !!}
                                </div>
                                <div>
                                    @if (array_key_exists($cardInfo['cardHead'][$i],$cardInfo['button']))
                                        <x-modal>
                                            <x-slot name='modal_class'>
                                                {{$cardInfo['button'][$cardInfo['cardHead'][$i]]['modal_class']}}
                                            </x-slot>
                                            <x-slot name='btn_tag'>
                                                {{$cardInfo['button'][$cardInfo['cardHead'][$i]]['btn_tag']}}
                                            </x-slot>
                                            <x-slot name='modal_header'>
                                                {{$cardInfo['button'][$cardInfo['cardHead'][$i]]['modal_header']}}
                                            </x-slot>
                                            <x-slot name='btn_class'>
                                                {{$cardInfo['button'][$cardInfo['cardHead'][$i]]['btn_class']}}
                                            </x-slot>
                                            <x-slot name='button'>
                                                <i class="{{ $cardInfo['button'][$cardInfo['cardHead'][$i]]['button'] }}"></i>
                                            </x-slot>
                                            <x-slot name='content'>
                                                @if ($cardInfo['button'][$cardInfo['cardHead'][$i]]['param'])
                                                    @livewire($cardInfo['button'][$cardInfo['cardHead'][$i]]['content'],
                                                    [$cardInfo['button'][$cardInfo['cardHead'][$i]]['var']=>
                                                    $cardInfo['button'][$cardInfo['cardHead'][$i]]['var_param']])
                                                @else
                                                    @livewire($cardInfo['button'][$cardInfo['cardHead'][$i]]['content'])
                                                @endif
                                            </x-slot>
                                        </x-modal>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>