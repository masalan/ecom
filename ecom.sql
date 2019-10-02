-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 02, 2019 at 10:52 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresse`
--

CREATE TABLE `adresse` (
  `adresse_id` int(11) NOT NULL,
  `user_id` tinyint(11) NOT NULL COMMENT 'ID du client',
  `full_name` varchar(220) NOT NULL COMMENT 'adresse complète',
  `phone` varchar(200) NOT NULL COMMENT 'numéro de téléphone',
  `province` varchar(200) NOT NULL COMMENT 'Nom de la province du Gabon',
  `quartier` varchar(200) NOT NULL COMMENT 'nom du quartier',
  `phone_two` varchar(220) NOT NULL COMMENT '2e numero de telephone (facultatif )',
  `defaut` varchar(220) NOT NULL DEFAULT '0' COMMENT ' 1: adresse par defaut',
  `description` varchar(220) NOT NULL COMMENT 'description (facultative)',
  `supprime` tinyint(11) NOT NULL DEFAULT '0' COMMENT '0 : actif , 1 :  déjà supprimer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='la table des adresses d`expeditions des colis';

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(24, 'Informatique', '2019-09-26 23:01:06', '2019-09-27 08:42:10'),
(25, 'Electromenager', '2019-09-26 23:01:20', '2019-09-26 22:01:20'),
(26, 'Beauté & Parfum', '2019-09-26 23:01:32', '2019-09-27 08:42:36'),
(27, 'Bureau', '2019-09-26 23:01:45', '2019-09-26 22:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(7) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `product_id` varchar(30) NOT NULL,
  `category` int(5) NOT NULL,
  `sizes` text NOT NULL,
  `colors` text NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `Price_promo` varchar(200) NOT NULL COMMENT 'prix promotion',
  `promo` tinyint(5) NOT NULL DEFAULT '0' COMMENT '0: non promo, 1: promo',
  `stock` varchar(200) NOT NULL DEFAULT '0',
  `like` varchar(220) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `thumbnail`, `product_id`, `category`, `sizes`, `colors`, `description`, `price`, `Price_promo`, `promo`, `stock`, `like`, `created_at`, `updated_at`) VALUES
(10, 'Manuelle scolaire', 'cp_anglais.jpg', 'm1', 27, '12,24,39', 'rouge,bleu,Noire,jaune', '&lt;p&gt;&lt;strong&gt;Amazon Web Services&lt;/strong&gt; is a subsidiary of Amazon that provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basisAmazon Web Services is a subsidiary of Amazon that provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basisAmazon Web Services is a subsidiary of Amazon that provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basisAmazon Web Services is a subsidiary of Amazon that provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basis&lt;/p&gt;', 10, '', 0, '0', '0', '2019-09-26 23:04:16', '2019-09-26 22:04:16'),
(11, 'Francais', 'cp_francais.jpg', 'm3e', 24, '', '', '&lt;p&gt;Amazon Web Services is a subsidiary of Amazon that provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basisAmazon Web Services is a subsidiary of Amazon that provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basisAmazon Web Services is a subsidiary of Amazon that provides on-demand cloud computing platforms to individuals, companies, and governments, on a metered pay-as-you-go basis&lt;/p&gt;', 45, '', 0, '0', '0', '2019-09-26 23:05:36', '2019-09-26 22:05:36'),
(12, 'Nouvelle Ring Stick Up Cam Battery', '61fbp0V3S4L__SL1000_.jpg', '43r', 24, 'cam solar,cam Battery', '', '&lt;ul&gt;\r\n	&lt;li&gt;Voyez, entendez et parlez &agrave; vos visiteurs et vos animaux de compagnie directement depuis votre smartphone et tablette ou certains appareils Echo gr&acirc;ce &agrave; la Stick Up Cam Battery, une cam&eacute;ra de surveillance aliment&eacute;e par une batterie, qui peut &ecirc;tre install&eacute;e partout, &agrave; l&rsquo;int&eacute;rieur comme &agrave; l&rsquo;ext&eacute;rieur.&lt;/li&gt;\r\n	&lt;li&gt;Avec la vid&eacute;o en direct, vous pouvez surveiller votre domicile &agrave; tout moment via l&amp;#39;application Ring.&lt;/li&gt;\r\n	&lt;li&gt;Recevez des notifications d&egrave;s qu&amp;#39;un mouvement est d&eacute;tect&eacute; en r&eacute;glant vos param&egrave;tres de d&eacute;tection de mouvements.&lt;/li&gt;\r\n	&lt;li&gt;Positionnez-la n&amp;#39;importe o&ugrave;, &agrave; l&rsquo;int&eacute;rieur ou &agrave; l&rsquo;ext&eacute;rieur, sur une surface plane ou installez-la sur un mur.&lt;/li&gt;\r\n	&lt;li&gt;Surveillez toute votre maison en connectant une ou plusieurs Stick Up Cam &agrave; l&amp;#39;ensemble de vos appareils Ring dans l&amp;#39;application Ring.&lt;/li&gt;\r\n	&lt;li&gt;Configurez facilement votre Stick Up Cam en quelques minutes.&lt;/li&gt;\r\n	&lt;li&gt;Aliment&eacute;e par une batterie amovible &agrave; d&eacute;gagement rapide.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Les fonctionnalit&eacute;s standards telles que les notifications instantan&eacute;es, la vid&eacute;o en direct et le syst&egrave;me audio bidirectionnel sont disponibles gratuitement d&egrave;s la mise en service de tous vos appareils Ring. Un abonnement au plan Ring Protect est requis pour activer l&amp;#39;enregistrement vid&eacute;o sur votre appareil. Le plan Ring Protect est un abonnement facultatif qui vous permet d&rsquo;enregistrer, de revoir et de partager &agrave; tout moment, les &eacute;v&eacute;nements que vous avez manqu&eacute;s. Profitez de votre offre d&rsquo;essai gratuit de 30 jours au plan Ring Protect. Une fois l&rsquo;offre d&rsquo;essai termin&eacute;, vous pourrez choisir de maintenir votre abonnement au plan Ring Protect &agrave; partir de 3 &euro; par mois seulement en vous inscrivant sur ring.com.&lt;/li&gt;\r\n&lt;/ul&gt;', 70, '', 0, '0', '0', '2019-09-27 08:53:14', '2019-09-27 11:11:53'),
(13, 'Enceinte connectée avec', '91KPeV-0TtL__SL1500_.jpg', 's43', 24, '', '', '&lt;p&gt;Son immersif : les 5 haut-parleurs produisent des basses puissantes, des m&eacute;diums dynamiques et des aigus nets. La technologie Dolby Atmos remplit l&amp;#39;espace et ajoute de la clart&eacute;, ainsi que de la profondeur.&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;Pr&ecirc;te &agrave; rendre service : demandez &agrave; Alexa de jouer de la musique, lire les nouvelles et r&eacute;pondre &agrave; vos questions.&lt;/li&gt;\r\n	&lt;li&gt;Contr&ocirc;lez votre musique par simple commande vocale : &eacute;coutez des titres en streaming sur Amazon Music, Spotify, Deezer, Apple Music et plus encore.&lt;/li&gt;\r\n	&lt;li&gt;S&amp;#39;adapte &agrave; chaque pi&egrave;ce : d&eacute;tecte automatiquement l&amp;#39;acoustique de votre espace et ajuste continuellement la lecture pour livrer un son optimal.&lt;/li&gt;\r\n	&lt;li&gt;Hub connect&eacute; int&eacute;gr&eacute; : demandez &agrave; Alexa de contr&ocirc;ler des appareils Zigbee compatibles.&lt;/li&gt;\r\n	&lt;li&gt;Restez en contact avec votre famille : utilisez vos appareils Alexa comme des interphones et appelez par Drop In ou faites des annonces dans toutes les pi&egrave;ces de la maison.&lt;/li&gt;\r\n	&lt;li&gt;Con&ccedil;u pour prot&eacute;ger votre vie priv&eacute;e : dot&eacute; de multiples &eacute;l&eacute;ments de protection et contr&ocirc;le de vos informations personnelles, dont un bouton Arr&ecirc;t microphone qui d&eacute;connecte &eacute;lectroniquement les microphones.&lt;/li&gt;\r\n&lt;/ul&gt;', 199.99, '', 0, '0', '0', '2019-09-27 08:55:00', '2019-09-30 12:33:24'),
(14, 'Découvrez le routeur/répéteur Wi-Fi maillé eero', '41aFYRhjD5L__SL1000_.jpg', '5346g', 24, '15,30,40', 'rouge,blue,noir', '&lt;ul&gt;\r\n	&lt;li&gt;Routeur autonome rapide : le routeur Wi-Fi maill&eacute; eero se connecte &agrave; votre modem existant pour fournir une couverture Wi-Fi sur 140 m&sup;2; fiable et rapide &agrave; votre domicile.&lt;/li&gt;\r\n	&lt;li&gt;Flexibilit&eacute; maximum : augmentez votre couverture Wi-Fi &agrave; tout moment gr&acirc;ce au mat&eacute;riel simple et multi-compatible d&amp;#39;eero.&lt;/li&gt;\r\n	&lt;li&gt;Fonctionne avec votre fournisseur de services Internet : eero se connecte &agrave; votre modem pour apporter votre connexion Internet existante &agrave; chaque recoin de votre domicile.&lt;/li&gt;\r\n	&lt;li&gt;Configuration en quelques minutes : l&amp;#39;application eero vous guide tout au long de la configuration et vous permet de g&eacute;rer et contr&ocirc;ler votre r&eacute;seau o&ugrave; que vous soyez.&lt;/li&gt;\r\n	&lt;li&gt;Wi-Fi pour votre divertissement : tirez le maximum de votre Wi-Fi en regardant du contenu en streaming, en jouant et en travaillant depuis n&amp;#39;importe quel endroit de votre domicile.&lt;/li&gt;\r\n	&lt;li&gt;S&amp;#39;am&eacute;liore au fil du temps : les mises &agrave; jour automatiques prot&egrave;gent votre r&eacute;seau.&lt;/li&gt;\r\n	&lt;li&gt;Technologie TrueMesh : eero achemine intelligemment le trafic pour &eacute;viter la congestion, la mise en m&eacute;moire tampon et les pertes de connexion.&lt;/li&gt;\r\n&lt;/ul&gt;', 56, '', 0, '0', '0', '2019-09-27 09:16:08', '2019-09-27 11:14:08'),
(15, 'Anti-vieillissement des ingrédients', '71eBP8hhDAL__SL1500_.jpg', 'h54', 26, '', 'Black,Red', '&lt;ul&gt;\r\n	&lt;li&gt;L&amp;#39;APPR&Ecirc;T PARFAIT: Le s&eacute;rum et l&amp;#39;appr&ecirc;t Miracle Effects de Beverly Hills Youth Restore est une formule &eacute;poustouflante qui s&amp;#39;attaque &agrave; tous les signes du vieillissement et qui sert &eacute;galement d&amp;#39;appr&ecirc;t de maquillage parfait! L&amp;#39;appr&ecirc;t pour la peau se met imm&eacute;diatement au travail et s&egrave;che compl&egrave;tement en 2 &agrave; 4 minutes.&lt;/li&gt;\r\n	&lt;li&gt;R&Eacute;DUIRE LES LIGNES ET LES RIDES: En vedette dans le magazine Vogue, Beverly Hills Super Serum est un produit id&eacute;al pour raviver les peaux fatigu&eacute;es, r&eacute;duire les rides et les ridules. Impl&eacute;mentez le Super Serum dans votre routine quotidienne de beaut&eacute; et obtenez une peau d&amp;#39;apparence plus ferme, plus douce et plus saine.&lt;/li&gt;\r\n	&lt;li&gt;HYDRATANT INSTANTAN&Eacute;: Cet appr&ecirc;t qui hydrate la peau hydrate et hydrate instantan&eacute;ment votre peau pour lui donner une peau d&amp;#39;apparence sans rides, plus ferme, plus douce et plus saine. Il cr&eacute;e &eacute;galement l&amp;#39;apparence d&amp;#39;un teint uniforme et vous donne la base parfaite pour votre maquillage.&lt;/li&gt;\r\n	&lt;li&gt;SUPER SERUM: Ce primaire pour la peau contient de puissants ingr&eacute;dients anti-&acirc;ge! Beverly Hills utilise le Centella Asiatica, l&amp;#39;extrait de racine de r&eacute;glisse, l&amp;#39;Escine, l&amp;#39;Argania Spinosa et le collag&egrave;ne pour rajeunir la peau des hommes et des femmes du monde entier.&lt;/li&gt;\r\n	&lt;li&gt;NOTRE PROMESSE &Agrave; VOUS: Chez Beverly Hills, nous croyons en une exp&eacute;rience client de premi&egrave;re classe. Magasinez aujourd&amp;#39;hui et d&eacute;couvrez pourquoi des milliers d&amp;#39;hommes et de femmes utilisent maintenant ce produit pour combattre les signes du vieillissement et am&eacute;liorer leur teint.&lt;/li&gt;\r\n&lt;/ul&gt;', 85, '', 0, '0', '0', '2019-09-27 09:25:48', '2019-09-27 11:13:14'),
(16, 'Carte NM 128Go 90Mo', '61phwEdLNVL__SL1000_card.jpg', 'df34', 24, '', '', '&lt;p&gt;Carte nm Carte m&eacute;moire/Carte m&eacute;moire P30Pro/P30/Carte m&eacute;moire Mate20 Series Carte m&eacute;moire ）&lt;/p&gt;\r\n\r\n&lt;ul&gt;\r\n	&lt;li&gt;A la m&ecirc;me taille qu&amp;#39;une carte Nano-SIM(note:Utilis&eacute; uniquement pour les t&eacute;l&eacute;phones Huawei, les autres t&eacute;l&eacute;phones ne sont pas pris en charge.&lt;/li&gt;\r\n	&lt;li&gt;Accessoires d&amp;#39;origine Huawei, uniquement compatibles avec les Huawei P30/P30 Pro/Mate20/Mate20 Pro/Mate20 X/Mate20 RS&lt;/li&gt;\r\n	&lt;li&gt;Vitesses de lecture possibles jusqu&amp;#39;&agrave; 90Mo/s&lt;/li&gt;\r\n	&lt;li&gt;Prend en charge le protocole eMMC 4.5(Remarque: les versions de P30Lite et Mate 20X-5G ne sont pas prises en charge.)&lt;/li&gt;\r\n&lt;/ul&gt;', 39.99, '', 0, '0', '0', '2019-09-27 09:44:16', '2019-09-27 11:13:24'),
(17, 'Secrets d\'une peau nette', 'beaute.jpg', 'def34', 26, '', '', '&lt;p&gt;Toutes les solutions naturelles pour en finir avec les boutons &bull; Les solutions dans l&amp;#39;assiette Les aliments &agrave; privil&eacute;gier, &agrave; &eacute;viter, les probiotiques, l&amp;#39;eau... &bull; Les soins sp&eacute;cifiques avec des produits naturels Routine beaut&eacute; quotidienne : nettoyage, hydratation de la peau... Action cibl&eacute;es : masques, gommages, traitements des boutons, des cicatrices... &bull; Hygi&egrave;ne de vie L&amp;#39;auteure donne de nombreux conseils de pr&eacute;vention et pour &eacute;viter une auto-contamination : oreillers en soie, &eacute;charpes, t&eacute;l&eacute;phones portables.... &bull; Di&eacute;t&eacute;tique adapt&eacute;e Compl&eacute;ments alimentaires, tisanes, huiles essentielles, cures, d&eacute;tox...&lt;/p&gt;', 22.9, '', 0, '0', '0', '2019-09-27 09:45:57', '2019-09-27 11:11:32'),
(18, 'Électrotechnique', 'bk.jpg', 'ds324', 25, '', '', '&lt;p&gt;La quatri&egrave;me &eacute;dition de &Eacute;lectrotechnique donne au lecteur une vue d&amp;#39;ensemble de l&amp;#39;&eacute;lectrotechnique moderne. Au fil des 50 chapitres enti&egrave;rement r&eacute;vis&eacute;s, sont trait&eacute;s les lois fondamentales de l&amp;#39;&eacute;lectricit&eacute;, des circuits &eacute;lectriques, des machines &eacute;lectriques, de l&amp;#39;&eacute;lectronique de puissance, les harmoniques, de m&ecirc;me que la production, le transport et la distribution de l&amp;#39;&eacute;nergie &eacute;lectrique. Le livre est structur&eacute; en quatre parties : 1. Notions fondamentales et circuits 2. Machines &eacute;lectriques et transformateurs 3. &Eacute;lectronique de puissance 4. R&eacute;seaux &eacute;lectriques. Cette nouvelle &eacute;dition pr&eacute;sente &eacute;galement plusieurs sujets nouveaux, tels que la g&eacute;n&eacute;ration de l&amp;#39;&eacute;lectricit&eacute; par des &eacute;oliennes, la production d&eacute;centralis&eacute;e de l&amp;#39;&eacute;nergie &eacute;lectrique, le dimensionnement des machines &eacute;lectriques, le convertisseur &agrave; trois niveaux, et l&amp;#39;utilit&eacute; des transformateurs &agrave; haute fr&eacute;quence. Fid&egrave;le &agrave; sa vocation premi&egrave;re, cet ouvrage traite les diff&eacute;rents sujets en termes simples et toujours appuy&eacute;s par les principes de base, en suivant une progression graduelle. Par son caract&egrave;re multidisciplinaire et pratique, l&amp;#39;ouvrage s&amp;#39;adresse en premier lieu aux &eacute;tudiants de secondaire technologique et l&amp;#39;enseignement sup&eacute;rieur (BTS, IUT). Il constitue une r&eacute;f&eacute;rence l&amp;#39;enseignement pour les &eacute;lectriciens et les ing&eacute;nieurs, qui ont besoin de former un jugement technique rationnel. Le lecteur trouvera aussi des renseignements int&eacute;ressants en visitant le site www.wildi-theo.com.&lt;/p&gt;', 45, '', 0, '0', '0', '2019-09-27 09:48:11', '2019-09-27 11:13:42'),
(19, 'ALTcompluser Anime Lampe', 'beaute1.jpg', 'br234', 27, '', 'Chopper,luffy', '&lt;ul&gt;\r\n	&lt;li&gt;Lampe One Piece, parfaite pour les fans de manga anim&eacute;s.&lt;/li&gt;\r\n	&lt;li&gt;Mat&eacute;riau : polyr&eacute;sine&lt;/li&gt;\r\n	&lt;li&gt;Taille: 10 &times; 7,5 &times; 17 cm&lt;/li&gt;\r\n	&lt;li&gt;Alimentation : pile bouton AG3.&lt;/li&gt;\r\n	&lt;li&gt;Cette veilleuse peut &ecirc;tre utilis&eacute;e comme lumi&egrave;re d&eacute;corative dans la chambre &agrave; coucher, la chambre d&amp;#39;enfant, le salon, le bar, l&amp;#39;h&ocirc;tel, les magasins, les caf&eacute;s, les restaurants, etc. Convient &eacute;galement comme festival, anniversaire, cadeaux de No&euml;l.&lt;/li&gt;\r\n&lt;/ul&gt;', 13.44, '', 0, '0', '0', '2019-09-27 10:15:54', '2019-09-30 12:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `store_settings`
--

CREATE TABLE `store_settings` (
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_settings`
--

INSERT INTO `store_settings` (`name`, `value`, `updated_at`) VALUES
('business_email', 'businessemail@yourdomain.com', '2019-09-26 21:32:34'),
('currency', 'EUR', '2019-09-26 22:00:04'),
('currency_symbol', '&#128;', '2019-09-26 22:00:04'),
('logo', 'logo1.png', '2019-09-26 21:32:34'),
('msg_on_order_submit', 'Thank You for your Order!!', '2019-09-26 21:32:34'),
('shipping_charges', '0', '2019-09-26 21:32:34'),
('shipping_free_after', '0', '2019-09-26 21:32:34'),
('store_name', 'Alan Shop', '2019-09-26 21:59:45'),
('use_paypal', '1', '2019-09-26 21:32:34'),
('use_submit_order', '1', '2019-09-26 21:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(220) COLLATE utf8_bin NOT NULL COMMENT 'nom complet',
  `avatar` varchar(220) COLLATE utf8_bin NOT NULL COMMENT 'photo de profil',
  `phone` varchar(17) COLLATE utf8_bin NOT NULL COMMENT 'numero de telephone ',
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `level` tinyint(11) NOT NULL DEFAULT '1' COMMENT '0: admin , 1 user',
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `avatar`, `phone`, `username`, `password`, `email`, `level`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, '', '', '', 'admin', '$P$BWpPqv.VQK2KVZz2sU7tEKytC2mGS..', 'admin@mas.fr', 0, 1, 0, NULL, NULL, NULL, '', '', '::1', '2019-10-02 09:05:00', '2019-09-26 21:32:34', '2019-10-02 08:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`adresse_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_categories` (`category`);

--
-- Indexes for table `store_settings`
--
ALTER TABLE `store_settings`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `name_2` (`name`),
  ADD KEY `name_3` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `adresse_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
