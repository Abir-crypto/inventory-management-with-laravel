<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
<div id="myApp">
    <div class="row d-flex justify-content-between">
        <div class="col-md-6 m-4 border shadow">
            <h3 class="text-center mt-4">Basic Information</h3>
            <h4>Product Name <span style="color: red">*</span></h4>
            <input type="text" class="form-control mt-2" id="product_name" placeholder="Ex: exclusive punjabi">

            <div class="row d-flex justify-content-between mt-2">
                <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>select category *</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>select sub category *</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Select sub sub category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>

            <input type="text" class="form-control mt-2" id="video_link" placeholder="Video Link (optional)">

            <div class="row mt-2 mb-2">
                <div class="col-sm-6">
                    <label for="price">price<span style="color: red">*</span></label>
                    <input type="number" class="form-control mt-2" id="price" name="price" placeholder="0">
                </div>
                <div class="col-sm-6">
                    <label for="sale_price">sale price<span style="color: red">*</span></label>
                    <input type="number" class="form-control mt-2" id="sale_price" name="sale_price" placeholder="0">
                </div>
            </div>


        </div>
        <div class="col-md-5 m-4 border shadow">

            <p class="text-center mt-4">Add variants when the product have different versions, such as color and size.</p>

            <label>
                Color Family (example=Black,White,Navy etc.) <span style="color: red">*</span>
                <select class="form-select mt-2" name="color">
                    <option selected class="text-center">Select sub sub category</option>
                    <option value="1" class="text-center">Red</option>
                    <option value="2" class="text-center">Green</option>
                    <option value="3" class="text-center">Blue</option>
                    <option value="4" class="text-center">Black</option>
                    <option value="5" class="text-center">Orange</option>
                    <option value="6" class="text-center">Pink</option>
                    <option value="7" class="text-center">Purple</option>
                </select>
            </label>

            <div class="row mt-4 mb-4">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="XXXL">
                        <label class="form-check-label" for="XXXL">
                            XXXL
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="XXL">
                        <label class="form-check-label" for="XXL">
                            XXL
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="46">
                        <label class="form-check-label" for="46">
                            46
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="XL">
                        <label class="form-check-label" for="XL">
                            XL
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="44">
                        <label class="form-check-label" for="44">
                            44
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="L">
                        <label class="form-check-label" for="L">
                            L
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="42">
                        <label class="form-check-label" for="42">
                            42
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="M">
                        <label class="form-check-label" for="M">
                            M
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="40">
                        <label class="form-check-label" for="40">
                            40
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="S">
                        <label class="form-check-label" for="S">
                            S
                        </label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="38">
                        <label class="form-check-label" for="38">
                            38
                        </label>
                    </div>
                </div>

            </div>

            <div class="text-center mt-4">
                <button class="btn" style="background-color: #01cd8c; color: white"> Add to color list</button>
            </div>

        </div>
    </div>
    <color-section></color-section>
    <h1></h1>
</div>

<script src="{{mix('js/app.js')}}"></script>
</body>
</html>
