<div>
  <section class="text-blueGray-700">
    <div class="container items-center px-5 py-12 lg:px-20">
      <div class="{{container_body}}">
        <div class="mt-2">
          {!! $status !!}
          <div class="d-flex justify-content-center paginate">
              {!! $paginate !!}
          </div>
              <div class="mt-2">
                  <div class="mt-2">
                    <label for="student" class="block text-sm font-medium text-neutral-600"> Select A Student</label>
                    <select wire:model="user" name="student" id="" class="{{input_button}}" wire:change="getNumber()">
                        <option>Select Student</option>
                        @foreach (sidebar_getStudent() as $student)
                            <option value="{{ $student->id }}">{{ $student->fisrt_nm }}</option>
                        @endforeach
                    </select>
                  </div>
                  {!! $result !!}
              </div>
            </div>
          </div>
        </div>
    </section>
</div>
