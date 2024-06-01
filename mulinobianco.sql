CREATE DATABASE MulinoBianco;
USE MulinoBianco;


CREATE TABLE UTENTE (
  Email varchar(255) PRIMARY KEY,
  Nome varchar(255),
  Cognome varchar(255),
  Data_Nascita varchar(255),
  Password_utente varchar(255)
) ENGINE='InnoDB'; 

CREATE TABLE PRODOTTI (
  Id INTEGER PRIMARY KEY,
  Nome varchar(255),
  Categoria varchar(255),
  Url_immagine varchar(255)
) ENGINE='InnoDB';

INSERT INTO `prodotti` (`Id`, `Nome`, `Categoria`, `Url_immagine`) VALUES
(1, 'Baiocchi al pistacchio', 'Biscotti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/baiocchi-pistacchio-visual.png'),
(2, 'Scacchieri', 'Biscotti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/scacchieri-hero-definitivo%20-%20Copy%20%281%29.png'),
(3, 'Tarallucci', 'Biscotti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/tarallucci-min.png'),
(4, 'Baiocchi', 'Biscotti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/page/HERO_Baiocchi%20%281%29.png'),
(5, 'Nascondini', 'Biscotti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/nascondini-min.png'),
(6, 'Ritornelli', 'Biscotti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/ritornelli-min.png'),
(7, 'Canestrini', 'Biscotti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/canestrini-min.png'),
(8, 'Chicche acao', 'Biscotti', 'https://www.viveteacolori.com/wp-content/uploads/2021/06/Nuovo-progetto-2021-07-01T145810.294.jpg'),
(9, 'Fette biscottate dorate', 'Fette Biscottate', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/fette-dorate-min-2.png'),
(10, 'Fette biscottate integrali', 'Fette Biscottate', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/fette-integrali-min-2.png'),
(11, 'Minifette cioccolato al latte', 'Fette Biscottate', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/MAIN_Minifette.png'),
(12, 'Minifette cioccolato fondente', 'Fette Biscottate', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/MAIN_MinifetteIntegrali.png'),
(13, 'Cornetti classici', 'Merendine', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/cornetti-classici-min.png'),
(14, 'Cornetti cioccolato', 'Merendine', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/cornetti-cioccolato-min.png'),
(15, 'Flauti al latte', 'Merendine', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/flauti-latte-min.png'),
(16, 'Flauti al cioccolato', 'Merendine', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/flauti-cioccolato-min.png'),
(17, 'Crostatina albicocca', 'Merendine', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/main_visual_crostatina_albicocca_def.png'),
(18, 'Crostata al cioccolato', 'Merendine', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/HERO-IMG-TORTA_CIOCCOLATO.png'),
(19, 'Pan Bauletto Bianco', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/FB_AW_1294_NEW_MB_PANBAULETTO_BIANCO_400g_v2_MORSO_FELICITA.png'),
(20, 'Gran Bauletto Rustico', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/FB_AW_18364_NEW_MB_GRANBAULE_RUSTICO.png'),
(21, 'Pagnottelle classiche', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/pagnottella-classica-min.png'),
(22, 'Gran Pagnottelle', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/gran-pagnottella-min.png'),
(23, 'PancarrÃ¨', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/FB_AW_1769_MB_PANCARRE_16_FETTE_285g_NEW_DESIGN_v2.png'),
(24, 'Tigelle', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/HERO-IMG-Tigelle.png'),
(25, 'Piadelle classiche', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/piadella classica.png'),
(26, 'Focaccelle', 'Pani Morbidi', 'https://www.casadelbiscottorosetta.it/wp-content/uploads/focaccellerosmarino_singolo.png'),
(27, 'Pinse', 'Pani Morbidi', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/HERO-IMG-pinsa%20-%20Copy%20%281%29.png'),
(28, 'Baiocchi', 'Gelati', 'https://www.mulinobianco.it/origin0/v3/upl/entities/productCategory/baiocchi-gelato-min.png'),
(29, 'Granetti classici', 'Pani Croccanti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/granetti-min.png'),
(30, 'Michetti', 'Pani Croccanti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/michetti-min.png'),
(31, 'PangrÃ¬ classici', 'Pani Croccanti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/pangri-min-2.png'),
(32, 'Sgranocchi', 'Pani Croccanti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/sgranocchi-min-2.png'),
(33, 'Cracker', 'Pani Croccanti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/cracker-salati-min.png'),
(34, 'Pangrattato', 'Pani Croccanti', 'https://www.mulinobianco.it/origin0/v3/upl/entities/product/main-crop/pangrattato.png');

UPDATE PRODOTTI SET Nome='Pancarrè' WHERE ID=23;
SELECT * FROM PRODOTTI;
UPDATE PRODOTTI  SET Url_immagine='https://www.mulinobianco.it/origin0/v3/upl/entities/product/chicche-min.png'  WHERE ID=8;
CREATE TABLE AFFERENZA(
	Mail VARCHAR(255),
    Prodotto INTEGER,
    PRIMARY KEY(Mail, Prodotto)
);


SELECT * FROM UTENTE;
DELETE FROM UTENTE WHERE Email='ciao';
DELETE FROM UTENTE WHERE Email='mgfhruhrufhrufrufjri';
SELECT * FROM AFFERENZA;


UPDATE PRODOTTI SET Nome='Pangrì classici' WHERE Id=31;

SELECT * FROM AFFERENZA A JOIN PRODOTTI P ON A.Prodotto=P.Id;

UPDATE AFFERENZA SET Mail='domenico@gmail.com' WHERE Mail='domenicomanfredi@gmail.com';