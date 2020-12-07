<header class="heading managing">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
    <span class="exercise-label">New exercise</span>
  </section>
</header>
<main class="container">
  <div class="row">
    <section class="column">
      <h1>Fields</h1>
      <table class="records">
        <thead>
          <tr>
            <th>Label</th>
            <th>Value kind</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <!-- Affichage de la liste des questions dans l'exercice -->
          <?php
          $data = "";
          if (isset($_SESSION['questions'])) {

            foreach ($_SESSION['questions'] as $val) : ?>
              <tr>
                <td>
                  <p><?= $val->title ?></p>
                </td>
                <td>
                  <p><?= $val->type ?></p>
                </td>
                <td><a class='fa fa-edit' href='/?controller=question&action=getQuestion&id=<?=$val->id?>'></a> <a class='fa fa-trash' href='/?controller=question&action=deleteQuestion&id=<?= $val->id ?>'></a></td>
              </tr>
          <?php endforeach;

            $_SESSION['questions'] = null;
          }
          ?>

          
        </tbody>
      </table>
      <a data-confirm="Are you sure? You won&#39;t be able to further edit this exercise" class="button" rel="nofollow" data-method="put" href="?controller=exercise&action=updateStateExercise&id=<?=$_SESSION['exId']?>&editedState=2"><i class="fa fa-comment"></i> Complete and be ready for answers</a>
    </section>
    <section class="column">
      <h1>New Field</h1>
      <form action="/?controller=question&action=createQuestion" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="xY6ba6Wr09iqKGfDHd0wj4PniWUUszrvYyM7HO9H346Wn1FcQp541Sa8Eu1GGZ/W1zqJAoGxg6Q93fq6/Y0+jg==" />

        <div class="field">
          <label for="field_label">Label</label>
          <input type="text" name="field[label]" id="field_label" />
        </div>

        <div class="field">
          <label for="field_value_kind">Value kind</label>
          <select name="field[value_kind]" id="field_value_kind">
            <option selected="selected" value="single_line">Single line text</option>
            <option value="single_line_list">List of single lines</option>
            <option value="multi_line">Multi-line text</option>
          </select>
        </div>
        <div class="field">
          <input type="text" name="exercise[id]" id="exercise_id" value="<?= $_SESSION['exId'] ?>" hidden />
        </div>
        <div class="actions">
          <input type="submit" name="commit" value="Create Field" data-disable-with="Create Field" />
        </div>
      </form>
    </section>
  </div>

</main>