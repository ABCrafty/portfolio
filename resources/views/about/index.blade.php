@extends('layouts.app')

@section('content')
<div class="presentation" data-paroller-factor="0.05">
    <h3>A propos</h3>
    <div class="profile-text">
        <div class="current-path">
            <div class="profile">
                <img src="images/profiltest2.png" alt="">
            </div>
            <p>
                Qui suis-je ?
            </p>
            <p>
                Je suis un développeur web junior issu de la 3wAcademy, où j'ai pu apprendre et
                aiguiser mes compétences puis valider un titre RNCP Niveau III (bac +2). Ayant été
                attiré par le web depuis très longtemps, avoir la chance de pouvoir y contribuer
                est une opportunité excitante et passionnante, bien que je n'aie encore qu'effleuré
                le potentiel des différents langages ; ce qui rend l'aventure d'autant plus excitante,
                car plus je creuse dans les technologies que j'ai appris et que je continue d'aiguiser
                (à l'image de jQuery, Laravel ou encore AngularJS), plus j'aime mon métier !</p>
            <p>
                Si vous vous demandez quel est mon projet à court terme, c'est travailler et mettre en pratique ce
                que j'apprends. Si vous vous demandez de ce que je veux faire à moyen/long terme, c'est
                devenir développeur full-stack avec la maîtrise complète d'un ou plusieurs framework,
                autant front que back, travailler sur des applications et des projets web excitants
                afin de mener à bien ma vie professionnelle et mes projets personnels.
            </p>
        </div>

        <button class="blue-button know-more">Mon ancien parcours</button>

        <div class="old-path">
            <p>
                Vous êtes donc curieux ! Eh bien j'ai été beaucoup de choses avant d'être développeur.
                Je travaillais depuis 2009 où j'étais agent de propreté pendant les vacances quand
                j'étais encore au lycée pour passer un bac littéraire. Comment ça du nettoyage et un bac
                littéraire ? Mais ça n'a rien à voir avec le développement web ! En effet, à l'époque je
                souhaitais devenir scénariste (oui encore rien à voir) et travaillais pour me mettre de
                l'argent de côté afin de réaliser mes rêves.
            </p>
            <p>
                C'est ainsi que j'ai enchaîné les jobs, une partie de mon parcours dont je suis plutôt fier
                car il m'a forgé l'esprit et fait gagner en maturité. Écrire des scénarios a également été
                une expérience enrichissante, principalement pour les personnes que j'ai pu rencontrer,
                parmi lesquelles l'association Kippon Dream dont,je suis à présent le responsable de l'équipe web.
                La perspective d'être scénariste ne m'a cependant pas plu, car c'est un milieu précaire
                et très instable.
            <p>
                Ensuite j'ai commencé à être employé de vie scolaire dans un collège,
                un métier gratifiant bien que difficile qui a lui aussi été une très bonne expérience,
                j'ai pu apprendre beaucoup de choses ; et c'est au terme de ce travail que j'ai commencé
                à devenir développeur web. Maintenant vous savez tout sur mon parcours !
            </p>
        </div>
    </div>
</div>



    @endcontent