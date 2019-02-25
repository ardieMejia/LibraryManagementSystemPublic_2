<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="/css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/css/fontawesome-free-5.6.3-web/css/all.css">

    </head>
    <body>
        <div class="container">
            <h1>Book advanced search form <small>(bare bones)</small></h1>

            <form method="get" action="/filterkeyword">
                <input type="text" name="keyword"/>
                <input type="submit" value="advanced keyword search"/>
            </form>


            <table class="table">
                @foreach($books as $book)
                    <tr>
                        <td>
                            <h4>
                                {{ $book->title }}
                            </h4>
                            <h5>
                                {{ $book->author->lastname }}, {{ $book->author->firstname }}
                            </h5>
                            <small>
                                {{ $book->details }}
                            </small>
                        </td>
                        <td>
                            <span class="fa fa-layer-group">
                                {{ $book->category->categoryname }}
                            </span>
                        </td>
                    </tr>
                @endforeach
            </table>


        </div>
        {{-- ---------- gray header for a gray world ---------- --}}

        <header class="fixed">
            <div class="columns">
                <div class="mg73">
                    <span class="fa fa-home"> <a href="/books" class="btn btn-primary">Home</a></span>
                    <span class="fa fa-pencil-alt"> <a href="/admin" class="btn btn-primary">admin level</a></span>
                </div>
                <div class="column col-3 col-ml-auto">
                    <span class="fa fa-pencil-alt">  <a href="/book/create" class="btn btn-primary">create book</a></span>
                </div>
            </div>
        </header>
        {{-- ---------- gray header for a gray world ---------- --}}
    </body>
</html>


