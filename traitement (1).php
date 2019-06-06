<?php


    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');

    

    //identifier le nom de base de données
    $database = "ECEAmazon";
    

    //connecter l'utilisateur dans BDD
    $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASS);
    $db_found = mysqli_select_db($db_handle, $database);

    //si le BDD existe, faire le traitement
    if($db_found) {
        
        //Création des tables de la BDD
        
        $sql = "CREATE TABLE Vetement (ref INT(6) PRIMARY KEY, type_vet ENUM('0','1'),nom VARCHAR(50) NOT NULL,descri TEXT(200) NOT NULL,prix INT(6),sexe VARCHAR(10),pointure INT(2),taille VARCHAR(3), nb_vendu INT(5), id_vendeur VARCHAR(20),url_img VARCHAR(50),FOREIGN KEY (id_vendeur) REFERENCES Vendeur(pseudo))";
        $result = mysqli_query($db_handle, $sql);

        $sql1 = "CREATE TABLE Musique (ref INT(6) PRIMARY KEY,titre VARCHAR(50) NOT NULL,artiste VARCHAR(30) NOT NULL,album VARCHAR(30),annee INT(4),prix INT(6), nb_vendu INT(5), id_vendeur VARCHAR(20),url_img VARCHAR(50),lien_video TEXT, FOREIGN KEY (id_vendeur) REFERENCES Vendeur(pseudo))";
        $result1 = mysqli_query($db_handle, $sql1);

        $sql2 = "CREATE TABLE Livre (ref INT(6) PRIMARY KEY,titre VARCHAR(50) NOT NULL,auteur VARCHAR(30) NOT NULL,annee INT(4),prix INT(6),editeur VARCHAR(40),descri TEXT, nb_vendu INT(5), id_vendeur VARCHAR(20),url_img VARCHAR(50),FOREIGN KEY (id_vendeur) REFERENCES Vendeur(pseudo))";
        $result2 = mysqli_query($db_handle, $sql2);

       
        $sql3 = "CREATE TABLE SportLoisir (ref INT(6) PRIMARY KEY,nom VARCHAR(50) NOT NULL,prix INT(6),descri TEXT, nb_vendu INT(5), id_vendeur VARCHAR(20),url_img VARCHAR(50), lien_video TEXT,FOREIGN KEY (id_vendeur) REFERENCES Vendeur(pseudo))";
        $result3 = mysqli_query($db_handle, $sql3);

        $sql4 = "CREATE TABLE Vendeur (pseudo VARCHAR(20) PRIMARY KEY,admins ENUM('0','1'),mdp VARCHAR(20),email VARCHAR(50),nom VARCHAR(40), url_pdp VARCHAR(50), url_pdc VARCHAR(50))";
        $result4 = mysqli_query($db_handle, $sql4);
        
        $sql5 = "CREATE TABLE Acheteur (pseudo VARCHAR(20) PRIMARY KEY,mdp VARCHAR(20),email VARCHAR(50),nom VARCHAR(20),prenom VARCHAR(20),adresse1 VARCHAR(50),adresse2 VARCHAR(50),
            code_bp INT(5),ville VARCHAR(40),pays VARCHAR(20),tel INT(10),card_type VARCHAR(15),card_number BIGINT(16),card_name VARCHAR(50),exp_date DATE,sec_code INT(3))";
        $result5 = mysqli_query($db_handle, $sql5);
        
        $sql32 = "CREATE TABLE obj_panier (ref_panier INT(6) PRIMARY KEY,pseudo VARCHAR(20) NOT NULL, categorie int(1) NOT NULL,id int(6), quantite INT(3),couleur VARCHAR(20), taille VARCHAR(5), pointure INT(5),sexe VARCHAR(10), FOREIGN KEY (pseudo) REFERENCES acheteur(pseudo))";
        $result32 = mysqli_query($db_handle, $sql32);

        //Insertion d'acheteurs
        $sql6 = "INSERT INTO `acheteur` (`pseudo`, `mdp`, `email`, `nom`, `prenom`, `adresse1`, `adresse2`, `code_bp`, `ville`, `pays`, `tel`, `card_type`, `card_number`, `card_name`, `exp_date`, `sec_code`) VALUES ('gege2020', '0000', 'gege@edu.ece.fr', 'Pertier', 'Gege', NULL, NULL, NULL, NULL, NULL, NULL, 'VISA', '1234567890123456', 'gege', '2030/01/01', '123')";
        $result6 = mysqli_query($db_handle, $sql6);

        //Insertion de l'admin
        $sql7 = "INSERT INTO `vendeur` (`pseudo`, `admins`, `mdp`, `email`, `nom`, `url_pdp`, `url_pdc`) VALUES ('admin', '1', '0000', 'laure.chamouard@edu.ece.fr', 'ECE', 'img/shiba.jpg', 'img/fond1.jpg' )";
        $result7 = mysqli_query($db_handle, $sql7);

        //Insertion des articles
        //Vetements
        $sql8 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('1','0','Chaussettes pour chien','Protegez les petits petons de vos toutous preferes','6',NULL,NULL,NULL,'0',NULL,'img/articles/v1.jpg')";
        $result8 = mysqli_query($db_handle, $sql8);

        $sql9 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('2','1','Bandana rafraichissant','Gardez un bon style pour votre chien tout en le protegeant de la chaleur','7',NULL,NULL,NULL,'7','admin','img/articles/v2.jpg')";
        $result9 = mysqli_query($db_handle, $sql9);

        $sql10 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('3','0','Bottes confort','Favorise la cicatrisation des blessures','12',NULL,NULL,NULL,'5',NULL,'img/articles/v3.jpg')";
        $result10 = mysqli_query($db_handle, $sql10);

        $sql11 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('4','1','Noeud papillon','Accessorisez votre chien pour une classe legendaire','5',NULL,NULL,NULL,'0',NULL,'img/articles/v4.jpg')";
        $result11 = mysqli_query($db_handle, $sql11);

        $sql12 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('5','1','Deguisement Captain America','A la sortie du dernier Avenger, soyez surs que votre animal reste a la mode','7',NULL,NULL,NULL,'3',NULL,'img/articles/v5.jpg')";
        $result12 = mysqli_query($db_handle, $sql12);

        $sql13 = "INSERT INTO `vetement` (`ref`, `type_vet`, `nom`, `descri`, `prix`, `sexe`, `pointure`, `taille`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('6','1','Pull Over Langley','Pour vos longues soirees d hiver, couvrez vos animaux d un bon pull en laine','17',NULL,NULL,NULL,'6',NULL,'img/articles/v6.jpg')";
        $result13 = mysqli_query($db_handle, $sql13);

        //Mus
        $sql14 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('1', 'Black Dog', 'Led Zeppelin', 'Led Zeppelin IV', '1971', '3','4','admin','img/articles/m1.jpg', '<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/fl6s1x9j4QQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result14 = mysqli_query($db_handle, $sql14);

        $sql15 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('2', 'Who Let the Dogs Out?', 'Baha Men', 'Who Let the Dogs Out', '2000', '3','8',NULL,'img/articles/m2.jpg', '<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/Qkuu0Lwb5EM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result15 = mysqli_query($db_handle, $sql15);

        $sql16 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('3', 'The Dogs Of War', 'Pink Floyd', 'A Momentary Lapse of Reason', '1988', '3','2',NULL,'img/articles/m3.jpg', '<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/Ukhc6NxolQU\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result16 = mysqli_query($db_handle, $sql16);

        $sql17 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('4', 'Hey Bulldog', 'The Beatles', 'Yellow Submarine', '1969', '3','0',NULL,'img/articles/m4.jpg', '<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/M4vbJQ-MrKo\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result17 = mysqli_query($db_handle, $sql17);

        $sql18 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('5', 'Given The Dog A Bone', 'AC/DC', 'Back in Black', '1980', '3','0',NULL,'img/articles/m5.jpg', '<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/b3LW6P-p4Dw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result18 = mysqli_query($db_handle, $sql18);

        $sql19 = "INSERT INTO `musique` (`ref`, `titre`, `artiste`, `album`, `annee`, `prix`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('6', 'Hound Dog', 'Elvis Presley', 'Dont Be Cruel', '1956', '3','7',NULL,'img/articles/m6.jpg', '<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/lzQ8GDBA8Is\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result19 = mysqli_query($db_handle, $sql19);


        //Sp&L
        $sql20 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('1', 'Agility', '45', 'L agility (signifiant tout simplement  agilite  en anglais), ou agilite, est un sport canin, dans lequel le chien evolue sur un parcours d obstacles sous la conduite de son maitre.','2',NULL,'img/articles/sl1.jpg','<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/A4N7G29GWQI\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result20 = mysqli_query($db_handle, $sql20);

        $sql21 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('2', 'Freesbee', '5', 'Disque en plastique, legerement bombe, que les joueurs se lancent et qui plane en tournant sur lui-meme.','4',NULL,'img/articles/sl2.jpg','<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/n2MoImTMR5A\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result21 = mysqli_query($db_handle, $sql21);

        $sql22 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('3', 'Lance le baton', '2', 'Long morceau de bois rond que l on peut tenir a la main.','0',NULL,'img/articles/sl3.jpg','<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/m_CrIu01SnM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result22 = mysqli_query($db_handle, $sql22);

        $sql23 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('4', 'Lancer la balle', '3', 'Petite sphere, boule elastique dont on se sert pour divers jeux.','9',NULL,'img/articles/sl4.jpg','<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/csC8-RJpPMM\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result23 = mysqli_query($db_handle, $sql23);

        $sql24 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('5', 'Promenade', '1', 'Action de se promener ; trajet fait en se promenant.','0','admin','img/articles/sl5.jpg','<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/q7adpEYMfPk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result24 = mysqli_query($db_handle, $sql24);

        $sql25 = "INSERT INTO `sportloisir` (`ref`, `nom`, `prix`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`, `lien_video`) VALUES ('6', 'Manger le canape', '300', 'Action de manger un long siege a dossier ou plusieurs personnes peuvent s asseoir ensemble.','7',NULL,'img/articles/sl6.jpg','<iframe width=\"315\" height=\"170\" src=\"https://www.youtube.com/embed/3JL9SmhFXRE\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>')";
        $result25 = mysqli_query($db_handle, $sql25);

        //Livres
        $sql26 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('1', 'Petit ABC Rustica de l education positive', 'Chloe Fesch', '2018', '20', 'Rustica', 'Apprendre a son chien des regles de vie, l eduquer avec respect et bienveillance, lui permettre de se depenser suffisamment et opter pour une attitude coherente','4',NULL,'img/articles/l1.jpg')";
        $result26 = mysqli_query($db_handle, $sql26);

        $sql27 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('2', 'Le Petit Larousse des chiens', 'Dorling Kindersley', '2017', '23', 'Larousse', 'La bible pour choisir en toute connaissance de cause votre compagnon','4',NULL,'img/articles/l2.jpg')";
        $result27 = mysqli_query($db_handle, $sql27);

        $sql28 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('3', 'Encyclopedie visuelle des races de chien', 'Alain Fournier', '2009', '29', 'ECE Event', 'La presentation toute illustree des 337 races de chiens referencees par la FCI ( federation canine internationale.)','1',NULL,'img/articles/l3.jpg')";
        $result28 = mysqli_query($db_handle, $sql28);

        $sql29 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('4', 'Eduquer son chien pour les Nuls', 'Jack VOLHARD', '2012', '13', 'Les Nuls', 'Assis, debout, couche ! Eduquez votre animal de compagnie prefere !','5',NULL,'img/articles/l4.jpg')";
        $result29 = mysqli_query($db_handle, $sql29);

        $sql30 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('5', 'Comment elever son chiot (au top !)', 'Gwen Bailey', '2012', '12', 'Larissa', 'Ce guide donne les cles d une education reussie fondee sur la confiance, l amour et surtout un apprentissage positif des regles de vie.','3',NULL,'img/articles/l5.jpg')";
        $result30 = mysqli_query($db_handle, $sql30);

        $sql31 = "INSERT INTO `livre` (`ref`, `titre`, `auteur`, `annee`, `prix`, `editeur`, `descri`, `nb_vendu`, `id_vendeur`, `url_img`) VALUES ('6', '365 idees pour rendre mon chien heureux', 'Laetitia OuafMag', '2016', '15', 'Ouafmag', 'Vous cherchez des idees pour occuper votre chien, lui faire developper ses talents, briser la routine, devenir plus complices… en voici 365 !','7','admin','img/articles/l6.jpg')";
        $result31 = mysqli_query($db_handle, $sql31);

        //Panier déjà existant
        $sql33 = "INSERT INTO `obj_panier` (`ref_panier`,`pseudo`, `categorie`, `id`, `quantite`, `couleur`,`taille`,`pointure`,`sexe`) VALUES ('1','gege2020', '0', '1', '1',NULL,NULL,NULL,NULL)";
        $result33 = mysqli_query($db_handle, $sql33);

        $sql34 = "INSERT INTO `obj_panier` (`ref_panier`,`pseudo`, `categorie`, `id`, `quantite`, `couleur`,`taille`,`pointure`,`sexe`) VALUES ('2','gege2020', '0', '2', '2',NULL,NULL,NULL,NULL)";
        $result34 = mysqli_query($db_handle, $sql34);

        $sql35 = "INSERT INTO `obj_panier` (`ref_panier`,`pseudo`, `categorie`, `id`, `quantite`, `couleur`,`taille`,`pointure`,`sexe`) VALUES ('3','gege2020', '1', '1', '1',NULL,NULL,NULL,NULL)";
        $result35 = mysqli_query($db_handle, $sql35);

        $sql36 = "INSERT INTO `obj_panier` (`ref_panier`,`pseudo`, `categorie`, `id`, `quantite`, `couleur`,`taille`,`pointure`,`sexe`) VALUES ('4','gege2020', '2', '1', '3',NULL,NULL,NULL,NULL)";
        $result36 = mysqli_query($db_handle, $sql36);

        $sql37 = "INSERT INTO `obj_panier` (`ref_panier`,`pseudo`, `categorie`, `id`, `quantite`, `couleur`,`taille`,`pointure`,`sexe`) VALUES ('5','gege2020', '3', '1', '1','JAUNE',NULL,'40','Femelle')";
        $result37 = mysqli_query($db_handle, $sql37);
    }
    //si la BDD n'existe pas
    else {
        echo "Database not found";
    }//end else

    mysqli_close($db_handle);

?>