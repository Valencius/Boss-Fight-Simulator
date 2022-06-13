<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Add Task</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous"
        />
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-3">
                    <form method="post" action="{{route('inv.create')}}">
                        @csrf
                        <h3 class="mb-3">Create New Item</h3>
                        <div class="mb-3">
                            <label for="title" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="title"
                                name="title"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label"
                                >Description</label
                            >
                            <textarea
                                name="desc"
                                id="desc"
                                cols="30"
                                rows="2"
                                class="form-control"
                            ></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label for="category" class="form-label">
                                Categories
                            </label>
                            <select
                                name="category_id"
                                id="category"
                                class="form-select"
                            >
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        


                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input
                                type="integer"
                                class="form-control"
                                name="amount"
                            />
                        </div>
                        
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
