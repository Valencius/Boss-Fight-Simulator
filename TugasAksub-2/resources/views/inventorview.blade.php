<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Inventory</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 mt-5">Your Inventory</h1>
                <p class="lead">Welcome to your Inventory manager!</p>
            </div>
        </div>

        <div class="container mt-5">
            <a href="{{route('home')}}" class="btn btn-danger" type="submit">
                Back
            </a>
            <a href="{{route('inv.add')}}" class="btn btn-primary" type="submit">
                Add New Item
            </a>
            
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Categories : {{$categoryselect->name}}
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a href="{{route('inv')}}" class="dropdown-item" type="submit">All</a></li>
                    @foreach($categories as $category)
                    <li><a href="{{route('inv.view', ['category_id' => $category->id])}}" class="dropdown-item" type="submit">
                    {{$category->name}}
                </a></li>
                    @endforeach
                </ul>
            

            <div class="d-flex flex-wrap align-content-start mt-5">
                
                @foreach($Inventory as $item)
                    <div class="card mb-4 me-4" style="width: 18rem">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="h5 card-title"> {{$item->name}}</div>
                                
                                    <div>
                                        <div class="rounded p-1 bg-secondary text-white">
                                            {{$item->category->name}}
                                        </div>
                                    </div>
                            </div>

                            <p class="card-text">
                                {{ $item->desc }}
                            </p>

                            <p class="card-text">
                                Amount = {{$item->amount}}
                            </p>

                            <div class="mt-3 d-flex">
                                <form method="post" action="{{route('inv.delete',['id' => $item->id])}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-primary"> Sell </button>
                                </form>
                                <a
                                    href="{{route('inv.edit',['id' => $item->id])}}"
                                    class="btn btn-warning ms-2 "
                                    >Edit Item</a
                                >
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            
                
                
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
