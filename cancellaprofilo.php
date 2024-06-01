<?php
    session_start();
    if(!isset($_SESSION["mail"])){
        header("Location: login_account.php");
        exit;

    }
    else{
        $conn=mysqli_connect("localhost","root","","MulinoBianco");
        $username=mysqli_real_escape_string($conn, $_SESSION["mail"]);
         $query=mysqli_query($conn, "SELECT * FROM UTENTE WHERE Email='".$username."'");
            while($r=mysqli_fetch_assoc($query)){
                $nome_utente=$r["Nome"];
                $cognome_utente=$r["Cognome"];
                $mail_utente=$r["Email"];
                $data_utente=$r["Data_Nascita"];
                
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


    if(isset($_POST["cancella"])){
        $conn=mysqli_connect("localhost","root","","MulinoBianco");
        $cancella=mysqli_query($conn,"DELETE FROM UTENTE WHERE Email='".$_SESSION["mail"]."'");
        $cancella_prodotti_preferiti=mysqli_query($conn, "DELETE FROM AFFERENZA WHERE Mail='".$_SESSION["mail"]."'");
        mysqli_close($conn);
            session_start();
            if(isset($_SESSION["mail"])){   
                session_destroy();
                header("Location: login_account.php");
                exit;
            }
        
        
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="home_page.css">      
        
            <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Della+Respira&display=swap" 
            rel="stylesheet">  
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
            <header></header>

            
            <section>
                        <img id="mulino_home" src="https://www.mulinobianco.it/fe-web/img/icons/avatar_placeholder.jpg">
                        <h2><?php echo $ora." ".$nome_utente ?></h2>
                        <div id="container_modifica_logout">
                            <a class="modifica_logout" href="home_page.php">Torna al Profilo</a>
                            <a class="modifica_logout" href="logout.php">Logout</a>
                        </div>
                        <div id="container_barilla">
                            <img src="https://bar-dm-screenset.azureedge.net/4/img/Barillagroup.jpg">
                            <p>
                            Cancellando il tuo account in modo definitivo, <strong>verrai eliminato da tutti i siti del Gruppo Barilla</strong> 
                            azzerando di conseguenza anche i prodotti inseriti tra i preferiti e i contatori di eventuali punteggi accumulati.
                            <strong>La cancellazione sarà completata entro 24 ore</strong>. Una eventuale login durante questo lasso di tempo, annullerà 
                            la cancellazione. Durante questo periodo potresti ancora ricevere comunicazioni promozionali.
                            </p>
                            
                            <div>
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-barilla.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-voiello.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-mulinobianco-v2.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-gocciole.png">
                                <img src="https://www.ringo.it/email-img/gigya/logo-ringo.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-pandistelle.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-granpavesi.png">
                                <img src="https://www.pavesini.it/wp-content/themes/pavesini-new/images/logo_desktop.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-pavesi.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-academiabarilla.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-grancereale.png">
                                <img src="https://images.ctfassets.net/trtof15e9y2s/3HKtbzBfTesQdydb4M6h4V/2fb35b162e46b4514ecf5949c3290283/logo.png">
                                <img src="https://bar-dm-screenset.azureedge.net/4/img/res-wasa.png">
                            </div>
                            <form method="post">
                                <input class="a_button sfondo_grigio" type="submit" name="cancella" value="Conferma Cancellazione">
                            </form>
                            
                            <a class="sottolineato" href="home_page.php"><p>Torna al profilo</p></a>
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