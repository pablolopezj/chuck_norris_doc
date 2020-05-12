<p align="center"><img src="https://chuck-norris-media.s3.us-east-2.amazonaws.com/images/chuknorris_gif_03.gif" width="400"></p>

# Chuck Norris Jokes 


Este proyecto esta hecho con docker, PHP (Laravel) y NGINX, a continuación se muestran las configuraciones previas:



### Copiando el .env

```
    $ cp .env.example .env
```

Para poder indicar puertos de nginx, base de datos con su password, existe un .env en el cual se puede configurar
```
    PROJECT_NAME=nombre_del_proyecto_chuck_norris

    HTTP_PORT=puerto_para_http
    SSL_PORT=puerto_para_https

    DB_PORT_EXT=puerto_para_mysql(33061)
    DB_ROOT_PASS=password_para_user_root_mysql
    DB_NAME=name_to_our_database
```


### Ejecutando el proyecto

```
    $ docker-compose up --build -d
```

### Revisando el resultado

Para poder ver el resultado final, hay que verlo en el navegador con el puerto que fue asignado dentro del .env en HTTP_PORT, por ejemplo si asignamos HTTP_PORT=8080, revisaremos con la siguiente url

```
    http://localhost:8080
```
