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
                <tr>
                    <td><a href="/exercises/146/fulfillments/97">2020-08-25 09:01:22 UTC</a></td>
                </tr>
                <tr>
                    <td><a href="/exercises/146/fulfillments/98">2020-08-25 09:02:12 UTC</a></td>
                </tr>
                </tbody>
            </table>
        </section>
    </div>
</main>