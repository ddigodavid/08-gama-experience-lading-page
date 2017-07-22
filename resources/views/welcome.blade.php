<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Hackathon Smart Cities</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Styles -->
    <style>
        
        
        div {
            padding: 0px;
            margin: 0px;
        }
        
        .uno-1 {
            background: url('/images/uno_01.jpg') no-repeat;
            width: 100%;
            height: 770px;
        }
        
        .uno-2 {
            background: url('/images/uno_02.png') no-repeat;
            width: 100%;
            height: 770px;
        }
        
        .uno-3 {
            background: url('/images/uno_03.png') no-repeat;
            width: 100%;
            height: 1000px;
        }
        
        .uno-4 {
            width: 100%;
            height: 100px;
        }
        
        .uno-5 {
            color: #fff;
            background: #ff2d7f;
            height: 100vh;
            padding: 15px;
            align-content: center;
        }
        
        .center {
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="uno-1"></div>
    <div class="uno-2"></div>
    <div class="uno-3"></div>
    <div class="uno-4"></div>
    <div class="uno-5">
        <div class="center">
            <h1 clas="center">FAÇA SUA INSCRIÇÃO</h1>
        </div>
        <div class="col-xs-12 col-md-6 col-md-offset-3">
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nome: </label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="name">E-mail: </label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="name">Profissão: </label>
                    <input type="text" class="form-control" name="occupation">
                </div>
                <div class="form-group">
                    <label for="name">Área de interesse: </label>
                    <select name="areaOfInterest" id="areaOfInterest" class="form-control">
                        <option value="developer">Desenvolvedor</option>
                        <option value="design">Design</option>
                        <option value="sales">Vendas</option>
                        <option value="marketin">Marketing</option>
                    </select>
                </div>
                <div class="center">
                    <button type="submit" class="btn btn-success" style="background: #7ac043;">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>