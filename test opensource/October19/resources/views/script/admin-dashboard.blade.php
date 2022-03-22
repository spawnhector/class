<script>
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
    
    function openStudent(){
        var _token = $("input[name='_token']").val();
        let body = $('.modal-body-body')
        body.removeClass('to-scroll')
        body.html(`<div class="loading">Loading&#8230;</div>`)
        let fix = window.location.protocol+window.location.host
        let domain = fix+'/getstudents'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token},
            success: function (data) {
                let info = data.info.data,
                subject = data.subject,
                card = ``

                console.log(subject)
                if (info.length == 0) {
                    body.html(`
                        No User's Added
                    `)
                } else {
                    body.addClass('to-scroll')
                    
                    info.forEach(element => {
                        let subCount = 0
                        subject.forEach(element1 => {
                            if (element.id === element1.student_id) {
                                ++subCount
                            }
                        });
                        // console.log(data.subject)
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
                                    <h1><a href="viewstudents/${element.id}">${element.first_nm} ${element.last_nm}</a></h1>
                                    <div class="coords">
                                        <span>Joined: ${joined}</span>
                                    </div>
                                    <div class="stats ml-2">
                                        <div class="addSubject-${element.id}">
                                            <div class="bounce" onclick="addStudentSubject(${element.id})"><p>Add</p>
                                                <img src="https://static.thenounproject.com/png/196765-200.png" style="max-height: 40px; width auto;"/>
                                            </div>
                                            <div class="title" >Subject</div>
                                            <div class="value">${subCount}</div>
                                        </div>
                                        <div>
                                        <div class="title ml-4">Payment</div>
                                        <div class="value"><a href="getsinglepayment/${element.id}">View</a></div>
                                        </div>
                                        <div>
                                        <div class="title ml-4">Transactions</div>
                                            <div class="value"><a href="getsingletransaction/${element.id}">View</a></div>
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
                    getPagenate('modal-body-body',data.info.links.length,0,'student')
                    
                }
            }
        })
    }
 
    function openSubject(){
        var _token = $("input[name='_token']").val();
        let fix = window.location.protocol+window.location.host
        let body = $('.modal-body-body')
        body.removeClass('to-scroll')
        body.html(`<div class="loading">Loading&#8230;</div>`)
        let domain = fix+'/getsubjects'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token},
            success: function (data) {
                let info = data.info.data,
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

                    getPagenate('modal-body-body',data.info.links.length,0,'subject')
                }
            }
        })
    }

    $('.open').on('click', function(){
        $overlay.addClass('state-show');
        $modal.removeClass('state-leave').addClass('state-appear');

        $('.modal-head').html(`<span class=" modal-txt add-student" onclick="addStudent()">Add Student</span>`)

        openStudent()
    });

    $('.openSubject').on('click', function(){
        $overlay.addClass('state-show');
        $modal.removeClass('state-leave').addClass('state-appear');

        $('.modal-head').html(`<span class="modal-txt add-subject" onclick="addSubject()">Add Subject</span>`)

        openSubject()
    });

    // students
    function deleteStudent(e){
        var _token = $("input[name='_token']").val();
        let fix = window.location.protocol+window.location.host
        let body = $('.modal-body-body')
        body.removeClass('to-scroll')
        body.html(`<div class="loading">Loading&#8230;</div>`)
        let domain = fix+'/deletestudents'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, id: e},
            success: function (data) {
                let info = data.info.data,
                    subject = data.subject,
                card = ``

                if (info.length == 0) {
                    body.html(`
                        No User's Added
                    `)
                } else {
                    body.addClass('to-scroll')
                    
                    info.forEach(element => {
                        let subCount = 0
                        subject.forEach(element1 => {
                            if (element.id === element1.student_id) {
                                ++subCount
                            }
                        });
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
                                        <div class="addSubject-${element.id}">
                                            <div class="bounce" onclick="addStudentSubject(${element.id})"><p>Add</p>
                                                <img src="https://static.thenounproject.com/png/196765-200.png" style="max-height: 40px; width auto;"/>
                                            </div>
                                            <div class="title" >Subject</div>
                                            <div class="value">${subCount}</div>
                                        </div>
                                        <div>
                                        <div class="title ml-4">Payment</div>
                                        <div class="value">0</div>
                                        </div>
                                        <div>
                                        <div class="title ml-4">Transactions</div>
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

                    getPagenate('modal-body-body',data.info.links.length,0,'student')
                }
            }
        })
    }

    function editStudent(e){
        $('.modal-head').html(`<i class="fas fa-long-arrow-alt-left " onclick="editStudentBack()" style="font-size: 28px;"></i>`)
        var _token = $("input[name='_token']").val();
        let fix = window.location.protocol+window.location.host
        let body = $('.modal-body-body')
        body.removeClass('to-scroll')
        body.html(`<div class="loading">Loading&#8230;</div>`)
        let domain = fix+'/editstudents'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, id: e},
            success: function (data) {
                // console.log(data.info)
                let info = data.info
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
        $('.delete-'+e+'').css('background','#9f6a08')
        $('.delete-'+e+'').html(`
            <div class="level center user-${e}" onmouseleave="getUserBtn(${e})">
                <span class="delete">
                    Delete
                </span>
            </div>
        `)
    }

    function getUserBtn(e){
        $('.delete-'+e+'').html(`
            <div onmouseover="getDeleteBtn(${e})">
                User ID: ${e}
            </div>
        `)
    }

    function addStudent(){
        $('.modal-body-body').removeClass('to-scroll')

        $('.modal-head').html(`<i class="fas fa-long-arrow-alt-left " onclick="addStudentBack()" style="font-size: 28px;"></i>`)

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
    }

    function addStudentSubject(e){

        
        var _token = $("input[name='_token']").val();
        let body = $('.modal-body-body')
        body.removeClass('to-scroll')
        body.html(`<div class="loading">Loading&#8230;</div>`)
        let fix = window.location.protocol+window.location.host
        let domain = fix+'/getsubjectalls'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token,},
            success: function (data) {
                let info = data.info,
                options = ``

                info.forEach(element => {
                console.log(element)
                    options += `
                        <option value="${element.id}">${element.subject_nm}</option>
                    `
                });

                $('.modal-head').html(`<i class="fas fa-long-arrow-alt-left " onclick="addStudentBack()" style="font-size: 28px;"></i>`)

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
                            <form action="{{route('admin.addstudentsubject')}}" method="POST" class="space-y-6">
                                @csrf
                                <div>
                                    <div class="mt-1">
                                        <select name="subject_id">
                                            <option selected value="0">Select Subject</option>
                                            ${options}
                                        </select>
                                    </div>
                                </div>
                                <div>
                                    <div class="mt-1">
                                        <input id="year_of_exam" name="year_of_exam" type="date" autocomplete="date" required=""  class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                        <input hidden name="student_id" value="${e}">
                                    </div>
                                </div>
                            
                            
                                <button type="submit" class="mt-1 btn btn-primary btn-lg" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">Add Subect</button>
                            </form>
                            <div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </section>
                `)
                
            }
        })
    }

    function addStudentBack(){
        $('.modal-head').html(`<span class=" modal-txt add-student" onclick="addStudent()">Add Student</span>`)
        openStudent()
    }

    function editStudentBack(){
        $('.modal-head').html(`<span class=" modal-txt add-student" onclick="addStudent()">Add Student</span>`)
        openStudent()
    }

    // subject
    function editSubject(e){
        $('.modal-head').html(`<i class="fas fa-long-arrow-alt-left " onclick="editSubjectBack()" style="font-size: 28px;"></i>`)
        var _token = $("input[name='_token']").val();
        let fix = window.location.protocol+window.location.host
        let body = $('.modal-body-body')
        body.removeClass('to-scroll')
        body.html(`<div class="loading">Loading&#8230;</div>`)
        let domain = fix+'/editsubject'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, id: e},
            success: function (data) {
                console.log(data.info)
                let info = data.info
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
        let body = $('.modal-body-body')
        body.removeClass('to-scroll')
        body.html(`<div class="loading">Loading&#8230;</div>`)
        let domain = fix+'/deletesubjects'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, id:e},
            success: function (data) {
                let info = data.info.data,
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

                    getPagenate('modal-body-body',data.info.links.length,0,'subject')
                }
            }
        })
    }

    function addSubjectBack(){
        $('.modal-head').html(`<span class="modal-txt add-subject" onclick="addSubject()">Add Subject</span>`)
        openSubject()
    }

    function addSubject(){
        $('.modal-body-body').removeClass('to-scroll')

        $('.modal-head').html(`<i class="fas fa-long-arrow-alt-left add-subject-back" onclick="addSubjectBack()" style="font-size: 28px;"></i>`)
     
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
    }

    function editSubjectBack(){
        $('.modal-head').html(`<span class="modal-txt add-subject" onclick="addSubject()">Add Subject</span>`)
        openSubject()
    }

    function customPaginate(page,type){
        function studentPag(){
            var _token = $("input[name='_token']").val();
            let body = $('.modal-body-body')
            body.removeClass('to-scroll')
            body.html(`<div class="loading">Loading&#8230;</div>`)
            let fix = window.location.protocol+window.location.host
            let domain = fix+'/studentcustompaginates'
            let url = new URL(domain);
            $.ajax({
                type: 'POST',
                url: url,
                data: { _token: _token, id: page},
                success: function (data) {

                    let info = data.info.data,
                    subject = data.subject,
                    card = ``

                    // console.log(data.info)
                    
                    body.addClass('to-scroll')
                        
                    info.forEach(element => {
                        let subCount = 0
                        subject.forEach(element1 => {
                            if (element.id === element1.student_id) {
                                ++subCount
                            }
                        });
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
                                        <div class="addSubject-${element.id}">
                                            <div class="bounce" onclick="addStudentSubject(${element.id})"><p>Add</p>
                                                <img src="https://static.thenounproject.com/png/196765-200.png" style="max-height: 40px; width auto;"/>
                                            </div>
                                            <div class="title" >Subject</div>
                                            <div class="value">${subCount}</div>
                                        </div>
                                        <div>
                                        <div class="title ml-4">Payment</div>
                                        <div class="value">0</div>
                                        </div>
                                        <div>
                                        <div class="title ml-4">Transactions</div>
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
                    let indexId = page - 1
                    getPagenate('modal-body-body',data.info.links.length,indexId,'student')
                }
            })
        }

        function subjectPag(){
            var _token = $("input[name='_token']").val();
            let body = $('.modal-body-body')
            body.removeClass('to-scroll')
            body.html(`<div class="loading">Loading&#8230;</div>`)
            let fix = window.location.protocol+window.location.host
            let domain = fix+'/subjectcustompaginates'
            let url = new URL(domain);
            $.ajax({
                type: 'POST',
                url: url,
                data: { _token: _token, id: page},
                success: function (data) {

                    let info = data.info.data,
                    card = ``

                    // console.log(data.info)
                    
                    body.addClass('to-scroll')
                        
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
                    let indexId = page - 1
                    getPagenate('modal-body-body',data.info.links.length,indexId,'subject')
                }
            })
        }

        if (type == 'student') {
            studentPag()
        } else if (type == 'subject') {
            subjectPag()
        }
    }

    function getPagenate(body,numItems,indexId,type){
        var numItems = numItems - 2;

        var type = type

        $('.'+body+'').append(`
            <svg viewBox="0 0 300 200">
            </svg>
        `)

        var svg = document.querySelector("."+body+" svg");
        var spacing = 50;
        var radius = 15;
        var strokeWidth=2;
        var index = 0;
        var ringList=[];
        var initX = (300-spacing*(numItems-1))*.5;
        var dot = createElement("circle",{cx:initX+(index*spacing),cy:100,fill:"#fff",r:radius-(strokeWidth*2)});
        svg.appendChild(dot);
        paginate();
        disable(ringList[index]);
        TweenMax.set(dot,{fill:ringList[index].color});
        
        gotoIndex(indexId)
        // if (numItems < 4) {
        //     if (indexId == 0) {
        //         gotoIndex(3);
        //     } else {
        //         gotoIndex(indexId);
        //     }
        // } else {
        //     gotoIndex(indexId)
        // }

        function onSelect(e){
            gotoIndex(e.target.index);
            customPaginate(e.target.attributes[7].value,type)
        }

        function gotoIndex(targetIndex){
            var distance= Math.abs(targetIndex-index)*spacing*.5;
            var duration=Math.min((distance/spacing)*.2,.4);
            TweenMax.to(dot,.15,{scaleX:1.5,scaleY:.5,transformOrigin:"bottom",ease:Sine.easeOut,yoyo:true,repeat:1});
            TweenMax.to(dot,duration,{delay:.175,fill:ringList[targetIndex].color,x:targetIndex*spacing,ease:Sine.easeInOut});
            TweenMax.to(dot,duration*.5,{delay:.175,y:-distance,ease:Sine.easeOut,yoyo:true,repeat:1,onComplete:squish});
            enable(ringList[index]);
            disable(ringList[targetIndex]);
            index=targetIndex;
        }

        function enable(target){
            target.setAttribute("pointer-events","all");
        }

        function disable(target){
            target.setAttribute("pointer-events","none");
        }

        function squish(){
            TweenMax.to(dot,.15,{scaleX:1.5,scaleY:.75,transformOrigin:"bottom",ease:Sine.easeOut,yoyo:true,repeat:1});
        }

        function paginate() {
            let countPag = 1
            for (var i = 0; i < numItems; i++) {
                var randomColor = "hsl("+(((i/(numItems))*360))+", 65%, 55%)";
                var ring = createElement("circle", {
                cx: initX+(i * spacing),
                cy: "50%",
                fillOpacity: 0,
                r: radius,
                stroke: randomColor,
                cursor:"pointer",
                strokeWidth: strokeWidth,
                value: countPag
                });
                ring.index=i;
                ringList.push(ring);
                ring.color = randomColor;
                ring.addEventListener("click",onSelect);
                svg.appendChild(ring);
                ++countPag
            }
        }

        function setAttributes(element, attributes) {
            var keyword, key;
            for (keyword in attributes) {
                key = keyword.replace(/([a-z])([A-Z])/g, '$1-$2').toLowerCase();
                element.setAttributeNS(keyword === "xlink:href" ? "http://www.w3.org/1999/xlink" : null, key, attributes[keyword]);
            }
        }

        function createElement(type, attributes) {
            var element = document.createElementNS("http://www.w3.org/2000/svg", type);
            setAttributes(element, attributes);
            return element;
        }
    }
    
    // function getAddSubjectBtn(e){
    //     $('.addSubject-'+e+' .bounce').css('display','block')
    // }

    // function removeAddSubjectBtn(e){
    //     $('.addSubject-'+e+' .bounce').css('display','none')
    // }

    // subjectChoice

</script>