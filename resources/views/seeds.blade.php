@include('head')
<body>
  @include('header')
  <div class="seedy">
    <div class="container">
      <!-- card -->
      <div class="row">
        <div class="col s12">
          <div class="card-panel ">
            <p class="flow-text center">AVAILABLE SEED STOCK || <span id="dateSpan"></span>: </p>
            <!-- inset -->
            <div class="row">
              <div class="col s10 offset-s1">
                <div class="center"><a href="https://s3-us-west-1.amazonaws.com/freeheirloomseeds-assets/FreeHeirloomSeeds.pdf" download="FreeHeirloomSeeds Order Form" id="orderForm" class="red-text"><i id="download" class="material-icons">get_app</i>Download an order form (.PDF)</a></div>
                <p>  (Click seed name to view details) </p>
                <ul class="collapsible" data-collapsible="expandable">

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Legumes (Beans &amp; Peas)</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Legume' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Cucumbers</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Cucumber' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Squashes</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Squash' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Peppers</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Pepper' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Alliums (Onions)</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Allium' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Taproots</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Taproot' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Leafy Greens</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Greens' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Melons</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Melon' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Eggplants</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Eggplant' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                  <?php
                    $seeds = App\Seed::all();
                        echo '<li>';
                        echo '<div class="collapsible-header green lighten-3"><i class="material-icons">add_box</i>Other</div>';
                    foreach ($seeds as $seed) {
                      if ($seed->type == 'Other' && $seed->active == 'true') {
                        echo '<div class="collapsible-body green lighten-5">';
                        echo '<span><a href="seeds/', $seed->id, '">', $seed->name ,'</a></span>';
                        echo '</div>';
                      }
                    }
                  ?>

                </ul>
                <p>Seed availability is subject to change at any time.</p>
                <!-- inset -->
              </div>
            </div>
            <!-- card -->
          </div>
        </div>
      </div>
      <br />
    </div>
  </div>
  <!--  Instructions div  -->
  <div class="instructions valign-wrapper">
    <div class="row">
      <div class="left-align flow-text col s10 offset-s1 l5 offset-l1">
        <h3>How it works:</h3>
        <hr />
        <ul>
          <li>1. print our <a href="FreeHeirloomSeeds.pdf" download="FreeHeirloomSeeds Order Form" id="orderForm" class="red-text"><i id="download" class="material-icons">get_app</i>seed order form (.PDF)</a></li>
          <li>2. include your garden size so we can try to send the right amount of seeds</li>
          <li>3. send the form and a self addressed stamped envelope to: </li>
          <div class="container green darken-3">
            <div class="center" style="color:white">Free Seeds
              <br />
              c/o Stone Spirits
              <br />
              865B - 8th Street
              <br />
              Arcata CA 95521
            </div>
          </div>
          </li>
        </ul>
      </div>
      <div class="col l6 s12 valign-wrapper">
        <br />
        <div class="center col s12 "><br />
          <img id="sase" class="col s8 offset-s2 responsive-img center" src="https://s3-us-west-1.amazonaws.com/freeheirloomseeds-assets/sase.jpg">
        </div>
      </div>
    </div>
  </div>
  @include('footer')
  <script>let currentDate = new Date();
    console.log(currentDate);
    document.getElementById("dateSpan").innerHTML=currentDate.toDateString();
  </script>
  <script>
    $(document).ready(function(){
    $('.collapsible').collapsible();
    });
  </script>
</body>



