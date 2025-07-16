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

/* nav .links a::after{
                content: "";
                position: absolute;
                bottom: -5px;
                height: 2px;
                left: 50%;
                width: 0%;
                background-color: #ffffff;
                transition: all ease-in-out 0.3s;
            } */
nav .links a:hover {
    color: #00b7ff;
}

nav .links a:hover::before {
    background-color: #00b7ff;
    width: 100%;
    right: 0%;
}

@media screen and (max-width:850px) {
    nav .links {
        top: 0;
        width: 70%;
        font-size: 20px;
        flex-direction: column;
        position: fixed;
        height: 100vh;
        background: url("menu-bg.jpg");
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
}
</style>
<nav>
    <img style="display: none; rotate: 180deg; height: 35px; margin: 0 30px;" src="menu.png" id="menu" alt="menu">

    <div class="modal"></div>
    <div class="links">
        <img style="display: none; rotate: 180deg; height: 35px; width: 35px; margin: 0 30px;" src="close.png"
            id="close" alt="close">

        <a href="./index.php#form">جستجو</a>
        <a href="./index.php#main">ویژگی ها</a>
        <a href="#">درباره ما</a>
        <!-- <a href="#">فیلم ها</a> -->
    </div>

    <div style="margin: 0 30px">
        <img id="logo" src="logo.png" alt="logo" style="height: 70px" />
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