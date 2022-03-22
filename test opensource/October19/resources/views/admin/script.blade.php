<script>
    function approveSudentSubject(e){
        var _token = $("input[name='_token']").val();
        let fix = window.location.protocol+window.location.host
        let domain = fix+'/approvestudents'
        let url = new URL(domain);
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, id: e},
            success: function (data) {
                $('.student-pay').css('display','block')
                $('.payment-stat-'+e+'').css('display','block')
                $('.first-note-'+e+'').css('display','none')
                let body = $('.loading-body'+e+'')
                body.html(`${data.info}`)
                setTimeout(() => {
                    let body = $('.loading-body'+e+'')
                    body.html(``)
                }, 3000);
            }
        })
    }

    function pay(student_id,subject_id,year_of_exam,subject_nm,subject_cost){
        var buttonId = $(this).attr('id');
        $('#modal-container').removeAttr('class').addClass('one');
        $('body').addClass('modal-active');
        $('.card1').css('display','none')
        $('.modal-container-body').html(`
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
                    <form action="{{route('admin.studentpayment')}}" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <div class="mt-1">
                                <div>${subject_nm}: $${subject_cost}</div>
                                <input id="number" name="amount_payed" type="number" autocomplete="number" required="" placeholder="Amount" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform border border-transparent rounded-lg bg-gray-50 focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2  focus:ring-offset-gray-300">
                                <input hidden name="student_id" value="${student_id}">
                                <input hidden name="subject_id" value="${subject_id}">
                                <input hidden name="year_of_exam" value="${year_of_exam}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg mt-1" id="load2" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Adding Student">
                            <div class="box box1 button" id="one">
                                <i class="fab fa-amazon-pay"></i>
                            </div>
                        </button>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </section>
        `)
    }

    function closeModal(){
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
        $('.card1').css('display','block')
        
    }

    function call(funct,param1){
        console.log(this)
        switch (funct) {
            case "test": $('.call').html({{test('param1')}}); break;
            case "raphael": $('.call').html({{raphael('param1')}}); break;
        }
        
    }
</script>