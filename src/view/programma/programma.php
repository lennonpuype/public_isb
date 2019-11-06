  <main class="h_center" class="programma" data-page="programma">
    <section class="overzicht_section">
      <h1 class="title_programma">Programma</h1>
      <article class="filter_content">
      <div class="filter__box">
        <form action="index.php" class="filter__form">
        <input type="hidden" name="page" value="programma" />
        <input type="hidden" name="action" value="filter" />
        <article class="filter">
          <div class="select_fields_pe">
            <select name="locatie" class="select locatie" value="">
              <option value="0">Alle Locaties</option>
              <option value="1">1. KA Beveren/BS De Bever</option>
              <option value="2">2. Oud Atletiekplein</option>
              <option value="3">3. Donkvijverstraat</option>
              <option value="4">4. Diederik Van Beverenlaan</option>
              <option value="5">5. Yzerhand</option>
              <option value="6">6. Vrasenestraat</option>
              <option value="7">7. Warande</option>
              <option value="8">8. Grote Markt</option>
              <option value="9">9. N70</option>
              <option value="10">10. Achter de kerk</option>
              <option value="11">11. Gemeentelijke Sporthal</option>
            </select>
            <select name="soort" class="select soort" value="">
              <option value="0">Alle Soorten</option>
              <option value="Straatact">Straatact</option>
              <option value="Voorstelling">Voorstelling</option>
              <option value="Spiegelbeeld">Spiegelbeeld</option>
            </select>
          </div>
          <div class="fields_select_body">
            <label for="alle" class="option_day active">Alle</label>
            <input type="radio" id="alle" name="dag" value="0" class="radio_dag" checked>
            <label for="24" class="option_day">Vr</label>
            <input type="radio" id="24" name="dag" value="24" class="radio_dag">
            <label for="25" class="option_day">Za</label>
            <input type="radio" id="25" name="dag" value="25" class="radio_dag">
            <label for="26" class="option_day">Zo</label>
            <input type="radio" id="26" name="dag" value="26" class="radio_dag">
          </div>
          <button type="submit" value="filter" class="filterbtn">filter</button>
        </article>
        </form>
        </div>
      </article>
      <article class="overzicht_articl">
        <ul class="overzicht">
        <?php foreach($acts as $act): ?>
         <li class="uitgelicht_body__act">
           <a href="index.php?page=detail&amp;id=<?php echo $act['id'] ?>&amp;soort=<?php echo $act['soort'] ?>" class="background_image_voorstelling link_no_style voorstelling" data-id="7">
             <h3 class="act__rubric">Locatie <?php echo $act['locatie'] ?></h3>
             <div class="act__data">
               <h2 class="act__tags"><?php echo $act['genre'] ?></h2>
               <h1 class="act__name"><?php echo $act['naam'] ?></h1>
               <h1 class="act__day"><?php echo $act['dag'] ?> | <?php echo $act['uur'] ?></h1>
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
      </article>
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
      <form action="index.php?page=programma#barbecue" method="post" class="form">
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
          <form action="index.php?page=programma#nieuwsbrief" method="post" id="nieuwsbrief">
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

