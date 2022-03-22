<div>
        
        <section class="text-blueGray-700">
            <div class="container items-center px-5 py-12 lg:px-20">
              <div class="{{container_body}}">
                <div class="mt-8">
                  
                {!! $error !!}
        
                  <div class="mt-6">
                      <div>
                        <label for="email" class="block text-sm font-medium text-neutral-600"> Email address </label>
                        <div class="mt-1">
                          <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required="" placeholder="Your Email" class="{{input_button}}">
                        </div>
                      </div>
                      {!! $result !!}
                      <div>
                        <button type="submit" class="{{submit_button}}" wire:click="checkDetails()"> Login </button>
                      </div>
                    <div class="relative my-4">
                      <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                      </div>
                      <div class="relative flex justify-center text-sm">
                        <span class="px-2 text-neutral-600 bg-white"> Or continue with </span>
                      </div>
                    </div>
                    <div>
                      <button type="submit" class=" {{google_submit}} ">
                        <div class="flex items-center justify-center">
                          {!!google_svg!!}
                          <span class="ml-4"> Log in with Google</span>
                        </div>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        
</div>
