<!DOCTYPE html>
<html>
  <head lang="fr_FR">
    <meta charset="utf-8">
    <title> Céline DESBOIS</title>
    <link rel="stylesheet" href="portfolio.css"/>
    <!-- <link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,700italic,700' rel='stylesheet' type='text/css'> -->
    <script type="text/javascript" src="scripts-base.js"></script>

    </script>
  </head>
  <body id="body">

<!-- Header : photo avec nom et prénom-->

    <header>
      <div id="photo">
        <div id="nom"> <span>Céline</span><strong> DESBOIS </strong>
          <br/>
          Développeuse Web Junior
        </div>
      </div>
    </header>
    <div id="presentation">
    </div>

<!-- Bloc menu -->

<section id="menu">
  <ul>
    <a href="#bande_annonce"><li id="ba"> BANDE ANNONCE </li></a>
    <a href="#bloc_sypnosis"><li id="sypnosis"> SYPNOSIS </li></a>
    <a href="#bloc_univers"><li id="mon_univers"> MON UNIVERS </li></a>
    <li id="just_for_fans"> JUST FOR FANS
    <ul>
      <a href="#bloc_jff"><li> Partie 1 </li></a>
      <a href="#bloc_jff2"><li> Partie 2 </li></a>
    </ul>
  </li>
    <a href="#bloc_plus"><li id="plus"> CONTACT </li>
  </ul>

</section>

<!-- Bloc vidéo bande annonce -->

    <section id="bande_annonce">
      <article id="bandeannonce">
        <video width="900vw" height="500vh" controls>
          <source src="divergente3.mp4" type="video/mp4">
        </video>
      </article>
      <div id="arrow">
          <div class="flechehaut">
            <a href="#body"><img class="arrowhaut" src="img/arrowhaut.svg"alt="Image"/></a>
          </div>
          <div class="flechehaut">
            <a href="#bloc_sypnosis"><img class="arrowbas" src="img/arrowbas.svg"alt="Image"/></a>
          </div>
      </div>
    </section>

<!-- Bloc sypnosis : présentation -->

    <section id="bloc_sypnosis">
          <article id="syptitre"> SYPNOSIS
          </article>
        <article class="bloc">

        <div class="sousbloc">
          <article id="syptexte">
          </article>
        </div>
          <div class="arrow">
              <div class="flechehaut">
                <a href="#bande_annonce"><img class="arrowhaut" src="img/arrowhaut.svg"alt="Image"/></a>
              </div>
              <div class="flechehaut">
                <a href="#bloc_univers"><img class="arrowbas" src="img/arrowbas.svg"alt="Image"/></a>
              </div>
          </div>
        </article>

    </section>

<!-- Bloc Univers du code -->

    <section id="bloc_univers">
        <article id="universtitre"> MON UNIVERS
        </article>
      <article class="bloc">

      <div class="sousbloc">
        <article id="universtexte">
        </article>
      </div>
        <div class="arrow">
          <div class="flechehaut">
            <a href="#bloc_sypnosis"><img class="arrowhaut" src="img/arrowhaut.svg"alt="Image"/>
          </div>
        <div class="flechehaut">
            <a href="#bloc_jff"><img class="arrowbas" src="img/arrowbas.svg"alt="Image"/>
        </div>
      </div>
    </article>

</section>

<!-- Partie 1 -->

    <section id="bloc_jff">

      <article class="jff">

        <article id="ligne_1">
            <a href="http://htmlpreview.github.io/?https://raw.githubusercontent.com/simplon-celineD/rendu1/master/airbnb.html"><div id="airbnb">
            </div></a>
            <div class="texte">
              <p class="txt"> </p>
            </div>
        </article>


        <article id="ligne_2">
            <a href="http://htmlpreview.github.io/?https://raw.githubusercontent.com/simplon-celineD/rendu1/master/maquettevilles.html"><div id="maquette">
            </div></a>
            <div class="texte">
              <p class="txt"> </p>
            </div>
        </article>

      </article>

      <article class="arrow1">
          <div class="flechehaut">
            <a href="#bloc_univers"><img class="arrowhaut" src="img/arrowhaut.svg"alt="Image"/>
            </div>
          <div class="flechehaut">
            <a href="#bloc_jff2"><img class="arrowbas" src="img/arrowbas.svg"alt="Image"/>
          </div>
      </article>
    </section>

    <!-- Partie 2 -->

        <section id="bloc_jff2">

          <article class="jff">

            <article id="ligne_3">
                <a href="http://htmlpreview.github.io/?https://raw.githubusercontent.com/simplon-celineD/rendu1/master/maquette_4colonne.html"><div id="maquette_4">
                </div></a>
                <div class="texte">
                  <p class="txt"> </p>
                </div>
            </article>


            <article id="ligne_4">
                <a href="#"><div id="acme">
                </div></a>
                <div class="texte">
                  <p class="txt"> </p>
                </div>
            </article>

          </article>

          <article class="arrow1">
              <div class="flechehaut">
                <a href="#bloc_jff"><img class="arrowhaut" src="img/arrowhaut.svg"alt="Image"/>
                </div>
              <div class="flechehaut">
                <a href="#bloc_plus"><img class="arrowbas" src="img/arrowbas.svg"alt="Image"/>
              </div>
          </article>

        </section>

<!-- Ca vous a plu ? Contactez moi ;) -->
        <section id="bloc_plus">
          <article id="jff">
            <article id="contact">
              <div id="coordonnees">

                <div id="ville">
                    <img id="imgville" src="img/target.svg"alt="Image"/>
                    <p class="paragraphe"> Lyon, FRANCE </p>
                </div>

                <div id="tel">
                  <img id="imgville" src="img/tel.svg"alt="Image"/>
                  <p class="paragraphe"> 06-98-92-77-25 </p>
                </div>

                <div id="mail">
                  <img id="imgville" src="img/arobase.svg"alt="Image"/>
                  <p class="paragraphe">celinedesbois.cd@gmail.com </p>
                </div>

              </div>
            </article>

            <article id="formulaire">
              <form action="result.php" method="POST">
                  <input type="text" name="name" id="name" placeholder="Votre Nom ..."/>
                  <br/>
                  <input type="text" name="forname" id="forname" placeholder="Votre Prenom ..."/>
                  <br/>
                  <input type="email" name="email" id="email" placeholder="Votre adresse mail ..."/>
                  <br/>
                  <textarea type="text" name="textarea" id="textarea"> Votre Message ... </textarea>
                  <br/>
                  <input type="submit" id="bouton">  </input>
              </form>
            </article>

          </article>

          <article id="arrow2">
              <div class="flechehaut">
                <a href="#bloc_jff2"><img class="arrowhaut" src="img/arrowhaut.svg"alt="Image"/>
                </div>
              <!-- <div class="flechehaut">
                <a href="#retour"><img class="arrowbas" src="arrowbas.svg"alt="Image"/>
              </div> -->
          </article>

        </section>
<!-- Footer -->

    <a href="#body"><section id="retour"> RETOUR EN HAUT </section></a>
    <footer>

        <article id="reseaux">
            <div id="github">
              <a href="https://github.com/simplon-celineD"><img src="img/githubbleu.svg"alt="Image" onmouseover="javascript:this.src='img/githubgris.svg';" onmouseout="javascript:this.src='img/githubbleu.svg';"/></a>
            </div>
            <div id="linkedin">
              <a href="https://fr.linkedin.com/in/c%C3%A9line-desbois-0b9715bb"><img src="img/linkedinbleu.svg"alt="Image" onmouseover="javascript:this.src='img/linkedingris.svg';" onmouseout="javascript:this.src='img/linkedinbleu.svg';"/></a>
            </div>
            <div id="viadeo">
              <a href="http://fr.viadeo.com/fr/profile/c%C3%A9line..desbois."><img src="img/viadeobleu.svg"alt="Image" onmouseover="javascript:this.src='img/viadeogris.svg';" onmouseout="javascript:this.src='img/viadeobleu.svg';"/></a>
            </div>
            <div id="twitter">
              <a href="https://twitter.com/celine2702"><img src="img/twitterbleu.svg" alt="Image" onmouseover="javascript:this.src='img/twittergris.svg';" onmouseout="javascript:this.src='img/twitterbleu.svg';"/></a>
            </div>
        </article>

        <article id="infos">
          CELINEDESBOIS.FR / 2016 / MENTIONS LÉGALES
        </article>

    </footer>
  </body>
</html>

<!-- FlatIcon

Icones bleues :
Icone Viadeo : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone Linkedin : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone Twitter : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone GitHub : <div>Icons made by <a href="http://www.flaticon.com/authors/dave-gandy" title="Dave Gandy">Dave Gandy</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>d

Icones grises:
Icone Viadeo : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone Linkedin : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone Twitter : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone GitHub : <div>Icons made by <a href="http://www.flaticon.com/authors/dave-gandy" title="Dave Gandy">Dave Gandy</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>

Icones coordonnées:

Icone localisation "cible": <div>Icons made by <a href="http://www.flaticon.com/authors/robin-kylander" title="Robin Kylander">Robin Kylander</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone telephone : <div>Icons made by <a href="http://www.flaticon.com/authors/linh-pham" title="Linh Pham">Linh Pham</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone mail "arobase" : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>

Icones flèches:

Icone flèche haut grise originale : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
Icone flèche bas grise originale : <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
-->
