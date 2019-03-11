
// SearchBox Javascript
// $(document).ready(function(){
//     $(".icon").click(function(){
//         $(".search").toggleClass("active");
//         $("#search").toggleClass("fa-search fa-times");
//     })
// });

var search = document.querySelector(".search");
var button = document.querySelector(".icon");
button.addEventListener("click", function () {
    search.classList.toggle("active");

    var btn = document.querySelector("#search");
    if (btn.className == "fa fa-search fa-2x"){
        btn.className = "fa fa-times fa-2x";
    } else{
        btn.className = "fa fa-search fa-2x";
    }
});

// Query Search Ajax
function replaceText() {
    var target = document.querySelector(".main");
    var url = '/admin/products?search=';
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 2){
            target.innerHTML = "Loading...";
        }
        if (xhr.readyState == 4 && xhr.status == 200){
            target.innerHTML = xhr.responseText;
        }
    }
    xhr.send();
}

var button = document.querySelector("#ajax-button");
button.addEventListener("click", replaceText);