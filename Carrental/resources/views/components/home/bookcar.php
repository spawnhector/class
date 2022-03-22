<script>
    let bookCar = () => {
        // import './payment.js';
        let infod = {
            start_location: $('#start_location').val(),
            finish_location: $('#finish_location').val(),
            child_seat: document.getElementById('child_seat').checked,
            gps_navigation: document.getElementById('gps_navigation').checked,
            additional_driver: document.getElementById('additional_driver').checked,
            wifi_access: document.getElementById('wifi_access').checked,
            winter_package: document.getElementById('winter_package').checked,
            bski_rack: document.getElementById('bski_rack').checked,
            full_insurance: document.getElementById('full_insurance').checked,
            datetimepicker_simple: $('#datetimepicker_simple').val(),
            datetimepicker_end: $('#datetimepicker_end').val()
        };
        
        if ( infod.start_location == "") error('Pickup location can not be empty');  
        else if ( infod.finish_location == "") error('Drop-Off location can not be empty');  
        else if ( infod.datetimepicker_simple == "") error('Pickup date can not be empty');   
        else if ( infod.datetimepicker_end == "") error('Drop-Off date can not be empty');     
        else {
            let infoArry = Object.keys(infod).map(function (key) { return infod[key]; });
            sessionStorage.setItem("bookingInfo", infoArry);
            $('.global-modal').toggleClass('global-modal-show');
            $('body').toggleClass('noscroll')
        };
        // let infoArry = Object.keys(infod).map(function (key) { return infod[key]; });
        // console.log(infoArry)
   
        // Livewire.emit('bookCar',infod);
    };

    var error = (err) => {
        $(".myAlert-top").show();
        $('#alert-message').text(err);
        setTimeout(function(){
            $(".myAlert-top").hide(); 
        }, 3000);
    };
</script>