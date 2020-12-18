<?php
require_once "model/response.php";
?>
<header class="heading results">
    <section class="container">
        <a href="/"><img src="../content/img/logo.png"/></a>
        <span class="exercise-label">Exercise: <a href="?controller=response&action=displayResults&id=<?=$modelEx->id?>"><?=$modelEx->title?></a></span>
    </section>
</header>

<main class="container">
    <body>
    <div class="row">
        <section class="c1">
            <dl class="answer">
                <h1><?=$modelFu['date']?></h1>
                <?php foreach ($modelQu as $value):?>
                <dt><?=$value->title?></dt>
                <dd><?=response::getByFks($value->id,$modelFu['idFullfilment'])['content'];?></dd>
                <?php endforeach;?>
            </dl>
        </section>
    </div>
</main>