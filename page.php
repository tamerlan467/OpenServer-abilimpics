<?php
/**
 * Template Name: page
 * Author: Tamerlan Zhargasov
 * Description: Главная страница темы Maxima
 */
?>
<!-- Подключаем header и footer  -->
<?php get_header(); ?>
<!-- Главная страница со слайдером фильтром и разделами ПО Компьютеры  -->
<!-- Фильтр -->
<div class="container">
    <div class="row">
        <div class="aside col-3" style="padding-top: 20px;">
            <div style="position: sticky; top: 20px;" class="accordion active" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Фильтр
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <input class="w-100" type="text" placeholder="Параметр">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Фильтр
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div>
                                <label for="check1" style="width: unset;" class="row align-items-center">
                                    <input type="checkbox" name="chek" id="check1" style="width: unset;">
                                    <p style="width: unset; margin-bottom: unset;">Чекбокс</p>
                                </label>
                            </div>
                            <div>
                                <label for="check2" style="width: unset;" class="row align-items-center">
                                    <input type="checkbox" name="chek" id="check2" style="width: unset;">
                                    <p style="width: unset; margin-bottom: unset;">Чекбокс</p>
                                </label>
                            </div>
                            <div>
                                <label for="check3" style="width: unset;" class="row align-items-center">
                                    <input type="checkbox" name="chek" id="check3" style="width: unset;">
                                    <p style="width: unset; margin-bottom: unset;">Чекбокс</p>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Фильтр
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                            collapse
                            plugin adds the appropriate classes that we use to style each element. These classes control
                            the overall
                            appearance, as well as the showing and hiding via CSS transitions. You can modify any of
                            this with
                            custom CSS or overriding our default variables. It's also worth noting that just about any
                            HTML can go
                            within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Слайдер -->
        <div class="content col">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="3"></li>
                                <li data-target="#carouselExampleControls" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100"
                                        src="http://maxima:8080/wp-content/uploads/2023/04/news1.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="http://maxima:8080/wp-content/uploads/2023/04/news2.jpg"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="http://maxima:8080/wp-content/uploads/2023/04/news3.jpg" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="http://maxima:8080/wp-content/uploads/2023/04/news4.jpg"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100"
                                        src="http://maxima:8080/wp-content/uploads/2023/04/news5.jpg" alt="Fifth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Предыдущий</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Далее </span>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">

                <div class="col-4" style="margin:auto;">
                    <div class="row">

                        <img class="" style="width:250px; margin: auto; padding: 10px;" alt="Free Shipping"
                            src="http://maxima:8080/wp-content/uploads/2023/04/объявление.jpg">
                        <a href="http://maxima:8080/announcement/" class="btn btn-primary">Посмотреть</a>
                    </div>
                    <!-- <div class="col-4">
                        <div class="row">
                            <div class="col-2"><img class="rounded-circle" style="width:50px; border-radius:0;" alt="Free Shipping" src="http://maxima:8080/wp-content/uploads/2023/04/объявление.jpg">
                            </div>
                            <div class="col-lg-6 col-10 ml-1">
                                <h4>Бесплатный возврат</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-2"><img class="rounded-circle" style="width:50px; border-radius:0;" alt="Free Shipping" src="http://maxima:8080/wp-content/uploads/2023/04/объявление.jpg">
                            </div>
                            <div class="col-lg-6 col-10 ml-1">
                                <h4>Низкие цены</h4>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- Раздел ПО -->
            <hr>
            <h2 class="text-center">ПО</h2>
            <hr>
            <div class="container" style="border: 3px solid dodgerblue; padding: 10px;">
                <div class="row text-center">
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="card-img-top" style="width: 225px;height: 240px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/Microsoft-Windows-11-Pro.webp"
                                alt="Card image cap">
                            <div class="card-body">
                                <a href="http://maxima:8080/po/" class="btn btn-primary">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="card-img-top" style="width: 225px;height: 240px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/Microsoft-Windows-10-Home.webp"
                                alt="Card image cap">
                            <div class="card-body">
                                <a href="http://maxima:8080/po/" class="btn btn-primary">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="card-img-top" style="width: 225px;height: 240px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/Kaspersky-Standard.webp"
                                alt="Card image cap">
                            <div class="card-body">
                                <a href="http://maxima:8080/po/" class="btn btn-primary">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-4">
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="card-img-top" style="width: 225px;height: 240px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/Dr.Web-Security-Space.webp"
                                alt="Card image cap">
                            <div class="card-body">
                                <a href="http://maxima:8080/po/" class="btn btn-primary">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="card-img-top" style="width: 225px;height: 240px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/Без-названия-1.jpeg"
                                alt="Card image cap">
                            <div class="card-body">
                                <a href="http://maxima:8080/po/" class="btn btn-primary">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 pb-1 pb-md-0">
                        <div class="card" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="card-img-top" style="width: 225px;height: 240px;" src="
                                http://maxima:8080/wp-content/uploads/2023/04/d41rx33kudaeat8ueau4y31mnl1jmhz6.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <a href="http://maxima:8080/po/" class="btn btn-primary">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Раздел компьютеры -->
            <hr>
            <h2 class="text-center">Компьютеры</h2>
            <hr>
            <div class="container" style="border: 3px solid dodgerblue; padding: 30px;">
                <div class="row">

                    <ul class="list-unstyled">
                        <li class="media" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="mr-3" style="width: 200px;height: 200px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/ПК-DEXP-Aquilon-O272.webp"
                                alt="Универсальное изображение заполнителя">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">DEXP-Aquilon-O272</h5>
                                Этого достаточно и для работы, и для развлечений.<br>
                                Хранение необходимых файлов без потери работоспособности обеспечивает накопитель SSD на
                                120 ГБ.
                                <div>
                                    <a class="btn btn-primary" href="http://maxima:8080/computer/"
                                        style="color:#fff;padding:10px;margin-top:10px;">Далее</a>
                                </div>
                            </div>
                        </li>
                        <li class="media my-4" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="mr-3" style="width: 200px;height: 200px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/ZET-GAMING-NEO-M083.webp"
                                alt="Универсальное изображение заполнителя">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">ZET Gaming NEO M083</h5>
                                ПК ZET Gaming NEO M083 - стильная игровая модель с 4-ядерным, 8-поточным процессором
                                Intel Core i3-10105F, 16 гигабайтами оперативной памяти и видеокартой GeForce GTX 1650.
                                <div>
                                    <a class="btn btn-primary" href="http://maxima:8080/computer/"
                                        style="color:#fff;padding:10px;margin-top:10px;">Далее</a>
                                </div>
                            </div>
                        </li>
                        <li class="media" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="mr-3" style="width: 200px;height: 200px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/MSI-Cubi-N-JSL-041RU.webp"
                                alt="Универсальное изображение заполнителя">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">MSI Cubi N JSL-041RU</h5>
                                Мини ПК MSI Cubi N JSL-041RU, представленный в компактном форм-факторе неттопа, станет
                                вашим окном в мир разнообразных возможностей и подойдет для различных сценариев
                                использования.
                                <div>
                                    <a class="btn btn-primary" href="http://maxima:8080/computer/"
                                        style="color:#fff;padding:10px;margin-top:10px;">Далее</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-unstyled" >
                        <li class="media" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="mr-3" style="width: 200px;height:200px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/IRBIS-PCB507.webp"
                                alt="Универсальное изображение заполнителя">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">IRBIS PCB507</h5>
                                ПК IRBIS может использоваться как самодостаточный офисный ассистент или портативная
                                домашняя станция. Он получил процессор Intel, оперативную память DDR4.
                                <div>
                                    <a class="btn btn-primary" href="http://maxima:8080/computer/"
                                        style="color:#fff;padding:10px;margin-top:10px;">Далее</a>
                                </div>
                            </div>
                        </li>
                        <li class="media my-4" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="mr-3" style="width: 200px;height: 200px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/HP-ProDesk-400-G6-DM.webp"
                                alt="Универсальное изображение заполнителя">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">HP ProDesk 400 G6</h5>
                                Мини ПК HP ProDesk 400 G6 DM выполнен в компактном форм-факторе и обеспечивает
                                достаточно высокую производительность, необходимую для повседневной работы или учебы.
                                <div>
                                    <a class="btn btn-primary" href="http://maxima:8080/computer/"
                                        style="color:#fff;padding:10px;margin-top:10px;">Далее</a>
                                </div>
                            </div>
                        </li>
                        <li class="media" style="border: 2px solid dodgerblue; padding: 10px;">
                            <img class="mr-3" style="width: 200px;height: 200px;"
                                src="http://maxima:8080/wp-content/uploads/2023/04/Hiper-M9.webp"
                                alt="Универсальное изображение заполнителя">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Hiper M9</h5>
                                Hiper M9 — это мини-ПК, обладающий мощностью настольного компьютера, с множеством
                                функций для развлечений, игр и продуктивной работы.
                                <div>
                                    <a class="btn btn-primary" href="http://maxima:8080/computer/"
                                        style="color:#fff;padding:10px;margin-top:10px;">Далее</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- 
                    <nav aria-label="...">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <span class="page-link">Previous</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav> -->
                </div>
            </div>
            <hr>
        </div>
    </div>
    <?php get_footer(); ?>