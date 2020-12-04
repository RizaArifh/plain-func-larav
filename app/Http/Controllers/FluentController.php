<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
class FluentController extends Controller
{
    public function index(){
     echo '<h1>Fluent String</h1>';
    
     echo $slices= "Welcome to my youtube channel<br>";
    //after welcome to
    echo ' //setelah welcome to<br><br>';
    $slice= Str::of($slices)->after('Welcome to');
    echo $slice.'<br>'; 

    //after last double slice
    echo $slice2s='App\Http\Controllers\Controller<br>';
    echo ' //setelah double slash<br><br>';
    $slice2= Str::of($slice2s)->afterLast('\\');
    echo $slice2.'<br>'; 
    
    //add append
    echo $strings='Hello ';
    echo '<br> //append menambahkan World<br><br>';
    $stringa=Str::of($strings)->append('World<br>');
    echo $stringa.'<br>'; 
    
    // make string lower case
    echo $results='LARAVEL<br>';
    echo ' //lowercase<br><br>';
    $result=Str::of($results)->lower();
    echo $result.'<br>'; 
    
    // make string upper case
    echo $result2s='laravel<br>';
    echo ' //uppercase<br> <br>';
    $result2=Str::of($result2s)->upper();
    echo $result2.'<br>'; 
    

    // replace
    echo $replaced='laravel 7<br>';
    echo ' //replace 7 to 8<br> <br>';
    $replace=Str::of($replaced)->replace('7','8');
    echo $replace.'<br>'; 
    

    // make like a title
    echo $converted='this laravel is a title <br>';
    echo ' //make like a title<br> <br>';
    $convertedr=Str::of($converted)->title();
    echo $convertedr.'<br>'; 
    
    // adding slug
    echo $sluged='this laravel will be sluged';
    echo ' <br> //adding slug<br> <br>';
    $slugr=Str::of($sluged)->slug('-');
    echo $slugr.'<br><br>'; 
    
    // substr
    echo $sstred='Framework Laravel';
    echo ' <br> //take substr after char 9<br> <br>';
    $sstrr=Str::of($sstred)->substr(9);
    echo $sstrr.'<br><br>'; 

    // substr specific
    echo $sstred2='Framework Laravel';
    echo ' <br> //take substr after char 10 specific 5 char<br> <br>';
    $sstrr2=Str::of($sstred2)->substr(10,5);
    echo $sstrr2.'<br>'; 

    //triming
    echo $trimed='/laravel/8/doc/aa/';
    echo ' <br> //trim slice /<br> <br>';
    $trimr=Str::of($trimed)->trim('/');
    echo $trimr.'<br><br>'; 

    
    }
}
