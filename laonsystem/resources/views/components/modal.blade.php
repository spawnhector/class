<div>
    <!-- component -->
    <link rel="stylesheet" href="{{asset('css/modal.css')}}">
  
  <section class="">
    <button  onclick="document.getElementById('{{$btn_tag}}').showModal()" id="btn" class="{{$btn_class}}">{{$button}}</button>
  </section>
  <style>
      .contact-wrap{
        max-width:828px;
      }
  </style>
  <dialog id="{{$btn_tag}}" class="{{$modal_class}}" style="margin-top: 57px;">
          
     <div class="flex flex-col w-full h-auto ">
          <!-- Header -->
          <div style="display: flex;">
            <div style="width: 100%;font-size: 21px;position: relative;text-align: center;bottom: 19px;color: white;">
                  {{$modal_header}}
            </div>
            <!--Header End-->
          </div>
            <!-- Modal Content-->
             <div class="flex w-full h-auto py-10 px-2 justify-center items-center rounded text-center text-gray-500">
               {{$content}}
            </div>
            <!-- End of Modal Content-->
          </div>
  </dialog>
</div>