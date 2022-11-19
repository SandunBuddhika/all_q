<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/icons8_graduation_cap_1.svg">
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-8 offset-2 main_div">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="ms-5 mt-5 mb-5 head_h1">Registration</h1>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 mb-2">
                                    <span class="ms-5">Product Name</span>
                                    <input type="text" id="pn" class="mt-2 col-10 offset-1 ps-2 in_f" placeholder="Product Name" />
                                    <span class="ms-5">Categary</span>
                                    <input type="text" id="pc" class="mt-2 col-10 offset-1 ps-2 in_f" placeholder="Categary" />
                                </div>
                                <div class="col-6 mb-2">
                                    <span class="ms-5">Brand</span>
                                    <input type="text" id="pb" class="mt-2 col-10 offset-1 ps-2 in_f" placeholder="Brand" />
                                    <span class="ms-5">Model</span>
                                    <input type="text" id="pm" class="mt-2 col-10 offset-1 ps-2 in_f"  placeholder="Model"/>
                                </div>
                                <div class="col-6 mb-2">
                                    <span class="ms-5">Quantity</span>
                                    <input type="number" id="pq" class="mt-2 col-10 offset-1 ps-2 in_f" placeholder="Quantity" />
                                    <span class="ms-5">Price per unit</span>
                                    <input type="number" id="pp" class="mt-2 col-10 offset-1 ps-2 in_f" placeholder="Price per unit"/>
                                </div>
                                <div class="col-6 mb-5">
                                    <span class="ms-5" >Expire Date</span>
                                    <input type="date" id="pd" class="mt-2 col-10 offset-1 ps-2 in_f" placeholder="Expire Date" />
                                    <span class="ms-5">Product Image</span>
                                    <div class="bg-light mt-2 col-10 offset-1 ps-2 in_f">
                                        <input type="file" class="mt-1" id="pi" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="col-8 offset-2 mt-3 text-light bg-primary border-0 button_1" onclick="addProduct();">Add Product</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="script.js"></script>
</body>

</html>