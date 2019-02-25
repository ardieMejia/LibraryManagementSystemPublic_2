<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="/css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/css/fontawesome-free-5.6.3-web/css/all.css">

    </head>
    <body>
        <div class="container">
            <h1>Book search</h1>
            {{-- feels like a hack form --}}

            <ul>
                @foreach ($books as $book)
                    <li>
                        {{ $book->id }}                        
                    </li>
                    <li>
                        {{ $book->ISBN }}                        
                    </li>
                    <li>
                        {{ $book->title }}
                    </li>
                    <li>
                        {{ $book->author->firstname}}                        
                    </li>
                    <li>

                        @if($book->subcategory!=null)
                            subcategory: {{ $book->subcategory->subcategoryname}}
                        @endif
                    </li>
                    <li>
                        category: {{ $book->category->categoryname}}                        
                    </li>

                </tr>
            @endforeach
            </ul>


        </div>
        {{-- ---------- gray header for a gray world ---------- --}}

        <header class="fixed">
            <div class="columns">
                <div class="mg73">
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


