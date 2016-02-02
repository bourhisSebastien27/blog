<?php
include('includes/connexion.inc.php');
include('includes/header.inc.php');
include('includes/verif_user.inc.php');
	$result=mysql_query("SELECT * FROM articles");
	while($data= mysql_fetch_array($result)){// on retourne les articles 1 par 1
		echo '<h3>'.$data['titre'].'</h3>';
		
	$img= dirname(__FILE__).'/data/image/'.$data['id'].'.jpg';
	if(file_exists($img))	//on test si il y a bien une image enregistré pour l'article de cette id
	{	//si oui on l'affiche
		echo '<img src="data/image/'.$data['id'].'.jpg" class= pull-left style= margin-right:10px>';
		}
		else echo"☺☻"; //sinon on affiche des caractère spéciaux
		
		echo '<p>'.nl2br(htmlspecialchars($data['contenu'])).'</p>';
		echo date("M d Y H:i",$data['date']);
		
		if($connecte==true){// si on est connecter alors on affiche les boutons
		echo '<a class ="btn btn-primary" href="articles.php?id='.$data['id'].'" value="<?php echo $id ?>"> modifier</a>';
		echo '<a class ="btn btn-primary" href="includes/supprimer_articles.php?id='.$data['id'].'" value="<?php echo $id ?>"> supprimer</a>';
			}
			
		echo '<div style="clear:both;"></div>';// utiliser pour retourner a la ligne a chaque fin d'article
			
	}
include('includes/footer.inc.php');
?>

