# 🧪 Proyecto Laravel - Comparador de Tarjetas de Crédito

Este proyecto es una prueba técnica en Laravel que permite visualizar y comparar tarjetas de crédito. Incluye migraciones, seeders, pruebas automatizadas y análisis estático de código.

---

## 🚀 Pasos para correr el proyecto

### 1️⃣   Clonar el repositorio

```bash
git clone https://github.com/jhongonz/calculate.git
cd calculate
```

### 2️⃣   Instalar dependencias de PHP
Instala las dependencias PHP del proyecto:

```bash
composer install
```

### 3️⃣   Configurar el entorno
Copia el archivo de ejemplo .env:

```bash
cp .env.example .env
```
Y luego modifica las credenciales de conexión a base de datos en .env:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_bd
DB_USERNAME=usuario
DB_PASSWORD=contraseña
```

### 4️⃣   Ejecutar las migraciones
```bash
php artisan migrate
```

### 5️⃣   Ejecutar los seeders
```bash
php artisan db:seed --class=CreditCardSeeder
```

### 6️⃣   Cambiar la URL del proyecto (opcional)
En el archivo .env, modifica la siguiente línea:
```text
APP_URL=http://calculate.local
```
Asegúrate de agregar calculate.local en tu archivo /etc/hosts apuntando a 127.0.0.1 si estás trabajando en local.

### 🌐 Visualizar la aplicación
Abre tu navegador y accede a:
```text
http://calculate.local/cards
```
Esto mostrará una tabla con las tarjetas de crédito disponibles y sus datos de prueba.

### 🧪 Pruebas y análisis de código
El proyecto incluye un archivo Makefile que te permite ejecutar diferentes comandos para pruebas y análisis.

#### Comandos disponibles
```bash
make test       # Ejecuta pruebas unitarias
make tests      # Ejecuta todas las pruebas
make analyse    # Ejecuta análisis estático (PHPStan)
make infection  # Ejecuta pruebas de mutación (Infection)
```

## 👨‍💻 Autor
Desarrollado como prueba por Jhonny Gonzalez [jhonnygonzalezf@gmail.com]
