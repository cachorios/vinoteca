<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('fa', array (
  'validators' => 
  array (
    'This value should be false.' => 'این مقدار باید نادرست(False) باشد.',
    'This value should be true.' => 'این مقدار باید درست(True) باشد.',
    'This value should be of type {{ type }}.' => 'این مقدار باید از نوع {{ type }} باشد.',
    'This value should be blank.' => 'این فیلد باید خالی باشد.',
    'The value you selected is not a valid choice.' => 'گزینه انتخابی معتبر نیست.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'باید حداقل {{ limit }} گزینه انتخاب کنید.|باید حداقل {{ limit }} گزینه انتخاب کنید.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'حداکثر {{ limit }} گزینه می توانید انتخاب کنید.|حداکثر {{ limit }} گزینه می توانید انتخاب کنید.',
    'One or more of the given values is invalid.' => 'یک یا چند مقدار نامعتبر وجود دارد.',
    'The fields {{ fields }} were not expected.' => 'فیلدهای {{ fields }} اضافی هستند.',
    'The fields {{ fields }} are missing.' => 'فیلدهای {{ fields }} کم هستند.',
    'This value is not a valid date.' => 'این مقدار یک تاریخ معتبر نیست.',
    'This value is not a valid datetime.' => 'این مقدار یک تاریخ و زمان معتبر نیست.',
    'This value is not a valid email address.' => 'این یک رایانامه معتبر نیست.',
    'The file could not be found.' => 'فایل پیدا نشد.',
    'The file is not readable.' => 'فایل قابلیت خواندن ندارد.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است({{ size }} {{ suffix }}). حداکثر اندازه مجاز برابر {{ limit }} {{ suffix }} است.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'این نوع فایل مجاز نیست({{ type }}). نوع های مجاز {{ types }} هستند.',
    'This value should be {{ limit }} or less.' => 'این مقدار باید کوچکتر یا مساوی {{ limit }} باشد.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} است.|بسیار طولانی است.حداکثر تعداد حروف مجاز برابر {{ limit }} است.',
    'This value should be {{ limit }} or more.' => 'این مقدار باید برابر و یا بیشتر از {{ limit }} باشد.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'بسیار کوتاه است.تعداد حروف باید حداقل {{ limit }} باشد.|بسیار کوتاه است.تعداد حروف باید حداقل {{ limit }} باشد.',
    'This value should not be blank.' => 'این مقدار نباید تهی باشد.',
    'This value should not be null.' => 'باید مقداری داشته باشد..',
    'This value should be null.' => 'نباید مقداری داشته باشد.',
    'This value is not valid.' => 'این مقدار معتبر نیست.',
    'This value is not a valid time.' => 'این مقدار یک زمان صحیح نیست.',
    'This value is not a valid URL.' => 'این یک URL معتبر نیست.',
    'The two values should be equal.' => 'دو مقدار باید برابر باشند.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'فایل بیش از اندازه بزرگ است. حداکثر اندازه مجاز برابر {{ limit }} {{ suffix }} است.',
    'The file is too large.' => 'فایل بیش از اندازه بزرگ است.',
    'The file could not be uploaded.' => 'بارگذاری فایل با شکست مواجه شد.',
    'This value should be a valid number.' => 'این مقدار باید یک عدد معتبر باشد.',
    'This file is not a valid image.' => 'این فایل یک تصویر نیست.',
    'This is not a valid IP address.' => 'این مقدار یک IP معتبر نیست.',
    'This value is not a valid language.' => 'این مقدار یک زبان صحیح نیست.',
    'This value is not a valid locale.' => 'این مقدار یک محل صحیح نیست.',
    'This value is not a valid country.' => 'این مقدار یک کشور صحیح نیست.',
    'This value is already used.' => 'این مقدار قبلا مورد استفاده قرار گرفته است.',
    'The size of the image could not be detected.' => 'اندازه تصویر قابل شناسایی نیست.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'طول تصویر بسیار بزرگ است ({{ width }}px). بشینه طول مجاز {{ max_width }}px است.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'طول تصویر بسیار کوچک است ({{ width }}px). کمینه طول موردنظر {{ min_width }}px است.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'ارتفاع تصویر بسیار بزرگ است ({{ height }}px). بشینه ارتفاع مجاز {{ max_height }}px است.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'ارتفاع تصویر بسیار کوچک است ({{ height }}px). کمینه ارتفاع موردنظر {{ min_height }}px است.',
    'This value should be the user\'s current password.' => 'این مقدار می بایست کلمه عبور کنونی کاربر باشد.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => ' این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.| این مقدار می بایست دقیقا {{ limit }} کاراکتر داشته باشد.',
    'The file was only partially uploaded.' => 'فایل به صورت جزیی بارگذاری شده است.',
    'No file was uploaded.' => 'هیچ فایلی بارگذاری نشد.',
    'No temporary folder was configured in php.ini.' => 'فولدر موقت در php.ini پیکربندی نشده است.',
    'Cannot write temporary file to disk.' => 'فایل موقت را نمی توان در دیسک نوشت.',
    'A PHP extension caused the upload to fail.' => 'اکستنشن PHP موجب شد که بارگذاری فایل با شکست مواجه شود.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'این مجموعه می بایست دارای {{ limit }} عنصر یا بیشتر باشد.|این مجموعه می بایست دارای {{ limit }} عنصر یا بیشتر باشد.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'این مجموعه می بایست دارای حداقل {{ limit }} عنصر یا کمتر باشد.|این مجموعه می بایست دارای {{ limit }} عنصر یا کمتر باشد.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'این مجموعه می بایست به طور دقیق دارا {{ limit }} عنصر باشد.|این مجموعه می بایست به طور دقیق دارای {{ limit }} قلم باشد.',
    'Invalid card number.' => 'شماره کارت نامعتبر است.',
    'Unsupported card type or invalid card number.' => 'نوع کارت پشتیبانی نمی شود یا شماره کارت نامعتبر است.',
    'This is not a valid International Bank Account Number (IBAN).' => 'این یک شماره حساب بین المللی بانک (IBAN) درست نیست.',
    'This value is not a valid ISBN-10.' => 'این مقدار یک ISBN-10 درست نیست.',
    'This value is not a valid ISBN-13.' => 'این مقدار یک ISBN-13 درست نیست.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'این مقدار یک ISBN-10 درست یا ISBN-13 درست نیست.',
    'This value is not a valid ISSN.' => 'این مقدار یک ISSN درست نیست.',
    'This value is not a valid currency.' => 'این مقدار یک یکای پول درست نیست.',
    'This value should be equal to {{ compared_value }}.' => 'این مقدار باید برابر با {{ compared_value }} باشد.',
    'This value should be greater than {{ compared_value }}.' => 'این مقدار باید از {{ compared_value }} بیشتر باشد.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'این مقدار باید بزرگتر یا مساوی با {{ compared_value }} باشد.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار باید با {{ compared_value_type }} {{ compared_value }} یکی باشد.',
    'This value should be less than {{ compared_value }}.' => 'این مقدار باید کمتر از {{ compared_value }} باشد.',
    'This value should be less than or equal to {{ compared_value }}.' => 'این مقدار باید کمتر یا مساوی با {{ compared_value }} باشد.',
    'This value should not be equal to {{ compared_value }}.' => 'این مقدار نباید با {{ compared_value }} برابر باشد.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'این مقدار نباید {{ compared_value_type }} {{ compared_value }} یکی باشد.',
    'This form should not contain extra fields.' => 'این فرم نباید فیلد اضافی داشته باشد.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'فایل بارگذاری شده بسیار بزرگ است. لطفا فایل کوچکتری را بارگزاری کنید.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'مقدار CSRF نامعتبر است. لطفا فرم را مجددا ارسال فرمایید..',
    'fos_user.username.already_used' => 'نام‌کاربری قبلا ثبت شده است',
    'fos_user.username.blank' => 'لطفا نام‌کاربری خود را وارد کنید',
    'fos_user.username.short' => '[-Inf,Inf]تعداد حروف نام‌کاربری کمتر از حد مجاز است',
    'fos_user.username.long' => '[-Inf,Inf]تعداد حروف نام‌کاربری بیشتر از حد مجاز است',
    'fos_user.email.already_used' => 'رایانامه قبلا ثبت شده است',
    'fos_user.email.blank' => 'لطفا رایانامه خود را وارد کنید',
    'fos_user.email.short' => '[-Inf,Inf]تعداد حروف رایانامه کمتر از حد مجاز است',
    'fos_user.email.long' => '[-Inf,Inf]تعداد حروف رایانامه بیشتر از حد مجاز است',
    'fos_user.email.invalid' => 'رایانامه وارد شده مجاز نیست',
    'fos_user.password.blank' => 'لطفا کلمه‌عبور خود را وارد کنید',
    'fos_user.password.short' => '[-Inf,Inf]تعداد حروف کلمه‌عبور کمتر از حد مجاز است',
    'fos_user.password.mismatch' => 'کلمه عبور وارد شده هماهنگ نیست',
    'fos_user.new_password.blank' => 'لطفا کلمه‌عبور خود را دوباره وارد کنید',
    'fos_user.new_password.short' => '[-Inf,Inf]تعداد حروف تکرار‌کلمه‌عبور کمتر از حد مجاز است',
    'fos_user.current_password.invalid' => 'کلمه‌عبور فعلی مجاز نیست',
    'fos_user.group.blank' => 'لطفا نام‌گروه را وارد کنید',
    'fos_user.group.short' => '[-Inf,Inf]تعداد حروف نام‌گروه وارد شده کمتر از حد مجاز است',
    'fos_user.group.long' => '[-Inf,Inf]تعداد حروف نام‌گروه وارد شده بیشتر از حد مجاز است',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'خطایی هنگام تعیین اعتبار اتفاق افتاد.',
    'Authentication credentials could not be found.' => 'شرایط تعیین اعتبار پیدا نشد.',
    'Authentication request could not be processed due to a system problem.' => 'درخواست تعیین اعتبار به دلیل مشکل سیستم قابل بررسی نیست.',
    'Invalid credentials.' => 'شرایط نامعتبر.',
    'Cookie has already been used by someone else.' => 'کوکی قبلا برای شخص دیگری استفاده شده است.',
    'Not privileged to request the resource.' => 'دسترسی لازم برای درخواست این منبع را ندارید.',
    'Invalid CSRF token.' => 'توکن CSRF معتبر نیست.',
    'Digest nonce has expired.' => 'Digest nonce منقضی شده است.',
    'No authentication provider found to support the authentication token.' => 'هیچ ارایه کننده تعیین اعتباری برای ساپورت توکن تعیین اعتبار پیدا نشد.',
    'No session available, it either timed out or cookies are not enabled.' => 'جلسه‌ای در دسترس نیست. این میتواند یا به دلیل پایان یافتن زمان باشد یا اینکه کوکی ها فعال نیستند.',
    'No token could be found.' => 'هیچ توکنی پیدا نشد.',
    'Username could not be found.' => 'نام ‌کاربری پیدا نشد.',
    'Account has expired.' => 'حساب کاربری منقضی شده است.',
    'Credentials have expired.' => 'پارامترهای تعیین اعتبار منقضی شده‌اند.',
    'Account is disabled.' => 'حساب کاربری غیرفعال است.',
    'Account is locked.' => 'حساب کاربری قفل شده است.',
  ),
  'FOSUserBundle' => 
  array (
    'group.edit.submit' => 'بهنگام سازی',
    'group.show.name' => 'نام گروه',
    'group.new.submit' => 'ایجاد گروه',
    'group.flash.updated' => 'گروه بهنگام شده است',
    'group.flash.created' => 'گروه ساخته شده است',
    'group.flash.deleted' => 'گروه حذف شده است',
    'security.login.username' => 'نام کاربری',
    'security.login.password' => 'کلمه عبور',
    'security.login.remember_me' => 'مرا به یاد سپار',
    'security.login.submit' => 'ورود',
    'profile.show.username' => 'نام کاربری',
    'profile.show.email' => 'ایمیل',
    'profile.edit.submit' => 'بهنگام سازی',
    'profile.flash.updated' => 'نمایه بهنگام شده است',
    'change_password.submit' => 'تغییر کلمه عبور',
    'change_password.flash.success' => 'کلمه عبور تغییر کرده است',
    'registration.check_email' => 'ایمیلی به %email% فرستاده شده است. این ایمیل دارای پیوندی است که برای فعال سازی باید روی آن کلیک کنید.',
    'registration.confirmed' => '%username% تبریک, کاربری شما اکنون فعال شده است.',
    'registration.back' => 'برگشت به صفحه اصلی.',
    'registration.submit' => 'ثبت نام',
    'registration.flash.user_created' => 'کاربر با موفقیت ساخته شده است',
    'registration.email.subject' => '%username% خوش آمدید!',
    'registration.email.message' => '%username% سلام!

برای تکمیل فعال سازی کاربری خود - لطفا %confirmationUrl% را مشاهده کنید

با احترام،
تیم.
',
    'resetting.password_already_requested' => 'کلمه عبور برای این کاربر هم اکنون طی ۲۴ ساعت گذشته درخواست شده است.',
    'resetting.check_email' => 'ایمیلی به %email% فرستاده شده است. این ایمیل دارای پیوندی است که برای بازنشانی کلمه عبور باید روی آن کلیک کنید.',
    'resetting.request.invalid_username' => 'نام کاربری یا ایمیل "%username%" موجود نیست.',
    'resetting.request.username' => 'نام کاربری یا ایمیل',
    'resetting.request.submit' => 'بازنشانی کلمه عبور',
    'resetting.reset.submit' => 'تغییر کلمه عبور',
    'resetting.flash.success' => 'کلمه عبور با موفقیت بازنشانی شده است',
    'resetting.email.subject' => 'بازنشانی کلمه عبور',
    'resetting.email.message' => '%username% سلام!

برای بازنشانی کلمه عبور خود - لطفا %confirmationUrl% را مشاهده کنید

با احترام،
تیم.
',
    'layout.logout' => 'خروج',
    'layout.login' => 'ورود',
    'layout.register' => 'ثبت نام',
    'layout.logged_in_as' => 'وارد شده با %username%',
    'form.group_name' => 'نام گروه',
    'form.username' => 'نام کاربری',
    'form.email' => 'ایمیل',
    'form.current_password' => 'کلمه عبور کنونی',
    'form.password' => 'کلمه عبور',
    'form.password_confirmation' => 'تایید کلمه عبور',
    'form.new_password' => 'کلمه عبور جدید',
    'form.new_password_confirmation' => 'تایید کلمه عبور جدید',
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
