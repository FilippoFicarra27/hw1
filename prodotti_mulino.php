<?php
    session_start();
    if(!isset($_SESSION["mail"])){
        header("Location: login_account.php");
        exit;
    }


?>


<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="prodotti_mulino.css">
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Della+Respira&display=swap" 
        rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="mostra_prodotti.js" defer></script>
    </head>
    <body>
        <article>
            <div id="sfondo_header_e_nav">
                <nav>
                    <a href="https://www.mulinobianco.it/home">
                        <img class="immagini_cerchi" src="https://thumbs.dreamstime.com/b/un-icona-di-tre-barrette-simbolo-del-menu-
                        elemento-progettazione-moderna-profilo-segno-piano-nero-semplice-vettore-con-gli-angoli-110910924.jpg" />
                    </a>
                    <img src="https://www.mulinobianco.it/fe-web/img/logo.png" />
                    <div>
                        <a href="https://www.mulinobianco.it/home">
                            <img class="immagini_cerchi" src="https://png.pngtree.com/png-clipart/20230401/original/pngtree-magnifying-glass-line-icon-png-image_9015864.png" />
                        </a>
                        <a href="login_account.php">
                            <img class="immagini_cerchi"  src="https://cdn.icon-icons.com/icons2/1848/PNG/512/user_116431.png" />
                        </a>
                    </div>
                </nav>
                <header>
                </header>
            </div>



            <section>
                <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />
                <div class="div_section">
                    <h2>Per i tuoi piccoli momenti di felicità.</h2>
                    <p>Ogni giorno sono tante le <strong>occasioni in cui puoi gustare le nostre bontà: si
                         inizia con la colazione e poi ci si siede a tavola, a pranzo e a cena.</strong> Anche a <strong>merende</strong> e <strong>snack</strong> non 
                         si dice mai di no, a qualunque età. Scopri tutti i prodotti del Mulino e trova quello più adatto a te.
                    </p>
                
                </div>

                <div id="visualizza_prodotti_mulino">

                </div>


                <div class="div_larghezza_ridotta">
                    <h2>Con il “TrovaBontà” è facile</h2>
                    <p>Il nostro impegno è da sempre quello di fare i prodotti più buoni pensando ai gusti e alle <strong>esigenze del maggior
                        numero possibile di persone</strong>, l’ampia gamma di prodotti Mulino Bianco ne è una dimostrazione.
                        Scopri il <strong>prodotto più adatto</strong> alle tue esigenze alimentari nei vari <strong>momenti della giornata.</strong></p>
                    <h3>Cosa ti piacerebbe oggi?</h3>
                    <img class="img_menu" src="images/img006.png" />
                </div>
                <div id="div4">
                    <div class="white_div">
                        <h2>Ogni mattina, tre belle notizie!</h2>
                        <p>Iscriviti gratuitamente alla nuova <strong>newsletter Tre Notizie a Colazione.</strong> Ogni giorno, alle 7 del mattino,
                        una <strong>rassegna di buone notizie</strong> a cura della redazione giornalistica di Good Morning Italia.</p>
                        <a class="a_button" href="https://www.mulinobianco.it/login?urlBack=/newsletter">Iscriviti</a>
                    </div>
                </div>
                



            </section>
            
            <footer>
                <div class="div_sopra">
                    <img src="https://www.mulinobianco.it/fe-web/img/logo.png" />
                    <div id="div_contatti">
                        <a href="https://dedicatoate.mulinobianco.it/?_ga=2.182299682.4848172.1710517048-1059205259.1710517048" target="_blank"><p>Shop</p></a>
                        <a href="https://www.mulinobianco.it/contatti"><p>FAQ e Contatti</p></a>
                        <a href="https://www.mulinobianco.it/privacy"><p>Privacy Policy</p></a>
                        <a href="https://www.mulinobianco.it/cookie-policy"><p>Cookie Policy</p></a>
                        <a href="https://www.barillagroup.com/it/di-piu-su-di-noi/barilla-gdpr-policy/"><p>GDPR Barilla</p></a>
                        <a href="https://www.mulinobianco.it/mappa-del-sito"><p>Mappa del sito</p></a>
                        <a href="https://www.mulinobianco.it/note-legali"><p>Note Legali</p></a>
                        <a href="https://www.mulinobianco.it/dichiarazione-di-accessibilita"><p>DDA</p></a>
                        <a><p id="div_gestisci">Gestisci</p></a>
                    </div>
                    <div class="div_ricette">
                        <p>Scopri le nostre ricette:</p>
                        <a href="https://www.mulinobianco.it/ricette/pancake-classici">Pancakes classici</a>
                        <a href="https://www.mulinobianco.it/ricette/pancake-senza-uova">Pancake senza uova</a>
                        <a href="https://www.mulinobianco.it/ricette/pancake-giapponesi">Pancake giapponesi</a>
                        <a href="https://www.mulinobianco.it/ricette/plumcake-con-yogurt">Plumcake</a>
                        <a href="https://www.mulinobianco.it/ricette/plumcake-allo-yogurt-greco">Plumcake allo Yogurt</a>
                        <a href="https://www.mulinobianco.it/ricette/plumcake-al-limone">Plumcake al Limone</a>
                        <a>Tutte le ricette</a>
                    </div>
                    <div class="div_pan_di_stelle">
                        <p>Per informazioni sulla gamma Pan di Stelle vai su <a href="https://www.pandistelle.it/?_ga=2.148333234.4848172.1710517048-1059205259.1710517048">pandistelle.it</a>
                            ©2023 Barilla - P.IVA 01654010345</p>
                    </div>
                </div>

                <div id="div_social">
                    
                        <a href="https://www.facebook.com/MulinoBianco/" target="_blank" >
                            <img src="images/img008.png" />
                        </a>
                        <a href="https://www.instagram.com/mulinobianco/" target="_blank">
                            <img src="images/img009.png" />
                        </a>
                        <a href="https://www.youtube.com/user/mulinodigitale" target="_blank">
                            <img src="images/img010.png" />
                        </a>
                        <a href="https://www.tiktok.com/login?redirect_url=https%3A%2F%2Fwww.tiktok.com%2F%40mulinobianco&lang=en&enter_method=mandatory" target="_blank">
                            <img src="images/img011.png" />
                        </a>
                        <a href="https://www.pinterest.it/mulinobianco/" target="_blank">
                            <img src="images/img012.png" />
                        </a>
                    
                </div>

            </footer>




        </article>
    </body>
</html>