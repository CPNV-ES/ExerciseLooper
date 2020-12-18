<header class="heading managing">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
    <span class="exercise-label">Exercise: <span class="exercise-title"><?= $question[0]['Etitle'] ?></span></span>
  </section>
</header>

<main class="container">
  <h1>Your take</h1>

  <form method="post" action="/?controller=response&action=addResponse">
    <div class="field">
      <input type="hidden" name="fullfilmentId" value="<?= $question[0]['Fk_idExercises']?>" />
      <?php
      foreach ($question as $key) : ?>
        <label for=<?= $key['Qtitle'] ?>><?= $key['Qtitle'] ?></label>

      <?php
        if($key['type'] == 2 || $key['type'] == 3){
          ?>
          <textarea name="question[<?= $key['idQuestions'] ?>]"></textarea>
        <?php
        }
        else{
          ?>
        <input type="text" name="question[<?= $key['idQuestions'] ?>]"/>
        <?php
        }

    endforeach; 
    ?>
    </div>
    <div class="actions">
      <button id="title" type="submit">Save</button>
    </div>
  </form>
</main>