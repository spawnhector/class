<div>
    <div wire:click="clearModal()" onclick="document.getElementById('{{$btn_tag}}').close();" class="flex w-1/12 h-auto justify-center cursor-pointer close-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ed7001" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </div>
    @if ($loanType)
        <div class="back-btn">
            <i class="fas fa-arrow-left" wire:click="clearModal()"></i>
        </div>
        @if ($quickLoan)
            <link rel="stylesheet" href="{{asset('css/successCard.css')}}">
            <div id="container">
                <div id="success-box">
                <div class="face">
                    <div class="eye"></div>
                    <div class="eye right"></div>
                    <div class="mouth happy"></div>
                </div>
                <div class="shadow scale"></div>
                <div class="message"><h1 class="alert">Success!</h1><p>yay, everything is working.</p></div>
                {{-- <button class="button-box"><h1 class="green">continue</h1></button> --}}
                </div>
            </div>
        @else
            <link rel="stylesheet" href="{{asset('css/attachfile.css')}}">
            <div class="">
                <h5 style="color:white">Apply For A {{$loanType}} Loan.</h5>
                {{$result}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input wire:model="loan_amount" type="number" class="form-control" placeholder="Loan Amount">
                                @error('loan_amount') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select  wire:model="branch" class="form-control">
                                    <option value="">Select Your Branch</option>
                                    @foreach ($branches::get() as $item)
                                        <option value="{{$item->id}}">{{$item->branch_nm}}</option>
                                    @endforeach
                                </select>
                                @error('branch') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input  wire:model="employeer_name" type="text" class="form-control" placeholder="Name Of Employer">
                                @error('employeer_name') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select wire:model="employment_duration" class="form-control">
                                    <option>Employment Duration</option>
                                    <option value="test">test</option>
                                </select>
                                @error('employment_duration') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                    </div>
                    <h5 style="color:white">Personal Information</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input wire:model="full_nm" type="text" class="form-control" placeholder="Full Name">
                                @error('full_nm') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input wire:model="trn" type="number" class="form-control" placeholder="Tax-Payer Registration Number (TRN)">
                                @error('trn') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input wire:model="number" type="number" class="form-control" placeholder="Contact Number">
                                @error('number') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input wire:model="email" type="email" class="form-control" placeholder="Email Address">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                    </div>
                    <h5 style="color:white">Upload File</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="label">Identification</div>
                                <label for="file-picker" class="file-picker">
                                    Add File.
                                </label>
                                <input wire:model="identity" id="file-picker" name="file-picker" type="file"/>
                                <br>@error('identity') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="label">Payslip</div>
                                <label for="file-picker1" class="file-picker1">
                                    Add File.
                                </label>
                                <input wire:model="pay_slip" id="file-picker1" name="file-picker1" type="file"/>
                                <br>@error('pay_slip') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="label">Proof of address</div>
                                <label for="file-picker2" class="file-picker2">
                                    Add File.
                                </label>
                                <input wire:model="poa" id="file-picker2" name="file-picker2" type="file"/>
                                <br>@error('poa') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="label">Job Letter</div>
                                <label for="file-picker3" class="file-picker3">
                                    Add File.
                                </label>
                                <input wire:model="job_letter" id="file-picker3" name="file-picker3" type="file"/>
                                <br>@error('job_letter') <span class="error">{{ $message }}</span> @enderror
                            </div>	
                        </div>
                    </div>
                    <div class="form-group">
                        <input wire:click="quickApply()" type="submit" class="btn btn-block" value="Submit">
                    </div>
            </div>
            <script src="{{asset('js/attachfile.js')}}"></script>
        @endif
    @else
        <link rel="stylesheet" href="{{asset('css/slideshow.css')}}">
        <div class="CSSgal">

            <!-- Don't wrap targets in parent -->
            <s id="s1"></s> 
            <s id="s2"></s>
            <s id="s3"></s>
            <s id="s4"></s>
        
            <div class="slider">
                <div>
                    <div id="container">
                        <div>
                            <div class="message" style="display:flex;">
                                <div>
                                    <img class="img" src="{{asset('images/download.png')}}" alt="">
                                </div>
                                <div class="">
                                    <div class="loan-head">Auto Loan</div>
                                    <p style="font-size: 16px">What’s the best way to finance that luxury dream car? apply for a motor vehicle loan. Get with up to 100% financing on motor vehicle loans for 2020 and newer motor vehicles!</p>
                                    <div class="" style="display: flex">
                                        <button wire:click="loanType('Auto')" class="btn apply-btn">Apply</button>
                                        <x-modal>
                                            <x-slot name="modal_class">
                                                contact-wrap primary-bg
                                            </x-slot>
                                            <x-slot name="btn_tag">
                                                autoinfo
                                            </x-slot>
                                            <x-slot name="modal_header">
                                                Loan Info.
                                            </x-slot>
                                            <x-slot name="btn_class">
                                                btn info-btn
                                            </x-slot>
                                            <x-slot name="button">
                                                Info
                                            </x-slot>
                                            <x-slot name="content">
                                                @livewire('index.loaninfo',[
                                                    'btn_tag'=>'autoinfo',
                                                    'loanType'=>'autoloan'
                                                ])
                                            </x-slot>
                                        </x-modal>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-footer">
                                <p> AS LOW AS 7.45%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="container">
                        <div>
                            <div class="message" style="display:flex;">
                                <div>
                                    <img class="img" src="{{asset('images/home.png')}}" alt="">
                                </div>
                                <div class="">
                                    <div class="loan-head">Home Loan</div>
                                    <p style="font-size: 16px">Have you found your dream house?
                                        Let us help you to make that purchase a reality with Loan for Home
                                    </p>
                                    <div class="" style="display: flex">
                                        <button wire:click="loanType('Home')" class="btn apply-btn">Apply</button>
                                        <x-modal>
                                            <x-slot name="modal_class">
                                                contact-wrap primary-bg
                                            </x-slot>
                                            <x-slot name="btn_tag">
                                                homeinfo
                                            </x-slot>
                                            <x-slot name="modal_header">
                                                Loan Info.
                                            </x-slot>
                                            <x-slot name="btn_class">
                                                btn info-btn
                                            </x-slot>
                                            <x-slot name="button">
                                                Info
                                            </x-slot>
                                            <x-slot name="content">
                                                @livewire('index.loaninfo',[
                                                    'btn_tag'=>'homeinfo',
                                                    'loanType'=>'homeloan'
                                                ])
                                            </x-slot>
                                        </x-modal>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-footer">
                                <p> AS LOW AS 7.45%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="container">
                        <div>
                            <div class="message" style="display:flex;">
                                <div class="">
                                    <div class="loan-head">Personal Loan</div>
                                    <p style="font-size: 16px">With our Personal Advance loan, you can get between $300,000 and $5 million, and repay over 5 years. No collateral or security required.</p>
                                    <div class="" style="display: flex">
                                        <button wire:click="loanType('Personal')" class="btn apply-btn">Apply</button>
                                        <x-modal>
                                            <x-slot name="modal_class">
                                                contact-wrap primary-bg
                                            </x-slot>
                                            <x-slot name="btn_tag">
                                                personalinfo
                                            </x-slot>
                                            <x-slot name="modal_header">
                                                Loan Info.
                                            </x-slot>
                                            <x-slot name="btn_class">
                                                btn info-btn
                                            </x-slot>
                                            <x-slot name="button">
                                                Info
                                            </x-slot>
                                            <x-slot name="content">
                                                @livewire('index.loaninfo',[
                                                    'btn_tag'=>'personalinfo',
                                                    'loanType'=>'personaloan'
                                                ])
                                            </x-slot>
                                        </x-modal>
                                    </div>
                                </div>
                                <div>
                                    <img class="img" src="{{asset('images/personal.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="loan-footer">
                            <p class="apr-left"> AS LOW AS 7.45%</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div id="container">
                        <div>
                            <div class="message" style="display:flex;">
                                <div>
                                    <img class="img" src="{{asset('images/business.png')}}" alt="">
                                </div>
                                <div class="">
                                    <div class="loan-head">Business Loan</div>
                                    <p style="font-size: 16px">What’s the best way to finance that luxury dream car? apply for a motor vehicle loan. You can get with up to 100% financing on motor vehicle loans for 2020 and newer motor vehicles!</p>
                                    <div class="" style="display: flex">
                                        <button wire:click="loanType('Business')" class="btn apply-btn">Apply</button>
                                        <x-modal>
                                            <x-slot name="modal_class">
                                                contact-wrap primary-bg
                                            </x-slot>
                                            <x-slot name="btn_tag">
                                                businessinfo
                                            </x-slot>
                                            <x-slot name="modal_header">
                                                Loan Info.
                                            </x-slot>
                                            <x-slot name="btn_class">
                                                btn info-btn
                                            </x-slot>
                                            <x-slot name="button">
                                                Info
                                            </x-slot>
                                            <x-slot name="content">
                                                @livewire('index.loaninfo',[
                                                    'btn_tag'=>'businessinfo',
                                                    'loanType'=>'businessloan'
                                                ])
                                            </x-slot>
                                        </x-modal>
                                    </div>
                                </div>
                            </div>
                            <div class="loan-footer">
                                <p> AS LOW AS 7.45%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="prevNext">
            <div><a href="#s4"></a><a href="#s2"></a></div>
            <div><a href="#s1"></a><a href="#s3"></a></div>
            <div><a href="#s2"></a><a href="#s4"></a></div>
            <div><a href="#s3"></a><a href="#s1"></a></div>
            </div>
        
            <div class="bullets">
            <a href="#s1">1</a>
            <a href="#s2">2</a>
            <a href="#s3">3</a>
            <a href="#s4">4</a>
            </div>
      
        </div>
    @endif
</div>
