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
              <form class="card-panel " action="">

                <div class="row">
                  <div class="form-group input-field col s12 m6">
                    <label for="seed_name">Name: </label>
                    <input placeholder="Name" type="text" id="seed_name" required>
                    <br />
                  </div>
                  <div class="form-group input-field col s12 m6">
                    <label for="latin_name">Latin name: </label>
                    <input placeholder="Latin name" type="text" id="latin_name">
                    <br />
                  </div>
                  <br />
                </div>

                <div class="row">
                  <div class="form-group input-field col m12 l6">
                    <label for="seed_type"></label>
                    <input id="seed_type" placeholder="Seed type" list="Seed Types">
                      <datalist id="Seed Types">
                        <option value="legumes">
                        <option value="cucumbers">
                        <option value="squashes">
                        <option value="peppers">
                        <option value="alliums">
                        <option value="taproots">
                        <option value="leafy greens">
                        <option value="melons">
                        <option value="eggplants">
                        <option value="other">
                      </datalist>
                      <br />
                  </div>
                  <div class="form-group input-field col m12 l6">
                    <label for="photo_url">Photo URL: </label>
                    <input placeholder="Photo URL" type="text" id="photo_url">
                  </div>
                  <br />
                </div>

                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="seed_description">Description</label>
                    <textarea class="materialize-textarea" placeholder="Description" id="seed_description" type="text"></textarea>
                  </div>
                  <br />
                </div>

                <div class="row">
                  <div class="form-group input-field col m12 l6">
                    <label for="seed_days">Days until harvest:</label>
                    <input id="seed_days" placeholder="Days until harvest" type="text">
                    <br />
                  </div>
                  <div class="form-group input-field col m12 l6">
                    <label for="seed_source">Seed source: </label>
                    <input id="seed_source" placeholder="Seed source" type="text">
                    <br />
                  </div>
                </div>
                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="seed_instructions">Instructions: </label>
                    <textarea class="materialize-textarea" placeholder="Instructions" id="seed_instructions" type="text"></textarea>
                  </div>
                  <br />
                </div>
                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="seed_pests">Pests and Diseases: </label>
                    <textarea class="materialize-textarea" placeholder="Pests and diseases" id="seed_pests" type="text"></textarea>
                  </div>
                  <br />
                </div>
                <div class="row">
                  <div class="form-group input-field col s12">
                    <label for="seed_saving">Seed saving tips: </label>
                    <textarea class="materialize-textarea" placeholder="Seed saving tips" id="seed_saving" type="text"></textarea>
                  </div>
                  <br />
                </div>


                <button>SAVE</button>

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
