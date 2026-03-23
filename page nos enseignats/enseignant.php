<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Équipe Enseignante - EFREI</title>
  <link rel="stylesheet" href="enseignant.css">
</head>
<body>

  <header class="hero-section">
    
    <?php include $_SERVER['DOCUMENT_ROOT'].'/Project-Efrei-main/includes/navbar.php'; ?>


    <div class="hero-content">
      <p class="subtitle">Notre Équipe Pédagogique</p>
      <h1>Des experts du numérique dédiés à votre<br> réussite en première année de Bachelor.</h1>
      </div>
  </header>

  <main>

    <section class="team-grid">
      
      <article class="teacher-card">
        <div class="avatar-container">
          <img src="../images/maroua.jpeg" alt="Mohamed Hamidi">
        </div>
        <div class="teacher-info">
          <h3>Maroua TIKAT</h3>
          <p class="role">Responsable Projet Web</p>
          <p class="bio">Enseignant référent pour le module XT1205. Expert en développement Front-end et Back-end (PHP), elle évalue la qualité de votre code, le respect des maquettes et valide vos dépôts Git finaux</p>
        </div>
      </article>

      <article class="teacher-card">
        <div class="avatar-container">
          <img src="../images/hichem.jpeg" alt="Professeur C">
        </div>
        <div class="teacher-info">
          <h3>KMIMECH Hichem & XIAODAN CHIN Nathalie</h3>
          <p class="role">Professeur d'Algorithmique & Ekements de Programmation</p>
          <p class="bio">Spécialiste de la programmation structurée. Avec eux, vous apprendrez à dompter l'allocation mémoire, les pointeurs et la manipulation complexe des listes chaînées.</p>
        </div>
      </article>

      <article class="teacher-card">
        <div class="avatar-container">
          <img src="../images/menerique.jpeg" alt="Professeur OS">
        </div>
        <div class="teacher-info">
          <h3>MEZUI Menerique</h3>
          <p class="role">Réseaux 1 : Les fondamentaux</p>
          <p class="bio">Il vous accompagne dans la compréhension approfondie des systèmes d'exploitation. Côté réseaux, il supervise vos travaux de simulation d'infrastructures sur Cisco Packet Tracer.</p>
        </div>
      </article>

      <article class="teacher-card">
        <div class="avatar-container">
          <img src="../images/mourad.jpeg" alt="Professeur BDD">
        </div>
        <div class="teacher-info">
          <h3>KMIMECH Mourad</h3>
          <p class="role">Gestion des version</p>
          <p class="bio">De l'écriture de requêtes SQL optimisées à la liaison de vos dépôts GitHub directement dans VS Code, il s'assure que vous maîtrisez les outils de l'industrie.</p>
        </div>
      </article>

    </section>
  </main>

  <footer>
    <div class="footer-content">
      <div class="footer-info">
        <h3>EFREI - Département Informatique</h3>
        <p>Projet de programmation Web.</p>
      </div>
      
     <?php include $_SERVER['DOCUMENT_ROOT'] . '/Project-Efrei-main/includes/footer.php'; ?>
    </div>
    
    <div class="footer-bottom">
      <p>&copy; 2026 Tous droits réservés.</p>
    </div>
  </footer>

</body>
</html>