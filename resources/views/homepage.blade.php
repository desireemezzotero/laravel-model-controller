@extends('.layouts.master')

@section('component')
   <div class="container">
    <div class="row">
      @foreach ($movies as $movie)

      <div class="col-12 col-md-6 col-xl-3 mb-4">
        <div class="card tex">

          <div class="card-top bg-secondary text-center pt-2">
           <h5>
             {{$movie['title']}}
           </h5>
          </div>

          <div class="card-body">
            Original Title:
            {{$movie['original_title']}}
            </h6>

            <p class="card-text mb-0">
              Nationality:
            {{$movie['nationality']}}
            </p>

            <p class="card-text mb-0">
              Date:
              {{$movie['date']}}
            </p>

            <p class="card-text">
              Vote:
              {{$movie['vote']}}
            </p>
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
   </div>
@endsection