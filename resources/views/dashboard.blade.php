@include('head')
<body>
  @include('header')
  <div class="container">
    <h2>Dashboard</h2>
    <hr />

    <?php
    $seeds = App\Seed::all();
    foreach ($seeds as $seed) {
        echo '<a href="', $seed->photo_url, '"><p style="color:black">', $seed->name, '</p></a>';
    }
    ?>

  </div>
  @include('footer')
</body>
