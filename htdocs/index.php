<!DOCTYPE html>
<html lang="fr">

<head>
    <title>DogiTech - Services d'électricité et de plomberie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/dogitech.css">
    <link rel="canonical" href="https://dogitech.be" />
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
            <a href="tel:0470 20 31 04">0470 20 31 04</a>
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
            <form id="contact-form">
                <label for="from_name">Vos coordonnées</label>
                <input type="text" id="from_name" name="from_name" required>
                <label for="from_address">Votre e-mail</label>
                <input type="email" id="from_address" name="from_address" required>
                <label for="message">Votre message</label>
                <textarea id="message" name="message" required></textarea>
                <button id="button" type="submit">Envoyer</button>
            </form>

            <script type="text/javascript"
                src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>

            <script type="text/javascript">
                emailjs.init('5ZzMjDJHpLUATsc5O')
                const btn = document.getElementById('button');

                document.getElementById('contact-form').addEventListener('submit', function(event) {
                    event.preventDefault();

                    btn.value = 'Sending...';

                    const serviceID = 'default_service';
                    const templateID = 'template_czg9edu';

                    emailjs.sendForm(serviceID, templateID, this)
                        .then(() => {
                            btn.value = 'Send Email';
                            alert('Sent!');
                        }, (err) => {
                            btn.value = 'Send Email';
                            alert(JSON.stringify(err));
                        });
                });
            </script>

        </section>
    </main>

    <footer>
        <p>&copy; <script>
                document.write(new Date().getFullYear())
            </script> Nicolas Dogimont</p>
    </footer>
</body>

</html>