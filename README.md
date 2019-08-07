# Getting started

The general-purpose API

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

* [Imaging](#imaging)
* [Telephony](#telephony)
* [DataTools](#data_tools)
* [SecurityAndNetworking](#security_and_networking)
* [Geolocation](#geolocation)
* [ECommerce](#e_commerce)
* [WWW](#www)

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
| width |  ``` Required ```  | The width to resize to (in px) while preserving aspect ratio |
| height |  ``` Required ```  | The height to resize to (in px) while preserving aspect ratio |
| format |  ``` Optional ```  ``` DefaultValue ```  | The output image format, can be either png or jpg |



#### Example Usage

```php
$imageUrl = 'image-url';
$width = 236;
$height = 236;
$format = 'png';

$result = $imaging->imageResize($imageUrl, $width, $height, $format);

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
| width |  ``` Optional ```  | If set resize the resulting image to this width (in px) while preserving aspect ratio |
| height |  ``` Optional ```  | If set resize the resulting image to this height (in px) while preserving aspect ratio |



#### Example Usage

```php
$imageUrl = 'image-url';
$watermarkUrl = 'watermark-url';
$opacity = 50;
$format = 'png';
$position = 'center';
$width = 236;
$height = 236;

$result = $imaging->imageWatermark($imageUrl, $watermarkUrl, $opacity, $format, $position, $width, $height);

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
$imageHeight = 236;
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
$pageWidth = 236;
$pageHeight = 236;

$result = $imaging->hTML5Render($content, $format, $pageSize, $title, $margin, $marginLeft, $marginRight, $marginTop, $marginBottom, $landscape, $zoom, $grayscale, $mediaPrint, $mediaQueries, $forms, $css, $imageWidth, $imageHeight, $renderDelay, $headerTextLeft, $headerTextCenter, $headerTextRight, $headerSize, $headerFont, $headerFontSize, $headerLine, $footerTextLeft, $footerTextCenter, $footerTextRight, $footerSize, $footerFont, $footerFontSize, $footerLine, $pageWidth, $pageHeight);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="telephony"></a>![Class: ](https://apidocs.io/img/class.png ".Telephony") Telephony

### Get singleton instance

The singleton instance of the ``` Telephony ``` class can be accessed from the API Client.

```php
$telephony = $client->getTelephony();
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
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |



#### Example Usage

```php
$number = 'number';
$countryCode = 'country-code';

$result = $telephony->hLRLookup($number, $countryCode);

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
| audioUrl |  ``` Required ```  | A URL to a valid audio file. Accepted audio formats are: <ul> <li>MP3</li> <li>WAV</li> <li>OGG</li> </ul>You can use the following MP3 URL for testing: https://www.neutrinoapi.com/test-files/test1.mp3 |



#### Example Usage

```php
$number = 'number';
$audioUrl = 'audio-url';

$result = $telephony->phonePlayback($number, $audioUrl);

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
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to send the verification code in, available languages are: <ul> <li>de - German</li> <li>en - English</li> <li>es - Spanish</li> <li>fr - French</li> <li>it - Italian</li> <li>pt - Portuguese</li> <li>ru - Russian</li> </ul> |



#### Example Usage

```php
$number = 'number';
$codeLength = 5;
$securityCode = 236;
$countryCode = 'country-code';
$languageCode = 'en';

$result = $telephony->sMSVerify($number, $codeLength, $securityCode, $countryCode, $languageCode);

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
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |



#### Example Usage

```php
$number = 'number';
$message = 'message';
$countryCode = 'country-code';

$result = $telephony->sMSMessage($number, $message, $countryCode);

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
| countryCode |  ``` Optional ```  | ISO 2-letter country code, assume numbers are based in this country. If not set numbers are assumed to be in international format (with or without the leading + sign) |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to playback the verification code in, available languages are: <ul> <li>de - German</li> <li>en - English</li> <li>es - Spanish</li> <li>fr - French</li> <li>it - Italian</li> <li>pt - Portuguese</li> <li>ru - Russian</li> </ul> |



#### Example Usage

```php
$number = 'number';
$codeLength = 6;
$securityCode = 236;
$playbackDelay = 800;
$countryCode = 'country-code';
$languageCode = 'en';

$result = $telephony->phoneVerify($number, $codeLength, $securityCode, $playbackDelay, $countryCode, $languageCode);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="data_tools"></a>![Class: ](https://apidocs.io/img/class.png ".DataTools") DataTools

### Get singleton instance

The singleton instance of the ``` DataTools ``` class can be accessed from the API Client.

```php
$dataTools = $client->getDataTools();
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

## <a name="security_and_networking"></a>![Class: ](https://apidocs.io/img/class.png ".SecurityAndNetworking") SecurityAndNetworking

### Get singleton instance

The singleton instance of the ``` SecurityAndNetworking ``` class can be accessed from the API Client.

```php
$securityAndNetworking = $client->getSecurityAndNetworking();
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
| host |  ``` Required ```  | An IP address, domain name, FQDN or URL. If you supply a domain/URL it will be checked against the URI DNSBL lists |
| listRating |  ``` Optional ```  ``` DefaultValue ```  | Only check lists with this rating or better |



#### Example Usage

```php
$host = 'host';
$listRating = 3;

$result = $securityAndNetworking->hostReputation($host, $listRating);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="geolocation"></a>![Class: ](https://apidocs.io/img/class.png ".Geolocation") Geolocation

### Get singleton instance

The singleton instance of the ``` Geolocation ``` class can be accessed from the API Client.

```php
$geolocation = $client->getGeolocation();
```

### <a name="geocode_reverse"></a>![Method: ](https://apidocs.io/img/method.png ".Geolocation.geocodeReverse") geocodeReverse

> Convert a geographic coordinate (latitude and longitude) into a real world address. See: https://www.neutrinoapi.com/api/geocode-reverse/


```php
function geocodeReverse(
        $latitude,
        $longitude,
        $languageCode = 'en',
        $zoom = 'address')
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| latitude |  ``` Required ```  | The location latitude in decimal degrees format |
| longitude |  ``` Required ```  | The location longitude in decimal degrees format |
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to display results in, available languages are: <ul> <li>de, en, es, fr, it, pt, ru</li> </ul> |
| zoom |  ``` Optional ```  ``` DefaultValue ```  | The zoom level to respond with: <ul> <li>address - the most precise address available</li> <li>street - the street level</li> <li>city - the city level</li> <li>state - the state level</li> <li>country - the country level</li> </ul> |



#### Example Usage

```php
$latitude = 'latitude';
$longitude = 'longitude';
$languageCode = 'en';
$zoom = 'address';

$result = $geolocation->geocodeReverse($latitude, $longitude, $languageCode, $zoom);

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
| languageCode |  ``` Optional ```  ``` DefaultValue ```  | The language to display results in, available languages are: <ul> <li>de, en, es, fr, it, pt, ru</li> </ul> |
| fuzzySearch |  ``` Optional ```  ``` DefaultValue ```  | If no matches are found for the given address, start performing a recursive fuzzy search until a geolocation is found. This option is recommended for processing user input or implementing auto-complete. We use a combination of approximate string matching and data cleansing to find possible location matches |



#### Example Usage

```php
$address = 'address';
$countryCode = 'country-code';
$languageCode = 'en';
$fuzzySearch = false;

$result = $geolocation->geocodeAddress($address, $countryCode, $languageCode, $fuzzySearch);

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

## <a name="www"></a>![Class: ](https://apidocs.io/img/class.png ".WWW") WWW

### Get singleton instance

The singleton instance of the ``` WWW ``` class can be accessed from the API Client.

```php
$wWW = $client->getWWW();
```

### <a name="u_rl_info"></a>![Method: ](https://apidocs.io/img/method.png ".WWW.uRLInfo") uRLInfo

> Parse, analyze and retrieve content from the supplied URL. See: https://www.neutrinoapi.com/api/url-info/


```php
function uRLInfo(
        $url,
        $fetchContent = false,
        $ignoreCertificateErrors = false,
        $timeout = 20)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| url |  ``` Required ```  | The URL to probe |
| fetchContent |  ``` Optional ```  ``` DefaultValue ```  | If this URL responds with html, text, json or xml then return the response. This option is useful if you want to perform further processing on the URL content (e.g. with the HTML Extract or HTML Clean APIs) |
| ignoreCertificateErrors |  ``` Optional ```  ``` DefaultValue ```  | Ignore any TLS/SSL certificate errors and load the URL anyway |
| timeout |  ``` Optional ```  ``` DefaultValue ```  | Timeout in seconds. Give up if still trying to load the URL after this number of seconds |



#### Example Usage

```php
$url = 'url';
$fetchContent = false;
$ignoreCertificateErrors = false;
$timeout = 20;

$result = $wWW->uRLInfo($url, $fetchContent, $ignoreCertificateErrors, $timeout);

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
| outputType |  ``` Required ```  | The level of sanitization, possible values are: <b>plain-text</b>: reduce the content to plain text only (no HTML tags at all) <b>simple-text</b>: allow only very basic text formatting tags like b, em, i, strong, u <b>basic-html</b>: allow advanced text formatting and hyper links <b>basic-html-with-images</b>: same as basic html but also allows image tags <b>advanced-html</b>: same as basic html with images but also allows many more common HTML tags like table, ul, dl, pre |



#### Example Usage

```php
$content = 'content';
$outputType = 'output-type';

$result = $wWW->hTMLClean($content, $outputType);

```


### <a name="browser_bot"></a>![Method: ](https://apidocs.io/img/method.png ".WWW.browserBot") browserBot

> Browser bot can extract content, interact with keyboard and mouse events, and execute JavaScript on a website. See: https://www.neutrinoapi.com/api/browser-bot/


```php
function browserBot(
        $url,
        $timeout = 30,
        $delay = 3,
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
| delay |  ``` Optional ```  ``` DefaultValue ```  | Delay in seconds to wait before capturing any page data, executing selectors or JavaScript |
| selector |  ``` Optional ```  | Extract content from the page DOM using this selector. Commonly known as a CSS selector, you can find a good reference <a href="https://www.w3schools.com/cssref/css_selectors.asp">here</a> |
| exec |  ``` Optional ```  ``` Collection ```  ``` DefaultValue ```  | Execute JavaScript on the page. Each array element should contain a valid JavaScript statement in string form. If a statement returns any kind of value it will be returned in the 'exec-results' response. For your convenience you can also use the following special shortcut functions: <div> sleep(seconds); Just wait/sleep for the specified number of seconds. click('selector'); Click on the first element matching the given selector. focus('selector'); Focus on the first element matching the given selector. keys('characters'); Send the specified keyboard characters. Use click() or focus() first to send keys to a specific element. enter(); Send the Enter key. tab(); Send the Tab key. </div> Example: <div> [ "click('#button-id')", "sleep(1)", "click('.field-class')", "keys('1234')", "enter()" ] </div> |
| userAgent |  ``` Optional ```  | Override the browsers default user-agent string with this one |
| ignoreCertificateErrors |  ``` Optional ```  ``` DefaultValue ```  | Ignore any TLS/SSL certificate errors and load the page anyway |



#### Example Usage

```php
$url = 'url';
$timeout = 30;
$delay = 3;
$selector = 'selector';
$execValue = "[]";
$exec = APIHelper::deserialize($execValue);
$userAgent = 'user-agent';
$ignoreCertificateErrors = false;

$result = $wWW->browserBot($url, $timeout, $delay, $selector, $exec, $userAgent, $ignoreCertificateErrors);

```


[Back to List of Controllers](#list_of_controllers)



