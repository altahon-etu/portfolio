<?php
$semestres = [

    'Semestre 1' => [
        [
            'code'        => 'SAÉ 1.01',
            'titre'       => 'Se sensibiliser à l\'hygiène informatique et à la cybersécurité',
            'competence'  => 'UE1 — Administrer les réseaux et l\'Internet',
            'description' => 'Découverte des bonnes pratiques de sécurité informatique à travers le MOOC SecNumacad de l\'ANSSI. Étude des recommandations officielles en matière d\'hygiène numérique : gestion des mots de passe, mise à jour des systèmes, sauvegardes, et sensibilisation aux principales menaces (phishing, malware). Validation du certificat SecNumacad en fin de SAÉ.',
            'technos'     => ['MOOC SecNumacad', 'ANSSI', 'Cybersécurité'],
        ],
        [
            'code'        => 'SAÉ 1.02',
            'titre'       => 'S\'initier aux réseaux informatiques',
            'competence'  => 'UE2 — Connecter les entreprises et les usagers',
            'description' => 'Prise en main des fondamentaux des réseaux à travers une topologie réelle au sein de l\'IUT. Audit physique du câblage, identification des équipements actifs (switches, routeurs), et simulation du réseau sur Cisco Packet Tracer. Calcul de plans d\'adressage IPv4 et premiers exercices de configuration en ligne de commande.',
            'technos'     => ['Cisco Packet Tracer', 'IPv4', 'Subnetting', 'CLI'],
        ],
        [
            'code'        => 'SAÉ 1.03',
            'titre'       => 'Découvrir un dispositif de transmission',
            'competence'  => 'UE2 — Connecter les entreprises et les usagers',
            'description' => 'Manipulation en salle de TP des appareils de mesure électronique : oscilloscope numérique, générateur basse fréquence (GBF) et analyseur de spectre. Étude des signaux analogiques et numériques et mesure de la qualité du signal sur différents supports de transmission. Rédaction d\'un compte-rendu de TP.',
            'technos'     => ['Oscilloscope', 'GBF', 'Modulations', 'Signaux'],
        ],
        [
            'code'        => 'SAÉ 1.04',
            'titre'       => 'Se présenter sur Internet',
            'competence'  => 'UE3 — Créer des outils et applications informatiques pour les R&T',
            'description' => 'Conception et déploiement d\'une présence en ligne personnelle. Initiation au développement web (HTML/CSS), structuration du contenu, et mise en ligne sur un serveur. Réflexion sur l\'identité numérique professionnelle dans le cadre d\'une recherche de stage ou d\'alternance. Ce portfolio en est la continuité directe.',
            'technos'     => ['HTML', 'CSS', 'Web', 'Identité numérique'],
        ],
        [
            'code'        => 'SAÉ 1.05',
            'titre'       => 'Traiter des données',
            'competence'  => 'UE3 — Créer des outils et applications informatiques pour les R&T',
            'description' => 'Extraction et traitement automatisé de fichiers de logs système à l\'aide de scripts Python. Parsing de fichiers texte brut, nettoyage des données, agrégation statistique et génération de tableaux de bord lisibles. Application des notions d\'algorithmique et de programmation structurée vues en cours.',
            'technos'     => ['Python', 'Scripts', 'Logs', 'Traitement de données', 'Tableaux de bord', 'Parsing'],
        ],
    ],

    'Semestre 2' => [
        [
            'code'        => 'SAÉ 2.01',
            'titre'       => 'Construire un réseau informatique pour une petite structure',
            'competence'  => 'UE1 & UE2 — Administrer / Connecter',
            'description' => 'Conception et déploiement complet de l\'infrastructure réseau d\'une TPE et de deux PME fictives. Modélisation de la topologie, découpage en VLANs, configuration du routage inter-VLAN sur équipements Cisco, et déploiement des services fondamentaux (DHCP, DNS, SSH). Respect d\'un cahier des charges technique et rédaction d\'un rapport détaillé.',            
            'technos'     => ['Cisco Packet Tracer', 'VLANs', 'OSPF', 'NAT', 'DHCP', 'DNS', 'ACL', 'IPv4/IPv6', 'Port Forwarding', 'FTP'],
            'fichiers'    => [
                ['nom' => 'Rapport de projet', 'url' => 'fichiers/Rapport_SAE_201_TAHON_Alexis.pdf'],
                ['nom' => 'Fichier Packet Tracer (.pkt)', 'url' => 'fichiers/SAE201.pkt'],
            ],
        ],
        [
            'code'        => 'SAÉ 2.03',
            'titre'       => 'Mettre en place une solution informatique pour l\'entreprise',
            'competence'  => 'UE3 — Créer des outils et applications informatiques pour les R&T',
            'description' => 'Projet en binôme en deux livrables. Livrable 1 : modélisation d\'une base de données relationnelle sous Oracle Database à partir de jeux de données Open Data de la région Centre-Val de Loire. Conception du Modèle Logique de Données, normalisation, peuplement des tables et écriture de requêtes SQL diversifiées (jointures, groupements, LIKE). Livrable 2 : développement d\'un site web PHP/Bootstrap connecté à cette base de données, avec pages de visualisation (tableaux, graphiques Chart.js), formulaire de filtrage avec requêtes préparées, et gestion des sessions utilisateurs (authentification, droits admin/ext).',
            'technos'     => ['Oracle DB', 'SQL', 'PHP', 'Bootstrap', 'Chart.js', 'Sessions', 'Open Data', 'Requêtes préparées', 'Modèle Logique de Données', 'Normalisation'],
        ],
        [
            'code'        => 'SAÉ 2.04',
            'titre'       => 'ArchiNet — Déploiement d\'un réseau télécom sur un archipel',
            'competence'  => 'UE1 & UE2 — Administrer / Connecter les entreprises et les usagers',
            'description' => 'Projet en binôme (et coordination groupe TP) visant à concevoir un réseau télécom complet pour desservir des villages répartis sur une île d\'un archipel fictif. L\'île 8 est modélisée sur une grille hexagonale (1 hex = 1 km) avec quatre villages : hex 8.044 (110 foyers), hex 8.054 (132 foyers), hex 8.019 (86 foyers) et 8.018 (55 foyers). Travail en plusieurs phases : analyse du territoire (terrains, distances, obstacles radio), dimensionnement des besoins en débit (5 Mbit/s par foyer), choix technologiques justifiés (FTTH, radio PTP ou FWA), bilans de liaison fibre et radio, estimation du budget en Crédits (400 Cr/foyer pour l\'archipel). Livrables : livrable intermédiaire (tableau des villages + 1er budget), rapport technique final (schémas, bilans, tableau des coûts), et soutenance collective d\'arbitrage budgétaire à l\'échelle de l\'archipel.',
            'technos'     => ['FTTH / OLT / ONT', 'Radio PTP', 'FWA', 'Bilan de liaison', 'Budget Crédits', 'Python', 'Analyse géographique', 'Grille hexagonale'],
            'fichiers'    => [
                ['nom' => 'Rapport de projet', 'url' => 'fichiers/Compte_Rendu_SAE_204.pdf'],
            ],
        ],
    ],

    'Projet personnel' => [
        [
            'code'        => 'Portfolio',
            'titre'       => 'Mon Portfolio — Présence web dynamique',
            'competence'  => 'SAÉ 1.04 étendue — UE3',
            'description' => 'Développement de ce portfolio à partir de la classe de première, tout d\'abord en html/CSS et désormais en PHP avec un système de routage sécurisé (whitelist), des pages modulaires incluses via include(), un formulaire de contact fonctionnel avec validation serveur et envoi email, et un design responsive fait sur mesure. Hébergé sur serveur mutualisé.',
            'technos'     => ['PHP', 'HTML/CSS', 'Routage', 'Formulaire', 'Responsive'],
        ],
    ],
];
?>

<section id="projets">
    <h2>Mes Projets & SAÉ</h2>
    <p>L'ensemble des Situations d'Apprentissage et d'Évaluation réalisées en première année de BUT R&T à l'IUT de Blois, selon le programme national.</p>

    <?php foreach ($semestres as $semestre => $projets) : ?>

        <div class="bloc-semestre">
            <h3 class="titre-semestre"><?php echo htmlspecialchars($semestre); ?></h3>

            <div class="grille-projets">
                <?php foreach ($projets as $projet) : ?>
                    <div class="carte-projet">
                        <div class="carte-projet-header">
                            <span class="badge-code"><?php echo htmlspecialchars($projet['code']); ?></span>
                            <span class="badge-competence"><?php echo htmlspecialchars($projet['competence']); ?></span>
                        </div>
                        <h3><?php echo htmlspecialchars($projet['titre']); ?></h3>
                        <p><?php echo htmlspecialchars($projet['description']); ?></p>
                        <ul class="technos">
                            <?php foreach ($projet['technos'] as $techno) : ?>
                                <li><?php echo htmlspecialchars($techno); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php if (!empty($projet['fichiers'])) : ?>
                            <div class="carte-fichiers">
                                <?php foreach ($projet['fichiers'] as $fichier) : ?>
                                    <a href="<?php echo htmlspecialchars($fichier['url']); ?>" class="btn-rapport" download>
                                        <?php echo htmlspecialchars($fichier['nom']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php elseif (!empty($projet['rapport'])) : ?>
                            <a href="<?php echo htmlspecialchars($projet['rapport']); ?>" class="btn-rapport" download>
                            Télécharger le rapport
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    <?php endforeach; ?>
</section>