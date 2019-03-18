# Getting started

The general-purpose API

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
$userId = 'userId'; // Your user ID
$apiKey = 'apiKey'; // Your API key

$client = new NeutrinoAPILib\NeutrinoAPIClient($userId, $apiKey);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [WWW](#www)
* [Imaging](#imaging)
* [Telephony](#telephony)
* [ECommerce](#e_commerce)
* [Geolocation](#geolocation)
* [SecurityAndNetworking](#security_and_networking)
* [DataTools](#data_tools)

## <a name="www"></a>![Class: ](https://apidocs.io/img/class.png ".WWW") WWW

### Get singleton instance

The singleton instance of the ``` WWW ``` class can be accessed from the API Client.

```php
$wWW = $client->getWWW();
```

### <a name="browser_bot"></a>![Method: ](https://apidocs.io/img/method.png ".WWW.browserBot") browserBot

> Browser bot can extract content, interact with keyboard and mouse events, and execute JavaScript on a website. See: https://www.neutrinoapi.com/api/browser-bot/


```php
function browserBot(
        $url,
        $timeout = 30,
        $delay = 2,
        $selector = null,
        $exec = '[]',
        $userAgent = null,
        $ignoreCertificateErrors = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| url |  ``` Required ```  | The URL to load |
| timeout |  ``` Optional ```  ``` DefaultValue ```  | Timeout in seconds. Give up if still trying to load the page after this number of seconds |
| delay |  ``` Optional ```  ``` DefaultValue ```  | Delay in seconds to wait before executing any selectors or JavaScript |
| selector |  ``` Optional ```  | Extract content from the page DOM using this selector. Commonly known as a CSS selector, you can find a good reference <a href="https://www.w3schools.com/cssref/css_selectors.asp" target="_blank">here</a> |
| exec |  ``` Optional ```  ``` Collection ```  ``` DefaultValue ```  | Execute JavaScript on the page. Each array element should contain a valid JavaScript statement in string form. If a statement returns any kind of value it will be returned in the 'exec-results' response.<br/><br/>For your convenience you can also use the following special shortcut functions:<br/><div style='padding-left:32px; font-family:inherit; font-size:inherit;'>sleep(seconds); Just wait/sleep for the specified number of seconds.<br/>click('selector'); Click on the first element matching the given selector.<br/>focus('selector'); Focus on the first element matching the given selector.<br/>keys('characters'); Send the specified keyboard characters. Use click() or focus() first to send keys to a specific element.<br/>enter(); Send the Enter key.<br/>tab(); Send the Tab key.<br/></div><br/>Example:<br/><div style='padding-left:32px; font-family:inherit; font-size:inherit;'>[ "click('#button-id')", "sleep(1)", "click('.field-class')", "keys('1234')", "enter()" ]</div> |
| userAgent |  ``` Optional ```  | Override the browsers default user-agent string with this one |
| ignoreCertificateErrors |  ``` Optional ```  ``` DefaultValue ```  | Ignore any TLS/SSL certificate errors and load the page anyway |



#### Example Usage

```php
$url = 'url';
$timeout = 30;
$delay = 2;
$selector = 'selector';
$execValue = "[]";
$exec = APIHelper::deserialize($execValue);
$userAgent = 'user-agent';
$ignoreCertificateErrors = false;

$result = $wWW->browserBot($url, $timeout, $delay, $selector, $exec, $userAgent, $ignoreCertificateErrors);

```


### <a name="h_tml_clean"></a>![Method: ](https://apidocs.io/img/method.png ".WWW.hTMLClean") hTMLClean

> Clean and sanitize untrusted HTML. See: https://www.neutrinoapi.com/api/html-clean/


```php
function hTMLClean(
        $content,
        $outputType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The HTML content. This can be either a URL to load HTML from or an actual HTML content string |
| outputType |  ``` Required ```  | The level of sanitization, possible values are:<br/><b>plain-text</b>: reduce the content to plain text only (no HTML tags at all)<br/><br/><b>simple-text</b>: allow only very basic text formatting tags like b, em, i, strong, u<br/><br/><b>basic-html</b>: allow advanced text formatting and hyper links<br/><br/><b>basic-html-with-images</b>: same as basic html but also allows image tags<br/><br/><b>advanced-html</b>: same as basic html with images but also allows many more common HTML tags like table, ul, dl, pre<br/> |



#### Example Usage

```php
$content = 'content';
$outputType = 'output-type';

$result = $wWW->hTMLClean($content, $outputType);

```


### <a name="u_rl_info"></a>![Method: ](https://apidocs.io/img/method.png ".WWW.uRLInfo") uRLInfo

> Parse, analyze and retrieve content from the supplied URL. See: https://www.neutrinoapi.com/api/url-info/


```php
function uRLInfo(
        $url,
        $fetchContent = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| url |  ``` Required ```  | The URL to probe |
| fetchContent |  ``` Optional ```  ``` DefaultValue ```  | If this URL responds with html, text, json or xml then return the response. This option is useful if you want to perform further processing on the URL content (e.g. with the HTML Extract or HTML Clean APIs) |



#### Example Usage

```php
$url = 'url';
$fetchContent = false;

$result = $wWW->uRLInfo($url, $fetchContent);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="imaging"></a>![Class: ](https://apidocs.io/img/class.png ".Imaging") Imaging

### Get singleton instance

The singleton instance of the ``` Imaging ``` class can be accessed from the API Client.

```php
$imaging = $client->getImaging();
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
| position |  ``` Optional ```  ``` DefaultValue ```  | The position of the watermark image, possible values are:<br/>center, top-left, top-center, top-right, bottom-left, bottom-center, bottom-right |
| width |  ``` Optional ```  | If set resize the resulting image to this width (in px) while preserving aspect ratio |
| height |  ``` Optional ```  | If set resize the resulting image to this height (in px) while preserving aspect ratio |



#### Example Usage

```php
$imageUrl = 'image-url';
$watermarkUrl = 'watermark-url';
$opacity = 50;
$format = 'png';
$position = 'center';
$width = 108;
$height = 108;

$result = $imaging->imageWatermark($imageUrl, $watermarkUrl, $opacity, $format, $position, $width, $height);

```


### <a name="q_r_code"></a>![Method: ](https://apidocs.io/img/method.png ".Imaging.qRCode") qRCode

> Generate a QR code as a PNG image. See: https://www.neutrinoapi.com/api/qr-code/


```php
function qRCode(
        $content,
        $width = 256,
        $height = 256,
        $fgColor = '#000000',
        $bgColor = '#ffffff')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The content to encode into the QR code (e.g. a URL or a phone number) |
| width |  ``` Optional ```  ``` DefaultValue ```  | The width of the QR code (in px) |
| height |  ``` Optional ```  ``` DefaultValue ```  | The height of the QR code (in px) |
| fgColor |  ``` Optional ```  ``` DefaultValue ```  | The QR code foreground color |
| bgColor |  ``` Optional ```  ``` DefaultValue ```  | The QR code background color |



#### Example Usage

```php
$content = 'content';
$width = 256;
$height = 256;
$fgColor = '#000000';
$bgColor = '#ffffff';

$result = $imaging->qRCode($content, $width, $height, $fgColor, $bgColor);

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
| width |  ``` Required ```  | The width to resize to (in px) while preserving aspect ratio |
| height |  ``` Required ```  | The height to resize to (in px) while preserving aspect ratio |
| format |  ``` Optional ```  ``` DefaultValue ```  | The output image format, can be either png or jpg |



#### Example Usage

```php
$imageUrl = 'image-url';
$width = 108;
$height = 108;
$format = 'png';

$result = $imaging->imageResize($imageUrl, $width, $height, $format);

```


### <a name="h_tml5_render"></a>![Method: ](https://apidocs.io/img/method.png ".Imaging.hTML5Render") hTML5Render

> Render HTML content to PDF, JPG or PNG. See: https://www.neutrinoapi.com/api/html5-render/


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
        $zoom = 1,
        $grayscale = false,
        $mediaPrint = false,
        $mediaQueries = false,
        $forms = false,
        $css = null,
        $imageWidth = 1024,
        $imageHeight = null,
        $renderDelay = 0,
        $headerTextLeft = null,
        $headerTextCenter = null,
        $headerTextRight = null,
        $headerSize = 9,
        $headerFont = 'Courier',
        $headerFontSize = 11,
        $headerLine = false,
        $footerTextLeft = null,
        $footerTextCenter = null,
        $footerTextRight = null,
        $footerSize = 9,
        $footerFont = 'Courier',
        $footerFontSize = 11,
        $footerLine = false,
        $pageWidth = null,
        $pageHeight = null)
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
| renderDelay |  ``` Optional ```  ``` DefaultValue ```  | Number of milliseconds to wait before rendering the page (can be useful for pages with animations etc) |
| headerTextLeft |  ``` Optional ```  | Text to print to the left-hand side header of each page. e.g. 'My header - Page {page_number} of {total_pages}' |
| headerTextCenter |  ``` Optional ```  | Text to print to the center header of each page |
| headerTextRight |  ``` Optional ```  | Text to print to the right-hand side header of each page |
| headerSize |  ``` Optional ```  ``` DefaultValue ```  | The height of your header (in mm) |
| headerFont |  ``` Optional ```  ``` DefaultValue ```  | Set the header font. Fonts available: Times, Courier, Helvetica, Arial |
| headerFontSize |  ``` Optional ```  ``` DefaultValue ```  | Set the header font size (in pt) |
| headerLine |  ``` Optional ```  ``` DefaultValue ```  | Draw a full page width horizontal line under your header |
| footerTextLeft |  ``` Optional ```  | Text to print to the left-hand side footer of each page. e.g. 'My footer - Page {page_number} of {total_pages}' |
| footerTextCenter |  ``` Optional ```  | Text to print to the center header of each page |
| footerTextRight |  ``` Optional ```  | Text to print to the right-hand side header of each page |
| footerSize |  ``` Optional ```  ``` DefaultValue ```  | The height of your footer (in mm) |
| footerFont |  ``` Optional ```  ``` DefaultValue ```  | Set the footer font. Fonts available: Times, Courier, Helvetica, Arial |
| footerFontSize |  ``` Optional ```  ``` DefaultValue ```  | Set the footer font size (in pt) |
| footerLine |  ``` Optional ```  ``` DefaultValue ```  | Draw a full page width horizontal line above your footer |
| pageWidth |  ``` Optional ```  | Set the PDF page width explicitly (in mm) |
| pageHeight |  ``` Optional ```  | Set the PDF page height explicitly (in mm) |



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
$zoom = 1;
$grayscale = false;
$mediaPrint = false;
$mediaQueries = false;
$forms = false;
$css = 'css';
$imageWidth = 1024;
$imageHeight = 199;
$renderDelay = 0;
$headerTextLeft = 'header-text-left';
$headerTextCenter = 'header-text-center';
$headerTextRight = 'header-text-right';
$headerSize = 9;
$headerFont = 'Courier';
$headerFontSize = 11;
$headerLine = false;
$footerTextLeft = 'footer-text-left';
$footerTextCenter = 'footer-text-center';
$footerTextRight = 'footer-text-right';
$footerSize = 9;
$footerFont = 'Courier';
$footerFontSize = 11;
$footerLine = false;
$pageWidth = 199;
$pageHeight = 199;

$result = $imaging->hTML5Render($content, $format, $pageSize, $title, $margin, $marginLeft, $marginRight, $marginTop, $marginBottom, $landscape, $zoom, $grayscale, $mediaPrint, $mediaQueries, $forms, $css, $imageWidth, $imageHeight, $renderDelay, $headerTextLeft, $headerTextCenter, $headerTextRight, $headerSize, $headerFont, $headerFontSize, $headerLine, $footerTextLeft, $footerTextCenter, $footerTextRight, $footerSize, $footerFont, $footerFontSize, $footerLine, $pageWidth, $pageHeight);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="telephony"></a>![Class: ](https://apidocs.io/img/class.png ".Telephony") Telephony

### Get singleton instance

The singleton instance of the ``` Telephony ``` class can be accessed from the API Client.

```php
$telephony = $client->getTelephony();
```

### <a name="phone_verify"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.phoneVerify") phoneVerify

> Make an automated call to any valid phone number and playback a unique security code. See: https://www.neutrinoapi.com/api/phone-verify/


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
| securityCode |  ``` Optional ```  | Pass in your own security code. This is useful if you have implemented TOTP or similar 2FA methods. If not set then we will generate a secure random code |
| playbackDelay |  ``` Optional ```  ``` DefaultValue ```  | The delay in milliseconds between the playback of each security code |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country.<br/>If not set numbers are assumed to be in international format (with or without the leading + sign) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to playback the verification code in, available languages are:<ul><li>de - German</li><li>en - English</li><li>es - Spanish</li><li>fr - French</li><li>it - Italian</li><li>pt - Portuguese</li><li>ru - Russian</li></ul> |



#### Example Usage

```php
$number = 'number';
$codeLength = 6;
$securityCode = 199;
$playbackDelay = 800;
$countryCode = 'country-code';
$languageCode = 'en';

$result = $telephony->phoneVerify($number, $codeLength, $securityCode, $playbackDelay, $countryCode, $languageCode);

```


### <a name="s_ms_message"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.sMSMessage") sMSMessage

> Send a free-form message to any mobile device via SMS. See: https://www.neutrinoapi.com/api/sms-message/


```php
function sMSMessage(
        $number,
        $message,
        $countryCode = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | The phone number to send a message to |
| message |  ``` Required ```  | The SMS message to send. Messages are truncated to a maximum of 150 characters for ASCII content OR 70 characters for UTF content |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country.<br/>If not set numbers are assumed to be in international format (with or without the leading + sign) |



#### Example Usage

```php
$number = 'number';
$message = 'message';
$countryCode = 'country-code';

$result = $telephony->sMSMessage($number, $message, $countryCode);

```


### <a name="s_ms_verify"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.sMSVerify") sMSVerify

> Send a unique security code to any mobile device via SMS. See: https://www.neutrinoapi.com/api/sms-verify/


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
| securityCode |  ``` Optional ```  | Pass in your own security code. This is useful if you have implemented TOTP or similar 2FA methods. If not set then we will generate a secure random code |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country.<br/>If not set numbers are assumed to be in international format (with or without the leading + sign) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to send the verification code in, available languages are:<ul><li>de - German</li><li>en - English</li><li>es - Spanish</li><li>fr - French</li><li>it - Italian</li><li>pt - Portuguese</li><li>ru - Russian</li></ul> |



#### Example Usage

```php
$number = 'number';
$codeLength = 5;
$securityCode = 199;
$countryCode = 'country-code';
$languageCode = 'en';

$result = $telephony->sMSVerify($number, $codeLength, $securityCode, $countryCode, $languageCode);

```


### <a name="verify_security_code"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.verifySecurityCode") verifySecurityCode

> Check if a security code from one of the verify APIs is valid. See: https://www.neutrinoapi.com/api/verify-security-code/


```php
function verifySecurityCode($securityCode)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| securityCode |  ``` Required ```  | The security code to verify |



#### Example Usage

```php
$securityCode = 'security-code';

$result = $telephony->verifySecurityCode($securityCode);

```


### <a name="phone_playback"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.phonePlayback") phonePlayback

> Make an automated call to any valid phone number and playback an audio message. See: https://www.neutrinoapi.com/api/phone-playback/


```php
function phonePlayback(
        $number,
        $audioUrl)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | The phone number to call. Must be in valid international format |
| audioUrl |  ``` Required ```  | A URL to a valid audio file. Accepted audio formats are:<ul><li>MP3</li><li>WAV</li><li>OGG</ul></ul>You can use the following MP3 URL for testing:<br/>https://www.neutrinoapi.com/test-files/test1.mp3 |



#### Example Usage

```php
$number = 'number';
$audioUrl = 'audio-url';

$result = $telephony->phonePlayback($number, $audioUrl);

```


### <a name="h_lr_lookup"></a>![Method: ](https://apidocs.io/img/method.png ".Telephony.hLRLookup") hLRLookup

> Connect to the global mobile cellular network and retrieve the status of a mobile device. See: https://www.neutrinoapi.com/api/hlr-lookup/


```php
function hLRLookup(
        $number,
        $countryCode = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | A phone number |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country.<br/>If not set numbers are assumed to be in international format (with or without the leading + sign) |



#### Example Usage

```php
$number = 'number';
$countryCode = 'country-code';

$result = $telephony->hLRLookup($number, $countryCode);

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
| customerIp |  ``` Optional ```  | Pass in the customers IP address and we will return some extra information about them |



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

### <a name="geocode_address"></a>![Method: ](https://apidocs.io/img/method.png ".Geolocation.geocodeAddress") geocodeAddress

> Geocode an address, partial address or just the name of a place. See: https://www.neutrinoapi.com/api/geocode-address/


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
| address |  ``` Required ```  | The address, partial address or name of a place to try and locate |
| countryCode |  ``` Optional ```  | The ISO 2-letter country code to be biased towards (the default is no country bias) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to display results in, available languages are:<ul><li>de, en, es, fr, it, pt, ru</li></ul> |
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

> Get location information about an IP address and do reverse DNS (PTR) lookups. See: https://www.neutrinoapi.com/api/ip-info/


```php
function iPInfo(
        $ip,
        $reverseLookup = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ip |  ``` Required ```  | IPv4 or IPv6 address |
| reverseLookup |  ``` Optional ```  ``` DefaultValue ```  | Do a reverse DNS (PTR) lookup. This option can add extra delay to the request so only use it if you need it |



#### Example Usage

```php
$ip = 'ip';
$reverseLookup = false;

$result = $geolocation->iPInfo($ip, $reverseLookup);

```


### <a name="geocode_reverse"></a>![Method: ](https://apidocs.io/img/method.png ".Geolocation.geocodeReverse") geocodeReverse

> Convert a geographic coordinate (latitude and longitude) into a real world address or location. See: https://www.neutrinoapi.com/api/geocode-reverse/


```php
function geocodeReverse(
        $latitude,
        $longitude,
        $languageCode = 'en')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| latitude |  ``` Required ```  | The location latitude in decimal degrees format |
| longitude |  ``` Required ```  | The location longitude in decimal degrees format |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to display results in, available languages are:<ul><li>de, en, es, fr, it, pt, ru</li></ul> |



#### Example Usage

```php
$latitude = 'latitude';
$longitude = 'longitude';
$languageCode = 'en';

$result = $geolocation->geocodeReverse($latitude, $longitude, $languageCode);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="security_and_networking"></a>![Class: ](https://apidocs.io/img/class.png ".SecurityAndNetworking") SecurityAndNetworking

### Get singleton instance

The singleton instance of the ``` SecurityAndNetworking ``` class can be accessed from the API Client.

```php
$securityAndNetworking = $client->getSecurityAndNetworking();
```

### <a name="i_p_blocklist"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.iPBlocklist") iPBlocklist

> The IP Blocklist API will detect potentially malicious or dangerous IP addresses. See: https://www.neutrinoapi.com/api/ip-blocklist/


```php
function iPBlocklist($ip)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| ip |  ``` Required ```  | An IPv4 or IPv6 address |



#### Example Usage

```php
$ip = 'ip';

$result = $securityAndNetworking->iPBlocklist($ip);

```


### <a name="email_verify"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.emailVerify") emailVerify

> SMTP based email address verification. See: https://www.neutrinoapi.com/api/email-verify/


```php
function emailVerify(
        $email,
        $fixTypos = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | An email address |
| fixTypos |  ``` Optional ```  ``` DefaultValue ```  | Automatically attempt to fix typos in the address |



#### Example Usage

```php
$email = 'email';
$fixTypos = false;

$result = $securityAndNetworking->emailVerify($email, $fixTypos);

```


### <a name="host_reputation"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.hostReputation") hostReputation

> Check the reputation of an IP address, domain name, FQDN or URL against a comprehensive list of blacklists and blocklists. See: https://www.neutrinoapi.com/api/host-reputation/


```php
function hostReputation(
        $host,
        $listRating = 3)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| host |  ``` Required ```  | An IP address, domain name, FQDN or URL.<br/>If you supply a domain/URL it will be checked against the URI DNSBL lists |
| listRating |  ``` Optional ```  ``` DefaultValue ```  | Only check lists with this rating or better |



#### Example Usage

```php
$host = 'host';
$listRating = 3;

$result = $securityAndNetworking->hostReputation($host, $listRating);

```


### <a name="i_p_probe"></a>![Method: ](https://apidocs.io/img/method.png ".SecurityAndNetworking.iPProbe") iPProbe

> Analyze and extract provider information for an IP address. See: https://www.neutrinoapi.com/api/ip-probe/


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


[Back to List of Controllers](#list_of_controllers)

## <a name="data_tools"></a>![Class: ](https://apidocs.io/img/class.png ".DataTools") DataTools

### Get singleton instance

The singleton instance of the ``` DataTools ``` class can be accessed from the API Client.

```php
$dataTools = $client->getDataTools();
```

### <a name="user_agent_info"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.userAgentInfo") userAgentInfo

> Parse, validate and get detailed user-agent information from a user agent string. See: https://www.neutrinoapi.com/api/user-agent-info/


```php
function userAgentInfo($userAgent)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| userAgent |  ``` Required ```  | A user agent string |



#### Example Usage

```php
$userAgent = 'user-agent';

$result = $dataTools->userAgentInfo($userAgent);

```


### <a name="phone_validate"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.phoneValidate") phoneValidate

> Parse, validate and get location information about a phone number. See: https://www.neutrinoapi.com/api/phone-validate/


```php
function phoneValidate(
        $number,
        $countryCode = null,
        $ip = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| number |  ``` Required ```  | A phone number. This can be in international format (E.164) or local format. If passing local format you should use the 'country-code' or 'ip' options as well |
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country.<br/>If not set numbers are assumed to be in international format (with or without the leading + sign) |
| ip |  ``` Optional ```  | Pass in a users IP address and we will assume numbers are based in the country of the IP address |



#### Example Usage

```php
$number = 'number';
$countryCode = 'country-code';
$ip = 'ip';

$result = $dataTools->phoneValidate($number, $countryCode, $ip);

```


### <a name="convert"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.convert") convert

> A powerful unit conversion tool. See: https://www.neutrinoapi.com/api/convert/


```php
function convert(
        $fromValue,
        $fromType,
        $toType)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| fromValue |  ``` Required ```  | The value to convert from (e.g. 10.95) |
| fromType |  ``` Required ```  | The type of the value to convert from (e.g. USD) |
| toType |  ``` Required ```  | The type to convert to (e.g. EUR) |



#### Example Usage

```php
$fromValue = 'from-value';
$fromType = 'from-type';
$toType = 'to-type';

$result = $dataTools->convert($fromValue, $fromType, $toType);

```


### <a name="bad_word_filter"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.badWordFilter") badWordFilter

> Detect bad words, swear words and profanity in a given text. See: https://www.neutrinoapi.com/api/bad-word-filter/


```php
function badWordFilter(
        $content,
        $censorCharacter = null)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| content |  ``` Required ```  | The content to scan. This can be either a URL to load content from or an actual content string |
| censorCharacter |  ``` Optional ```  | The character to use to censor out the bad words found |



#### Example Usage

```php
$content = 'content';
$censorCharacter = 'censor-character';

$result = $dataTools->badWordFilter($content, $censorCharacter);

```


### <a name="email_validate"></a>![Method: ](https://apidocs.io/img/method.png ".DataTools.emailValidate") emailValidate

> Parse, validate and clean an email address. See: https://www.neutrinoapi.com/api/email-validate/


```php
function emailValidate(
        $email,
        $fixTypos = false)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| email |  ``` Required ```  | An email address |
| fixTypos |  ``` Optional ```  ``` DefaultValue ```  | Automatically attempt to fix typos in the address |



#### Example Usage

```php
$email = 'email';
$fixTypos = false;

$result = $dataTools->emailValidate($email, $fixTypos);

```


[Back to List of Controllers](#list_of_controllers)



