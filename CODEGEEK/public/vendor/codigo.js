
var username = ""
var password = ""
function login(type = "username", error = null) {
  if (type == 'username') {
    let show = ''
    if (error == null) {
      show = 'Username'
    } else {
      show = error
    }
    Swal.fire({
      title: 'Login',
      html: '<span style="font-size:17px; font-weight:500">' + show + '<span>',
      position: 'top-end',
      input: 'text', //puede ser text, number, email, password, textarea, select, radio
      showCancelButton: true,
      confirmButtonText: 'Next &rarr;',
      cancelButtonText: 'Cancel',
      showLoaderOnConfirm: true,
      preConfirm: (login) => {
        return fetch(`//127.0.0.1:8000/login/username/${login}`)
          .then(response => {
            if (!response.ok) {
              throw new Error(response.statusText)
            }
          })
          .catch(error => {
            Swal.showValidationMessage(
              `Request failed: ${error}`
            )
          })
      },
      allowOutsideClick: () => !Swal.isLoading()
    }).then((result) => {
      if (result.dismiss === Swal.DismissReason.isConfirmed) {
        username = result.value
        const xhttp = new XMLHttpRequest();
        let url = new URL('http://127.0.0.1:8000/login/username/' + result.value + '');
        xhttp.onload = function () {
          if (this.responseText == "pass") {
            username = result.value
            login('password')
          } else {
            var error = this.responseText
            login('username', error)
            // console.log(this.responseText)
          }
        }
        xhttp.open('GET', url);
        xhttp.send()
      }
    })
  } else {
    if (type == "password") {
      let show = ''
      if (error == null) {
        show = 'Password'
      } else {
        show = error
      }
      Swal.fire({
        title: 'Login',
        position: 'top-end',
        html: '<span style="font-size:17px; font-weight:500">' + show + '<span>',
        input: 'password',
        showCancelButton: true,
        confirmButtonText: 'Login &rarr;',
        cancelButtonText: 'Cancel',
        showLoaderOnConfirm: true,
        preConfirm: (login) => {
          return fetch(`//127.0.0.1:8000/login/password/${login}/`+username+``)
            .then(response => {
              if (!response.ok) {
                throw new Error(response.statusText)
              }
            })
            .catch(error => {
              Swal.showValidationMessage(
                `Request failed: ${error}`
              )
            })
        },
        allowOutsideClick: () => !Swal.isLoading()
      }).then((result) => {
        if (result.dismiss === Swal.DismissReason.isConfirmed) {
          const xhttp = new XMLHttpRequest();
          let url = new URL('http://127.0.0.1:8000/login/password/' + result.value + '/' + username + '');
          xhttp.onload = function () {
            if (this.responseText == "pass") {
              password = result.value
              Swal.fire({
                title: 'Login Successfull',
                html: 'Logging You In <strong></strong> .',
                timer: 2000, //tiempo del timer
                onBeforeOpen: () => {
                  Swal.showLoading()
                  timerInterval = setInterval(() => {
                    // Swal.getContent().querySelector('strong')
                    //   .textContent = Swal.getTimerLeft()
                  }, 100)
                },
                onClose: () => {
                  clearInterval(timerInterval)
                }
              }).then((result) => {
                if (result.dismiss === Swal.DismissReason.timer) {
                  document.getElementById('student_username').value = username
                  document.getElementById('student_password').value = password
                  $('#login_button').click()
                }
              });
            } else {
              var error = this.responseText
              login('password', error)
              // console.log(this.responseText)
            }
          }
          xhttp.open('GET', url);
          xhttp.send()
        }
      })
    } else {
    }
  }
}


function triggerClick(e) {
  $('.swal2-file').click()
  document.getElementsByTagName("input")[17].setAttribute('id', 'avatar_change')
  document.getElementById("avatar_change").addEventListener("change", displayImage);
  // console.log(document.getElementsByTagName("input"))
}
var avatar = ''
function displayImage() {
  var e = document.getElementsByTagName("input")[17]
  if (e.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      document.getElementById('profileDisplay').setAttribute('src', e.target.result);
      document.getElementById('select-avatar').innerText = 'Change Avatar'
      // avatar = document.getElementById('profileImage').value
    }
    reader.readAsDataURL(e.files[0]);
  }
}


window.register = async () => {
  const steps = ['1', '2', '3', '4', '5', '6']
  const swalQueueStep = Swal.mixin({
    confirmButtonText: 'Next &rarr;',
    cancelButtonText: 'Back',
    showCloseButton: true,
    progressSteps: steps,
    reverseButtons: true,
    validationMessage: 'This field is required'
  })

  const values = []
  let currentStep

  for (currentStep = 0; currentStep < steps.length;) {
    if (currentStep == 0) {
      const result = await swalQueueStep.fire({
        title: `codegeek`,
        input: 'text',
        html: '<span style="font-size:17px; font-weight:500"><span class="register">Registration Form</span><br><br>Enter Your Full Name<span>',
        inputPlaceholder: 'Full Name',
        inputValue: values[currentStep],
        showCancelButton: currentStep > 0,
        currentProgressStep: currentStep,
        preConfirm: (fullname) => {
          if (fullname == "") {
            Swal.showValidationMessage(
              `This field is required`
            )
          }
        }
      })

      if (result.value) {
        values[currentStep] = result.value
        currentStep++
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        currentStep--
      } else {
        break
      }
    } else if (currentStep == 1) {
      const result = await swalQueueStep.fire({

        title: `codegeek`,
        html: '<span style="font-size:17px; font-weight:500"><span class="register">Registration Form</span><br><br>Select Your Username</span>',
        input: 'text',
        inputPlaceholder: 'Username',
        // inputValue: values[currentStep],
        showCancelButton: currentStep > 0,
        currentProgressStep: currentStep,
        preConfirm: (Username) => {
          if (Username == "") {
            Swal.showValidationMessage(
              `This field is required`
            )
          }
        }
      })

      if (result.value) {
        values[currentStep] = result.value
        currentStep++
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        currentStep--
      } else {
        break
      }
    } else if (currentStep == 2) {
      const result = await swalQueueStep.fire({

        title: `codegeek`,
        html: '<span style="font-size:17px; font-weight:500"><span class="register">Registration Form</span><br><br>Select Your Country</span><input type="text" id="country">',
        
        showCancelButton: currentStep > 0,
        currentProgressStep: currentStep,
        didOpen: (toast) => {
          $("#country").countrySelect();
        },
        preConfirm: (number) => {
          if (document.getElementById('country').value == "") {
            Swal.showValidationMessage(
              `This field is required`
            )
          }
        }
      })

      if (result.value) {
        values[currentStep] = document.getElementById('country').value
        currentStep++
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        currentStep--
      } else {
        break
      }
    } else if (currentStep == 3) {
      const result = await swalQueueStep.fire({
        title: `codegeek`,
        html: '<style>.swal2-html-container span span button{display:none;}</style><span style="font-size:17px; font-weight:500"><span class="register">Registration Form</span><br><br>Enter Your Contact Number<span><input id="phone" name="phone" type="tel"><button type="submit">Submit</button>',
        // input: 'tel',
        // inputPlaceholder: '(000) 000-0000 ',
        // inputValue: values[currentStep],
        showCancelButton: currentStep > 0,
        currentProgressStep: currentStep,
        didOpen: (toast) => {
          var input = document.querySelector("#phone");
          window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            autoPlaceholder: "on",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            formatOnDisplay: true,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            separateDialCode: true,
            utilsScript: "build/js/utils.js",
          });
        },
        preConfirm: (number) => {
          if (document.getElementById('phone').value == "") {
            Swal.showValidationMessage(
              `This field is required`
            )
          }
        }
      })

      if (result.value) {
        values[currentStep] = document.getElementById('phone').value
        currentStep++
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        currentStep--
      } else {
        break
      }
    } else if (currentStep == 4) {
      const result = await swalQueueStep.fire({
        title: `codegeek`,
        html: '<span style="font-size:17px; font-weight:500"><span class="register">Registration Form</span><br><br>Enter Your Email Address<span>',
        input: 'email',
        inputValue: values[currentStep],
        showCancelButton: currentStep > 0,
        currentProgressStep: currentStep,
        inputAttributes: {
          required: true
        },
        preConfirm: (email) => {
          const xhttp = new XMLHttpRequest();
          let url = new URL('http://127.0.0.1:8000/register/confirmcode/' + email + '/' + values[0] + '');
          xhttp.onload = function () {
              const Toast = Swal.mixin({
                toast: true,
                // html: "<style>.swal2-container {padding: 4.625em;}</style>",
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })

              Toast.fire({
                icon: 'success',
                title: 'Confirmation Code Sent '
              }).then((result) => {
                Toast.fire({
                  title: `codegeek`,
                  timer: 15000000,
                  showConfirmButton: false,
                  confirmButtonText: 'Confirm Code',
                  didOpen: (toast) => {
                    $input = jQuery("input.pin");
                    var check_step = 0
                    function isNum(c) {
                      return !isNaN(c) && !!c.trim();
                    }
                    function isNumKeyCode(keyCode) {
                      return 48 <= keyCode && keyCode <= 57;
                    }
                    function moveNext(el) {
                      return $(el).next().focus();
                    }
                    function movePrev(el) {
                      return $(el).prev().focus();
                    }
                    var digits = ''
                    $input.on("keydown", function (e) {
                      var keyCode = e.keyCode;
                      if ((keyCode === 46)                                  // allow delete
                          || (keyCode == 86 && (e.ctrlKey || e.metaKey))) { // allow paste
                        return true;
                      }
                        
                      e.preventDefault();
                      
                      if (isNumKeyCode(keyCode)) { // digit
                        this.value = String.fromCharCode(keyCode);
                        moveNext(this);
                        check_values()
                        
                      } else if (keyCode === 8) { // backspace   
                        if (!this.value) {
                          movePrev(this).val('');
                        } else {
                          this.value = '';
                        }
                        
                      } else if (keyCode === 37 || (e.shiftKey && keyCode === 9)) { // left, shift+tab
                        movePrev(this);
                        
                      } else if (keyCode === 39 || keyCode === 9) { // right, tab
                        moveNext(this);
                      }

                    });
                    $input.on('paste', function (e) {
                      e.preventDefault();
                      var data = e.originalEvent.clipboardData.getData('text/plain');
                      digits = data.trim().split('').filter(isNum);
                      fill(digits);
                    });
                    function fill(digits) {
                      // if (digits.length == $('input.pin').length) {
                      //   console.log(check_values())
                      // }
                      $('input.pin').each(function (i, input) {
                        input.value = digits[i] || '';
                        check_values()
                      });
                    }
                    function check_values(){
                      var get_val = []
                      for (let index = 0; index < $('input.pin').length; index++) {
                        var test = document.getElementById('pin'+index+'').value;
                        if (test != '') {
                          get_val[index] = test
                        }
                      }
                      if (get_val.length == $('input.pin').length) {
                        var theCode = ''
                        get_val.forEach(element => {
                          theCode += element
                        });
                        const xhttp = new XMLHttpRequest();
                        let url = new URL('http://127.0.0.1:8000/register/checkcode/' + email + '/' + theCode + '');
                        xhttp.onload = function () {
                          if (this.responseText === "verified") {
                            currentStep++
                            const result = swalQueueStep.fire({
                              title: `codegeek`,
                              html: '<span style="font-size:17px; font-weight:500"><span class="register">Registration Form</span><br><br><span>Enter Your Password</span></span>'+'<input type="password" id="password" class="swal2-input" placeholder="Password">'+
                              '<input type="password" id="confirm-password" class="swal2-input" placeholder="Confirm Password">',
                              confirmButtonText: 'Register',
                              currentProgressStep: currentStep,
                              preConfirm: (password) => {
                                var password = document.getElementById('password').value
                                var confirmPassword = document.getElementById('confirm-password').value
                                if (password !== confirmPassword) {
                                  Swal.showValidationMessage(
                                    `Both password should be the same`
                                  )
                                }else{
                                  const wait = swal.fire({
                                    toast: true,
                                    showConfirmButton: false,
                                    html: '<style>.swal2-popup.swal2-toast.swal2-show{background-color: #444444;}</style><div id="load"><div>K</div><div>EE</div><div>G</div><div>E</div><div>D</div><div>O</div><div>C</div></div><div class="registering" id="registering" style="color:whitesmoke;font-size: 11px;">Please wait</div>',
                                    didOpen: (toast) => {
                                      function autoLoggin(){
                                        document.getElementById('registering').innerText = 'Logging you in'
                                        var _token = $("input[name='_token']").val();
                                        $.ajax({
                                          type:'POST',
                                          url: "login/student",
                                          data: {_token: _token, log_username: values[1], log_password: password},
                                          success:function(data) {
                                            document.getElementById('registering').innerText = 'Loggin Succesful'
                                            setTimeout(document.getElementById('registering').innerText = 'Redirecting to your dashboard', 1000)
                                          },
                                          error: function(error){
                                            document.getElementById('registering').innerText = error.error

                                          }
                                        });
                                      }

                                      function registering(){
                                        document.getElementById('registering').innerText = 'Getting you registered'
                                        // document.getElementById('stud_password').value = password
                                        var _token = $("input[name='_token']").val();
                                        $.ajax({
                                          type:'POST',
                                          enctype: 'multipart/form-data',
                                          // processData: false,  // Important!
                                          url: "register/student",
                                          data: {_token: _token, full_name: values[0], username: values[1], country: values[2], phone: values[3], email: values[4], password: password},
                                          success:function(data) {
                                            if (data.success == "registered") {
                                              document.getElementById('registering').innerText = 'Registraion Succesful'
                                              setTimeout(autoLoggin, 2000)
                                            } else {
                                              
                                            }
                                          }
                                        });
                                        
                                      }
                                      setTimeout(registering, 2000)
                                      
                                    },
                                  })
                                }
                              }
                            })
                          } else {
                            document.getElementById('incorrect').style.display = "block"
                          }
                        }
                        xhttp.open('GET', url);
                        xhttp.send()
                        return true
                      } else {
                        return false
                      }
                    }
                  },
                  html: '<style>.swal2-popup.swal2-toast .swal2-title {font-size: 20px;margin: 5px; }</style><span style="font-size:17px; font-weight:500" id="pin-container" class="pin-container"><br>A Confirmation Code was just sent to <p class="register-email">' + email + '</p><br>Enter the code below</span><br><p id="incorrect" style="display:none;">Verification Code Incorrect</p><span><input type="text" id="pin0" class="pin" value=""><input type="text" id="pin1" class="pin" value=""><input type="text" id="pin2" class="pin" value=""> - <input type="text" id="pin3" class="pin" value=""><input type="text" id="pin4" class="pin" value=""><input type="text" id="pin5" class="pin" value=""></span><div class="wait" id="wait" style="display:none;"><p>Checking Coding..</p></div>',
                })
              })
          }
          xhttp.open('GET', url);
          xhttp.send()
        }
      })
      if (result.value) {
        values[currentStep] = result.value
        const wait = await swal.fire({
          toast: true,
          showConfirmButton: false,
          html: '<style>.swal2-popup.swal2-toast.swal2-show{background-color: #444444;}</style><div id="load"><div>K</div><div>EE</div><div>G</div><div>E</div><div>D</div><div>O</div><div>C</div></div>',
        })
      } else if (result.dismiss === Swal.DismissReason.cancel) {
        currentStep--
      } else {
        break
      }
    } else if (currentStep == 5) {
    }
  }
  if (currentStep === steps.length) {
    Swal.fire(JSON.stringify(values))
  }
}

function test(){
  const wait = swal.fire({
    toast: true,
    showConfirmButton: false,
    html: '<style>.swal2-popup.swal2-toast.swal2-show{background-color: #444444;}</style><div id="load"><div>K</div><div>EE</div><div>G</div><div>E</div><div>D</div><div>O</div><div>C</div></div><div class="registering" id="registering" style="color:whitesmoke;font-size: 11px;">Please wait</div><div class="progress"><b class="progress__bar"><span class="progress__text">Progress: <em>0%</em></span></b></div>',
    didOpen: (toast) => {
      
      var $progress = $(".progress"),
      $bar = $(".progress__bar"),
      $text = $(".progress__text"),
      percent = 0,
      update,
      resetColors,
      speed = 1000,
      orange = 30,
      yellow = 55,
      green = 85,
      timer;

      resetColors = function() {

      $bar
      .removeClass("progress__bar--green")
      .removeClass("progress__bar--yellow")
      .removeClass("progress__bar--orange")
      .removeClass("progress__bar--blue");

      $progress
      .removeClass("progress--complete");

      };

      update = function() {

      timer = setTimeout( function() {

      percent += 25;
      percent = parseFloat( percent.toFixed(1) );

      $text.find("em").text( percent + "%" );

      if( percent >= 100 ) {

        percent = 100;
        $progress.addClass("progress--complete");
        $bar.addClass("progress__bar--blue");
        $text.find("em").text( "Complete" );

      } else {
        
        if( percent >= green ) {
          $bar.addClass("progress__bar--green");
        }
        
        else if( percent >= yellow ) {
          $bar.addClass("progress__bar--yellow");
        }
        
        else if( percent >= orange ) {
          $bar.addClass("progress__bar--orange");
        }
        
        speed = Math.floor( Math.random() * 1000 );
        update();

      }

      $bar.css({ width: percent + "%" });

      }, speed);

      };

      setTimeout( function() {

      $progress.addClass("progress--active");
      update();

      },1000);


      $(document).on("click",  function(e) {

      percent -= 25;
      clearTimeout( timer );
      resetColors();
      update();

      });
      
    },
  })
}
