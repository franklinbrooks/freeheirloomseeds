@include('head')
<body>
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

    <?php
    $seeds = App\Seed::all();
    foreach ($seeds as $seed) {
        echo '<a href="', $seed->photo_url, '"><p style="color:black">', $seed->name, '</p></a>';
    }
    ?>

  </div>
</div>
</div>
</div>
</div>
  @include('footer')
</body>
