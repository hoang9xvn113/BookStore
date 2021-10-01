const primaryColor = '#4834d4';
const warningColor = '#f0932b';
const successColor = '#6ab04c';
const dangerColor = '#eb4d4b';


const themeCookieName = 'theme';
const themeMode = {dark: 'dark', light: 'light'};

const body = document.getElementsByTagName('body')[0];


var bookAmount = 1;



function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue  + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(";");
    for(var i=0;i<ca.length;i++) {
        var c = ca[i];
        while(c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function ajax(requestMethod, url, data, action) {
    const xhttp = new XMLHttpRequest();

    xhttp.onload = action;

    var requestMethod = requestMethod.toUpperCase();

    var params = "";
    for(let key in data) {
        params += key + "=" + data[key] + "&";
    }

    if (params != "") {
        params = "?" + params.substr(0, params.length-1);
    }

    url += params;
    xhttp.open(requestMethod, url);
    xhttp.send();

    
  }


// Hàm thêm sách trong đơn hàng nhập
function addBookinOrder() {
    text = ``;

    document.getElementById('import-order-form').innerHTML = text;
}

//Hàm lấy ảnh của sách 
function getImage(e) {
    var bookId = parseInt(e.target.value);
    obj = ajax(
        'get',
        '/api/get-book-by-id',
        {id: bookId}, 
        function() {
            obj = JSON.parse(this.responseText)
            target_file = "/public/images/book/" + obj.image;
            obj_image = "bookImage" + e.target.name.charAt(e.target.name.length-1);
            document.getElementById(obj_image).setAttribute('src', target_file);
        }
    );
}




//Ham chuyen che do toi sang
loadTheme();

function loadTheme() {
    var theme = getCookie(themeCookieName);
    body.classList.add(theme === "" ? themeMode.light : theme);
}

function switchTheme() {
    if (body.classList.contains(themeMode.light)) {
        body.classList.remove(themeMode.light);
        body.classList.add(themeMode.dark);
        setCookie(themeCookieName, themeMode.dark);
    } else {
        body.classList.remove(themeMode.dark);
        body.classList.add(themeMode.light);
        setCookie(themeCookieName, themeMode.light);
    }
}

// Active side-bar
const uri_arr = [
    "dashboard",
    "quan-ly-sach",
    "quan-ly-the-loai",
    "quan-ly-don-hang-ban",
    "quan-ly-don-hang-nhap",
    "quan-ly-khach-hang",
    "quan-ly-nha-cung-cap",
    "phan-hoi"
];

function activeSideBarNav() {
    var path = document.location.pathname;
    var uri = path.split('/')[2];

    var sidebar_nav = document.getElementsByClassName("sidebar-nav-link");

    var index = uri_arr.indexOf(uri);

    if (index == -1) {
        sidebar_nav[0].classList.add('active');
    } else {
        sidebar_nav[index].classList.add('active');
    }
}

activeSideBarNav();



// Ham chuc nang mo, dong menu
function collapseSidebar() {
    body.classList.toggle('sidebar-expand');
}

window.onclick = function(target) {
    openCloseDropdown(event);
}

function closeAllDropdown() {
    var dropdowns = document.getElementsByClassName('dropdown-expand');
    for(var i=0;i < dropdowns.length; i++) {
        dropdowns[i].classList.remove('dropdown-expand');
    }
}

function openCloseDropdown(event) {
    if (!event.target.matches('.dropdown-toggle')) {
        closeAllDropdown();
    } else {
        var toggle = event.target.dataset.toggle;
        var content = document.getElementById(toggle);
        if (content.classList.contains('dropdown-expand')) {
            closeAllDropdown();
        } else {
            closeAllDropdown();
            content.classList.add('dropdown-expand');
        }
    }
}

