<div>
    <div class="global-modal-header">
        <span class="mobile-close" style="display: block"> X </span>
        <span style="display: flex;">Current Location: <span class="resultLocation" style="margin-left:12px;"></span></span>
    </div>
    <div class="global-modal-body">
        <div class="content-left">
          <style>
            #payment-loader{
              display: none;
              position: absolute;
              background: #0000004a;
              width: 100%;
              height: 375px;
            }
            #payment-loader-content{
              z-index: 1;
              position: absolute;
              text-align: center;
              top: 53%;
              left: 35%;
            }
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:600);
            .hidden {
              display: none;
            }

            .button {
              box-sizing: border-box;
              /* display: block;z */
              width: 100px;
              height: 100px;
              border: 2px solid #fff;
              border-radius: 100%;
              text-align: center;
              line-height: 56px;
              font-size: 1.1rem;
              text-transform: uppercase;
              letter-spacing: 2px;
              transition: all 0.3s ease-in-out;
              cursor: pointer;
            }

            .button:hover {
              background: #2BAD82;
            }

            .frame img {
              position: absolute;
                z-index: 2;
                top: 39%;
                background: #2BAD82;
                border-radius: 100%;
                padding: 11px;
                left: 50%;
                transform: translate(-50%, -50%);
                opacity: 0;
                width: 91px;
            }

            .circle {
              position: absolute;
                right: 0px;
              width: 100px;
              height: 100px;
              fill: none;
              stroke: #fff;
              stroke-width: 3px;
              stroke-linecap: round;
              stroke-dasharray: 183 183;
              stroke-dashoffset: 183;
              pointer-events: none;
              transform: rotate(-90deg);
            }

            input:checked ~ .button {
              -webkit-animation: button 0.5s ease both, fill 0.5s ease-out 1.5s forwards;
                      animation: button 0.5s ease both, fill 0.5s ease-out 1.5s forwards;
            }

            input:checked ~ img {
              -webkit-animation: check 0.5s ease-out 1.5s both;
                      animation: check 0.5s ease-out 1.5s both;
            }

            input:checked ~ .txtd {
              -webkit-animation: check 0.5s ease-out 1.5s both;
                      animation: check 0.5s ease-out 1.5s both;
            }

            input:checked ~ .circle {
              -webkit-animation: circle 2s ease-out 0.5s both;
                      animation: circle 2s ease-out 0.5s both;
            }

            @-webkit-keyframes button {
              0% {
                width: 100px;
                left: 70px;
                border-color: #fff;
                color: #fff;
              }
              50% {
                color: transparent;
              }
              100% {
                width: 100px;
                left: 170px;
                border-color: #643a7a;
                background: transparent;
                color: transparent;
              }
            }

            @keyframes button {
              0% {
                width: 100px;
                left: 70px;
                border-color: #fff;
                color: #fff;
              }
              50% {
                color: transparent;
              }
              100% {
                width: 100px;
                left: 170px;
                border-color: #2BAD82;
                background: transparent;
                color: transparent;
              }
            }
            @-webkit-keyframes circle {
              0% {
                stroke-dashoffset: 183;
              }
              50% {
                stroke-dashoffset: 0;
                stroke-dasharray: 183;
                transform: rotate(-90deg) scale(1);
                opacity: 1;
              }
              90%, 100% {
                stroke-dasharray: 500 500;
                transform: rotate(-90deg) scale(2);
                opacity: 0;
              }
            }
            @keyframes circle {
              0% {
                stroke-dashoffset: 183;
              }
              50% {
                stroke-dashoffset: 0;
                stroke-dasharray: 183;
                transform: rotate(-90deg) scale(1);
                opacity: 1;
              }
              90%, 100% {
                stroke-dasharray: 500 500;
                transform: rotate(-90deg) scale(2);
                opacity: 0;
              }
            }
            @-webkit-keyframes fill {
              0% {
                background: transparent;
                border-color: #fff;
              }
              100% {
                background: transparent;
              }
            }
            @keyframes fill {
              0% {
                background: transparent;
                border-color: #fff;
              }
              100% {
                background: transparent;
              }
            }
            @-webkit-keyframes check {
              0% {
                opacity: 0;
              }
              100% {
                opacity: 1;
              }
            }
            @keyframes check {
              0% {
                opacity: 0;
              }
              100% {
                opacity: 1;
              }
            }
          </style>
            <div id="payment-loader">
              <div id="payment-loader-content">
                <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  width="100px" height="100px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
                <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
                  s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
                  c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
                <path fill="#2BAD82" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
                  C22.32,8.481,24.301,9.057,26.013,10.047z">
                  <animateTransform attributeType="xml"
                    attributeName="transform"
                    type="rotate"
                    from="0 20 20"
                    to="360 20 20"
                    dur="0.5s"
                    repeatCount="indefinite"/>
                  </path>
                </svg>
              </div>
            </div>
            <div style="margin: 20px;display:grid;">
                <div>
                    <span style="float: left">User:</span>
                    <span style="float: right">{{auth()->user()->name}}</span>
                </div>
                <div>
                    <span style="float: left">Payment For:</span>
                    <span style="float: right" id="paying_for"></span>
                </div>
                <div>
                    <span style="float: left">Pickup Location:</span>
                    <span style="float: right" id="pickup_location"></span>
                </div>
                <div>
                    <span style="float: left">Dropoff Location:</span>
                    <span style="float: right" id="dropoff_location"></span>
                </div>
                <div>
                    <span style="float: left">Pickup Date:</span>
                    <span style="float: right" id="pickup_date"></span>
                </div>
                <div>
                    <span style="float: left">Dropoff Date:</span>
                    <span style="float: right" id="dropoff_date"></span>
                </div>
                <div>
                    <span style="float: left">Duration:</span>
                    <span style="float: right" id="duration"></span>
                </div>
                <div>
                    <span style="float: left">Cost For Duration:</span>
                    <span style="float: right" id="booking_cost"></span>
                </div>
                <div>
                    <span style="float: left">Tax:</span>
                    <span style="float: right" id="tax"></span>
                </div>
                <div>
                    <span style="float: left">Total:</span>
                    <span style="float: right" id="booking_total"></span>
                </div>
            </div>
        </div>
        <div class="content-right">
            <style>
                .clearfix:after{
                content:'';
                display:block;
                clear: both;
                }
                .containerr {
                font-family: Arial, Helvetica, sans-serif;
                width: 310px;
                }

                .payment-form {
                padding: 15px 10px;
                background-color: #E6E6E6;
                }
                .payment-form__button{
                width: 100%;
                height: 40px;
                border-radius: 3px;
                border: none;
                outline: none;
                background-color: #2BAD82;
                font-size: 14px;
                color: #FFFFFF;
                line-height: 19px;
                cursor: pointer;
                margin: 15px 0 0 0;
                }
                .payment-form__button:disabled{
                opacity: 0.5;
                cursor: default;
                }
                .payment-form__agreement{
                color: #989898;
                font-size: 11px;
                line-height: 13px;
                margin: 10px 0;
                }

                .notification {
                position: relative;
                padding: 15px 0;
                border-bottom: solid 1px #DDDDDD;
                }
                .notification__icon {
                position: absolute;
                top: 50%;
                margin-top: -17px;
                }
                .notification__text {
                margin-left: 44px;
                display: block;
                color: #989898;
                font-size: 11px;
                }

                .card-type{
                padding: 15px 0 0 0;
                }
                .card-type__label {
                font-size: 12px;
                color: #999999;
                float: left;
                width: auto;
                height: 20px;
                line-height: 20px;
                }
                .card-type__icons {
                text-align: center;
                }
                .card-type__icon {
                vertical-align: middle;
                padding: 0 5px;
                }
                .card-type__icon--disabled {
                filter: grayscale(100%);
                -ms-filter: grayscale(100%);
                -webkit-filter: grayscale(100%);
                opacity: 0.5;
                }

                .card-input {
                border: 1px solid #C6C6C6;
                font-family: Arial;
                font-size: 16px;
                line-height: 22px;
                height: 38px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                padding: 0 10px;
                }
                .card-input.ng-invalid-first_char, .card-input.ng-invalid-only_latin, .card-input.ng-invalid-date{
                border: 1px solid red;
                }
                .card-input--full {
                width: 100%;
                margin: 15px 0 0 0;
                }
                .card-input--date {
                width: 80px;
                text-align: center;
                margin: 5px 0 0 0;
                }
                .card-input--cvv {
                width: 60px;
                text-align: center;
                margin: 5px 0 0 0;
                }

                .card-info{
                margin: 15px 0 0 0;
                display: flex;
                }
                .card-info__date{
                float: left;
                width: 50%;
                }
                .card-info__text{
                font-size: 12px;
                color: #6D6D6D;
                line-height: 17px;
                }
            </style>
            <div class="containerr">
                <div class="payment-form">
                  <div class="notification">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAYAAAA6RwvCAAAAAXNSR0IArs4c6QAABJdJREFUWAnNWN1rHFUUP/fuuJsQP2qatrhQxCbs5rFaFezLtn4QLRWFCtIq/gXNqiT1wY8qVPtgEwq7/Q/UBsGID9IaqSbrQ9GH4osP2ZhYSzEQP8BUajbr7lx/vzs742Y6003KLmYgmbnnnnN+vznn3nPPrJINXDumTvXc2ZUa0qIOiJJ+JZIWo9LWhTKLRmRRjCy4Ys5dq6xOLQ0du75e9/DV+hooFe53RL1lRD2llHS1thAxRipKzPmamBPzufz3rWxuSuS+r8buTTpd7+Htj0BRGTEubheVcT8TV12q1tXiX4nfFwlyR70vnUyYtGizxyj9LKjsVaI0ogQzOVutVd64/NjolThCsUQyM0W8vZpABO7i24FGobZSGV8YOvZrnLNmef/Uqe1Od9cIUpdnFOFj2RhzeG7f8PlmPf85kshgqTBilHrfvpExkzWpvrqQG7nqG23k3l8a3+lI8jRe6hAjqox5bTaXHw/7uIEISSCiYwypct03Z/flT4aNbmU8OFN43Wj9LgCxdNzRMJk1RGw6tHwOXRBHGHPDH98KaJxNplR8nunmUsZqO9icJu0bcWHaNYFwMBLtJkEc+qRvppxYxPTxHf+Bu8NbmGayvI50DHxdyDmOGsUi3I0AXkcIvzP1+snyo6+UfZ9Rd6Y6Wyo+wDVjd6TIi9SzEWGd4Bbl7uDCjHLQLIOjlx1HzyCFB5HbBCK9A2ReUonED9npwnPNulHPxPB2ohyx2FCyRBJKHbeLCFu01e7IXDi9C7pjAF+q1d1HZnPD6XJuuLdu3ENGyd+i9QfZL4tetY1iAZnFABYxWSipplm2sT+e5NZinYixDcTqNmc/3t5xRZ2Y35//tjFhfszlP4Xft23NSKknAoOYB2IRk9WaHDTPDhrDycX1FCvUl+3Wt2t+CWOYuvnZyhTOoBaXh4UqDWx7ftkDDEa2bLcwbve0j0kO+JN+C4Czo91ALf35mDzJB78pYrupTLUq2Z8ePzoXZ7xt+p3be3XfWVTcnShISdSCCnTrIf0E8s40V7EQr/5ZWTl8s1Zg14UzmWRSgG/mHNtPwMo/RUOOg2Gvuvsh5PNpqOLy/geTTQ8g6I92b0klH14SmfYF4Tsxt0ofD5N0UFl7r3UHHsIGHKMkB7pR81GyVjbNmFgjxvYT//T03BPlrJOyABMc2LhYIrap6SRqhG8fkxw0e0yrg84qQrezIi0PWgBw0Gx0OfDau87ihr2jOD5DGTlodtv2AEKPyfYurNypsYdl9hKbHLTd58p8wR7B9phxyK57GQddLW76Bjl1aRNzEYuY7PTJwW5ZHsUJpS9hvazWZDUTdwIPnCts091qa4zvNWJ3xfwxfyD/2xphY+D1sak5lJwUTu09/NwIake2dOZDFKwX0MRN4lhv2VNEAaxXhn7mEzZGSMtH5dzR/xojOuB3ByaWqcBGd71ON6pH3w0Sy8T07YOIULApmmcSYVfN7w6wA2k10c7INCIxYX0Do7mDJ/aaiFDAa1N8YHlUGmn6vz85fTKb4iPcJ8O7V2fUcTbZXn/bPBv9jB3Yvp8lwhCd/KHmXykoU2GwolhLAAAAAElFTkSuQmCC"  class="notification__icon"/>
                    <span class="notification__text">
                        HalfTime Security Gateway.
                    </span>
                  </div>
                  <div class="card-type clearfix">
                    <div class="card-type__label">
                      Pay with:
                    </div>
                    <div class="card-type__icons">
                      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAOCAYAAABZ/o57AAAAAXNSR0IArs4c6QAABLJJREFUSA2tVk1sVFUUPue+9+ZHZ94wibWmBTL2tSCVxBjF8LOQhUsWmmriQsPCNGFDGlphYYiZBGOt2EwLJhhjUNxIohsShVaDRhMrMUGjFVDT6Q8goRqhPzOlPzPv+p335s5MBVZ6knfP7z333PNzZziWyWVIl5jqwLapWMjv/7NOFJJN2Xti0USDkS9O/H4t3uw12vHIOpH5ZX+hONHzk9EHOJONJfxEi7KdDHHZ98m6WsjfvEiU9VfZCdPyRipO8ZSQt4rLf9P0/qLQAiqiVHvEiRyKOpGf8Y3LZ3FkOtU6cDw0qa1ufE1v1HIm5Yso5xxRE9ux6EFFakQ+y7LfNNap9b3plJfrS9npaSviXGBFnzFbZyym0ZSXHjZ2BrvewLGUis9EFE3J5yadA0YnWM2Nd52eG+t6YXbhZmNZ65Oa9LIotKbddF9fUugAkBkmftGwMDiGrCyjFJurMp9+CeiGbEI78WFiJYe5Vb0hWE8ZUrCb6d/KzHvqZaC31fOqylzLLljEb5HmeU2Ux0aVSNmPG72rUh3ElBYe+iWfV94RGsFXA4U8CDTppvZg/xbRAwo++Z3oiy0ln57ytT5Q9vXpUBWubNs99bzQrPkJJKIan11vMJvv+sFtHfRZ6yaYTjHZcthXwUalOqu22j8pPRz3+tch0qCnAhvSQaCKeIexRYWuzI/NfijZr8jOGp1gmRFU7xmWKdH6MvxZOLtZ/Ca8dHshH16+GnFlM5KiUTKOg3CZ9SMiT7b0bwB6smJDpZI/KLRDqpZNRDRXXLkY2vCYsUXGN7leejTRMtBhZPU4YnMXgkRwOJnpAyD0fghMulr+fweK0dVDYobNaa11MM2K7Vo2SX+zMNXzo9jourLjUhNmSvVSuRdxXxIbAfjaYCn+xPUGv403960NpVgx5UjkS8LjLH+5XDrua/rO6BXX+vS2QP2FW5+jFEioHMDb4s1H1uKmu81m9FeQzUBfN0jYEw4SFHNXu2/MjeUfxdmH4GjJ7EXA251Y9EuivVGRJTmKBLAZ2C8WJ17GkOlqRpGIu2e0cP2Vv2B8XhyhbLYT06/j1uHbqWmqMD5ySnQCkNdKXxmkUCPr0aW5/L5XV3SpDZcIqiRSXL7NbfV2omdt9PJekQnA12Vk/HmQbYFAFk0b5ZkT8raMihBQ55iqTxKm922ij8uhSTCRm0I6uNRoQGdya4xM8K18zxUEcbBehjIX0LfPIur1VTlzJzL+kWL1vpGBZ+3Etgq/auqNASo/BJtVznG94nyZ3jM2bkvaQxrihsfPTFB611bD7A1iOPyzWvN19O4DaJ0OBBsAfN+Yz1/63vXac0EejYO7Yyn/mTsGOp8fOZfydszgxtXsoNdO0OS+GeMPh2+uHU4rhfyF36BDEvTDWO9FsR4DIyIpawBogUXt+08nH3xIHnjzzlK5VN5ZwnNYMaOIxbugPyo8kwr69I6BSnk1bUcv8i5kEjFiLdMRwQbQMw1Q/BrwWo8TvbtCjYcRIA1hh7yjjUHp5I+E5j+QyVPLZZ1bnOyexM/lCfTfbOhLny9Mdn8d0pU1k/s0avFrFf1GYHPXVWb/E5O1E97h+4meC97I/+r0H2FHmUxT7+LTAAAAAElFTkSuQmCC" class="card-type__icon card-type__icon--disabled"/>
                      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB8AAAAUCAYAAAB1aeb6AAAAAXNSR0IArs4c6QAABABJREFUSA2VlW1ollUYx3/3NqduavlSyy3TTNecLy1RyxXMhBl9iJFazrcIIjKhzH2Q8MMMkdbLB0n60AsUZUQg+EItNPBjTjBMRytCnVubiZuxTXHNbe7ud/bwPDhm7dkFF+c+53r7n/+5zrkj/kNiiDQtUB9QJ6pX1HoX/3a8o8TfkEcmxWQ4xlxngGYqaTDGdMMlFBgiek1z4S11gzp9iBHTQZ36gYFHkrb4AM+bfrtwH3dtaM6YS658TS/vRRvpSMaEcYijhde49rk6KRhHkGM8y5ts5mOzlI3gG/beIfQXo0q+T/qmilt4q4sfqam1pNMdx4h2auhjFvlSnZ7Elo95JVo3uMFEIQuvNPpHNd00A2SbJkP/h43aqWao6Ugs4JinBPBTZOEsY35VQ5r0pJAT7KA05TzGr5zUbOSPmLP8xuJQfJ3e344ckfIY4C6xR7exdI+2d1L29D5iKsKuVzNvHpSX22r22qZN0NQER48OT5KbC1MnNLLjypxhxpuu3LdMfRrajnshTwxzSS3Mtr0ufvJc2Hkj1dUPsmuXMFbDwYOwd69n6CGGYnv2wNq1sHAhXLjgffBCrF8PVVVw3CKtrbDMoouuwsYPoXm/hetgymMeqGdx3h7Or4DO03D3Yui/7gF7k2vzGzLfhnfZujWLMR5cXp4BklFbK6RGWLUKiopgyxaoqYEVK6ChwQazw+osUF0NN91yZaVAvZ03vtOurftPW1fgecZPmAuzX/WF6JU1AY0vEECX7H6VFXq0h/nz4bTIZs6Evj4o0GHbtsRYXw8nTybm4XgOHYI5sh6YCDsvLobduwUt+O4m0yn3vwBzjQ+FMsfBJdnMMXfjp9BxCq79Hrx6MsjObmW6D9m5c3D4cCJxfr40dYp0KsyYAe3tMHlyYl5WlqC/pycREwCdOQN/GFuyD0rd/RSPobcDxk6zuNR3au9Si2Vq7na4bq3MiX9FcU7OPtG/TlubtN2AwsIEtWFHYR4kgDsl4gCqvz8m93LEo6Xu6KKF7oVfbK43bpl4aWKnnWd9I43vNz6SkX9aZLRL3yWO1zwq+6Pvxvuh4TwI5HUUstkmncXsVIQEIcOjkPDUlAw+pQKQMypGEXyLRd7z5EO8xkjZT1vizAOXx5e8lCwun8ir73S6spyfWc4SigywHUYhzXSPf+J8V8HVJHafLEpM8IPqAacpj0j/TukPdyYdiWmhn2eiDTQE91SYKGxH7JhBAMH2f9Kp8bXoLA85VoncLhpRjlh4abJw8E7t/PZQWXjSue8s5ap3DVt2sEAA6F3iMwNt34TEXzLVH8vLzioEssCskxx7nbc4HlP3+x8fXVOH1AIJN2Js+E5X4i8YF+JG8v8X5UMlkwCffwoAAAAASUVORK5CYII=" class="card-type__icon card-type__icon--disabled" />
                    </div>
                  </div>
                  <span id="cardError" style="color:red;"></span>
                  <input inputmode="numeric" id='cardNumber' maxlength="19" pattern="[0-9\s]{13,19}" class="card-input card-input--full" placeholder="Card Number" required/>
                  @error('cardNumber')
                      {{$message}}
                  @enderror
                  <input type="text" id='cardHolder' class="card-input card-input--full" placeholder="Card Holder" card-holder required/>
                  <div class="card-info clearfix">
                    <div class="card-info__date">
                      <div class="card-info__text">
                        Expire Date
                      </div>
                      <input type="number" id='cardDate' class="card-input card-input--date" placeholder="ММ / YR" card-date required/>
                    </div>
                    <div class="card-info__cvv">
                      <div class="card-info__text">
                        CVV
                      </div>
                      <input type="number" id='cardCvv' class="card-input card-input--cvv" placeholder="CVV" card-cvv required/>
                    </div>
                  </div>
                  <button class="payment-form__button" id='pay'>
                    Pay
                  </button>
                  <div class="payment-form__agreement">
                  </div>
                  </div>
              </div>
        </div>
        <script>
            let sessInfo = sessionStorage.getItem("bookingInfo");
            if (sessInfo != null) {
              sessInfo.split(',')
              let paymentt = payment(sessInfo);
              let d1 = sessInfo[13].split(' ');
              let d2 = sessInfo[14].split(' ');
              // console.log(sessInfo)
              $('#booking_cost').html("$"+paymentt.costForDuration+"")
              $('#duration').html(""+sessInfo[2]+"/Day")
              $('#paying_for').html(sessInfo[3])
              $('#tax').html(paymentt.tax+"%")
              $('#booking_total').html("$"+paymentt.afterTax+"")
              $('#pickup_location').html(sessInfo[4])
              $('#dropoff_location').html(sessInfo[5])
              $('#pickup_date').html(new Date(""+fix(d1[0])+" "+d1[1]+""))
              $('#dropoff_date').html(new Date(""+fix(d2[0])+" "+d2[1]+""))
            }
        </script>
    </div>
</div>
