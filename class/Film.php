<!--film.php-->
<?php
class Film{
private $id;
private $titre;
private $genre;
private $duree;
private $date_sortie;
private $realisateur;




public function   __construct($id = 0,$titre = 'k',$genre = 'k',$duree = 'k',$date_sortie = 'k',$realisateur = 'k'){
  $this->id = $id ;
  $this->titre = $titre ;
  $this->genre = $genre ;
  $this->duree = $duree ;
  $this->date_sortie = $date_sortie ;
  $this->realisateur = $realisateur ;
}

public function afficherFilm(){
    echo $this ->id."</br>";
    echo $this ->titre."</br>";
    echo $this ->genre."</br>";
    echo $this ->duree."</br>";
    echo $this ->date_sortie."</br>";
    echo $this ->realisateur."</br>";
}
public function getId(){
    return $this->id;
}

public function ajouterFilm(){}
public function modifierFilm(){}
public function supprimerFilm(){}


}