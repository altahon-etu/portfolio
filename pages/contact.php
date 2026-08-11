<?php
$erreurs = [];
$succes = false;
$nom = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // -----------------------------------------------------------------------
    // ANTI-SPAM : champ honeypot (caché en CSS, invisible pour un humain)
    // Un bot remplit tous les champs, donc si celui-ci est rempli → spam
    // -----------------------------------------------------------------------
    if (!empty($_POST['site_web'])) {
        die(); // Bot détecté, on coupe silencieusement
    }

    // -----------------------------------------------------------------------
    // 1. Nettoyage des données
    // -----------------------------------------------------------------------
    $nom     = isset($_POST['nom'])     ? trim(strip_tags($_POST['nom']))     : '';
    $message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : '';
    $email   = isset($_POST['email'])   ? trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL)) : '';

    // -----------------------------------------------------------------------
    // 2. Validation
    // -----------------------------------------------------------------------
    if (empty($nom) || strlen($nom) < 2) {
        $erreurs[] = "Le champ 'Nom' est obligatoire (2 caractères minimum).";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "Une adresse email valide est requise.";
    }

    if (empty($message) || strlen($message) < 10) {
        $erreurs[] = "Le message doit contenir au moins 10 caractères.";
    }

    // -----------------------------------------------------------------------
    // 3. Envoi de l'email
    // -----------------------------------------------------------------------
    if (empty($erreurs)) {

        // === À MODIFIER : ton adresse email ===
        $destinataire = "atahon2007@gmail.com";
        $sujet        = "Portfolio - Nouveau message de " . $nom;

        // Corps du mail en HTML (s'affiche bien dans Gmail, OVH, etc.)
        $corps_html = '
        <!DOCTYPE html>
        <html lang="fr">
        <body style="font-family: Arial, sans-serif; background:#f4f4f4; padding:20px;">
            <div style="max-width:600px; margin:0 auto; background:#ffffff; border-radius:6px; overflow:hidden; border:1px solid #ddd;">
                <div style="background:#1a2e4a; padding:20px 25px;">
                    <h2 style="color:#ffffff; margin:0; font-size:1.1rem;">Nouveau message — Portfolio R&T</h2>
                </div>
                <div style="padding:25px;">
                    <p style="margin:0 0 8px;"><strong style="color:#1a2e4a;">Nom :</strong> ' . htmlspecialchars($nom) . '</p>
                    <p style="margin:0 0 20px;"><strong style="color:#1a2e4a;">Email :</strong> <a href="mailto:' . htmlspecialchars($email) . '">' . htmlspecialchars($email) . '</a></p>
                    <hr style="border:none; border-top:1px solid #eee; margin-bottom:20px;">
                    <p style="color:#444; line-height:1.7; white-space:pre-line;">' . htmlspecialchars($message) . '</p>
                </div>
                <div style="background:#f8f6f2; padding:12px 25px; font-size:0.8rem; color:#999; border-top:1px solid #eee;">
                    Envoyé depuis ton portfolio · ' . date('d/m/Y à H:i') . '
                </div>
            </div>
        </body>
        </html>';

        // Headers pour que le mail soit reconnu comme HTML et éviter le dossier spam
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: Portfolio <noreply@" . $_SERVER['HTTP_HOST'] . ">\r\n";
        $headers .= "Reply-To: " . $nom . " <" . $email . ">\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

        $envoye = mail($destinataire, $sujet, $corps_html, $headers);

        if ($envoye) {
            $succes = true;
            $nom = $email = $message = ""; // On vide le formulaire
        } else {
            // mail() a échoué (rare sur mutualisé, mais on le gère)
            $erreurs[] = "Une erreur technique empêche l'envoi. Contactez-moi directement par email.";
        }
    }
}
?>

<section id="contact">
    <h2>Me contacter</h2>
    <p>Une question, une opportunité de stage ou d'alternance ? Laissez-moi un message.</p>

    <div class="contact-layout">

        <!-- Formulaire -->
        <div class="contact-formulaire">

    <?php if (!empty($erreurs)): ?>
        <div class="alerte alerte-erreur">
            <strong>Merci de corriger les points suivants :</strong>
            <ul>
                <?php foreach ($erreurs as $erreur): ?>
                    <li><?php echo htmlspecialchars($erreur); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if ($succes): ?>
        <div class="alerte alerte-succes">
            <strong>Message envoyé !</strong> Je vous répondrai dans les plus brefs délais.
        </div>
    <?php endif; ?>

    <form action="index.php?page=contact" method="POST" class="form-contact" style="margin-top:0;">

        <!-- Honeypot anti-spam : caché en CSS, ne jamais le supprimer -->
        <div style="display:none;" aria-hidden="true">
            <label for="site_web">Ne pas remplir</label>
            <input type="text" id="site_web" name="site_web" tabindex="-1" autocomplete="off">
        </div>

        <div class="form-groupe">
            <label for="nom">Nom / Prénom <span style="color:var(--orange)">*</span></label>
            <input type="text" id="nom" name="nom"
                   value="<?php echo htmlspecialchars($nom); ?>"
                   placeholder="Alexis TAHON"
                   required>
        </div>

        <div class="form-groupe">
            <label for="email">Adresse Email <span style="color:var(--orange)">*</span></label>
            <input type="email" id="email" name="email"
                   value="<?php echo htmlspecialchars($email); ?>"
                   placeholder="exemple@email.com"
                   required>
        </div>

        <div class="form-groupe">
            <label for="message">Message <span style="color:var(--orange)">*</span></label>
            <textarea id="message" name="message" rows="5"
                      placeholder="Bonjour, je vous contacte au sujet de..."
                      required><?php echo htmlspecialchars($message); ?></textarea>
        </div>

        <button type="submit" class="btn-envoyer">Envoyer le message →</button>
    </form>
        </div><!-- fin contact-formulaire -->

        <!-- Infos de contact -->
        <div class="contact-infos">
            <h3>Discutons ensemble</h3>
            <p>N'hésitez pas à me contacter pour une opportunité d'alternance, un projet ou simplement pour échanger autour des réseaux et télécommunications.</p>

            <ul class="liste-contact">
                <li>
                    <span class="contact-icon">✉️</span>
                    <div>
                        <span class="contact-label">Email</span>
                        <a href="mailto:atahon2007@gmail.com" class="contact-valeur">atahon2007@gmail.com</a>
                        <span class="contact-detail">Réponse sous 24–48h</span>
                    </div>
                </li>
                <li>
                    <span class="contact-icon">💼</span>
                    <div>
                        <span class="contact-label">LinkedIn</span>
                        <a href="https://www.linkedin.com/in/alexis-tahon-25557b397/" target="_blank" rel="noopener" class="contact-valeur">Alexis Tahon</a>
                        <span class="contact-detail">Réseau professionnel</span>
                    </div>
                </li>
            </ul>

            <div class="contact-disponibilites">
                <h4>Disponibilité</h4>
                <ul>
                    <li><span class="point-vert"></span> Étudiant en BUT R&T — IUT de Blois</li>
                    <li><span class="point-vert"></span> Disponible pour une alternance dès septembre 2026</li>
                    <li><span class="point-vert"></span> Ouvert aux projets collaboratifs</li>
                    <li><span class="point-vert"></span> Réponse rapide aux messages</li>
                </ul>
            </div>

            <a href="fichiers/CV_Alexis_TAHON.pdf" class="btn-action btn-dl-cv" download>
                📄 Télécharger mon CV
            </a>
        </div>
    </div><!-- fin contact-layout -->
</section>