# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=NeutrinoAPI-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the NeutrinoAPI library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=NeutrinoAPI-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=NeutrinoAPI-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=NeutrinoAPI-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=NeutrinoAPI-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=NeutrinoAPI-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=NeutrinoAPI-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=NeutrinoAPI-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=NeutrinoAPI-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=NeutrinoAPI-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=NeutrinoAPI-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=NeutrinoAPI-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=NeutrinoAPI-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| userId | Your user ID |
| apiKey | Your API key |



API client can be initialized as following.

```php
// Configuration parameters and credentials
$userId = "userId"; // Your user ID
$apiKey = "apiKey"; // Your API key

$client = new NeutrinoAPILib\NeutrinoAPIClient($userId, $apiKey);
```

# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [DataTools](#data_tools)
* [ECommerce](#e_commerce)
* [Geolocation](#geolocation)
* [SecurityAndNetworking](#security_and_networking)
* [Telephony](#telephony)
* [Imaging](#imaging)

## <a name="data_tools"></a>![Class: ](https://apidocs.io/img/class.png ".DataTools") DataTools

### Get singleton instance

The singleton instance of the ``` DataTools ``` class can be accessed from the API Client.

```php
$dataTools = $client->getDataTools();
```

### <a name="convert"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.convert") convert

> A powerful unit and currency conversion tool


```php
function convert(
        $fromValue,
        $fromType,
        $toType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fromValue |  ``` Required ```  | The value to convert from |
| fromType |  ``` Required ```  | The type of the value to convert from |
| toType |  ``` Required ```  | The type to convert to |



#### Example Usage

```php
$fromValue = 'from-value';
$fromType = 'from-type';
$toType = 'to-type';

$result = $dataTools->convert($fromValue, $fromType, $toType);

```


### <a name="bad_word_filter"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.badWordFilter") badWordFilter

> Detect bad words, swear words and profanity in a given text


```php
function badWordFilter(
        $content,
        $censorCharacter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The text content to check. This can be either a URL to load content from or an actual content string |
| censorCharacter |  ``` Optional ```  | The character to use to censor out the bad words found |



#### Example Usage

```php
$content = 'content';
$censorCharacter = 'censor-character';

$result = $dataTools->badWordFilter($content, $censorCharacter);

```


### <a name="email_validate"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.emailValidate") emailValidate

> Parse, validate and clean an email address


```php
function emailValidate(
        $email,
        $fixTypos = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | The email address |
| fixTypos |  ``` Optional ```  ``` DefaultValue ```  | Automatically attempt to fix typos in the address |



#### Example Usage

```php
$email = 'email';
$fixTypos = false;

$result = $dataTools->emailValidate($email, $fixTypos);

```


### <a name="h_tml_clean"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.hTMLClean") hTMLClean

> Clean and sanitize untrusted HTML


```php
function hTMLClean(
        $content,
        $outputType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The HTML content. This can be either a URL to load HTML from or an actual HTML content string |
| outputType |  ``` Required ```  | The level of sanitization, possible values are: plain-text, simple-text, basic-html, basic-html-with-images, advanced-html |



#### Example Usage

```php
$content = 'content';
$outputType = 'output-type';

$result = $dataTools->hTMLClean($content, $outputType);

```


### <a name="code_highlight"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.codeHighlight") codeHighlight

> Code highlight will take raw source code and convert into nicely formatted HTML with syntax and keyword highlighting


```php
function codeHighlight(
        $content,
        $type,
        $addKeywordLinks = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The source content. This can be either a URL to load from or an actual content string |
| type |  ``` Required ```  | The code type. See the API docs for all supported types |
| addKeywordLinks |  ``` Optional ```  ``` DefaultValue ```  | Add links on source code keywords to the relevant language documentation |



#### Example Usage

```php
$content = 'content';
$type = 'type';
$addKeywordLinks = false;

$result = $dataTools->codeHighlight($content, $type, $addKeywordLinks);

```


### <a name="user_agent_info"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.userAgentInfo") userAgentInfo

> Parse, validate and get detailed user-agent information from a user agent string


```php
function userAgentInfo($userAgent)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userAgent |  ``` Required ```  | A user-agent string |



#### Example Usage

```php
$userAgent = 'user-agent';

$result = $dataTools->userAgentInfo($userAgent);

```


### <a name="h_tml_extract"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.hTMLExtract") hTMLExtract

> Extract specific HTML tag contents or attributes from complex HTML or XHTML content


```php
function hTMLExtract(
        $content,
        $tag,
        $attribute = null,
        $baseUrl = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The HTML content. This can be either a URL to load HTML from or an actual HTML content string |
| tag |  ``` Required ```  | The HTML tag(s) to extract data from. This can just be a simple tag name like 'img' OR a CSS/jQuery style selector |
| attribute |  ``` Optional ```  | If set, then extract data from the specified tag attribute. If not set, then data will be extracted from the tags inner content |
| baseUrl |  ``` Optional ```  | The base URL to replace into realive links |



#### Example Usage

```php
$content = 'content';
$tag = 'tag';
$attribute = 'attribute';
$baseUrl = 'base-url';

$result = $dataTools->hTMLExtract($content, $tag, $attribute, $baseUrl);

```


### <a name="phone_validate"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.phoneValidate") phoneValidate

> Parse, validate and get location information about a phone number


```php
function phoneValidate(
        $number,
        $countryCode = null,
        $ip = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | The phone number |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |
| ip |  ``` Optional ```  | Pass in a users IP address and we will assume numbers are based in the country of the IP address |



#### Example Usage

```php
$number = 'number';
$countryCode = 'country-code';
$ip = 'ip';

$result = $dataTools->phoneValidate($number, $countryCode, $ip);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="e_commerce"></a>![Class: ](https://apidocs.io/img/class.png ".ECommerce") ECommerce

### Get singleton instance

The singleton instance of the ``` ECommerce ``` class can be accessed from the API Client.

```php
$eCommerce = $client->getECommerce();
```

### <a name="b_in_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".ECommerce.bINLookup") bINLookup

> Perform a BIN (Bank Identification Number) or IIN (Issuer Identification Number) lookup. See: https://www.neutrinoapi.com/api/bin-lookup/


```php
function bINLookup(
        $binNumber,
        $customerIp = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| binNumber |  ``` Required ```  | The BIN or IIN number (the first 6 digits of a credit card number) |
| customerIp |  ``` Optional ```  | Pass in a customers remote IP address. The API will then determine the country of the IP address and match it against the BIN country. This feature is designed for fraud prevention and detection checks. |



#### Example Usage

```php
$binNumber = 'bin-number';
$customerIp = 'customer-ip';

$result = $eCommerce->bINLookup($binNumber, $customerIp);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="geolocation"></a>![Class: ](https://apidocs.io/img/class.png ".Geolocation") Geolocation

### Get singleton instance

The singleton instance of the ``` Geolocation ``` class can be accessed from the API Client.

```php
$geolocation = $client->getGeolocation();
```

### <a name="geocode_reverse"></a>![Method: ](https://apidocs.io/img/method.png ".Geolocation.geocodeReverse") geocodeReverse

> Convert a geographic coordinate (latitude and longitude) into a real world address or location.


```php
function geocodeReverse(
        $latitude,
        $longitude,
        $languageCode = 'en')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| latitude |  ``` Required ```  | The location latitude |
| longitude |  ``` Required ```  | The location longitude |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to display results in, available languages are: de, en, es, fr, it, pt, ru |



#### Example Usage

```php
$latitude = 65.8998992554377;
$longitude = 65.8998992554377;
$languageCode = 'en';

$result = $geolocation->geocodeReverse($latitude, $longitude, $languageCode);

```


### <a name="geocode_address"></a>![Method: ](https://apidocs.io/img/method.png ".Geolocation.geocodeAddress") geocodeAddress

> Geocode an address, partial address or the name of a location


```php
function geocodeAddress(
        $address,
        $countryCode = null,
        $languageCode = 'en',
        $fuzzySearch = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| address |  ``` Required ```  | The address or partial address to try and locate |
| countryCode |  ``` Optional ```  | The ISO 2-letter country code to be biased towards (default is no country bias) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to display results in, available languages are: de, en, es, fr, it, pt, ru |
| fuzzySearch |  ``` Optional ```  ``` DefaultValue ```  | If no matches are found for the given address, start performing a recursive fuzzy search until a geolocation is found. We use a combination of approximate string matching and data cleansing to find possible location matches |



#### Example Usage

```php
$address = 'address';
$countryCode = 'country-code';
$languageCode = 'en';
$fuzzySearch = false;

$result = $geolocation->geocodeAddress($address, $countryCode, $languageCode, $fuzzySearch);

```


### <a name="i_p_info"></a>![Method: ](https://apidocs.io/img/method.png ".Geolocation.iPInfo") iPInfo

> Get location information about an IP address and do reverse DNS (PTR) lookups.


```php
function iPInfo(
        $ip,
        $reverseLookup = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ip |  ``` Required ```  | The IP address |
| reverseLookup |  ``` Optional ```  ``` DefaultValue ```  | Do a reverse DNS (PTR) lookup. This option can add extra delay to the request so only use it if you need it |



#### Example Usage

```php
$ip = 'ip';
$reverseLookup = false;

$result = $geolocation->iPInfo($ip, $reverseLookup);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="security_and_networking"></a>![Class: ](https://apidocs.io/img/class.png ".SecurityAndNetworking") SecurityAndNetworking

### Get singleton instance

The singleton instance of the ``` SecurityAndNetworking ``` class can be accessed from the API Client.

```php
$securityAndNetworking = $client->getSecurityAndNetworking();
```

### <a name="host_reputation"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.hostReputation") hostReputation

> Check the reputation of an IP address or domain against a comprehensive list of blacklists and blocklists (DNSBLs)


```php
function hostReputation($host)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| host |  ``` Required ```  | An IPv4 address or a domain name. If you supply a domain name it will be checked against the URI DNSBL list |



#### Example Usage

```php
$host = 'host';

$result = $securityAndNetworking->hostReputation($host);

```


### <a name="i_p_blocklist"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.iPBlocklist") iPBlocklist

> The IP Blocklist API will detect potentially malicious or dangerous IP addresses


```php
function iPBlocklist($ip)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ip |  ``` Required ```  | An IPv4 address |



#### Example Usage

```php
$ip = 'ip';

$result = $securityAndNetworking->iPBlocklist($ip);

```


### <a name="i_p_probe"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.iPProbe") iPProbe

> Analyze and extract provider information for an IP address


```php
function iPProbe($ip)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ip |  ``` Required ```  | IPv4 or IPv6 address |



#### Example Usage

```php
$ip = 'ip';

$result = $securityAndNetworking->iPProbe($ip);

```


### <a name="u_rl_info"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.uRLInfo") uRLInfo

> Parse, analyze and retrieve content from the supplied URL


```php
function uRLInfo(
        $url,
        $fetchContent)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| url |  ``` Required ```  | The URL to process |
| fetchContent |  ``` Required ```  | If this URL responds with html, text, json or xml then return the response. This option is useful if you want to perform further processing on the URL content |



#### Example Usage

```php
$url = 'url';
$fetchContent = false;

$result = $securityAndNetworking->uRLInfo($url, $fetchContent);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="telephony"></a>![Class: ](https://apidocs.io/img/class.png ".Telephony") Telephony

### Get singleton instance

The singleton instance of the ``` Telephony ``` class can be accessed from the API Client.

```php
$telephony = $client->getTelephony();
```

### <a name="h_lr_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.hLRLookup") hLRLookup

> Connect to the global mobile cellular network and retrieve the status of a mobile device


```php
function hLRLookup(
        $number,
        $countryCode = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | A phone number |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |



#### Example Usage

```php
$number = 'number';
$countryCode = 'country-code';

$result = $telephony->hLRLookup($number, $countryCode);

```


### <a name="verify_security_code"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.verifySecurityCode") verifySecurityCode

> Check if a security code from one of the verify APIs is valid


```php
function verifySecurityCode($securityCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| securityCode |  ``` Required ```  | The security code to verify |



#### Example Usage

```php
$securityCode = 65;

$result = $telephony->verifySecurityCode($securityCode);

```


### <a name="s_ms_verify"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.sMSVerify") sMSVerify

> Send a unique security code to any mobile device via SMS


```php
function sMSVerify(
        $number,
        $codeLength = 5,
        $securityCode = null,
        $countryCode = null,
        $languageCode = 'en')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | The phone number to send a verification code to |
| codeLength |  ``` Optional ```  ``` DefaultValue ```  | The number of digits to use in the security code (must be between 4 and 12) |
| securityCode |  ``` Optional ```  | ass in your own security code. This is useful if you have implemented TOTP or similar 2FA methods. If not set then we will generate a secure random code (only numerical security codes are currently supported) |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to send the verification code in, available languages are: de - German, en - English, es - Spanish, fr - Fench, it - Italian, pt - Portuguese, ru - Russian |



#### Example Usage

```php
$number = 'number';
$codeLength = 5;
$securityCode = 65;
$countryCode = 'country-code';
$languageCode = 'en';

$result = $telephony->sMSVerify($number, $codeLength, $securityCode, $countryCode, $languageCode);

```


### <a name="phone_playback"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.phonePlayback") phonePlayback

> Make an automated call to any valid phone number and playback an audio message


```php
function phonePlayback(
        $number,
        $audioUrl)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | The phone number to call. Must be valid international format |
| audioUrl |  ``` Required ```  | A URL to a valid audio file. Accepted audio formats are: MP3, WAV, OGG |



#### Example Usage

```php
$number = 'number';
$audioUrl = 'audio-url';

$result = $telephony->phonePlayback($number, $audioUrl);

```


### <a name="phone_verify"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.phoneVerify") phoneVerify

> Make an automated call to any valid phone number and playback a unique security code


```php
function phoneVerify(
        $number,
        $codeLength = 6,
        $securityCode = null,
        $playbackDelay = 800,
        $countryCode = null,
        $languageCode = 'en')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | The phone number to send the verification code to |
| codeLength |  ``` Optional ```  ``` DefaultValue ```  | The number of digits to use in the security code (between 4 and 12) |
| securityCode |  ``` Optional ```  | Pass in your own security code. This is useful if you have implemented TOTP or similar 2FA methods. If not set then we will generate a secure random code (only numerical security codes are currently supported) |
| playbackDelay |  ``` Optional ```  ``` DefaultValue ```  | The delay in milliseconds between the playback of each security code |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to playback the verification code in, available languages are: de - German, en - English, es - Spanish, fr - Fench, it - Italian, pt - Portuguese, ru - Russian |



#### Example Usage

```php
$number = 'number';
$codeLength = 6;
$securityCode = 65;
$playbackDelay = 800;
$countryCode = 'country-code';
$languageCode = 'en';

$result = $telephony->phoneVerify($number, $codeLength, $securityCode, $playbackDelay, $countryCode, $languageCode);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="imaging"></a>![Class: ](https://apidocs.io/img/class.png ".Imaging") Imaging

### Get singleton instance

The singleton instance of the ``` Imaging ``` class can be accessed from the API Client.

```php
$imaging = $client->getImaging();
```

### <a name="image_resize"></a>![Method: ](https://apidocs.io/img/method.png ".Imaging.imageResize") imageResize

> Resize an image and output as either JPEG or PNG. See: https://www.neutrinoapi.com/api/image-resize/


```php
function imageResize(
        $imageUrl,
        $width,
        $height,
        $format = 'png')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| imageUrl |  ``` Required ```  | The URL to the source image |
| width |  ``` Required ```  | Width to resize to (in px) |
| height |  ``` Required ```  | Height to resize to (in px) |
| format |  ``` Optional ```  ``` DefaultValue ```  | The output image format, can be either png or jpg |



#### Example Usage

```php
$imageUrl = 'image-url';
$width = 65;
$height = 65;
$format = 'png';

$result = $imaging->imageResize($imageUrl, $width, $height, $format);

```


### <a name="q_r_code"></a>![Method: ](https://apidocs.io/img/method.png ".Imaging.qRCode") qRCode

> Generate a QR code as a PNG image. See: https://www.neutrinoapi.com/api/qr-code/


```php
function qRCode(
        $content,
        $width = 250,
        $height = 250,
        $fgColor = '#000000',
        $bgColor = '#ffffff')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The content to encode into the QR code (e.g. a URL or a phone number) |
| width |  ``` Optional ```  ``` DefaultValue ```  | The width of the QR code (in px) |
| height |  ``` Optional ```  ``` DefaultValue ```  | The height of the QR code (in px) |
| fgColor |  ``` Optional ```  ``` DefaultValue ```  | The QR code foreground color (you should always use a dark color for this) |
| bgColor |  ``` Optional ```  ``` DefaultValue ```  | The QR code background color (you should always use a light color for this) |



#### Example Usage

```php
$content = 'content';
$width = 250;
$height = 250;
$fgColor = '#000000';
$bgColor = '#ffffff';

$result = $imaging->qRCode($content, $width, $height, $fgColor, $bgColor);

```


### <a name="image_watermark"></a>![Method: ](https://apidocs.io/img/method.png ".Imaging.imageWatermark") imageWatermark

> Watermark one image with another image. See: https://www.neutrinoapi.com/api/image-watermark/


```php
function imageWatermark(
        $imageUrl,
        $watermarkUrl,
        $opacity = 50,
        $format = 'png',
        $position = 'center',
        $width = null,
        $height = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| imageUrl |  ``` Required ```  | The URL to the source image |
| watermarkUrl |  ``` Required ```  | The URL to the watermark image |
| opacity |  ``` Optional ```  ``` DefaultValue ```  | The opacity of the watermark (0 to 100) |
| format |  ``` Optional ```  ``` DefaultValue ```  | The output image format, can be either png or jpg |
| position |  ``` Optional ```  ``` DefaultValue ```  | The position of the watermark image, possible values are: center, top-left, top-center, top-right, bottom-left, bottom-center, bottom-right |
| width |  ``` Optional ```  | If set resize the resulting image to this width (preserving aspect ratio) |
| height |  ``` Optional ```  | If set resize the resulting image to this height (preserving aspect ratio) |



#### Example Usage

```php
$imageUrl = 'image-url';
$watermarkUrl = 'watermark-url';
$opacity = 50;
$format = 'png';
$position = 'center';
$width = 24;
$height = 24;

$result = $imaging->imageWatermark($imageUrl, $watermarkUrl, $opacity, $format, $position, $width, $height);

```


### <a name="h_tml5_render"></a>![Method: ](https://apidocs.io/img/method.png ".Imaging.hTML5Render") hTML5Render

> Render HTML and HTML5 content to PDF, JPG or PNG


```php
function hTML5Render(
        $content,
        $format = 'PDF',
        $pageSize = 'A4',
        $title = null,
        $margin = 0,
        $marginLeft = 0,
        $marginRight = 0,
        $marginTop = 0,
        $marginBottom = 0,
        $landscape = false,
        $zoom = 1.0,
        $grayscale = false,
        $mediaPrint = false,
        $mediaQueries = false,
        $forms = false,
        $css = null,
        $imageWidth = 1024,
        $imageHeight = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The HTML content. This can be either a URL to load HTML from or an actual HTML content string |
| format |  ``` Optional ```  ``` DefaultValue ```  | Which format to output, available options are: PDF, PNG, JPG |
| pageSize |  ``` Optional ```  ``` DefaultValue ```  | Set the document page size, can be one of: A0 - A9, B0 - B10, Comm10E, DLE or Letter |
| title |  ``` Optional ```  | The document title |
| margin |  ``` Optional ```  ``` DefaultValue ```  | The document margin (in mm) |
| marginLeft |  ``` Optional ```  ``` DefaultValue ```  | The document left margin (in mm) |
| marginRight |  ``` Optional ```  ``` DefaultValue ```  | The document right margin (in mm) |
| marginTop |  ``` Optional ```  ``` DefaultValue ```  | The document top margin (in mm) |
| marginBottom |  ``` Optional ```  ``` DefaultValue ```  | The document bottom margin (in mm) |
| landscape |  ``` Optional ```  ``` DefaultValue ```  | Set the document to lanscape orientation |
| zoom |  ``` Optional ```  ``` DefaultValue ```  | Set the zoom factor when rendering the page (2.0 for double size, 0.5 for half size) |
| grayscale |  ``` Optional ```  ``` DefaultValue ```  | Render the final document in grayscale |
| mediaPrint |  ``` Optional ```  ``` DefaultValue ```  | Use @media print CSS styles to render the document |
| mediaQueries |  ``` Optional ```  ``` DefaultValue ```  | Activate all @media queries before rendering. This can be useful if you wan't to render the mobile version of a responsive website |
| forms |  ``` Optional ```  ``` DefaultValue ```  | Generate real (fillable) PDF forms from HTML forms |
| css |  ``` Optional ```  | Inject custom CSS into the HTML. e.g. 'body { background-color: red;}' |
| imageWidth |  ``` Optional ```  ``` DefaultValue ```  | If rendering to an image format (PNG or JPG) use this image width (in pixels) |
| imageHeight |  ``` Optional ```  | If rendering to an image format (PNG or JPG) use this image height (in pixels). The default is automatic which dynamically sets the image height based on the content |



#### Example Usage

```php
$content = 'content';
$format = 'PDF';
$pageSize = 'A4';
$title = 'title';
$margin = 0;
$marginLeft = 0;
$marginRight = 0;
$marginTop = 0;
$marginBottom = 0;
$landscape = false;
$zoom = 1.0;
$grayscale = false;
$mediaPrint = false;
$mediaQueries = false;
$forms = false;
$css = 'css';
$imageWidth = 1024;
$imageHeight = 24;

$result = $imaging->hTML5Render($content, $format, $pageSize, $title, $margin, $marginLeft, $marginRight, $marginTop, $marginBottom, $landscape, $zoom, $grayscale, $mediaPrint, $mediaQueries, $forms, $css, $imageWidth, $imageHeight);

```


[Back to List of Controllers](#list_of_controllers)



