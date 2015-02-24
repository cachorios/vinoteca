#language: es


@Contenido
Característica: Administrar contenidos para el sitio
Se administrara contenidos para lugo visualizarlo en el home del sitio
Y soy administrador

Antecedentes:
    Dado estos usuarios:
    | username | password |
    | cachorios@gmail.com | cachorios |
    | betoa2000@gmail.com | alberto   |

    Y estoy autentificado como "cachorios@gmail.com"

Escenario: Mostrar lista de contenido
    Dado que estoy en la ruta "homepage_admin"
        Y presiono en el link "Contenido"
    Entonces deberia estar en la ruta "contenido"
        Y  Ver "Lista de Contenido " como tiulo

Escenario: formulario de un nuevo contenido
    Dado que estoy en la ruta "contenido"
        Y aun no hay contenido
    Cuando presiono en el link "Nuevo Contenido"
    Entonces deberia estar en la ruta "contenido_new"
    Y  Ver "Nuevo Contenido" como tiulo

Escenario: Crear un carrusel
    Dado que estoy en la ruta "contenido_new"
        Y relleno el formulario:
        | campo                       | valor |
        | appbundle_contenido_nombre  | Carrusel 1 |
        | appbundle_contenido_orden   | 1          |
        | appbundle_contenido_tipo    | 0          |
        | appbundle_contenido_activo  | 1          |
        # 0 indica carrusel
    Cuando presiono el boton "Guardar"
    Entonces debo ver el mensaje de success "El Contenido se creó correctamente."





