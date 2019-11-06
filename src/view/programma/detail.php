  <main data-page="detail">
    <section>
    <h1 class="hide">Info</h1>
      <article class="detail_first_info">
        <div class="text_detail_div text_detail_1">
          <h1 class="title_detail"><?php echo $currentAct['naam'] ?></h1>
            <p class="text_detail">
            <?php echo $currentAct['description1'] ?>
            </p>
        </div>
        <figure class="firstpic_detail">
          <h2 class="uur"><span class="dag"><?php echo $currentAct['dag'] ?></span> - <?php echo $currentAct['uur'] ?></h2>
          <?php if($currentAct['description2'] == ''){ ?>
            <picture class="picture_element__1">

          <source
            type="image/webp"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_100.webp 1x, assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_100@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_50.webp 1x, assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_50@2x.webp 2x"
          />

          <source
            type="image/jpg"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_100.jpg 1x, assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_100@2x.jpg 2x"
          />
          <source
            type="image/jpg"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_50.jpg 1x, assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_50@2x.jpg 2x"
          />

          <img src="assets/img/voorstellingen/thumbnails/<?php echo $currentAct['classname'] ?>/<?php echo $currentAct['classname'] ?>_50.jpg" width="100" alt="Meer info over <?php echo $currentAct['naam'] ?>" class="firstpic_detail_self_default filter_detail_img">
        </picture>
          <?php }else{ ?>
            <picture class="picture_element__1">
            <source
            type="image/webp"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_100.webp 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_100@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_50.webp 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_50@2x.webp 2x"
          />

          <source
            type="image/jpg"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_100.jpg 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_100@2x.jpg 2x"
          />
          <source
            type="image/jpg"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_50.jpg 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_50@2x.jpg 2x"
          />

            <img src="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/1_100.jpg" class="firstpic_detail_self filter_detail_img" alt="<?php echo $currentAct['classname'] ?>">
          <?php } ?>
          </picture>
        </figure>
      </article>
      <figure class="video_element bg_iframe">
        <div class="video">

          <iframe class="iframe"
          src="<?php if(!empty($currentAct['videolink'])){echo $currentAct['videolink'];}else{echo 'https://www.youtube.com/embed/9dtTj49KA3k';}?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        </div>
      </figure>
      <?php if(!empty($currentAct['description2'])): ?>
      <article class="article_secondtext">
        <div class="text_detail_div">
          <h1 class="title_detail title_2_detail">Wat je zeker moet weten over <?php echo $currentAct['naam'] ?></h1>
          <p class="text_detail"><?php echo $currentAct['description2'] ?></p>
        </div>
        <figure class="secondpic_detail">
        <picture class="picture_element__2">
            <source
            type="image/webp"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_100.webp 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_100@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_50.webp 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_50@2x.webp 2x"
          />

          <source
            type="image/jpg"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_100.jpg 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_100@2x.jpg 2x"
          />
          <source
            type="image/jpg"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_50.jpg 1x, assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_50@2x.jpg 2x"
          />

            <img src="assets/img/voorstellingen/detail/<?php echo $currentAct['classname'] ?>/2_100.jpg" class="secondpic_detail_self" alt="<?php echo $currentAct['classname'] ?>">
          </picture>
        </figure>
      </article>
      <?php endif; ?>
      <article class="act_socialmedia">
        <h1 class="social_media_act_title">Volg <?php echo $currentAct['naam'] ?> op social media</h1>
        <ul class="socialmedia_list_act">
          <li class="btn_socialmedia_act">
            <a href="https://www.facebook.com<?php if(!empty($currentAct['fblink'])){ echo $currentAct['fblink'];}?>"><img src="assets/img/socialmedia/facebook_dark.png" class="img_socialmedia_act" width="44" alt="Ga naar facebook"></a>
          </li>
          <li class="btn_socialmedia_act">
            <a href="https://www.twitter.com<?php if(!empty($currentAct['twitterlink'])){ echo $currentAct['twitterlink'];}?>"><img src="assets/img/socialmedia/twitter_dark.png" class="img_socialmedia_act" width="44" alt="Ga naar twitter"></a>
          </li>
          <li class="btn_socialmedia_act">
            <a href="https://www.instagram.com<?php if(!empty($currentAct['instalink'])){ echo $currentAct['instalink'];}?>"><img src="assets/img/socialmedia/insta_dark.png" class="img_socialmedia_act" width="44" alt="Ga naar instagram"></a>
          </li>
        </ul>
      </article>
    </section>
    <?php if($currentAct['locatie'] != `0`): ?>
    <a target="_blank" href="https://www.google.be/maps/place/Beveren/@51.2121853,4.2512353,15.77z/data=!4m5!3m4!1s0x47c38a909cb93301:0x40099ab2f4d4de0!8m2!3d51.2132494!4d4.2581649">
      <figure class="locatie_img locatie_<?php echo $currentAct['locatie']; ?>">
      </figure>
    </a>
    <?php endif; ?>
      <section class="uitgelicht">
        <h1 class="title_detail other_detail_title">Gerelateerde voorstellingen</h1>
        <ul class="uitgelicht_body">
        <?php foreach($other as $act): ?>

            <li class="uitgelicht_body__act">
            <a href="index.php?page=detail&id=<?php echo $act['id'] ?>&soort=<?php echo $act['soort'] ?>" class="voorstelling link_no_style">
              <h3 class="act__rubric">locatie 1</h3>
              <div class="act__data">
                <h2 class="act__tags"><?php echo $act['genre'] ?></h2>
                <h1 class="act__name"><?php echo $act['naam'] ?></h1>
                <h1 class="act__day">Zo 26 | 16u</h1>
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

<img src="assets/img/voorstellingen/thumbnails/<?php echo $act['classname'] ?>/<?php echo $act['classname'] ?>_50.jpg" width="100" alt="<?php echo $act['classname'] ?>" class="image_voorstelling resize_voorstelling">
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
      <form action="index.php?page=detail&id=<?php echo $currentAct['id'] ?>&soort=<?php echo $currentAct['soort']; ?>#barbecue" method="post" class="form">
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
          <form action="index.php?page=detail&id=<?php echo $currentAct['id'] ?>&soort=<?php echo $currentAct['soort']; ?>#nieuwsbrief" method="post" id="nieuwsbrief">
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
