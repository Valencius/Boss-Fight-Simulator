<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Edit Item</title>
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
                    <form method="post" action="{{route('inv.update',[$id=>$Inventory->id])}}">
                        @csrf
                        @method('patch')                     
                        <h3 class="mb-3">Edit Item</h3>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                name="name"
                                value="{{$Inventory->name}}"
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
                            >{{$Inventory->desc}}</textarea
                            >
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">
                                Type
                            </label>
                            <select
                                name="type"
                                id="type"
                                class="form-select"
                            >
                                <option value="Weapon" @if($Inventory->type === "Weapon") selected @endif>Weapon</option>
                                <option value="Armor" @if($Inventory->type === "Armor") selected @endif>Armor</option>
                                <option value="Potion" @if($Inventory->type === "Potion") selected @endif>Potion</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount</label>
                            <input
                                type="integer"
                                class="form-control"
                                name="amount"
                                value="{{$Inventory->amount}}"
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
