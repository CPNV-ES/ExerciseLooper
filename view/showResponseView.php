<?php
require_once "model/response.php";
?>
<header class="heading results">
    <section class="container">
        <a href="/"><img src="../content/img/logo.png"/></a>
        <span class="exercise-label">Exercise: <a href="?controller=response&action=displayResults&id=<?=$modelEx['idExercises']?>"><?=$modelEx['title']?></a></span>
    </section>
</header>

<main class="container">
    <body>
    <div class="row">
        <section class="column">
            <table>
                <thead>
                <tr>
                    <th>Take</th>
                    <th>Content</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($modelFu as $value):?>
                    <tr>
                        <td><a href="?controller=fullfilment&action=showFullfilment&id=<?=$value['idFullfilment']?>"><?=$value['date']?></a></td>
                        <td><?=$value['content']?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</main>