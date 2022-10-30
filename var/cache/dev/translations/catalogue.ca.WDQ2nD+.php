<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('ca', array (
  'validators' => 
  array (
    'This value should be false.' => 'Aquest valor hauria de ser fals.',
    'This value should be true.' => 'Aquest valor hauria de ser cert.',
    'This value should be of type {{ type }}.' => 'Aquest valor hauria de ser del tipus {{ type }}.',
    'This value should be blank.' => 'Aquest valor hauria d\'estar buit.',
    'The value you selected is not a valid choice.' => 'El valor seleccionat no és una opció vàlida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Ha de seleccionar almenys {{ limit }} opció.|Ha de seleccionar almenys {{ limit }} opcions.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Ha de seleccionar com a màxim {{ limit }} opció.|Ha de seleccionar com a màxim {{ limit }} opcions.',
    'One or more of the given values is invalid.' => 'Un o més dels valors facilitats són incorrectes.',
    'This field was not expected.' => 'Aquest camp no s\'esperava.',
    'This field is missing.' => 'Aquest camp està desaparegut.',
    'This value is not a valid date.' => 'Aquest valor no és una data vàlida.',
    'This value is not a valid datetime.' => 'Aquest valor no és una data i hora vàlida.',
    'This value is not a valid email address.' => 'Aquest valor no és una adreça d\'email vàlida.',
    'The file could not be found.' => 'No s\'ha pogut trobar l\'arxiu.',
    'The file is not readable.' => 'No es pot llegir l\'arxiu.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran ({{ size }} {{ suffix }}). La grandària màxima permesa és {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipus mime de l\'arxiu no és vàlid ({{ type }}). Els tipus mime vàlids són {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Aquest valor hauria de ser {{ limit }} o menys.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcter o menys.|Aquest valor és massa llarg. Hauria de tenir {{ limit }} caràcters o menys.',
    'This value should be {{ limit }} or more.' => 'Aquest valor hauria de ser {{ limit }} o més.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Aquest valor és massa curt. Hauria de tenir {{ limit }} caràcters o més.',
    'This value should not be blank.' => 'Aquest valor no hauria d\'estar buit.',
    'This value should not be null.' => 'Aquest valor no hauria de ser null.',
    'This value should be null.' => 'Aquest valor hauria de ser null.',
    'This value is not valid.' => 'Aquest valor no és vàlid.',
    'This value is not a valid time.' => 'Aquest valor no és una hora vàlida.',
    'This value is not a valid URL.' => 'Aquest valor no és una URL vàlida.',
    'The two values should be equal.' => 'Els dos valors haurien de ser iguals.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'L\'arxiu és massa gran. El tamany màxim permés és {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'L\'arxiu és massa gran.',
    'The file could not be uploaded.' => 'No es pot pujar l\'arxiu.',
    'This value should be a valid number.' => 'Aquest valor hauria de ser un nombre vàlid.',
    'This file is not a valid image.' => 'L\'arxiu no és una imatge vàlida.',
    'This is not a valid IP address.' => 'Això no és una adreça IP vàlida.',
    'This value is not a valid language.' => 'Aquest valor no és un idioma vàlid.',
    'This value is not a valid locale.' => 'Aquest valor no és una localització vàlida.',
    'This value is not a valid country.' => 'Aquest valor no és un país vàlid.',
    'This value is already used.' => 'Aquest valor ja s\'ha utilitzat.',
    'The size of the image could not be detected.' => 'No s\'ha pogut determinar la grandària de la imatge.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'L\'amplària de la imatge és massa gran ({{ width }}px). L\'amplària màxima permesa són {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'L\'amplària de la imatge és massa petita ({{ width }}px). L\'amplària mínima requerida són {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'L\'altura de la imatge és massa gran ({{ height }}px). L\'altura màxima permesa són {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'L\'altura de la imatge és massa petita ({{ height }}px). L\'altura mínima requerida són {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Aquest valor hauria de ser la contrasenya actual de l\'usuari.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Aquest valor hauria de tenir exactament {{ limit }} caràcter.|Aquest valor hauria de tenir exactament {{ limit }} caràcters.',
    'The file was only partially uploaded.' => 'L\'arxiu va ser només pujat parcialment.',
    'No file was uploaded.' => 'Cap arxiu va ser pujat.',
    'No temporary folder was configured in php.ini.' => 'Cap carpeta temporal va ser configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No es va poder escriure l\'arxiu temporal en el disc.',
    'A PHP extension caused the upload to fail.' => 'Una extensió de PHP va fer que la pujada fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o més.|Aquesta col·lecció ha de contenir {{ limit }} elements o més.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Aquesta col·lecció ha de contenir {{ limit }} element o menys.|Aquesta col·lecció ha de contenir {{ limit }} elements o menys.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Aquesta col·lecció ha de contenir exactament {{ limit }} element.|Aquesta col·lecció ha de contenir exactament {{ limit }} elements.',
    'Invalid card number.' => 'Número de targeta invàlid.',
    'Unsupported card type or invalid card number.' => 'Tipus de targeta no suportada o número de targeta invàlid.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Això no és un nombre de compte bancari internacional (IBAN) vàlid.',
    'This value is not a valid ISBN-10.' => 'Aquest valor no és un ISBN-10 vàlid.',
    'This value is not a valid ISBN-13.' => 'Aquest valor no és un ISBN-13 vàlid.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Aquest valor no és ni un ISBN-10 vàlid ni un ISBN-13 vàlid.',
    'This value is not a valid ISSN.' => 'Aquest valor no és un ISSN vàlid.',
    'This value is not a valid currency.' => 'Aquest valor no és una divisa vàlida.',
    'This value should be equal to {{ compared_value }}.' => 'Aquest valor hauria de ser igual a {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Aquest valor hauria de ser més gran a {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Aquest valor hauria de ser major o igual a {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Aquest valor hauria de ser idèntic a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Aquest valor hauria de ser menor a {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Aquest valor hauria de ser menor o igual a {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Aquest valor no hauria de ser igual a {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Aquest valor no hauria de idèntic a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporció de l\'imatge és massa gran ({{ ratio }}). La màxima proporció permesa és {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporció de l\'imatge és massa petita ({{ ratio }}). La mínima proporció permesa és {{ max_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'imatge és quadrada({{ width }}x{{ height }}px). Les imatges quadrades no estan permeses.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'imatge està orientada horitzontalment ({{ width }}x{{ height }}px). Les imatges orientades horitzontalment no estan permeses.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'imatge està orientada verticalment ({{ width }}x{{ height }}px). Les imatges orientades verticalment no estan permeses.',
    'An empty file is not allowed.' => 'No està permès un fixter buit.',
    'The host could not be resolved.' => 'No s\'ha pogut resoldre l\'amfitrió.',
    'This value does not match the expected {{ charset }} charset.' => 'Aquest valor no coincideix amb l\'esperat {{ charset }} joc de caràcters.',
    'This is not a valid Business Identifier Code (BIC).' => 'Aquest no és un codi d\'identificació bancari (BIC) vàlid.',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'Aquest valor no és un UUID vàlid.',
    'This value should be a multiple of {{ compared_value }}.' => 'Aquest valor ha de ser múltiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Aquest Codi d\'identificació bancari (BIC) no està associat amb l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Aquest valor hauria de ser un JSON vàlid.',
    'This collection should contain only unique elements.' => 'Aquesta col·lecció només hauria de contenir elements únics.',
    'This value should be positive.' => 'Aquest valor hauria de ser positiu.',
    'This value should be either positive or zero.' => 'Aquest valor ha de ser positiu o zero.',
    'This value should be negative.' => 'Aquest valor ha de ser negatiu.',
    'This value should be either negative or zero.' => 'Aquest valor ha de ser negatiu o zero.',
    'This value is not a valid timezone.' => 'Aquest valor no és una zona horària vàlida.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Aquesta contrasenya s\'ha filtrat en cas de violació de dades, no s\'ha d\'utilitzar. Utilitzeu una altra contrasenya.',
    'This value should be between {{ min }} and {{ max }}.' => 'Aquest valor ha d\'estar entre {{ min }} i {{ max }}.',
    'This value is not a valid hostname.' => 'Aquest valor no és un nom d\'amfitrió vàlid.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'El nombre d\'elements d\'aquesta col·lecció ha de ser múltiple de {{compared_value}}.',
    'This value should satisfy at least one of the following constraints:' => 'Aquest valor ha de satisfer almenys una de les restriccions següents:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Cada element d\'aquesta col·lecció hauria de satisfer el seu propi conjunt de restriccions.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Aquest valor no és un número d\'identificació de valors internacionals (ISIN) vàlid.',
    'This value should be a valid expression.' => 'Aquest valor hauria de ser una expressió vàlida.',
    'This form should not contain extra fields.' => 'Aquest formulari no hauria de contenir camps addicionals.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'L\'arxiu pujat és massa gran. Per favor, pugi un arxiu més petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no és vàlid. Per favor, provi d\'enviar novament el formulari.',
    'This value is not a valid HTML5 color.' => 'Aquest valor no és un color HTML5 valid.',
    'Please enter a valid birthdate.' => 'Per favor introdueix una data d\'aniversari valida.',
    'The selected choice is invalid.' => 'L\'opció escollida és invalida.',
    'The collection is invalid.' => 'La col·lecció és invalida.',
    'Please select a valid color.' => 'Per favor selecciona un color vàlid.',
    'Please select a valid country.' => 'Per favor selecciona una ciutat vàlida.',
    'Please select a valid currency.' => 'Per favor selecciona una moneda vàlida.',
    'Please choose a valid date interval.' => 'Per favor escull un interval de dates vàlides.',
    'Please enter a valid date and time.' => 'Per favor introdueix una data i temps vàlid.',
    'Please enter a valid date.' => 'Per favor introdueix una data vàlida.',
    'Please select a valid file.' => 'Per favor selecciona un arxiu vàlid.',
    'The hidden field is invalid.' => 'El camp ocult és invàlid.',
    'Please enter an integer.' => 'Per favor introdueix un enter.',
    'Please select a valid language.' => 'Per favor selecciona un idioma vàlid.',
    'Please select a valid locale.' => 'Per favor seleccioneu una configuració regional vàlida',
    'Please enter a valid money amount.' => 'Per favor introdueix una quantitat de diners vàlids.',
    'Please enter a number.' => 'Per favor introdueix un número.',
    'The password is invalid.' => 'La contrasenya es invàlida.',
    'Please enter a percentage value.' => 'Per favor introdueix un valor percentual.',
    'The values do not match.' => 'Els valors no coincideixen.',
    'Please enter a valid time.' => 'Per favor introdueix un temps vàlid.',
    'Please select a valid timezone.' => 'Per favor selecciona una zona horària vàlida.',
    'Please enter a valid URL.' => 'Per favor introdueix una URL vàlida.',
    'Please enter a valid search term.' => 'Per favor introdueix un concepte de cerca vàlid.',
    'Please provide a valid phone number.' => 'Per favor introdueix un número de telèfon vàlid.',
    'The checkbox has an invalid value.' => 'La casella de selecció te un valor invàlid.',
    'Please enter a valid email address.' => 'Per favor introdueix un correu electrònic vàlid.',
    'Please select a valid option.' => 'Per favor selecciona una opció vàlida.',
    'Please select a valid range.' => 'Per favor selecciona un rang vàlid.',
    'Please enter a valid week.' => 'Per favor introdueix una setmana vàlida.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ha succeït un error d\'autenticació.',
    'Authentication credentials could not be found.' => 'No s\'han trobat les credencials d\'autenticació.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud d\'autenticació no s\'ha pogut processar per un problema del sistema.',
    'Invalid credentials.' => 'Credencials no vàlides.',
    'Cookie has already been used by someone else.' => 'La cookie ja ha estat utilitzada per una altra persona.',
    'Not privileged to request the resource.' => 'No té privilegis per solicitar el recurs.',
    'Invalid CSRF token.' => 'Token CSRF no vàlid.',
    'No authentication provider found to support the authentication token.' => 'No s\'ha trobat un proveïdor d\'autenticació que suporti el token d\'autenticació.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hi ha sessió disponible, ha expirat o les cookies no estan habilitades.',
    'No token could be found.' => 'No s\'ha trobat cap token.',
    'Username could not be found.' => 'No s\'ha trobat el nom d\'usuari.',
    'Account has expired.' => 'El compte ha expirat.',
    'Credentials have expired.' => 'Les credencials han expirat.',
    'Account is disabled.' => 'El compte està deshabilitat.',
    'Account is locked.' => 'El compte està bloquejat.',
    'Too many failed login attempts, please try again later.' => 'Massa intents d\'inici de sessió fallits, torneu-ho a provar més tard.',
    'Invalid or expired login link.' => 'Enllaç d\'inici de sessió no vàlid o caducat.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Massa intents d\'inici de sessió fallits, torneu-ho a provar en %minutes% minut.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Massa intents d\'inici de sessió fallits, torneu-ho a provar en %minutes% minuts.',
  ),
));

$catalogueFr = new MessageCatalogue('fr', array (
  'validators' => 
  array (
    'This value should be false.' => 'Cette valeur doit être fausse.',
    'This value should be true.' => 'Cette valeur doit être vraie.',
    'This value should be of type {{ type }}.' => 'Cette valeur doit être de type {{ type }}.',
    'This value should be blank.' => 'Cette valeur doit être vide.',
    'The value you selected is not a valid choice.' => 'Cette valeur doit être l\'un des choix proposés.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Vous devez sélectionner au moins {{ limit }} choix.|Vous devez sélectionner au moins {{ limit }} choix.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Vous devez sélectionner au maximum {{ limit }} choix.|Vous devez sélectionner au maximum {{ limit }} choix.',
    'One or more of the given values is invalid.' => 'Une ou plusieurs des valeurs soumises sont invalides.',
    'This field was not expected.' => 'Ce champ n\'a pas été prévu.',
    'This field is missing.' => 'Ce champ est manquant.',
    'This value is not a valid date.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid datetime.' => 'Cette valeur n\'est pas une date valide.',
    'This value is not a valid email address.' => 'Cette valeur n\'est pas une adresse email valide.',
    'The file could not be found.' => 'Le fichier n\'a pas été trouvé.',
    'The file is not readable.' => 'Le fichier n\'est pas lisible.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux ({{ size }} {{ suffix }}). Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Le type du fichier est invalide ({{ type }}). Les types autorisés sont {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Cette valeur doit être inférieure ou égale à {{ limit }}.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractère.|Cette chaîne est trop longue. Elle doit avoir au maximum {{ limit }} caractères.',
    'This value should be {{ limit }} or more.' => 'Cette valeur doit être supérieure ou égale à {{ limit }}.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractère.|Cette chaîne est trop courte. Elle doit avoir au minimum {{ limit }} caractères.',
    'This value should not be blank.' => 'Cette valeur ne doit pas être vide.',
    'This value should not be null.' => 'Cette valeur ne doit pas être nulle.',
    'This value should be null.' => 'Cette valeur doit être nulle.',
    'This value is not valid.' => 'Cette valeur n\'est pas valide.',
    'This value is not a valid time.' => 'Cette valeur n\'est pas une heure valide.',
    'This value is not a valid URL.' => 'Cette valeur n\'est pas une URL valide.',
    'The two values should be equal.' => 'Les deux valeurs doivent être identiques.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Le fichier est trop volumineux. Sa taille ne doit pas dépasser {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Le fichier est trop volumineux.',
    'The file could not be uploaded.' => 'Le téléchargement de ce fichier est impossible.',
    'This value should be a valid number.' => 'Cette valeur doit être un nombre.',
    'This file is not a valid image.' => 'Ce fichier n\'est pas une image valide.',
    'This is not a valid IP address.' => 'Cette adresse IP n\'est pas valide.',
    'This value is not a valid language.' => 'Cette langue n\'est pas valide.',
    'This value is not a valid locale.' => 'Ce paramètre régional n\'est pas valide.',
    'This value is not a valid country.' => 'Ce pays n\'est pas valide.',
    'This value is already used.' => 'Cette valeur est déjà utilisée.',
    'The size of the image could not be detected.' => 'La taille de l\'image n\'a pas pu être détectée.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'La largeur de l\'image est trop grande ({{ width }}px). La largeur maximale autorisée est de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'La largeur de l\'image est trop petite ({{ width }}px). La largeur minimale attendue est de {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La hauteur de l\'image est trop grande ({{ height }}px). La hauteur maximale autorisée est de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La hauteur de l\'image est trop petite ({{ height }}px). La hauteur minimale attendue est de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Cette valeur doit être le mot de passe actuel de l\'utilisateur.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Cette chaîne doit avoir exactement {{ limit }} caractère.|Cette chaîne doit avoir exactement {{ limit }} caractères.',
    'The file was only partially uploaded.' => 'Le fichier a été partiellement transféré.',
    'No file was uploaded.' => 'Aucun fichier n\'a été transféré.',
    'No temporary folder was configured in php.ini.' => 'Aucun répertoire temporaire n\'a été configuré dans le php.ini.',
    'Cannot write temporary file to disk.' => 'Impossible d\'écrire le fichier temporaire sur le disque.',
    'A PHP extension caused the upload to fail.' => 'Une extension PHP a empêché le transfert du fichier.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Cette collection doit contenir {{ limit }} élément ou plus.|Cette collection doit contenir {{ limit }} éléments ou plus.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Cette collection doit contenir {{ limit }} élément ou moins.|Cette collection doit contenir {{ limit }} éléments ou moins.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Cette collection doit contenir exactement {{ limit }} élément.|Cette collection doit contenir exactement {{ limit }} éléments.',
    'Invalid card number.' => 'Numéro de carte invalide.',
    'Unsupported card type or invalid card number.' => 'Type de carte non supporté ou numéro invalide.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Le numéro IBAN (International Bank Account Number) saisi n\'est pas valide.',
    'This value is not a valid ISBN-10.' => 'Cette valeur n\'est pas un code ISBN-10 valide.',
    'This value is not a valid ISBN-13.' => 'Cette valeur n\'est pas un code ISBN-13 valide.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Cette valeur n\'est ni un code ISBN-10, ni un code ISBN-13 valide.',
    'This value is not a valid ISSN.' => 'Cette valeur n\'est pas un code ISSN valide.',
    'This value is not a valid currency.' => 'Cette valeur n\'est pas une devise valide.',
    'This value should be equal to {{ compared_value }}.' => 'Cette valeur doit être égale à {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Cette valeur doit être supérieure à {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Cette valeur doit être supérieure ou égale à {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur doit être identique à {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Cette valeur doit être inférieure à {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Cette valeur doit être inférieure ou égale à {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Cette valeur ne doit pas être égale à {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Cette valeur ne doit pas être identique à {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop grand ({{ ratio }}). Le rapport maximal autorisé est {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Le rapport largeur/hauteur de l\'image est trop petit ({{ ratio }}). Le rapport minimal attendu est {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'L\'image est carrée ({{ width }}x{{ height }}px). Les images carrées ne sont pas autorisées.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'L\'image est au format paysage ({{ width }}x{{ height }}px). Les images au format paysage ne sont pas autorisées.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'L\'image est au format portrait ({{ width }}x{{ height }}px). Les images au format portrait ne sont pas autorisées.',
    'An empty file is not allowed.' => 'Un fichier vide n\'est pas autorisé.',
    'The host could not be resolved.' => 'Le nom de domaine n\'a pas pu être résolu.',
    'This value does not match the expected {{ charset }} charset.' => 'Cette valeur ne correspond pas au jeu de caractères {{ charset }} attendu.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ce n\'est pas un code universel d\'identification des banques (BIC) valide.',
    'Error' => 'Erreur',
    'This is not a valid UUID.' => 'Ceci n\'est pas un UUID valide.',
    'This value should be a multiple of {{ compared_value }}.' => 'Cette valeur doit être un multiple de {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ce code d\'identification d\'entreprise (BIC) n\'est pas associé à l\'IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Cette valeur doit être un JSON valide.',
    'This collection should contain only unique elements.' => 'Cette collection ne doit pas comporter de doublons.',
    'This value should be positive.' => 'Cette valeur doit être strictement positive.',
    'This value should be either positive or zero.' => 'Cette valeur doit être supérieure ou égale à zéro.',
    'This value should be negative.' => 'Cette valeur doit être strictement négative.',
    'This value should be either negative or zero.' => 'Cette valeur doit être inférieure ou égale à zéro.',
    'This value is not a valid timezone.' => 'Cette valeur n\'est pas un fuseau horaire valide.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ce mot de passe a été divulgué lors d\'une fuite de données, il ne doit plus être utilisé. Veuillez utiliser un autre mot de passe.',
    'This value should be between {{ min }} and {{ max }}.' => 'Cette valeur doit être comprise entre {{ min }} et {{ max }}.',
    'This value is not a valid hostname.' => 'Cette valeur n\'est pas un nom d\'hôte valide.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Le nombre d\'éléments de cette collection doit être un multiple de {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Cette valeur doit satisfaire à au moins une des contraintes suivantes :',
    'Each element of this collection should satisfy its own set of constraints.' => 'Chaque élément de cette collection doit satisfaire à son propre jeu de contraintes.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Cette valeur n\'est pas un code international de sécurité valide (ISIN).',
    'This value should be a valid expression.' => 'Cette valeur doit être une expression valide.',
    'This form should not contain extra fields.' => 'Ce formulaire ne doit pas contenir des champs supplémentaires.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Le fichier téléchargé est trop volumineux. Merci d\'essayer d\'envoyer un fichier plus petit.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Le jeton CSRF est invalide. Veuillez renvoyer le formulaire.',
    'This value is not a valid HTML5 color.' => 'Cette valeur n\'est pas une couleur HTML5 valide.',
    'Please enter a valid birthdate.' => 'Veuillez entrer une date de naissance valide.',
    'The selected choice is invalid.' => 'Le choix sélectionné est invalide.',
    'The collection is invalid.' => 'La collection est invalide.',
    'Please select a valid color.' => 'Veuillez sélectionner une couleur valide.',
    'Please select a valid country.' => 'Veuillez sélectionner un pays valide.',
    'Please select a valid currency.' => 'Veuillez sélectionner une devise valide.',
    'Please choose a valid date interval.' => 'Veuillez choisir un intervalle de dates valide.',
    'Please enter a valid date and time.' => 'Veuillez saisir une date et une heure valides.',
    'Please enter a valid date.' => 'Veuillez entrer une date valide.',
    'Please select a valid file.' => 'Veuillez sélectionner un fichier valide.',
    'The hidden field is invalid.' => 'Le champ masqué n\'est pas valide.',
    'Please enter an integer.' => 'Veuillez saisir un entier.',
    'Please select a valid language.' => 'Veuillez sélectionner une langue valide.',
    'Please select a valid locale.' => 'Veuillez sélectionner une langue valide.',
    'Please enter a valid money amount.' => 'Veuillez saisir un montant valide.',
    'Please enter a number.' => 'Veuillez saisir un nombre.',
    'The password is invalid.' => 'Le mot de passe est invalide.',
    'Please enter a percentage value.' => 'Veuillez saisir un pourcentage valide.',
    'The values do not match.' => 'Les valeurs ne correspondent pas.',
    'Please enter a valid time.' => 'Veuillez saisir une heure valide.',
    'Please select a valid timezone.' => 'Veuillez sélectionner un fuseau horaire valide.',
    'Please enter a valid URL.' => 'Veuillez saisir une URL valide.',
    'Please enter a valid search term.' => 'Veuillez saisir un terme de recherche valide.',
    'Please provide a valid phone number.' => 'Veuillez fournir un numéro de téléphone valide.',
    'The checkbox has an invalid value.' => 'La case à cocher a une valeur non valide.',
    'Please enter a valid email address.' => 'Veuillez saisir une adresse email valide.',
    'Please select a valid option.' => 'Veuillez sélectionner une option valide.',
    'Please select a valid range.' => 'Veuillez sélectionner une plage valide.',
    'Please enter a valid week.' => 'Veuillez entrer une semaine valide.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Une exception d\'authentification s\'est produite.',
    'Authentication credentials could not be found.' => 'Les identifiants d\'authentification n\'ont pas pu être trouvés.',
    'Authentication request could not be processed due to a system problem.' => 'La requête d\'authentification n\'a pas pu être executée à cause d\'un problème système.',
    'Invalid credentials.' => 'Identifiants invalides.',
    'Cookie has already been used by someone else.' => 'Le cookie a déjà été utilisé par quelqu\'un d\'autre.',
    'Not privileged to request the resource.' => 'Privilèges insuffisants pour accéder à la ressource.',
    'Invalid CSRF token.' => 'Jeton CSRF invalide.',
    'No authentication provider found to support the authentication token.' => 'Aucun fournisseur d\'authentification n\'a été trouvé pour supporter le jeton d\'authentification.',
    'No session available, it either timed out or cookies are not enabled.' => 'Aucune session disponible, celle-ci a expiré ou les cookies ne sont pas activés.',
    'No token could be found.' => 'Aucun jeton n\'a pu être trouvé.',
    'Username could not be found.' => 'Le nom d\'utilisateur n\'a pas pu être trouvé.',
    'Account has expired.' => 'Le compte a expiré.',
    'Credentials have expired.' => 'Les identifiants ont expiré.',
    'Account is disabled.' => 'Le compte est désactivé.',
    'Account is locked.' => 'Le compte est bloqué.',
    'Too many failed login attempts, please try again later.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer plus tard.',
    'Invalid or expired login link.' => 'Lien de connexion invalide ou expiré.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Plusieurs tentatives de connexion ont échoué, veuillez réessayer dans %minutes% minutes.',
  ),
  'VerifyEmailBundle' => 
  array (
    '%count% year|%count% years' => '%count% année|%count% années',
    '%count% month|%count% months' => '%count% mois|%count% mois',
    '%count% day|%count% days' => '%count% jour|%count% jours',
    '%count% hour|%count% hours' => '%count% heure|%count% heures',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% an|%count% ans',
    '%count% month|%count% months' => '%count% mois|%count% mois',
    '%count% day|%count% days' => '%count% jour|%count% jours',
    '%count% hour|%count% hours' => '%count% heure|%count% heures',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
  ),
));
$catalogue->addFallbackCatalogue($catalogueFr);

return $catalogue;
