document.getElementById("file-picker").addEventListener("change",function(ev){
    document.querySelector("[for='file-picker']").innerHTML = ev.target.files[0].name;
})
document.getElementById("file-picker1").addEventListener("change",function(ev){
    document.querySelector("[for='file-picker1']").innerHTML = ev.target.files[0].name;
})
document.getElementById("file-picker2").addEventListener("change",function(ev){
    document.querySelector("[for='file-picker2']").innerHTML = ev.target.files[0].name;
})
document.getElementById("file-picker3").addEventListener("change",function(ev){
    document.querySelector("[for='file-picker3']").innerHTML = ev.target.files[0].name;
})