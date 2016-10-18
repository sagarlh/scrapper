<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function() {
	for($j=1; $j<=5; $j++){

		echo $j;
	  $crawler = Goutte::request('GET', 'https://www.olx.in/all-results/q-banglore/?page='.$j);
	  $count = 1;
	  $crawler->filter('.detailsLink > span')->each(function ($node) {
	    echo $node->text()."<br />";
	   
		});
	}	
  
  //$url = $crawler->filter('.detailsLink > span');//->ger()->attr('href');
  //dump($url);
  //return view('welcome');
});

/*Route::get('/github', function() {
	//use Goutte\Client;
	$client = new Client();
	$crawler = $client->request('GET', 'http://github.com/');
	$crawler = $client->click($crawler->selectLink('Sign in')->link());
	$form = $crawler->selectButton('Sign in')->form();
	$crawler = $client->submit($form, array('login' => 'ssreejith@logicheart.com', 'password' => 'dhanyasagar12$!'));
	$crawler->filter('.flash-error')->each(function ($node) {
    print $node->text()."\n";
});*/
  
  //$url = $crawler->filter('.detailsLink > span');//->ger()->attr('href');
  //dump($url);
  //return view('welcome');
/*});*/
Route::get('github', 'testController@test');