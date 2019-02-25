<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="/css/styles.css" rel="stylesheet"/>

    </head>
    <body>
        <div class="container">

            <h3>
                Category Details
            </h3>

            <form method="post" action="/admin/categories/update/{{ $category->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <table class="table table-striped">
                    <tr>
                        <td width="20%"><label class="form-label">Category name</label></td>
                        <td width="80%"><input type="text" name="categoryname" value="{{ $category->categoryname }}"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="column col-1 col-ml-auto">
                                <button type="submit" class="btn btn-primary">change category entry</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="40%" class="text-right"><label class="form-label">Sub-category name</label></td>

                        <td width="60%">
                            <select size="3" class="form-select" multiple="multiple" name="subcategory_selected[]">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{ $subcategory->id }}"
                                            @foreach($category->subcategories as $subcategory_saved)
                                                @if($subcategory->id==$subcategory_saved->id)
                                                    selected
                                                @endif
                                            @endforeach
                                    >
                                        {{ $subcategory->subcategoryname }}
                                    </option>
                                @endforeach

                                <option>asd</option>
                            </select>
                        </td>

                    </tr>
                </table>

            </form>
        </div>
    </body>
</html>
