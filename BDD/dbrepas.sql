-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 12 mai 2022 à 13:25
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dbrepas`
--

-- --------------------------------------------------------

--
-- Structure de la table `elior_commande`
--

DROP TABLE IF EXISTS `elior_commande`;
CREATE TABLE IF NOT EXISTS `elior_commande` (
  `dateMenu` date NOT NULL,
  `numMenu` int NOT NULL,
  `idUtil` int NOT NULL,
  PRIMARY KEY (`dateMenu`,`numMenu`,`idUtil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `elior_commande`
--

INSERT INTO `elior_commande` (`dateMenu`, `numMenu`, `idUtil`) VALUES
('2021-11-14', 1, 18),
('2021-11-14', 1, 27),
('2021-11-14', 2, 59),
('2021-11-15', 1, 21),
('2021-11-15', 1, 27),
('2021-11-15', 1, 46),
('2021-11-15', 1, 59),
('2021-11-15', 2, 18),
('2021-11-15', 2, 34),
('2021-11-19', 1, 24),
('2021-11-21', 1, 24),
('2021-11-22', 2, 24),
('2021-11-22', 3, 21),
('2021-11-25', 2, 24),
('2021-11-26', 3, 24),
('2021-11-28', 3, 24),
('2021-11-29', 2, 24),
('2021-12-02', 1, 24),
('2021-12-03', 1, 24),
('2021-12-03', 2, 21),
('2021-12-03', 2, 27),
('2021-12-05', 1, 21),
('2021-12-05', 1, 24),
('2021-12-09', 2, 24),
('2021-12-10', 1, 24),
('2021-12-11', 1, 21),
('2021-12-12', 1, 24),
('2021-12-12', 2, 56),
('2021-12-13', 3, 24),
('2021-12-16', 2, 24),
('2021-12-17', 1, 24),
('2021-12-17', 2, 56),
('2021-12-19', 2, 24),
('2021-12-20', 3, 24),
('2022-01-06', 1, 24),
('2022-01-09', 2, 56),
('2022-01-13', 1, 56),
('2022-01-14', 2, 56),
('2022-01-21', 1, 56),
('2022-01-27', 1, 56),
('2022-03-03', 2, 21),
('2022-03-05', 1, 21),
('2022-03-06', 1, 21),
('2022-06-30', 1, 11);

-- --------------------------------------------------------

--
-- Structure de la table `elior_formule`
--

DROP TABLE IF EXISTS `elior_formule`;
CREATE TABLE IF NOT EXISTS `elior_formule` (
  `Formule` varchar(255) NOT NULL,
  `prixRepas` decimal(5,2) NOT NULL,
  `numFormule` int NOT NULL,
  PRIMARY KEY (`numFormule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `elior_formule`
--

INSERT INTO `elior_formule` (`Formule`, `prixRepas`, `numFormule`) VALUES
('Plat + dessert', '4.50', 1),
('Entrée + Plat', '4.50', 2),
('Entrée + Plat + Dessert', '5.25', 3),
('Plat', '3.50', 4),
('Restauration rapide', '3.00', 5);

-- --------------------------------------------------------

--
-- Structure de la table `elior_menu`
--

DROP TABLE IF EXISTS `elior_menu`;
CREATE TABLE IF NOT EXISTS `elior_menu` (
  `dateMenu` date NOT NULL,
  `numMenu` int NOT NULL,
  `descriptionMenu` longtext NOT NULL,
  `idFormule` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`dateMenu`,`numMenu`),
  KEY `FK1` (`idFormule`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `elior_menu`
--

INSERT INTO `elior_menu` (`dateMenu`, `numMenu`, `descriptionMenu`, `idFormule`) VALUES
('2021-11-12', 1, 'steak de veau - haricots verts / gâteau au chocolat ', 1),
('2021-11-12', 2, 'poisson papillote - haricots verts / entremets caramel et pommes', 1),
('2021-11-12', 3, 'steak de veau - flageolets à la tomate / coulommiers ', 1),
('2021-11-13', 1, 'sauté de boeuf - Riz créole / mousse aux spéculoos', 1),
('2021-11-13', 2, 'beignets de calamars - Riz créole / Yaourt nature sucré', 1),
('2021-11-14', 1, 'Poulet à l\'américaine - Tortis / Gâteau aux cerises (spécialité du Chef)', 1),
('2021-11-14', 2, 'Carré de Porc fumé sauce barbecue - Tortis / Flan au chocolat', 1),
('2021-11-15', 1, 'Pizza Kebab / Carottes et lardons / Cake aux Quetsches', 1),
('2021-11-15', 2, 'Pavé de colin au basilic - Boulgour pilaf / Barre Bretonne', 1),
('2021-11-18', 1, 'Omelette nature et Pommes rösti aux légumes - gâteau au chocolat', 1),
('2021-11-18', 2, 'Filet de colin et Pommes rösti aux légumes - gâteau au chocolat', 1),
('2021-11-19', 1, 'Rôti de veau et Lentilles - Gâteau de semoule', 1),
('2021-11-19', 2, 'Saucisse de Strasbourg et Lentilles - Moelleux au fromage (dessert)', 1),
('2021-11-19', 3, 'Rôti de veau et petits pois - Gâteau de semoule', 1),
('2021-11-20', 1, 'Panini bolognaise - Fromage blanc crème de marrons', 1),
('2021-11-21', 1, 'Emincé de dinde sauce caramel et légumes à l\'asiatique (carotte courgettes poivrons oignons fève) - Gâteau aux poires', 1),
('2021-11-21', 2, 'Saucisse de volaille aux herbes et Riz Créole - Gâteau aux poires', 1),
('2021-11-21', 3, 'Emincé de dinde sauce caramel et Riz créole - Gâteau aux poires', 1),
('2021-11-22', 1, 'Stick de colin pané et Boulgour pilaf - Cake aux Quetsches', 1),
('2021-11-22', 2, 'Rôti de porc au curry et boulgour pilaf - Cake aux quetsches', 1),
('2021-11-22', 3, 'Rôti de porc au curry et courgettes saveur du midi - Crème aux oeufs à la vanille', 1),
('2021-11-25', 1, 'cordon bleu + purée de pommes de terre / liégeois à la vanille', 1),
('2021-11-25', 2, 'cordon bleu + haricots verts et PdTerre / barre bretonne', 1),
('2021-11-25', 3, 'saumonette sauce dieppoise + purée de PdTerre / barre bretonne', 1),
('2021-11-26', 1, 'menu végétarien : boulgour tandoori + poêlée de Guyane (céleri, carottes, champignons) / cake citron', 1),
('2021-11-26', 2, 'boulettes boeuf sauce tomate + boulgour pilaf / orange aux épices', 1),
('2021-11-26', 3, 'boulettes boeuf sauce tomate + boulgour / Cake citron', 1),
('2021-11-27', 1, 'brick croustillante de poisson + pommes frites / duo mousse au chocolat', 1),
('2021-11-27', 2, 'brick croustillante de colin + brunoise de légumes / duo mousse chocolat', 1),
('2021-11-28', 1, 'Sauté de boeuf aux marrons + tortis / gâteau au chocolat', 1),
('2021-11-28', 2, 'sauté de boeuf aux marrons + purée de potiron / Bananouil (banane, fenouil, oeuf, fromage blanc)', 1),
('2021-11-28', 3, 'poulet rôti + Tortis / Gâteau chocolat', 1),
('2021-11-28', 4, 'poulet rôti + tortis / fromage blanc crème et marrons', 1),
('2021-11-29', 1, 'filet de colin sauce aux poireaux + riz créole / Rissole raisins secs (pâte feuilleté, crème pâtissière et oeufs)', 1),
('2021-11-29', 2, 'Sauté de porc + riz créole / Rissole raisins secs ', 1),
('2021-11-29', 3, 'filet de colin sauce poireaux + riz créole / Crémeux vanille kaki (fruit le kaki, crème mousseline vanille)', 1),
('2021-11-29', 4, 'végétarien : riz créole +  duo brocolis choux-fleurs aux amandes / Rissole raisins secs', 1),
('2021-12-02', 1, 'gratin de macaronis au jambon - macaronis / mousse au cacao', 1),
('2021-12-02', 2, 'filet de lieu sauce crème - macaronis / neige aux myrtilles (blanc d\'oeuf, crème anglaise aux myrtilles)', 1),
('2021-12-02', 3, 'haut de cuisse de poulet - macaronis / neige aux myrtilles', 1),
('2021-12-03', 1, 'paupiette de veau - lentilles / beignet à l\'abricot', 1),
('2021-12-03', 2, 'saucisse de toulouse - lentilles / moelleux au citron', 1),
('2021-12-05', 1, 'poulet rôti - frites / gauffre sucre glace', 1),
('2021-12-05', 2, 'jambon grillé - frites / smoothie à la vanille', 1),
('2021-12-06', 1, 'filet de colin meunière et citron - riz pilaf / oranges à la cannelle', 1),
('2021-12-06', 2, 'oeufs frits au lard - épinards béchamel / mousse aux spéculoos', 1),
('2021-12-06', 3, 'oeufs frits au lard - riz pilaf / mousse aux spéculoos', 1),
('2021-12-09', 1, 'filet de colin - riz créole / gâteau au chocolat', 1),
('2021-12-09', 2, 'chili aux haricots rouges et pois chiches / liégeois vanille', 1),
('2021-12-10', 1, 'boulettes de veau sauce poivrade - semoule fine / panna cotta', 1),
('2021-12-10', 2, 'colin sauce colombo et coriandre - semoule fine / panna cotta', 1),
('2021-12-11', 1, 'saucisse knack - purée / mousse chocolat', 1),
('2021-12-11', 2, 'brochette de dinde à la dijonnaise / moelleux framboises', 1),
('2021-12-12', 1, 'brochette de dinde à la dijonnaise - purée / moelleux framboises', 1),
('2021-12-12', 2, 'saucisses Knack - purée / mousse au chocolat', 1),
('2021-12-12', 3, 'beignets de poisson - penne / cake à la noix de coco', 1),
('2021-12-13', 1, 'moules gratinées - semoule / entremet au chocolat', 1),
('2021-12-13', 2, 'moules gratinées - légumes tajine / pomme gourmande', 1),
('2021-12-13', 3, 'merguez - semoule / entremet chocolat', 1),
('2021-12-13', 4, 'merguez - légumes tajine / pomme gourmande', 1),
('2021-12-16', 1, 'filet de colin sauce tomate vanillée - purée de pommes de terre / mousse au pain d\'épices', 1),
('2021-12-16', 2, 'pané de blé, fromage, épinards - purée / entremet vanille', 1),
('2021-12-16', 3, 'filet de colin sauce tomate vanillée - ratatouille / entremet vanille', 1),
('2021-12-16', 4, 'pané de blé, fromage, épinards - ratatouille / mousse au pain d\'épices', 1),
('2021-12-17', 1, 'palette de porc sauce diable - boulgour pilaf / gâteau au yaourt et pommes', 1),
('2021-12-17', 2, 'choux-fleurs à la polonaise (oeuf, choux fleurs, sauce béchamel) - boulgour pilaf / gâteau au yaourt et pommes', 1),
('2021-12-18', 1, 'sauté de boeuf au paprika - spaghettis / banana bread (oeuf, fromage blanc, banane)', 1),
('2021-12-18', 2, 'beignets de calamars - spaghettis / compote pommes fraises', 1),
('2021-12-19', 1, 'repas de noël : boudin blanc à la crème d\'échalotes - pommes noisettes / bûche chocolat caramel', 1),
('2021-12-19', 2, 'repas de noël : escalope de volaille grillée - pommes noisettes / bûche chocolat caramel', 1),
('2021-12-19', 3, 'repas de noël : boudin blanc à la crème d\'échalotes - poêlée de légumes - bûche chocolat caramel', 1),
('2021-12-19', 4, 'escalope de volaille grillée - haricots verts aneth, citron / poire aux épices', 1),
('2021-12-20', 1, 'omelette à l\'émental - riz créole / pavlova (fruits rouges, meringuette, mousse)', 1),
('2021-12-20', 2, 'omelette à l\'émmental - carottes saveur antillaise / oeufs neige au caramel', 1),
('2021-12-20', 3, 'rougail de saucisse fumée - riz créole / pavlova (fruits rouges, meringuette, mousse)', 1),
('2022-01-06', 1, 'nuggets de volaille - boulgour pilaf / gaufre fantasia', 1),
('2022-01-06', 2, 'colin sauce aux petits légumes - boulgour pilaf / liégeois vanille', 1),
('2022-01-07', 1, 'rôti de porc sauce moutarde - flageolets à la tomate  / galette des rois', 1),
('2022-01-07', 2, 'kefta d\'agneau à l\'harissa - haricots beurre / galette des rois', 1),
('2022-01-08', 1, 'pizza bolognaise - pommes rösti aux légumes / entremet vanille', 1),
('2022-01-08', 2, 'omelette nature - pommes rösti aux légumes / compote pommes bananes', 1),
('2022-01-09', 1, 'braisé de paleron - penne / cake noix de coco', 1),
('2022-01-09', 2, 'saucisse de francfort - petits pois / gâteau de semoule', 1),
('2022-01-10', 1, 'marmite de poisson - riz créole / tarte citron meringuée', 1),
('2022-01-10', 2, 'rôti de dinde - blettes au gratin sauce béchamel / tarte citron meringuée', 1),
('2022-01-10', 3, 'rôti de dinde - riz créole / mousse au pain d\'épices', 1),
('2022-01-13', 1, 'galopin de veau persillé - macaronis / gratin de pêches', 1),
('2022-01-13', 2, 'filet de lieu noir à la Tunisienne - brunoise de légumes saveur orientale / barre bretonne', 1),
('2022-01-14', 1, 'rôti de veau - purée pommes de terre / mousse au cacao', 1),
('2022-01-14', 2, 'nuggets de volaille - printanière de légumes / ananas et caramel au lait', 1),
('2022-01-15', 1, 'chipolatas grillées - haricots blancs à la tomate / oeufs en neige au caramel', 1),
('2022-01-15', 2, 'tarte à l\'oignon - haricots blancs à la tomate / compote de poire', 1),
('2022-01-16', 1, 'cuisse de poulet à l\'Américaine - riz créole / moelleux au fromage', 1),
('2022-01-16', 2, 'filet de hoki sauce vierge - riz créole / moelleux au fromage', 1),
('2022-01-17', 1, 'stick de colin pané et citron - semoule / cake au citron', 1),
('2022-01-17', 2, 'omelette nature - épinards à la béchamel / panna cotta au fromage blanc aux pommes', 1),
('2022-01-20', 1, 'parmentier de poisson - purée / gâteau au chocolat', 1),
('2022-01-21', 1, 'sauté de boeuf aux carottes - lentilles / mousse aux spéculoos', 1),
('2022-01-22', 1, 'filet de lieu noir sauce safranée - semoule / barre bretonne au caramel beurre salé', 1),
('2022-01-22', 2, 'boulettes de boeuf sauce carotte - ratatouille et semoule / barre bretonne au caramel beurre salé', 1),
('2022-01-23', 1, 'cordon bleu - riz créole / cake aux chocolats blanc et noir', 1),
('2022-01-23', 2, 'cordon bleu - haricots verts / cake aux chocolats blanc et noir', 1),
('2022-01-24', 1, 'sauté de dinde à l\'estragon - penne / douceur lactée au citron', 1),
('2022-01-24', 2, 'duo de poissons - penne / bananouil (banane, fenouil, oeuf, fromage blanc)', 1),
('2022-01-27', 1, 'coucous merguez - semoule / gaufre fantasia', 1),
('2022-01-27', 2, 'filet de colin sauce safranée - semoule / gaufre fantasia', 1),
('2022-01-28', 1, 'nems au poulet - ris cantonnais / gâteau aux abricots', 1),
('2022-01-28', 2, 'lieu à la chinoise - riz cantonnais / gâteau aux abricots', 1),
('2022-01-29', 1, 'tarte au chèvre et tomates - julienne de légumes / entremets à la vanille et mikado', 1),
('2022-01-30', 1, 'boeuf sauté aux oignons - riz créole / crémeux aux fruits et coco', 1),
('2022-01-30', 2, 'beignets de calamars - chop suey de légumes / riz au lait à la banane', 1),
('2022-01-31', 1, 'blanquette de colin - coudes / cake à l\'orange', 1),
('2022-01-31', 2, 'saucisse de toulouse - lentilles / roulé aux myrtilles', 1),
('2022-02-10', 1, 'côte de porc sauce pamplemousse - purée / moelleux pommes spéculoos', 1),
('2022-02-10', 2, 'omelette nature - haricots verts / moelleux pommes spéculoos', 1),
('2022-02-11', 1, 'rôti de veau - semoule / mille-feuilles chocolat', 1),
('2022-02-11', 2, 'saucisse de strasbourg - julienne de légumes / smoothie bananes-pommes', 1),
('2022-02-12', 1, 'paupiette saumon sauce crème - pommes noisettes / fromage blanc crème de marrons', 1),
('2022-02-13', 1, 'poulet sauce mimolette - penne / cake au miel', 1),
('2022-02-13', 2, 'penne de la mer - épinards béchamel / entremet caramel-poire', 1),
('2022-02-14', 1, 'pavé de colin crème persillée - riz de grand-mère / mousse chocolat au lait', 1),
('2022-02-14', 2, 'longe de porc aux herbes - riz de grand-mère / crème aux oeufs à la vanille', 1),
('2022-03-02', 1, 'filet de colin - purée / mousse chocolat au lait', 1),
('2022-03-02', 2, 'viennoise de dinde - haricots verts flageolets / mousse chocolat au lait', 1),
('2022-03-03', 1, 'boeuf braisé de paleron sauce tomate - pommes grenailles aux épices / cake noix de coco', 1),
('2022-03-03', 2, 'nuggets de poisson - pommes grenailles aux épices / gaufre fantasia', 1),
('2022-03-05', 1, 'couscous végétarien - semoule / stracciatella', 1),
('2022-03-05', 2, 'moules gratinées - semoule / entremet  à la vanille', 1),
('2022-03-06', 1, 'filet de colin meunière et citron - julienne de légumes / mille-feuilles chocolat', 1),
('2022-03-06', 2, 'boudin noir - purée / mille-feuilles chocolat', 1),
('2022-03-09', 1, 'boulettes de boeuf au curry - semoule / Flan au chocolat', 1),
('2022-03-09', 2, 'pavé de colin à la provençale - semoule / gaufre au sucre glace', 1),
('2022-03-10', 1, 'cuisse de poulet basquaise - pommes frites / duo de mousses au chocolats', 1),
('2022-03-10', 2, 'rissolette de porc sauce charcutière - pommes frites/ Gaufre', 1),
('2022-03-11', 1, 'omelette - riz à la tomate / cake au citron', 1),
('2022-03-11', 2, 'tarte flambée (fromage blanc, oeuf, oignons) - riz à la tomate / cake au citron', 1),
('2022-03-12', 1, 'paupiette de veau - coquillettes saveur du midi / clafoutis aux pommes', 1),
('2022-03-12', 2, 'penne aux lentilles et maïs - fondue de poireaux / clafoutis aux pommes', 1),
('2022-03-13', 1, 'colin pané au citron - boulgour pilaf / moelleux myrtilles-citron', 1),
('2022-03-13', 2, 'Emincé de dinde sauce caramel - boulgour pilaf / moelleux myrtilles-citron', 1),
('2022-05-13', 1, 'poulet ', 4),
('2022-05-13', 2, 'poulet frite', 4),
('2022-06-01', 1, 'Gartin de penne et veau grillé - yaourt BIO', 1),
('2022-06-01', 2, 'Riz basmati et colin sauce meunière - Cerises producteur local', 1),
('2022-06-08', 1, 'steak de veau - haricots verts / gâteau au chocolat ', 1),
('2022-06-08', 2, 'poisson papillote - haricots verts / entremets caramel et pommes', 1),
('2022-06-08', 3, 'steak de veau - flageolets à la tomate / coulommiers ', 1),
('2022-06-09', 1, 'sauté de boeuf - Riz créole / mousse aux spéculoos', 1),
('2022-06-09', 2, 'beignets de calamars - Riz créole / Yaourt nature sucré', 1),
('2022-06-10', 1, 'Poulet à l\'américaine - Tortis / Gâteau aux cerises (spécialité du Chef)', 1),
('2022-06-10', 2, 'Carré de Porc fumé sauce barbecue - Tortis / Flan au chocolat', 1),
('2022-06-11', 1, 'Pizza Kebab / Carottes et lardons / Cake aux Quetsches', 1),
('2022-06-11', 2, 'Pavé de colin au basilic - Boulgour pilaf / Barre Bretonne', 1),
('2022-06-12', 1, 'Omelette nature et Pommes rösti aux légumes - gâteau au chocolat', 1),
('2022-06-12', 2, 'Filet de colin et Pommes rösti aux légumes - gâteau au chocolat', 1),
('2022-06-15', 1, 'Rôti de veau et Lentilles - Gâteau de semoule', 1),
('2022-06-15', 2, 'Saucisse de Strasbourg et Lentilles - Moelleux au fromage (dessert)', 1),
('2022-06-15', 3, 'Rôti de veau et petits pois - Gâteau de semoule', 1),
('2022-06-16', 1, 'Panini bolognaise - Fromage blanc crème de marrons', 1),
('2022-06-17', 1, 'Emincé de dinde sauce caramel et légumes à l\'asiatique (carotte courgettes poivrons oignons fève) - Gâteau aux poires', 1),
('2022-06-17', 2, 'Saucisse de volaille aux herbes et Riz Créole - Gâteau aux poires', 1),
('2022-06-17', 3, 'Emincé de dinde sauce caramel et Riz créole - Gâteau aux poires', 1),
('2022-06-18', 1, 'Stick de colin pané et Boulgour pilaf - Cake aux Quetsches', 1),
('2022-06-18', 2, 'Rôti de porc au curry et boulgour pilaf - Cake aux quetsches', 1),
('2022-06-18', 3, 'Rôti de porc au curry et courgettes saveur du midi - Crème aux oeufs à la vanille', 1),
('2022-06-19', 1, 'cordon bleu + purée de pommes de terre / liégeois à la vanille', 1),
('2022-06-19', 2, 'cordon bleu + haricots verts et PdTerre / barre bretonne', 1),
('2022-06-19', 3, 'saumonette sauce dieppoise + purée de PdTerre / barre bretonne', 1),
('2022-06-22', 1, 'menu végétarien : boulgour tandoori + poêlée de Guyane (céleri, carottes, champignons) / cake citron', 1),
('2022-06-22', 2, 'boulettes boeuf sauce tomate + boulgour pilaf / orange aux épices', 1),
('2022-06-22', 3, 'boulettes boeuf sauce tomate + boulgour / Cake citron', 1),
('2022-06-23', 1, 'brick croustillante de poisson + pommes frites / duo mousse au chocolat', 1),
('2022-06-23', 2, 'brick croustillante de colin + brunoise de légumes / duo mousse chocolat', 1),
('2022-06-24', 1, 'Sauté de boeuf aux marrons + tortis / gâteau au chocolat', 1),
('2022-06-24', 2, 'sauté de boeuf aux marrons + purée de potiron / Bananouil (banane, fenouil, oeuf, fromage blanc)', 1),
('2022-06-24', 3, 'poulet rôti + Tortis / Gâteau chocolat', 1),
('2022-06-24', 4, 'poulet rôti + tortis / fromage blanc crème et marrons', 1),
('2022-06-25', 1, 'filet de colin sauce aux poireaux + riz créole / Rissole raisins secs (pâte feuilleté, crème pâtissière et oeufs)', 1),
('2022-06-25', 2, 'Sauté de porc + riz créole / Rissole raisins secs ', 1),
('2022-06-25', 3, 'filet de colin sauce poireaux + riz créole / Crémeux vanille kaki (fruit le kaki, crème mousseline vanille)', 1),
('2022-06-25', 4, 'végétarien : riz créole +  duo brocolis choux-fleurs aux amandes / Rissole raisins secs', 1),
('2022-06-26', 1, 'gratin de macaronis au jambon - macaronis / mousse au cacao', 1),
('2022-06-26', 2, 'filet de lieu sauce crème - macaronis / neige aux myrtilles (blanc d\'oeuf, crème anglaise aux myrtilles)', 1),
('2022-06-26', 3, 'haut de cuisse de poulet - macaronis / neige aux myrtilles', 3),
('2022-06-30', 1, 'Poulet braisé + McFlurry + Frites', 3);

-- --------------------------------------------------------

--
-- Structure de la table `elior_paiement`
--

DROP TABLE IF EXISTS `elior_paiement`;
CREATE TABLE IF NOT EXISTS `elior_paiement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idEleve` int NOT NULL,
  `datePaiement` date NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `typeReglement` tinyint NOT NULL COMMENT '1 = espèces 2 = chèque',
  `remarques` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `elior_paiement`
--

INSERT INTO `elior_paiement` (`id`, `idEleve`, `datePaiement`, `montant`, `typeReglement`, `remarques`) VALUES
(18, 59, '2021-11-13', '10.00', 1, 'rendre 1 euro'),
(19, 27, '2021-11-13', '9.50', 2, ''),
(20, 18, '2021-11-13', '4.50', 1, ''),
(21, 18, '2021-11-14', '4.50', 1, ''),
(22, 21, '2021-11-14', '9.00', 1, ''),
(23, 9, '2021-11-14', '9.00', 1, ''),
(25, 34, '2021-11-15', '5.00', 1, ''),
(26, 46, '2021-11-15', '4.50', 1, ''),
(27, 24, '2021-11-15', '27.50', 2, 'remis début d\'année compta'),
(28, 24, '2021-11-29', '40.00', 2, ''),
(29, 21, '2021-11-29', '20.00', 1, ''),
(30, 27, '2021-12-03', '4.00', 1, ''),
(31, 21, '2021-12-11', '10.00', 1, ''),
(32, 56, '2021-12-12', '9.00', 2, ''),
(33, 24, '2021-12-17', '20.00', 2, ''),
(34, 56, '2022-01-06', '45.00', 2, '');

-- --------------------------------------------------------

--
-- Structure de la table `elior_params`
--

DROP TABLE IF EXISTS `elior_params`;
CREATE TABLE IF NOT EXISTS `elior_params` (
  `heureDebutCde` time NOT NULL,
  `prixRepas` decimal(5,2) NOT NULL,
  `nbRepasDecouvert` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `elior_params`
--

INSERT INTO `elior_params` (`heureDebutCde`, `prixRepas`, `nbRepasDecouvert`) VALUES
('09:30:00', '4.50', 0);

-- --------------------------------------------------------

--
-- Structure de la table `elior_utilisateur`
--

DROP TABLE IF EXISTS `elior_utilisateur`;
CREATE TABLE IF NOT EXISTS `elior_utilisateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL DEFAULT '',
  `idClasse` int NOT NULL DEFAULT '0',
  `login` varchar(25) NOT NULL DEFAULT '',
  `mdp` varchar(255) NOT NULL DEFAULT '',
  `statut` int NOT NULL DEFAULT '0',
  `creditRepas` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `elior_utilisateur`
--

INSERT INTO `elior_utilisateur` (`id`, `nom`, `prenom`, `idClasse`, `login`, `mdp`, `statut`, `creditRepas`) VALUES
(8, 'BOETE', 'Antoine', 1, 'BOETEA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(9, 'LE COCGUEN', 'Guillaume', 2, 'LECOCGUENG', '1a1dc91c907325c69271ddf0c944bc72', 1, 9),
(10, 'CHAPELAIN', 'Gael', 1, 'CHAPELAING', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(11, 'DA SILVA MARQUES', 'Lucas', 1, 'DASILVAL', '1a1dc91c907325c69271ddf0c944bc72', 1, 994.75),
(12, 'BOUMADAFA', 'Marouane', 1, 'BOUMADAFAM', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(13, 'BOUSSAIDA', 'Sofiene', 2, 'BOUSSAIDAS', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(14, 'CATROUILLET', 'Jonas', 1, 'CATROUILLETJ', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(15, 'KONARSKI', 'Matthieu', 2, 'KONARSKIM', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(16, 'MARTINET', 'Clement', 1, 'MARTINETC', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(17, 'LECOMTE', 'Bryan', 1, 'LECOMTEB', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(18, 'LE GARFF', 'Kevin', 2, 'LEGARFFK', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(19, 'LECOUBLET', 'Theo', 1, 'LECOUBLETT', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(21, 'LE DUC', 'Pierre', 1, 'LEDUCP', '1a1dc91c907325c69271ddf0c944bc72', 1, 3),
(22, 'LACINGA', 'Corentin', 2, 'LACINGAC', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(24, 'DOUBLEAU', 'Quentin', 1, 'DOUBLEAUQ', '1a1dc91c907325c69271ddf0c944bc72', 1, 2),
(25, 'VARILLON', 'Anthony', 2, 'VARILLONA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(26, 'DZOGANG', 'Sami', 1, 'DZOGANGS', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(27, 'FONTAN', 'Gaetan', 1, 'FONTANG', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(28, 'DE SISTO', 'Lorenzo', 1, 'DESISTOL', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(29, 'CARRE', 'Arthur', 1, 'CARREA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(31, 'DENONCIN', 'Agnès', 0, 'DENONCINA', '0cdd424b4658379d9fbfb70dad67c776', 2, 0),
(32, 'RUGGERI', 'Anthony', 2, 'RUGGERIA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(33, 'DESNOS', 'Remi', 2, 'DESNOSR', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(34, 'ITTOHEMAD', 'Meryeme', 2, 'ITTOHEMADM', '1a1dc91c907325c69271ddf0c944bc72', 1, 0.5),
(35, 'GROMER', 'Johan', 1, 'GROMERJ', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(36, 'JOURDAIN', 'Esteban', 2, 'JOURDAINE', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(37, 'GRATIEN', 'Erwann', 1, 'GRATIENE', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(38, 'BOULANGER', 'Florian', 2, 'BOULANGERF', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(39, 'QUENOT', 'Mael', 2, 'QUENOTM', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(40, 'THOMAS', 'Alexis', 2, 'THOMASA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(41, 'DOSTE MOHAMED', 'Yohann', 2, 'DOSTEY', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(42, 'MOREL', 'Teddy', 2, 'MORELT', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(43, 'DANG', 'Mathieu', 1, 'DANGM', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(44, 'DJENADI', 'Axel', 2, 'DJENADIA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(46, 'DUPREY', 'Clement', 2, 'DUPREYC', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(47, 'LEDRU', 'Maxime', 2, 'LEDRUM', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(48, 'INAN', 'Anysse', 2, 'INANA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(49, 'LETORT', 'Samuel', 2, 'LETORTS', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(50, 'MESLIN', 'Thibaut', 1, 'MESLINT', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(51, 'KAUFFMANNN', 'Nathan', 1, 'KAUFFMANN', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(52, 'MUSEUX', 'Remi', 2, 'MUSEUXR', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(54, 'GERBE', 'Benjamin', 1, 'GERBEB', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(55, 'PIROU', 'Paul', 2, 'PIROUP', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(56, 'HAUTCOEUR', 'Jules', 1, 'HAUTCOEURJ', '1a1dc91c907325c69271ddf0c944bc72', 1, 18),
(57, 'HUE', 'Mathias', 1, 'HUEM', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(58, 'KARAKUS', 'Yasin', 1, 'KARAKUSY', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(59, 'DELATOUCHE', 'Romain', 2, 'DELATOUCHER', '1a1dc91c907325c69271ddf0c944bc72', 1, 1),
(60, 'LEGOUPIL', 'William', 2, 'LEGOUPILW', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(61, 'HATCHUEL', 'Jules', 2, 'HATCHUELJ', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(63, 'MOUQUET', 'Adrien', 1, 'MOUQUETA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(64, 'NAZIL', 'Ilyes', 1, 'NAZILI', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(65, 'PAUL', 'Timothee', 1, 'PAULT', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(66, 'PHILIPPE', 'Kevin', 1, 'PHILIPPEK', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(67, 'ROGER', 'Remi', 1, 'ROGERR', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(68, 'SIMONEAU', 'Quentin', 1, 'SIMONEAUQ', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(69, 'SONTOT', 'Alexis', 1, 'SONTOTA', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(70, 'SOULIVET', 'Victor', 1, 'SOULIVETV', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(71, 'ZIANI', 'Yanis', 1, 'ZIANIY', '1a1dc91c907325c69271ddf0c944bc72', 1, 0),
(72, 'ELIOR', '', 0, 'ELIOR', '1a1dc91c907325c69271ddf0c944bc72', 4, 0);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `elior_menu`
--
ALTER TABLE `elior_menu`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`idFormule`) REFERENCES `elior_formule` (`numFormule`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
