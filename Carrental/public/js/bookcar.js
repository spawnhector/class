
let bookCar = () => {
    if(validateBooking()) {
        $("html, body").animate({ scrollTop: -35 }, "fast");
        location.reload();
        // $('.global-modal').toggleClass('global-modal-show');
        // $("html, body").animate({ scrollTop: 0 }, "slow");
        // $('body').toggleClass('noscroll')
        // getLocation();
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

var error1 = (err) => {
    $(".myAlert-top").show();
    $('#alert-message').text("Error while getting location: "+err.message);
    setTimeout(function(){
        $(".myAlert-top").hide(); 
    }, 3000);
};

/** NOTE: uses jQuery for quick & easy DOM manipulation **/

  

