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
                        <h1>user-guide</h1>
                        <div class="bread-crumbs"><a href="index.php">Home<span class="breadcrumb-sep">/</span></a><span class="active">user-guide</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row justify-content-start my-5  text-capitalize">
                <div class="col-xl-12">
                    <div class="hm7-title text-start">
                        <h1>Ghid de utilizare</h1>
                        <p>Informatiile de mai jos va vor ajuta sa va publicati site-ul, sa va administrati contul de gazduire, bazele de date si adresele email. Daca totusi am omis ceva sau vreo explicatie este neclara va rugam sa ne contactati.</p>
                        <h2>I. Activarea contului de gazduire</h2>
                        <p>Dupa efectuarea platii vi se va crea contul de gazduire solicitat, moment la care veti primi din partea noastra informatiile de autentificare necesare (login si parola) impreuna cu IP-ul serverului.</p>
                        <h2>II. Nameservere</h2>
                        <ul>
                            <li>Pentru conturi cu domenii incluse nu aveti nameservere de modificat.</li>
                            <li>Pentru domenii fara gazduire trebuie sa ne dati nameserverele serverului dvs.</li>
                            <li>Pentru domenii transferate la noi va vom oferi noi nameserverele necesare.</li>
                        </ul>
                        <p > <a href="https://www.redhost.ro/modificare-nameservere-rotld.php">Tutorial modificare nameservere domenii .ro la ROTLD</a> </p>
                        <h2>III. Accesul in contul de administrare (cPanel)</h2>
                        <p>Pentru administrarea contului de gazduire accesati cPanel la adresa www.adresadvs.ro/cpanel (inlocuiti www.adresadvs.ro cu adresa site-ului dvs). Introduceti datele de login si password primite pe e-mail de la noi in formularul de logare.</p>
                        <a href="">Utilizarea cPanel pentru administrarea contului de gazduire</a>
                        <h2>IV. Incarcarea site-ului</h2>
                        <p>Pentru incarcarea site-ului pe serverul nostru puteti folosi orice client FTP impreuna cu urmatoarele date:</p>
                        <ul>
                            <li>adresa FTP este ftp.DomeniulDvs.tld (inlocuiti DomeniulDvs.tld cu domeniul dvs) sau IP-ul (doar in primele 24 de ore)</li>
                            <li>acelasi login si password ca cel de la contul de administrare (cPanel).</li>
                        </ul>
                        <p class="id-color">Cateva precizari importante:</p>
                        <p class="id-color">- din cauza evolutiilor relativ recente (furtul parolelor FTP prin sniffing si/sau virusi de tip trojan) singurul mod recomandat de incarcare a site-ului este cel securizat SFTP; in acest sens aveti nevoie ca portul 22666 sa fie deschis din firewall-ul si/sau conexiunea dumneavoastra la Internet;</p>
                        <p class="id-color">- toate fisierele care compun site-ul dvs trebuie incarcate in folderul public_html; - in contul dvs vor fi multe alte fisiere si foldere pe care nu le-ati incarcat dvs; nu le stergeti pentru ca astfel v-ati distruge contul de gazduire;</p>
                        <p class="id-color">- nu incarcati fisiere si/sau foldere cu permisiuni mai mari decat cele normale decat daca intelegeti foarte bine implicatiile care decurg din acest lucru; permisiunile normale sunt 644 pentru fisiere si 755 pentru foldere; daca mariti aceste permisiuni fara sa aveti cunostinte suficiente de securitate nu faceti altceva decat sa va expuneti contul de gazduire unor serioase riscuri de securitate (penetrare, hacking, pierderea datelor, incarcarea de materiale periculoase).</p>
                        <p>Tutorial detaliat pentru incarcarea site-ului cu ajutorul FileZilla</p>
                        <h2>V. E-mail</h2>
                        <p>Pentru crearea de conturi de mail pe site-ul dvs sunt necesari 2 pasi. Primul pas consta in crearea contului de e-mail pe server. Al doilea pas consta fie in configurarea unui soft de mail (client de mail) pentru a descarca mesajele pe masura ce sunt primite fie de utilizarea WebMailului.</p>
                        <h3>Crearea conturilor de e-mail</h3>
                        <p>Pentru a crea contul de e-mail trebuie sa va logati in cPanel (informatii la punctul III). Intrati in Email Accounts si completati formularul din partea superioara a paginii cu adresa de mail dorita si o parola si apasati "Create account".</p>
                        <h3>Descarcarea mesajelor cu un client de mail</h3>
                        <p>Dupa crearea contului de e-mail dorit pe server (vedeti linkul de la pct III) trebuie sa va configurati clientul de mail pentru a receptiona mailurile respective.</p>
                        <div class="d-flex flex-column ">
                            <a href="https://www.redhost.ro/configurare-MacBook.php">Tutorial configurare mail pe MacBook</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-windows-live-mail.php">Tutorial configurare client mail Windows Live Mail</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-outlook-2013.php">Tutorial configurare client mail Outlook 2013</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-thunderbird.php">Tutorial configurare client mail Thunderbird</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-incredimail.php">Tutorial configurare client mail IncrediMail</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-android-4.1.2.php">Tutorial configurare telefon cu Android 4.1.2 Jelly Bean</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-android-senseui.php">Tutorial configurare telefon cu Android 4.1.2 Jelly Bean cu SenseUI (HTC)</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-android-4.4.php">Tutorial configurare telefon cu Android 4.4.2 KitKat</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-windows-8-phone.php">Tutorial configurare telefon cu Windows 8.1</a>
                            <a href="https://dev.single-solution.com/redhost_v12/configurare-iOS7-iPad.php">Tutorial configurare device cu iOS7 (tutorial pentru iPad) Tutorial configurare client mail Outlook Express</a>
                        </div>
                        <h3>Mailing: limite</h3>
                        <p>Toate mailurile trimise de pe serverele noastre trebuie sa NU fie trimise in mod nesolicitat (SPAM). Va rugam sa cititi articolul <a href="http://www.redhost.ro/hosting/despre-spam/">despre SPAM</a> de pe blogul RedHost.</p>
                        <p>
                            O alta conditie se refera la numarul de mailuri care sunt trimise in decursul unei ore. Cum pe un server sunt gazduite in general cateva sute de site-uri (si cum majoritatea trimit mail-uri) daca aveti o baza de date de mailing mai mare de 200 de destinatari va rugam sa segmentati expedierea de mailuri (orice soft decent de newsletter permite aceasta segmentare cunoscuta in general sub denumire de mail queue management). <strong>Se pot trimite (cumulat: mail, newsletter, autoresponder) maxim 250 de mailuri pe ora.</strong></p>
                        <h3>Accesarea mesajelor fara descarcare direct pe server (WebMail)</h3>
                        <p>Pentru a accesa mesajele fara a le descarca pe calculator (in general in cazul in care doriti sa aveti acces la acelasi mesaj din locatii diferite) accesati adresa www.siteuldvs.ro/webmail sau webmail.siteuldvs.ro (inlocuiti textul siteuldvs.ro cu adresa efectiva a site-ului dvs). Introduceti ca si date de logare adresa de email intreaga (de exemplu office@site.ro deci nu doar office) si ca parola introduceti parola pe care ati setat-o la crearea contului de mail (deci nu parola pe care v-am trimis-o noi initial). Veti ajunge pe o pagina cu 3 programe de WebMail. Va recomandam Horde sau RoundCube.</p>
                        <h2>VI. Listarea in Google</h2>
                        <p>Relativ frecvent primim intrebari de la clientii nostri care suna in felul urmator: "Am incarcat site-ul/am platit un pachet de gazduire de o zi (sau o saptamana, o luna) pe server si cand caut in Google site-ul meu nu apare. De ce?". Discutia legata de indexarea in motoarele de cautare este una foarte complexa dar va rugam sa cititi pe blogul RedHost acest <a href="http://www.redhost.ro/hosting/optimizare-motoare-cautare/">articol despre optimizarea pentru motoarele de cautare.</a> </p>
                        <h2>VII. Baze de date</h2>
                        <p>Serviciul de gazduire include suport MySQL. In cazul in care site-ul sau scriptul dvs are nevoie sa utilizeze o baza de date aceasta trebuie creata din cPanel (informatii de accesare cPanel la punctul III).</p>
                        <p class="id-color">Atentie: bazele de date nu pot fi create din phpMyAdmin sau din script.</p>
                        <p>Exista 3 pasi necesari:</p>
                        <p>- se creaza baza de date din cPanel -> Databases -> MySQL Databases -> Create New Database.</p>
                        <p>- se creaza userul MySQL din cPanel -> Databases -> MySQL Databases -> Add new user (la acest punct va trebui sa specificati si parola pe care trebuie sa o retineti/notati).</p>
                        <p>- se autorizeaza userul MySQL pentru accesarea bazei de date: cPanel -> Databasese -> MySQL Databases -> Add User to database iar pe pagina urmatoare se alege tipul de acces (in general ALL).</p>
                        <p>In general pentru conectarea unui script la baza de date veti avea nevoie de aceste date:</p>
                        <p>- Server name / Host Name / Host = localhost</p>
                        <p>- Database = este numele ales pentru baza de date la creare prefixat in general de username_ (unde username este userul de cPanel)</p>
                        <p>- Username = este numele de utilizator MySQL ales la creare prefixat in general de username_ (unde username este userul de cPanel)</p>
                        <p>- Password = parola userului MySQL ales la creare.</p>
                        <p>Popularea bazei de date cu tabele si randuri se poate face fie din cPanel -> Databases -> phpMyAdmin fie din scriptul dvs (CMS, etc). De asemenea importul unui fisier SQL se poate face tot din phpMyAdmin.</p>
                        <h2>VIII. Restaurare fisiere din backup (R1Soft)</h2>
                        <p>In cazul in care ati suferit pierderi de fisiere sau compromiteri ale acestora (virusare, hacking) si constatatati aceste probleme in timp util (minim ~ 12-24 ore, maxim 10 zile) puteti recupera aceste fisiere din backup (copia de siguranta). In acest scop parcurgeti pasii urmatori:</p>
                        <ul>
                            <li>Logati-va in contul dvs de cPanel si intrati in Files -> R1Soft Restore Backups (veti fi redirectat catre serverul de backup si se va deschide o interfata de genul unui explorer);</li>
                            <li>Faceti click pe plusul din dreptul lui Disk Safe 0 si apoi pe cel din dreptul lui /dev/sdax (unde x este in general 2); vi se va prezenta o lista cu copiile de siguranta ordonate pe zile;</li>
                            <li>Selectati (click pe semnul plus) una din copiile din ziua cea mai recenta in care stiti ca fisierul sau fisierele compromise erau inca in regula;</li>
                            <li>Navigati la fisierele dorite (daca este vorba despre fisierele site-ului ar trebui sa le gasiti in public_html sau un subdirector al acestuia caz in care faceti click pe public_html);</li>
                            <li>Selectati (bifati) fisierul, fisierele sau subdirectorul pe care doriti sa-l (sa le) restaurati (nu selectati niciodata un folder intreg daca doriti sa restaurati doar anumite fisiere) <strong>si apasati butonul Restore Selected Files</strong></li>
                            <li>Pe pagina urmatoare fie bifati <strong>Overwrite existing files</strong> (aceasta este optiunea recomandabila), <strong>fie selectati Restore to alternate</strong> location (pentru a obtine fisierele din backup intr-o alta locatie caz in care vor fi restaurate impreuna cu folderele ascendente ceea ce inseamna ca va trebui sa le amplasati manual in locatiile potrivite) dupa care apasati OK.</li>
                        </ul>
                        <h2>IX. Domenii aditionale (Addon Domains)</h2>
                        <p>Aveti posibilitatea de a adauga unui cont de gazduire mai multe domenii, in functie de pachetul ales. In acest sens resursele( spatiul de stocare, numarul bazelor de date, numarul de mail-uri ) contului de gazduire se vor imparti in functie de necesitati.</p>
                        <p>Pentru a crea un domeiu aditional trebuie sa va logati in cPanel(punctul III), apoi in sectiunea Domains selectati iconita Addon Domains. Veti completa formularul cu:</p>
                        <ul>
                            <li>numele de domeniu de adaugat in campul New Domain Name;</li>
                            <li>in momentul in care veti selecta campul Subdomain, vor fi populate automat doua campuri,Subdomain si Document Root (puteti modifica valorile implicite). In folderul indicat de campul Document Root veti incarca fisierele acestui site aditional;</li>
                            <li>in continuare va recomandam sa utilizati generatorul de parole pentru a completa campurile Password;</li>
                            <li>faceti click pe butonul Add Domain.</li>
                            <p>Pentru a incarca fisierele site-ului respectiv in contul dvs de gazduire veti utiliza un client FTP (punctul IV) folosind datele de logare pentru cPanel.</p>
                            <p>In cele din urma, pentru a face ca domeniul aditional sa raspunda din acest cont, va trebui sa modificati nameserverele cu cele ale domeniului principal (daca nu erau deja setate).</p>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>



























<?php
include("footer.php");
?>