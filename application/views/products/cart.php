<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500;900&display=swap" rel="stylesheet">
    <!--Jquery library-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- bootstrap library-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- font awesome library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- main style -->
    <link rel="stylesheet/less" type="text/css" href="../Assets/style/cart.less">
    <link rel="stylesheet/less" type="text/css" href="../Assets/style/navigation.less">
    <!-- less library -->
    <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
</head>
<body>
    <!---------------------Navigation-------------------->
    <nav class="container">
        <div class="row w-100 align-items-center p-2 top-nav navbar fixed-top">
            <div class="col col-12 col-md-3 col-lg-2 col-xl-5">
                <a href="" class="slick">Slick<span class="tech glow">TECH</span></a>
            </div>

            <div class="col-12 col-md-9 col-lg-10 col-xl-3">
                <input type="search" class="form-control w-100" placeholder="Search For Product" aria-label="" aria-describedby="button-addon1">
            </div>

            <div class="col-auto col-lg-1 text-center">
                <a href="home.html" class="text-light w-100">HOME</a>
            </div>

            <div class="col-auto col-lg-1 text-center">
                <a href="all_products.html" class="text-light w-100">PRODUCTS</a>
            </div>

            <div class="col-auto col-lg-1 text-center align-items-center dropdown">
                <a class="dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Russell Martinez
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="../Users/Profile.html"><i class="fas fa-user-alt"></i>Edit Profile</button></a></li>
                <li><a class="dropdown-item" href="../Users/login.html"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
            
            <div class="col-auto col-lg-1 mt-1 text-center">
                <a href="cart.html" class="text-light w-100 cart"><i class="fas fa-shopping-cart"></i><div class="cart-count ">12</div></a>
            </div>

        </div>
    </nav>

    <h1 class="text-light"><i class="fas fa-shopping-cart"></i> Cart</h1>
    <!---------------------Cart Item Table-------------------------------->
    <div class="table-container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th class="col-1" scope="col-1">Select</th>
                    <th class="col" scope="col-1">item name</th>
                    <th class="col-2" scope="col-1">price</th>
                    <th class="col-2" scope="col-1">quantity</th>
                    <th class="col-2" scope="col-1">total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>

                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>

                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>
                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>

                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>

                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>

                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>   

                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>

                <tr>
                    <td class="text-center"><input type="checkbox"></td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>sample</td>
                    <td>@sample</td>
                </tr>
            </tbody>
        </table>
    </div>
     <!---------------------Total-------------------------------->
    <div class="total mb-5 text-light">
        <p ">TOTAL: $1000</p>
        <input type="button" class="btn btn-success" value="Continue Shopping">
    </div>
     <!---------------------Information-------------------------------->
    <div class="container text-light">
        <div class="row">
             <!---------------------Shipping information-------------------------------->
            <div class="col-12 col-lg-6">
                <h2 class="row">Shipping Information</h2>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label mb-1" for="defaultCheck1">use default</label> 
                <!---------------------Shipping Input fields------------------------------->
                <div class="row">
                    <p class="col-4">First name: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Last name: </p>
                    <input class="col-8" type="text">
                </div>
                
                <div class="row">
                    <p class="col-4">Address: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Address 2: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">City: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">State: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Zip code: </p>
                    <input class="col-8" type="text">
                </div>
            </div>

            <div class="col-12 col-lg-6">
                 <!---------------------Billing Information-------------------------------->
                <h2 class="row">Billing Information</h2>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label mb-1" for="defaultCheck1">Same as shipping</label> 
                <!---------------------Billing Inputfields------------------------------->
                <div class="row">
                    <p class="col-4">First name: </p>
                    <input class="col-8" type="text">
                </div>
              
                <div class="row">
                    <p class="col-4">Last name: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Address: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Address 2: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">City: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">State: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Zip code: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Card: </p>
                    <input class="col-8" type="text">
                </div>
                
                <div class="row">
                    <p class="col-4">Security code: </p>
                    <input class="col-8" type="text">
                </div>

                <div class="row">
                    <p class="col-4">Expiratione: </p>
                    <input class="col-3" type="text">
                    <p class="col-2 text-center">/</p>
                    <input class="col-3" type="text">
                </div>
            </div>
        </div>
    </div>
    <!---------------------Pay button------------------------------->
    <div class="pay">
        <input type="button" class="btn btn-primary mt-3" value="Pay $1000">
    </div>

    

</body>
</html>