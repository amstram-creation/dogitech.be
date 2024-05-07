<?php

use Brevo\Client\Configuration;
use Brevo\Client\Api\TransactionalEmailsApi;
use Brevo\Client\Model\SendSmtpEmail;

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once(__DIR__ . '/vendor/autoload.php');

    $name = htmlentities($_POST['name']);
    $message = htmlentities($_POST['message']);
    // Configure API key authorization: api-key
    $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');

    $apiInstance = new TransactionalEmailsApi(
        new \GuzzleHttp\Client(),
        $config
    );

    $sendSmtpEmail = new SendSmtpEmail([
        'sender' => ['name' => 'dogitech.be', 'email' => 'nicolas@dogitech.be'],
        'to' => [['email' => 'nicolas@dogitech.be']],
        // 'to' => [['email' => 'touch@hexmakina.be']],
        'subject' => 'Tich, y a du monde au site qui veut te parler',
        'htmlContent' => sprintf('<html><body><strong>Coordonnées:</strong><br>%s<br><br><strong>Message:</strong><br>%s</body></html>', $name, $message)
    ]);

    try {
        $result = $apiInstance->sendTransacEmail($sendSmtpEmail);
    } catch (Exception $e) {
        echo 'Exception when calling TransactionalEmailsApi->sendTransacEmail: ', $e->getMessage(), PHP_EOL;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>DogiTech - Services d'électricité et de plomberie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/dogitech.css">

    <!-- Common Meta Tags -->
    <meta name="description" content="Chez DogiTech, nous sommes fiers d'offrir des services de qualité qui répondent à vos besoins électriques et sanitaires.">
    <meta name="keywords" content="DogiTech, services, électricité, plomberie">
    <meta name="author" content="Nicolas Dogimont">

    <!-- Open Graph tags -->
    <meta property="og:title" content="DogiTech - Services d'électricité et de plomberie">
    <meta property="og:description" content="Chez DogiTech, nous sommes fiers d'offrir des services de qualité qui répondent à vos besoins électriques et sanitaires.">
    <meta property="og:image" content="https://dogitech.be/public/logo.png">
    <meta property="og:url" content="https://dogitech.be/">
    <meta property="og:type" content="website">

    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="DogiTech - Services d'électricité et de plomberie">
    <meta name="twitter:description" content="Chez DogiTech, nous sommes fiers d'offrir des services de qualité qui répondent à vos besoins électriques et sanitaires.">
    <meta name="twitter:image" content="https://dogitech.be/public/logo.png">
</head>

<body>
    <header>
        <img src="/public/logo.svg" alt="Logo dogitech.be">
        <strong>Fondé par Nicolas Dogimont</strong>
        <nav>
            <a href="mailto:nicolas@dogitech.be">nicolas@dogitech.be</a>
            <a href="tel:0472 20 31 04">0472 20 31 04</a>
            <a href="">BE 0799 847 845</a>
        </nav>
    </header>

    <main>
        <section>
            <h1>Plomberie, électricité<br>et petits travaux</h1>

            <p>Chez DogiTech, nous sommes dédiés à répondre efficacement à vos besoins en électricité et plomberie. Fondée par le passionné Nicolas, notre entreprise s'engage à offrir des solutions fiables et sensées.</p>
            <p>Que ce soit pour l'installation de circuits électriques, la réparation de fuites ou le remplacement de tuyauterie, nous garantissons un service rapide, efficace et conforme aux normes de sécurité.</p>
            <p>Fiers de contribuer à la communauté locale, nous sommes convaincus de votre satisfaction. Pour toute question ou pour un devis gratuit, contactez-nous. Nous sommes à votre service !</p>
        </section>

        <section>
            <h2>Contactez nous</h2>
            <form method="POST">
                <label for="name">Vos coordonnées</label>
                <input type="text" id="name" name="name" required>
                <label for="message">Votre message</label>
                <textarea id="message" name="message" required></textarea>
                <button>Envoyer</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?= date('Y') ?> Nicolas Dogimont</p>
    </footer>
</body>

</html>