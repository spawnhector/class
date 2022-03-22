<div class="flex flex-col w-1/2 m-2">
    <div>
        <div class="card mt-5 p-2" style="background: whitesmoke">
            <h3>Identification</h3>
            <div class="mt-5 scroll">
                {{$identity_doc}}
            </div>
        </div>
    </div>
    <div>
        <div class="card mt-5 p-2" style="background: whitesmoke">
            <h3>Pay Slip</h3>
            <div class="mt-5 scroll">
                {{$pay_slip_doc}}
            </div>
        </div>
    </div>
</div>

<div class="flex flex-col w-1/2 m-2">
    <div class="">
        <div class="card mt-5 p-2" style="background: whitesmoke">
            <h3>Proof Of Address</h3>
            <div class="mt-5 scroll">
                {{$poa_doc}}
            </div>
        </div>
    </div>
    <div class="">
        <div class="card mt-5 p-2" style="background: whitesmoke">
            <h3>Job Letter</h3>
            <div class="mt-5 scroll">
                {{$job_letter_doc}}
            </div>
        </div>
    </div>
</div>