@include('head')
<body class="main">
  @include('header')
  <div class="seedy">
    <div class="container">

      <!-- card -->
      <div class="row" id="noBottom">
        <div class="col s12">
          <div class="card-panel ">

            <h2 class="hide-on-small-only">Dashboard</h2>
            <h2 class="center hide-on-med-and-up">Dashboard</h2>
            <hr />
            <div class="container">
              <p class="center">The following seeds are currently in the database</p>

<?php

  $seeds = App\Seed::all();

      // This block will repeat for each seed type
      echo '<h5>LEGUMES</h5>';
      echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Legume') {

            echo '<div style="width:100%;display:inline-block">', $seed->name,  '<a style="float:right" class="edit" href="edit/', $seed->id, '">EDIT</a></div><br />';

          }
        }
        echo '</div>';
        echo '<hr />';
        // End seed type block

        // This block will repeat for each seed type

        echo '<h5>CUCUMBERS</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Cucumber') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>SQUASHES</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Squash') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>PEPPERS</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Pepper') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>ALLIUMS</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Allium') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>TAPROOTS</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Taproot') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>LEAFY GREENS</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Greens') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>MELONS</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Melon') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>EGGPLANTS</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Eggplant') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block
        // This block will repeat for each seed type

        echo '<h5>OTHER</h5>';
        echo '<div class="container">';

        foreach ($seeds as $seed) {

          if ($seed->type == 'Other') {

            echo '<div style="width:100%;display:inline-block">', $seed->name, '<a style="float:right" class="edit" href="seeds/', $seed->id, '">EDIT</a></div><br />';

          }

        }
echo '</div>';
        echo '<hr />';

        // End seed type block

    ?>
<div class="new center">
  <a href="{{ url('/create') }}"><div class="add">ADD NEW SEED</div></a>
</div>
  </div>
  </div>
</div>
</div>
</div>
</div>
  @include('footer')
</body>
