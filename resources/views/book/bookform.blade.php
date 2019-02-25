<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="/css/adminstyles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="/css/fontawesome-free-5.6.3-web/css/all.css">
    </head>
    <body>
        <div class="container">

            <h3>
                Book Details
            </h3>

            <form method="post" action="/book/save">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <div class="column col-10">
                    <table class="table table-striped">
                        
                        <tr>
                            <td width="20%"><label class="form-label">ISBN</label></td>
                            <td width="80%"><input type="text" name="ISBN"  disabled/></td>
                        </tr>
                        <tr>
                            <td width="20%"><label class="form-label">Title</label></td>
                            <td width="80%"><input type="text" name="title" /></td>
                        </tr>
                        <tr>
                            <td width="20%"><label class="form-label">Details <small>(optional, but included in advanced search)</small></label></td>
                            <td width="80%" height="200px">
                                <textarea name="details" rows="5" class="form-input" cols="30" maxlength="1000"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%"><label class="form-label">Author's Name</label></td>
                            <td width="80%">
                                <select name="author_id">
                                    <option selected value="">None</option>
                                    @foreach($authors as $author)
                                        <option value="{{ $author->id }}">{{ $author->lastname }}, {{ $author->firstname }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td width="20%"><label class="form-label">Category Name</label></td>
                            <td width="80%">

                                <select name="categorysubcategory" class="form-select">
                                    @foreach($categories as $category)
                                        <optgroup label="{{ $category->categoryname}}">

                                            @foreach($category->subcategories as $subcategory)
                                                <option value="{{ $category->id }}_{{ $subcategory->id }}">
                                                    {{ $subcategory->subcategoryname }}
                                                </option>
                                            @endforeach

                                        </optgroup>
                                    @endforeach
                                </select>


                            </td>
                        </tr>



                        <tr>
                            <td colspan="2">
                                <div class="columns">
                                    <div class="column col-1">
                                        <button type="submit" class="btn btn-primary">Book Entry</button>
                                    </div>

                                </div>
                            </td>
                        </tr>
                    </table>
                </div>

            </form>
        </div>

        {{-- ---------- gray header for a gray world ---------- --}}

        <header class="fixed">
            <div class="columns">
                <div class="mg73">
                    <span class="fa fa-pencil-alt"> <a href="/books" class="btn btn-primary">back</a></span>
                </div>
            </div>
        </header>
        {{-- ---------- gray header for a gray world ---------- --}}
    </body>
</html>
