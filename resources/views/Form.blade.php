<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- start: page -->
<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">User Form</h2>
            </header>
            <div class="panel-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form class="form-horizontal form-bordered" action="/userForm" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Name</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputDefault" name="name">
                            @error('name')
                            <div class="text-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Price</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="inputDefault" name="price">
                            @error('price')
                            <div class="text-danger">* {{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textareaDefault">Description</label>
                        <div class="col-md-6">
                            <textarea name="description" class="form-control" rows="3" data-plugin-maxlength="" maxlength="140"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Thumbnail</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputDefault" name="thumbnail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">Category</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputDefault" name="categoryId">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-6 col-xs-11">
                            <button class="btn btn-sm btn-primary colorpicker-element">
                                Submit
                            </button>
                            <button class="btn btn-sm btn-default colorpicker-element">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
</body>
</html>
