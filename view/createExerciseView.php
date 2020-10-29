<header class="heading managing">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
    <span class="exercise-label">New exercise</span>
  </section>
</header>

<main class="container">
    <h1>New Exercise</h1>

<form method="post" action="/?controller=exercise&action=newExercise">
  <div class="field">
    <label for="exercise_title">Title</label>
    <input type="text" name="exercise[title]" id="exercise_title" />
  </div>
  <div class="actions">
    <!--<input type="submit" name="commit" value="Create Exercise" data-disable-with="Create Exercise" />-->
      <button id="title" type="submit">Create Exercise</button>
    </form>
  </div>
</form>
</main>
