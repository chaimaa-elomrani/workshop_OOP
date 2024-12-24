<!-- class utilisateur -->
 <?php 

 class utilisateur {
    public $nom;
    public $prenom;
    public $type_utilisateur;

    public function afficherNomComplet (){
        return $this -> prenom." ".$this -> nom;
    }
     
    public function changerNom($nouveauNom){
        $this -> $nouveauNom;
    }
 }

$utilisateur = new Utilisateur();
$utilisateur->nom = "elomrani";
$utilisateur->prenom = "chaimaâ";
$utilisateur->type_utilisateur = "Patient";

echo $utilisateur->afficherNomComplet(); 

class Patient extends Utilisateur {
    public $rendez_vous;

    public function prendreRendezVous($date) {
        $this->rendez_vous = $date;
    }
}

class Medecin extends Utilisateur {
    public $specialite;

    public function consulterPatient($patient) {
        return "Le Dr. " . $this->nom . " a consulté " . $patient->afficherNomComplet();
    }
}

$patient = new Patient();
$patient->nom = "ayoub";
$patient->prenom = "laanani";
$patient->prendreRendezVous("2024-12-27");

$medecin = new Medecin();
$medecin->nom = "malak";
$medecin->prenom = "elomrani";
$medecin->specialite = "Anéstésiste";

echo $medecin->consulterPatient($patient);

