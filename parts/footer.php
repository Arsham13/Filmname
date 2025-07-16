<style>
.footer {
    background-image: url(".././images/Footer-Background.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}

footer {
    display: flex;
    align-items: center;
    justify-content: space-around;
    padding: 50px 0;
    backdrop-filter: blur(5px);
}

footer .foots {
    display: flex;
    flex-direction: column;
    gap: 10px;
    align-items: start;
    padding: 40px;
}

footer .foots h2 {
    margin-bottom: 20px;
}

footer .foots a {
    font-size: 1.3em;
    color: #00b7ff;
    text-decoration: none;
    transition: ease-out 0.2s all;
}

footer .foots a::before {
    content: "";
    position: absolute;
    transition: ease-out 0.2s all;
    height: 3px;
    width: 8px;
    background-color: #fff;
    margin: 10px -17px 0 0;
}

footer .foots a:hover {
    translate: -5px 0;
}

footer .foots a:hover::before {
    translate: 5px 0;
}

footer .connect {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

footer .connect::before {
    content: "";
    position: absolute;
    transition: ease-out 0.2s all;
    height: 3px;
    width: 8px;
    background-color: #fff;
    margin: 17px -17px 0 0;
}

footer .connect a {
    height: 40px;
    width: 40px;
    border-radius: 10px;
    box-shadow: 0 3px 5px 3px #ffffff3a;
    background-color: #00b7ff;
}

footer .connect a::before {
    display: none;
}

footer .connect a:hover {
    height: 40px;
    width: 40px;
    border-radius: 10px;
    translate: 0;
    scale: 1.1;
    box-shadow: 0 3px 5px 1px #ffffff3a;
    background-color: #00b7ff;
}

footer .connect img {
    transition: ease-out 0.7s all;
    height: 40px;
    width: 40px;
}

footer .connect img:hover {
    scale: 0.9;
}

@media screen and (max-width:850px) {
    footer {
        flex-direction: column-reverse;
    }

    footer .foots {
        align-items: center;
        border-top: 1px solid #333;
    }
}
</style>
<div class="footer">
    <footer>
        <div class="foots">
            <h2>بخش های وبسایت</h2>
            <a href=".././index.php#form">جستجو</a>
            <a href=".././index.php#main">ویژگی ها</a>
            <a href="#">درباره ما</a>
        </div>
        <div class="foots">
            <h2>ارتباط با ما</h2>
            <a href="tel:09945933373">09945933373</a>

            <div class="connect">
                <a href="#">
                    <img src=".././images/icons8-instagram.svg" alt="Instagram" />
                </a>
                <a href="#">
                    <img src=".././images/icons8-whatsapp.svg" alt="Telegram" />
                </a>
                <!-- <a href=""></a> -->
            </div>
        </div>
        <img id="logo" src=".././images/logo.png" alt="logo" style="height: 70px" />
    </footer>
</div>