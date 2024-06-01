<?php

    session_start();
    if(isset($_SESSION["mail"])){
        header("Location: home_page.php");
        exit;
    }
    


    if(isset($_POST["nome_utente"]) && isset($_POST["cognome_utente"]) && isset($_POST["email_utente"]) && isset($_POST["data_utente"]) && 
    isset($_POST["password_utente"]) && isset($_POST["conferma_password"])){

        $count=0;


        if(strlen($_POST["nome_utente"])<=2){
            $count++;
            $errore_lunghezza_nome=true;
        }
        if(strlen($_POST["cognome_utente"])<=2){
            $count++;
            $errore_lunghezza_cognome=true;
        }

        if(!filter_var($_POST["email_utente"],FILTER_VALIDATE_EMAIL)){
            $count++;
            $mail_non_valida=true;
        }
        
        
        
           
           
        if(!(preg_match('/.{8,}/', $_POST['password_utente']) && preg_match('/[A-Z]/', $_POST['password_utente']) && preg_match('/[a-z]/', $_POST['password_utente']) &&
                preg_match('/[0-9]/', $_POST['password_utente']) && preg_match('/[!@#$%^&*(),.?]/', $_POST['password_utente']))){
                    $count++;
                    $errore_password=true;

        }
        if(strcmp($_POST["password_utente"],$_POST["conferma_password"])!=0){
                        
                 $count++;
                $errore_confronto=true;

        }
        if($_POST["marketing"]!="si"){
            $count++;
            $errore_marketing=true;
        }
        if($_POST["profilazione"]!="si"){
            $count++;
            $errore_profilazione=true;
        }


            if($count==0){

                    $conn=mysqli_connect("localhost","root","","MulinoBianco") or die(mysqli_error($conn));
                    $nome=mysqli_escape_string($conn, $_POST["nome_utente"]);
                    $cognome=mysqli_escape_string($conn, $_POST["cognome_utente"]);
                    $mail=mysqli_escape_string($conn, $_POST["email_utente"]);
                    $data=mysqli_escape_string($conn, $_POST["data_utente"]);
                    $password=mysqli_escape_string($conn, $_POST["password_utente"]);
                    $verifica_mail=mysqli_query($conn,"SELECT * FROM UTENTE WHERE Email='".$mail."'");
                    if(mysqli_num_rows($verifica_mail)> 0){
                    $mail_uguale=true;
                    }
                    else{
                        $result=mysqli_query($conn,"INSERT INTO UTENTE VALUES('$mail','$nome','$cognome','$data','$password')");
                        mysqli_close($conn);
                        header("Location: login_account.php");
                        exit;
                    }


            }
                                
                                  
                                    
                                
    }
    



?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login_account.css">
        <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Della+Respira&display=swap" 
        rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="validazione_registrazione.js" defer></script>
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
                <p>registrati <strong>rapidamente</strong> con un <strong>codice temporaneo</strong></p>
                <div id="credenziali_mail_telefono">
                    <a class="a_button sfondo_blu" href="https://www.mulinobianco.it/login?urlBack=/login?urlBack=/home">
                        Via email
                        <img src="images/img016.png">
                    </a>
                    <a class="a_button sfondo_blu" href="https://www.mulinobianco.it/login?urlBack=/home">
                        Via cellulare
                        <img src="images/img017.png">
                    </a>
                </div>
                <p>Oppure accedi usando il tuo social</p>
                    <div id="social_login">
                        <a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=810483797496217&kid_directed_site=0&app_id=810483797496217&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv17.0%2Fdialog%2Foauth%3Fresponse_type%3Dcode%26client_id%3D810483797496217%26redirect_uri%3Dhttps%253A%252F%252Fbda-cdc-it.mulinobianco.it%252FGS%252FGSLogin.aspx%26scope%3Demail%26state%3Dyc463l70n4055151h7tk1.X0TLYi5pTTsJvu4m3BmRc2IuwGxs-cC93o0sFhThojY.1715892151%26display%3Dpopup%26ret%3Dlogin%26fbapp_pres%3D0%26logger_id%3Dc28a85e1-1a65-4310-b3af-d92d2c9ce321%26tp%3Dunspecified&cancel_url=https%3A%2F%2Fbda-cdc-it.mulinobianco.it%2FGS%2FGSLogin.aspx%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3Dyc463l70n4055151h7tk1.X0TLYi5pTTsJvu4m3BmRc2IuwGxs-cC93o0sFhThojY.1715892151%23_%3D_&display=popup&locale=it_IT&pl_dbl=0" target="_blank">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/c/cd/Facebook_logo_%28square%29.png">
                        </a>
                        <a href="https://accounts.google.com/o/oauth2/v2/auth/oauthchooseaccount?response_type=code&client_id=941533787888-kc4oo960roa5ulnnmpql9nv88quj1q5o.apps.googleusercontent.com&redirect_uri=https%3A%2F%2Fbda-cdc-it.mulinobianco.it%2FGS%2FGSLogin.aspx%3F&scope=profile%20email&state=yc463l70n4055151h7.np.tk1..AtLtiypjZw.lAnsosCujOrgR0CHTm1WdgM-knlYncectLZTC-ni71I.gcSrKtuKOI9ph2mgrLhWiy5Fax1dEx9d1mhsIMVOynhNsHZnOd5U-036ueHO1JffY4DNXvAoimZh-KGExz6mXw.sc3&hl=it&service=lso&o2v=2&ddm=0&flowName=GeneralOAuthFlow"  target="_blank">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQafX9X4oVKEEpBfQvuaw-VyYNuaYCyzhRwght_1_JfmA&s">
                        </a>
                        <a href="https://api.twitter.com/oauth/authenticate?oauth_token=G8wuCwAAAAAAyMLVAAABj4MY4hk&lang=it" target="_blank">
                            <img src="data:image/png;base64,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"  >
                        </a>
                               
                    </div>
                    <p>Oppure inserisci i tuoi dati</p>
                    <form id="form_registrazione" name="registrazione" method="post">
                        <p>Nome*</p>
                        <input class="testo_form" id="nome_u" type="text" name="nome_utente">
                        
                            <h4 id="nome_utente" class="hidden">Questo campo è obbligatorio!</h4>
                        
                        <?php
                            if(isset($errore_lunghezza_nome)){
                                echo "<h4>Lunghezza non valida, deve essere di almeno 2 caratteri</h4>";
                            }
                            

                        ?>
                        <p>Congome*</p>
                        <input id="cognome_u" class="testo_form" type="text" name="cognome_utente">
                        <h4 id="cognome_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                        <?php
                            if(isset($errore_lunghezza_cognome)){
                                echo "<h4>Lunghezza non valida, deve essere di almeno 2 caratteri</h4>";
                            }

                        ?>
                        <p>Email*</p>
                        <input id="mail_u" class="testo_form" type="text" name="email_utente">
                        <h4 id="mail_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                        <?php
                                if(isset($mail_uguale)){
                                    echo "<h4>Errore! Un utente con questa mail è già presente</h4>";
                                }   
                                if(isset($mail_non_valida)){
                                    echo "<h4>Errore!Mail non valida</h4>";
                                }
                        ?>
                        <p>Data di nascita*</p>
                        <input id="data_u" class="testo_form" type="date" name="data_utente">
                        <h4 id="data_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                        <p>Password*</p>
                        <input id="password_u" class="testo_form" type="password" name="password_utente" >
                        <h4 id="password_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                        <?php
                           
                            if(isset($errore_password)){
                                echo "<h4>Password troppo debole! Deve contenere almeno 8 caratteri e i seguenti elementi: una lettera maisucola, una minuscola
                                un numero e un simbolo speciale</h4>";
                            }

                            

                        ?>
                        <p>Conferma Password*</p>
                        <input id="conferma_u" class="testo_form" type="password" name="conferma_password">
                        <h4 id="conferma_mancante" class="hidden">Questo campo è obbligatorio!</h4>
                        <?php
                            if(isset($errore_confronto)){
                                echo "<h4>Le due password non corrispondono</h4>";
                            }

                        ?>
                        <p>
                            Previa lettura dell'<a class="sottolineato" href="https://www.mulinobianco.it/privacy">informativa privacy</a>, rilascio al titolare del trattamento, Barilla G. 
                            e R. Fratelli Società per Azioni, il consenso al trattamento dei miei dati personali 
                            (comprensivi dei dati forniti in fase di registrazione o mediante la compilazione di moduli on-line) 
                            per le seguenti finalità:</br>
                            <strong>Attività di marketing, come informazioni sui nuovi prodotti o sulle promozioni</strong></br>
                            relativa a tutti i marchi del gruppo Barilla, tramite l'invio di comunicazioni commerciali 
                            di tipo promozionale e pubblicitario (anche tramite email, sms, notifiche) e per ricerche di mercato.*</br>
                            <input type="radio" name="marketing" value="si">Acconsento al trattamento</br>
                            <input type="radio" name="marketing" value="no">Non Acconsento al trattamento</br>
                            <?php
                            if(isset($errore_marketing)){
                                echo "<h4>Bisogna acconsentire per andare avanti</h4></br>";
                            }

                            ?>
                            <strong>Attività di profilazione, per conoscerci meglio</strong></br>
                            intesa come analisi delle mie abitudini e scelte di consumo, anche tramite il raffronto 
                            dei miei dati personali raccolti nelle diverse banche dati di Barilla (o utilizzate da Barilla); 
                            invio di comunicazioni promozionali personalizzate; personalizzazione dei contenuti visualizzati sui
                            siti e app del gruppo Barilla; pubblicazione di banner e indagini statistiche.*</br>
                            <input type="radio" name="profilazione" value="si">Acconsento al trattamento</br>
                            <input type="radio" name="profilazione" value="no">Non Acconsento al trattamento</br>
                            <?php
                            if(isset($errore_profilazione)){
                                echo "<h4>Bisogna acconsentire per andare avanti</h4></br>";
                            }

                            ?>
                            <strong>Per verificare o modificare i consensi</strong> eventualmente forniti a Barilla, le newsletter attive, i
                            canali e i brand da cui ricevere comunicazioni, è sufficiente accedere alla propria <strong>AREA RISERVATA</strong>, 
                            selezionare MODIFICA PROFILO e poi GESTIONE PRIVACY E NEWSLETTER. In alternativa i consensi possono 
                            essere modificati utilizzando il link in fondo alle email promozionali. Nell’area riservata è anche 
                            possibile richiedere la cancellazione del proprio profilo.
                        </p>
                    <input class="a_button sfondo_grigio" type="submit" value="Registrati">
                    
                    </form>
                    <p>Sei gia registrato? <a href="login_account.php">Clicca qui</a></p>
                    
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