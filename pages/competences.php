<?php
$poles = [
    [
        'code'    => 'UE1',
        'titre'   => 'Administrer les réseaux et l\'Internet',
        'couleur' => 'marine',
        'saes'    => ['SAÉ 1.01', 'SAÉ 1.02', 'SAÉ 2.01'],
        'competences' => [
            [
                'intitule' => 'Modèles OSI et TCP/IP',
                'acquis'   => 'Identification des couches, encapsulation des données, protocoles associés (Ethernet, IP, TCP, UDP, HTTP, DNS, DHCP). Exercices de décodage de trames.'
            ],
            [
                'intitule' => 'Adressage IP et découpage en sous-réseaux',
                'acquis'   => 'Calcul de plans d\'adressage IPv4 en VLSM, masques de sous-réseaux, plages d\'hôtes, adresses de broadcast. Notions d\'adressage IPv6.'
            ],
            [
                'intitule' => 'Configuration d\'équipements Cisco (CLI)',
                'acquis'   => 'Configuration de routeurs et switches sous IOS : interfaces, routage statique, création de VLANs, trunking 802.1Q, routage inter-VLAN sur la SAÉ 2.01 (réseau PME).'
            ],
            [
                'intitule' => 'Déploiement de services réseau',
                'acquis'   => 'Installation et configuration d\'un serveur DHCP et DNS sous Linux Debian dans le cadre de la SAÉ 2.01. Vérification de la résolution de noms et de l\'attribution des adresses.'
            ],
            [
                'intitule' => 'Analyse de trafic avec Wireshark',
                'acquis'   => 'Capture de trames sur un réseau local, filtrage par protocole, identification des échanges ARP, DHCP, DNS et TCP. Utilisé pour valider les configurations réseau.'
            ],
            [
                'intitule' => 'Sensibilisation à la cybersécurité',
                'acquis'   => 'Validation du MOOC SecNumacad de l\'ANSSI (SAÉ 1.01) : hygiène numérique, gestion des mots de passe, mises à jour, sauvegardes, identification des menaces courantes (phishing, malware).'
            ],
        ]
    ],
    [
        'code'    => 'UE2',
        'titre'   => 'Connecter les entreprises et les usagers',
        'couleur' => 'orange',
        'saes'    => ['SAÉ 1.03', 'SAÉ 2.04'],
        'competences' => [
            [
                'intitule' => 'Mesures et appareillage de laboratoire',
                'acquis'   => 'Utilisation d\'un oscilloscope numérique, d\'un générateur basse fréquence (GBF) et d\'un analyseur de spectre (SAÉ 1.03). Mesure de fréquence, période, amplitude et forme d\'onde.'
            ],
            [
                'intitule' => 'Signaux et modulations',
                'acquis'   => 'Étude des modulations analogiques AM et FM, lecture de spectres fréquentiels, identification des composantes spectrales, rédaction de compte-rendu de TP.'
            ],
            [
                'intitule' => 'Architecture d\'un réseau d\'accès télécom',
                'acquis'   => 'Étude des technologies FTTH (OLT, splitters passifs 1→32, ONT), radio point-à-point PTP (backhaul) et accès radio fixe FWA (station de base + CPE abonné) dans le cadre du projet ArchiNet (SAÉ 2.04).'
            ],
            [
                'intitule' => 'Dimensionnement des besoins en débit',
                'acquis'   => 'Calcul du débit requis par village (5 Mbit/s × nombre de foyers), choix technologique justifié selon la distance, le terrain et le budget. Application sur l\'île 8 de l\'archipel (villages : 55, 86, 110 et 132 foyers).'
            ],
            [
                'intitule' => 'Bilan de liaison fibre et radio',
                'acquis'   => 'Calcul du budget optique FTTH (atténuation fibre, pertes connecteurs/épissures/splitters, marge de 5 dB). Calcul de bilan radio PTP/FWA (EIRP, pertes espace libre, marge de 10 dB). Vérification de la ligne de vue sur grille hexagonale.'
            ],
            [
                'intitule' => 'Analyse géographique et contraintes terrain',
                'acquis'   => 'Lecture d\'une carte hexagonale (1 hex = 1 km), calcul de distances multi-segments selon le type de terrain (plaine, accidenté, montagne, forêt), identification des obstacles radio et choix du chemin optimal.'
            ],
        ]
    ],
    [
        'code'    => 'UE3',
        'titre'   => 'Créer des outils et applications informatiques pour les R&T',
        'couleur' => 'vert',
        'saes'    => ['SAÉ 1.04', 'SAÉ 1.05', 'SAÉ 2.03'],
        'competences' => [
            [
                'intitule' => 'Administration système Linux',
                'acquis'   => 'Shell Bash : navigation, gestion des fichiers, utilisateurs et droits (chmod, chown, sudo), gestion des paquets (apt). Écriture de scripts d\'automatisation de tâches.'
            ],
            [
                'intitule' => 'Traitement de données avec Python',
                'acquis'   => 'Parsing de fichiers de logs système (SAÉ 1.05) : lecture ligne par ligne, extraction de champs, agrégation statistique et génération de tableaux de bord. Manipulation de fichiers JSON (ArchiNet).'
            ],
            [
                'intitule' => 'Développement web HTML/CSS/PHP',
                'acquis'   => 'Structure HTML sémantique, mise en forme CSS responsive, PHP procédural : routage sécurisé par whitelist, inclusion de pages modulaires, formulaire de contact avec validation serveur, envoi email, protection anti-spam (honeypot).'
            ],
            [
                'intitule' => 'Conception d\'une base de données relationnelle',
                'acquis'   => 'Modélisation (MLD), normalisation pour éviter les redondances, clés primaires et étrangères, import de données CSV depuis l\'Open Data Centre-Val de Loire. Implémentation sous Oracle Database (SAÉ 2.03).'
            ],
            [
                'intitule' => 'Requêtes SQL avancées',
                'acquis'   => 'SELECT avec jointures multi-tables, GROUP BY, agrégats (COUNT, SUM, AVG), opérateur LIKE, ORDER BY. Requêtes préparées PHP pour sécuriser les entrées utilisateur et prévenir les injections SQL.'
            ],
            [
                'intitule' => 'Site web dynamique connecté à une base de données',
                'acquis'   => 'Développement d\'un site PHP/Bootstrap (SAÉ 2.03) : affichage de données en tableau, graphiques Chart.js générés depuis PHP, formulaire de filtrage multi-critères, gestion des sessions et authentification (droits admin/ext).'
            ],
        ]
    ],
];
?>

<section id="competences">
    <h2>Mes Compétences</h2>
    <p>Compétences acquises en première année de BUT R&T à l'IUT de Blois, organisées selon les trois pôles du programme national.</p>

    <div class="conteneur-competences">
        <?php foreach ($poles as $pole) : ?>
            <div class="bloc-pole bloc-pole--<?php echo $pole['couleur']; ?>">
                <div class="pole-header">
                    <span class="pole-badge"><?php echo htmlspecialchars($pole['code']); ?></span>
                    <h3><?php echo htmlspecialchars($pole['titre']); ?></h3>
                </div>

                <div class="pole-saes">
                    <?php foreach ($pole['saes'] as $sae) : ?>
                        <span class="tag-sae"><?php echo htmlspecialchars($sae); ?></span>
                    <?php endforeach; ?>
                </div>

                <ul class="liste-competences">
                    <?php foreach ($pole['competences'] as $comp) : ?>
                        <li>
                            <span class="comp-titre"><?php echo htmlspecialchars($comp['intitule']); ?></span>
                            <span class="comp-acquis"><?php echo htmlspecialchars($comp['acquis']); ?></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</br>
<!-- ===================== STACK ===================== -->
    <div class="bloc-stack">
       <h2>Les logiciels et outils que j'utilise</h2>
       <div class="stack-grille">
           <div class="stack-cat">
               <h4>Réseaux</h4>
               <div class="stack-tags">
                   <span>Cisco Packet Tracer</span>
                   <span>Wireshark</span>
                   <span>IPv4 / IPv6</span>
                   <span>VLANs</span>
                   <span>DHCP / DNS</span>
                   <span>Windows Server</span>
                   <span>Linux Fedora</span>
               </div>
           </div>
           <div class="stack-cat">
               <h4>Systèmes</h4>
               <div class="stack-tags">
                   <span>Linux Debian</span>
                   <span>Bash</span>
                   <span>Apache</span>
                   <span>VirtualBox</span>
                   <span>SSH / Putty</span>
               </div>
           </div>
           <div class="stack-cat">
               <h4>Dev & Outils</h4>
               <div class="stack-tags">
                   <span>Python</span>
                   <span>PHP</span>
                   <span>HTML / CSS</span>
                   <span>LaTeX</span>
                   <span>Java</span>
                   <span>Git</span>
                   <span>Oracle sqldeveloper</span>
                   <span>Visual Studio Code</span>
                   <span>Bootstrap</span>
                   <span>Chart.js</span>
               </div>
           </div>
       </div>
    </div>
</section>