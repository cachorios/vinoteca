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

    Y los accesos con sus link son:
    | nombre    | url |
    | home      | /   |
    | admin-home | /admin/ |
    | login     | /login |
    | contenido     | /admin/contenido/ |
    Y estoy autentificado como "cachorios@gmail.com"

Escenario: Mostrar lista de contenido
    Dado que estoy en "admin-home"
        Y presiono en el link "Contenido"
    Entonces deberia estar en "contenido"
        Y  Ver "Lista de Contenido " como tiulo

Escenario: Crear un contenido
    


