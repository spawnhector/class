document.querySelectorAll('.button').forEach(button => button.addEventListener('click', e => {
    if(!button.classList.contains('loading')) {

        button.classList.add('loading');

        setTimeout(() => button.classList.remove('loading'), 3700);

    }
    e.preventDefault();
}));

// increase/decrease

function increaseValue(id) {
    var value = parseInt(document.getElementById('number').value, 10);
    var cost = parseInt(document.getElementById("hiddenMealPrice_amt"+id+"").value);
    value = isNaN(value) ? 0 : value;
    value++;
    document.getElementById('number').value = value;
    document.getElementById("mealCost"+id+"").innerText = cost * value
  }
  
  function decreaseValue(id) {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    value < 1 ? value = 1 : '';
    value--;
    document.getElementById('number').value = value;
  }