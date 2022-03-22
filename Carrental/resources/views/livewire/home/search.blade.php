<div>
    <form action="list" method="get" id="findCarNowForm">
        <div class="vc-auto-search hsearch_style_1">

            <div class="select select_mod-a jelect">
                <div class="home-search-label">PICK-UP DATE </div>
                {{-- <input data-type="jelect" data-field="time-start" id="pixad-time-start" wire="start_time" value="Select date" readonly data-text="imagemin" type="text" class="pix-input-time" value="February 8, 2022"> --}}
                <input type="text" name="booking[Start time]" placeholder="Select date" value="" id="datetimepicker_simple" data-min_date="3" data-work_days="" data-work_time="" autocomplete="" readonly>
                <input type="hidden" id="pixad_format_date" value="j/m/Y H:i">

            </div>
            <div class="select select_mod-a jelect">
                <div class="home-search-label">DROP-OFF DATE</div>
                <input type="text" class="" wire="finish_time" placeholder="Select date" value="" id="datetimepicker_end" autocomplete="off" readonly>
            </div>
            <script>
                jQuery.noConflict()(function($) {
                    jQuery(".hours_price_title_contain input").on("click", function() {
                        $(".hours_price_title_contain input").not(this).prop("checked", false);
                    });
                });
            </script>
            <div class="hours_price_title_contain">
            </div>
            <div class="pixba_contact_modal">
            </div>
            <input type="hidden" id="booking_timepicker" value="1">


            <div class="select select_mod-a jelect pixad-makes-models-select">
                <input data-type="jelect" data-field="make" id="ajax-make" name="make" value="" data-text="imagemin" type="text" class="jelect-input">
                <div tabindex="0" role="button" class="jelect-current">All Makes</div>
                <ul class="jelect-options">
                    <li data-val="" class="jelect-option jelect-option_state_active">All Makes</li>
                    @foreach ($models as $item)
                        <li data-val="{{$item['id']}}" class="jelect-option ">{{$item['model_nm']}}</li>
                    @endforeach
                </ul>
                <div class="home-search-label">Makers of Vehicle</div>
            </div>

            <div class="btn">
                <div class="btn-filter wrap__btn-skew-r js-filter">
                    <button type="button" onclick="findCarNowVc(); return false;" class="btn-skew-r btn-effect"><span class="btn-skew-r__inner">Find It Now</span></button>

                </div>
            </div>

        </div>
    </form>
</div>
