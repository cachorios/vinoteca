#language: es
#Característica: Usuario
#
#    Antecednete:
#        Data la base de datos limpia

@authorizationLogin
Característica: formulario de ingreso
    Un usuario anonimo debe tener la posibilidad de conectarse correctamente
    Como usuario anonimo tengo que ser capaz de iniciar sesion cuando ingreso mis credenciales

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

Escenario: Ver formulario de acceso

    Dado que estoy en "home"
    Y presiono en el link "Ingresar"
    Entonces deberia estar en "login"
    Y  Ver "Bienvenido a " como tiulo

Escenario: Iniciar la sesion correctamente y redirigir al "Home"
    Dado que estoy en "login"
        Y relleno campo "login-username" con "cachorios@gmail.com"
        Y relleno campo "login-password" con "cachorios"
        Y presiono el boton "Ingresar"
    Entonces deberia estar en "admin-home"


Escenario: Login incorrecto
    Dado que estoy en "login"
        Y relleno campo "login-username" con "cachorios@gmail.com"
        Y relleno campo "login-password" con "cachorios2"
        Y presiono el boton "Ingresar"
    Entonces debo ver el mensaje de error "Bad credentials"
    #todo: Traduccion de Bad credentials

Escenario: Ya estoy iniciado
    Dado que estoy autentificado como "cachorios@gmail.com"
#    Entonces debería ver "Conectado como Luis Rios"
#    Y debería ver "Cerrar sesión"