let validateBooking = () => {

    let infod = {
        vehicleId: $('#vehicle_id').val(),
        vehicleCost: $('#vehicle_cost').val(),
        returnDays: dateDiff(),
        vehicleName: $('#vehicle_name').val(),
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
        datetimepicker_end: $('#datetimepicker_end').val(),
    };
    
    // console.log(infod.vehicleId)
    if ( infod.start_location == "") error('Pickup location can not be empty');  
    else if ( infod.finish_location == "") error('Drop-Off location can not be empty');  
    else if ( infod.datetimepicker_simple == "") error('Pickup date can not be empty');   
    else if ( infod.datetimepicker_end == "") error('Drop-Off date can not be empty');     
    else {
        let infoArry = Object.keys(infod).map(function (key) { return infod[key]; });
        sessionStorage.setItem("bookingInfo", infoArry);
        return true;
    };

}

let fix = (e) => {
    let arr = e.split('/');
    return ""+arr[1]+"/"+arr[0]+"/"+arr[2]+"";
}

let dateDiff = () => {
    let splitD1 = $('#datetimepicker_simple').val().split(' ');
    let splitD2 = $('#datetimepicker_end').val().split(' ');
    var d1 = new Date(fix(splitD1[0])); 
    var d2 = new Date(fix(splitD2[0])); 
    
    var diff = d2.getTime() - d1.getTime(); 
    var daydiff = diff / (1000 * 60 * 60 * 24); 
    
    return daydiff ;
}
