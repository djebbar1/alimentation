
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
<div class="containerApp text-center">
    <div class="container">
        <div class="row align-item-center">
            <div class="col">
             
   <header>
        <div class="col"><h1> Track calories</h1></div>
        </div>
        <div class="col-auto">
        <div class="profile"> <i class="bi bi-person"></i><?php echo $user['name']; ?> </div>
        </div>
        </div>
        
   </div>
   </header>
   
 
    <main>
        <div class="container">
        <div class="row align-item-center">
        <section class="dataUser">
        <div class="doughnut">
            <div class="col">Graphe
                 <div>
                    <canvas id="myChart"></canvas></div>
                    <div class="Kcal">1700 Kcal</div>
                </div>
            </div>
            <div class="container">
            <div class="row text-center">
                <div class="col">IMC</div>
                <div class="col"><?php echo $user['weight']; ?> kg</div>
            </div>
            </div>
                <div class="custom-shape-divider-bottom-1671195942">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
                    </svg>
                </div>
        </section>
        </div>
        </div>
        <section class="date">
                <div class="text-center py-3"><?php $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
        echo $formatter->format(time());?></div>
        </section>
        
        <section class="list">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                <div  class="food">
                <div class="titleFood"><h3> Big Mac</h3></div>
                <div class="kgFood"><p>504 kcal</p></div>
            </div>
            </div>
            </div>
            </div>
        </section>

        <section class="list">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                <div  class="food">
                <div class="titleFood"><h3> Big Mac</h3></div>
                <div class="kgFood"><p>504 kcal</p></div>
            </div>
            </div>
            </div>
            </div>
        </section>
        <section class="list">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                <div  class="food">
                <div class="titleFood"><h3> Big Mac</h3></div>
                <div class="kgFood"><p>504 kcal</p></div>
            </div>
            </div>
            </div>
            </div>
        </section>




   </main>
   <footer class="py-3">
    <div  class="text-center">
        <button class="btn btn-primary">+</button></div>
   </footer>

</div>

<?php include_once('includes/footer.php'); ?>


































