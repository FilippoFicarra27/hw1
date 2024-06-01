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


    if(isset($_POST["password_vecchia"]) && isset($_POST["password_nuova"]) && isset($_POST["conferma_password"])){
    
        $count=0;
        $conn=mysqli_connect("localhost","root","","MulinoBianco");
        $verifica_password=mysqli_query($conn,"SELECT * FROM UTENTE WHERE Email='".$_SESSION["mail"]."'");

        while($r=mysqli_fetch_assoc($verifica_password)){

            if(strcmp($_POST["password_vecchia"],$r["Password_utente"])!=0){
                    $count++;
                    $password_vecchia=true;

            }
            if(strcmp($_POST["password_vecchia"],$_POST["password_nuova"])==0){
                    $count++;
                    $uguaglianza_password=true;

            }
            if(!(preg_match('/.{8,}/', $_POST['password_nuova']) && preg_match('/[A-Z]/', $_POST['password_nuova']) && preg_match('/[a-z]/', $_POST['password_nuova']) &&
            preg_match('/[0-9]/', $_POST['password_nuova']) && preg_match('/[!@#$%^&*(),.?]/', $_POST['password_nuova']))){
                $count++;
                $password_debole=true;

            }
            if(strcmp($_POST["password_nuova"],$_POST["conferma_password"])!=0){
                $due_password_non_uguali=true;
                $count++;
            
            }

            if($count==0){
                $modifica_password=mysqli_query($conn,"UPDATE UTENTE SET Password_utente='".$_POST["password_nuova"]."' WHERE Email='".$_SESSION["mail"]."'");
                $successo=true;
                
            }

        }
        
        mysqli_close($conn);
        
    }
       
    

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="home_page.css">      
        
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Della+Respira&display=swap" 
        rel="stylesheet">  
        <script src="validazione_password.js" defer></script>
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
                        <h2>Cambio Password</h2>
                        <form id="mio_profilo" method="post">
                            <p>Password attuale*</p>
                            <input id="p_vecchia" class="testo_form" type="password" name="password_vecchia">
                            <h4 id="p_vecchia_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            <?php
                                if(isset($password_vecchia)){
                                    echo "<h4>La vecchia password non corrisponde</h4>";
                                }
                            ?>
                            <p>Nuova password*</p>
                            <input id="p_nuova" class="testo_form" type="password" name="password_nuova">
                            <?php

                                    if(isset($password_debole)){
                                        echo "<h4>Password troppo debole! Deve contenere almeno 8 caratteri e i seguenti elementi: una lettera maisucola, una minuscola
                                        un numero e un simbolo speciale</h4>";
                                    }
                                    if(isset($uguaglianza_password)){
                                        echo "<h4>la password nuova non può essere uguale alla password vecchia</h4>";
                                    }

                            ?>
                            <h4 id="p_nuova_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            <h4 id="p_piccola" class="hidden">Lunghezza non valida, deve essere di almeno 8 caratteri</h4>
                            <p>Conferma nuova password*</p>
                            <input id="p_conferma" class="testo_form" type="password" name="conferma_password">
                            <h4 id="p_conferma_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                            <?php

                                if(isset($due_password_non_uguali)){
                                    echo "<h4>le nuova password non corrisponde con la password confermata</h4>";
                                }
                            ?>
                            
                           <input class="a_button sfondo_grigio" type="submit" value="Aggiorna Password">
                           <?php
                                if(isset($successo)){
                                    echo "<h4>Password aggiornata con successo</h4>";
                                }
                                
                                
                                
                                
                            ?>
                        </form>
                        <a class="sottolineato" href="home_page.php"><p>Torna al profilo</p></a>
                        
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