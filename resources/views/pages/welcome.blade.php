@extends('main')

{{-- --}}
@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog!</h1>

                <p class="lead">Thank you so much for visiting. This is my test website built with Laravel.</p>

                <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula tellus lacinia cursus
                    vulputate. Quisque in nulla id nibh rutrum imperdiet id faucibus neque. Sed semper vitae
                    eros a viverra. Duis egestas, nisl efficitur luctus posuere, felis nulla lobortis mauris,
                    in molestie eros metus ut nulla. Integer faucibus semper lacus, in suscipit dolor</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div><hr>
            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula tellus lacinia cursus
                    vulputate. Quisque in nulla id nibh rutrum imperdiet id faucibus neque. Sed semper vitae
                    eros a viverra. Duis egestas, nisl efficitur luctus posuere, felis nulla lobortis mauris,
                    in molestie eros metus ut nulla. Integer faucibus semper lacus, in suscipit dolor</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div><hr>
            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula tellus lacinia cursus
                    vulputate. Quisque in nulla id nibh rutrum imperdiet id faucibus neque. Sed semper vitae
                    eros a viverra. Duis egestas, nisl efficitur luctus posuere, felis nulla lobortis mauris,
                    in molestie eros metus ut nulla. Integer faucibus semper lacus, in suscipit dolor</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div><hr>
            <div class="post">
                <h3>Post title</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vehicula tellus lacinia cursus
                    vulputate. Quisque in nulla id nibh rutrum imperdiet id faucibus neque. Sed semper vitae
                    eros a viverra. Duis egestas, nisl efficitur luctus posuere, felis nulla lobortis mauris,
                    in molestie eros metus ut nulla. Integer faucibus semper lacus, in suscipit dolor</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>
@endsection

