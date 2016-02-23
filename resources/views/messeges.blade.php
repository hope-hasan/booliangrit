@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Comments List</div>

                <div class="panel-body">
                    @foreach($table as $key=> $table)

                    
                    <div class="media">
                      <div class="media-left">
                        <a href="#">
                          <img class="media-object" height="64" width="64" src="/profile.jpg" alt="...">
                      </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Users Name</h4>
                    <p>{{ $table->comment }}</p>
                </div>
            </div>


            

            @endforeach
            
        </div>
    </div>
</div>
</div>
</div>
@endsection