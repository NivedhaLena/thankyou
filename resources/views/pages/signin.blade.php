@extends('layouts.default')

@section('content')

    <div class="container signin card col-md-4">

        <form class="form-signin">
            <h2 class="form-signin-heading">Please sign in</h2><br>
            <input type="text" class="input-block-level" placeholder="Email address"><br><br>
            <input type="password" class="input-block-level" placeholder="Password"><br><br>
            <label class="checkbox">
                <input type="checkbox" value="remember-me "> Remember me
            </label>
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        </form>

    </div> <!-- /container -->

@endsection