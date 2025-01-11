<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculatrice</title>
        <link href="https://unpkg.com/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h3 class="mb-4">Calculatrice</h3>
                        <form action="/calculer" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" name="number1" class="form-control" placeholder="Enter first number">
                            </div>
                            <div class="mb-3">
                                <select name="operator" id="operator" class="form-select">
                                    <option value="+">+</option>
                                    <option value="-">-</option>
                                    <option value="*">*</option>
                                    <option value="/">/</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="text" name="number2" class="form-control" placeholder="Enter second number">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Calculer</button>
                        </form>
                        <div class="mt-4">
                            <h4>Le résultat est:</h4>
                            <p id="result" class="fw-bold text-success">  {{request('result') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link href="https://unpkg.com/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</body>
</html>
