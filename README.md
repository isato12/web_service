<!-- @format -->

# web_service

Como hacer deploy en heroku.
Paso 1
Crear una cuenta en heroku y agregar una tarjeta de credito, tener cuenta de github, tener instalado node.js, git y mysql workbench para manejo de las base de datos

Paso 2
Instalar heroku con el comando npm i -g heroku

paso 3
crear un proyecto en la página de heroku, colocando el nombre en minusculas sin espacios ni caracteres especiales.

paso 4
Vincular tu cuenta de github con heroku esto se ace en la pestaña deploy

paso 5
En la pestaña de resources tienes que crear una base de datos  ClearDB MySQL, se coloca en el buscador que viene en la parte de ariba y lo seleccionas, despues abres la base de datos y te dirije a otra ventana en esta ventana das click en  community edition y en la parte de abajo viene un enlace que inicia con heroku por ejemplo heroku_12354656654 das clik en el y te dirige a otra ventana, das clik en la pestaña system information donde vienen los datos a usar en la base de datos usuario y contraseña.

Paso 6
para obtener la ruta de heroku vamos a abrir la terminal en nuestro prooyecto y damos el comando heroku login y presionamos cualquier tecla, despues colocamos el comando heroku -apps enter y colocamos y, con este comando va,os a obtener el nombre de nuestra aplicacion, el mismo que ingresamos al crear nuestro proyecto,  y despues colocamos el comando heroku config --app nombredelproyecto en mi caso heroku config --app practica-crud y enter, con este comando obtendremos la liga que servira para hacer la configuracion en workbench solo usaremos la siguiente parte de la liga us-cdbr-east-05.cleardb.net

Paso 7 
Configurar el workbench abriendo vamos a dar click en el + que viene a lado de mysql connections y colocar un nombre el usuario que viene en el paso 5, agregamos la ruta que obtuvimos en el paso 6 y damos test conection y debera mostrar conexxion exitosa despues damos click en ok y ok.

paso 8 
Clickeamos dos veces la conexion que acabamos de crear para abrir la base de datos, ahora importaremos la base de datos de nuestro phpmyadmin, para eso vamos a la pagina de phpmyadmin y exportamos la base de datos y la guardamos, regresamos a workbench y en la pestalña donde dice server en el menu  damos click en data import, marcamos la segunda opcion y buscamos nuestro archivo, ahora colocamos el nombre de la base de datos donde se guardar y listo damos a continuar.

paso 9
