<?php
ob_start();
?>
    <header class="dashboard">
        <section class="container">
            <p><img src="../content/img/logo.png" /></p>
            <h1>Exercise<br>Looper</h1>
        </section>
    </header>
    <div class="container dashboard">
        <section class="row">
            <div class="column">
                <a class="button answering column" href="exercises/answering.html">Take an exercise</a>
            </div>
            <div class="column">
                <a class="button managing column" href="exercises/new.html">Create an exercise</a>
            </div>
            <div class="column">
                <a class="button results column" href="exercises.html">Manage an exercise</a>
            </div>
        </section>
    </div>
<?php
$content = ob_get_clean();
require "template.php";
