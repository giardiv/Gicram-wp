<?php include "header.php" ?>
    <!-- Video -->
    <div class="row container-dark">
        <div class="background-full almost-white"></div>
      <iframe id="video" src="https://player.vimeo.com/video/158933289?title=0&amp;byline=0&amp;portrait=0" class="col-md-12" height="641" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
    </div>
    <!-- Dern Ope / SS -->
    <div class="row container-dark">
        <div class="background-full"></div>
      <h1 class="col-md-11 col-md-offset-1 animated left-animated">Dernières<br />Opérations</h1>
      <div class="row ss-caption">
        <div class="row active">
          <h2>Bolloré Logistics 1</h2>
          <hr class="hr-h2 " align="left" />
          <h3 class="carousel-caption-z">2017 - lieux - date - nombre</h3>
        </div>
        <div class="row hide-caption">
          <h2>Bolloré Logistics 2</h2>
          <hr class="hr-h2 " align="left" />
          <h3 class="carousel-caption-z">2017 - lieux - date - nombre</h3>
        </div>
        <div class="row hide-caption">
          <h2>Bolloré Logistics 3</h2>
          <hr class="hr-h2 " align="left" />
          <h3 class="carousel-caption-z">2017 - lieux - date - nombre</h3>
        </div>
      </div>
      <div id="carousel-1" class="carousel-z slide" data-ride="carousel-gicram">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-1" data-slide-to="1" class="dot active"></li>
          <li data-target="#carousel-1" data-slide-to="2" class="dot"></li>
          <li data-target="#carousel-1" data-slide-to="3" class="dot"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner-z" role="listbox">
          <div class="item" style="background-image:url(images/foo1.jpg)">
          </div>
          <div class="item" style="background-image:url(images/foo1b.jpg)">
          </div>
          <div class="item" style="background-image:url(images/foo1c.jpg)">
          </div>
        </div>
        <!-- Controls -->
        <span class="left carousel-control" role="button" data-slide="prev-z">
          <span class="carousel-arrow" aria-hidden="true"><i class="fa fa-long-arrow-left fa-2x"></i></span>
          <span class="sr-only">Previous</span>
        </span>
        <span class="right carousel-control" role="button" data-slide="next-z">
          <span class="carousel-arrow" aria-hidden="true"><i class="fa fa-long-arrow-right fa-2x"></i></span>
          <span class="sr-only">Next</span>
        </span>
      </div>
      <a class="top-1 center-block btn btn-primary" style="width:220px">Offres et disponibilités</a>
    </div>
    <!-- Actu -->
    <?php if($dev){ ?>
    <div class="row">
      <h1 class="col-md-11 col-md-offset-1">Nos<br />Actualités</h1>
      <div class="row row-square">
        <div class="col-md-6 half-row-square">
          <div class="col-md-6 square square-img" style="background-image:url(images/foo1.jpg)">
          </div>
          <div class="col-md-6 square square-text">
            <div class="square-top">
              21.01.2017
              <span class="plus">
                <span class="plus-h"></span>
                <span class="plus-v"></span>
              </span>
            </div>
            <div class="square-top">
              <b>Top text<br />—<br/></b>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
        <div class="col-md-6 half-row-square">
          <div class="col-md-6 square square-img" style="background-image:url(images/foo1.jpg)">
          </div>
          <div class="col-md-6 square square-text">
            <div class="square-top">
              21.01.2017
              <span class="glyphicon glyphicon-plus"></span>
            </div>
            <div class="square-top">
              <b>Top text<br />—<br/></b>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
            </div>
          </div>
        </div>
      </div>
      <div class="row row-square">
        <div class="col-md-3 square square-text">
          <div class="square-top">
            21.01.2017
            <span class="glyphicon glyphicon-plus"></span>
          </div>
          <div class="square-top">
            <b>Top text<br />—<br/></b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
          </div>
        </div>
        <div class="col-md-3 square square-img" style="background-image:url(images/foo1.jpg)">
        </div>
        <div class="col-md-3 square square-text">
          <div class="square-top">
            21.01.2017
            <span class="glyphicon glyphicon-plus"></span>
          </div>
          <div class="square-top">
            <b>Top text<br />—<br/></b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
          </div>
        </div>
          <div class="col-md-3 square square-img" style="background-image:url(images/foo1.jpg)">
          </div>
      </div>
      <a class="xbtn btn-primary" target="_blank" style="width:180px" href="https://www.facebook.com/Gicram-Groupe-419932878051585/">
          Plus d'actualités
      </a>
    </div>
    <?php }else{ ?>

        <div class="row">
          <h1 class="col-md-11 col-md-offset-1 animated left-animated">Nos<br />Actualités</h1>

          <div id="actu-container">
              <h5 class="text-center"><b>Loading...</b></h5>
          </div>
        </div>
    <?php } ?>
    <div class="row">
      <h1 class="col-md-11 col-md-offset-1 animated left-animated">Nos clients<br />Témoignent</h1>
    </div>


    <div class="row">
      <h1 class="h1-mini container-dark">
        <span class="background-full"></span>
        <span class="text">Gicram  la force de plus de 40 ans d’expérience,<br />
        la complémentarité de nos expertises à votre service</span>
      </h1>
      <div class="row triple-container container-dark">
        <div class="background-full-right"></div>
        <div class="col-md-6 col-md-offset-1 background-gray">
          Une véritable qualité <b>d’ECOUTE</b>  et de compréhension de vos enjeux,<br /><b>–</b><br/>
          Des équipes à taille humaine pour un <b>ACCOMPAGNEMENT</b> personnalisé et une parfaite communication entre les corps d’experts, garants de l’efficacité et de la réussite du projet, architecturale et technique.
          Notre objectif ? Répondre dès le départ à tous vos besoins et toutes les questions que pourrait soulever votre programme grâce à une étude approfondie et rigoureuse menée de concert par nos experts.
          <div class="btn-ctn">
            <a class="top-1 center-block btn btn-primary" >En savoir plus</a>
          </div>
        </div>
        <div class="col-md-4 triple-img-container">
          <span class="background-full-gray"></span>
          <img src="images/foo1.jpg"/ />
        </div>
      </div>
      <h1 class="h1-mini container-dark">
        <span class="background-full"></span>
        <span class="text no-after"><a href="#" class="text-red">Nos références</a> /
          <a href="#" class="text-red">Nos clients témoignent</a></span>
      </h1>
    </div>

    <!-- Blockquote pointed -->
    <div class="row container-dark">
      <div class="background-full"></div>
      <blockquote class="col-md-10 col-md-offset-1 pointed">
        <br />
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <br />
      </blockquote>
    </div>
    <!-- Double col -->
    <div class="row">
      <div class="col-md-5 col-md-offset-1">
        <h4 class="h4-under">
          Duis aute irure
        </h4>
        <ul>
          <li>
            Lorem ipsum dolor sit amet,
          </li>
          <li>
            Dolor in reprehenderit in voluptate velit consectetur adipisicing elit, sed do eiusmod tempor incididunt Dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          </li>
          <li>
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </li>
        </ul>
        <h4 class="h4-under">
          Duis aute irure
        </h4>
        <ul>
          <li>
            Lorem ipsum dolor sit amet,  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
          </li>
          <li>
            consectetur adipisicing elit, sed do eiusmod tempor incididunt
          </li>
          <li>
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </li>
        </ul>
        <h4 class="h4-under">
          Duis
        </h4>
        <ul>
          <li>
            Lorem ipsum dolor sit amet,  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
          </li>
          <li>
            consectetur adipisicing elit, sed do eiusmod tempor incididunt
          </li>
          <li>
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </li>
        </ul>
      </div>
      <div class="col-md-5">
        <h4 class="h4-under">
          Souplesse d'aménagement
        </h4>
        <ul>
          <li>
            Lorem ipsum dolor sit amet,
          </li>
          <li>
            consectetur adipisicing elit, sed do eiusmod tempor incididunt
          </li>
          <li>
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </li>
        </ul>
        <h4 class="h4-under">
          Dolor
        </h4>
        <ul>
          <li>
            Lorem ipsum dolor sit amet,
          </li>
          <li>
            consectetur adipisicing elit, sed do eiusmod tempor incididunt
          </li>
          <li>
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </li>
        </ul>
      </div>
    </div>
    <!-- Manual SS -->
    <div class="row container-dark">
      <div class="background-full"></div>
      <h1 class="h1-mini">Nos réalisations</h1>
      <div class="row green-cl">
        <h2>Sonepar <small class="green-cl">23444m<sup>2</sup></small></h2>
      </div>
      <div class="row row-manual-ss green-bg">
        <div class="col-md-9 manual-ss">
          <div class="manual-ss-img" style="background-image:url(images/park.jpg)"></div>
          <div class="manual-ss-img" style="background-image:url(images/park1.jpg)"></div>
          <div class="manual-ss-img" style="background-image:url(images/park2.jpg)"></div>
          <div class="manual-ss-img" style="background-image:url(images/park3.jpg)"></div>
        </div>
        <div class="col-md-3 manual-ss-controls">
          <div class="row">
            <img data-to="1" src="images/park.jpg" class="col-md-6" />
            <img data-to="2" src="images/park1.jpg" class="col-md-6" />
          </div>
          <div class="row">
            <img data-to="3" src="images/park2.jpg" class="col-md-6" />
            <img data-to="4" src="images/park3.jpg" class="col-md-6" />
          </div>
          <div class="row">
            <div class="manual-ss-legend">
              Nom du projet :<br />
              <b>Gicram</b><br />
              Date début :<br />
              <b>12 mars 2012</b><br />
              Matériaux utilisés : <br />
              <b>Bois / verre</b><br />
              Client : <br />
              <b>Thomas Smith</b>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Triple -->
        <!-- Contact -->
    <div class="row container-dark">
      <div class="background-full"></div>
      <h1 class="col-md-11 col-md-offset-1 animated left-animated">Contact</h1>
    </div>
    <div class="row container-dark">
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
           <button type="submit" class="btn btn-dark center">ENVOYER</button>
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
<script src="javascripts/index.js"></script>
