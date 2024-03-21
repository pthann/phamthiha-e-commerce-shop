<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>

    <title>Document</title>
</head>
<body >
    <header class="d-flex justify-content-between" >
        <div>
            <a href="">
                <img src="img/logo.jpg" alt="" width="110px">
            </a>
        </div>

        <div class="w-50">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <button class="btn btn-outline-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        
        <div class="d-flex">
            <div>
                <img src="/img/user-avatar.jpg" width="40px"  alt="">
                <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Name
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                  </ul>
            </div>

            <div>
                <ul class="d-flex list-unstyled">
                    <li class="ms-2 mt-2"><a>Chart</a></li>
                    <li class="ms-2 mt-2"><a>Orders</a></li>
                </ul>
            </div>

        </div>
    </header>
    <div class="container d-flex justify-content-between">
        <nav>
            <div class="icon-bar">
                <a class="active" href="#"><i class="fa fa-home"></i></a> 
                <a href="#"><i class="fa fa-search"></i></a> 
                <a href="#"><i class="fa fa-envelope"></i></a> 
                <a href="#"><i class="fa fa-globe"></i></a>
                <a href="#"><i class="fa fa-trash"></i></a> 
                <a href="#"><i class="fa fa-trash"></i></a> 
                <a href="#"><i class="fa fa-trash"></i></a> 
                <a href="#"><i class="fa fa-trash"></i></a> 
                <a href="#"><i class="fa fa-trash"></i></a> 
              </div>          
        </nav>
        <section></section>
        <aside>
            <p>Recently Viewed</p>
            <a href="">
                <img src="img/tui-xach.jpg" alt="" width="150px">
            </a>
            <p>Recently Viewed</p>
            <a href="">
                <img src="img/tui-xach.jpg" alt="" width="150px">
            </a> 
    
        </aside>
    </div>
    
    
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js' integrity='sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==' crossorigin='anonymous'></script>

</body>
</html>