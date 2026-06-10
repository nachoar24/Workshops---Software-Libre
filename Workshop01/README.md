# Workshop 01 - Ignacio Araya Rojas

## Comandos básicos para sobrevivir en Bash

- `ls`: Lista los archivos y directorios.
- `cd`: Cambia el directorio actual.
- `pwd`: Muestra la ruta del directorio actual.
- `mkdir`: Crea un nuevo directorio.
- `touch`: Crea un nuevo archivo vacío.
- `rm`: Elimina archivos o directorios.
- `cp`: Copia archivos o directorios.
- `mv`: Mueve o renombra archivos o directorios.
- `cat`: Muestra el contenido de un archivo.
- `echo`: Imprime texto en la terminal.

---

## Aprovisionamiento de un servidor GNU/Linux Debian con Vagrant

### 1. Crear la estructura de directorios

Se creó una estructura organizada para almacenar los workshops y las máquinas virtuales utilizadas durante el curso.

```bash
mkdir ISW811
cd ISW811

mkdir VMs Workshops
mkdir -p Workshops/Workshop01
mkdir -p VMs/webserver
```

### 2. Inicializar el proyecto Vagrant

Se ingresó al directorio destinado para la máquina virtual y se generó un archivo `Vagrantfile` utilizando una imagen de Debian Bookworm.

```bash
cd VMs/webserver

vagrant init debian/bookworm64
```

### 3. Levantar la máquina virtual

Con el archivo de configuración creado, se inició la descarga y creación de la máquina virtual.

```bash
vagrant up
```

### 4. Verificar el estado de la VM

Una vez creada la máquina, se verificó que estuviera ejecutándose correctamente.

```bash
vagrant status
```

### 5. Conectarse por SSH

Se accedió a la máquina virtual para realizar tareas administrativas.

```bash
vagrant ssh
```

### 6. Actualizar los repositorios del sistema

Dentro de Debian se actualizaron las listas de paquetes disponibles.

```bash
sudo apt-get update
```

### 7. Instalar Apache Web Server

Se instaló el servidor web Apache utilizando el gestor de paquetes de Debian.

```bash
sudo apt-get install apache2
```

### 8. Verificar puertos y red

Se comprobó que Apache estuviera escuchando correctamente en el puerto 80 y se revisó la configuración de red de la máquina.

```bash
sudo ss -tunl

ip a
```

Resultado esperado:

- Puerto `80` abierto para Apache.
- Puerto `22` abierto para SSH.
- Dirección IP privada asignada a la interfaz de red.

### 9. Apagar y volver a iniciar la máquina virtual

Desde el sistema anfitrión se realizaron pruebas de apagado y encendido de la VM.

```bash
vagrant halt

vagrant up
```

---

## Creación del README del Workshop

Se creó la carpeta correspondiente al Workshop 01 y posteriormente el archivo README en formato Markdown.

```bash
cd ~/ISW811/Workshops/Workshop01

touch README.md

code README.md
```

---

## Creación de la estructura para un sitio web

Se preparó una estructura básica para alojar archivos de un sitio web dentro del proyecto.

```bash
cd ~/ISW811/VMs/webserver

mkdir sites
cd sites

mkdir default
cd default

touch index.html
```

Estructura resultante:

```text
webserver/
└── sites/
    └── default/
        └── index.html
```

---

## Estructura general del proyecto

```text
ISW811/
├── VMs/
│   └── webserver/
│       ├── Vagrantfile
│       └── sites/
│           └── default/
│               └── index.html
│
└── Workshops/
    └── Workshop01/
        └── README.md
```

---

## Conclusión

Durante este workshop se practicaron los comandos fundamentales de Bash para la administración de archivos y directorios. Además, se configuró un entorno virtualizado utilizando Vagrant y Debian GNU/Linux, se instaló y verificó el funcionamiento del servidor web Apache y se organizó una estructura básica de proyecto siguiendo buenas prácticas para el curso de Software Libre.