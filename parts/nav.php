<?php


$isLogin = false;
if (isset($_SESSION["user"])) {
    $isLogin = true;
}
?>


<style>
nav {
    position: fixed;
    font-size: 18px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    padding: 10px 0;
    z-index: 50;
    transition: ease-out all 0.2s;
    animation: nav 0.5s ease-in-out alternate;
}

@keyframes nav {

    0% {
        translate: 100% 0;
    }

    100% {
        translate: 0%;
    }
}

#logo {
    transition: all ease-out 0.2s;
}

nav .links {
    width: 60%;
    font-size: 18px;
    display: flex;
    /* align-items: center; */
    justify-content: space-around !important;
    transition: 0.5s all ease-in-out;
}

nav .links a {
    color: #ffffff;
    position: relative;
    text-decoration: none;
    transition: all ease-in-out 0.3s;
}

nav .links a::before {
    content: "";
    position: absolute;
    height: 2px;
    bottom: -5px;
    left: 0%;
    width: 0%;
    background-color: #ffffff;
    transition: all ease-in-out 0.3s;
}

.modal {
    display: none;
    position: fixed;
    top: 0;
    height: 100vh;
    width: 100vw;
    z-index: -1;
    background-color: #ffffff90;
}

nav .links a:hover {
    scale: 1.05;
    color: #00b7ff;
}

nav .links a:hover::before {
    background-color: #00b7ff;
    box-shadow: 0 0 5px 0 #00b7ff;
    width: 100%;
    right: 0%;
}

#login {
    text-shadow: 0 0 5px #00b7ff;
    font-size: 1.2em;
}

#login:hover {
    color: #fff;
}

#login::before {
    z-index: -1;
    left: -10px;
    bottom: -9px;
}

#login:hover::before {
    border-radius: 5px;
    height: 160%;
    right: -10px;
    width: calc(100% + 20px);
}

@media screen and (max-width:950px) {
    nav .links {
        top: 0;
        width: 70%;
        font-size: 20px;
        flex-direction: column;
        position: fixed;
        height: 100vh;
        background: url(".././images/menu-bg.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        border-radius: 80px 0 0 80px;
        translate: 101% 0;
        border-left: 2px dotted #00b7ff;
        /* box-shadow: #00000060 0px 0px 15px 10px; */
    }

    nav .links a {
        margin: 0 25px;
        padding: 15px 0;
    }

    nav .links a:last-child {
        margin-bottom: 40px;
    }

    nav .links a:hover {
        translate: -10px 0;
    }

    nav .links a:hover::before {
        translate: 10px 0;
    }

    nav .links a::before {
        content: "";
        position: absolute;
        height: 2px;
        bottom: -5px;
    }

    #logo {
        height: 55px !important;
    }

    #menu {
        display: block !important;
    }

    #close {
        display: block !important;
    }

    #login::before {
        z-index: -1;
        left: 0;
        bottom: 0px;
    }

    #login:hover::before {
        border-radius: 5px;
        height: 100%;
        right: 0px;
        width: 100%;
    }
}
</style>
<nav>
    <img style="display: none; rotate: 180deg; height: 35px; margin: 0 30px;" src=".././images/menu.png" id="menu"
        alt="menu">

    <div class="modal"></div>
    <div class="links">
        <img style="display: none; rotate: 180deg; height: 35px; width: 35px; margin: 0 30px;"
            src=".././images/close.png" id="close" alt="close">

        <a id="login"
            href="<?= $isLogin ? 'profile.php' : 'login_page.php' ?>"><?= $isLogin ? 'پروفایل' : 'ثبت نام / ورود' ?></a>
        <a href=".././index.php#form">جستجو</a>
        <a href=".././index.php#main">ویژگی ها</a>
        <a href="#">درباره ما</a>
    </div>

    <div style="margin: 0 30px">
        <img id="logo" src=".././images/logo.png" alt="logo" style="height: 70px" />
    </div>

</nav>
<script>
const navbar = document.querySelector("nav");
const links = document.querySelector("nav .links");
const logo = document.querySelector("#logo");
window.addEventListener("scroll", () => {
    if (document.documentElement.scrollTop >= 23) {
        navbar.style =
            "backdrop-filter: blur(7px); background-color: #ffffff60; box-shadow: #ffffff60 0px 0px 15px 10px;";
        logo.style = "height: 50px !important;";
    } else {
        navbar.style =
            "backdrop-filter: blur(0px); background-color: transparent; box-shadow: none;";
        logo.style = "height: 70px;";
    }
});
window.addEventListener("resize", () => {
    if (window.innerWidth >= 850) {
        modal.style.display = "none"
        links.style = ""
    }
})

const menu = document.getElementById("menu");
const close = document.getElementById("close");
const modal = document.querySelector(".modal");
menu.addEventListener("click", () => {
    modal.style.display = "block";
    links.style = "translate: 0%"
});
close.addEventListener("click", () => {
    modal.style.display = "none";
    links.style = "translate: 101%"
});
modal.addEventListener("click", () => {
    modal.style.display = "none";
    links.style = "translate: 101%"
});

const a = links.querySelectorAll("a");
a.forEach(link => {
    link.addEventListener("click", () => {
        modal.style.display = "none"
        links.style = ""
    })
});
</script>