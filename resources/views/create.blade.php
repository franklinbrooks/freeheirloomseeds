@include('head')
<body class="main">
  @include('header')
  <div class="seedy">
    <div class="container">

      <!-- card -->
      <div class="row" id="noBottom">
        <div class="col s12">
          <div class="card-panel">

            <h2 class="hide-on-small-only">Add A New Seed</h2>
            <h2 class="center hide-on-med-and-up">Add A New Seed</h2>
            <hr />
            <div class="container">

              <form class="form-horizontal card-panel" method="POST" action="{{action('SeedController@store')}}">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="POST">
                <input type="hidden" id="active" name="active" value="true">
                <div class="row">
                  <div class="form-group input-field col s12 m6">
                    <label for="name">Name: </label>
                    <input placeholder="Name" type="text" id="name" name="name" required>
                    <br />
                  </div>
                  <div class="form-group input-field col s12 m6">
                    <label for="latin_name">Latin name: </label>
                    <input name="latin_name" placeholder="Latin name" type="text" id="latin_name">
                    <br />
                  </div>
                  <br />
                </div>

                <div class="row">
                  <div class="form-group input-field col m12 l6">
                    <label for="type"></label>
                    <input name="type"  id="type" placeholder="Seed type" list="Seed Types" required >
                      <datalist id="Seed Types">
                        <option value="Legume">
                        <option value="Cucumber">
                        <option value="Squash">
                        <option value="Pepper">
                        <option value="Allium">
                        <option value="Taproot">
                        <option value="Green">
                        <option value="Melon">
                        <option value="Eggplant">
                        <option value="Other">
                      </datalist>
                      <br />
                  </div>
                  <div class="form-group input-field col m12 l6">
                    <label for="photo_url">Photo URL: </label>
                    <input name="photo_url"  placeholder="Photo URL" type="text" id="photo_url">
                  </div>
                  <br />
                </div>

                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="description">Description</label>
                    <textarea name="description"  class="materialize-textarea" placeholder="Description" id="description" type="text"></textarea>
                  </div>
                  <br />
                </div>

                <div class="row">
                  <div class="form-group input-field col m12 l6">
                    <label for="days">Days until harvest:</label>
                    <input name="days_to_harvest" id="days" placeholder="Days until harvest" type="text">
                    <br />
                  </div>
                  <div class="form-group input-field col m12 l6">
                    <label for="source">Seed source: </label>
                    <input name="source" id="source" placeholder="Seed source" type="text">
                    <br />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="seed_instructions">Instructions: </label>
                    <textarea name="instructions" class="materialize-textarea" placeholder="Instructions" id="seed_instructions" type="text"></textarea>
                  </div>
                  <br />
                </div>
                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="pests">Pests and Diseases: </label>
                    <textarea name="pestdisease" class="materialize-textarea" placeholder="Pests and diseases" id="pests" type="text"></textarea>
                  </div>
                  <br />
                </div>
                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="saving">Seed saving tips: </label>
                    <textarea name="saving" class="materialize-textarea" placeholder="Seed saving tips" id="saving" type="text"></textarea>
                  </div>
                  <br />
                </div>


                <button type="submit" value="Submit">SAVE</button>

                @if (Route::has('login'))
                  @auth
                    <a href=" {{ url('/dashboard') }} "><div class="edit">CANCEL</div></a>
                  @endauth
                @endif

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('footer')
</body>
