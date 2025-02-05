# Proyecto SAE

Este proyecto tiene como objetivo crear un sistema de gestión de proyectos informáticos. El sistema permite gestionar usuarios y proyectos, proporcionando funcionalidades para la creación, edición y búsqueda de estos elementos.

## Objetos

### Users

El objeto `User` representa a un usuario del sistema. Sus atributos y métodos son los siguientes:

#### Atributos

- `id`: Identificador único del usuario.
- `name`: Nombre del usuario.
- `email`: Correo electrónico del usuario.
- `password`: Contraseña del usuario.
- `empresa`: Empresa a la que pertenece el usuario.
- `ciudad`: Ciudad en la que se encuentra el usuario.

#### Métodos

- `__construct($id, $name, $email, $password, $empresa, $ciudad)`: Constructor del objeto `User`.
- `save()`: Guarda un nuevo usuario en la base de datos.
- `login($email, $password)`: Inicia sesión con el correo electrónico y la contraseña proporcionados.
- `findByEmail($email)`: Busca un usuario por su correo electrónico.
- `getPassword()`: Obtiene la contraseña del usuario.
- `getId()`: Obtiene el ID del usuario.
- `getName()`: Obtiene el nombre del usuario.
- `getEmail()`: Obtiene el correo electrónico del usuario.
- `getEmpresa()`: Obtiene la empresa del usuario.
- `getCiudad()`: Obtiene la ciudad del usuario.

### Proyectos

El objeto `Proyecto` representa un proyecto en el sistema. Sus atributos y métodos son los siguientes:

#### Atributos

- `id`: Identificador único del proyecto.
- `empresa`: Empresa que realiza el proyecto.
- `ciudad`: Ciudad en la que se desarrolla el proyecto.
- `tipo`: Tipo de proyecto.
- `fecha`: Fecha de inicio del proyecto.
- `programador`: Programador asignado al proyecto.
- `status`: Estado del proyecto.
- `requisitos`: Requisitos del proyecto.

#### Métodos

- `__construct($id, $empresa, $ciudad, $tipo, $fecha, $programador, $status, $requisitos)`: Constructor del objeto `Proyecto`.
- `save()`: Guarda un nuevo proyecto en la base de datos.
- `editar()`: Edita un proyecto existente en la base de datos.
- `obtenerProyectoPorId($id)`: Obtiene un proyecto por su ID.
- `obtenerTodosLosProyectos($empresa, $ciudad)`: Obtiene todos los proyectos de una empresa y ciudad específicas.
- `buscarPorEmpresaYCiudad($empresa, $ciudad)`: Busca proyectos por empresa y ciudad.
- `getId()`: Obtiene el ID del proyecto.
- `getEmpresa()`: Obtiene la empresa del proyecto.
- `getCiudad()`: Obtiene la ciudad del proyecto.
- `getTipo()`: Obtiene el tipo de proyecto.
- `getFecha()`: Obtiene la fecha del proyecto.
- `getProgramador()`: Obtiene el programador del proyecto.
- `getStatus()`: Obtiene el estado del proyecto.
- `getRequisitos()`: Obtiene los requisitos del proyecto.
- `setEmpresa($empresa)`: Establece la empresa del proyecto.
- `setCiudad($ciudad)`: Establece la ciudad del proyecto.
- `setTipo($tipo)`: Establece el tipo de proyecto.
- `setFecha($fecha)`: Establece la fecha del proyecto.
- `setProgramador($programador)`: Establece el programador del proyecto.
- `setStatus($status)`: Establece el estado del proyecto.
- `setRequisitos($requisitos)`: Establece los requisitos del proyecto.

## Funcionalidades del Sistema

El sistema de gestión de proyectos informáticos incluye las siguientes funcionalidades:

- **Gestión de Usuarios**: Permite crear, editar y buscar usuarios en el sistema.
- **Gestión de Proyectos**: Permite crear, editar y buscar proyectos en el sistema.
- **Autenticación de Usuarios**: Permite a los usuarios iniciar sesión en el sistema utilizando su correo electrónico y contraseña.
- **Búsqueda de Proyectos**: Permite buscar proyectos por empresa y ciudad.

Este sistema está diseñado para facilitar la gestión de proyectos informáticos, proporcionando una interfaz sencilla y eficiente para manejar usuarios y proyectos.
