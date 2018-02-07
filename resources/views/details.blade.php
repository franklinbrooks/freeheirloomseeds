@include('head')
<body>
  @include('header')
  <div class="container">
    <h2>Seed Details</h2>
    <hr />
    <p class="flow-text">Seed name: {{ $seed->name }} </p>
    <p class="flow-text">Latin name: {{ $seed->latin_name }} </p>
    <p class="flow-text">Seed type: {{ $seed->type }} </p>
    <p class="flow-text">Seed days to harvest: {{ $seed->days_to_harvest }} </p>
    <img src=" {{ $seed->photo_url }} " />
    <hr />
    <p class="flow-text">Description: {{ $seed->description }} </p>
    <hr />
    <p class="flow-text">Seed instructions: {{ $seed->insructions }} </p>
    <p class="flow-text">Seed pests and diseases: {{ $seed->pestdisease }} </p>
    <p class="flow-text">Seed saving: {{ $seed->saving }} </p>
    <p class="flow-text">Seed source: {{ $seed->source }} </p>
  </div>
  @include('footer')
</body>

