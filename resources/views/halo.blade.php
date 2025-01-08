<?php
use Illuminate\Support\Facades\Route;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .navbar h1 {
            font-size: 4em;
            color: red;
        }
        .website {
            color : rgb(153, 153, 153);
            /* box-shadow: 0 0 10px black; */
        }
        .navbar {
            position: fixed;
            top:0;
            left:0;
            width: 100%;
            font-size:10px;
            font-family: Arial, sans-serif;
            font-weight:120px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color:rgb(2, 33, 100);
        }
        li{
            display: inline;
            margin: 0 10px;
        }
        li a{
            text-decoration: none;
            color: white;
            text-size: 21px;
        }
        .halo {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            flex-direction: row;
            height: 100vh;
            font-family: Arial, sans-serif;
            font-size: 20px;
        }
        .halo h1 {
            font-size: 3em;
            color: rgb(2, 33, 100);
        }
        .halo span {
            color: red;
        }
        .halo p {
            text-align: center;
            margin: 20px 0;
        }
        .halo a {
            padding: 10px 20px;
            background-color: rgb(2, 33, 100);
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .deskripsi{
            flex:3;
        }
        .gambar {
            flex:1;
            margin-top: 20px;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halo</title>
</head>
<body>
    <section>
        <div class="navbar">
            <h1>My <span class='website'>Website</span></h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="<?php echo Route::has('about') ? route('about') : '/about'; ?>">about</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section>
        <div class="halo">
            <div class="deskripsi">
                <h1>Bawa duniamu <br> menjadi <span>imajinatif</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, dicta molestiae? Hic ratione suscipit, dolorem ex ab accusantium. Id debitis molestias quo in eum minus pariatur repellat eius vitae fugit.</p>
                <a href="#">Read More</a>
            </div>
            <div class="gambar">
                <img src="https://images.unsplash.com/photo-1612838320302-4b3b3b3b3b3b" alt="gambar">
            </div>
        </div>
    </section>
</body>
</html>