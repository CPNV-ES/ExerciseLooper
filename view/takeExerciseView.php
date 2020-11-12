<header class="heading answering">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
    
  </section>
</header>

<main class="container"> 
<ul class="ansering-list"> 
  <?php foreach($modelEx->getByState(1) as $value) {?>
    <li class="row">
      <div class="column card">
        <div class="title"> <?php echo($value['title']);?></div>
        <a class="button" href="148/fulfillments/new.html">Take it</a>
      </div>
    </li>
</ul>
  <?php }?>
</main>
