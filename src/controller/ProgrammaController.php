<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProgrammaDAO.php';
require_once __DIR__ . '/../dao/BarbecueDAO.php';
require_once __DIR__ . '/../dao/NieuwsbriefDAO.php';

class ProgrammaController extends Controller {

  private $programmaDAO;
  private $barbecueDAO;
  private $nieuwsbriefDAO;

  function __construct() {
    $this->programmaDAO = new ProgrammaDAO();
    $this->barbecueDAO = new BarbecueDAO();
    $this->nieuwsbriefDAO = new NieuwsbriefDAO();
  }

  public function index() {
    $uitgelicht = $this->programmaDAO->selectUitgelicht();
    $this->set('uitgelicht', $uitgelicht);

    $duo = $this->programmaDAO->selectDuoMusa();
    $this->set('duo', $duo);

    $this->_handleForms();
  }

  public function programma() {
    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
        $acts = $this->programmaDAO->filter($_GET['locatie'], $_GET['soort'], $_GET['dag']);
    }else{
      $acts = $this->programmaDAO->filter();
    }

    $this->set('acts', $acts);

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($acts);
      exit();
    }

    $this->_handleForms();
  }

  public function detail() {
    $currentAct = $this->programmaDAO->selectById($_GET['id']);
    $this->set('currentAct', $currentAct);

    $other = $this->programmaDAO->selectOther($_GET['soort']);
    $this->set('other', $other);

    $this->_handleForms();
  }

  private function _handleForms(){
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'sendBarbecue') {
        $this->handleInsertBarbecue();
      }
    }

    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'sendNieuwsbrief') {
        $this->handleInsertNieuwsbrief();
      }
    }
  }

  private function handleInsertBarbecue(){
    $data = array_merge($_POST, array(
      'voornaam' => $_POST['voornaam'],
      'naam' => $_POST['naam'],
      'email' => $_POST['email'],
      'personen' => $_POST['personen']
    ));
    if($this->barbecueDAO->insert($data)) {
      $_SESSION['info_long'] = 'Bedankt voor het inschrijven. TOT OP DE BARBECUE!';
      header('Location: index.php');
      exit();
    } else {
      $_SESSION['error'] = 'Oeps, u heeft ongeldige gegevens ingevuld';
      $this->set('errors', $this->barbecueDAO->validate($data));
    }
  }

  private function handleInsertNieuwsbrief(){
    $data = array_merge($_POST, array(
      'email' => $_POST['email']
    ));
    if($this->nieuwsbriefDAO->insert($data)) {
      $_SESSION['info_long'] = 'Bedankt voor het inschrijven op onze nieuwsbrief, Check uw mailbox!';
      header('Location: index.php');
      exit();
    } else {
      $_SESSION['error'] = 'Oeps, u heeft ongeldige gegevens ingevuld';
      $this->set('errors', $this->nieuwsbriefDAO->validate($data));
    }
  }
}
