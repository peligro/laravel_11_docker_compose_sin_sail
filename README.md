<hr />

<h1>Hola mundo desde Laravel 11 con Docker y docker-compose sin Sail</h1>
<h2>Laravel {{ App::VERSION() }}</h2>
<h2>Docker 27.2.0</h2>
<h2>Docker compose 3.8</h2>
<h2>Integración directa con Supervisor desde el contenedor (Para Qeues y Reverb)</h2>
<h3>Todo preparado para implementar un CD/CI bajo algún servidor de integración continua como Jenkins por ejemplo</h3>
<h4>Se agrega configuración para no tener problemas con la VPN</h4>


#instalar contenedor<br/>
<code>docker-compose up --build</code>
<hr />
#entrar a la consola
<br/>
<code>docker exec -it peligro-laravel-app bash</code>
<hr />
#detener proyecto
<br/>
<code>docker-compose down</code>