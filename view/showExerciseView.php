
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
        <?php
          foreach($modelEx->getByState(1) as $value)
          {?>
          <tr>
              <td>
              <?= $value['title']; ?>
              </td>
          <td>
              <a title="Manage fields" href="exercises/148/results.html"><i class="fa fa-edit"></i></a>
              <a title="Destroy" rel="nofollow" data-method="put" href="?controller=exercise&action=destroyExercise&id=<?= $value['idExercises']?>"><i class="fa fa-trash"></i></a>
          </td>
          </tr>
          <?php
          }
        ?>
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
      <?php
          foreach($modelEx->getByState(2) as $value)
          {?>
            <tr>
              <td>
              <?php 
                echo $value['title'];
              ?>
              </td>
            <td>
              <a title="Show results" href="exercises/148/results.html"><i class="fa fa-chart-bar"></i></a>
              <a title="Close" rel="nofollow" data-method="put" href="exercises/148785c.html?exercise%5Bstatus%5D=closed"><i class="fa fa-minus-circle"></i></a>
            </td>
            </tr> 
          <?php
          }
          ?>
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
          <?php
          foreach($modelEx->getByState(2) as $value)
          {?>
            <tr>
              <td>
              <?php 
                echo $value['title'];
              ?>
              </td>
            <td>
              <a title="Show results" href="exercises/148/results.html"><i class="fa fa-chart-bar"></i></a>
              <a title="Destroy" rel="nofollow" data-method="put" href="exercises/148785c.html?exercise%5Bstatus%5D=closed"><i class="fa fa-trash"></i></a>
            </td>
            </tr> 
          <?php
          }
          ?>
          </tr>
      </tbody>
    </table>
  </section>
</div>
</main>