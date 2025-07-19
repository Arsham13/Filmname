<?php
$pdo = require_once './Connection.php';

$username = "Ayshin";
$password = hash("haval160,4", "123456789");
$age = 33;
$gender = "Female";

$sql = "INSERT INTO Users(Username, Password, Age, Gender) VALUES(:username, :password, :age, :gender)";
$statement = $pdo->prepare($sql);


// $statement->execute([
//     ":username" => $username,
//     ":password" => $password,
//     ":age" => $age,
//     ":gender" => $gender,
// ]);

?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./main/firstStyles.css" />
    <title>Document</title>
    <style>
    .hero {
        position: fixed;
        background-image: url(./images/hero.jpg);
        background-position: center;
        /* background-repeat: no-repeat; */
        z-index: -3;
        width: 100%;
        height: 100vh;
        filter: blur(1px);
        cursor: progress !important;
    }

    form {
        z-index: -2;
        background-image: linear-gradient(#00000070, #00000060);
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 40px;
        text-align: center;
    }

    form h1 {
        padding: 5px;
    }

    form div {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    form div div {
        width: 60%;
        justify-content: start;
    }

    form div input {
        direction: ltr;
        font-family: "hey2";
        border-radius: 10px;
        background-color: #ffffffd5;
        backdrop-filter: blur(5px);
        width: 100%;
        height: 30px;
        border: none;
        padding: 15px 17px !important;
        font-size: 21px;
        outline: 0px solid #00000060;
        caret-color: #0092ca;
        transition: 0.1s;
    }

    form div input:focus {
        outline: 2px solid #00b7ff69;
    }

    form div button {
        color: #fff;
        /* position: absolute; */
        z-index: 2;
        font-family: "hey2";
        font-size: 20px;
        /* right: 0px; */
        padding: 5px 10px;
        height: 3em;
        border: none;
        border-radius: 10px;
        outline: 0px solid #00000060;
        background-color: #00b7ff;
        transition: 0.2s;
    }

    form div button:hover {
        background-color: #008cc4;
    }

    form div button:focus {
        outline: 1px solid #000000;
    }

    .icons {
        z-index: 10;
        position: absolute;
        height: 40px;
        width: 40px;
        animation: moving ease-in-out alternate infinite;
    }

    @keyframes moving {
        0% {
            translate: 0px 0px;
        }

        33% {
            translate: 15px 10px;
        }

        66% {
            translate: 0px -10px;
        }

        100% {
            translate: -15px 10px;
            rotate: -20deg;
        }
    }

    main {
        background-image: url("./images/34293830_blue_abstract_lines_2.svg");
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .featurs {
        text-align: center;
        max-width: 800px;
        margin: 50px auto 80px auto;
        margin-top: 0;
        /* height: 100%; */
        position: relative;
        padding: 85px 0 0;
        user-select: none;
    }

    .featurs::before {
        content: "";
        position: absolute;
        height: 30px;
        width: 30px;
        background-color: #ffffff25;
        border-radius: 40%;
        /* z-index: -1; */
        animation: rot 7s infinite ease-out;
        left: 0%;
        top: 5%;
    }

    .featurs::after {
        content: "";
        position: absolute;
        height: 15px;
        width: 15px;
        background-color: #ffffff25;
        border-radius: 40%;
        /* z-index: -1; */
        animation: rot 3s infinite ease-in-out;
        left: 5%;
        top: 12%;
        translate: -1px -1px;
    }

    @keyframes rot {

        0%,
        100% {
            translate: 0;
            rotate: 0;
            border-radius: 40%;
        }

        25% {
            translate: -8px 1px;
            rotate: 150deg;
            border-radius: 20%;
        }

        50% {
            translate: -7px 8px;
            rotate: 100deg;
            border-radius: 50%;
        }

        75% {
            translate: -5px -8px;
            rotate: 70deg;
            border-radius: 30%;
        }
    }

    .featurs .item {
        transition: all ease-out 0.2s;
        display: flex;
        align-items: center;
        font-size: 1.2em;
        background-color: #00b7ff36;
        backdrop-filter: blur(4px);
        border-radius: 20px;
        padding: 10px;

        height: 300px;
        min-width: calc(100% - 20px);

        & h2 {
            margin-bottom: 20px;
        }
    }

    .featurs .item:active {
        scale: 1.01;
    }

    .feature {
        /* display: flex; */
        overflow: hidden;
        position: relative;
        animation: shows 0.5s alternate 1 ease-in;
        animation-play-state: paused;
    }

    .feature:hover {
        cursor: grab;
    }

    .feature:active {
        cursor: grabbing;
    }

    .slider-wrapper {
        display: flex;
        transition: transform 0.5s ease;
        width: 100%;
    }

    .dot.active {
        background: #00b7ff;
        box-shadow: 0 0 5px #00b7ff;
        width: 20px;
    }

    .featurs .title {
        font-size: 3em;
        margin: 0 0 40px 0;
    }

    .featurs .title::before {
        content: "";
        position: absolute;
        background-color: #00b7ff;
        height: 3px;
        border-radius: 10px;
        width: 50px;
        right: calc(50% - 35px);
        margin-top: 65px;
        transition: all ease-out 0.2s;
    }

    .featurs .title:hover::before {
        margin-top: 67.5px;
    }

    @media screen and (max-width: 900px) {
        .featurs {
            max-width: 80% !important;
        }

        .featurs .item {
            flex-direction: column;
            height: 400px;
        }

        form div div {
            width: 80%;
        }

        .feature img {
            height: 50% !important;
            width: 50% !important;
        }
    }

    @media screen and (max-width: 500px) {
        form div div {
            width: 90%;
        }
    }

    .gerdali::before {
        content: "";
        position: absolute;
        height: 30px;
        width: 30px;
        background-color: #ffffff25;
        border-radius: 30%;
        /* z-index: -1; */
        animation: rot 10s infinite ease-in;
        right: 0%;
        bottom: -5%;
    }

    .gerdali::after {
        content: "";
        position: absolute;
        height: 15px;
        width: 15px;
        background-color: #ffffff25;
        border-radius: 30%;
        /* z-index: -1; */
        animation: rot 6s infinite ease-in-out;
        right: 5%;
        bottom: -10%;
        translate: -1px -1px;
    }

    .featurs .item img {
        height: 60%;
        width: 60%;
    }

    .nav-button {
        position: absolute;
        top: 60%;
        transform: translateY(-50%);
        background: #ffffff25;

        color: white;
        border: none;
        font-size: 20px;
        padding: 7px 14px;
        cursor: pointer;
        border-radius: 50%;
        z-index: 5;
        transition: all ease-in 0.2s;
    }

    .nav-button:hover {
        background: #ffffff70;
    }

    .prev {
        right: -40px;
    }

    .next {
        left: -40px;
    }

    .dots {
        margin: 20px 0 10px 0;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .dot {
        width: 12px;
        height: 12px;
        background: #bbb;
        border-radius: 20px;
        cursor: pointer;
        transition: all ease-out 0.3s;
    }

    .dot.active {
        background: #00b7ff;
        box-shadow: 0 0 5px #00b7ff;
        scale: 1;
        width: 20px;
    }

    @media screen and (max-width: 415px) {
        .nav-button {
            display: none;
        }
    }

    @keyframes shows {
        0% {
            opacity: 0;
            scale: 0.7;
            transform: rotateZ(20deg);
        }

        100% {
            opacity: 1;
            scale: 1;
        }
    }
    </style>
</head>

<body>
    <?php include "./parts/mouse.php"  ?>
    <?php include "./parts/navar.php"  ?>
    <?php include "./parts/nav.php"  ?>
    <?php include "./parts/toTop.php"  ?>

    <img class="icons" style="rotate: 20deg; left: 9%; top: 16%; animation-duration: 3s"
        src="./images/icons8-movie-50.png" alt="" />
    <img class="icons" style="rotate: 20deg; right: 5%; top: 80%; animation-duration: 4s"
        src="./images/icons8-photo-gallery-50.png" alt="" />
    <!-- <img class="icons" src="./icons8-movie-50.png" alt=""> -->
    <?php include "./parts/hero.php" ?>
    <form action="omdb.php" method="get" id="form">
        <h1>
            نام فیلم یا سریال مدنظر خود را در کادر زیر به زبان انگلیسی وارد
            کنید و دکمه جستجو را فشار دهید
        </h1>
        <div>
            <div>
                <button type="submit">جستجو</button>
                <input id="search" type="text" name="title" />
            </div>
        </div>
    </form>
    <main id="main">
        <div class="featurs">
            <button class="nav-button prev" onclick="prevSlide()">❮</button>
            <button class="nav-button next" onclick="nextSlide()">❯</button>
            <h1 class="title">ویژگی ها</h1>
            <div class="oh"></div>
            <div class="feature" id="touchArea">
                <div class="slider-wrapper" id="slider">
                    <div class="item">
                        <img src="./images/sapiens.svg" alt="" />
                        <div class="texts">
                            <h2>تنوع بسیار</h2>
                            <p>
                                در وبسایت فیلمنامه شما می توانید مجموعه ی
                                زیادی از فیلم ها رو جست و جو کنید. در
                                فیلمنامه آرشیو بسیاری از فیلم ها از قدیمی
                                ترین ها تا جدید ترین ها رو می تونید
                                درموردشون اطلاعات کسب کنید.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/sapiens.svg" alt="" />
                        <div class="texts">
                            <h2>تنوع بسیار</h2>
                            <p>
                                در وبسایت فیلمنامه شما می توانید مجموعه ی
                                زیادی از فیلم ها رو جست و جو کنید. در
                                فیلمنامه آرشیو بسیاری از فیلم ها از قدیمی
                                ترین ها تا جدید ترین ها رو می تونید
                                درموردشون اطلاعات کسب کنید.
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/sapiens.svg" alt="" />
                        <div class="texts">
                            <h2>تنوع بسیار</h2>
                            <p>
                                در وبسایت فیلمنامه شما می توانید مجموعه ی
                                زیادی از فیلم ها رو جست و جو کنید. در
                                فیلمنامه آرشیو بسیاری از فیلم ها از قدیمی
                                ترین ها تا جدید ترین ها رو می تونید
                                درموردشون اطلاعات کسب کنید.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="dots" id="dots"></div>
            </div>
            <div class="gerdali"></div>
        </div>
        <?php include "./parts/footer.php" ?>
    </main>

    <script>
    const slider = document.getElementById("slider");
    const dotsContainer = document.getElementById("dots");
    const slides = document.querySelectorAll(".item");
    const touchArea = document.getElementById("touchArea");
    let current = 0;
    let startX = 0;
    let isSwiping = false;

    function createDots() {
        slides.forEach((value, index) => {
            const dot = document.createElement("div");
            dot.classList.add("dot");
            if (index === 0) dot.classList.add("active");
            dot.addEventListener("click", () => goToSlide(index));
            dotsContainer.appendChild(dot);
        });
    }

    function updateDots() {
        const dots = document.querySelectorAll(".dot");
        dots.forEach((dot) => dot.classList.remove("active"));
        dots[current].classList.add("active");
    }

    function goToSlide(index) {
        current = (index + slides.length) % slides.length;
        slider.style.transform = `translateX(${100 * current}%)`;
        updateDots();
    }

    function nextSlide() {
        goToSlide(current + 1);
    }

    function prevSlide() {
        goToSlide(current - 1);
    }
    // Touch + Mouse Drag Events
    function startDrag(x) {
        startX = x;
        isSwiping = true;
    }

    function moveDrag(x) {
        if (!isSwiping) return;
        const diff = startX - x;
        if (Math.abs(diff) > 50) {
            if (diff < 0) nextSlide();
            else prevSlide();
            isSwiping = false;
        }
    }

    function endDrag() {
        isSwiping = false;
    }

    // Touch Events
    touchArea.addEventListener("touchstart", (e) =>
        startDrag(e.touches[0].clientX)
    );
    touchArea.addEventListener("touchmove", (e) =>
        moveDrag(e.touches[0].clientX)
    );
    touchArea.addEventListener("touchend", endDrag);

    // Mouse Events
    touchArea.addEventListener("mousedown", (e) =>
        startDrag(e.clientX)
    );
    touchArea.addEventListener("mousemove", (e) => {
        if (e.buttons !== 1) return; // فقط هنگام نگه داشتن دکمه ماوس
        moveDrag(e.clientX);
    });
    touchArea.addEventListener("mouseup", endDrag);
    touchArea.addEventListener("mouseleave", endDrag);

    createDots();

    // ____________________________________________________

    // وقتی که به یک المان با اسکرول رسید
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style = "animation-play-state: running;";
                // observer.unobserve(entry.target); // فقط یک بار اجرا بشه
            }
        });
    });

    document.querySelectorAll(".feature").forEach((box) => {
        observer.observe(box);
    });
    </script>
</body>

</html>