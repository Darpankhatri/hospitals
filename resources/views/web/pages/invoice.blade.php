<?php $logo = App\Models\logo::where('name','logo')->where('is_active',1)->first();
?>
<!DOCTYPE html>
<html>

<head>
    <title> Home </title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset($logo->image) }}" type="image/png" sizes="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">

</head>
<style>
    /* invoice css start */
    ul,
    ol {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .invoice-sec-wrap {
        padding: 100px 0;
    }

    .invoice-sec-wrap .invoice-card {
        box-shadow: 0px 0px 5px 0px #ccc;
        padding: 50px;
    }


    .invoice-sec-wrap .invoice-card .invoice-head img {
        min-width: 200px;
        max-width: 200px;
        min-height: 60px;
        max-height: 60px;
    }

    .invoice-sec-wrap .invoice-card .invoice-info {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 20px 0 50px 0;
        border: 1px solid #1370b5;
        padding: 0 40px;
    }


    .invoice-sec-wrap .invoice-card .invoice-info .invoice-info-content ul {
        display: flex;
        margin: 10px 0;
        align-items: center;
    }

    .invoice-sec-wrap .invoice-card .invoice-info .invoice-info-content ul li.first {
        width: 170px;
        font-size: 17px;
        font-weight: 600;
        color: #786d6d;
        line-height: 25px;
    }

    .invoice-sec-wrap .invoice-card .invoice-info .invoice-info-content ul li {
        font-size: 20px;
        font-weight: 700;
        color: #000;
    }


    .invoice-sec-wrap .invoice-card .invoice-info .invoic-total p {
        font-size: 17px;
        font-weight: 400;
        color: #786d6d;
        line-height: 25px;
        margin: 0;
        padding: 0;
    }

    .invoice-sec-wrap .invoice-card .invoice-info .invoic-total h2 {
        font-size: 24px;
        font-weight: 700;
        color: #1370b5;
    }

    .invoice-sec-wrap .invoice-card .invoice-table table.table tbody tr th {
        vertical-align: baseline;
    }

    .invoice-sec-wrap .invoice-card .invoice-table table.table tbody tr td {
        vertical-align: baseline;
        font-size: 18px;
        font-weight: 600;
        color: #504b4b;
    }

    .invoice-sec-wrap .invoice-card .invoice-table table.table tbody tr td img.invoice-img {
        min-width: 100px;
        max-width: 100px;
        min-height: 70px;
        max-height: 70px;
        object-fit: contain;
    }


    .invoice-sec-wrap .invoice-card .card-bottom ul {
        display: flex;
        align-items: center;
        justify-content: end;
    }

    .invoice-sec-wrap .invoice-card .card-bottom ul li.amount {
        font-size: 25px;
        font-weight: 600;
        color: #ff0000;
        line-height: 25px;
        width: 230px;
    }

    .invoice-sec-wrap .invoice-card .card-bottom ul li {
        font-size: 30px;
        font-weight: 700;
        color: #1370b5;
    }

    /* invoice css end */
</style>

<body>

    <main>
        <section class="invoice-sec-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                        <div class="invoice-card">
                            <div class="invoice-head">
                                <img src="{{ asset($logo->image) }}" alt="">
                            </div>

                            <div class="invoice-info">
                                <div class="invoice-info-content">
                                    <ul>
                                        <li class="first">Clent Name:</li>
                                        <li>{{ $order->name }}</li>
                                    </ul>
                                    <ul>
                                        <li class="first">Address:</li>
                                        <li>{{ $order->address }}</li>
                                    </ul>
                                    <ul>
                                        <li class="first">City:</li>
                                        <li>{{ $order->city }}</li>
                                    </ul>
                                    <ul>
                                        <li class="first">Zip:</li>
                                        <li>{{ $order->zip }}</li>
                                    </ul>
                                </div>
                                <div class="invoic-total">
                                    <p>Invoice No#</p>
                                    <h2>{{ $order->id }}</h2>
                                </div>
                            </div>

                            <div class="invoice-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            {{-- <th scope="col">#</th> --}}
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order_item as $data)
                                            <tr>
                                                {{-- <th scope="row">1</th> --}}
                                                <td><img src="{{ asset($data->product->image) }}" alt="img" class="img-fluid invoice-img"></td>
                                                <td>{{ $data->product->name }}</td>
                                                <td>${{ $data->price }}.00</td>
                                                <td>{{ $data->quantity }}</td>
                                                <td>${{ $data->quantity*$data->price }}.00</td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-bottom">
                                <ul>
                                    <li class="amount">Total Amount</li>
                                    <li>${{ $order->total }}.00</li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>