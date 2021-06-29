<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 Barcode Generator Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container container justify-content-center d-flex">
        <div class="row">
            <div class="col-md-12">
                <h3 class="">Laravel 8 Barcode Generator Example</h3>
                <!-- 1D Barcode Example -->
                <div>{!! DNS1D::getBarcodeHTML('0987654321', 'C39') !!}</div><br>
                <div>{!! DNS1D::getBarcodeHTML('7600322437', 'POSTNET') !!}</div></br>
                <div>{!! DNS1D::getBarcodeHTML('8780395141', 'PHARMA') !!}</div></br>
                <!-- 2D Barcode Example -->
                <div>{!! DNS2D::getBarcodeHTML('https://www.github.com/isaacwrk', 'QRCODE') !!}</div><br><br>
                <div>{!! DNS2D::getBarcodeSVG('https://www.github.com/isaacwrk', 'DATAMATRIX') !!}</div>
                <br>
                <br>
                <h3 class="mb-4">Laravel 8 Barcode Generator Example Colorful example!</h3>
                <!-- Get PNG Format Example -->
                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('github.com/isaacwrk', 'C39+',1,33,array(0,0,255), true)}}" alt="barcode" /><br/><br/>
                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('1234567890', 'C39+',3,33,array(58, 247, 44), true)}}" alt="barcode" /><br/><br/>
                <img src="data:image/png;base64,{{DNS1D::getBarcodePNG('Testando codigo de barras', 'C39+',1,33,array(255, 0, 0), true)}}" alt="barcode" />
                <br>
                <br>
            </div>
        </div>
    </div>
</body>
<footer>
<div class="text-center p-4" style="background-color: rgba(191, 191, 191);">
    Repositório:
    <a class="text-reset fw-bold" href="https://github.com/isaacwrk/lavarel-barcode" target="_blank">Clique aqui!</a>
</div>
</footer>
</html>