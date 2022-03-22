document.addEventListener('DOMContentLoaded', function(event) {

    document.getElementById('flip-card-btn-turn-to-back').style.visibility = 'visible';
    document.getElementById('flip-card-btn-turn-to-front').style.visibility = 'visible';
    
  
    document.getElementById('flip-card-btn-turn-to-back').onclick = function() {
        document.getElementById('flip-card').classList.toggle('do-flip');
        document.getElementById('addcat').style.display = 'block';
        document.getElementById('updatecat').style.display = 'none';
    };
  
    document.getElementById('flip-card-btn-turn-to-front').onclick = function() {
        document.getElementById('flip-card').classList.toggle('do-flip');
        document.getElementById('flip-card-btn-turn-to-front').style.background = 'white'
        document.getElementById('flip-card-btn-turn-to-front').style.color = '#888'
        document.getElementById('head').style.background = 'white'
    };


    document.getElementById('flip-card-btn-turn-to-back2').onclick = function() {
        // document.getElementById('flip-card2').classList.toggle('do-flip');
        document.getElementById('viewType').style.display = 'none';
        document.getElementById('chooseCatType').style.display = 'block';
        document.getElementById('tochange').innerHTML = '<button onclick="callTypeView()" id="flip-card-btn-turn-to-back22" class="flip-card-btn-turn-to-back cardTBtn" style="visibility: visible;">Update Meal</button>'
    };

  
    document.getElementById('flip-card-btn-turn-to-front2').onclick = function() {
        document.getElementById('flip-card2').classList.toggle('do-flip');
        document.getElementById('flip-card-btn-turn-to-front2').style.background = 'white'
        document.getElementById('flip-card-btn-turn-to-front2').style.color = '#888'
        document.getElementById('head2').style.background = 'white'
    };


    document.getElementById('flip-card-btn-turn-to-back3').onclick = function() {
        document.getElementById('flip-card3').classList.toggle('do-flip');
    };
  
    document.getElementById('flip-card-btn-turn-to-front3').onclick = function() {
        document.getElementById('flip-card3').classList.toggle('do-flip');
    };
  
    document.getElementById('addcatsubmit').onclick = function() {
        var category_desc = document.getElementById('category_desc').value
        var category_nm = document.getElementById('category_nm').value
        var _token = $("input[name='_token']").val();
        let url = new URL('http://127.0.0.1:8000/addcat');
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, category_nm: category_nm, category_desc: category_desc},
            success: function (data) {
                document.getElementById('head').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front').style.color = 'white'
                document.getElementById('catView').innerHTML = data.catCardFront
                document.getElementById('chooseCatType').innerHTML = data.chooseCatCardFront;
                
                for (let index = 0; index < data.count_btn; index++) {
                    $("#drpdwn"+index+"").hide();
                    $("#choooseMealDrpdwn"+index+"").hide();
                }
            },
            error: function (error) {

            }
        });
    };

    document.getElementById('addtypesubmit').onclick = function() {
        var meal_price = document.getElementById('add_meal_price').value
        var meal_nm = document.getElementById('add_meal_nm').value
        var cat_Id = document.getElementById('addMeal_CatId').value
        var _token = $("input[name='_token']").val();
        let url = new URL('http://127.0.0.1:8000/addtype');
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, meal_nm: meal_nm, meal_price: meal_price, cat_Id: cat_Id},
            success: function (data) {
                document.getElementById('head2').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front2').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front2').style.color = 'white'
                document.getElementById('toChangeMBack').innerHTML = '<button  onclick="callMealFront()" id="flip-card-btn-turn-to-front2" class="flip-card-btn-turn-to-front  cardTBtn" style="visibility: visible;">back</button>'
            },
            error: function (error) {

            }
        });
    };

    document.getElementById('updatecatsubmit').onclick = function() {
        var category_nm = document.getElementById('update_category_nm').value
        var category_desc = document.getElementById('update_category_desc').value
        var id = document.getElementById('update_category_id').value
        var _token = $("input[name='_token']").val();
        let url = new URL('http://127.0.0.1:8000/updatecat');
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, id: id, category_nm: category_nm, category_desc: category_desc},
            success: function (data) {
                document.getElementById('head').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front').style.color = 'white'
                document.getElementById('catView').innerHTML = data.catCardFront
                document.getElementById('chooseCatType').innerHTML = data.chooseCatCardFront;
                document.getElementById('viewType').innerHTML = data.typeCardFront;
                
                for (let index = 0; index < data.count_btn; index++) {
                    $("#drpdwn"+index+"").hide();
                    $("#choooseMealDrpdwn"+index+"").hide();
                }

                for (let index = 0; index < data.count_btn1; index++) {
                    $("#showMealDrpdwn"+index+"").hide();
                }
            },
            error: function (error) {

            }
        });
    };
    document.getElementById('updatemealsubmit').onclick = function() {
        var meal_nm = document.getElementById('update_meal_nm').value
        var meal_price = document.getElementById('update_meal_price').value
        var id = document.getElementById('update_meal_id').value
        var _token = $("input[name='_token']").val();
        let url = new URL('http://127.0.0.1:8000/updatemeal');
        $.ajax({
            type: 'POST',
            url: url,
            data: { _token: _token, id: id, meal_nm: meal_nm, meal_price: meal_price},
            success: function (data) {
                document.getElementById('head2').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front2').style.background = '#818cf8'
                document.getElementById('flip-card-btn-turn-to-front2').style.color = 'white'
                document.getElementById('toChangeMBack').innerHTML = '<button  onclick="callMealFront()" id="flip-card-btn-turn-to-front2" class="flip-card-btn-turn-to-front  cardTBtn" style="visibility: visible;">back</button>'
                // alert(data.success)
            },
            error: function (error) {

            }
        });
    };
    
  });