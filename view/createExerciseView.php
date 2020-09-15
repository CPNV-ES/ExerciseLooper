<?php
ob_start();
?>
<header class="heading managing">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
    <span class="exercise-label">New exercise</span>
  </section>
</header>

<main class="container">
    <h1>New Exercise</h1>

<form action="" method="post">
    <input name="utf8" type="hidden" value="&#x2713;" />
    <input type="hidden" name="authenticity_token" value="keQm20ZmM/t7SblAZBCZKvC8FEhcgpE1JtF5loIDSy2zqipG8iPkccVbkrN6peItMkYgegztKUoIo1rMbHtlaw==" />

  <div class="field">
    <label for="exercise_title">Title</label>
    <input type="text" name="exercise[title]" id="exercise_title" />
  </div>

  <div class="actions">
    <input type="submit" name="commit" value="Create Exercise" data-disable-with="Create Exercise" />
  </div>
</form>
</main>
<?php
$content = ob_get_clean();
require "template.php";
?>
