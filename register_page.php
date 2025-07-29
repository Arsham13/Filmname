<?php

session_start();

if (isset($_SESSION["user"])) {
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./main/firstStyles.css" />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
    <title>Register to Filmname</title>
    <style>
    html {
        height: 100vh;
    }

    body {
        background-image: url(./images/menu-bg.jpg);
        background-attachment: fixed;
        background-position: center;
        background-size: cover;
        /* background-image: linear-gradient(
                    45deg,
                    #0099d6,
                    #002b3b,
                    #00587a,
                    #002b3b,
                    #0099d6
                ); */
        /* backdrop-filter: brightness(30%); */
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #292929;
    }

    form {
        /* backdrop-filter: blur(7px); */
        display: flex;
        flex-direction: column;
        /* box-shadow: 0 0 15px 5px #ffffff33; */
        width: 50%;
        max-width: 550px;
        padding: 0 30px;
        padding-bottom: 20px;
        border-radius: 20px;
        font-size: 1.1em;
        align-items: center;
        justify-content: space-around;
        height: 100vh;
        text-align: center;
    }

    form div {
        display: flex;
        flex-direction: column-reverse;
        width: 100%;
    }

    .gender {
        flex-direction: row;
    }

    #agree {
        width: 100%;
    }

    h1 {
        margin-top: 30px;
    }

    h6,
    h5 {
        margin: 25px 0 30px 0;
    }

    label {
        color: #ffffffab;
        display: flex;
        align-items: center;
        gap: 5px;
        translate: -5px 37px;
        padding: 0 17px;
        transition: 0.2s all ease-in-out;
        cursor: text;
        width: fit-content;
        user-select: none;
    }

    label a,
    h5 a {
        text-decoration: none;
        color: #00b7ffab;
        transition: all ease-in-out 0.3s;
    }

    label a:hover,
    h5 a:hover {
        color: #00b7ff;
        text-decoration: underline;
    }

    h5 {
        margin: 10px !important;
    }

    input {
        backdrop-filter: blur(3px);
        font-family: "hey2";
        color: #fff;
        height: 45px;
        padding: 0px 16px;
        padding-top: 5px;
        border-radius: 10px;
        border: 1px solid #00b7ff99;
        font-size: 1.1em;
        caret-color: #00b7ff;
        accent-color: #00b7ff;
        outline: 0;
        background-color: #ffffff15;
        transition: all 0.2s ease-in-out;
        color-scheme: dark;
    }

    input:focus {
        border: 1px solid #00b7ff;
    }

    input:focus+label {
        translate: -15px 10px !important;
        font-size: 0.95em !important;
        padding: 0 17px !important;
        backdrop-filter: blur(3px);
        color: #00b7ff !important;
    }

    .label_focusout {
        translate: -15px 9px;
        padding: 0 12px;
        font-size: 0.95em;
        color: #ffffffab;
        backdrop-filter: blur(3px);
    }

    input:checked+label {
        color: #00b7ff;
    }

    button {
        color: #fff;
        font-family: "hey";
        padding: 15px 30px;
        border-radius: 15px;
        margin-top: 50px;
        border: 0px;
        transition: 0.2s all ease-in-out;
        font-size: 1.1em;
        background-color: #00b7ff;
    }

    button:hover {
        background-color: #00a4e6;
        box-shadow: 0 0px 15px -2px #00374d;
    }

    button:active {
        translate: 0 -2px;
        background-color: #0089be;
        box-shadow: 0 0px 15px -4px #00374d;
    }

    .date {
        direction: ltr;
    }

    #error {
        width: 100%;
        color: red;
        display: flex;
        flex-direction: column;
        align-items: start;
    }

    /* .circle {
                position: absolute;
                width: 200px;
                height: 200px;
                border-radius: 50%;
                background-color: #00b7ff;
            }
            .c1 {
                left: 20%;
                top: 60%;
                animation: c1 infinite ease-in-out 16s;
            }
            @keyframes c1 {
                0%,
                100% {
                    translate: 0;
                }
                25% {
                    translate: 0 -160%;
                }
                50% {
                    translate: 311% -160%;
                }
                75% {
                    translate: 311% 0;
                }
            }
            .c2 {
                right: 20%;
                bottom: 65%;
                width: 150px;
                height: 150px;
                animation: c2 infinite ease-in-out 16s;
                background-color: #005e83;
            }
            @keyframes c2 {
                0%,
                100% {
                    translate: 0;
                }
                25% {
                    translate: 0 160%;
                }
                50% {
                    translate: -311% 160%;
                }
                75% {
                    translate: -311% 0;
                }
            } */

    @media screen and (max-width: 550px) {
        form {
            width: 100%;
            border-radius: 0px;
        }
    }
    </style>
</head>

<body>
    <?php include "./parts/mouse.php"  ?>

    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <form action="register.php" method="post" id="form">
        <h1>فرم ثبت نام</h1>
        <h5>
            لطفا اطلاعات خواسته شده را کامل کنید سپس دکمه ثبت نام را فشار
            دهید
        </h5>

        <div id="error"></div>

        <div>
            <input type="text" name="username" id="username" />
            <label for="username">نام کاربری</label>
        </div>

        <div>
            <input type="text" name="email" id="email" />
            <label for="email">ایمیل</label>
        </div>

        <div>
            <input type="password" name="password" id="password" />
            <label for="password">رمز عبور</label>
            <?php include "./parts/showPass.php" ?>

        </div>


        <div>
            <input type="text" name="date" id="date" />
            <label for="date">تاریخ تولد (اختیاری)</label>
        </div>

        <div class="gender">
            <label style="padding: 0">جنسیت : </label>

            <label for="male">
                <input type="radio" name="gender" id="male" value="male" checked />
                مرد
            </label>

            <label for="female">
                <input type="radio" name="gender" id="female" value="female" />
                زن
            </label>
        </div>

        <label for="agree_checkbox" id="agree">
            <input type="checkbox" id="agree_checkbox" name="agree_checkbox" />

            با <a href="#">قوانین و حریم خصوصی</a> موافقم
        </label>

        <button type="submit">ثبت‌ نام</button>
        <h5>
            قبلا ثبت نام کرده اید؟ <a href="login_page.php">اینجا را کلیک کنید</a>
        </h5>
    </form>
    <script>
    const form = document.getElementById("form");
    const error = document.getElementById("error");
    const inputs = document.querySelectorAll("input");

    const date_input = document.getElementById("date");
    const agree_checkbox = document.getElementById("agree_checkbox");

    const labels = document.querySelectorAll("label");

    inputs.forEach((input) => {
        input.addEventListener("focusout", (e) => {
            if (input.value.length != 0) {
                input.nextElementSibling.className = "label_focusout";
            } else {
                input.nextElementSibling.className = "";
            }
            agree_checkbox.nextElementSibling.className = "";
        });

    });

    date_input.addEventListener("focus", () => {
        date_input.type = "date";
    });
    date_input.addEventListener("focusout", () => {
        date_input.nextElementSibling.style =
            "translate: -15px 9px; padding: 0 12px; font-size: 0.95em; color: #ffffffab; backdrop-filter: blur(3px);";
    });

    form.addEventListener("submit", function(e) {
        error.textContent = "";

        const username = document
            .getElementById("username")
            .value.trim();
        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;
        const genderSelected = document.querySelector(
            'input[name="gender"]:checked'
        );

        error.textContent = "";

        if (username.length < 3 || password.length > 30) {
            e.preventDefault();
            error.textContent = "نام کاربری باید بین 3 تا 30 حرف باشد.";
            return;
        }
        if (
            email.length < 3 ||
            !email.includes("@") ||
            !email.includes(".")
        ) {
            e.preventDefault();
            error.textContent = "لطفا ایمیل معتبری وارد کنید.";
            return;
        }

        if (password.length < 6 || password.length > 20) {
            e.preventDefault();
            error.textContent = "رمز عبور باید بین ۶ تا ۲۰ حرف باشد.";
            return;
        }

        if (!genderSelected) {
            e.preventDefault();
            error.textContent = "لطفاً جنسیت خود را انتخاب کنید.";
            return;
        }

        if (!agree_checkbox.checked) {
            e.preventDefault();
            error.textContent =
                "برای ثبت‌ نام باید با قوانین سایت موافقت کنید.";
            return;
        }


    });
    </script>
</body>

</html>