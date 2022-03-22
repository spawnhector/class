<div>
    <section class="text-blueGray-700">
        <div class="container items-center px-5 py-12 lg:px-20">
          <div class="{{container_body}}">
            <div class="mt-8">
              
              <div class="mt-2">
                    {!! $error !!}
                    {!! $success !!}
                  <div class="mt-2">
                    <label for="student" class="block text-sm font-medium text-neutral-600"> Select A Student</label>
                    <select wire:model="user" name="student" id="" class="{{input_button}}">
                        <option>Select Student</option>
                        @foreach (sidebar_getStudent() as $student)
                            <option value="{{$student->id}}">{{$student->fisrt_nm}}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="mt-2">
                    <label for="number" class="block text-sm font-medium text-neutral-600"> Student Phone Number </label>
                    <div class="mt-1">
                      <input wire:model="phone_number" id="number" name="number" type="number" required="" placeholder="Student Number" class="{{input_button}}">
                    </div>
                  </div>
                  <div>
                    <button type="submit" class="{{submit_button}}" wire:click="addNumber()"> Add Number </button>
                  </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
