

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    


    

<?php

// Définition de la classe principale Vetements

 class  Vetements {
    private int $id;
    public string $nom;
    public string $categorie;
    public float $prix;
    public float $solde = 30 ;
  
// Constructeur de la classe pour initialiser les propriétés
    public function __construct(int $id, string $nom,  string $categorie,float $prix  )
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->prix = $prix;
       
        
    }

  
    // Retire un montant du solde en vérifiant la disponibilité des fonds
    
    public function calculerPrixSolde(): float {
        return $this->prix - ($this->prix * ($this->solde / 100));
    }
    

   

    public function afficherDetails(): string {
        return  
               "<br>ID : {$this->id} <br>
                Nom : {$this->nom} <br>
                Catégorie : {$this->categorie} <br> 
                Prix : {$this->prix}€💰 <br>
                <div class='sold'> Solde de 30% : " . 
                round($this->calculerPrixSolde(), 2)   . "€💰</div>" ; 
               
    }
    

 }
// Définition des classes enfant  pour chaque type de vêtement
 class vetementFemme extends Vetements
 {
     public function afficherDetails():string
     {
        return "<div class='carte'><img src='https://images-na.ssl-images-amazon.com/images/I/71%2BcjlrRB3L._AC_UL1500_.jpg' alt=''><br> 🙍‍♀️ Vetement Femme :  <br>" . parent::afficherDetails() . "<br></div>"; // on appelle  la methode du parent
     }
 }
 class vetementHomme extends Vetements
 {
     public function afficherDetails():string
     {                           
        return "<div class='carte'><img src='https://lechemiseur.fr/data/lechemiseur/pantalon/multi-2.jpg' alt=''><br> 🧑‍💼 Vetement Homme :  <br>" . parent::afficherDetails() . "<br></div>";  
     }
 }


 class vetementEnfant extends Vetements
 {
     public function afficherDetails():string
     {
        return "<div class='carte'><img  src='https://www.happyfete.com/images/tres-grand/d/h/p/Deguisement-hippie-pour-garcon-motifs-tie-and-dye.jpg' alt=''><br>🙍Vetement Enfant :  <br>" . parent::afficherDetails() . "<br></div>";
     }
 }




 // Création et affichage des objets

$vetement1 = new vetementFemme(1, "Robe en  coton", "Femme", 27.99);
echo $vetement1->afficherDetails();

$vetement3= new vetementHomme(2, "Pantalon ", "Homme", 16.99);
echo $vetement3->afficherDetails();

$vetement3= new vetementEnfant(3, "Déguisement hippie garçon ", "Enfant", 49.99);

// echo $vetement3->afficherDetails();



// prenser à mettre les propriétés en protected et pas en public
// pas de getter et setter

// 17/20









?>
    
    </body>
   </html>