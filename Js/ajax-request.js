
function showSearchResult(str) {
    if(str.length >= 3){
        document.getElementById("search-result").style.display = 'block';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("search-result").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "search-result.php?search=" + str, true);
        xhttp.send();
    }
    else
        document.getElementById("search-result").innerHTML = "";
}

// document.getElementById('comicAuthor').addEventListener('focusout',function () {
//     document.getElementsByClassName("tags-menu")[0].style.display = 'none';
// });
// document.getElementById('comicAuthor').addEventListener('focusin',function (event) {
//     showAuthor(this.value);
// });
// function authorInputFocusOut() {
//     document.getElementsByClassName("tags-menu")[0].style.display = 'none';
// }
// function authorInputFocusIn() {
//     authorInput(this.value);
//     showAuthor(this.value);
// }
// function authorInput(str) {
//     if(str.length !== 0)
//         document.getElementsByClassName("tags-menu")[0].style.display = 'block';
// }
document.getElementById('comicAuthor').addEventListener('keyup',function () {
    showAuthor(this.value);
})
function showAuthor(str) {
    if(str.length >= 1){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementsByClassName("tags-menu")[0].style.display = 'block';
                document.getElementsByClassName("tags-menu")[0].innerHTML = this.responseText;
                var tags = document.getElementsByClassName('tags-suggestion');
                for (var i = 0; i < tags.length; i++) {
                    tags[i].addEventListener('click', chooseAuthor, false);
                }
                if(this.responseText=="")
                    document.getElementsByClassName("tags-menu")[0].style.display = 'none';
            }
        };
        xhttp.open("GET", "author-tag-result.php?search=" + str, true);
        xhttp.send();
    }
    else
        document.getElementsByClassName("tags-menu")[0].style.display = "none";
}

function chooseAuthor() {
    document.getElementById('comicAuthor').value = this.innerText;
    document.getElementsByClassName("tags-menu")[0].style.display = 'none';
}

function checkUser() {
    let account = document.getElementById('login-form-account').value;
    let password = document.getElementById('login-form-password').value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == 'wrongAccount')
            {
                document.getElementById('login-status').innerText = 'Tài khoản không tồn tại!';
            }
            else if (this.responseText == 'wrongPassword')
            {
                document.getElementById('login-status').innerText = 'Sai mật khẩu!';
            }
            else
                document.getElementById('login-form').submit();
        }
    }
    xhttp.open("GET", "check-user.php?account=" + account + "&password=" + password, true);
    xhttp.send();
}