<?php
include("header.php");
?>

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <!-- section begin -->
    <section id="subheader" class="jarallax">
        <img src="images/background/subheader-overlay.png" class="jarallax-img" alt="">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Domain Reservation</h1>
                        <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">/</span></a><span class="active">Domain Reservation</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mb-5">
            <h1 class="text-center mb-5 ">Relații Clienți</h1>
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <img class="img-fluid anim-up-down" src="images/site/search-domain/customer support1.png" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="p-sm-30 pb-sm-0 mb-sm-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="">
                                    <p>Daca intampinati probleme sau aveti nelamuriri, nu ezitati sa ne contactati.</p>
                                </div>
                                <div class="">
                                    <p>Acest formular nu trebuie folosit pentru prelungirea sau modificarea contractelor! In aceste cazuri va rugam sa ne contactati.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-top jarallax position-relative " aria-label="section">

        <div class="overlay-bg no-top no-bottom light-8">
            <div class="v-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="id-color">Search Domain </h5>
                            <h2>numele de domeniu</h2>
                            <p>Formularul permite si comandarea de domenii cu diacritice. Atentie: ROTLD permite doar inregistrarea de domenii cu diacritice Romanian-Standard, nu Romanian-Legacy. Daca nu aveti setata tastatura Romaneasca corespunzatoare rezultatul cautarii nu va fi valid pentru domeniile care contin caracterele ș si ț.</p>
                            <p>Introduceti adresa dorita (chiar daca detineti deja domeniul)</p>

                                <form action="#" class="d-flex w-100 my-3  ">

                                    <div class="d-flex w-75 " style="border: 1px solid black;">
                                        <input type="text" placeholder="www." class="form-control border-0 px-3  ">
                                        <select class="w-25 border-0 " style="outline: none;">
                                            <option value="1">.ro</option>
                                            <option value="1">.eu</option>
                                            <option value="1">.com</option>
                                            <option value="1">.net</option>
                                            <option value="1">.org</option>
                                            <option value="1">.biz</option>
                                            <option value="1">.info</option>
                                        </select>
                                    </div>
                                    <input id="showButton" type="submit" value="Verificare domeniu" class="btn-main rounded-0 "/>
                                </form>
 

                            <p>Introduceti domeniul dorit in casuta alaturata chiar daca l-ati inregistrat deja (nu uitati sa selectati extensia dorita) si apasati butonul de verificare.</p>

                            <br>
                            <p class="text-dark"><strong>Observatie: rezervarea efectiva a domeniului va fi finalizata doar dupa efectuarea platii.</strong></p>
                        </div>
                        <div class="col-md-6 xs-hide">
                            <img src="images/site/search-domain/search.jpeg" class="lazy img-fluid anim-up-down" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>






</div>

























<?php
include("footer.php");
?>