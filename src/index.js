require('./style.css');

{
  let previousTarget = ``;
  let fromNow = false;

  const $filterForm = document.querySelector(`.filter__form`);
  const $locatie = document.querySelector(`.locatie`);
  const $soort = document.querySelector(`.soort`);
  const $dag = document.querySelectorAll(`.option_day`);
  const $acts = document.querySelector(`.overzicht`);
  const $programma = document.querySelector(`.title_programma`);
  const $index = document.querySelector(`.index`);

  const init = () => {
    //FORM VALIDATION
    const $forms = document.querySelectorAll(`form`);
    const allForms = Array.from($forms);
    allForms.forEach(form => {
      form.noValidate = true;

      const $antiFields = document.querySelector(`.anti-field`);

      /* voegt een required toe aan alle input velden */
      const $inputs = document.querySelectorAll(`.inputfield_form`);
      const $allInputs = Array.from($inputs);
      $allInputs.map(input => {
        input.required = true;
      });

      if (!$antiFields) {
        form.addEventListener(`submit`, handleSubmitForm);
        addValidationListeners(Array.from(form.elements));
      }
    });

    //PAGE FUNCTIONALITIES
    if ($index) {
      hoverIntroButtons();
    }

    if ($programma) {
      const $filterSection = document.querySelector(`.filter`);
      const $filterBtn = document.querySelector(`.filterbtn`);
      const $selects = document.querySelector(`.select_fields_pe`);
      $selects.classList.remove(`select_fields_pe`);
      $selects.classList.add(`select_fields`);

      const $filterContent = document.querySelector(`.filter_content`);
      const $figure = document.createElement(`figure`);
      $filterContent.insertBefore($figure, $filterContent.firstChild);
      $figure.classList.add(`progress`);
      const $div = document.createElement(`div`);
      $figure.appendChild($div);
      $div.classList.add(`progress_fill`);

      $filterSection.removeChild($filterBtn);

      if ($locatie) {
        $locatie.addEventListener(`input`, handleSubmitFilterForm);
      }

      if ($soort) {
        $soort.addEventListener(`input`, handleSubmitFilterForm);
      }

      const $locations = document.querySelectorAll(`.act__rubric`);
      const allLocations = Array.from($locations);
      allLocations.forEach(locatie => {
        if (locatie.textContent === `Locatie 0`) {
          locatie.textContent = `Mobiel`;
        }
      });

      const $alleDagen = Array.from($dag);
      $alleDagen.forEach(dag => {
        dag.classList.add(`select_dag_margin_top`);
        dag.addEventListener(`click`, handleClickDay);
      });

      if ($figure) {
        window.addEventListener(`scroll`, progressBar);
      }
    }

    hoverSubmitButtons();
    hover();
  };

  const showValidationErrors = $field => {
    let message;
    //Ingevuld of niet
    if ($field.validity.valueMissing) {
      message = '*Dit veld is verplicht';
    }

    //Juiste type?
    if ($field.validity.typeMismatch) {
      message = 'Oei, je hebt precies iets fout ingevuld';
    }

    //Te groot getal
    if ($field.validity.rangeOverflow || $field.validity.rangeUnderflow) {
      message =
        'Er zijn minstens 2 personen & Maximum 10 personen toegestaan per inschrijving';
    }

    //Boodschap tonen
    if (message) {
      $field.classList.add(`form_error`);
      $field.classList.remove(`form_succes`);
      $field.parentElement.querySelector(`.error`).innerHTML = message;
    } else {
      $field.classList.remove(`form_error`);
      $field.classList.add(`form_succes`);
    }
  };

  const addValidationListeners = formelements => {
    formelements.forEach($field => {
      $field.addEventListener(`blur`, handleBlurField);
      $field.addEventListener(`input`, handleInputField);
    });
  };

  const handleBlurField = e => {
    console.log(e);

    showValidationErrors(e.currentTarget);
  };

  const handleInputField = e => {
    const $field = e.currentTarget;

    if ($field.required === true) {
      if ($field.checkValidity()) {
        $field.classList.add(`form_succes`);
        $field.parentElement.querySelector(`.error`).textContent = ``;
      } else {
        $field.classList.remove(`form_succes`);
        $field.classList.add(`form_error`);
      }
    }
  };

  const handleSubmitForm = e => {
    const $form = e.currentTarget;

    if (!$form.checkValidity()) {
      Array.from($form.elements).forEach($element => {
        showValidationErrors($element);
      });
      document.querySelector(
        `.error_barbecue`
      ).textContent = `*Oeps, nog iets vergeten...`;
      e.preventDefault(); //versturen tegenhouden
    } else {
      document.querySelector(`.error_barbecue`).textContent = ``;
    }
  };

  //FUNCTIONALITIES
  const progressBar = () => {
    const $progressBar = document.querySelector(`.progress_fill`);
    const $filter = document.querySelector(`.filter_content`);
    const progressBarProperties = $filter.getBoundingClientRect();
    const progressBarY = progressBarProperties.y;
    const $overzicht = document.querySelector(`.overzicht_articl`);
    const overzichtProperties = $overzicht.getBoundingClientRect();
    const overzichtHeight = overzichtProperties.height;

    const winScroll =
      document.body.scrollTop ||
      document.documentElement.scrollTop - progressBarY;
    const height = overzichtHeight;

    $progressBar.style.width = `${(winScroll / height) * 100}%`;
  };

  const hoverIntroButtons = () => {
    const $btn = document.querySelectorAll(`.btn_intro`);
    const $btns = Array.from($btn);
    $btns.forEach(btn => {
      btn.addEventListener(`mouseover`, handleHoverBtn);
      btn.addEventListener(`mouseout`, handleOutBtn);
    });
  };

  const hoverSubmitButtons = () => {
    const $btn = document.querySelectorAll(`.inschrijven`);
    const $btns = Array.from($btn);
    $btns.forEach(btn => {
      btn.addEventListener(`mouseover`, handleHoverSubmitBtn);
      btn.addEventListener(`mouseout`, handleOutSubmitBtn);
    });
  };

  const handleHoverSubmitBtn = e => {
    e.currentTarget.classList.add(`active_submit_btn`);
  };

  const handleOutSubmitBtn = e => {
    e.currentTarget.classList.remove(`active_submit_btn`);
  };

  const handleHoverBtn = e => {
    e.currentTarget.classList.add(`active_btn`);
  };

  const handleOutBtn = e => {
    e.currentTarget.classList.remove(`active_btn`);
  };

  const hover = () => {
    const $voorstellingen = document.querySelectorAll(`.uitgelicht_body__act`);
    const alleVoorstellingen = Array.from($voorstellingen);
    alleVoorstellingen.forEach(voorstelling => {
      voorstelling.addEventListener(`mouseover`, handleHoverVoorstelling);
      voorstelling.addEventListener(`mouseout`, handleOutVoorstelling);
    });
  };

  const handleHoverVoorstelling = e => {
    const $img = e.currentTarget.querySelector(`.image_voorstelling`);

    $img.classList.add(`resize_voorstelling`);
    $img.classList.remove(`resize_voorstelling_out`);

    e.currentTarget.classList.add(`resize_tile`);
    e.currentTarget.classList.remove(`resize_tile_out`);
  };

  const handleOutVoorstelling = e => {
    const $img = e.currentTarget.querySelector(`.image_voorstelling`);
    $img.classList.remove(`resize_voorstelling`);
    $img.classList.add(`resize_voorstelling_out`);

    e.currentTarget.classList.remove(`resize_tile`);
    e.currentTarget.classList.add(`resize_tile_out`);
  };

  //FILTER JS
  const handleLoadActs = data => {
    $acts.innerHTML = data.map(act => createActListItem(act)).join(``);
    hover();
  };

  const handleClickDay = e => {
    if (fromNow) {
      previousTarget.classList.remove(`active`);
    } else {
      const $active = document.querySelector(`.active`);
      $active.classList.remove(`active`);
    }

    e.currentTarget.classList.add(`active`);

    //uitschakelen van de vorig gehighlighte dag
    fromNow = true;
    previousTarget = e.currentTarget;

    const relatedInput = e.currentTarget.nextSibling.nextSibling;

    relatedInput.addEventListener(`input`, handleSubmitFilterForm);
  };

  const createActListItem = act => {
    let locatie = parseInt(act.locatie);

    if (locatie === `0`) {
      locatie = `Mobiel`;
    }
    return ` <li class="uitgelicht_body__act">
    <a href="index.php?page=detail&amp;id=${act.id}&soort=${
  act.soort
}" class="background_image_voorstelling link_no_style voorstelling">
      <h3 class="act__rubric">Locatie ${locatie}</h3>
      <div class="act__data">
        <h2 class="act__tags">${act.soort}</h2>
        <h1 class="act__name">${act.naam}</h1>
        <h1 class="act__day">${act.dag} | ${act.uur}</h1>
       </div>
       <picture>

          <source
            type="image/webp"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_100.webp 1x, assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_100@2x.webp 2x"
          />
          <source
            type="image/webp"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_50.webp 1x, assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_50@2x.webp 2x"
          />

          <source
            type="image/jpg"
            media="(min-width: 62em)"
            srcset="assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_100.jpg 1x, assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_100@2x.jpg 2x"
          />
          <source
            type="image/jpg"
            media="(min-width: 48em)"
            srcset="assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_50.jpg 1x, assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_50@2x.jpg 2x"
          />

          <img src="assets/img/voorstellingen/thumbnails/${act.classname}/${
  act.classname
}_50.jpg" width="100" alt="Meer info over ${
  act.classname
}" class="image_voorstelling resize_voorstelling">
        </picture>
     </a>
   </li>`;
  };

  const handleSubmitFilterForm = e => {
    e.preventDefault();
    const qs = new URLSearchParams([
      ...new FormData($filterForm).entries()
    ]).toString();
    fetch(`${$filterForm.getAttribute('action')}?${qs}`, {
      headers: new Headers({
        Accept: `application/json`
      }),
      method: 'get'
    })
      .then(r => r.json())
      .then(data => handleLoadActs(data));
    window.history.pushState(
      {},
      '',
      `${window.location.href.split('?')[0]}?${qs}`,
      console.log(qs)
    );
  };

  init();
}
