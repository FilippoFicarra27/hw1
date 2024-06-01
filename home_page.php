<?php
    session_start();
    if(!isset($_SESSION["mail"])){
        header("Location: login_account.php");
        exit;

    }
    else{
        $conn=mysqli_connect("localhost","root","","MulinoBianco");
        $username=mysqli_real_escape_string($conn, $_SESSION["mail"]);
         $query=mysqli_query($conn, "SELECT Nome FROM UTENTE WHERE Email='".$username."'");
            while($r=mysqli_fetch_assoc($query)){
                $nome_utente=$r["Nome"];
                
                
                
            }
        mysqli_close($conn);
        
    }

    






    if(date('H')>=5 && date('H')<12){
        $ora="Buongiorno";
    }
    else if(date('H')>=12 && date('H')<19){
        $ora="Buon Pomeriggio";
    }
    else if(date('H')>=19 && date('H')<23){
        $ora="Buonasera";
    }
    else $ora="Buonanotte";

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
             <link rel="stylesheet" href="home_page.css">
            <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Della+Respira&display=swap" 
            rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="prodotti_preferiti.js" defer></script>
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
                <img id="mulino_home" src="https://www.mulinobianco.it/fe-web/img/icons/avatar_placeholder.jpg">
                <h2><?php echo $ora." ".$nome_utente ?></h2>
                <div id="container_modifica_logout">
                    <a class="modifica_logout" href="modifica_profilo.php">Modifica Profilo</a>
                    <a class="modifica_logout" href="logout.php">Logout</a>
                </div>
                    
                <div id="prodotti_e_recensioni">
                    <h2>I tuoi Prodotti Preferiti</h2>
                    <div id="visualizza_prodotti_mulino"></div>
                    <div id="prodotti_preferiti" class="container_bianco">
                        <h3>I Tuoi Prodotti Preferiti</h3>
                        <p>Clicca il cuoricino sui prodotti che ami di più per aggiungerlo ai
                            tuoi preferiti. Ricevi notifiche su nuovi coupon e promozioni che lo riguardano.
                        </p>

                    </div>
                    <a  class="a_button sfondo_blu" href="prodotti_mulino.php">Guarda tutti i prodotti</a>
                        
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