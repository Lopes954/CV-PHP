<?php
    //1. On se connecte au serveur, mais aussi à la Base de donnée.
        require_once('connexion.php');
    //2. On lance le script SQL portant création de la table ou des tables
        //2.1 Table compètences
            $sql = "CREATE TABLE IF NOT EXISTS `competence` (
                `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `comp` varchar(50) DEFAULT NULL,
                `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            ) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 ";

        //2.2 Insertion dans la Table compètence
        
            $sql = "INSERT INTO `competence` (`id`, `comp`, `reg_date`) 
                VALUES  (5, 'HTML', '2020-11-15 06:13:59'),
                        (6, 'CSS', '2020-11-15 06:14:08'),
                        (7, 'Javascript', '2020-11-15 06:14:21'),
                        (8, 'PHP', '2020-11-15 06:14:29'),
                        (9, 'Montage vidéo', '2020-11-15 06:14:41'),
                        (10, 'Cadrage', '2020-11-15 06:14:51'),
                        (11, 'Lumière', '2020-11-15 06:15:02'),
                        (12, 'Anglais', '2020-11-15 06:15:10'),
                        (13, 'Japonais', '2020-11-15 06:15:20')
            ";

        //2.3 Table Connection
            $sql = "CREATE TABLE IF NOT EXISTS `connection` (
                `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `email` varchar(50) DEFAULT NULL,
                `motdepasse` varchar(50) DEFAULT NULL,
                `autorite` int(11) NOT NULL,
                `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
            ) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";
            
        //2.4 Table Expériences
            $sql = "CREATE TABLE IF NOT EXISTS `experience` (
                `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `moisanneestart` varchar(100) DEFAULT NULL,
                `moisanneeend` varchar(100) NOT NULL,
                `lieu` varchar(100) DEFAULT NULL,
                `nommetier` varchar(100) DEFAULT NULL,
                `travail` text,
                `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
                ) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1";
        
        //2.5 Insertion dans la Table Expérience
                $sql = "INSERT INTO `experience` (`id`, `moisanneestart`, `moisanneeend`, `lieu`, `nommetier`, `travail`, `reg_date`) 
                    VALUES  (5, '2008-07', '2008-07', 'Les Arts Décoratifs 75001 Paris', 'Agent de Surveillance', 'Surveillance des oeuvres, aide aux visiteurs', '2020-11-15 06:08:03'),
                            (6, '2009-06', '2009-09', 'Flunch 77240 Cesson', 'EmployÃ© de Restaurant', 'Agent de caisse, mise en place de la salle, plonge', '2020-11-15 06:08:20'),
                            (7, '2010-06', '2010-06', 'Canal+ 92100 Boulogne-Billancourt', 'Stagiaire Observation', 'Observation tournage plateau, installation de décors', '2020-11-15 06:08:33'),
                            (8, '2019-01', '2020-04', 'CollÃ¨ge Daniel FÃ©ry 94450 Limeil-Brévannes', 'Assistant d\'Education', 'Encadrement, surveillance, saisie des absences, retards, relation famille', '2020-11-15 06:09:36'),
                            (9, '2020-02', '2020-02', 'Radar Films 75008 ParisFigurant', 'Figurant', 'Figuration film', '2020-11-15 06:10:40'),
                            (10, '2018-07', '2018-07', 'CRIT Intérim 93420 Villepinte', 'Assistant Plateau', 'Mise en place plateau, décor, lumière', '2020-11-15 06:11:57'),
                            (11, '2016-08', '2017-07', 'Arkéna 75007 Paris', 'Technicien d\'Exploitation Vidéo', 'Surveillance Antenne image, son, réception\émission, maintenance de 1er niveau, insertion playlist et vérification', '2020-11-15 06:13:02')";
                        
        //2.6 Table Formations
            $sql = "CREATE TABLE IF NOT EXISTS `formation` (
                `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `annee` int(11) DEFAULT NULL,
                `lieuform` varchar(100) DEFAULT NULL,
                `nomformation` varchar(255) DEFAULT NULL,
                `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
              ) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1";

        //2.7 Insertion de donnée dans la Table Formation
            $sql = "INSERT INTO `formation` (`id`, `annee`, `lieuform`, `nomformation`, `reg_date`) 
                VALUES  (8, '2010-05', 'EPITECH', 'Ingénieur en Informatique', '2020-11-15 03:39:53'),
                        (9, '2005-05', 'Université Paris V', 'Mastèr2 Droit Privé option Droit des affaires', '2020-11-15 04:00:01'),
                        (10, '1995-05', 'Lycée de la Mare Carrière', 'Baccalauréat Scientifique Option Science de l\'Ingénieur', '2020-11-15 03:59:19')";
     
        //2.8 Table Interet
            $sql = "CREATE TABLE IF NOT EXISTS `interet` (
                `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `hobbie` varchar(100) DEFAULT NULL,
                `textehobbie` text,
                `mediahobbie` varchar(100) DEFAULT NULL,
                `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                PRIMARY KEY (`id`)
              ) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1";

        //2.9 Insertion de la Table Interet
            $sql = "INSERT INTO `interet` (`id`, `hobbie`, `textehobbie`, `mediahobbie`, `reg_date`) 
                VALUES  (3, 'La photographie', 'La photo à été un centre d/intéret lorsque j\'ai commencé à  voyager, afin de garder des souvenirs des différents endroits que j\'ai eu l\'occasion de découvrir. J\'ai pu dévélopper mes compétences de cette passion lors de ma formation en BTS Audiovisuel, étant entouré de nombreuses personnes tout aussi passionnées. Depuis, j\'essaye de retranscrire les émotions que je ressens à  travers l\'objectif.', '20180309_084355.jpg', '2020-11-23 03:20:12'),
                        (6, 'Les voyages', 'J\'ai eu l\'occasion de commencer à  voyager très jeune grâce à  mes parents. D\'abord vers leurs terres d\'origine, le Laos, ou Ã  quelque pas comme la Thailand ou la Malaisie. Puis en grandissant, cette envie a été toujours présente. En commençant par l\'Europe, Londres, Amsterdam, Bruxelles ou encore Francfort. Pour enfin prendre les ailes et aller voir au delÃ  (Etats-Unis, Canada, Nouvelle Zélande, Japon, CorÃ©e du Sud...). Je ne compte pas m arrêter en si bon chemin...', 'DSC_0032.jpg', '2020-11-15 10:44:20'),
                        (7, 'La culture japonaise', 'Ayant vécu pendant la gÃ©nÃ©ration \"Club Dorothée\", j\'ai eu l\'occasion de découvrir de nouvelles séries animales venant du pays du soleil levant. Par la suite, je me suis intéressé Ã  d\'autres \"animÃ©s\" dans laquelle on peut voir la vie quotidienne des japonais. C\'est Ã  partir de lÃ  que j\'ai souhaité en dÃ©couvrir plus sur ce pays. Ces coutumes, traditions, cuisines et j\'en passe. Cela a aboutit par deux voyages dans ce magnifique pays. Je compte bien y retourner, il y a tant de choses Ã  voir et dÃ©couvrir.', 'chureito.jpg', '2020-11-15 10:43:35'),
                        (8, 'Le sport', 'J\'ai toujours été un enfant qui aimÃ© se dépenser, courrir et faire du sport. Rien n\'a changé, j\'aime toujours autant cela. En faisant du foot bien évidemment, mais aussi du karatÃ© et maintenant le baseball qui est devenu une de mes passions.', 'baseball.jpeg', '2020-11-23 03:22:10')";
        
        
        //3.Table me
            $sql = "CREATE TABLE IF NOT EXISTS `me` (
                `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
                `nom` varchar(50) DEFAULT NULL,
                `prenom` varchar(50) DEFAULT NULL,
                `photo` varchar(50) DEFAULT NULL,
                `adresse` varchar(200) DEFAULT NULL,
                `codepostal` int(11) NOT NULL,
                `ville` varchar(100) NOT NULL,
                `pays` varchar(100) NOT NULL,
                `mail` varchar(50) DEFAULT NULL,
                `portable` int(15) DEFAULT NULL,
                `fixe` int(15) DEFAULT NULL,
                `titre` varchar(50) NOT NULL,
                `emploi` varchar(50) DEFAULT NULL,
                `apropos` text,
                `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                `daten` date NOT NULL,
                PRIMARY KEY (`id`)
              ) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1";
              
        //3.1 Insertion dans la Table Me
            $sql = "INSERT INTO `me` (`id`, `nom`, `prenom`, `photo`, `adresse`, `codepostal`, `ville`, `pays`, `mail`, `portable`, `fixe`, `titre`, `emploi`, `apropos`, `reg_date`, `daten`) 
                VALUES  (3, 'Armand', 'TOKOTO', 'MANDELA.jpEg', '18 rue Duffrenoy', 75116, 'Paris', 'France', 'atokoto@yahoo.fr', 0725354555, 0155657585, 'A.TOKOTO CV', 'Développeur web et mobile', 'Bonjour, Je m\'appelle Armand Moi-Même et j\'ai crée ce site afin de vous faire découvrir et partager mon travail. Développeur web et web mobile junior, je peux vous apporter des conseils et des solutions pour la conception de votre propre site internet ou de votre application mobile. Pourquoi me choisir plus qu\'un autre? Je vous propose de faire un tour sur le site. Si l\'aspect et le contenu vous plaisent, je vous propose de me contacter via les liens qui sont ci-dessous En vous souhaitant une bonne visite, je vous dis peut être à  bientôt', '2020-11-16 19:41:27', '1978-01-15');
                COMMIT;"
                
?>