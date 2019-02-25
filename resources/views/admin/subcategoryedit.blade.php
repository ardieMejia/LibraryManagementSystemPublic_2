<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="/css/styles.css" rel="stylesheet"/>

    </head>
    <body>
        <div class="container">

            <h3>
                Sub-Category Details
            </h3>

            <form method="post" action="/admin/subcategories/update/{{ $subcategory->id }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                <table class="table table-striped">
                    <tr>
                        <td width="20%"><label class="form-label">Sub-Category name</label></td>
                        <td width="80%"><input type="text" name="subcategoryname" value="{{ $subcategory->subcategoryname }}"/></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="column col-1 col-ml-auto">
                                <button type="submit" class="btn btn-primary">change subcategory entry</button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
