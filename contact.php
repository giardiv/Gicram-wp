<?php include "header.php" ?>

  <div class="row container-dark">
    <div class="background-full"></div>
    <h1 class="col-md-11 col-md-offset-1 animated left-animated">Contact</h1>
  </div>
  <div class="row container-dark padder-1">
    <div class="background-full-left-dark"></div>
    <div class="double col-md-6 dark">
      <h4 class="h4-double marger-50">Nous écrire</h4>
      <form class="contact-form">
        <div class="checkbox">
          Civilité
          <input type="radio" name="gender" id="radio-m" />
          <label class="radio radio-m" for="radio-m"></label>
          <label for="radio-m">Monsieur</label>
          <input type="radio" name="gender" id="radio-f"/>
          <label class="radio radio-f" for="radio-f"></label>
          <label for="radio-f">Madame</label>
        </div>
        <div class="form-group">
          <input placeholder="NOM*" type="text" class="form-control" required/>
          <input placeholder="PRÉNOM*" type="text" class="form-control" required/>
          <input placeholder="ENTREPRISE*" type="text" class="form-control"  required/>
          <input placeholder="FONCTION" type="text" class="form-control"  />
          <input placeholder="EMAIL*" type="e-mail" class="form-control"  required  />
          <input placeholder="TÉLÉPHONE" type="phone" class="form-control"   />
          <input placeholder="SUJET" type="text"  class="form-control" />
          <textarea placeholder="MESSAGE" required  class="form-control" rows="5"></textarea>
        </div>
        <p class="info-p">
          Nous vous rappelons que conformément à notre politique relative aux données personnelles, ces informations ne seront en aucun cas cédées ou vendues à des tiers)<br /><br />
          *Champs obligatoires.
        </p>
         <button type="submit" class="btn btn-dark center pull-right">ENVOYER</button>
      </form>
    </div>
    <div class="double col-md-6">
      <h4 class="h4-double marger-50">Nous contacter</h4>
      <address class="marger-50">
        <strong>Adresse</strong><br />
        28 BIS RUE BARBÉS<br />
        92120 MONTROUGE<br /><br />
        <strong>Téléphone</strong><br />
        01 55 48 90 00<br /><br />
        <strong>Fax</strong><br />
        01 47 35 17 71<br /> <br />
        <strong>E-mail</strong><br />
        info@gicram.com
      </address>
      <div class="row text-center">
        <span class="footer-icons" aria-hidden="true"><i class="fa fa-facebook-official fa-2x"></i></span>
        <span class="footer-icons" aria-hidden="true"><i class="fa fa-instagram fa-2x"></i></span>
        <span class="footer-icons" aria-hidden="true"><i class="fa fa-twitter fa-2x"></i></span>
        <span class="footer-icons" aria-hidden="true"><i class="fa fa-vimeo fa-2x"></i></span>
      </div>
    </div>
  </div>
<?php include "footer.php" ?>
