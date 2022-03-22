
<div>   
    <section class="text-blueGray-700">
        <div class="container items-center px-5 py-12 lg:px-20">
          <div class="{{container_body}}">
            <div class="mt-8">
              
              <div class="mt-2">
                    {!! $error !!}
                    {!! $success !!}
                  <div>
                    <label for="fstudent_first_nm" class="block text-sm font-medium text-neutral-600"> Student First Name </label>
                    <div class="mt-1">
                      <input wire:model="student_first_nm" id="student_first_nm" name="student_first_nm" type="text" required="" placeholder="{{$edit_first_nm}}" class="{{input_button}}">
                    </div>
                  </div>
                  <div class="mt-2">
                    <label for="student_last_nm" class="block text-sm font-medium text-neutral-600"> Student last Name </label>
                    <div class="mt-1">
                      <input wire:model="student_last_nm" id="student_last_nm" name="student_last_nm" type="text" required="" placeholder="{{$edit_last_nm}}" class="{{input_button}}">
                    </div>
                  </div>
                  <div class="mt-2">
                    <label for="student_dob" class="block text-sm font-medium text-neutral-600"> Student D.O.B </label>
                    <div class="mt-1">
                      <input wire:model="student_dob" id="student_dob" name="student_dob" type="date" required="" placeholder="Date Of Birth" class="{{input_button}}">
                    </div>
                  </div>
                  <div class="mt-2">
                    <label for="email" class="block text-sm font-medium text-neutral-600"> Email address </label>
                    <div class="mt-1">
                      <input wire:model="student_email" id="email" name="email" type="email" autocomplete="email" required="" placeholder="{{$edit_email}}" class="{{input_button}}">
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="{{submit_button}}" wire:click="editStudent()"> Update Student </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>