@include('head')
<body class="main">
  @include('seedheader')
  <div class="seedy">
    <div class="container">

      <!-- card -->
      <div class="row" id="noBottom">
        <div class="col s12">
          <div class="card-panel ">

            <h2 class="hide-on-small-only">Seed Edit Form</h2>
            <h2 class="center hide-on-med-and-up">Seed Edit Form</h2>
            <hr />
            <div class="container">
              <form method="POST" action="{{action('SeedController@update', $seed->id)}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="input-field col s12">
                  <label for="name">Name: </label>
                  <input name="name" type="text" value="{{ $seed->name }}" id="name" required>
                </div>

                <div class="input-field col s6">
                  <select required name="active">
                    <option value="" disabled selected>Instock</option>
                    <option value="true"
                    <?php if ($seed->active == 'true') { echo 'selected'; } ?> >Active</option>
                    <option value="false"
                    <?php if ($seed->active == 'false') { echo 'selected'; } ?> >Inactive</option>
                  </select>
                  <label>Active?</label>
                </div>
                <div class="input-field col s6">
                  <select name="type" id="type" required>
                    <option value="" disabled selected>Seed Type</option>
                    <option value="Legume"
                    <?php if ($seed->type == 'Legume') { echo 'selected'; } ?> >Legume</option>
                    <option value="Cucumber"
                    <?php if ($seed->type == 'Cucumber') { echo 'selected'; } ?> >Cucumber</option>
                    <option value="Squash"
                    <?php if ($seed->type == 'Squash') { echo 'selected'; } ?> >Squash</option>
                    <option value="Pepper"
                    <?php if ($seed->type == 'Pepper') { echo 'selected'; } ?> >Pepper</option>
                    <option value="Allium"
                    <?php if ($seed->type == 'Allium') { echo 'selected'; } ?> >Allium</option>
                    <option value="Taproot"
                    <?php if ($seed->type == 'Taproot') { echo 'selected'; } ?> >Taproot</option>
                    <option value="Greens"
                    <?php if ($seed->type == 'Greens') { echo 'selected'; } ?> >Leafy Greens</option>
                    <option value="Melon"
                    <?php if ($seed->type == 'Melon') { echo 'selected'; } ?> >Melon</option>
                    <option value="Eggplant"
                    <?php if ($seed->type == 'Eggplant') { echo 'selected'; } ?> >Eggplant</option>
                    <option value="Other"
                    <?php if ($seed->type == 'Other') { echo 'selected'; } ?> >Other</option>
                  </select>
                  <label for="type">Type: </label>
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="latin_name">Latin name: </label>
                  <input name="latin_name" type="text" id="latin_name" value=" {{ $seed->latin_name }} ">
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="photo_url">Photo URL: </label>
                  <input name="photo_url" type="text" id="photo_url" value=" {{ $seed->photo_url }} ">
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="description">Description</label>
                  <textarea name="description" id="description"> {{ $seed->description }} </textarea>
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="">Days to harvest:</label>
                  <input name="days_to_harvest" type="text" value=" {{ $seed->days_to_harvest }} ">
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="instructions">Instructions: </label>
                  <textarea name="instructions" id="instructions"> {{ $seed->instructions }} </textarea>
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="pestdisease">Pests and Diseases: </label>
                  <textarea name="pestdisease" id="pestdisease"> {{ $seed->pestdisease }} </textarea>
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="saving">Seed saving tips: </label>
                  <textarea name="saving" id="saving"> {{ $seed->saving }} </textarea>
                </div>
                <br />
                <div class="input-field col s12">
                  <label for="source">Seed source: </label>
                  <input name="source" type="text" id="source" value=" {{ $seed->source }} ">
                </div>
                <br />

                <button type="submit" value="Submit">SAVE</button>
                <a href=" {{ url('/dashboard') }} "><div class="add">CANCEL</div></a>
                <a href=" /freeheirloomseeds/seeds/{{ $seed->id }} ">TEST </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('footer')
  <script>
    $(document).ready(function() {
    $('select').material_select();
  });
  </script>
</body>
