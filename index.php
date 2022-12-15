
<?php


    //Connecxion bdd

    // Un utilisateur s'est conncté

    // On stock les info du user dans  une variable

    $user= [
        "id" => 1,
        "name" => "dd",
        "Age" => 29,
        "sexe" => "homme",
        "weight" => 68,
        "size" => 175,
        "IMC" => 23.4,
        "email" => "dd@gmail.com",
        "isLogged" => true

];
    if(!$user["isLogged"]){
        header("location:login.php");
        exit;
    };

    $page=[
        "title" => "alimentation - Accueil"
    ];


    include_once('includes/header.php');

?>
<div class="container text-center">
   <header>
        <div class="title">alimrntation</div>
        
        <div class="profile"> <?php echo $user['name']; ?> </div>
   </header>

   <section class="dataUser">
    <div>Graphe</div>
    <div>IMC</div>
        <div><?php echo $user['weight']; ?> kg</div>
   </section>
   <section class="date">
        <div><?php echo date('l d M Y'); ?></div>
   </section>

   <section class="list">
    <div  class="food">
        <div class="titleFood">Big Mac</div>
        <div class="kgFood">504 kcal</div>
    </div>

   </section>
   <footer>
        <button>+</button>
   </footer>

</div>

<?php include_once('includes/footer.php'); ?>