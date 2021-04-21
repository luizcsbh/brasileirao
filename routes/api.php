<?php

use Illuminate\Http\Request;

Route::get("series", "SeriesController@index");
Route::get("series/{serie}", "SeriesController@show");
Route::post("series", "SeriesController@store");
Route::patch("series/{serie}", "SeriesController@update");
Route::delete("series/{serie}", "SeriesController@destroy");

Route::get("campeonatos","CampeonatosController@index");
Route::get("campeonatos/{campeonato}","CampeonatosController@show");
Route::post("campeonatos","CampeonatosController@store");
Route::patch("campeonatos/{campeonato}","CampeonatosController@update");
Route::delete("campeonatos/{campeonato}","CampeonatosController@destroy");

Route::get("times","TimesController@index");
Route::get("times/{time}","TimesController@show");
Route::post("times","TimesController@store");
Route::patch("times/{time}","TimesController@update");
Route::delete("times/{time}","TimesController@destroy");