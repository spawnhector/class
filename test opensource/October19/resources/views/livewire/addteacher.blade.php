<div>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/admin.dashboard.css')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                      <a href="{{ route('admin.home') }}">
                        Dashboard
                      </a>
                      <a class="ml-2" href="{{ route('viewteacher') }}">
                        View Teacher's
                      </a>
                    </div>
                    <div class="card-body">
                        {{$status}}
                        <section class="text-blueGray-700">
                          <div class="container items-center px-5 py-12 lg:px-20">
                            <div class="{{add_teacher_div}}">
                              <div class="mt-2">
                                {!! $result !!}
                                <div class="">
                                    <div class="mt-2">
                                      <label for="email" class="block text-sm font-medium text-neutral-600"> Teacher's Name </label>
                                      <div class="mt-1">
                                        <input wire:model="teacher_nm" id="name" name="teacher_nm" type="text" placeholder="Teacher Name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                                        @error('teacher_nm')
                                            <div class="message text-center text-red-500"> {{ $message }}</div>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="mt-2">
                                      <label for="subject" class="block text-sm font-medium text-neutral-600"> Select A Subject </label>
                                      <div class="mt-1">
                                        <select wire:model="subject_id"  id="" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" style="height: 57px">
                                            <option value="">Select Subject</option>
                                          {{allOptionSubject()}}
                                        </select>
                                        @error('subject_id')
                                            <div class="message text-center text-red-500"> {{ $message }} </div>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="space-y-1 mt-2">
                                      <label for="password" class="block text-sm font-medium text-neutral-600"> Password </label>
                                      <div class="mt-1">
                                        <input wire:model="password" id="password" type="password" autocomplete="current-password" placeholder="Your Password" class="{{password_btn}}">
                                      @error('password')
                                        <div class="message text-center text-red-500"> {{ $message }} </div>
                                      @enderror
                                      </div>
                                    </div>
                                    <div class="mt-3">
                                      <button type="submit" class="{{submit_btn}}" style="{{$success_style}}" wire:click="addTeacher"> {{$submitButton}} </button>
                                    </div>
                                    <div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
