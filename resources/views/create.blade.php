<!DOCTYPE html>
<html lang="en">
<head>
  <title>Top Customer by Product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Report (Top Customers by product)</h2>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Customer Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
        @php
        $i=count($results);
        for($key=0;$key<$i;$key++)
       {
        @endphp
      <tr>
        <td>{{$results[$key]['name']}}</td>
        <td>{{$results[$key]['product_name']}}</td>
        <td>{{$results[$key]['purchase_quantity']}}</td>
        <td>{{$results[$key]['product_price']}}</td>
        <td>{{$results[$key]['total_price']}}</td>
      </tr>
       @php
    }
       @endphp
       <tr>
        <td></td>
        <td>Gross total</td>
        <td>{{$purchase_quantity}}</td>
        <td>{{$product_price}}</td>
        <td>{{$total_price}}</td>
       </tr>

    </tbody>
  </table>
</div>

</body>
</html>
