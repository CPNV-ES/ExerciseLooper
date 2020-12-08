<?php
require_once "model/response.php";
?>
<header class="heading results">
    <section class="container">
        <a href="/"><img src="../content/img/logo.png"/></a>
        <span class="exercise-label">Exercise: <?=$modelEx->title?></span>
    </section>
</header>

<main class="container">
    <body>
    <div class="row">
        <section class="column">
            <table class="records">
                <thead>
                <tr>
                    <th>Take</th>
                    <?php foreach ($modelQu as $value): ?>
                    <th><?=$value->title?></th>
                    <?php endforeach; ?>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($modelFu as $value):?>
                <tr>
                    <td><a href="?controller=fullfilment&action=showFullfilment&id=<?=$value->id?>"><?=$value->date ?></a></td>
                    <?php foreach (response::getByIdFullfilment($value->id) as $key):?>
                        <?php if(strlen($key->content)==0):?>
                            <td class="answer"><i class="fa fa-times empty"></i></td>
                        <?php elseif (strlen($key->content)<21):?>
                            <td class="answer"><i class="fa fa-check short"></i></td>
                        <?php else:?>
                            <td class="answer"><i class="fa fa-check-circle"></i></td>
                        <?php endif;?>
                    <?php endforeach; ?>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</main>