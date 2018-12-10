<?php
    class TournoiManager{

        public function __construct(){

        }

        public function createTournoi($post){

            $name = $post['consoleTournoi'];
            $console = $post['consoleTournoi'];
            $regle = $post['RegleTournoi'];
            $detail = $post['DetailTournoi'];
            $debut = $post['DateDebutTournoi'];
            $fin = $post['DateFinTournoi'];
            $dateLimite = $post['chkDateLimite'];
            $nbParts = $post['nbparts'];
            $role = $post['roleTournoi'];

            if(isset($name) AND isset($console) AND  isset($debut) AND isset($fin) 
            AND isset($nbParts) AND isset($role)){
                header('Location: ../VIEWS/USER/CreateTournoiPageJeux.php');
            }else{
                header('Location: ../VIEWS/USER/CreateTournoiPage.php?error=error');
            }
            

        }

    }
?>