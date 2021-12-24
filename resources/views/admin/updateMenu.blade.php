<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form action="{{ route('adminupdate') }}" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $result->id }}">

    <input type="text" name="title" class="form-control" placeholder="title" value="{{ $result->name }}" />

    <textarea name="description" class="form-control" placeholder="short description">{{ $result->description }}</textarea>

    <input type="number" name="price" class="form-control" placeholder="price" value="{{$result->price}}">
    <input type="number" name="priority" class="form-control" placeholder="priority" value="{{$result->priority}}">

    <select id="groups" name="groups">
        <option value="1">soups</option>
        <option value="2">deserts</option>
        <option value="3">cold drinks</option>
        <option value="4">alcohol</option>
    </select>
    <button class="btn btn-primary">save</button>

</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
