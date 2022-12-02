<!--<html>
<head>
	<title>Main</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>

<body>
<p>Welcome to PowerRangers marketplace(Better than pamazon)merchant>
<div class="col-md-11 mx-auto">
  <div class="row">
      <div class="col-md-3">
          <a href="/products/create" class="btn btn-primary">Create New Product</a>
      </div>
      <div class="col-md-9 text-right px-4 pt-2">
          <h5 class="d-inline total-cats mt-3">Total Products: <span class="badge badge-secondary">{{ $products->count() }}</span></h5>
      </div>
  </div>
    <div class="row">
        <table class="table table-bordered table-hovered mt-4 mx-3">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Added on</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td style="width: 15%;">
                            @if($product->image)
                                <img src="/storage/img/{{$product->image}}" width="150px" height="100px" style="border-radius: 10px;">
                            @else
                                <img src="/storage/img/preview.jpg" width="150px" height="100px" style="border-radius: 10px;">
                            @endif
                        </td>
                        <td>{{ $product->name }}</td>
                        <td><h3>${{ $product->price }}</h3></td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ date('M d, Y', strtotime($product->created_at)) }}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary btn-block">View</a>
                                </div>
                                <div class="col-md-4">
                                    <a href="/products/{{$product->id}}/edit" class="btn btn-success btn-block">Edit</a> 
                                </div>
                                <div class="col-md-4">
                                   {!! Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST']) !!}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
  </div>

</body>
</html>-->
<!DOCTYPE html>
<html>
<head>
  <title>GoGo Power Rangers</title>
  <link href="../Merchant/bootstrap.css" rel="stylesheet" />
  
  <script src="../Merchant/jquery-1.11.0.min.js"></script>
  <script src="../Merchant/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2>Edit Product</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <table id="productTable"
               class="table table-bordered table-condensed table-striped">
          <thead>
            <tr>
              <th>Edit</th>
              <th>Product Name</th>
              <th>Introduction Date</th>
              <th>URL</th>
              <th>Delete</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-primary">
          <div class="panel-heading">
            Product Information
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label for="productname">
                Product Name
              </label>
              <input type="text"
                     class="form-control"
                     value="Extending Bootstrap with CSS, JavaScript and jQuery"
                     id="productname" />
            </div>
            <div class="form-group">
              <label for="introdate">
                Introduction Date
              </label>
              <input type="date"
                     class="form-control"
                     value="6/11/2015"
                     id="introdate" />
            </div>
            <div class="form-group">
              <label for="url">
                URL
              </label>
              <input type="url"
                     class="form-control"
                     value="www.pluralsight.com"
                     id="url" />
            </div>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-xs-12">
                <button type="button" id="updateButton"
                        class="btn btn-primary"
                        onclick="productUpdate();">
                  Add
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Current product being edited
    var editRow = null;

    function productDisplay(ctl) {
      editRow = $(ctl).parents("tr");
      var cols = editRow.children("td");

      $("#productname").val($(cols[1]).text());
      $("#introdate").val($(cols[2]).text());
      $("#url").val($(cols[3]).text());

      // Change Update Button Text
      $("#updateButton").text("Update");
    }

    function productUpdate() {
      if ($("#updateButton").text() == "Update") {
        productUpdateInTable();
      }
      else {
        productAddToTable();
      }

      // Clear form fields
      formClear();

      // Focus to product name field
      $("#productname").focus();
    }

    // Add product to <table>
    function productAddToTable() {
      // First check if a <tbody> tag exists, add one if not
      if ($("#productTable tbody").length == 0) {
        $("#productTable").append("<tbody></tbody>");
      }

      // Append product to table
      $("#productTable tbody").append(
        productBuildTableRow());
    }

    // Update product in <table>
    function productUpdateInTable() {
      // Add changed product to table
      $(editRow).after(productBuildTableRow());

      // Remove original product
      $(editRow).remove();

      // Clear form fields
      formClear();

      // Change Update Button Text
      $("#updateButton").text("Add");
    }

    // Build a <table> row of Product data
    function productBuildTableRow() {
      var ret =
      "<tr>" +
        "<td>" +
          "<button type='button' " +
                  "onclick='productDisplay(this);' " +
                  "class='btn btn-default'>" +
                  "<span class='glyphicon glyphicon-edit' />" +
          "</button>" +
        "</td>" +
        "<td>" + $("#productname").val() + "</td>" +
        "<td>" + $("#introdate").val() + "</td>" +
        "<td>" + $("#url").val() + "</td>" +
        "<td>" +
          "<button type='button' " +
                  "onclick='productDelete(this);' " +
                  "class='btn btn-default'>" +
                  "<span class='glyphicon glyphicon-remove' />" +
          "</button>" +
        "</td>" +
      "</tr>"

      return ret;
    }

    // Delete product from <table>
    function productDelete(ctl) {
      $(ctl).parents("tr").remove();
    }

    // Clear form fields
    function formClear() {
      $("#productname").val("");
      $("#introdate").val("");
      $("#url").val("");
    }
  </script>
</body>
</html>
