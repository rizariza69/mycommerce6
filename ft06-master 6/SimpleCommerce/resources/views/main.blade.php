<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Commerce</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="css/myStyle.css">

</head>
<body>

    <div style="margin-left:20px; margin-right:20px;">

        <!-- navigation -->
        <div class="col-xs-12">
            <nav class="navbar navbar-default custom-navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="#">Simple Commerce</a>

                    </div>
                
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                            <input type="text" class="search-box" placeholder="Search">
                            </div>
                            <button type="submit" class="search-btn">
                                <span class="glyphicon glyphicon-search" ></span>
                            </button>
                            <button type="button" class="search-btn">
                                <span class="glyphicon glyphicon-shopping-cart" ></span>
                            </button>
                        </form>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#">Link</a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->

                </div><!-- /.container-fluid -->
            </nav>
        </div>

        <!-- product list -->
        <div class="col-xs-12">
            <div class="col-xs-12 col-sm-4">
                <img src="img/product/product1.jpg" alt="" class="img-responsive" style="width:100%">
                <div class="product-name">
                    Product 1
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <img src="img/product/product2.jpg" alt="" class="img-responsive" style="width:100%">
                <div class="product-name">
                    Product 2
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <img src="img/product/product3.jpg" alt="" class="img-responsive" style="width:100%">
                <div class="product-name">
                    Product 3
                </div>
            </div>
        </div>

        <div class="col-xs-12"></div>

        <div class="col-xs-12"></div>

        <div class="col-xs-12"></div>

    </div>

    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>