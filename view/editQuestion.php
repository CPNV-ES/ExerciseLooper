<header class="heading managing">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
    <span class="exercise-label">New exercise</span>
  </section>
</header>

<main class="container">
    <h1>Edit question</h1>

<form method="post" action="/?controller=question&action=editQuestion&id=<?=$q->id?>&exId =<?=$q->FK_idExercises?>">
  <div class="field">
    <label for="question_title">Title</label>
    <input type="text" name="question[title]" id="question_title" value="<?=$q->title?>" />
  </div>
  <div class="field">
          <label for="field_value_kind">Value kind</label>
          <select name="field[value_kind]" id="field_value_kind">
            <option selected="selected" value="single_line">Single line text</option>
            <option value="single_line_list">List of single lines</option>
            <option value="multi_line">Multi-line text</option>
          </select>
        </div>
  <div class="actions">
    <!--<input type="submit" name="commit" value="Create Exercise" data-disable-with="Create Exercise" />-->
      <button id="title" type="submit">Save</button>
    </form>
  </div>
</form>
</main>
