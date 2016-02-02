<?php include('connexion.inc.php'); ?>
  </div>
          
          <nav class="span4">
            <h2>Menu</h2>
            
            <ul>
				<li><a href="index.php">Accueil</a></li>
				<li><a href="connexion.php">Connexion</a></li>
				<?php if($connecte==true){ // test de connection pour l'affichage de rediger article?>
                <li><a href="articles.php">Rédiger un article</a></li>
				<?php }?>
            </ul>
            
          </nav>
        </div>
        
      </div>

      <footer>
        <p>&copy; Nilsine & ULCO 2015</p>

      </footer>

    </div>

  </body>
</html>
