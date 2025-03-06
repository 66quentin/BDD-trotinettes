

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



-- ------------------Trotinettes--------------------------------------

--
-- Structure de la table `Activite`
--

CREATE TABLE `Activite` (
  `Date` varchar(8) NOT NULL,
  `Trottinettes_loues` int(11) NOT NULL,
  `Trottinettes_panne` int(11) NOT NULL,
  `Pb_regles` int(11) NOT NULL,
  `Pb_non_regles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Activite`
--

INSERT INTO `Activite` (`Date`, `Trottinettes_loues`, `Trottinettes_panne`, `Pb_regles`, `Pb_non_regles`) VALUES
('29.04.19', 0, 2, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Location`
--

CREATE TABLE `Location` (
  `Numero` int(11) NOT NULL,
  `Heure` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Personne`
--

CREATE TABLE `Personne` (
  `Statut` varchar(7) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `Mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Personne`
--

INSERT INTO `Personne` (`Statut`, `Numero`, `Nom`, `Prenom`, `Adresse`, `Mdp`) VALUES
('employe', 1, 'G', 'Q', 'Bages', 'mdp'),
('client', 2, 'G2', 'Q2', 'Bages2', 'mdp2');

-- --------------------------------------------------------

--
-- Structure de la table `Station`
--

CREATE TABLE `Station` (
  `Nombre_trottinette` int(11) NOT NULL,
  `Numero` int(11) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Adresse` varchar(30) NOT NULL,
  `Max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Station`
--

INSERT INTO `Station` (`Nombre_trottinette`, `Numero`, `Nom`, `Adresse`, `Max`) VALUES
(12, 1, 'Point Nord', 'Avenue de la Gare', 15),
(9, 2, 'Point Sud', 'Avenue Jean Jaurès', 12),
(8, 3, 'Poind Est', 'Chemin de Canet', 11),
(6, 4, 'Point Ouest', 'Avenue Joseph Sauvy', 7),
(9, 5, 'Centre', 'Avenue Georges Clemenceau', 13),
(7, 6, 'Gare', 'Avenue Général Guillaut', 8);

-- --------------------------------------------------------

--
-- Structure de la table `Trottinette`
--

CREATE TABLE `Trottinette` (
  `Numero` int(11) NOT NULL,
  `Etat` varchar(11) NOT NULL,
  `Numero_responsable` int(11) NOT NULL,
  `Statut` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Trottinette`
--

INSERT INTO `Trottinette` (`Numero`, `Etat`, `Numero_responsable`, `Statut`) VALUES
(1, 'Fonctionnel', 1, 'quai'),
(2, 'Fonctionnel', 1, 'quai'),
(3, 'Fonctionnel', 1, 'quai'),
(4, 'Fonctionnel', 1, 'quai'),
(5, 'Fonctionnel', 1, 'quai'),
(6, 'panne', 1, 'quai'),
(7, 'Fonctionnel', 1, 'quai'),
(8, 'Fonctionnel', 1, 'quai'),
(9, 'Fonctionnel', 1, 'quai'),
(10, 'Fonctionnel', 1, 'quai'),
(11, 'Fonctionnel', 1, 'quai'),
(12, 'Fonctionnel', 1, 'quai'),
(13, 'Fonctionnel', 2, 'quai'),
(14, 'Fonctionnel', 2, 'quai'),
(15, 'Fonctionnel', 2, 'quai'),
(16, 'Fonctionnel', 2, 'quai'),
(17, 'Fonctionnel', 2, 'quai'),
(18, 'panne', 2, 'quai'),
(19, 'Fonctionnel', 2, 'quai'),
(20, 'Fonctionnel', 2, 'quai'),
(21, 'Fonctionnel', 2, 'quai'),
(22, 'Fonctionnel', 3, 'quai'),
(23, 'Fonctionnel', 3, 'quai'),
(24, 'Fonctionnel', 3, 'quai'),
(25, 'Fonctionnel', 3, 'quai'),
(26, 'Fonctionnel', 3, 'quai'),
(27, 'Fonctionnel', 3, 'quai'),
(28, 'Fonctionnel', 3, 'quai'),
(29, 'Fonctionnel', 3, 'quai'),
(30, 'Fonctionnel', 4, 'quai'),
(31, 'Fonctionnel', 4, 'quai'),
(32, 'Fonctionnel', 4, 'quai'),
(33, 'Fonctionnel', 4, 'quai'),
(34, 'Fonctionnel', 4, 'quai'),
(35, 'Fonctionnel', 4, 'quai'),
(36, 'Fonctionnel', 5, 'quai'),
(37, 'Fonctionnel', 5, 'quai'),
(38, 'Fonctionnel', 5, 'quai'),
(39, 'Fonctionnel', 5, 'quai'),
(40, 'Fonctionnel', 5, 'quai'),
(41, 'Fonctionnel', 5, 'quai'),
(42, 'Fonctionnel', 5, 'quai'),
(43, 'Fonctionnel', 5, 'quai'),
(44, 'Fonctionnel', 5, 'quai'),
(45, 'Fonctionnel', 6, 'quai'),
(46, 'Fonctionnel', 6, 'quai'),
(47, 'Fonctionnel', 6, 'quai'),
(48, 'Fonctionnel', 6, 'quai'),
(49, 'Fonctionnel', 6, 'quai'),
(50, 'Fonctionnel', 6, 'quai'),
(51, 'Fonctionnel', 6, 'quai');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Activite`
--
ALTER TABLE `Activite`
  ADD PRIMARY KEY (`Date`);

--
-- Index pour la table `Location`
--
ALTER TABLE `Location`
  ADD PRIMARY KEY (`Numero`);

--
-- Index pour la table `Personne`
--
ALTER TABLE `Personne`
  ADD PRIMARY KEY (`Numero`);

--
-- Index pour la table `Station`
--
ALTER TABLE `Station`
  ADD PRIMARY KEY (`Numero`);

--
-- Index pour la table `Trottinette`
--
ALTER TABLE `Trottinette`
  ADD PRIMARY KEY (`Numero`);
