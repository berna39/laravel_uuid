<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Generate UUID</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="{{ route('transaction') }}">
            @csrf
            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" value="" placeholder="Amount" min="0" step="0.0001" name="amount" id="amount" class="form-control"> 
            </div>
            <div class="form-group">
                <label for="tag">Tag</label>
                <input type="text" value="" placeholder="Tag" name="tag" id="tag" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Enregistrer" class="btn btn-primary">
            </div>
        </form>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>uuid</th>
                    <th>tag</th>
                    <th>amount</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->uuid }}</td>
                        <td>{{ $item->tag }}</td>
                        <td>{{ $item->amount }}</td>
                        <td>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>