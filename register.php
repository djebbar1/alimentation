
<?php

    $page=[
        "title" => "alimentation - login"
    ];


    include_once('includes/header.php');

?>
<header>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Register Page</h1>
            </div>
        </div>
    </div>
</header>
<main>
<form>
  <div class="mb-3">
    <label for="firstName" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="firstName">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Prénom</label>
    <input type="password" class="form-control" id="password" require>
  </div>
  <div class="mb-3">
    <label for="Age" class="form-label">Age</label>
    <input type="number" class="form-control" id="Age">
  </div>

    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
        <option selected>Open this select menu</option>
        <option value="1">Homme</option>
        <option value="2">Femme</option>
        <option value="3">Non binaire</option>
    </select>
  <div class="mb-3 form-check">

  <div class="mb-3">
    <label for="Size" class="form-label">Taille</label>
    <input type="range"  class="form-range" min="0" max="230" value="0" step="10" oninput="rangchang(this.value)" id="taille">
        <div class="value">
        <div></div>
    </div>
  </div>
  <div class="mb-3">
    <label for="Weight" class="form-label">Poids</label>
    <input type="range"  class="form-range" min="0" max="230" value="0" step="10" oninput="rangchang(this.value)" id="Weight">
        <div class="value">
        <div></div>
    </div>

  </div>


    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
<button type="submit" class="btn btn-primary"><a href="login.php">Login</a>
</button>

</main>
<footer></footer>
<?php

include_once('includes/footer.php');

?>