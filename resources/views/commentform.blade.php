@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Submit Your Comment</div>

                <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="InputComment">Comment</label>
                            <textarea type="text" name="comment" class="form-control" required placeholder="Comment"></textarea>
                        </div>
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection