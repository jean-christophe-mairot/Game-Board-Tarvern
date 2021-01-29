<div class="container">
    <div class="cards">
    <?php foreach($annonces as $annonce): ?>
    
      
        <div class="card">
          <div class="card__image-holder">
            <img
              class="card__image"
              src="<?=$annonce->getPhoto()?>"
              alt="wave"
            />
          </div>
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
              <?=$annonce->getTitre()?>
              <small>categorie ou sous titre </small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description"><?=$annonce->getDescription()?></div>
            <div class="card-flap flap2">
              <div class="card-actions">
                  <p><?=$annonce->getPrix()?> €</p>
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>
     
    
    <?php endforeach; ?>
    </div> 
</div>