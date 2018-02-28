@extends('layouts.default')

@section('content')

    <div class="container signin card col-md-4">

        <form class="form-signup">
            <h2 class="form-signup-heading">Sign up</h2><br>
            <input type="text" class="input-block-level" placeholder="FullName"><br><br>
            <input type="text" class="input-block-level" placeholder="Email address"><br><br>
            <input type="password" class="input-block-level" placeholder="Password"><br><br>
            <input type="Confirm Password" class="input-block-level" placeholder="Confirm Password"><br><br>
            <button class="btn btn-large btn-primary" type="submit">Sign up</button>
        </form>

    </div> <!-- /container -->

@endsection