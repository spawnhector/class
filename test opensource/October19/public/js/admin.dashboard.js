$modal = $('.modal-frame');
$overlay = $('.modal-overlay');

/* Need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */
$modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){
  if($modal.hasClass('state-leave')) {
    $modal.removeClass('state-leave');
  }
});

$('.close').on('click', function(){
  $overlay.removeClass('state-show');
  $modal.removeClass('state-appear').addClass('state-leave');
});


$('.open').on('click', function(){
    $overlay.addClass('state-show');
    $modal.removeClass('state-leave').addClass('state-appear');
    var _token = $("input[name='_token']").val();
    let fix = window.location.protocol+window.location.host
    let domain = fix+'/getstudents'
    let url = new URL(domain);
    $.ajax({
        type: 'POST',
        url: url,
        data: { _token: _token},
        success: function (data) {
            let body = $('.modal-body-body'),
            info = data.info,
            card = ``

            if (info.length == 0) {
                body.html(`
                    No User's Added
                `)
            } else {
                body.addClass('to-scroll')
                
                info.forEach(element => {
                    // console.log(element)
                    let str = element.created_at,
                    date = new Date(str),
                    joined = date.toString(),
                    svg = ``

                    if (element.gender == 'male') {
                        svg = `
                            <img class="img" src="{{asset('storage/img/userMale.png')}}" alt="">
                        `
                    } else if (element.gender == 'female') {
                        svg = `
                            <img class="img" src="{{asset('storage/img/dagobert83_female_user_icon.png')}}" alt="">
                        `
                    }

                    card += `
                        <div class="card1 green">
                            <div class="additional">
                                <div class="user-card">
                                <div class="level center delete-${element.id}" onclick="deleteStudent(${element.id})">
                                    <div class="" onmouseover="getDeleteBtn(${element.id})">
                                        User ID: ${element.id}
                                    </div>
                                </div>
                                    <div class="points center" onclick="editStudent(${element.id})">
                                        Edit
                                    </div>
                                
                                ${svg}
                                </div>
                                <div class="more-info">
                                <h1>${element.first_nm} ${element.last_nm}</h1>
                                <div class="coords">
                                    <span>Joined: ${joined}</span>
                                </div>
                                <div class="stats ml-2">
                                    <div>
                                    <div class="title">Subject</div>
                                    <i class="fa fa-trophy"></i>
                                    <div class="value">0</div>
                                    </div>
                                    <div>
                                    <div class="title ml-4">Payment</div>
                                    <i class="fa fa-gamepad"></i>
                                    <div class="value">0</div>
                                    </div>
                                    <div>
                                    <div class="title ml-4">Transactions</div>
                                    <i class="fa fa-group"></i>
                                    <div class="value">0</div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="general">
                                <h1>${element.first_nm} ${element.last_nm}</h1>
                                <p><span>Joined: ${joined}</span></p>
                                <span class="more">Mouse over the card for more info</span>
                            </div>
                        </div>
                    `

                });
                
                body.html(`
                    ${card}
                `)

            }
        }
    })
});

$('.openSubject').on('click', function(){
    $overlay.addClass('state-show');
    $modal.removeClass('state-leave').addClass('state-appear');
    var _token = $("input[name='_token']").val();
    let fix = window.location.protocol+window.location.host
    let domain = fix+'/getsubjects'
    let url = new URL(domain);
    $.ajax({
        type: 'POST',
        url: url,
        data: { _token: _token},
        success: function (data) {
            let body = $('.modal-body-body'),
            info = data.info,
            card = ``

            if (info.length == 0) {
                body.html(`
                    No Subject's Added
                `)
            } else {
                body.addClass('to-scroll')
                let  card = ``
                info.forEach(element => {
                    // console.log(element)
                    let str = element.created_at,
                    date = new Date(str),
                    joined = date.toString()

                    card += `
                    <div class="card2 blue-grey darken-1">
                        <div class="card2-content white-text">
                            <h1>${element.subject_nm}</h1>
                            <div>Price: $${element.cost_amt}</div>
                            <div class="edit-subject center" onclick="editSubject(${element.id})">
                                Edit
                            </div>
                            <div class="delete-subject center" onclick="deleteSubject(${element.id})">
                                Delete
                            </div>
                        </div>
                    </div>
                    `



                });
                
                body.html(`
                    ${card}
                `)

            }
        }
    })
});


// students
function deleteStudent(e){
    var _token = $("input[name='_token']").val();
    let fix = window.location.protocol+window.location.host
    let domain = fix+'/deletestudents'
    let url = new URL(domain);
    $.ajax({
        type: 'POST',
        url: url,
        data: { _token: _token, id: e},
        success: function (data) {
            let body = $('.modal-body-body'),
            info = data.info,
            card = ``

            if (info.length == 0) {
                body.html(`
                    No User's Added
                `)
            } else {
                body.addClass('to-scroll')
                
                info.forEach(element => {
                    // console.log(element)
                    let str = element.created_at,
                    date = new Date(str),
                    joined = date.toString(),
                    svg = ``

                    if (element.gender == 'male') {
                        svg = `
                            <img class="img" src="{{asset('storage/img/userMale.png')}}" alt="">
                        `
                    } else if (element.gender == 'female') {
                        svg = `
                            <img class="img" src="{{asset('storage/img/dagobert83_female_user_icon.png')}}" alt="">
                        `
                    }

                    card += `
                        <div class="card1 green">
                            <div class="additional">
                                <div class="user-card">
                                <div class="level center delete-${element.id}" onclick="deleteStudent(${element.id})">
                                    <div class="" onmouseover="getDeleteBtn(${element.id})">
                                        User ID: ${element.id}
                                    </div>
                                </div>
                                    <div class="points center" onclick="editStudent(${element.id})">
                                        Edit
                                    </div>
                                
                                ${svg}
                                </div>
                                <div class="more-info">
                                <h1>${element.first_nm} ${element.last_nm}</h1>
                                <div class="coords">
                                    <span>Joined: ${joined}</span>
                                </div>
                                <div class="stats ml-2">
                                    <div>
                                    <div class="title">Subject</div>
                                    <i class="fa fa-trophy"></i>
                                    <div class="value">0</div>
                                    </div>
                                    <div>
                                    <div class="title ml-4">Payment</div>
                                    <i class="fa fa-gamepad"></i>
                                    <div class="value">0</div>
                                    </div>
                                    <div>
                                    <div class="title ml-4">Transactions</div>
                                    <i class="fa fa-group"></i>
                                    <div class="value">0</div>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="general">
                                <h1>${element.first_nm} ${element.last_nm}</h1>
                                <p><span>Joined: ${joined}</span></p>
                                <span class="more">Mouse over the card for more info</span>
                            </div>
                        </div>
                    `

                });
                
                body.html(`
                    ${card}
                `)

            }
        }
    })
}

function editStudent(e){
    var _token = $("input[name='_token']").val();
    let fix = window.location.protocol+window.location.host
    let domain = fix+'/editstudents'
    let url = new URL(domain);
    $.ajax({
        type: 'POST',
        url: url,
        data: { _token: _token, id: e},
        success: function (data) {
            // console.log(data.info)
            let body = $('.modal-body-body'),
            info = data.info
            body.removeClass('to-scroll')
            body.html(`
                <section class="text-blueGray-700">
                    <div class="container items-center px-5 py-12 lg:px-20">
                    <div class="flex flex-col w-full
                    max-w-md
                    p-10
                    mx-auto
                    my-6
                    transition
                    duration-500
                    ease-in-out
                    transform
                    bg-white
                    rounded-lg
                    md:mt-0
                ">
                    <div class="mt-8">
                        <div class="mt-6">
                            <form action="{{route('admin.updatestudent')}}" method="POST" class="space-y-6">
                                @csrf
                            <div>
                                <div class="mt-1">
                                <input id="text" name="first_nm" type="first_nm" autocomplete="first_nm" required="" placeholder="Student first name" value="${info.first_nm}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                <input hidden id="hidden_id" name="id" value="${info.id}">
                                </div>
                            </div>
                            <div>
                                <div class="mt-1">
                                <input id="text" name="last_nm" type="last_nm" autocomplete="last_nm" required="" placeholder="Student last name"  value="${info.last_nm}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <div class="mt-1">
                                <input id="dob" name="dob" type="date" autocomplete="date" required="" placeholder="Your date of birth" value="${info.dob}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <div class="mt-1">
                                <input id="class" name="class" type="text" autocomplete="class" required="" placeholder="Input Class" value="${info.class}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <div class="mt-1">
                                <input id="number" name="number" type="number" autocomplete="number" required="" placeholder="Student phone number" value="${info.phone}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <div>
                                <div class="mt-1">
                                <input id="email" name="email" type="email" autocomplete="email" required="" placeholder="Student Email" value="${info.email}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                </div>
                            </div>
                            <label class="block ml-2 text-sm text-neutral-600"> Gender </label>
                            <div class="flex items-center">
                                <input id="male" name="male" type="checkbox" placeholder="Your gender" class="
                                w-4
                                h-4
                                text-blue-400
                                border-gray-200
                                rounded
                                focus:ring-blue-500
                            ">
                                <label for="male" class="block ml-2 text-sm text-neutral-600"> Male </label>
                                <input id="female" name="female" type="checkbox" placeholder="Your gender" class="
                                w-4
                                h-4
                                text-blue-400
                                border-gray-200
                                rounded
                                focus:ring-blue-500
                            ">
                                <label for="female" class="block ml-2 text-sm text-neutral-600"> Female </label>
                                </div>
                            
                                <button type="submit" class="btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Updating Student">Update</button>
                            </form>
                            <div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
            `)
            
            if (info.gender == 'male') {
                $('#male').click()
            } else if (info.gender == 'female') {
                $('#female').click()
            }
            
        }
    })
}

function getDeleteBtn(e){
    $('.delete-'+e+'').html(`
        <div class="level center user-${e}">
            <span class="delete">
                Delete
            </span>
        </div>
    `)
}

function getUserBtn(e){
    $('.delete-'+e+'').html(`
        <div >
            User ID: ${e}
        </div>
    `)
}

$('.add-student').on('click', function(){
    $('.modal-body-body').removeClass('to-scroll')
    $('.modal-body-body').html(`
    <section class="text-blueGray-700">
        <div class="container items-center px-5 py-12 lg:px-20">
          <div class="flex flex-col w-full
        max-w-md
        p-10
        mx-auto
        my-6
        transition
        duration-500
        ease-in-out
        transform
        bg-white
        rounded-lg
        md:mt-0
      ">
            <div class="mt-8">
              <div class="mt-6">
                <form action="{{route('admin.addstudent')}}" method="POST" class="space-y-6">
                    @csrf
                  <div>
                    <div class="mt-1">
                      <input id="text" name="first_nm" type="first_nm" autocomplete="first_nm" required="" placeholder="Student first name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    </div>
                  </div>
                  <div>
                    <div class="mt-1">
                      <input id="text" name="last_nm" type="last_nm" autocomplete="last_nm" required="" placeholder="Student last name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    </div>
                  </div>
                  <div>
                    <div class="mt-1">
                      <input id="dob" name="dob" type="date" autocomplete="date" required="" placeholder="Your date of birth" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    </div>
                  </div>
                  <div>
                    <div class="mt-1">
                      <input id="class" name="class" type="text" autocomplete="class" required="" placeholder="Input Class" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    </div>
                  </div>
                  <div>
                    <div class="mt-1">
                      <input id="number" name="number" type="number" autocomplete="number" required="" placeholder="Student phone number" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    </div>
                  </div>
                  <div>
                    <div class="mt-1">
                      <input id="email" name="email" type="email" autocomplete="email" required="" placeholder="Student Email" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                    </div>
                  </div>
                  <label class="block ml-2 text-sm text-neutral-600"> Gender </label>
                  <div class="flex items-center">
                      <input id="male" name="male" type="checkbox" placeholder="Your gender" class="
                    w-4
                    h-4
                    text-blue-400
                    border-gray-200
                    rounded
                    focus:ring-blue-500
                  ">
                      <label for="male" class="block ml-2 text-sm text-neutral-600"> Male </label>
                      <input id="female" name="female" type="checkbox" placeholder="Your gender" class="
                    w-4
                    h-4
                    text-blue-400
                    border-gray-200
                    rounded
                    focus:ring-blue-500
                  ">
                      <label for="female" class="block ml-2 text-sm text-neutral-600"> Female </label>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Student</button>
                </form>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    `)
});

// subject
$('.add-subject').on('click', function(){
    $('.modal-body-body').removeClass('to-scroll')
    $('.modal-body-body').html(`
    <section class="text-blueGray-700">
        <div class="container items-center px-5 py-12 lg:px-20">
          <div class="flex flex-col w-full
        max-w-md
        p-10
        mx-auto
        my-6
        transition
        duration-500
        ease-in-out
        transform
        bg-white
        rounded-lg
        md:mt-0
      ">
            <div class="mt-8">
              <div class="mt-6">
                <form action="{{route('admin.addsubject')}}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <div class="mt-1">
                        <input id="text" name="subject_nm" type="subject_nm" autocomplete="subject_nm" required="" placeholder="Subject name" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                        </div>
                    </div>
                    <div>
                        <div class="mt-1">
                        <input id="text" name="subject_price" required="" placeholder="Subject Price" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Student</button>
                </form>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    `)
});

function editSubject(e){
    var _token = $("input[name='_token']").val();
    let fix = window.location.protocol+window.location.host
    let domain = fix+'/editsubject'
    let url = new URL(domain);
    $.ajax({
        type: 'POST',
        url: url,
        data: { _token: _token, id: e},
        success: function (data) {
            console.log(data.info)
            let body = $('.modal-body-body'),
            info = data.info
            body.removeClass('to-scroll')
            body.html(`
                <section class="text-blueGray-700">
                    <div class="container items-center px-5 py-12 lg:px-20">
                    <div class="flex flex-col w-full
                    max-w-md
                    p-10
                    mx-auto
                    my-6
                    transition
                    duration-500
                    ease-in-out
                    transform
                    bg-white
                    rounded-lg
                    md:mt-0
                ">
                        <div class="mt-8">
                        <div class="mt-6">
                            <form action="{{route('admin.updatesubject')}}" method="POST" class="space-y-6">
                                @csrf
                                <div>
                                    <div class="mt-1">
                                    <input id="text" name="subject_nm" type="subject_nm" autocomplete="subject_nm" required="" placeholder="Subject name" value="${info.subject_nm}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                    <input hidden name="id" value="${info.id}">
                                    </div>
                                </div>
                                <div>
                                    <div class="mt-1">
                                    <input id="text" name="subject_price" required="" placeholder="Subject Price" value="${info.cost_amt}" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Student</button>
                            </form>
                            <div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
                `
            )
            
            if (info.gender == 'male') {
                $('#male').click()
            } else if (info.gender == 'female') {
                $('#female').click()
            }
            
        }
    })
}

function deleteSubject(e){
    var _token = $("input[name='_token']").val();
    let fix = window.location.protocol+window.location.host
    let domain = fix+'/deletesubjects'
    let url = new URL(domain);
    $.ajax({
        type: 'POST',
        url: url,
        data: { _token: _token, id:e},
        success: function (data) {
            let body = $('.modal-body-body'),
            info = data.info,
            card = ``

            if (info.length == 0) {
                body.html(`
                    No Subject's Added
                `)
            } else {
                body.addClass('to-scroll')
                let  card = ``
                info.forEach(element => {
                    // console.log(element)
                    let str = element.created_at,
                    date = new Date(str),
                    joined = date.toString()

                    card += `
                    <div class="card2 blue-grey darken-1">
                        <div class="card2-content white-text">
                            <h1>${element.subject_nm}</h1>
                            <div>Price: $${element.cost_amt}</div>
                            <div class="edit-subject center" onclick="editSubject(${element.id})">
                                Edit
                            </div>
                            <div class="delete-subject center" onclick="deleteSubject(${element.id})">
                                Delete
                            </div>
                        </div>
                    </div>
                    `



                });
                
                body.html(`
                    ${card}
                `)

            }
        }
    })
}
