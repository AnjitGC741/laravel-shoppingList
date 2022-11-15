<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@100&family=Inter:wght@400;500;600;700&family=Signika+Negative:wght@300&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Shopping List</title>
</head>

<body>

    <form action="{{route('saveList')}}" method="post">
        @csrf
        <input type="text" class="form-control" name="toBuy">
        <button type="submit" class="btn btn-success">Save</button>
    </form>
    <div class="main-box">
        <div class="header">
            <h2>Shopping list</h2>
        </div>
        <div class="for-table">
            <table class="table">
            
                @foreach($list as $value)

                <tr>
                    <td><input type="checkbox" id="checkBox" value="" onclick="check();"></td>
                    <td>{{$sn++}}</td>
                    <td>{{$value -> tasks}}</td>
                    <td>
                        <a href="{{url('delete/'.$value->id)}}"><button class="btn btn-danger">Delete</button></a>
                        <a href="{{url('edit/'.$value->id)}}"> <button class="btn btn-warning">update</button></a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
<script>
     function check()
     {
        
     }
</script>
</html>