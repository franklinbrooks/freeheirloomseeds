@include('head')
<body>
@include('seedheader')

<div class="seedy">
    <div class="container">
      <!-- card -->
      <div id="noBottom" class="row">
        <div class="col s12">
          <div class="card-panel ">
            <h2>Seed Details</h2>
            <hr />
            <div class="right col l6 m12 valign-wrapper">
              <img class="materialboxed responsive-img center" src=" {{ $seed->photo_url }} " />
            </div>

              <div class="col l6 m12">
                <div class="card-panel green">
                  <p class="flow-text white-text">Seed name: {{ $seed->name }} </p>
                  <p class="flow-text white-text">Latin name:<i> {{ $seed->latin_name }}</i> </p>
                  <p class="flow-text white-text">Seed type: {{ $seed->type }} </p>
                  <p class="flow-text white-text">Days until harvest: {{ $seed->days_to_harvest }} </p>
               </div>
              </div>

            <div class="row">
              <div class="col s12">
                <div class="card-panel green lighten-4">
                  <p class="flow-text">Description: {{ $seed->description }} </p>
                </div>
              </div>
            </div>

            <?php
              if ($seed->instructions) {
                echo '<p class="flow-text">Planting instructions: ', $seed->instructions , '</p>';
              }
            ?>
            <?php
              if ($seed->pestdisease) {
                echo '<p class="flow-text">Seed pests and diseases: ', $seed->pestdisease , '</p>';
              }
            ?>
            <?php
              if ($seed->saving) {
                echo '<p class="flow-text">Seed saving: ', $seed->saving , '</p>';
              }
            ?>
            <?php
              if ($seed->source) {
                echo '<p class="flow-text">Seed source: ', $seed->source , '</p>';
              }
            ?>


          <a href="/freeheirloomseeds/seeds"><p class="edit">Back to seed list</p></a>
        </div>
      </div>
    </div>
    <!-- card -->
  </div>
</div>
  @include('footer')
</body>



