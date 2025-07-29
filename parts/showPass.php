<style>
#eye {
    position: absolute;
    height: 25px;
    margin-bottom: 0px;
    margin-right: -40px;
    background-color: #00b7ff50;
    padding: 13px 7px;
    border-radius: 7px;
    cursor: pointer;
    /* backdrop-filter: blur(3px); */

}

.close-line {
    position: absolute;
    pointer-events: none;
    height: 2px;
    width: 40px;
    background-color: #fff;
    margin-bottom: 24px;
    margin-right: -41px;
    rotate: -45deg;
}

@media screen and (max-width: 550px) {
    #eye {
        margin-right: 0%;
        left: 31px;
    }

    .close-line {
        margin-right: 0;
        left: 31px;
    }
}
</style>

<img id="eye" src="../images/eye.png" alt="close">
<div class="close-line"></div>
<script>
const password = document.getElementById("password");
const eye = document.getElementById("eye");
const close_line = document.querySelector(".close-line");

let isShow = false;
eye.addEventListener("click", () => {
    if (isShow == false) {
        password.type = "text"
        close_line.style = "width: 0px;"
    } else {
        password.type = "password"
        close_line.style = "width: 40px;"
    }

    isShow = !isShow;
})
</script>