{{-- @php
    $reSchedule = $borrower::where()
@endphp --}}
<div class="flex">
    <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">
        <div class="card mt-5 p-5">
            <h3>Reschedule Starting date</h3>
            <div class="mt-5">
                <form>
                    <div class="mb-5">
                        <input wire:model="interview_start_date" type="date" class="form-control">
                        @error('interview_start_date')
                            {{$message}}
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="between-icon">
        Between
        <i class="fas fa-arrows-alt-h" style="font-size: 35px"></i>
    </div>
    <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">
        <div class="card mt-5 p-5">
            <h3>Reschedule Ending date</h3>
            <div class="mt-5">
                <form>
                    <div class="mb-5">
                        <input wire:model="interview_end_date" type="date" class="form-control">
                        @error('interview_end_date')
                            {{$message}}
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="flex">
    <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">
        <div class="card mt-5 p-5">
            <h3>Reschedule Starting time</h3>
            <div class="mt-5">
                <form>
                    <div class="mb-5">
                        <input wire:model="interview_start_time" type="time" class="form-control">
                        @error('interview_start_time')
                            {{$message}}
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="between-icon">
        Between
        <i class="fas fa-arrows-alt-h" style="font-size: 35px"></i>
    </div>
    <div class="lg:w-1/2 lg:px-4 pt-5 lg:pt-0">
        <div class="card mt-5 p-5">
            <h3>Reschedule Ending time</h3>
            <div class="mt-5">
                <form>
                    <div class="mb-5">
                        <input wire:model="interview_end_time" type="time" class="form-control">
                        @error('interview_end_time')
                            {{$message}}
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="mt-10">
    <button wire:click="setInterview('RESCHEDULE')" class="btn btn_primary uppercase ml-14 w-30">Set</button>
</div>