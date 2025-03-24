<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div class="article">
        <div class="zones">
            <ul>
                @foreach ($categories as $category)
                    <li><h1>{{ $category->name }}</h1>{{ $category->description }} <br> créée le {{ $category->created_at }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible+Next:ital,wght@0,200..800;1,200..800&family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Funnel+Display:wght@300..800&family=Funnel+Sans:ital,wght@0,300..800;1,300..800&family=Gowun+Dodum&family=Lexend+Deca:wght@100..900&family=Lexend:wght@100..900&family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&family=Zain:ital,wght@0,200;0,300;0,400;0,700;0,800;0,900;1,300;1,400&display=swap');
        *{
            font-family: "Lexend Deca", sans-serif;
            padding: 0;
            margin: 0;
        }
        .article{
            padding: 20px 40px;
        }
        .article .zones ul{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            list-style: none;
            gap: 25px;
        }
        .article .zones ul li{
            padding: 10px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            height: 100px;
        }
    </style>
</body>
</html>