
<main class="index">
  <section class="intro">
    <h1 class="hide">Header</h1>
      <div class="headings">
        <h1 class="heading1 internationaal"><span class="intro__year">2018<span class="intro__editie">ed. 13</span></span>Internationaal</h1>
        <h2 class="heading2 straattheater">Straattheater</h2>
        <h3 class="heading3 beveren">
          Beveren <span class="date_intro">24/08 - 26/08</span>
        </h3>
      </div>
      <div class="buttons_intro">
        <a href="index.php?page=programma" class="programma__intro btn_intro">Programma ></a>
        <a href="#barbecue" class="barbecue__intro btn_intro">Ontdek de barbecue</a>
      </div>
    </section>
    <section class="info">
      <h1 class="hide">Intro</h1>
      <article class="info_text">
        <h1>Wat maakt het internationaal straattheater zo speciaal?</h1>
        <p>
          Het straattheater in Beveren is iets unieks in België er komen
          gekende internationale artiesten toe zoals de Men in coats die al
          enkele prijzen hebben gewonnen.
        </p>
        <br />
        <p>
          Het is ook een kindvriendelijk en familiaal event. Maak er dus een
          echt fantastisch familiemoment van!
        </p>
      </article>

      <picture class="info_img">
          <source
            type="image/webp"
            media="(min-width: 62em)"
            srcset="assets/img/info_img/info_100.png 1x, assets/img/info_img/info_100@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 48em)"
            srcset="assets/img/info_img/info_50.png 1x, assets/img/info_img/info_50@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 36em)"
            srcset="assets/img/info_img/info_20.png 1x,assets/img/info_img/info_20@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 0)"
            srcset="assets/img/info_img/info_10.png 1x, assets/img/info_img/info_10@2x.webp 2x"
          />

          <source
            type="image/png"
            media="(min-width: 62em)"
            srcset="assets/img/info_img/info_100.png 1x, assets/img/info_img/info_100@2x.png 2x"
          />
          <source
            type="image/png"
            media="(min-width: 48em)"
            srcset="assets/img/info_img/info_50.png 1x, assets/img/info_img/info_50@2x.png 2x"
          />
          <source
            type="image/png"
            media="(min-width: 36em)"
            srcset="assets/img/info_img/info_20.png 1x,assets/img/info_img/info_20@2x.png 2x"
          />
          <source
            type="image/png"
            media="(min-width: 0)"
            srcset="assets/img/info_img/info_10.png 1x, assets/img/info_img/info_10@2x.png 2x"
          />
          <img src="assets/img/info_img/info_100@2x.png" alt="Acrobaten" class="info_image" />
        </picture>
    </section>
    <section class="praktisch_body">
    <h1 class="hide">Praktisch</h1>
      <article class="praktisch">
      <h1 class="hide">Locaties</h1>
        <figure class="praktisch_kaart praktisch_kaart__backgroundimage">
          <h1 class="praktisch_title">Locaties</h1>
          <!-- <img src="assets/img/map_index.jpg" class="praktisch_kaart__image" alt="Genummerde kaart Centrum Beveren"> -->
        </figure>
        <div class="praktisch_plaatsen">
          <ul class="praktisch_plaatsen__row">
            <li class="praktisch_plaatsen__listitem">1. KA Beveren/BS De Bever</li>
            <li class="praktisch_plaatsen__listitem">2. Oud Atletiekplein</li>
            <li class="praktisch_plaatsen__listitem">3. Donkvijverstraat</li>
            <li class="praktisch_plaatsen__listitem">4. Diederik Van Beverenlaan</li>
          </ul>
          <ul class="praktisch_plaatsen__row">
            <li class="praktisch_plaatsen__listitem">5. Yzerhand</li>
            <li class="praktisch_plaatsen__listitem">6. Vrasenestraat</li>
            <li class="praktisch_plaatsen__listitem">7. Warande</li>
            <li class="praktisch_plaatsen__listitem">8. Grote Markt</li>
          </ul>
          <ul class="praktisch_plaatsen__row">
            <li class="praktisch_plaatsen__listitem">9. N70</li>
            <li class="praktisch_plaatsen__listitem">10. Achter de kerk</li>
            <li class="praktisch_plaatsen__listitem">11. Gemeentelijke Sporthal</li>
          </ul>
        </div>
      </article>
    </section>
    <section class="uitgelicht">
    <h1 class="uitgelicht_title">Uitgelicht</h1>
    <ul class="uitgelicht_body">
    <?php foreach($uitgelicht as $act): ?>

          <li class="uitgelicht_body__act">
          <a href="index.php?page=detail&id=<?php echo $act['id'] ?>&soort=<?php echo $act['soort'] ?>" class="voorstelling link_no_style">
            <h3 class="act__rubric">Uitgelicht</h3>
            <div class="act__data">
              <h2 class="act__tags"><?php echo $act['genre'] ?></h2>
              <h1 class="act__name"><?php echo $act['naam'] ?></h1>
              <h1 class="act__day">Zo 26</h1>
            </div>
            <picture>

          <source
            type="image/webp"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_100.webp 1x, assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_100@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_50.webp 1x, assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_50@2x.webp 2x"
          />

          <source
            type="image/jpg"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_100.jpg 1x, assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_100@2x.jpg 2x"
          />
          <source
            type="image/jpg"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_50.jpg 1x, assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_50@2x.jpg 2x"
          />

          <img src="assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_50.jpg" width="100" alt="Meer info over The Flying Dutchmen" class="image_voorstelling resize_voorstelling">
        </picture>
            </a>
          </li>

    <?php endforeach; ?>
    </ul>
    </section>
  </main>
  <footer id="barbecue">
    <section class="barbecue">
    <h1 class="hide">Footer</h1>
      <article class="barbecue_info">
        <h1 class="barbecue_info_title">Reuzenbarbecue</h1>
        <p class="barbecue_info_text bold">
          De Chiro organiseert een geweldig gezellige barbecue voor jong en
          oud
        </p>
        <br />
        <p class="barbecue_info_text">
          De barbecue word georganiseerd op
          <span class="bold">Zaterdag 25 augustus</span> op
          <span class="bold">het oud atletiekplein</span>
        </p>
        <article class="opsomming_barbecue">
          <h2 class="title_opsomming">Wat jij en je kinderen leuk zullen
            vinden aan de barbecue.</h2>
          <p class="barbecue_info_text text_opsomming">
            Je geniet van een lekker stukje vlees
            <br />
            Je kan nieuwe vrienden maken
            <br />
            Je komt terecht in een geweldige sfeer
            <br />
            Je kind kan andere kinderen leren kennen
            <br />
            in de speciaal ingerichte speeltuin.
        </article>
      </article>
      <form action="index.php#barbecue" method="post" class="form">
        <input type="hidden" name="action" value="sendBarbecue"/>
        <h1 class="form__title">Schrijf je in voor de barbecue</h1>
        <h2 class="error_barbecue"></h2>
        <p class="input_field voornaam">
          <label for="voornaam" class="input__label">Voornaam</label>
          <input type="text" name="voornaam" id="voornaam" class="input__m inputfield_form" value="<?php if(!empty($_POST['voornaam'])){ echo $_POST['voornaam'];} ?>"/>
          <span class="error_form_question error"><?php if(!empty($errors['voornaam'])){ echo  $errors['voornaam'];}?></span>
        </p>
        <p class="input_field naam">
          <label for="naam" class="input__label">Naam</label>
          <input type="text" name="naam" id="naam" class="input__m inputfield_form" value="<?php if(!empty($_POST['naam'])){ echo $_POST['naam'];} ?>"/>
          <span class="error_form_question error"><?php if(!empty($errors['naam'])){ echo  $errors['naam'];}?></span>
        </p>
        <p class="input_field email">
          <label for="email" class="input__label">e-mail</label>
          <input type="email" name="email" id="email" class="input__l inputfield_form" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>"/>
          <span class="error_form_question error"><?php if(!empty($errors['email'])){ echo  $errors['email'];}?></span>
        </p>
        <p class="input_field pers">
          <label for="personen" class="input__label"># Personen (2-10 pers.)</label>
          <input type="number" name="personen" min="2" max="10" id="personen" class="input__s inputfield_form" value="<?php if(!empty($_POST['personen'])){ echo $_POST['personen'];} ?>"/>
          <span class="error_form_question error"><?php if(!empty($errors['personen'])){ echo  $errors['personen'];}?></span>
        </p>
        <button type="submit" class="inschrijven">Inschrijven</button>
      </form>
    </section>
    <section class="footer_all">
    <h1 class="hide">Footer</h1>
      <article class="nieuwsbrief">
        <div>
          <h1 class="title_nieuwsbrief">Misschien word er nog een spetterende act toegevoegd...</h1>
          <h3 class="subtitle_nieuwsbrief">Schrijf je dus in op de nieuwsbrief</h3>
          <form action="index.php#nieuwsbrief" method="post" id="nieuwsbrief">
            <input type="hidden" name="action" value="sendNieuwsbrief"/>
            <label for="email_nieuwsbrief" class="input__label">e-mail</label>
            <div class="input_nieuwsbrief input_field_nieuwsbrief">
              <input type="email" name="email" id="email_nieuwsbrief" class=" inputfield_nieuwsbrief inputfield_form" value="<?php if(!empty($_POST['email'])){ echo $_POST['email'];} ?>"/>
              <span class="error_form_question error error_nieuwsbrief"><?php if(!empty($errors['email'])){ echo  $errors['email'];}?></span>
              <button type="submit" class="inschrijven inschrijven_nieuwsbrief">
                Inschrijven
              </button>
            </div>
          </form>
        </div>
      </article>
      <article class="footer">
      <h1 class="hide">Info_footer</h1>
        <div class="footer_content">
          <figure class="logo_footer">
            <a href="index.php">
              <img src="assets/img/logo.png" width="200" alt="Ga naar de homepagina" />
            </a>
          </figure>

          <address class="contact">
            <div>
              <span class="title_footer">Heeft u vragen?</span>
              <ul class="gegevens">
                <li class="text_footer">erik.apers@beveren.be</li>
                <li class="text_footer"><a class="link_no_style" href="tel:+32 037 50 16 29">+32 037 50 16 29</a></li>
              </ul>
            </div>
          </address>
          <nav class="links_cta">
          <h1 class="hide">Links</h1>
            <ul class="links_footer">
              <li class="link"><a class="link_no_style" href="index.php?page=programma">Programma</a></li>
              <li class="link"><a class="link_no_style" href="#">Praktische info</a></li>
              <li class="link"><a class="link_no_style" href="#barbecue">Schrijf je in voor de barbecue</a></li>
            </ul>
          </nav>
          <article class="socialmedia">
          <h1 class="hide">Sociale Media</h1>
            <a href="fb://www.facebook.com/search/top/?q=straattheater%20beveren&epa=SEARCH_BOX"><img src="assets/img/socialmedia/facebook_light.png"
                width="60" alt="Ontdek ons op facebook"></a>
            <a href="https://twitter.com/search?f=tweets&vertical=default&q=straattheater%20beveren&src=typd"><img src="assets/img/socialmedia/twitter_light.png"
                width="60" alt="Volg alle nieuwtjes via onze twitter tag"></a>
            <a href="https://www.instagram.com/explore/tags/straattheaterbeveren/?hl=nl"><img src="assets/img/socialmedia/insta_light.png"
                width="60" alt="Ontdek ons op instagram"></a>
          </article>
          <article class="sponsors_article">
            <h1 class="title_footer sponsors_title">Mede mogelijk gemaakt door:</h1>
            <figure class="sponsors">
              <a href="#"><img src="assets/img/sponsors/winkeldorp.png" width="100" alt="Ga naar de site van winkeldorp"></a>
              <a href="#"><img src="assets/img/sponsors/warande.png" width="74" alt="Ga naar de site van warande"></a>
              <a href="#"><img src="assets/img/sponsors/aout.png" width="64" alt="Ga naar de site van aout"></a>
              <a href="#"><img src="assets/img/sponsors/horeca.png" width="54" alt="Ga naar de site van horeca"></a>
              <a href="#"><img src="assets/img/sponsors/beversefeesten.png" width="100" alt="Ga naar de site van beverse feesten"></a>
            </figure>
          </article>
          <aside class="extra_content_footer">
          <h1 class="hide">Meta</h1>
            <ul class="meta_information">
              <li class="meta"><a class="link_no_style" target="_blank" href="https://www.websitepolicies.com/policies/view/NiupEM4g">Privacy
                  Policy</a> &nbsp;</li>
              <li class="meta"><a class="link_no_style" href="https://www.lennonpuype.be">&copy;Lennon Puype 2019</a>
                &nbsp;</li>
            </ul>
          </aside>
        </div>
      </article>
    </section>
  </footer>
