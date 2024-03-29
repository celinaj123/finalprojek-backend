<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>showInvoice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PT Meksiko</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/">View</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="/create-barang">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/create-invoice">Invoice</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/create-category">Create Category</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>


        <div class="m-5">
            <h1 class="text-center">Faktur Barang</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nomor Invoice</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Kuantitas</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{ $invoice->nomor_invoice }}</td>
                            <td>{{ $invoice->nama_barang }}</td>
                            <td>{{ $invoice->kuantitas }}</td>
                            <td>{{ $invoice->harga_barang}}</td>
                            <td>{{ $invoice->subtotal_harga }}</td>
                        </tr>
                    <tr>
                        <td colspan="3" class="text-end">Subtotal:</td>
                        <td>{{ $invoice->subtotal_harga }}</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-end">Total Harga:</td>
                        <td>{{ $invoice->total_harga }}</td>
                    </tr>
                </tbody>
            </table>

            <form action="{{route('delete', $invoice->id)}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
