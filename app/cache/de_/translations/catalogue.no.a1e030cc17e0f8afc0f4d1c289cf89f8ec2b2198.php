<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('no', array (
  'validators' => 
  array (
    'This value should be false.' => 'Verdien må være usann.',
    'This value should be true.' => 'Verdien må være sann.',
    'This value should be of type {{ type }}.' => 'Verdien må være av typen {{ type }}.',
    'This value should be blank.' => 'Verdien må være blank.',
    'The value you selected is not a valid choice.' => 'Den valgte verdien er ikke gyldig.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du må velge minst {{ limit }} valg.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan maks velge {{ limit }} valg.',
    'One or more of the given values is invalid.' => 'En eller flere av de oppgitte verdiene er ugyldige.',
    'This field was not expected.' => 'Dette feltet var ikke forventet.',
    'This field is missing.' => 'Dette feltet mangler.',
    'This value is not a valid date.' => 'Verdien er ikke en gyldig dato.',
    'This value is not a valid datetime.' => 'Verdien er ikke en gyldig dato/tid.',
    'This value is not a valid email address.' => 'Verdien er ikke en gyldig e-postadresse.',
    'The file could not be found.' => 'Filen kunne ikke finnes.',
    'The file is not readable.' => 'Filen er ikke lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor ({{ size }} {{ suffix }}). Tilatte maksimale størrelse {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Mimetypen av filen er ugyldig ({{ type }}). Tilatte mimetyper er {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Verdien må være {{ limit }} tegn lang eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Verdien er for lang. Den må ha {{ limit }} tegn eller mindre.',
    'This value should be {{ limit }} or more.' => 'Verdien må være {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Verdien er for kort. Den må ha {{ limit }} tegn eller flere.',
    'This value should not be blank.' => 'Verdien må ikke være blank.',
    'This value should not be null.' => 'Verdien må ikke være tom (null).',
    'This value should be null.' => 'Verdien må være tom (null).',
    'This value is not valid.' => 'Verdien er ikke gyldig.',
    'This value is not a valid time.' => 'Verdien er ikke en gyldig tid.',
    'This value is not a valid URL.' => 'Verdien er ikke en gyldig URL.',
    'The two values should be equal.' => 'Verdiene må være identiske.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen er for stor. Den maksimale størrelsen er {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen er for stor.',
    'The file could not be uploaded.' => 'Filen kunne ikke lastes opp.',
    'This value should be a valid number.' => 'Verdien må være et gyldig tall.',
    'This file is not a valid image.' => 'Denne filen er ikke et gyldig bilde.',
    'This is not a valid IP address.' => 'Dette er ikke en gyldig IP adresse.',
    'This value is not a valid language.' => 'Verdien er ikke et gyldig språk.',
    'This value is not a valid locale.' => 'Verdien er ikke en gyldig lokalitet.',
    'This value is not a valid country.' => 'Verdien er ikke et gyldig navn på land.',
    'This value is already used.' => 'Verdien er allerede brukt.',
    'The size of the image could not be detected.' => 'Bildestørrelsen kunne ikke oppdages.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildebredden er for stor ({{ width }} piksler). Tillatt maksimumsbredde er {{ max_width }} piksler.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildebredden er for liten ({{ width }} piksler). Forventet minimumsbredde er {{ min_width }} piksler.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildehøyden er for stor ({{ height }} piksler). Tillatt maksimumshøyde er {{ max_height }} piksler.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildehøyden er for liten ({{ height }} piksler). Forventet minimumshøyde er {{ min_height }} piksler.',
    'This value should be the user\'s current password.' => 'Verdien må være brukerens sitt nåværende passord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Verdien må være nøyaktig {{ limit }} tegn.',
    'The file was only partially uploaded.' => 'Filen var kun delvis opplastet.',
    'No file was uploaded.' => 'Ingen fil var lastet opp.',
    'No temporary folder was configured in php.ini.' => 'Den midlertidige mappen (tmp) er ikke konfigurert i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan ikke skrive midlertidig fil til disk.',
    'A PHP extension caused the upload to fail.' => 'En PHP-utvidelse forårsaket en feil under opplasting.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Denne samlingen må inneholde {{ limit }} element eller flere.|Denne samlingen må inneholde {{ limit }} elementer eller flere.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Denne samlingen må inneholde {{ limit }} element eller færre.|Denne samlingen må inneholde {{ limit }} elementer eller færre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Denne samlingen må inneholde nøyaktig {{ limit }} element.|Denne samlingen må inneholde nøyaktig {{ limit }} elementer.',
    'Invalid card number.' => 'Ugyldig kortnummer.',
    'Unsupported card type or invalid card number.' => 'Korttypen er ikke støttet eller ugyldig kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dette er ikke en gyldig IBAN.',
    'This value is not a valid ISBN-10.' => 'Verdien er ikke en gyldig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Verdien er ikke en gyldig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Verdien er hverken en gyldig ISBN-10 eller ISBN-13.',
    'This value is not a valid ISSN.' => 'Verdien er ikke en gyldig ISSN.',
    'This value is not a valid currency.' => 'Verdien er ikke gyldig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Verdien må være lik {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Verdien må være større enn {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Verdien må være større enn eller lik {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien må være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Verdien må være mindre enn {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Verdien må være mindre enn eller lik {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Verdien må ikke være lik {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Verdien må ikke være identisk med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Bildeforholdet er for stort ({{ ratio }}). Tillatt maksimumsbildeforhold er {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Bildeforholdet er for lite ({{ ratio }}). Forventet maksimumsbildeforhold er {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bildet er en kvadrat ({{ width }}x{{ height }}px). Kvadratiske bilder er ikke tillatt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bildet er i liggende retning ({{ width }}x{{ height }}px). Bilder i liggende retning er ikke tillatt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bildet er i stående retning ({{ width }}x{{ height }}px). Bilder i stående retning er ikke tillatt.',
    'An empty file is not allowed.' => 'Tomme filer er ikke tilatt.',
    'The host could not be resolved.' => 'Vertsnavn kunne ikke løses.',
    'This value does not match the expected {{ charset }} charset.' => 'Verdien samsvarer ikke med forventet tegnsett {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Dette er ikke en gyldig BIC.',
    'This form should not contain extra fields.' => 'Feltgruppen må ikke inneholde ekstra felter.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den opplastede filen var for stor. Vennligst last opp en mindre fil.',
    'The CSRF token is invalid.' => 'CSRF nøkkelen er ugyldig.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'En autentiseringsfeil har skjedd.',
    'Authentication credentials could not be found.' => 'Påloggingsinformasjonen kunne ikke bli funnet.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiserings forespørselen kunne ikke bli prosessert grunnet en system feil.',
    'Invalid credentials.' => 'Ugyldig påloggingsinformasjonen.',
    'Cookie has already been used by someone else.' => 'Cookie har allerede blitt brukt av noen andre.',
    'Not privileged to request the resource.' => 'Ingen tilgang til å be om gitt ressurs.',
    'Invalid CSRF token.' => 'Ugyldig CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce er utløpt.',
    'No authentication provider found to support the authentication token.' => 'Ingen autentiserings tilbyder funnet som støtter gitt autentiserings token.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen sesjon tilgjengelig, sesjonen er enten utløpt eller cookies ikke skrudd på.',
    'No token could be found.' => 'Ingen token kunne bli funnet.',
    'Username could not be found.' => 'Brukernavn kunne ikke bli funnet.',
    'Account has expired.' => 'Brukerkonto har utgått.',
    'Credentials have expired.' => 'Påloggingsinformasjon har utløpt.',
    'Account is disabled.' => 'Brukerkonto er deaktivert.',
    'Account is locked.' => 'Brukerkonto er sperret.',
  ),
));

$catalogueEs = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'fos_user.username.already_used' => 'El nombre de usuario ya está en uso',
    'fos_user.username.blank' => 'Por favor, ingrese un nombre de usuario',
    'fos_user.username.short' => '[-Inf,Inf]El nombre de usuario es demasiado corto',
    'fos_user.username.long' => '[-Inf,Inf]El nombre de usuario es demasiado largo',
    'fos_user.email.already_used' => 'La dirección de correo ya está en uso',
    'fos_user.email.blank' => 'Por favor, ingrese una dirección de correo',
    'fos_user.email.short' => '[-Inf,Inf]La dirección de correo es demasiado corta',
    'fos_user.email.long' => '[-Inf,Inf]La dirección de correo es demasiado larga',
    'fos_user.email.invalid' => 'La dirección de correo no es válida',
    'fos_user.password.blank' => 'Por favor, ingrese una contraseña',
    'fos_user.password.short' => '[-Inf,Inf]La contraseña es demasiado corta',
    'fos_user.password.mismatch' => 'Las dos contraseñas no coinciden',
    'fos_user.new_password.blank' => 'Por favor, ingrese una nueva contraseña',
    'fos_user.new_password.short' => '[-Inf,Inf]La nueva contraseña es demasiado corta',
    'fos_user.current_password.invalid' => 'La contraseña ingresada no es válida',
    'fos_user.group.blank' => 'Por favor, ingrese un nombre',
    'fos_user.group.short' => '[-Inf,Inf]El nombre es demasiado corto',
    'fos_user.group.long' => '[-Inf,Inf]El nombre es demasiado largo',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'compra' => 
  array (
    'facturaNumero' => 'Numero de factura',
    'cuit' => 'CUIT',
    'fechaReposicion' => 'Fecha de reposicion',
    'fechaAlta' => 'Fecha de alta',
    'acciones' => 'Acciones',
  ),
  'messages' => 
  array (
    'Nuevo Producto' => 'Nuevo Producto',
    'Codigo' => 'Código',
    'Nombre' => 'Nombre',
    'Precio' => 'Precio',
    'Iva' => 'I.V.A.',
    'Stock' => 'Stock',
    'acciones' => 'Acciones',
    'Activo' => 'Activo',
    'Imagenes' => 'Imagenes',
    'Descripcion' => 'Descripción',
    'Limite minimo de stock' => 'Limite minimo de stock',
    'varietal' => 'varietal',
    'cosecha' => 'cosecha',
    'Añejamiento' => 'Añejamiento',
    'Bodega' => 'Bodega',
    'volumen' => 'volumen',
    'Pais Origen' => 'Pais Origen',
    'Region Origen' => 'Region Origen',
    'Armonizacion' => 'Armonizacion',
    'base.footer.derechos' => 'Derechos © 2015 RBSoft Ready.',
    'Delete' => 'Delete',
    'Previous' => 'Anterior',
    'Next' => 'Siguiente',
  ),
  'vista' => 
  array (
    'empresa.empresa' => 'Cabaña Wanfried',
    'empresa.leyenda' => 'Cabaña Wanfried',
    'empresa.direcccion' => 'Chacabuco 5055, Posadas - Misiones, Argentina',
    'empresa.email' => 'cabana@wanfried.com',
    'empresa.tel' => '+54-376-472545',
    'contacto.label_contacto' => 'Contactenos',
    'copyright.derechos' => '2015 Cabaña Wanfried. Diseñado por LAR & AEV -  <a href="#">RBSoft.com</a>. Derechos reservados.',
    'base.empresa.empresa' => 'Cabaña Wanfried',
    'base.empresa.leyenda' => 'Cabaña Wanfried',
    'base.empresa.direcccion' => 'Chacabuco 5055, Posadas - Misiones, Argentina',
    'base.empresa.email' => 'cabana@wanfried.com',
    'base.empresa.tel' => '+54-376-472545',
    'base.contacto.label_contacto' => 'Contactenos',
    'base.copyright.derechos' => '2015 Cabaña Wanfried. Diseñado por LAR & AEV -  <a href="#">RBSoft.com</a>. Derechos reservados.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'Actualizar grupo',
    'group.show.name' => 'Nombre de grupo',
    'group.new.submit' => 'Crear grupo',
    'group.flash.updated' => 'El grupo ha sido actualizado',
    'group.flash.created' => 'El grupo ha sido creado',
    'group.flash.deleted' => 'El grupo ha sido borrado',
    'security.login.username' => 'Nombre de usuario:',
    'security.login.password' => 'Contraseña:',
    'security.login.remember_me' => 'Recordar',
    'security.login.submit' => 'Entrar',
    'profile.show.username' => 'Nombre de usuario',
    'profile.show.email' => 'Email',
    'profile.edit.submit' => 'Actualizar usuario',
    'profile.flash.updated' => 'El perfil ha sido actualizado',
    'change_password.submit' => 'Cambiar contraseña',
    'change_password.flash.success' => 'La contraseña se ha cambiado con éxito',
    'registration.check_email' => 'Se ha enviado un email a %email%. Contiene un enlace de activación que debes presionar para activar tu cuenta.',
    'registration.confirmed' => 'Felicidades %username%, tu cuenta está ahora confirmada.',
    'registration.back' => 'Volver a la página original.',
    'registration.submit' => 'Registrar',
    'registration.flash.user_created' => 'El usuario se ha creado satisfactoriamente',
    'registration.email.subject' => 'Bienvenido %username%!',
    'registration.email.message' => 'Hola %username%!

Para completar la validación de tu cuenta - por favor visita %confirmationUrl%

Atentamente,
el Equipo.
',
    'resetting.password_already_requested' => 'La contraseña para este usuario ya ha sido solicitada dentro de las 24 horas.',
    'resetting.check_email' => 'Un email ha sido enviado a %email%. Contiene un enlace de activación que debes presionar para restablecer tu contraseña.',
    'resetting.request.invalid_username' => 'El usuario o dirección de correo "%username%" no existe.',
    'resetting.request.username' => 'Nombre de usuario:',
    'resetting.request.submit' => 'Restablecer contraseña',
    'resetting.reset.submit' => 'Cambiar contraseña',
    'resetting.flash.success' => 'La contraseña se ha cambiado con éxito',
    'resetting.email.subject' => 'Restablecer Contraseña',
    'resetting.email.message' => 'Hola %username%!

Para restablecer tu contraseña - por favor visita %confirmationUrl%

Atentamente,
el Equipo UTA.
',
    'layout.logout' => 'Salir',
    'layout.login' => 'Entrar',
    'layout.register' => 'Registrar',
    'layout.logged_in_as' => 'Identificado como %username%',
    'form.group_name' => 'Nombre de grupo:',
    'form.username' => 'Nombre de usuario:',
    'form.email' => 'Email:',
    'form.current_password' => 'Contraseña actual:',
    'form.password' => 'Contraseña:',
    'form.password_confirmation' => 'Repita la contraseña:',
    'form.new_password' => 'Nueva contraseña:',
    'form.new_password_confirmation' => 'Repita la contraseña:',
    'Error! User account is disabled.' => 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
    'security.login.username_email' => 'Nombre de usuario o email:',
    'security.login.email' => 'Email:',
  ),
  'login' => 
  array (
    'login.btn_ingresar' => 'Ingresar',
    'login.clave' => 'Clave',
    'login.footer' => 'By RBSoft',
    'login.mensaje' => 'Por favor, inicie sesión para obtener acceso.',
    'login.perdio_clave' => 'Perdio su clave?',
    'login.recordarme' => 'Recordarme',
    'login.titulo' => 'Bienvenido a Cabañas Wanfried !!',
    'login.usuario' => 'Usuario',
  ),
  'registro' => 
  array (
    'registro.eMail' => 'eMail',
    'registro.Nombre Usuario' => 'Nombre Usuario',
    'registro.Contraseña' => 'Contraseña',
    'registro.Repita Contraseña' => 'Repita Contraseña',
    'registro.condicion.titulo' => 'Condición',
    'registro.condicion.texto' => 'condiciones generales',
    'registration.submit' => 'Registrate',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEs);

return $catalogue;
