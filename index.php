<!--index.php-->
<?php
include 'Film.php';
    $harry_potter = new Film(8,'harr','action','hhh','kkk','iiii');
    $emptymovie = new Film();
   echo  $emptymovie->realisateur.'isEempty';
         $emptymovie->realisateur = 'pppp';

    //  $harry_potter ->afficherFilm();
     $emptymovie->afficherFilm() ;


