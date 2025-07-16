<?php
$api_key = "72bbcf46"; // کلید واقعی شما
$movie_title = $_GET["title"]; // عنوان فیلم
$url = "http://www.omdbapi.com/?t=" . urlencode($movie_title) . "&apikey=" . $api_key . "&plot=full";

// دریافت داده از API
$data = file_get_contents($url);
$movie = json_decode($data, true); // تبدیل JSON به آرایه

// نمایش اطلاعات

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstStyles.css">
    <title>Document</title>
</head>

<style>
@font-face {
    font-family: "hey";
    src: url("./Peyda-Bold.ttf");
}

header {
    z-index: -2;
    background-image: linear-gradient(#00000075, #00000070);
    width: 100%;
    height: fit-content;
    display: flex;
    flex-direction: column;
    /* justify-content: space-around; */
    align-items: center;
    font-size: 1.4rem;
}

.header {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: start;
    margin-bottom: 55px;
}

.all {
    padding: 140px 150px 20px 150px;
}

.hero {
    filter: blur(10px) !important;
    scale: 1.04;
    background-image: url(<?= $movie['Poster'] == "N/A" ? " ./hero.jpg " : $movie['Poster']  ?>) !important;
    background-repeat: no-repeat;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.info {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.info h1 {
    margin-bottom: 20%;
}

/* .i2 {
    padding: 0 10rem;
} */

.genres {
    display: flex;
    gap: 5px;
}

.genres .genre {
    background-color: #00b7ff;
    padding: 5px;
    border-radius: 10px;
}

span {
    color: #ffffffbb;
}

#poster {
    height: 300px;
    box-shadow: #ffffff60 0px 0px 15px 10px;
    border-radius: 10px;
}

.notFound {
    position: absolute;
    width: 100%;
    height: 100%;
    font-family: 'hey';
}

@media screen and (max-width:850px) {

    .header {
        align-items: center;
        flex-direction: column;
    }

    .info {
        align-items: center;
    }

    header {
        font-size: 140%;
    }

    .all {
        padding: 140px 30px 20px 30px;
    }

    #poster {
        height: 250px;
    }
}
</style>

<body>
    <?php if ($movie['Response'] == 'True') { ?>

    <?php include "./mouse.php"  ?>
    <?php include "./navar.php" ?>
    <?php include "./nav.php" ?>
    <?php include "./hero.php" ?>
    <?php include "./toTop.php" ?>

    <header>
        <div class=" all">
            <div class="header">
                <div class="info">
                    <h1 style="font-size: 2.5em; direction: ltr;">
                        <?= $movie['Title'] ?>
                    </h1>
                    <?php if ($movie['Type'] != "series") { ?>
                    <h4>
                        <span>مدت زمان</span> : <?= $movie['Runtime'] == "N/A" ? " - " : $movie['Runtime'] ?>
                    </h4>
                    <?php } ?>

                    <h4>
                        <span>سال ساخت</span> : <?= $movie['Year']  == "N/A" ? " - " : $movie['Year'] ?>
                    </h4>
                    <h4>
                        <span>تاریخ انتشار</span> : <?= $movie['Released']  == "N/A" ? " - " : $movie['Released'] ?>
                    </h4>
                    <h4>
                        <span>زبان</span> : <?= $movie['Language']  == "N/A" ? " - " : $movie['Language'] ?>
                    </h4>
                    <h4>
                        <span>کشور سازنده</span> : <?= $movie['Country']  == "N/A" ? " - " : $movie['Country'] ?>
                    </h4>

                </div>
                <div class="info" style="align-items: center;">
                    <h6 style="font-size: 0.5em;">
                        <span>
                            Imdb Id :
                            <?= $movie['imdbID']  == "N/A" ? " - " : $movie['imdbID'] ?>
                        </span>
                    </h6>
                    <img src=" <?= $movie['Poster'] == "N/A" ? " ./NotFound.png " : $movie['Poster'] ?>"
                        alt="<?= $movie['Title'] ?> Poster" id="poster">
                    <h6>
                        <span>نوع</span> : <?= $movie['Type'] == "movie" ? "فیلم سینمایی" : "سریال" ?>
                    </h6>
                    <h6>
                        <span>رده بندی سنی</span> : <?= $movie['Rated'] == "N/A" ? " - " : $movie['Rated'] ?>
                    </h6>
                    <div class='genres'>
                        <?php
                $separator = ",";
                $genres = explode($separator, $movie['Genre']); 
                foreach ($genres as $key => $genre) {
                    $genre == "N/A" ? $genre = " - " : $genre;
                    echo "<h5 class='genre'>$genre</h5>";
                        }
                        ?>

                    </div>
                </div>
            </div>

            <div class="header">
                <div class="info">
                    <h4>
                        <span>کارگردان</span> : <?= $movie['Director']  == "N/A" ? " - " : $movie['Director'] ?>
                    </h4>
                    <h4>
                        <span>نویسنده</span> : <?= $movie['Writer']  == "N/A" ? " - " : $movie['Writer'] ?>
                    </h4>
                    <h4>
                        <span>بازیگران</span> : <?= $movie['Actors']  == "N/A" ? " - " : $movie['Actors'] ?>
                    </h4>
                    <span>خلاصه فیلم : </span>
                    <p style="direction: ltr;">
                        <?= $movie['Plot']  == "N/A" ? " - " : $movie['Plot'] ?>
                    </p>
                </div>

            </div>
            <div class="header">
                <div class="info">
                    <h4>
                        <span>افتخارات</span> : <?= $movie['Awards']  == "N/A" ? " - " : $movie['Awards'] ?>
                    </h4>
                </div>
            </div>
            <div class="header">
                <h4>
                    <span>رتبه بندی ها</span> :
                    <br>
                    <?php foreach ($movie['Ratings'] as $key => $rating) {
                        echo $rating['Source'] . ' : ' . $rating['Value'] . '<br/>';
                    } ?>
                    Meta Score :
                    <?= $movie['Metascore'] == "N/A" ? " - " : $movie['Metascore'] ?>
                    <br><br>
                    Imdb Rating :
                    <?= $movie['imdbRating'] == "N/A" ? " - " : $movie['imdbRating'] ?>
                    <br>
                    Imdb Votes :
                    <?= $movie['imdbVotes'] == "N/A" ? " - " : $movie['imdbVotes'] ?>
                </h4>
            </div>
            <div class="header">
                <?php if ($movie['Type'] != "series") { ?>
                <h4>
                    <span>میزان فروش</span> : <?= $movie['BoxOffice'] == "N/A" ? " - " : $movie['BoxOffice'] ?>
                </h4>
                <?php } ?>
            </div>
        </div>

    </header>

    <!--

            <?php if ($movie['Type'] != "series") { ?>
            <h1>
                box office :

            </h1>
            <?php } ?> -->
    <?php include "./footer.php" ?>
    <?php
} else if($_GET['title'] == '') {
    echo "    <div class='notFound' id='notFound1'
    style='display: flex; align-items: center; justify-content: center; width: 100%; height: 100%; font-family: 'hey';'>
    <h1 style='color: #000;'>لطفا نام فیلم را وارد کنید</h1>
</div>";
    } else {
        echo "     <div class='notFound' id='notFound1'
        style='display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; height: 100%; font-family: 'hey';'>
        <h1 style='color: #000;'>یافت نشد!</h1>
        <h1 style='color: #000;'>اگر نام فیلم را فارسی وارد کرده اید لطفا انگلیسی وارد کنید. اگر انگلیسی وارد کرده اید در نگارش و نوشتن آن
            دقت کنید که اشتباه ننوشته باشید. در غیر اینصورت فیلم مورد نظر شما در پایگاه داده وجود ندارد!</h1>
    </div>";
    }
    ?>
</body>

</html>