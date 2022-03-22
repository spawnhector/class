<div>
    @if ($loanType == 'autoloan')
        <div onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer close-btn">
            <i class="fas fa-arrow-left" style="color:#ed7001"></i>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button wire:click="seType('one')" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Rates & Fees
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" 
                @if ($selecType == 'one')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif 
                aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <table style="height: 616px;" width="598">
                            <tbody>
                                <tr>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Year of Vehicle</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">% Financing</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Terms</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Rate</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2021</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 120 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">7.45%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2020</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 96 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">8.5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2018-2019</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">8.5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2016-2017</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">9.99%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2015</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">10.49%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2014</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 60 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">10.99%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2013</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 60 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">12.49%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2012</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 54 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">14%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2011</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 48 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">15%</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button wire:click="seType('two')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Checklist
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" 
                @if ($selecType == 'two')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="">
                            <p><span style="font-weight: 400;">Job Letter stating </span><i><span
                                        style="font-weight: 400;">salary, position, length of employment</span></i><span
                                    style="font-weight: 400;">; plus last two months pay slips.&nbsp;</span><span
                                    style="font-weight: 400;">Print out of savings/current account transactions for at least
                                    6 months OR updated bank book (if&nbsp;</span><span
                                    style="font-weight: 400;">required)&nbsp;</span></p>
                            <ul>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="list-style-type: none;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 11 months OR updated bank book</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration
                                                Number (TRN) Card&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Valid ID (Driver’s
                                                Licence, Voter’s ID, COK ID); </span>VALID Jamaican <span
                                                style="font-weight: 400;">Driver’s Licence**&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                                photograph&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Application
                                                Form </span>with contact information of two relatives &amp; two references
                                            (non-related)</li>
                                        <li><span style="font-weight: 400;">Current Valuation **(done in the last 6 months)
                                                – Valuations must include front, back, embodied&nbsp;</span><span
                                                style="font-weight: 400;">chassis # on vehicle and VIN plate
                                                pictures.&nbsp;</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Expense form and
                                        Statement of Affairs</span> (to be provided by COK)</li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in member’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Pro Forma Invoice (reflecting
                                        price of the vehicle</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Import Entry – C87 (all
                                        pages)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Certificate of Fitness
                                    </span>and <span style="font-weight: 400;">Certificate of Registration&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Copy of Title**&nbsp;</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Evidence of deposit on motor
                                        vehicle – Receipt (see deposit and share requirements for motor&nbsp;</span><span
                                        style="font-weight: 400;">vehicles)&nbsp;</span></li>
                            </ul>
                            <p>Notation: Vehicle must be comprehensively insured &amp; open for one year. All loans will be
                                salary deducted where applicable</p>
                            <ul>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">&nbsp;</span>Guarantor
                                            (if applicable)</li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Job Letter stating
                                            </span><i><span style="font-weight: 400;">salary, position, length of
                                                    employment</span></i><span style="font-weight: 400;">; plus last two
                                                months pay slips&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Print out of
                                                savings/current account transactions for at least 6 months OR updated bank
                                                book (if&nbsp;</span><span style="font-weight: 400;">required)&nbsp;</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for the last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 12 months OR updated&nbsp;bank book
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration Number (TRN)
                                        Card and Valid ID (Driver’s Licence, Voter’s ID, COK ID)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                        photograph&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Signed guarantor form
                                        witnessed by a Justice of the Peace&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in guarantor’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)&nbsp;</span></li>
                            </ul>
                            <p><span style="font-weight: 400;">*</span><b>CONDITIONS APPLY </b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button wire:click="seType('three')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Auto Loan Calculator
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" 
                @if ($selecType == 'three')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "
                            data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                            data-animation="" data-delay="0">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <style>
                                                .form-1 .shmac-form .mui-form-group>.mui-form-control:focus~label {
                                                    color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-select:focus>select {
                                                    border-color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-btn.submit-shmac,
                                                .form-1 .shmac-form .mui-btn.submit-shmac:hover {
                                                    background-color: #dd9933;
                                                }

                                                .form-1 .shmac-form input[type=text]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=email]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=password]:focus:not([readonly]) {
                                                    border: none;
                                                    border-bottom: 1px solid #dd9933;
                                                    box-shadow: 0 1px 0 0 #dd9933;
                                                }

                                                .form-1 .shmac-form [type="checkbox"]:checked+label:before {
                                                    border-right: 2px solid #dd9933;
                                                    border-bottom: 2px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 {
                                                    border: 5px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 .schedule-table th {
                                                    color: #dd9933;
                                                }

                                                .form-1 .ui-mprogress .deter-bar,
                                                .form-1 .ui-mprogress .indeter-bar,
                                                .form-1 .ui-mprogress .query-bar,
                                                .form-1 .ui-mprogress .mp-ui-dashed {
                                                    background: #dd9933;
                                                }

                                                .noUi-handle:focus {
                                                    box-shadow: 0 0 7px #888;
                                                    border: 8px solid #dd9933;
                                                }

                                            </style>
                                            <style>
                                                .shmac-holder-1 {
                                                    background: url(https://cokcu.com/wp-content/uploads/2019/01/COK-Logo-Sm-e1547477533159.png);
                                                    background-size: cover;
                                                }

                                                .mui-panel.form-1 {
                                                    background-color: #efefef;
                                                }

                                                .form-1 .sliders {
                                                    margin-top: 15px;
                                                }

                                                .form-1 .noUi-target {
                                                    box-shadow: none;
                                                }

                                                .form-1 .noUi-handle::after,
                                                .form-1 .noUi-handle::before {
                                                    background: none;
                                                }

                                                .form-1 .noUi-horizontal .noUi-handle {
                                                    height: 20px;
                                                    top: -7px;
                                                    width: 20px;
                                                    border: 5px solid #dd9933;
                                                }

                                                .form-1 .noUi-horizontal {
                                                    height: 6px;
                                                }

                                                .form-1 .noUi-handle {
                                                    left: -8 !important;
                                                    top: -8px !important;
                                                }


                                                .shmac-sc.form-1 .sliders {
                                                    background-color: #dd9933;
                                                }

                                            </style>
                                            <div class="shmac-holder shmac-holder-1 ">
                                                <div class="mui-panel shmac-sc form-1">
                                                    <form class="shmac-form">
                                                        <div class="shmac-title">Auto Loan Calculator</div>
                                                        <div class="shmac-check">
                                                            <input wire:model="inmail_result" type="checkbox" id="checkflip-1"
                                                                class="checkflip send-email">
                                                            <label for="checkflip-1">Would like to get the result in an
                                                                email?</label>
                                                        </div>
                                                        <div class="mui-form-group shmac-email" style="display:none;">
                                                            <input  wire:model="result_email" type="text"
                                                                class="shmac-email-input mui-form-control mui-empty">
                                                            <label class="mui-form-floating-label">Email</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-amount">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Total purchase price of car you wish to purchase">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_amount" type="text"
                                                                class="mui-form-control amountinput_1 mui-dirty mui-not-empty"
                                                                data-decimal-character="."
                                                                data-digit-group-separator=",">
                                                            <label class="mui-form-floating-label non-empty-ipt">Loan
                                                                Amount</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-interest">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Expected interest rate you intend to get for the vehicle">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_interest" type="text"
                                                                class="interest mui-form-control interestinput_1 mui-not-empty mui-dirty"
                                                                >
                                                            <label class="mui-form-floating-label non-empty-ipt">Interest
                                                                Rate (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-down">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The percentage down payment you wish to put towards the motor vehicle.">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_downpayment" type="text"
                                                                class="downpay mui-form-control downpayinput_1 mui-dirty mui-not-empty"
                                                                data-minimum-value="0.00"
                                                                data-maximum-value="100.00">
                                                            <label class="mui-form-floating-label non-empty-ipt">Down
                                                                Payment (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-term">
                                                            <div class="shmac-term-years">
                                                                <input wire:model="loan_term_years" type="checkbox" id="term-years-1"
                                                                    class="term-years term-group" checked="checked">
                                                                <label for="term-years-1">Years</label>
                                                            </div>
                                                            <div class="shmac-term-months">
                                                                <input wire:model="loan_term_month" type="checkbox" id="term-months-1"
                                                                    class="term-months term-group">
                                                                <label for="term-months-1">Months</label>
                                                            </div>
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The expected amount of time it would take to pay off the loan for the vehicle purchased(maximum 8yrs)">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_term_duration" type="text"
                                                                class="term mui-form-control terminput_1 mui-dirty mui-not-empty"
                                                                data-decimal-places-override="0">
                                                            <label class="mui-form-label">Term</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="progresso"> &nbsp;</div>
                                                        <div class="buttonRow">
                                                            <button wire:click="calculateLoan()" class="mui-btn submit-shmac"
                                                                data-mui-color="#dd9933">Submit</button>
                                                            <button class="mui-btn shmac-reset shmac-reset_1"
                                                                type="reset">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    @endif

    @if ($loanType == 'homeloan')
        <div onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer close-btn">
            <i class="fas fa-arrow-left" style="color:#ed7001"></i>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button wire:click="seType('one')" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Rates & Fees
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" 
                @if ($selecType == 'one')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif 
                aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <table>
                        <tbody>
                        <tr>
                        <td width="141">Value of Property</td>
                        <td width="110">Equity Financed</td>
                        <td width="141">Loan Amount</td>
                        <td width="110">Duration</td>
                        <td width="117">Monthly Payment</td>
                        </tr>
                        <tr>
                        <td width="141">$3,000,000.00</td>
                        <td width="110">80%</td>
                        <td width="141">$2,400,000.00</td>
                        <td width="110">180 months</td>
                        <td width="117">$22,180.16</td>
                        </tr>
                        <tr>
                        <td width="141">$5,000,000.00</td>
                        <td width="110">80%</td>
                        <td width="141">$4,000,000.00</td>
                        <td width="110">180 months</td>
                        <td width="117">$36,966.93</td>
                        </tr>
                        <tr>
                        <td width="141">$10,000,000.00</td>
                        <td width="110">80%</td>
                        <td width="141">$8,000,000.00</td>
                        <td width="110">180 months</td>
                        <td width="117">$73,933.87</td>
                        </tr>
                        <tr>
                        <td width="141">$15,000,000.00</td>
                        <td width="110">80%</td>
                        <td width="141">$12,000,000.00</td>
                        <td width="110">180 months</td>
                        <td width="117">$110,900.80</td>
                        </tr>
                        <tr>
                        <td width="141">$20,000,000.00</td>
                        <td width="110">80%</td>
                        <td width="141">$16,000,000.00</td>
                        <td width="110">180 months</td>
                        <td width="117">$147,867.73</td>
                        </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button wire:click="seType('two')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Checklist
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" 
                @if ($selecType == 'two')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="">
                            <p><span style="font-weight: 400;">Job Letter stating </span><i><span
                                        style="font-weight: 400;">salary, position, length of employment</span></i><span
                                    style="font-weight: 400;">; plus last two months pay slips.&nbsp;</span><span
                                    style="font-weight: 400;">Print out of savings/current account transactions for at least
                                    6 months OR updated bank book (if&nbsp;</span><span
                                    style="font-weight: 400;">required)&nbsp;</span></p>
                            <ul>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="list-style-type: none;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 11 months OR updated bank book</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration
                                                Number (TRN) Card&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Valid ID (Driver’s
                                                Licence, Voter’s ID, COK ID); </span>VALID Jamaican <span
                                                style="font-weight: 400;">Driver’s Licence**&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                                photograph&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Application
                                                Form </span>with contact information of two relatives &amp; two references
                                            (non-related)</li>
                                        <li><span style="font-weight: 400;">Current Valuation **(done in the last 6 months)
                                                – Valuations must include front, back, embodied&nbsp;</span><span
                                                style="font-weight: 400;">chassis # on vehicle and VIN plate
                                                pictures.&nbsp;</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Expense form and
                                        Statement of Affairs</span> (to be provided by COK)</li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in member’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Pro Forma Invoice (reflecting
                                        price of the vehicle</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Import Entry – C87 (all
                                        pages)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Certificate of Fitness
                                    </span>and <span style="font-weight: 400;">Certificate of Registration&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Copy of Title**&nbsp;</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Evidence of deposit on motor
                                        vehicle – Receipt (see deposit and share requirements for motor&nbsp;</span><span
                                        style="font-weight: 400;">vehicles)&nbsp;</span></li>
                            </ul>
                            <p>Notation: Vehicle must be comprehensively insured &amp; open for one year. All loans will be
                                salary deducted where applicable</p>
                            <ul>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">&nbsp;</span>Guarantor
                                            (if applicable)</li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Job Letter stating
                                            </span><i><span style="font-weight: 400;">salary, position, length of
                                                    employment</span></i><span style="font-weight: 400;">; plus last two
                                                months pay slips&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Print out of
                                                savings/current account transactions for at least 6 months OR updated bank
                                                book (if&nbsp;</span><span style="font-weight: 400;">required)&nbsp;</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for the last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 12 months OR updated&nbsp;bank book
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration Number (TRN)
                                        Card and Valid ID (Driver’s Licence, Voter’s ID, COK ID)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                        photograph&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Signed guarantor form
                                        witnessed by a Justice of the Peace&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in guarantor’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)&nbsp;</span></li>
                            </ul>
                            <p><span style="font-weight: 400;">*</span><b>CONDITIONS APPLY </b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button wire:click="seType('three')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Auto Loan Calculator
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" 
                @if ($selecType == 'three')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "
                            data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                            data-animation="" data-delay="0">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <style>
                                                .form-1 .shmac-form .mui-form-group>.mui-form-control:focus~label {
                                                    color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-select:focus>select {
                                                    border-color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-btn.submit-shmac,
                                                .form-1 .shmac-form .mui-btn.submit-shmac:hover {
                                                    background-color: #dd9933;
                                                }

                                                .form-1 .shmac-form input[type=text]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=email]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=password]:focus:not([readonly]) {
                                                    border: none;
                                                    border-bottom: 1px solid #dd9933;
                                                    box-shadow: 0 1px 0 0 #dd9933;
                                                }

                                                .form-1 .shmac-form [type="checkbox"]:checked+label:before {
                                                    border-right: 2px solid #dd9933;
                                                    border-bottom: 2px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 {
                                                    border: 5px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 .schedule-table th {
                                                    color: #dd9933;
                                                }

                                                .form-1 .ui-mprogress .deter-bar,
                                                .form-1 .ui-mprogress .indeter-bar,
                                                .form-1 .ui-mprogress .query-bar,
                                                .form-1 .ui-mprogress .mp-ui-dashed {
                                                    background: #dd9933;
                                                }

                                                .noUi-handle:focus {
                                                    box-shadow: 0 0 7px #888;
                                                    border: 8px solid #dd9933;
                                                }

                                            </style>
                                            <style>
                                                .shmac-holder-1 {
                                                    background: url(https://cokcu.com/wp-content/uploads/2019/01/COK-Logo-Sm-e1547477533159.png);
                                                    background-size: cover;
                                                }

                                                .mui-panel.form-1 {
                                                    background-color: #efefef;
                                                }

                                                .form-1 .sliders {
                                                    margin-top: 15px;
                                                }

                                                .form-1 .noUi-target {
                                                    box-shadow: none;
                                                }

                                                .form-1 .noUi-handle::after,
                                                .form-1 .noUi-handle::before {
                                                    background: none;
                                                }

                                                .form-1 .noUi-horizontal .noUi-handle {
                                                    height: 20px;
                                                    top: -7px;
                                                    width: 20px;
                                                    border: 5px solid #dd9933;
                                                }

                                                .form-1 .noUi-horizontal {
                                                    height: 6px;
                                                }

                                                .form-1 .noUi-handle {
                                                    left: -8 !important;
                                                    top: -8px !important;
                                                }


                                                .shmac-sc.form-1 .sliders {
                                                    background-color: #dd9933;
                                                }

                                            </style>
                                            <div class="shmac-holder shmac-holder-1 ">
                                                <div class="mui-panel shmac-sc form-1">
                                                    <form class="shmac-form">
                                                        <div class="shmac-title">Auto Loan Calculator</div>
                                                        <div class="shmac-check">
                                                            <input wire:model="inmail_result" type="checkbox" id="checkflip-1"
                                                                class="checkflip send-email">
                                                            <label for="checkflip-1">Would like to get the result in an
                                                                email?</label>
                                                        </div>
                                                        <div class="mui-form-group shmac-email" style="display:none;">
                                                            <input  wire:model="result_email" type="text"
                                                                class="shmac-email-input mui-form-control mui-empty">
                                                            <label class="mui-form-floating-label">Email</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-amount">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Total purchase price of car you wish to purchase">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_amount" type="text"
                                                                class="mui-form-control amountinput_1 mui-dirty mui-not-empty"
                                                                data-decimal-character="."
                                                                data-digit-group-separator=",">
                                                            <label class="mui-form-floating-label non-empty-ipt">Loan
                                                                Amount</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-interest">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Expected interest rate you intend to get for the vehicle">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_interest" type="text"
                                                                class="interest mui-form-control interestinput_1 mui-not-empty mui-dirty"
                                                                >
                                                            <label class="mui-form-floating-label non-empty-ipt">Interest
                                                                Rate (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-down">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The percentage down payment you wish to put towards the motor vehicle.">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_downpayment" type="text"
                                                                class="downpay mui-form-control downpayinput_1 mui-dirty mui-not-empty"
                                                                data-minimum-value="0.00"
                                                                data-maximum-value="100.00">
                                                            <label class="mui-form-floating-label non-empty-ipt">Down
                                                                Payment (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-term">
                                                            <div class="shmac-term-years">
                                                                <input wire:model="loan_term_years" type="checkbox" id="term-years-1"
                                                                    class="term-years term-group" checked="checked">
                                                                <label for="term-years-1">Years</label>
                                                            </div>
                                                            <div class="shmac-term-months">
                                                                <input wire:model="loan_term_month" type="checkbox" id="term-months-1"
                                                                    class="term-months term-group">
                                                                <label for="term-months-1">Months</label>
                                                            </div>
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The expected amount of time it would take to pay off the loan for the vehicle purchased(maximum 8yrs)">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_term_duration" type="text"
                                                                class="term mui-form-control terminput_1 mui-dirty mui-not-empty"
                                                                data-decimal-places-override="0">
                                                            <label class="mui-form-label">Term</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="progresso"> &nbsp;</div>
                                                        <div class="buttonRow">
                                                            <button wire:click="calculateLoan()" class="mui-btn submit-shmac"
                                                                data-mui-color="#dd9933">Submit</button>
                                                            <button class="mui-btn shmac-reset shmac-reset_1"
                                                                type="reset">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    @endif

    @if ($loanType == 'personaloan')
        <div onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer close-btn">
            <i class="fas fa-arrow-left" style="color:#ed7001"></i>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button wire:click="seType('one')" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Rates & Fees
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" 
                @if ($selecType == 'one')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif 
                aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <table style="height: 616px;" width="598">
                            <tbody>
                                <tr>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Year of Vehicle</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">% Financing</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Terms</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Rate</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2021</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 120 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">7.45%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2020</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 96 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">8.5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2018-2019</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">8.5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2016-2017</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">9.99%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2015</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">10.49%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2014</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 60 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">10.99%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2013</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 60 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">12.49%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2012</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 54 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">14%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2011</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 48 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">15%</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button wire:click="seType('two')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Checklist
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" 
                @if ($selecType == 'two')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="">
                            <p><span style="font-weight: 400;">Job Letter stating </span><i><span
                                        style="font-weight: 400;">salary, position, length of employment</span></i><span
                                    style="font-weight: 400;">; plus last two months pay slips.&nbsp;</span><span
                                    style="font-weight: 400;">Print out of savings/current account transactions for at least
                                    6 months OR updated bank book (if&nbsp;</span><span
                                    style="font-weight: 400;">required)&nbsp;</span></p>
                            <ul>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="list-style-type: none;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 11 months OR updated bank book</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration
                                                Number (TRN) Card&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Valid ID (Driver’s
                                                Licence, Voter’s ID, COK ID); </span>VALID Jamaican <span
                                                style="font-weight: 400;">Driver’s Licence**&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                                photograph&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Application
                                                Form </span>with contact information of two relatives &amp; two references
                                            (non-related)</li>
                                        <li><span style="font-weight: 400;">Current Valuation **(done in the last 6 months)
                                                – Valuations must include front, back, embodied&nbsp;</span><span
                                                style="font-weight: 400;">chassis # on vehicle and VIN plate
                                                pictures.&nbsp;</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Expense form and
                                        Statement of Affairs</span> (to be provided by COK)</li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in member’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Pro Forma Invoice (reflecting
                                        price of the vehicle</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Import Entry – C87 (all
                                        pages)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Certificate of Fitness
                                    </span>and <span style="font-weight: 400;">Certificate of Registration&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Copy of Title**&nbsp;</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Evidence of deposit on motor
                                        vehicle – Receipt (see deposit and share requirements for motor&nbsp;</span><span
                                        style="font-weight: 400;">vehicles)&nbsp;</span></li>
                            </ul>
                            <p>Notation: Vehicle must be comprehensively insured &amp; open for one year. All loans will be
                                salary deducted where applicable</p>
                            <ul>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">&nbsp;</span>Guarantor
                                            (if applicable)</li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Job Letter stating
                                            </span><i><span style="font-weight: 400;">salary, position, length of
                                                    employment</span></i><span style="font-weight: 400;">; plus last two
                                                months pay slips&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Print out of
                                                savings/current account transactions for at least 6 months OR updated bank
                                                book (if&nbsp;</span><span style="font-weight: 400;">required)&nbsp;</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for the last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 12 months OR updated&nbsp;bank book
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration Number (TRN)
                                        Card and Valid ID (Driver’s Licence, Voter’s ID, COK ID)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                        photograph&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Signed guarantor form
                                        witnessed by a Justice of the Peace&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in guarantor’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)&nbsp;</span></li>
                            </ul>
                            <p><span style="font-weight: 400;">*</span><b>CONDITIONS APPLY </b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button wire:click="seType('three')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Auto Loan Calculator
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" 
                @if ($selecType == 'three')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "
                            data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                            data-animation="" data-delay="0">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <style>
                                                .form-1 .shmac-form .mui-form-group>.mui-form-control:focus~label {
                                                    color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-select:focus>select {
                                                    border-color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-btn.submit-shmac,
                                                .form-1 .shmac-form .mui-btn.submit-shmac:hover {
                                                    background-color: #dd9933;
                                                }

                                                .form-1 .shmac-form input[type=text]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=email]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=password]:focus:not([readonly]) {
                                                    border: none;
                                                    border-bottom: 1px solid #dd9933;
                                                    box-shadow: 0 1px 0 0 #dd9933;
                                                }

                                                .form-1 .shmac-form [type="checkbox"]:checked+label:before {
                                                    border-right: 2px solid #dd9933;
                                                    border-bottom: 2px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 {
                                                    border: 5px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 .schedule-table th {
                                                    color: #dd9933;
                                                }

                                                .form-1 .ui-mprogress .deter-bar,
                                                .form-1 .ui-mprogress .indeter-bar,
                                                .form-1 .ui-mprogress .query-bar,
                                                .form-1 .ui-mprogress .mp-ui-dashed {
                                                    background: #dd9933;
                                                }

                                                .noUi-handle:focus {
                                                    box-shadow: 0 0 7px #888;
                                                    border: 8px solid #dd9933;
                                                }

                                            </style>
                                            <style>
                                                .shmac-holder-1 {
                                                    background: url(https://cokcu.com/wp-content/uploads/2019/01/COK-Logo-Sm-e1547477533159.png);
                                                    background-size: cover;
                                                }

                                                .mui-panel.form-1 {
                                                    background-color: #efefef;
                                                }

                                                .form-1 .sliders {
                                                    margin-top: 15px;
                                                }

                                                .form-1 .noUi-target {
                                                    box-shadow: none;
                                                }

                                                .form-1 .noUi-handle::after,
                                                .form-1 .noUi-handle::before {
                                                    background: none;
                                                }

                                                .form-1 .noUi-horizontal .noUi-handle {
                                                    height: 20px;
                                                    top: -7px;
                                                    width: 20px;
                                                    border: 5px solid #dd9933;
                                                }

                                                .form-1 .noUi-horizontal {
                                                    height: 6px;
                                                }

                                                .form-1 .noUi-handle {
                                                    left: -8 !important;
                                                    top: -8px !important;
                                                }


                                                .shmac-sc.form-1 .sliders {
                                                    background-color: #dd9933;
                                                }

                                            </style>
                                            <div class="shmac-holder shmac-holder-1 ">
                                                <div class="mui-panel shmac-sc form-1">
                                                    <form class="shmac-form">
                                                        <div class="shmac-title">Auto Loan Calculator</div>
                                                        <div class="shmac-check">
                                                            <input wire:model="inmail_result" type="checkbox" id="checkflip-1"
                                                                class="checkflip send-email">
                                                            <label for="checkflip-1">Would like to get the result in an
                                                                email?</label>
                                                        </div>
                                                        <div class="mui-form-group shmac-email" style="display:none;">
                                                            <input  wire:model="result_email" type="text"
                                                                class="shmac-email-input mui-form-control mui-empty">
                                                            <label class="mui-form-floating-label">Email</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-amount">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Total purchase price of car you wish to purchase">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_amount" type="text"
                                                                class="mui-form-control amountinput_1 mui-dirty mui-not-empty"
                                                                data-decimal-character="."
                                                                data-digit-group-separator=",">
                                                            <label class="mui-form-floating-label non-empty-ipt">Loan
                                                                Amount</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-interest">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Expected interest rate you intend to get for the vehicle">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_interest" type="text"
                                                                class="interest mui-form-control interestinput_1 mui-not-empty mui-dirty"
                                                                >
                                                            <label class="mui-form-floating-label non-empty-ipt">Interest
                                                                Rate (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-down">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The percentage down payment you wish to put towards the motor vehicle.">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_downpayment" type="text"
                                                                class="downpay mui-form-control downpayinput_1 mui-dirty mui-not-empty"
                                                                data-minimum-value="0.00"
                                                                data-maximum-value="100.00">
                                                            <label class="mui-form-floating-label non-empty-ipt">Down
                                                                Payment (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-term">
                                                            <div class="shmac-term-years">
                                                                <input wire:model="loan_term_years" type="checkbox" id="term-years-1"
                                                                    class="term-years term-group" checked="checked">
                                                                <label for="term-years-1">Years</label>
                                                            </div>
                                                            <div class="shmac-term-months">
                                                                <input wire:model="loan_term_month" type="checkbox" id="term-months-1"
                                                                    class="term-months term-group">
                                                                <label for="term-months-1">Months</label>
                                                            </div>
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The expected amount of time it would take to pay off the loan for the vehicle purchased(maximum 8yrs)">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_term_duration" type="text"
                                                                class="term mui-form-control terminput_1 mui-dirty mui-not-empty"
                                                                data-decimal-places-override="0">
                                                            <label class="mui-form-label">Term</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="progresso"> &nbsp;</div>
                                                        <div class="buttonRow">
                                                            <button wire:click="calculateLoan()" class="mui-btn submit-shmac"
                                                                data-mui-color="#dd9933">Submit</button>
                                                            <button class="mui-btn shmac-reset shmac-reset_1"
                                                                type="reset">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    @endif

    @if ($loanType == 'businessloan')
        <div onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer close-btn">
            <i class="fas fa-arrow-left" style="color:#ed7001"></i>
        </div>
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button wire:click="seType('one')" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            Rates & Fees
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" 
                @if ($selecType == 'one')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif 
                aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <table style="height: 616px;" width="598">
                            <tbody>
                                <tr>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Year of Vehicle</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">% Financing</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Terms</p>
                                    </td>
                                    <td align="center" bgcolor="#FA9F1B">
                                        <p dir="ltr">Rate</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2021</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 120 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">7.45%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2020</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 96 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">8.5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2018-2019</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">8.5%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2016-2017</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">9.99%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2015</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 78 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">10.49%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2014</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">100%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 60 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">10.99%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2013</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 60 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">12.49%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2012</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 54 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">14%</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p dir="ltr">2011</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">70%</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">Up to 48 months</p>
                                    </td>
                                    <td>
                                        <p dir="ltr">15%</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button wire:click="seType('two')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="false" aria-controls="collapseTwo">
                            Checklist
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" 
                @if ($selecType == 'two')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="">
                            <p><span style="font-weight: 400;">Job Letter stating </span><i><span
                                        style="font-weight: 400;">salary, position, length of employment</span></i><span
                                    style="font-weight: 400;">; plus last two months pay slips.&nbsp;</span><span
                                    style="font-weight: 400;">Print out of savings/current account transactions for at least
                                    6 months OR updated bank book (if&nbsp;</span><span
                                    style="font-weight: 400;">required)&nbsp;</span></p>
                            <ul>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="list-style-type: none;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 11 months OR updated bank book</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration
                                                Number (TRN) Card&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Valid ID (Driver’s
                                                Licence, Voter’s ID, COK ID); </span>VALID Jamaican <span
                                                style="font-weight: 400;">Driver’s Licence**&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                                photograph&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Application
                                                Form </span>with contact information of two relatives &amp; two references
                                            (non-related)</li>
                                        <li><span style="font-weight: 400;">Current Valuation **(done in the last 6 months)
                                                – Valuations must include front, back, embodied&nbsp;</span><span
                                                style="font-weight: 400;">chassis # on vehicle and VIN plate
                                                pictures.&nbsp;</span></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Completed Expense form and
                                        Statement of Affairs</span> (to be provided by COK)</li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in member’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Pro Forma Invoice (reflecting
                                        price of the vehicle</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Import Entry – C87 (all
                                        pages)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Certificate of Fitness
                                    </span>and <span style="font-weight: 400;">Certificate of Registration&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Copy of Title**&nbsp;</span>
                                </li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Evidence of deposit on motor
                                        vehicle – Receipt (see deposit and share requirements for motor&nbsp;</span><span
                                        style="font-weight: 400;">vehicles)&nbsp;</span></li>
                            </ul>
                            <p>Notation: Vehicle must be comprehensively insured &amp; open for one year. All loans will be
                                salary deducted where applicable</p>
                            <ul>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">&nbsp;</span>Guarantor
                                            (if applicable)</li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Job Letter stating
                                            </span><i><span style="font-weight: 400;">salary, position, length of
                                                    employment</span></i><span style="font-weight: 400;">; plus last two
                                                months pay slips&nbsp;</span></li>
                                        <li style="font-weight: 400;"><span style="font-weight: 400;">Print out of
                                                savings/current account transactions for at least 6 months OR updated bank
                                                book (if&nbsp;</span><span style="font-weight: 400;">required)&nbsp;</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>IF SELF-EMPLOYED: Financials prepared by a Certified Chartered Accountant &amp; stamped
                                </li>
                                <li style="list-style-type: none;">
                                    <ul>
                                        <li style="font-weight: 400;">
                                            <ul>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Income &amp; Expenditure
                                                    Statement for the last 2 years</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Balance Sheet</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Cash Flow Statement and Cash
                                                    Flow projections (for at least three years)</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Credit reference</li>
                                                <li style="font-weight: 400;"><span
                                                        style="font-weight: 400;">&nbsp;</span>Print out of savings/current
                                                    account transactions for at least 12 months OR updated&nbsp;bank book
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Tax Registration Number (TRN)
                                        Card and Valid ID (Driver’s Licence, Voter’s ID, COK ID)&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Passport size
                                        photograph&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Signed guarantor form
                                        witnessed by a Justice of the Peace&nbsp;</span></li>
                                <li style="font-weight: 400;"><span style="font-weight: 400;">Recent utility or any other
                                        bill in guarantor’s name with current address (</span>Proof of Address<span
                                        style="font-weight: 400;">)&nbsp;</span></li>
                            </ul>
                            <p><span style="font-weight: 400;">*</span><b>CONDITIONS APPLY </b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button wire:click="seType('three')" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="false" aria-controls="collapseThree">
                            Auto Loan Calculator
                            <span class="accordion-arrow left-arrow"><i class="fa fa-angle-right"></i></span>
                            <span class="accordion-arrow down-arrow"><i class="fa fa-angle-down"></i></span>
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" 
                @if ($selecType == 'three')
                    class="collapse show" 
                @else
                    class="collapse" 
                @endif  aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="vc_col-sm-6 wpb_column column_container vc_column_container col no-extra-padding inherit_tablet inherit_phone "
                            data-padding-pos="all" data-has-bg-color="false" data-bg-color="" data-bg-opacity="1"
                            data-animation="" data-delay="0">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <style>
                                                .form-1 .shmac-form .mui-form-group>.mui-form-control:focus~label {
                                                    color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-select:focus>select {
                                                    border-color: #dd9933;
                                                }

                                                .form-1 .shmac-form .mui-btn.submit-shmac,
                                                .form-1 .shmac-form .mui-btn.submit-shmac:hover {
                                                    background-color: #dd9933;
                                                }

                                                .form-1 .shmac-form input[type=text]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=email]:focus:not([readonly]),
                                                .form-1 .shmac-form input[type=password]:focus:not([readonly]) {
                                                    border: none;
                                                    border-bottom: 1px solid #dd9933;
                                                    box-shadow: 0 1px 0 0 #dd9933;
                                                }

                                                .form-1 .shmac-form [type="checkbox"]:checked+label:before {
                                                    border-right: 2px solid #dd9933;
                                                    border-bottom: 2px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 {
                                                    border: 5px solid #dd9933;
                                                }

                                                .shmac-div.divfrom-form-1 .schedule-table th {
                                                    color: #dd9933;
                                                }

                                                .form-1 .ui-mprogress .deter-bar,
                                                .form-1 .ui-mprogress .indeter-bar,
                                                .form-1 .ui-mprogress .query-bar,
                                                .form-1 .ui-mprogress .mp-ui-dashed {
                                                    background: #dd9933;
                                                }

                                                .noUi-handle:focus {
                                                    box-shadow: 0 0 7px #888;
                                                    border: 8px solid #dd9933;
                                                }

                                            </style>
                                            <style>
                                                .shmac-holder-1 {
                                                    background: url(https://cokcu.com/wp-content/uploads/2019/01/COK-Logo-Sm-e1547477533159.png);
                                                    background-size: cover;
                                                }

                                                .mui-panel.form-1 {
                                                    background-color: #efefef;
                                                }

                                                .form-1 .sliders {
                                                    margin-top: 15px;
                                                }

                                                .form-1 .noUi-target {
                                                    box-shadow: none;
                                                }

                                                .form-1 .noUi-handle::after,
                                                .form-1 .noUi-handle::before {
                                                    background: none;
                                                }

                                                .form-1 .noUi-horizontal .noUi-handle {
                                                    height: 20px;
                                                    top: -7px;
                                                    width: 20px;
                                                    border: 5px solid #dd9933;
                                                }

                                                .form-1 .noUi-horizontal {
                                                    height: 6px;
                                                }

                                                .form-1 .noUi-handle {
                                                    left: -8 !important;
                                                    top: -8px !important;
                                                }


                                                .shmac-sc.form-1 .sliders {
                                                    background-color: #dd9933;
                                                }

                                            </style>
                                            <div class="shmac-holder shmac-holder-1 ">
                                                <div class="mui-panel shmac-sc form-1">
                                                    <form class="shmac-form">
                                                        <div class="shmac-title">Auto Loan Calculator</div>
                                                        <div class="shmac-check">
                                                            <input wire:model="inmail_result" type="checkbox" id="checkflip-1"
                                                                class="checkflip send-email">
                                                            <label for="checkflip-1">Would like to get the result in an
                                                                email?</label>
                                                        </div>
                                                        <div class="mui-form-group shmac-email" style="display:none;">
                                                            <input  wire:model="result_email" type="text"
                                                                class="shmac-email-input mui-form-control mui-empty">
                                                            <label class="mui-form-floating-label">Email</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-amount">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Total purchase price of car you wish to purchase">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_amount" type="text"
                                                                class="mui-form-control amountinput_1 mui-dirty mui-not-empty"
                                                                data-decimal-character="."
                                                                data-digit-group-separator=",">
                                                            <label class="mui-form-floating-label non-empty-ipt">Loan
                                                                Amount</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-interest">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="Expected interest rate you intend to get for the vehicle">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_interest" type="text"
                                                                class="interest mui-form-control interestinput_1 mui-not-empty mui-dirty"
                                                                >
                                                            <label class="mui-form-floating-label non-empty-ipt">Interest
                                                                Rate (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-down">
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The percentage down payment you wish to put towards the motor vehicle.">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_downpayment" type="text"
                                                                class="downpay mui-form-control downpayinput_1 mui-dirty mui-not-empty"
                                                                data-minimum-value="0.00"
                                                                data-maximum-value="100.00">
                                                            <label class="mui-form-floating-label non-empty-ipt">Down
                                                                Payment (%)</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="mui-form-group shmac-term">
                                                            <div class="shmac-term-years">
                                                                <input wire:model="loan_term_years" type="checkbox" id="term-years-1"
                                                                    class="term-years term-group" checked="checked">
                                                                <label for="term-years-1">Years</label>
                                                            </div>
                                                            <div class="shmac-term-months">
                                                                <input wire:model="loan_term_month" type="checkbox" id="term-months-1"
                                                                    class="term-months term-group">
                                                                <label for="term-months-1">Months</label>
                                                            </div>
                                                            <a href="#" class="shmac-tip" title=" "
                                                                data-title="The expected amount of time it would take to pay off the loan for the vehicle purchased(maximum 8yrs)">
                                                                <span>
                                                                    <img src="https://i0.wp.com/cokcu.com/wp-content/plugins/shmac/assets/img/info_outline.png?w=1080&amp;ssl=1"
                                                                        class="shmac-info" width="16" height="16">
                                                                </span>
                                                            </a>
                                                            <input wire:model="loan_term_duration" type="text"
                                                                class="term mui-form-control terminput_1 mui-dirty mui-not-empty"
                                                                data-decimal-places-override="0">
                                                            <label class="mui-form-label">Term</label>
                                                            <div class="err-msg"></div>
                                                        </div>
                                                        <div class="progresso"> &nbsp;</div>
                                                        <div class="buttonRow">
                                                            <button wire:click="calculateLoan()" class="mui-btn submit-shmac"
                                                                data-mui-color="#dd9933">Submit</button>
                                                            <button class="mui-btn shmac-reset shmac-reset_1"
                                                                type="reset">Reset</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    @endif
</div>
