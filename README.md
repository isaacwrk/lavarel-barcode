<p  align="center"><a  href="https://laravel.com"  target="_blank"><img  src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"  width="400"></a></p>

  

<p  align="center">

<a  href="https://travis-ci.org/laravel/framework"><img  src="https://travis-ci.org/laravel/framework.svg"  alt="Build Status"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/packagist/dt/laravel/framework"  alt="Total Downloads"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/packagist/v/laravel/framework"  alt="Latest Stable Version"></a>

<a  href="https://packagist.org/packages/laravel/framework"><img  src="https://img.shields.io/packagist/l/laravel/framework"  alt="License"></a>

</p>

  

##  Description

In this respository i will share you how to generate barcode using laravel 8. If you want just clone this repository do : `git clone https://github.com/isaacwrk/lavarel-barcode` , run the *composer update* in your terminal and after that, configure your .env file with your local database.

## Requirements

 - Laravel 8
 - Composer


## Preparing the environment

**Configure Barcode Generator Package**
Update your project to receive the barcode with composer to install the milon/barcode

    composer require milon/barcode

We will configure the milon/barcode package in laravel 8 app. So, Open theconfig/app.php file and register the provider and aliases for milon/barcode and paste the bellow code.

     'providers' =>  [
    
    ....
    
    Milon\Barcode\BarcodeServiceProvider::class,
    
    ],
    
    'aliases' =>  [
    
    ....
    
    'DNS1D' => Milon\Barcode\Facades\DNS1DFacade::class,
    
    'DNS2D' => Milon\Barcode\Facades\DNS2DFacade::class,
    
    ]
**Creating Routes**

     Route::get('barcode',[BarcodeGeneratorController::class,'index'])->name('barcode');
     Route::get('barcode-img',[BarcodeGeneratorController::class,'imgbarcode'])->name('barcode-img');
    
 

**Controller Settings**

   
    <?php
    
      
    
    namespace  App\Http\Controllers;
    
      
    
    use  Illuminate\Http\Request;
    
      
    
    class  BarcodeGeneratorController  extends  Controller
    
    {
    
    /**
    
    * Write code on Method
    
    *
    
    * @return  response()
    
    */
    
    public  function  index()
    
    {
    
    return  view('barcode');
    
    }
    
    /**
    
    * image generate barcode
    
    *
    
    * @return  response()
    
    */
    
    public  function  imgbarcode()
    
    {
    
    return  view('img-barcode');
    
    }
    
    }



**Applying into blade**

```html
<h3  class="">Laravel 8 Barcode Generator Example</h3>

<!-- 1D Barcode Example -->

<div>{!! DNS1D::getBarcodeHTML('0987654321', 'C39') !!}</div><br>

<div>{!! DNS1D::getBarcodeHTML('7600322437', 'POSTNET') !!}</div></br>

<div>{!! DNS1D::getBarcodeHTML('8780395141', 'PHARMA') !!}</div></br>

<!-- 2D Barcode Example -->

<div>{!! DNS2D::getBarcodeHTML('https://www.github.com/isaacwrk', 'QRCODE') !!}</div><br><br>

<div>{!! DNS2D::getBarcodeSVG('https://www.github.com/isaacwrk', 'DATAMATRIX') !!}</div>

<br>

<br>

<h3  class="mb-4">Laravel 8 Barcode Generator Example Colorful example!</h3>

<!-- Get PNG Format Example -->

<img  src="data:image/png;base64,{{DNS1D::getBarcodePNG('github.com/isaacwrk', 'C39+',1,33,array(0,0,255), true)}}"  alt="barcode" /><br/><br/>

<img  src="data:image/png;base64,{{DNS1D::getBarcodePNG('1234567890', 'C39+',3,33,array(58, 247, 44), true)}}"  alt="barcode" /><br/><br/>

<img  src="data:image/png;base64,{{DNS1D::getBarcodePNG('Testando codigo de barras', 'C39+',1,33,array(255, 0, 0), true)}}"  alt="barcode" />
```

And now we have everything to test our barcode, so run

    php artisan serve


