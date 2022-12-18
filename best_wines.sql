-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 déc. 2022 à 10:29
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `best_wines`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL,
  `photo_article` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `title`, `content`, `date`, `id_user`, `photo_article`) VALUES
(19, 'Dans le Muscadet, une prÃ©taille manuelle pour soulager les tailleurs confirmÃ©s', '<p>On coupe la branche fruiti&egrave;re &agrave; la base, on la sort du palissage, on la d&eacute;bite en quelques morceaux et on la jette dans l\'interrang &raquo;, explique, s&eacute;cateur &eacute;lectrique &agrave; la main, S&eacute;bastien Renaudin, chef de culture au Ch&acirc;teau du Cl&eacute;ray, &agrave; Vallet (Loire-Atlantique). En quatre ou cinq coups de s&eacute;cateur, la pr&eacute;taille est faite et le cep pr&ecirc;t &agrave; &ecirc;tre taill&eacute;.</p>\r\n<p>Depuis octobre, dans les vignes nantaises, des &eacute;quipes s\'attellent &agrave; ce travail. Cette t&acirc;che, appel&eacute;e localement d&eacute;racage, est r&eacute;alis&eacute;e par des ouvriers souvent peu qualifi&eacute;s, pay&eacute;s au cep. Dans beaucoup de domaines, ils reviendront pour le pliage. Entre-temps, des salari&eacute;s ou des prestataires confirm&eacute;s s\'occuperont de la taille. Une particularit&eacute; locale : dans les autres vignobles, les vignerons et leurs &eacute;quipes s\'attaquent g&eacute;n&eacute;ralement directement &agrave; la taille, avant de c&eacute;der la place &agrave; des ouvriers moins form&eacute;s, r&eacute;mun&eacute;r&eacute;s pour tirer les bois.</p>\r\n<p>Pour la pr&eacute;taille, commenc&eacute;e &agrave; la mi-octobre sur les 90 ha de son domaine, S&eacute;bastien Renaudin travaille g&eacute;n&eacute;ralement avec un Esat (&eacute;tablissement ou service d\'aide par le travail) ou un atelier de r&eacute;insertion. &laquo; Ils s\'en occupent jusqu\'&agrave; fin f&eacute;vrier, puis font le pliage jusqu\'&agrave; fin avril, en commen&ccedil;ant par les parcelles les moins g&eacute;lives, et ils encha&icirc;nent sur l\'&eacute;bourgeonnage &raquo;, pr&eacute;cise le viticulteur.</p>\r\n<p>Les sept permanents, lui compris, taillent depuis mi-novembre et nettoient les baguettes de fa&ccedil;on qu&rsquo;elles soient pr&ecirc;tes &agrave; &ecirc;tre pli&eacute;es. Sur certaines parcelles, le syst&egrave;me est diff&eacute;rent : des prestataires font la taille compl&egrave;te (pr&eacute;taille-taille-pliage), puis l\'&eacute;bourgeonnage et le relevage.</p>\r\n<p>La fatigue physique est r&eacute;duite</p>\r\n<p>S&eacute;bastien Renaudin taille en Guyot simple, avec deux coursons et une baguette &agrave; 8 &agrave; 10 yeux pour le melon de Bourgogne, et &agrave; 12 yeux pour le sauvignon et le chardonnay. Le melon, pr&eacute;sent sur la moiti&eacute; du vignoble, est paliss&eacute; &agrave; un fil et le reste (sauvignon, chardonnay et jeunes vignes) &agrave; trois fils, un porteur et deux releveurs. Ces derniers sont d&eacute;paliss&eacute;s m&eacute;caniquement apr&egrave;s les vendanges, avec un outil fait maison mont&eacute; sur un tracteur enjambeur qui passe derri&egrave;re les releveurs et arrache les vrilles qui s&rsquo;y sont accroch&eacute;es. &laquo; Ce passage diminue fortement la fatigue physique pour le tirage des bois, ajoute S&eacute;bastien Renaudin. Avec toute cette organisation, nous affectons nos permanents aux t&acirc;ches les plus qualifiantes. &raquo;</p>\r\n<p>Une raison invoqu&eacute;e aussi par Thierry Martin, du domaine Martin Luneau, 32 ha &agrave; Gorges (44) : &laquo; au lieu de passer deux minutes &agrave; tailler un cep, on n&rsquo;en passe qu&rsquo;une. On gagne du temps et on peut r&eacute;server les salari&eacute;s form&eacute;s &agrave; la taille pour ce travail &raquo;.</p>\r\n<p>Lui aussi est en Guyot simple, avec un cep &agrave; trois t&ecirc;tes, deux coursons et une baguette de 10 &agrave; 12 yeux. La moiti&eacute; de sa surface est paliss&eacute;e en un fil, et le reste en trois. Ici, les fils releveurs sont descendus et accroch&eacute;s &agrave; une vingtaine de centim&egrave;tres sous le fil porteur de suite apr&egrave;s les vendanges. &laquo; Les vrilles ne sont pas compl&egrave;tement ao&ucirc;t&eacute;es, ainsi on lib&egrave;re facilement les sarments &raquo;, indique Thierry Martin.</p>\r\n<p>Au domaine Martin Luneau, seule la moiti&eacute; des vignes est d&eacute;raqu&eacute;e. &laquo; On enl&egrave;ve la baguette &agrave; fruit sur les vignes tr&egrave;s vigoureuses, comme les cabernets, sauvignon et chardonnay, et sur celles o&ugrave; elles sont enroul&eacute;es et attach&eacute;es serr&eacute; sur le fil, souvent des jeunes vignes. C&rsquo;est l&agrave; qu&rsquo;on gagne le plus de temps &raquo;, pr&eacute;cise le viticulteur. Sur le reste, la taille se fait en un seul passage, car la branche fruiti&egrave;re est plus facile &agrave; enlever.</p>\r\n<p>Taylorisation</p>\r\n<p>Par le pass&eacute;, le d&eacute;racage &eacute;tait de mise sur tout le domaine. Le mode op&eacute;ratoire a chang&eacute; avec l\'arriv&eacute;e d\'un attacheur &eacute;lectrique, qui lie moins serr&eacute;. Les deux salari&eacute;s du domaine sont habituellement d&eacute;di&eacute;s &agrave; la taille tandis que des ouvriers roumains employ&eacute;s via le groupement Valore d&eacute;palissent et pr&eacute;taillent. &laquo; Mais, cette ann&eacute;e, les vendanges pr&eacute;coces nous ont laiss&eacute;s le temps de tout faire nous-m&ecirc;me &raquo;, ajoute Thierry Martin.</p>\r\n<p>Quant au risque d\'erreurs &agrave; confier un s&eacute;cateur &agrave; des &eacute;quipes peu form&eacute;es, il est quasi inexistant assurent les viticulteurs. &laquo; C\'est hypersimple. Tu montres le travail pendant trente minutes et &ccedil;a roule &raquo;, affirme Laurent Bouchaud, install&eacute; sur deux sites totalisant 30 ha au Pallet (44). De m&ecirc;me, interrog&eacute;s sur l\'impact sur les maladies du bois, les producteurs ne font pas &eacute;tat de probl&egrave;mes particuliers.</p>\r\n<p>Pour Romain Mayet, ing&eacute;nieur agronome &agrave; la F&eacute;d&eacute;ration des vins de Nantes, la pratique du d&eacute;racage pourrait s\'expliquer par la densit&eacute; &eacute;lev&eacute;e dans le Muscadet et par la surface importante des domaines, n&eacute;cessitant de commencer t&ocirc;t la taille et de finir tard. &laquo; Il peut y avoir un int&eacute;r&ecirc;t &agrave; &ldquo;tayloriser&rdquo; les t&acirc;ches, en s&eacute;parant le d&eacute;racage de la taille. Il n\'y a pas besoin d\'&ecirc;tre un expert pour trouver la branche principale et la couper. &raquo; Autre hypoth&egrave;se : en commen&ccedil;ant t&ocirc;t, on peut embaucher les salari&eacute;s ayant fait les vendanges. Difficile d\'&eacute;tablir une raison historique claire &agrave; la pratique du d&eacute;racage. &laquo; Peut-&ecirc;tre que c\'est juste un usage &raquo;, ajoute Romain Mayet.</p>', '2022-12-14 12:49:06', NULL, 'gr_1670835387_LQ10014720C.jpg'),
(20, 'Le bois dans tous ses &eacute;tats au salon Vinitech', '<h4>Un march&eacute; en ligne de f&ucirc;ts d&rsquo;occasion, un syst&egrave;me de b&acirc;tonnage surprenant, de nouvelles douelles et barriques, et de quoi masquer les &eacute;thylph&eacute;nols&nbsp;: les innovations ne manquent pas pour l&rsquo;&eacute;levage !</h4>\r\n<p>&nbsp;</p>\r\n<p>La tonnellerie Baron sort de sa zone de confort avec le lancement du site internet Reoaked, premier march&eacute; en ligne de f&ucirc;ts d&rsquo;occasion pour vignerons et distillateurs. <em>&laquo;&nbsp;L&rsquo;expertise est notre valeur ajout&eacute;e, ce n&rsquo;est pas un simple site de petites annonces &raquo;,</em>&nbsp;assure Lionel Kreff, directeur commercial de la tonnellerie. Le vendeur, dont l&rsquo;anonymat est garanti, fixe le prix de son lot en pr&eacute;cisant la contenance, l&rsquo;origine du bois et la date de fabrication de f&ucirc;ts, et le type de vin qu&rsquo;ils ont contenu. &Agrave; cela s&rsquo;ajoute une commission Reoaked pour l&rsquo;inspection olfactive et visuelle de 20 % des f&ucirc;ts du lot, choisis al&eacute;atoirement. Pour 4 &euro; de plus par barrique, Reoaked inspecte 100 % du lot. Pour une expertise encore plus pouss&eacute;e, avec analyse et contr&ocirc;le microbiologique (Brett, TCA et TCP), il faut encore ajouter 15 &euro; de plus par barrique. Une fois le lot expertis&eacute; chez le vendeur, Reoaked organise livraison jusqu&rsquo;&agrave; l&rsquo;acheteur. Ce site est lanc&eacute; en deux phases&nbsp;: si les vendeurs peuvent d&eacute;j&agrave; s&rsquo;inscrire, les acheteurs, eux, devront attendre le 5 janvier.</p>\r\n<p>En attendant, il y a du neuf chez Seguin Moreau. Apr&egrave;s trois ans d&rsquo;essais, cet autre tonnelier lance sa gamme&nbsp;<em>&laquo;&nbsp;&Eacute;l&eacute;ment&nbsp;&raquo;</em>, qui apporte moins de bois&eacute; pour r&eacute;pondre aux attentes des consommateurs. Destin&eacute;s aux vins rouges, ces f&ucirc;ts laisseront s&rsquo;exprimer le fruit&eacute; et le terroir. Seguin Moreau propose trois barriques &ndash; F1, cintrage feu/chauffe moyenne, F2 cintrage feu/chauffe moyenne +, V3, cintrage vapeur/chauffe longue &ndash; et deux s&eacute;lections de grains de ch&ecirc;ne fran&ccedil;ais, fins ou extrafins. Le tonnelier conseille la chauffe V3 pour les vins concentr&eacute;s et les grains extrafins pour les &eacute;levages de 18 mois ou plus. Les douelles font 27 mm d&rsquo;&eacute;paisseur en vue d&rsquo;un second usage sur d&rsquo;autres vins et spiritueux. Et afin de r&eacute;duire le bilan carbone, Seguin Moreau n&rsquo;emploie que quatre cercles, principale source d&rsquo;&eacute;mission carbone des barriques. Il faut compter entre 850 et 900 &euro; pour une barrique de la gamme &Eacute;l&eacute;ment.</p>\r\n<p><img id=\"imgShown_2\" class=\"drImgMain loading\" title=\"Seguin Moreau.JPG\" src=\"https://cip-dam.swyp.fr/permalink/v1/10/57381/thumbnail/221201FAI_004.JPG.JPG?token=QrxuQBZPmYH4vY5hNkXWY2fGuDblBFlJDwsGEH1czgPzcOrbEF8FPrgGSVkNDeZt\" alt=\"Seguin Moreau.JPG\" data-ignore=\"true\"></p>\r\n<p><strong>Barrique Element de Seguin Moreau (Cr&eacute;dit photo C. Faimali)</strong></p>\r\n<p>Sur le stand du groupe Charlois, de nombreuses personnes ont pu constater la simplicit&eacute; du nouveau syst&egrave;me de b&acirc;tonnage con&ccedil;u par l&rsquo;Atelier du Foudrier : elles n&rsquo;avaient qu&rsquo;&agrave; tourner une manivelle pour l&rsquo;actionner ! Adaptable sur n&rsquo;importe quel foudre, une h&eacute;lice oblongue pos&eacute;e au fond, remet les lies en suspension et en douceur d&egrave;s qu&rsquo;on tourne la manivelle. Ainsi, ce syst&egrave;me limite les risques d&rsquo;oxydation et prot&egrave;ge les ar&ocirc;mes fermentaires. Le temps de b&acirc;tonnage est estim&eacute; &agrave; environ une minute et un contr&ocirc;le visuel peut &ecirc;tre effectu&eacute; gr&acirc;ce au remontage du vin dans la bonde. Ce syst&egrave;me est d&eacute;j&agrave; sur le march&eacute; &agrave; un prix compris entre 3 500 et 4 000 &euro;.</p>\r\n<p>&nbsp;</p>\r\n<p>Pour ceux qui choisissent d&rsquo;utiliser les douelles, Vivelys a pr&eacute;sent&eacute; sa nouvelle douelle Boise #20.HD Haute D&eacute;finition. Fruit de trois ans de recherche, elle apporte de fa&ccedil;on r&eacute;p&eacute;table, volume, sucrosit&eacute; et longueur en bouche avec un profil moka et toast&eacute;. Elle s&rsquo;utilise entre 1 et 2 douelles/hl sur rouge et chardonnay, moiti&eacute; moins sur les autres vins blancs. Toutes les douelles sont 100 % PEFC, en ch&ecirc;ne 100 % fran&ccedil;ais, torr&eacute;fi&eacute;es &agrave; l&rsquo;&eacute;nergie solaire. Un positionnement haut de gamme, pour un prix de 14,70 &euro; l&rsquo;unit&eacute;.</p>\r\n<p>Les copeaux peuvent &eacute;galement servir &agrave; masquer les ph&eacute;nols volatils dans les vins finis&nbsp;: c&rsquo;est ce que propose Oakwise avec son nouveau blend &laquo;&nbsp;Phi&nbsp;&raquo;. Cet assemblage de copeaux vendus par sac d&rsquo;infusion de 10 kg s&rsquo;ajoute &agrave; la dose d&rsquo;1,5 &agrave; 2,5g/l. Pour garantir une efficacit&eacute; maximale, il doit &ecirc;tre utilis&eacute; entre 15-16&deg;C, c&rsquo;est-&agrave;-dire en fin de vinification ou au printemps.</p>\r\n<p>&nbsp;</p>\r\n<p>Ce m&eacute;lange masque les d&eacute;viations organoleptiques de type \"&eacute;curie\" ou \"gouache\", tout en apportant la sucrosit&eacute; et la rondeur n&eacute;cessaires pour att&eacute;nuer la s&eacute;cheresse qui accompagne ces d&eacute;fauts. La dur&eacute;e de traitement varie entre six et huit semaines. Un brassage doit &ecirc;tre r&eacute;alis&eacute; une fois par semaine.&nbsp;<em>&laquo;&nbsp;Ce blend fonctionne &eacute;galement sur le go&ucirc;t de souris&nbsp;&raquo;,</em>&nbsp;avance l&rsquo;&oelig;nologue Vincent Maestri, mais ne dispense &eacute;videmment pas d&rsquo;un traitement en amont (filtration tangentielle, chitosan, &hellip;). Le co&ucirc;t d&rsquo;utilisation est compris entre 2 et 3 &euro;/hl.</p>\r\n<p>&nbsp;</p>', '2022-12-14 13:39:51', NULL, 'article_bois.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

CREATE TABLE `association` (
  `id_association` int(11) NOT NULL,
  `association_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`id_association`, `association_name`) VALUES
(1, 'Viande rouge'),
(2, 'Viande blanche'),
(3, 'Crustacé'),
(4, 'Poisson'),
(5, 'Fromage et dessert');

-- --------------------------------------------------------

--
-- Structure de la table `cepage`
--

CREATE TABLE `cepage` (
  `id_cepage` int(11) NOT NULL,
  `cepage_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cepage`
--

INSERT INTO `cepage` (`id_cepage`, `cepage_name`) VALUES
(1, 'Riesling'),
(2, 'Chardonnay'),
(3, 'Sauvignon blanc'),
(4, 'Pinot blanc'),
(5, 'Pinot gris'),
(6, 'Muscat blanc'),
(7, 'Gewurztraminer'),
(8, 'Cabernet-Sauvignon'),
(9, 'Pinot noir'),
(10, 'Merlot'),
(11, 'Cabernet franc'),
(12, 'Grenache');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `text_comment` text NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `total_price` float NOT NULL,
  `id_sale` int(11) NOT NULL,
  `id_promotion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `order_tracking`
--

CREATE TABLE `order_tracking` (
  `id` int(11) NOT NULL,
  `order_state` varchar(255) NOT NULL,
  `id_receipt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `note_final` float DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `alcohol_percentage` float NOT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_cepage` int(11) DEFAULT NULL,
  `id_taste` int(11) DEFAULT NULL,
  `id_association` int(11) DEFAULT NULL,
  `id_comment` int(11) DEFAULT NULL,
  `id_type` int(11) NOT NULL,
  `price` float NOT NULL,
  `is_featured` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `note_final`, `photo`, `stock`, `alcohol_percentage`, `id_region`, `id_cepage`, `id_taste`, `id_association`, `id_comment`, `id_type`, `price`, `is_featured`) VALUES
(10001, 'CH&Acirc;TEAU CORMEIL FIGEAC 2018', 'Saint-Emilion Grand cru', NULL, '9386696179742.png', 150, 14, 10, 10, 5, 1, NULL, 2, 27, 1),
(10002, 'CH&Acirc;TEAU LATOUR CAMBLANES 2018', '1&egrave;res Ctes Bordeaux/Ctes Bordx', NULL, '9373946413086 (1).png', 150, 14, 10, 10, 5, 1, NULL, 2, 11, 1),
(10003, 'MOUTON CADET BARON PHILIPPE DE ROTHSCHILD 2019', 'Bordeaux', NULL, '9514026205214-mouton.png', 150, 14, 10, 8, 4, 1, NULL, 2, 12, 1),
(10004, 'CH&Acirc;TEAU D\'ARCINS 2018', 'Haut Medoc Cru Bourgeois', NULL, '9510399246366-arcins.png', 150, 14, 10, 8, 5, 1, NULL, 2, 14, 1),
(10005, 'CH&Auml;TEAU TOUR DE LEYSSAC 2020', 'Saint-Est&egrave;phe', NULL, '9420960071710-treyllissac.png', 150, 13, 10, 10, 5, 1, NULL, 2, 18, 1),
(10006, 'JURANCON INFLUENCE SEC 2021', 'Juran&ccedil;on Sec', NULL, '9489653628958-jurancon.png', 150, 13, 10, 3, 2, 5, NULL, 1, 8, 1),
(10007, 'CH&Acirc;TEAU DE LA MULONNIERE 2020', 'Anjou Rouge Et Blanc', NULL, '9308988637214-mulonnerie.png', 150, 13, 4, 4, 2, 5, NULL, 1, 8, 1),
(10008, 'JURANCON GALET D\'OR 2020', 'Juran&ccedil;on Moelleux', NULL, '9266776178718-jurancon2.png', 150, 12, 10, 3, 2, 5, NULL, 1, 10.5, 1),
(10009, 'HAUTES C&Ocirc;TES BEAUNE 2019', 'Bourgogne Hautes C&ocirc;tes Beaune', NULL, '9323949359134-beaunes.png', 150, 14, 2, 2, 2, 2, NULL, 1, 12, 1),
(10010, 'CROZES HERMITAGE BLANC 2020', 'Crozes Hermitage', NULL, '9304942608414-hermitages.png', 150, 13, 1, 1, 1, 2, NULL, 1, 12, 1),
(10011, 'CHAMPAGNE HEIDSIECK &amp; CO MONOPOLE &quot;SILVER TOP&quot;', 'Champagne', NULL, '9519080996894-heidsieck.png', 150, 12, 2, 2, 6, 4, NULL, 3, 24, 1),
(10012, 'CHAMPAGNE MALARD BRUT 1ER CRU', 'Champagne', NULL, '8995531128862-malard.png', 150, 12, 2, 9, 6, 5, NULL, 3, 29, 1),
(10013, 'CHAMPAGNE VRANKEN CUV&Eacute;E DEMOISELLE ROS&Eacute; PRESTIGE PR&Eacute;SENTATION SP&Eacute;CIALE', 'Champagne Ros&eacute;', NULL, '9374421123102-demoiselle.png', 150, 12, 2, 2, 5, 4, NULL, 3, 39, 1),
(10014, 'CHAMPAGNE NICOLAS 1ER CRU BRUT', 'Champagne Blanc', NULL, '8803569729566-nicolas.png', 150, 12, 2, 9, 5, 3, NULL, 3, 32, 1),
(10015, 'NICOLAS FEUILLATTE RESERVE EXCLUSIVE', 'Champagne Blanc', NULL, '9292270469150-nicolas2.png', 150, 12, 2, 9, 2, 5, NULL, 3, 33, 1),
(10016, ' 	 COFFRET TRIO - CHAMPAGNES DE VIGNERONS', ' Coffret 3 bouteilles Blanc / France / Champagne / Champagne AOC ', NULL, 'coffret-trio-champagnes-de-vignerons.png', 150, 14, 2, 4, 5, 5, NULL, 4, 63, 1),
(10017, 'COFFRET SP&Eacute;CIAL RACLETTE', 'Coffret 3 bouteilles / France ', NULL, 'coffret-special-raclette.png', 150, 14, 1, 2, 1, 5, NULL, 4, 30, 1),
(10018, 'COFFRET TRIO - 90+/100 PARKER 100% BOURGOGNE', 'coffret 3 bouteilles', NULL, 'coffret-trio-90-100-parker-100-bourgogne.png', 150, 14, 2, 3, 1, 2, NULL, 4, 93, 1),
(10019, 'COFFRET TRIO - ALSACE LES INDISPENSABLES', 'Coffret 3 bouteilles / France / Alsace', NULL, 'coffret-trio-alsace-les-indispensables.png', 150, 14, 6, 7, 1, 2, NULL, 4, 31, 1);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) NOT NULL,
  `promotion_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id_region` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id_region`, `region_name`) VALUES
(1, 'Auvergne-Rhône-Alpes'),
(2, 'Bourgogne-Franche-Comté'),
(3, 'Bretagne'),
(4, 'Centre-Val de Loire'),
(5, 'Corse'),
(6, 'Grand Est'),
(7, 'Hauts-de-France'),
(8, 'Île-de-France'),
(9, 'Normandie'),
(10, 'Nouvelle-Aquitaine'),
(11, 'Occitanie'),
(12, 'Pays de la Loire'),
(13, 'Provence-Alpes-Côte d\'Azur');

-- --------------------------------------------------------

--
-- Structure de la table `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price_total_product` float DEFAULT NULL,
  `quantity_total_sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sale`
--

INSERT INTO `sale` (`id`, `id_product`, `id_user`, `quantity`, `price_total_product`, `quantity_total_sold`) VALUES
(3, 10007, NULL, 25, 25, 40);

-- --------------------------------------------------------

--
-- Structure de la table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image_supp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `content`, `image_supp`) VALUES
(7, 'Jurancon', '<h2>La Cave de Gan - Juran&ccedil;on</h2>\r\n<p>Fond&eacute;e en 1949 aux pieds des Pyr&eacute;n&eacute;es, la Cave de Gan-Juran&ccedil;on est devenue, au fil du temps, un site incontournable en B&eacute;arn. A deux pas de Pau, Lourdes et Biarritz, elle vous invite &agrave; d&eacute;couvrir les vignobles du pi&eacute;mont pyr&eacute;n&eacute;en, leur histoire et leurs traditions.&nbsp;</p>\r\n<p>Regroupant pr&egrave;s de 300 viticulteurs, la Cave de Gan-Juran&ccedil;on joue un r&ocirc;le majeur au sein des AOC Juran&ccedil;on et B&eacute;arn. Coop&eacute;rative engag&eacute;e et respectueuse de ses terroirs, elle exploite 750 ha de vignes, dont 45 ha avec sa propre &eacute;quipe.&nbsp;</p>\r\n<p>Toute l&rsquo;ann&eacute;e, la Cave vous offre la possibilit&eacute; de d&eacute;couvrir et visiter gratuitement ses installations (pressoirs, chai semi-enterr&eacute;, mosa&iuml;ques gallo-romaines, centre d&rsquo;embouteillage...), de d&eacute;guster ses vins et de profiter d&rsquo;un moment d&rsquo;&eacute;vasion &agrave; la port&eacute;e de tous. En famille, entre amis ou en groupe, la Cave de Gan-Juran&ccedil;on est une &eacute;tape oblig&eacute;e pour les amateurs de vin et de gastronomie.&nbsp;</p>\r\n<p>D&eacute;tentrice du label Tourisme &amp; Handicap, elle est id&eacute;alement situ&eacute;e et facilement accessible avec son grand parking, son aire de pique-nique et son aire de service pour les camping-cars. Soucieuse de faire valoir une viticulture responsable et tourn&eacute;e vers l&rsquo;avenir, elle met en oeuvre tout son savoir-faire pour vous proposer un voyage inoubliable au pays du Juran&ccedil;on.</p>\r\n<p>&nbsp;</p>\r\n<h2>Le site de Bellocq</h2>\r\n<p>&nbsp;<a class=\"backtotop\" href=\"https://www.cavedejurancon.com/la-cave/qui-sommes-nous.html#top\">&nbsp;</a>&nbsp;</p>\r\n<p>Depuis le 1er Octobre 2000, la Cave de Gan - Juran&ccedil;on a repris la coop&eacute;rative vinicole des Vignerons de Bellocq.</p>\r\n<p>Quelques chiffres sur la production de l\'AOC B&eacute;arn Rouge et Ros&eacute; :</p>\r\n<ul>\r\n<li>150 Ha de vignobles de Rouge et Ros&eacute; de B&eacute;arn (AOC en 1975) pour 70 propri&eacute;taires dont 12 exploitent 80 % des vignes.</li>\r\n<li>50 coop&eacute;rateurs pour une production de 7500 Hl de Rouge et Ros&eacute; de B&eacute;arn repr&eacute;sentant 90% de la production totale de l&rsquo;aire.</li>\r\n</ul>\r\n<p>1 million de bouteilles &eacute;labor&eacute;es &agrave; partir de Tannat (en plaine ou en coteaux) de Cabernet Sauvignon et de Cabernet Franc. Un nouveau magasin de vente situ&eacute; &agrave; Bellocq propose une gamme de vins de B&eacute;arn Rouge et Ros&eacute; et de Juran&ccedil;on Sec et Doux. Le meilleur accueil vous y sera r&eacute;serv&eacute; du Lundi au samedi inclus de 9 h 00 &agrave; 12 h 00 et de 13 h 30 &agrave; 18 h 30.</p>\r\n<p>&nbsp;</p>\r\n<h2>La Cave en chiffres</h2>\r\n<p><a class=\"backtotop\" href=\"https://www.cavedejurancon.com/la-cave/qui-sommes-nous.html#top\">&nbsp;</a></p>\r\n<p>Quelques chiffres-cl&eacute; concernant la Cave de Gan - Juran&ccedil;on&nbsp;</p>\r\n<p><strong>Volume :</strong><br>Au total, 37 000 Hectolitres de vins d&rsquo;Appellation d&rsquo;Origine Contr&ocirc;l&eacute;e (AOC) sont vinifi&eacute;s chaque ann&eacute;e :&nbsp;</p>\r\n<ul>\r\n<li>20 000 Hectolitres d&rsquo;AOC Juran&ccedil;on Doux,&nbsp;</li>\r\n<li>9 000 Hectolitres d&rsquo;AOC Juran&ccedil;on Sec</li>\r\n<li>8 000 Hectolitres d&rsquo;AOC Rouge et Ros&eacute; de B&eacute;arn&nbsp;</li>\r\n</ul>\r\n<p class=\"content\"><strong>Nombre d&rsquo;adh&eacute;rents :</strong>&nbsp;pr&egrave;s 300 viticulteurs&nbsp;</p>\r\n<p class=\"content\"><strong>Nombre d&rsquo;employ&eacute;s :</strong>&nbsp;Environ 100 salari&eacute;s&nbsp;</p>\r\n<p class=\"content\"><strong>Nombre de bouteilles par an :</strong><br>La Cave de Gan - Juran&ccedil;on commercialise 5 millions de bouteilles par an.&nbsp;</p>\r\n<p class=\"content\"><strong>R&eacute;partition des ventes :</strong>&nbsp;</p>\r\n<ul>\r\n<li>30% aux clients particuliers (magasin, internet, vente par correspondance, etc&hellip;)&nbsp;</li>\r\n<li>30% &agrave; la Grande Distribution&nbsp;</li>\r\n<li>30% aux Caf&eacute;s, H&ocirc;tels, Restaurants</li>\r\n<li>10% &agrave; l&rsquo;export (Europe du Nord principalement)</li>\r\n</ul>', 'cave-logo-cp.jpg'),
(8, 'Saint Emilion', '<p>LES APPELLATIONS SAINTâ€‘EMILION ET SAINTâ€‘EMILION GRAND CRU SONT G&Eacute;OGRAPHIQUEMENT ENTRELAC&Eacute;ES.</p>\r\n<p>Elles s&rsquo;&eacute;tendent sur neuf communes dont la simple &eacute;num&eacute;ration fait d&eacute;j&agrave; r&ecirc;ver. La premi&egrave;re est Saint-Emilion, qui constitue l&rsquo;&eacute;picentre du vignoble depuis l&rsquo;arriv&eacute;e des moines au VIIIe si&egrave;cle. Les villages de Saint-Christophe-des-Bardes, Saint-Etienne-de-Lisse, Saint-Hippolyte, Saint-Laurent-des-Combes, Saint-Pey-d&rsquo;Armens, Saint-Sulpice-de-Faleyrens et Vignonet compl&egrave;tent ce tableau, auquel s&rsquo;ajoute, pour partie, Libourne.</p>\r\n<p>&nbsp;</p>\r\n<p>Si le nom de Saint-&Eacute;milion abrite un village historique fortifi&eacute; inscrit au Patrimoine Mondial de l&rsquo;UNESCO, il compte aussi deux appellations d&rsquo;origine contr&ocirc;l&eacute;e de renomm&eacute;e mondiale. Saint-&Eacute;milion et Saint-&Eacute;milion Grand Cru (dans cette appellation, les vins peuvent b&eacute;n&eacute;ficier des mentions &laquo; Grand Cru class&eacute; &raquo; ou &laquo; Premier Grand Cru class&eacute; &raquo;). G&eacute;ographiquement entrelac&eacute;es, ces deux appellations jouissent d&rsquo;une formidable diversit&eacute; de sols et de sous-sols et donnent des vins d&rsquo;une grande vari&eacute;t&eacute; : souples, puissants, fins, fruit&eacute;s ou min&eacute;raux. Si les aires de ces deux appellations se confondent, seuls les meilleurs vins ont droit &agrave; l&rsquo;appellation Grand Cru. Tous portent les valeurs de convivialit&eacute;, d&rsquo;authenticit&eacute; et de grande qualit&eacute;.</p>', 'listing_img_1610019576.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `taste`
--

CREATE TABLE `taste` (
  `id_taste` int(11) NOT NULL,
  `taste_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `taste`
--

INSERT INTO `taste` (`id_taste`, `taste_name`) VALUES
(1, 'Fruité et charnu'),
(2, 'Fruité et frais'),
(3, 'Fruité et léger'),
(4, 'Puissant'),
(5, 'Riche et puissant'),
(6, 'Riche et rond');

-- --------------------------------------------------------

--
-- Structure de la table `type_product`
--

CREATE TABLE `type_product` (
  `id_type` int(11) NOT NULL,
  `type_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_product`
--

INSERT INTO `type_product` (`id_type`, `type_name`) VALUES
(1, 'Blanc'),
(2, 'Rouge'),
(3, 'Champagne'),
(4, 'Coffrets');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `is_employee` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `is_admin`, `is_employee`) VALUES
(3, 'jdousse2@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$MGp3TVhWRE1YY0tRWDlsTA$LXep2ZQ0VKxAFFfnrWnF53feXn/TW6Q49xY34zRSEnk', 1, 1),
(4, 'julien@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$ekdhbWFGOWsyYVJoSkZwUQ$9/Exfz/tprVfm4IGeGZNJGSLRoymkT/U4OEiQYam2b8', 1, 1),
(5, 'afpa@afpa.fr', '$argon2id$v=19$m=65536,t=4,p=1$a3lqekZiZDBNcncublJpUg$RkyeX1QgciCLyHDFfQC9qe5shQR+OWrs8OqzN/qmfag', 1, 1),
(6, 'jdousse@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$UUxFTjdEUk83SkpkMFQ5Mw$o4edphyBvsZ1DHo84NeR8jgOthM1o7FesWuTk3BHCFI', 1, 1),
(7, 'jdousse3@gmail.com', '$argon2id$v=19$m=65536,t=4,p=1$emxmT3IzdVZjVllxTzZzdA$phIqk1Bt5LvBm1I1SPrRivNfCYH0iWrpHax+Wp/Cqy8', 0, 0),
(8, 'jdousse@hotmail.fr', '$argon2id$v=19$m=65536,t=4,p=1$bzJGRWhNTnJyVUxjOTQxQw$hCJ1vHDwY+xPnCtqcoh8sN9ltv4I4kIMha8XFRH8QAw', 1, 1),
(9, 'jdousse2@hotmail.fr', '$argon2id$v=19$m=65536,t=4,p=1$dWN1WThWcjd3VDd6S1NjUg$OejhNhqCMGBuNkQG7C2DnjzX+qb7MYOonUB2P1SnnQM', 0, 1),
(10, '', '$argon2id$v=19$m=65536,t=4,p=1$ckRDOGRKdFVxbTVkZjN5TQ$24PLlibICnjbsI31o187kiRF/sdXFp6cm9UUm1NCG7o', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `association`
--
ALTER TABLE `association`
  ADD PRIMARY KEY (`id_association`);

--
-- Index pour la table `cepage`
--
ALTER TABLE `cepage`
  ADD PRIMARY KEY (`id_cepage`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_sale` (`id_sale`);

--
-- Index pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sale` (`id_sale`),
  ADD KEY `id_promotion` (`id_promotion`);

--
-- Index pour la table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_receipt` (`id_receipt`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_cepage` (`id_cepage`),
  ADD KEY `id_taste` (`id_taste`),
  ADD KEY `id_association` (`id_association`),
  ADD KEY `id_comment` (`id_comment`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id_region`);

--
-- Index pour la table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taste`
--
ALTER TABLE `taste`
  ADD PRIMARY KEY (`id_taste`);

--
-- Index pour la table `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `association`
--
ALTER TABLE `association`
  MODIFY `id_association` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `cepage`
--
ALTER TABLE `cepage`
  MODIFY `id_cepage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order_tracking`
--
ALTER TABLE `order_tracking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10020;

--
-- AUTO_INCREMENT pour la table `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id_region` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `taste`
--
ALTER TABLE `taste`
  MODIFY `id_taste` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type_product`
--
ALTER TABLE `type_product`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_sale`) REFERENCES `sale` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_sale`) REFERENCES `sale` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_promotion`) REFERENCES `promotion` (`id`);

--
-- Contraintes pour la table `order_tracking`
--
ALTER TABLE `order_tracking`
  ADD CONSTRAINT `order_tracking_ibfk_1` FOREIGN KEY (`id_receipt`) REFERENCES `invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_region`) REFERENCES `region` (`id_region`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_association`) REFERENCES `association` (`id_association`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`id_cepage`) REFERENCES `cepage` (`id_cepage`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_4` FOREIGN KEY (`id_comment`) REFERENCES `comment` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_5` FOREIGN KEY (`id_taste`) REFERENCES `taste` (`id_taste`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_6` FOREIGN KEY (`id_type`) REFERENCES `type_product` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sale`
--
ALTER TABLE `sale`
  ADD CONSTRAINT `sale_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sale_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
