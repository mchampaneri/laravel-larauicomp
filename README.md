# laravel-larauicomp
Package is created to reduce the time to creating the ui componenets (like table) having same presentation with different attributes. It takes the data to put in the component and type of ui component and than renders the view according to the input  

# Supported components
At this moment only one components is Supported
Table

## Installation

  First Get It Through The Composer
  ```
    composer require mchampaneri/larauicomp
  ```

  Copy The ServiceProvider To config/app.php in **providers** array
  ```
     mchampaneri\larauicomp\UiCompServiceProvider::class
  ```
  Copy The Facade To config/app.php in **aliases** array
  ```
     mchampaneri\timeslicer\UiCompServiceProvider::class
  ```

  Second You have to publish the package
  ```
    php artisan vendor:publish
  ```
    This command will publish all assets file need by the package at appropriate direcotries.



  After This Three Steps are ready to use the larauicomp

## Setup  
   At first you have to set the config file of larauicomp. Define the default css class for components otherwise it will take blank as default

   In the second step you are ready to use this package where ever  you want


## Use

This is a library of views so you have to just include the view of component like this

```
$data = // Array of Data
@include('uicomp::table',['data'=>$data])
```
