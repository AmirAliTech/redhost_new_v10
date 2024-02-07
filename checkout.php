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
                        <h1>Datele Dumneavoastra</h1>
                        <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">/</span></a><span
                                class="active">Datele Dumneavoastra</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h1 class="text-center mb-5">DATELE DUMNEAVOASTRA</h1>
            <form name="checkoutForm" id="checkout_form" class="form-border" method="post" action="#">
                <div class="row">
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <select name="" class="form-control">
                                <option value="Va rugam alegeti">Va rugam alegeti</option>
                                <option value="Persoana fizica">Persoana fizica</option>
                                <option value="Societate comerciala">Societate comerciala</option>
                                <option value="Persoana fizica autorizata">Persoana fizica autorizata</option>
                                <option value="Institutie publica">Institutie publica</option>
                                <option value="Institutie guvernamentala">Institutie guvernamentala</option>
                                <option value="ONG">ONG</option>
                                <option value="Altele">Altele</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="persoanele fizice nu completeaza acest camp" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="natural-person" id="natural-person" class="form-control"
                                placeholder="Nu omiteti! Specificati in ordinea: Prenume Nume" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="email" id="email" class="form-control"
                                placeholder="pe aceasta adresa veti primi o copie a proformei si datele de logare"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="phone" id="phone" class="form-control"
                                placeholder="intra in telefon" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="mob" id="mob" class="form-control" placeholder="intra in mobil"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="address" id="address" class="form-control"
                                placeholder="Strada, numar (obligatoriu scara si ap. daca exista)" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="post" id="post" class="form-control"
                                placeholder="Noul cod postal (poate fi gasit la www.coduripostale.ro)" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="location" id="location" class="form-control"
                                placeholder="intra in Localitate" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="judet" id="judet" class="form-control" placeholder="judet"
                                required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="fiscal" id="fiscal" class="form-control"
                                placeholder="Persoanele fizice completeaza CNP-ul din buletin doar in cazul comenzilor care implica inregistrarea de domenii .ro (registrul roman de domenii, solicita CNP-ul pentru inregistrarea domeniilor .ro inregistrate de persoane fizice)."
                                required>
                        </div>
                    </div>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <input type="text" name="inreg" id="inreg" class="form-control"
                                placeholder="persoanele fizice nu completeaza acest camp" required>
                        </div>
                    </div>
                    <h5>Va rugam frumos sa ne spuneti cum ati aflat despre RedHost</h5>
                    <div class="col-md-6 mb10">
                        <div class="field-set">
                            <select id="" class="form-control" required>
                                <option value="Va rugam alegeti">Va rugam alegeti</option>
                                <option value="Google">Google</option>
                                <option value="Alt motor de cautare">Alt motor de cautare</option>
                                <option value="Printr-o cunostinta">Printr-o cunostinta</option>
                                <option value="Prin intermediul unui designer web">Prin intermediul unui designer web
                                </option>
                                <option value="Sunt un web designer">Sunt un web designer</option>
                                <option value="Sunt deja sau am fost client RedHost">Sunt deja sau am fost client
                                    RedHost</option>
                            </select>
                        </div>
                    </div>
                    <h5>DATE INFORMATIVE DESPRE COMANDA</h5>
                    <div class="col-md-12 mb10">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">DOMENIUL ALES</p>
                            <p>Ati ales domeniul www.abc.ro. Daca trebuie sa modificati adresa NU apasati butonul Back
                                al broserului. Modificare domeniu.</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb10">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fw-bold">PACHETUL ALES</p>
                            <p class="w-75 fw-bold ">Basic.</p>
                        </div>
                    </div>
                    <div class="col-md-12 mb10">
                        <h5>CONDITII PENTRU EFECTUAREA COMENZII</h5>
                        <p>Prin apasarea butonului 'Trimitere comanda' declarati ca ati citit politica de prelucrare
                            date cu caracter personal Euroweb Srl publicata la adresa</p>
                        <a href="#">www.redhost.ro/confidentialitate.php.</a>
                        <p>Prin apasarea butonului 'Trimitere comanda' declarati ca ati citit si sunteti de acord cu
                            termenii de utilizare RedHost.ro publicati la adresa</p>
                        <a href="#">www.redhost.ro/conditii.php..</a>
                        <p>Prin continuarea comenzii si efectuarea platii unei comenzi care include si inregistrarea
                            unui domeniu .ro,declarati ca ati citit si ca sunteti de acord cu Regulile de Inregistrare
                            si cu Contractul de Inregistrare pentru domenii .ro, documente prezente pe site-ul ROTLD
                            (www.rotld.ro).</p>
                        <label for="popupRememberme" class=""><input type="checkbox" />
                            Va rugam sa bifati daca sunteti de acord sa va transmitem din cand in cand comunicari
                            comerciale cum ar fi ocazii speciale si promotii. Nu aveti obligatia de a bifa acest camp si
                            puteti retrage oricand acest acord.
                        </label>
                    </div>

                </div>
                <div class="g-recaptcha" data-sitekey="6LdW03QgAAAAAJko8aINFd1eJUdHlpvT4vNKakj6"></div>
                <div id='submit' class="mt20">
                    <input type='submit' id='send_message' value='Trimitere comanda' class="btn-main">
                </div>

                <div id="success_message" class='success'>
                    Your message has been sent successfully. Refresh this page if you want to send more messages.
                </div>
                <div id="error_message" class='error'>
                    Sorry there was an error sending your form.
                </div>
            </form>
        </div>
    </section>
</div>

<?php
include("footer.php");
?>