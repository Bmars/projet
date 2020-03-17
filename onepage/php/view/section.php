<section class="diplomes">
    <h2>diplomes</h2>
    <ul>

        <li>BEP Comptabilite</li>
        <li>Bac comptabilite</li>
    </ul>
</section>

<section class="loisirs">
    <h3>Les loisirs</h3>
    <div class="image">


        <?php

        $tableau = glob("assets/image/loisir*.png");
        $panier = ["sport", "l'informatique", "voyage"];

        foreach ($tableau as $i => $image) {
            // on parcourt un 2è tableau $panier en meme temps 
            echo
                <<<CODEHTML
     
<div>
<p>$panier[$i]</p>;
<img src="$image">
</div>
CODEHTML;
        }

        ?>
    </div>
</section>
<section class="competences">
    <h3>Les competences</h3>
    <div class="logo">

        <?php
        $tableau = glob("assets/image/img*.png");
        foreach ($tableau as $a => $image) {
            
            echo


                <<<CODEHTML
            <div>
            
            <img src="$image">
            </div>
            CODEHTML;
        }


        foreach ($tableau as $y => $image) {
        }
        ?>
    </div>
</section>
<form action="url-qui-recoit-les-infos.php" method="GET">
            <input type="text" name="nom" placeholder="entrez votre nom" required><br>
            <input type="email" name="email" placeholder="entrez votre email"required><br>
            <textarea name="message" cols="60" rows="8" maxlength="1000" placeholder="entrez votre message" required></textarea><br>
            <button type="submit">envoyer votre message</button>
        </form>
