<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="card w-100">
        <div class="card-header bg-info">
            <h1 class="card-title">Companies</h1>
        </div>
        <div>
            <form method="POST" action="/companies" class="col-sm-6 col-md-4">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="formGroupExampleInput">Name</label>
                    <input name="name" type="text" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="form-group">
                    <label for="formInput">Description</label>
                    <textarea name="description" type="text" class="form-control" id="formInput"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Add companies</button>
                </div>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($companies as $company)
                    <tr class="">
                        <th scope="row" class="">{{ $company['id'] }}</th>
                        <td class="">{{ $company['name'] }}</td>
                        <td class="">{{ $company['description'] }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="/companies/{{$company->id}}"><button type="button" class="btn btn-info">READ</button></a>
                                <a href="/companies/edit/{{$company->id}}"><button type="button" class="btn btn-primary"> EDIT</button></a>
                                <a href="/companies/delete/{{$company->id}}"><button type="button" class="btn btn-danger"> DELETE</button></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>