<!DOCTYPE html>
<html lang="fr">
<?php 
  include('header et footer/head.php'); 
?>
<body>
<?php 
  include('header et footer/header.php'); 
?>
    <main>
        <section class="hero">
            <video autoplay muted loop playsinline id="hero-video" poster="fallback-image.jpg">
                <source src="vidéo/videobanieres.webm" type="video/webm">
            </video>
            <div class="hero-content">
                <h1>La SPA de la Haute-Loire vous souhaite la bienvenue !</h1>
                <h3>Nous vous accueillons du Lundi au Samedi, de 13h30 à 17h30.</h3>
                <a href="adopter.php" class="btn-hero">J'adopte</a>
            </div>
        </section>

        <section class="section-carousel">
            <div class="container carousel-layout">
                <div id="main-carousel" class="carousel-container">
                    <button class="carousel-btn prev" aria-label="Précédent">❮</button>
                    <button class="carousel-btn next" aria-label="Suivant">❯</button>
                    <div class="carousel-track">
                        <div class="carousel-item"><img src="images/attrape poil.webp" alt=""></div>
                        <div class="carousel-item"><img src="images/Logo-1.webp" alt=""></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-about">
            <div class="container">
                <h3>À Propos de nous</h3>
                <p>La SPA de la Haute-Loire accueille toute l'année une soixantaine de chiens et une trentaine de chats et chatons venant des communes conventionnées.</p>
            </div>
        </section>

        <section id="contact" class="section-contact">
            <div class="container">
                <div class="contact-flex-container">
                    <div class="contact-left-column">
                        <h2 class="contact-main-title">Contact</h2>
                        <div class="contact-info">
                            <p>7 Impasse du Refuge ZA Plaine de Bleu<br>43000 Polignac</p>
                            <p>spa-haute-loire@yahoo.fr</p>
                            <p>04 71 02 65 50</p>
                        </div>
                    </div>
                    <div id="mapSPA_XX" class="map-box"></div>
                </div>

                <div class="contact-form">
                <h3>Formulaire</h3>
                <form>
                    <div class="form-row">
                        <div class="input-group">
                                    <label>Nom</label>
                                    <input type="text" required>
                                </div>
                                <div class="input-group">
                                    <label>E-mail</label>
                                    <input type="email" required>
                                </div>
                            </div>
                            <div class="input-group">
                                <label>Message</label>
                                <textarea rows="5" placeholder="Comment pouvons-nous vous aider ?"></textarea>
                            </div>
                            <button type="submit" class="btn-submit">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <button id="scrollToTop" class="scroll-to-top">↑</button>
    </main>

<?php 
  include('header et footer/footer.php'); 
?>
</body>
</html>