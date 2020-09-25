<?php

namespace Database\Seeders;

use App\Post;
use App\Row;
use App\Translation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$post = factory(Post::class)->create([
			'image' => '/images/miapuestaweb.png',
			'slug' => Str::slug('MiApuestaWeb - Sports Bets Web Application'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2018-05-01',
		]);
		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'MiApuestaWeb - Sports Bets Web Application',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="http://miapuestaweb.com" target="_blank">MiApuestaWeb</a> is an Sport Bet web application where users can bet a favorites sport matches, users can see any sport result. Admins can program any sport game and configure probabilities for each event and can change it in any moment. This development was made in six months. I worked like a solo fullstack Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p><a href="http://miapuestaweb.com" target="_blank">MiApuestaWeb</a> was developed wiht Laravel 5.4 and JQuery,  I used MySQL to handle the database and, I used Bootstrap 3.7,  I used PHPUnit to test the features</p>
                        <p>This application has a back office modules, where application admins could manage all master data: Categories, Leages, Teams, Games, Users, Bets, etc.</p></div>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'MiApuestaWeb - Aplicación web de Apuestas deportivas',
		]);

		$post = factory(Post::class)->create([
			'image' => '/images/ciriec.png',
			'slug' => Str::slug('CIRIEC - Online Courses Web Application'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2018-06-01',
		]);

		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'CIRIEC - Online Courses Web Application',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="http://cursos.ciriec-colombia.org" target="_blank">CIRIEC Colombia</a> is an On-line education web application where users can find an offer courses with diverse content. Admins can register a variety of courses in the same platform. Users can subscribe in any course and notify admins the payment. This development was made in two months. I worked like a solo fullstack Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p>When small talk stalls out, it’s often due to a phenomenon we call “mirroring.” In our attempts to be polite, we often answer people’s questions directly, repeat their observations, or just blandly agree with whatever they say. Such an approach can kill your conversation in the beginning. When you “break the mirror”, you give your interlocutor a chance to move forward in your small talk.</p>
              <p>This project was developed wiht Laravel 5.7 and Vue.js 2,  I used MySQL to handle the database and, I used Bootstrap 3.7,  I used PHPUnit to test the features</p>
              <p>This application has a back office modules, where application admins could manage all master data: Categories, Courses, Levels, Lessons, Evaluations, Cerfications, etc.</p></div>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'CIRIEC - Aplicación web de Cursos Online',
		]);

		$post = factory(Post::class)->create([
			'image' => '/images/miabogado.png',
			'slug' => Str::slug('MiAbogadoPeru - Lawyer management web application'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2018-07-01',
		]);

		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'MiAbogadoPeru - Lawyer management web application',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="http://miabogadoperu.com" target="_blank">Mi Abogado Perú</a> is a web application where Lawyers can sign up and register its lawyer categories, then all users can search lawyers by category, and make law queries to all category lawyers, these queries notify all registered lawyers who can respond user`s query. This development was made in one month. I worked like a solo fullstack Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p><a href=”http://miabogadoperu.com”>Mi Abogado Perú</a> was developed wiht Laravel 5.6 and Vue.js 2, We used MySQL to handle the database, We used PHPUnit to test the features, We used Bootstrap 3.7, finally We used Sass to mange the styles in the Theme Template.</p>
              <div class="text-justify"><p><a href=”http://miabogadoperu.com”>Mi Abogado Perú</a> has a back office modules, where application admins could manage all master data: Lawyers, Categories, Queries, Profile, etc.</p></div>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'MiAbogadoPeru - Aplicación web de Información de Abogados',
		]);

		$post = factory(Post::class)->create([
			'image' => '/images/cadem.png',
			'slug' => Str::slug('Cadem Institute - Online Education platform'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2018-08-01',
		]);

		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'Cadem Institute - Online Education platform',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="http://cadem.klaustro.net" target="_blank">Cadem Institute</a> is an On-line education web application where users can find an offer courses with diverse content, the customer had an idea to handle on-line, presential and VR courses, We develop only on-line and presential courses, VR-course will be developed in other phase. Admins can register a variety of courses in the same platform. Users can subscribe in any course and pay with Credit card, debit card and Paypal account. This development was made in six months. We use Agile methodology and I worked like a SCRUM Master.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p>This project was developed wiht Laravel 5.5 and Vue.js 2, We used MySQL to handle the database and We used Bootstrap 4.0</p>
             <p>To handle the courses subscriptions we use Braintree Gateway.</p>
             <p>This application has a back office modules, where application admins could manage all master data: Categories, Courses, Levels, Lessons, Evaluations, Cerfications, etc.</p></div>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'Cadem Institute - Plataforma de Educación Online',
		]);

		$post = factory(Post::class)->create([
			'image' => '/images/carsyagoo.png',
			'slug' => Str::slug('Carsyagoo Cars - dealer web application'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2018-09-01',
		]);

		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'Carsyagoo Cars - dealer web application',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="https://carsyagoo.com" target="_blank">CarsYaGoo!</a> is a Car Dealer Web Aplication, where dealers can subscribe to add its own cars anouncements to show other users its deals, users can search anouncements by makes, models, prices, etc. And the result will be showed depends of user state location, this application has a blog where admins can write posts and registered user can add comments an likes. This development was made in four months. We used Agile methodology and I worked like a SCRUM Master and fullstack Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p><a href="https://carsyagoo.com" target="_blank">CarsYaGoo!</a> was developed wiht Laravel 5.7 and Vue.js 2, We used Vuex to manage the state pattern, We used MySQL to handle the database, We used PHPUnit to test the features, We used Bootstrap 4.0, finally We used Sass to mange the styles in the Theme Template.</p>
                <p>To handle the subscriptions we use Paypal Gateway, we had some troubles triyin to deploy the project, because the paypal/rest-api-sdk-php PyPal plugin couldn`t process all credit cards, but we could handle it with omnipay/payflow plugin.</p>
                <p>We implement Google API to handle all application addresess to use Geolocations function getting Cars Dealers Latitude and Longitude.</p>
                <p>It was important in this project, to separate search results by states, and we use IP-API.com to get user Geolocation by IP address.</p>
                <p>This application has a back office modules, where application admins could manage all master data: Makes, Models, Body Types, Colors, Dealers, Blog, etc.</p></div>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'Carsyagoo Cars - Aplicación Web de Venta y Alquiler de Vehículos',
		]);

		$post = factory(Post::class)->create([
			'image' => '/images/soohi.png',
			'slug' => Str::slug('Soohiextensions - Hair extensions ecommerce web application'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2018-05-01',
		]);

		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'Soohiextensions - Hair extensions ecommerce web application',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="https://soohiextensions.com" target="_blank">Soohi Extensions</a> is an ecommerce application to sell Hair extensions, the client wanted to handle Payments with Paypal and Shipments by USPS. Users can add extensions to shopping cart and later checkout all items. This system is able to handle different prices by quantity and type of user (Users and Stylists). This development was made in five months. We used Agile methodology and I worked like a SCRUM Master and fullstack Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p><a href="https://soohiextensions.com" target="_blank">Soohi Extensions</a> was developed wiht Laravel 5.7 and Vue.js 2, We used Vuex to manage the state pattern, We used MySQL to handle the database, We used PHPUnit to test the features, We used Bootstrap 4.0, finally We used Sass to mange the styles in the Theme Template.</p>
            <p>To handle the payments we use Paypal Gateway, we had some troubles triyin to deploy the project, because the paypal/rest-api-sdk-php PyPal plugin couldn`t process all credit cards, but we could handle it with omnipay/payflow plugin.</p>
                <p>We implement Shippo API to handle all application shipments through USPS, with this API we could get shipments rates and print the USPS labels for the extensions packages that the client will ships later.</p>
                <p>This application has a back office modules, where application admins could manage all master data: Products, Options, Prices, Coupons, Orders, Shipments, Blog, etc.</p></div>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'Soohiextensions - Aplicación Web de Venta de Extenciones de Cabello',
		]);

		$post = factory(Post::class)->create([
			'image' => '/images/solaria.png',
			'slug' => Str::slug('Solaria Vacanze - Hotel booking web application.'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2019-02-25',
		]);

		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'Solaria Vacanze - Hotel booking web application.',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="http://solaria.pizzeriadaadriano.it" target="_blank">Solaria Vacanze</a> is a multilingual Hotel booking application to reserve rooms in a determinate dates, the client wanted to handle Payments with Paypal and avoid the overbooking in the same room at same dates. Users can add Hotels, add rooms, season prices and special prices. This system is able to handle different prices by different seasons of the year. This development was made in four months. We used Agile methodology and I worked like as Senior fullstack  Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p><a href="http://solaria.pizzeriadaadriano.it" target="_blank">Solaria Vacanze</a> was developed wiht Laravel 5.7 and Vue.js 2, We used Vuex to manage the state pattern, We used MySQL to handle the database, We used Bootstrap 4.0, finally We used Sass to mange the styles in the Theme Template.</p>
                <p>To handle the payments we use Paypal Checkout button.</p>
                <p>We implement Pusher API to avoid the overbooking, the application notify all clients when a room is selected by an other user.</p>
                <p>This application has a back office modules, where application admins could manage all master data: Hotels, Rooms, Season Prices, Special prices, Activities, Nwesletter subscriptions, Blog, etc.</p></div>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'Solaria Vacanze - Aplicación web de Reservaciones de Hotel.',
		]);

		$post = factory(Post::class)->create([
			'image' => '/images/whitebeach.png',
			'slug' => Str::slug('Whitebeach - Bar Restaurante web application'),
			'category_id' => 4,
			'user_id' => 1,
			'created_at' => '2019-04-16',
		]);

		$post->row()->save(new Row);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'title',
			'value' => 'Whitebeach - Bar Restaurant web application',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="http://demo.whitebeachgolfoaranci.com/" target="_blank">Whitebeach</a> is a multilingual bar reastaurant application. Users can add dishes, rental activities, photos to galleries, services and edit legal pages.  This development was made in two months. We used Agile methodology and I worked like as Senior fullstack  Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 1,
			'key' => 'content',
			'value' => '<div class="text-justify"><p><a href="http://demo.whitebeachgolfoaranci.com/" target="_blank">Whitebeach</a> was developed wiht Laravel 5.8 and Vue.js 2, We used Vuex to manage the state pattern, We used MySQL to handle the database, We used Vuetify, finally We used Sass to mange the styles in the Theme Template.</p>
                <p>This application has a back office modules, where application admins could manage all master data:Restorant products, rental activities, Galleries, Services, Newsletter users, table reservations, language tags, visitors contacts, edit legal pages, etc.</p>',
		]);

		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'title',
			'value' => 'Whitebeach - Aplicación web de Bar y Reastaurante',
		]);
		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'intro',
			'value' => '<p class="big text-justify"><a href="http://demo.whitebeachgolfoaranci.com/" target="_blank">Whitebeach</a> Es una aplicación de restaurante multilingüe. Los usuarios pueden agregar platos, actividades de alquiler, fotos a galerías, servicios y editar páginas legales. Este desarrollo se realizó en dos meses. Utilizamos la metodología Agile y trabajé como Senior Fullstack Developer.</p>',
		]);
		$post->row->translations()->create([
			'language_id' => 2,
			'key' => 'content',
			'value' => '<div class="text-justify"><p><a href="http://demo.whitebeachgolfoaranci.com/" target="_blank">Whitebeach</a> fue desarrollado con Laravel 5.8 y Vue.js 2, usamos Vuex para administrar el patrón de estado, usamos MySQL para manejar la base de datos, usamos Vuetify, finalmente usamos Sass para administrar los estilos en la plantilla de tema</p>
                <p>Esta aplicación tiene módulos de back office, donde los administradores de la aplicación pueden gestionar todos los datos maestros: productos de restauración, actividades de alquiler, galerías, servicios, usuarios de boletines, reservas de tablas, etiquetas de idiomas, contactos de visitantes, editar páginas legales, etc.</p>',
		]);
	}
}
