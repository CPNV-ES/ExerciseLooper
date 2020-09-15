<?php
ob_start();
?>
<header class="heading answering">
  <section class="container">
    <a href="../index.php"><img src="../content/img/logo.png" /></a>
    
  </section>
</header>

<main class="container"> 
<?php 
/*
//exemple à faire dans une boucle
<ul class="ansering-list">
    <li class="row">
      <div class="column card">
        <div class="title">ewrwe</div>
        <a class="button" href="148/fulfillments/new.html">Take it</a>
      </div>
    </li>
</ul>
*/?>
<ul class="ansering-list">
    <li class="row">
      <div class="column card">
        <div class="title">ewrwe</div>
        <a class="button" href="148/fulfillments/new.html">Take it</a>
      </div>
    </li>
</ul>
</main>
<?php
$content = ob_get_clean();
require "template.php";
?>
