let payment = (e) => {

    $('#pay').on('click', ()=>{
        let cardNumber = $('#cardNumber').val();
        if (cardNumber != '') {
            $('#pay').html(`<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
           <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
             s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
             c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
           <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
             C22.32,8.481,24.301,9.057,26.013,10.047z">
             <animateTransform attributeType="xml"
               attributeName="transform"
               type="rotate"
               from="0 20 20"
               to="360 20 20"
               dur="0.5s"
               repeatCount="indefinite"/>
             </path>
           </svg>`)
            var form = new FormData();
            form.append("card_nm", cardNumber);

            var settings = {
            "url": "http://10.44.16.117:8081/api/payment",
            "method": "POST",
            "timeout": 0,
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
            };

            $.ajax(settings).done(function (response) {
                let req = JSON.parse(response);
                if (req.error) {
                    $('#cardError').html('Invalid Card Number');
                }
                if (req.success) {
                    $('#cardError').html('');
                    $('#pay').html('Transaction Sent');
                    $("#pay").removeAttr("id")
                    $('#payment-loader').show()
                    Livewire.emit('bookCar',e);
                    window.addEventListener('car-booked', event => {
                        $('.global-modal').toggleClass('global-modal-show');
                        $('#payment-loader-content').html(`
                            <div class="frame">
                                <input hidden type="checkbox" id="button" class="hidden">
                                <label for="button" class="button"></label>
                                <img src="https://cdn0.iconfinder.com/data/icons/TWG_Retina_Icons/64/checkmark.png">
                                <div class="txtd">Vehicle Booked</div>
                                <svg class="circle">
                                </svg>
                            </div>
                        `);
                        $('#button').click()
                        sessionStorage.removeItem("bookingInfo")
                        setTimeout(() => {
                            $( globalModal ).toggleClass('global-modal-show');
                            $('body').toggleClass('noscroll')
                        },3000)
                    })
                }
            });
        }
    })

    let durCost = e[1] * e[2];
    let tax = 15;
    let taxAmount = (tax / 100) * durCost;
    let aftertax = durCost + taxAmount;
    return {
        costForDuration: durCost,
        tax: tax,
        afterTax: aftertax
    }
}