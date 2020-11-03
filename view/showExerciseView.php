
<?php
$modelEx = new exercise();
?>
<header class="heading results">
  <section class="container">
    <a href="/"><img src="../content/img/logo.png" /></a>
  </section>
</header>

<main class="container">
  <body>
    <div class="row">
  <section class="column">
    <h1>Building</h1>
    <table class="records">
      <thead>
        <tr>
          <th>Title</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <!--boucle pour afficher contenu-->
        <?php foreach($modelEx->getByState(1) as $value): ?>
          <tr>
              <td>
              <?= $value['title']; ?>
              </td>
          <td>
              <?php if($array = question::getByIdExercises($value['idExercises'])): ?>
                  <a title="Be ready for answers" href="?controller=exercise&action=updateStateExercise&id=<?=$value['idExercises']?>&editedState=2"><i class="fa fa-comment"></i></a>
              <?php endif;?>
              <a title="Manage fields" href="?controller=exercise&action=displayExercise&id=<?=$value['idExercises']?>"><i class="fa fa-edit"></i></a>
              <a title="Destroy" data-confirm="Are You Sure ?" rel="nofollow" data-method="put" href="?controller=exercise&action=destroyExercise&id=<?= $value['idExercises']?>"><i class="fa fa-trash"></i></a>
          </td>
          </tr>
        <?php endforeach;?>
      </tbody>
    </table>
  </section>

  <section class="column">
    <h1>Answering</h1>
    <table class="records">
      <thead>
        <tr>
          <th>Title</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
      <?php foreach($modelEx->getByState(2) as $value): ?>
            <tr>
                <td>
                    <?= $value['title']; ?>
                </td>
            <td>
                <a title="Show results" href="exercises/148/results.html"><i class="fa fa-chart-bar"></i></a>
                <a title="Move to building"  href="?controller=exercise&action=updateStateExercise&id=<?=$value['idExercises']?>&editedState=1"><i class="fa fa-cube"></i></a>
                <a title="Close" href="?controller=exercise&action=updateStateExercise&id=<?=$value['idExercises']?>&editedState=3"><i class="fa fa-minus-square"></i></a>
            </td>
            </tr> 
      <?php endforeach;?>
      </tbody>
    </table>
  </section>

  <section class="column">
    <h1>Closed</h1>
    <table class="records">
      <thead>
        <tr>
          <th>Title</th>
          <th></th>
        </tr>
      </thead>

      <tbody>
          <tr>
          <?php foreach($modelEx->getByState(3) as $value): ?>
            <tr>
              <td>
                  <?= $value['title']; ?>
              </td>
            <td>
              <a title="Show results" href="exercises/148/results.html"><i class="fa fa-chart-bar"></i></a>
                <a title="Move to answering" href="?controller=exercise&action=updateStateExercise&id=<?=$value['idExercises']?>&editedState=2"><i class="fa fa-comment"></i></a>
                <a title="Destroy" data-confirm="Are You Sure ?" rel="nofollow" data-method="put" href="?controller=exercise&action=destroyExercise&id=<?= $value['idExercises']?>"><i class="fa fa-trash"></i></a>
            </tr>
          <?php endforeach;?>
          </tr>
      </tbody>
    </table>
  </section>
</div>
</main>