<header class="heading answering">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
    
  </section>
</header>

<main class="container"> 
<ul class="ansering-list"> 
  <?php foreach($modelEx->getByState(2) as $value):?>
    <li class="row">
      <div class="column card">
        <div class="title"> <?=$value['title'];?></div>
        <a class="button" href="/?controller=response&action=getResponse&id=<?=$value['idExercises']?>">Take it</a>
      </div>
    </li>
</ul>
  <?php endforeach;?>
</main>
