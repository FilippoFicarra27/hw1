<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="RestApi.css">
    <script src="RestApi.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Della+Respira&display=swap" 
        rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <article>
       
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
        
        <section>
             <img id="immagine_omino" src="https://t4.ftcdn.net/jpg/01/93/29/59/360_F_193295910_NtF2kPvo4hsDv8VjHulzAhn2nN0444EI.jpg" />
                <div id="api">

                    <h2>API con autenticazione Oauth2</h2>
                   
                     <form id="volo">
                        <h3>Ricerca Voli</h3>
                        <p>inserisci un costo in modo da visualizzare i voli con costo minore del valore inserito</p>
                        <input id="valore_volo" type="text" />
                        <input type="submit" value="cerca">
                        <input id="pulisci_voli" type="button" value="pulisci sezione">
                     </form>
                     <div id="visualizza_voli">
 
                     </div>
 
 
                     <form id="spotify">
                        <h3>Ricerca album di Spotify</h2>
                        <p>Inserisci un artista per ottenere un numero casuale di brani</p>
                        <input id="valore_spotify" type="text"/>
                        <input type="submit" value="cerca">
                        <input id="pulisci_spotify" type="button" value="pulisci sezione">
                     </form>  
                
                     <div id="visualizza_spotify">
                     
                     </div>
 
                    <h2>API con autenticazione tramite KEY</h2>

                     <form id="notizie_api">
                        <h3>Ricerca Notizie</h3>
                        <p>Clicca il pulsante per visualizzare le notizie di oggi</p>
                        <input type="submit" value="visualizza">
                        <input id="pulisci_notizie" type="button" value="pulisci sezione">
                     </form>
                     <div id="visualizza_notizie">
 
                     </div>
 
                    
                     <form id="torta">
                        <h3>Ricerca cocktail</h3>
                        <p>Inserisci un numero per ottenere il cocktail di quell'id</p>
                        <input id="valore_id" type="text" />
                        <input type="submit" value="cerca">
                        <input id="pulisci_torte" type="button" value="pulisci sezione">
                     </form>
                     <div id="visualizza_torte">
 
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