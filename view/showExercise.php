<?php
ob_start();
?>
<header class="heading results">
  <section class="container">
    <a href="../index.php"><img src="../content/img/logo.png" /></a>    
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
          /*boucle afficher contenu
          ex: <tr>
            <td>ewrwe</td>
            <td>
              <a title="Show results" href="exercises/148/results.html"><i class="fa fa-chart-bar"></i></a>
              <a title="Close" rel="nofollow" data-method="put" href="exercises/148785c.html?exercise%5Bstatus%5D=closed"><i class="fa fa-minus-circle"></i></a>
            </td>
          </tr>*/
          ?>
          <!-- exemple-->
          <tr>
            <td>dadasdd</td>
            <td>
              <a title="Show results" href="exercises/156/results.html"><i class="fa fa-chart-bar"></i></a>
              <a title="Close" rel="nofollow" data-method="put" href="exercises/156785c.html?exercise%5Bstatus%5D=closed"><i class="fa fa-minus-circle"></i></a>
            </td>
          </tr>
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
            <td>Linux base CLI commands</td>
            <td>
              <a title="Show results" href="exercises/146/results.html"><i class="fa fa-chart-bar"></i></a>
              <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="exercises/146.html"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>dim_test</td>
            <td>
              <a title="Show results" href="exercises/151/results.html"><i class="fa fa-chart-bar"></i></a>
              <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="exercises/151.html"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>Test Andi</td>
            <td>
              <a title="Show results" href="exercises/152/results.html"><i class="fa fa-chart-bar"></i></a>
              <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="exercises/152.html"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          <tr>
            <td>dylan 2</td>
            <td>
              <a title="Show results" href="exercises/155/results.html"><i class="fa fa-chart-bar"></i></a>
              <a data-confirm="Are you sure?" title="Destroy" rel="nofollow" data-method="delete" href="exercises/155.html"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
      </tbody>
    </table>
  </section>
</div>
</main>

<?php
$content = ob_get_clean();
require "template.php";
?>