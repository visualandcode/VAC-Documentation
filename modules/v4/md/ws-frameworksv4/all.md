## Table of contents

- [\Micro\Model (abstract)](#class-micromodel-abstract)
- [\Micro\Component (abstract)](#class-microcomponent-abstract)
- [\Micro\ModelDataset](#class-micromodeldataset)
- [\Micro\URL](#class-microurl)
- [\Micro\Controller (abstract)](#class-microcontroller-abstract)
- [\Micro\ModelPageset](#class-micromodelpageset)
- [\Micro\App](#class-microapp)
- [\Micro\ModelQuery](#class-micromodelquery)
- [\Micro\ErrorHandler](#class-microerrorhandler)
- [\Micro\Security](#class-microsecurity)
- [\Micro\Mailer](#class-micromailer)
- [\Micro\Dompdf](#class-microdompdf)
- [\Micro\Image](#class-microimage)
- [\Micro\Auth\AuthProvider](#class-microauthauthprovider)
- [\Micro\Auth\AuthProvider](#class-microauthauthprovider)
- [\Micro\Auth\AuthMiddleware](#class-microauthauthmiddleware)
- [\Micro\Bpmn\BpmnProvider](#class-microbpmnbpmnprovider)
- [\Micro\Bpmn\BpmnWorker](#class-microbpmnbpmnworker)
- [\Micro\Dx\DxAuth](#class-microdxdxauth)
- [\Micro\Dx\DxResult](#class-microdxdxresult)
- [\Micro\Dx\DxEvent](#class-microdxdxevent)
- [\Micro\Dx\DxProvider](#class-microdxdxprovider)
- [\Micro\Dx\DxMappingProvider](#class-microdxdxmappingprovider)
- [\Micro\Dx\DxProfile](#class-microdxdxprofile)
- [\Micro\File\UploadProvider](#class-microfileuploadprovider)
- [\Micro\File\FileProvider](#class-microfilefileprovider)
- [\Micro\Google\GoogleMailProvider](#class-microgooglegooglemailprovider)
- [\Micro\Google\GoogleMapsProvider](#class-microgooglegooglemapsprovider)
- [\Micro\Google\GoogleClient](#class-microgooglegoogleclient)
- [\Micro\Helpers\UTF8](#class-microhelpersutf8)
- [\Micro\Helpers\Text](#class-microhelperstext)
- [\Micro\Helpers\Activitylog](#class-microhelpersactivitylog)
- [\Micro\Helpers\Theme](#class-microhelperstheme)
- [\Micro\Helpers\Maps](#class-microhelpersmaps)
- [\Micro\Helpers\Markdown](#class-microhelpersmarkdown)
- [\Micro\Helpers\Date](#class-microhelpersdate)
- [\Micro\Helpers\Encoding](#class-microhelpersencoding)
- [\Micro\Helpers\Coordinate](#class-microhelperscoordinate)
- [\Micro\Http\Request](#class-microhttprequest)
- [\Micro\Http\Response](#class-microhttpresponse)
- [\Micro\Ldap\Resultset](#class-microldapresultset)
- [\Micro\Ldap\LdapProvider](#class-microldapldapprovider)
- [\Micro\Ldap\Entry](#class-microldapentry)
- [\Micro\OTP\OTPProvider](#class-microotpotpprovider)
- [\Micro\Paginator\Adapter\QueryBuilder](#class-micropaginatoradapterquerybuilder)
- [\Micro\Paginator\Adapter\QueryBuilder](#class-micropaginatoradapterquerybuilder)
- [\Micro\Role\RoleProvider](#class-microroleroleprovider)
- [\Micro\Routing\Router](#class-microroutingrouter)
- [\Micro\Routing\Group](#class-microroutinggroup)
- [\Micro\Routing\Router](#class-microroutingrouter)
- [\Micro\Routing\Group](#class-microroutinggroup)
- [\Micro\Sanitize\SanitizeProvider](#class-microsanitizesanitizeprovider)
- [\Micro\Sanitize\Filters\Ip](#class-microsanitizefiltersip)
- [\Micro\Sanitize\Filters\Integer](#class-microsanitizefiltersinteger)
- [\Micro\Sanitize\Filters\StringSanitize](#class-microsanitizefiltersstringsanitize)
- [\Micro\Sanitize\Filters\SqlInjection](#class-microsanitizefilterssqlinjection)
- [\Micro\Sanitize\Filters\Utf8](#class-microsanitizefiltersutf8)
- [\Micro\Sanitize\Filters\Url](#class-microsanitizefiltersurl)
- [\Micro\Sanitize\Filters\Email](#class-microsanitizefiltersemail)
- [\Micro\Sanitize\Filters\NotBaseDir](#class-microsanitizefiltersnotbasedir)
- [\Micro\Socket\SocketProvider](#class-microsocketsocketprovider)
- [\Micro\Translator\LanguageProvider](#class-microtranslatorlanguageprovider)
- [\Micro\Validation\ValidationProvider](#class-microvalidationvalidationprovider)
- [\Micro\Validation\Settings\Setvar](#class-microvalidationsettingssetvar)
- [\Micro\Validation\Settings\Mime](#class-microvalidationsettingsmime)
- [\Micro\Validation\Validator\Ip](#class-microvalidationvalidatorip)
- [\Micro\Validation\Validator\Password](#class-microvalidationvalidatorpassword)
- [\Micro\Validation\Validator\URL](#class-microvalidationvalidatorurl)
- [\Micro\Validation\Validator\Text](#class-microvalidationvalidatortext)
- [\Micro\Validation\Validator\IdentityNumber](#class-microvalidationvalidatoridentitynumber)
- [\Micro\Validation\Validator\VirusScanner](#class-microvalidationvalidatorvirusscanner)
- [\Micro\Validation\Validator\Email](#class-microvalidationvalidatoremail)
- [\Micro\Validation\Validator\Entities](#class-microvalidationvalidatorentities)
- [\Micro\Validation\Validator\Number](#class-microvalidationvalidatornumber)
- [\Micro\Validation\Validator\Date](#class-microvalidationvalidatordate)
- [\Micro\Validation\Validator\File](#class-microvalidationvalidatorfile)

<hr />

### Class: \Micro\Model (abstract)

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>get(</strong><em>mixed</em> <strong>$id=null</strong>)</strong> : <em>mixed</em> |
| public static | <strong>getTemplate()</strong> : <em>mixed</em> |
| public static | <strong>none()</strong> : <em>void</em> |

*This class extends \Phalcon\Mvc\Model*

*This class implements \JsonSerializable, \Serializable, \Phalcon\Di\InjectionAwareInterface, \Phalcon\Mvc\Model\ResultInterface, \Phalcon\Mvc\ModelInterface, \Phalcon\Mvc\EntityInterface*

<hr />

### Class: \Micro\Component (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__get(</strong><em>mixed</em> <strong>$key</strong>)</strong> : <em>void</em> |
| public | <strong>getApp()</strong> : <em>mixed</em> |

<hr />

### Class: \Micro\ModelDataset

| Visibility | Function |
|:-----------|:---------|
| public | <strong>jsonSerialize()</strong> : <em>void</em> |
| public | <strong>map(</strong><em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public | <strong>setColumns(</strong><em>mixed</em> <strong>$columns</strong>)</strong> : <em>void</em> |

*This class extends \Phalcon\Mvc\Model\Resultset\Simple*

*This class implements \Phalcon\Mvc\Model\ResultsetInterface, \Iterator, \Traversable, \SeekableIterator, \Countable, \ArrayAccess, \Serializable, \JsonSerializable*

<hr />

### Class: \Micro\URL

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>getBaseUri()</strong> : <em>mixed</em> |
| public | <strong>getBaseUrl()</strong> : <em>mixed</em> |
| public | <strong>getClientUrl()</strong> : <em>mixed</em> |
| public | <strong>getHost()</strong> : <em>mixed</em> |
| public | <strong>getScheme()</strong> : <em>mixed</em> |
| public | <strong>getSiteUrl(</strong><em>mixed</em> <strong>$path</strong>)</strong> : <em>mixed</em> |

*This class extends \Phalcon\Mvc\Url*

*This class implements \Phalcon\Di\InjectionAwareInterface, \Phalcon\Mvc\UrlInterface*

<hr />

### Class: \Micro\Controller (abstract)

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getApp()</strong> : <em>mixed</em> |
| public | <strong>getModule()</strong> : <em>mixed</em> |
| public | <strong>initialize()</strong> : <em>void</em> |
| public | <strong>onConstruct()</strong> : <em>void</em> |
| public | <strong>preflightAction()</strong> : <em>void</em> |

*This class extends \Phalcon\Mvc\Controller*

*This class implements \Phalcon\Mvc\ControllerInterface, \Phalcon\Di\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface*

<hr />

### Class: \Micro\ModelPageset

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Micro\ModelQuery](#class-micromodelquery)</em> <strong>$query</strong>)</strong> : <em>void</em> |
| public | <strong>filter(</strong><em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public | <strong>getFirst()</strong> : <em>mixed</em> |
| public | <strong>getLast()</strong> : <em>mixed</em> |
| public | <strong>jsonSerialize()</strong> : <em>void</em> |
| public | <strong>map(</strong><em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public | <strong>setColumns(</strong><em>mixed</em> <strong>$columns</strong>)</strong> : <em>void</em> |
| public | <strong>toArray()</strong> : <em>void</em> |

*This class implements \JsonSerializable*

<hr />

### Class: \Micro\App

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public static | <strong>getDefault()</strong> : <em>mixed</em> |
| public | <strong>mount(</strong><em>\Phalcon\Mvc\Micro\CollectionInterface</em> <strong>$collection</strong>)</strong> : <em>void</em> |
| public | <strong>run()</strong> : <em>void</em> |
| public static | <strong>test()</strong> : <em>void</em> |

*This class extends \Phalcon\Mvc\Micro*

*This class implements \ArrayAccess, \Phalcon\Di\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface*

<hr />

### Class: \Micro\ModelQuery

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__call(</strong><em>mixed</em> <strong>$method</strong>, <em>mixed</em> <strong>$args</strong>)</strong> : <em>void</em> |
| public | <strong>__construct(</strong><em>[\Phalcon\Mvc\Model](http://php.net/manual/en/class.phalconmvcmodel.php)</em> <strong>$model</strong>, <em>\Phalcon\DiInterface</em> <strong>$di=null</strong>)</strong> : <em>void</em> |
| public | <strong>alias(</strong><em>mixed</em> <strong>$alias</strong>)</strong> : <em>void</em> |
| public | <strong>execute()</strong> : <em>void</em> |
| public | <strong>filterable(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |
| public | <strong>getBuilder()</strong> : <em>mixed</em> |
| public | <strong>getFields()</strong> : <em>mixed</em> |
| public | <strong>getLimit()</strong> : <em>mixed</em> |
| public | <strong>getStart()</strong> : <em>mixed</em> |
| public | <strong>join(</strong><em>mixed</em> <strong>$model</strong>, <em>mixed</em> <strong>$conditions=null</strong>, <em>mixed</em> <strong>$alias=null</strong>, <em>string</em> <strong>$type=`'left'`</strong>)</strong> : <em>void</em> |
| public | <strong>limit(</strong><em>mixed</em> <strong>$limit</strong>, <em>mixed</em> <strong>$start=null</strong>)</strong> : <em>void</em> |
| public | <strong>paginate(</strong><em>bool</em> <strong>$fetchRequest=true</strong>)</strong> : <em>void</em> |
| public | <strong>sortable()</strong> : <em>void</em> |

<hr />

### Class: \Micro\ErrorHandler

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>[\Micro\App](#class-microapp)</em> <strong>$app</strong>)</strong> : <em>void</em> |
| public | <strong>cleanup()</strong> : <em>void</em> |
| public | <strong>getApp()</strong> : <em>mixed</em> |
| public | <strong>getUser()</strong> : <em>mixed</em> |
| public | <strong>handle(</strong><em>string</em> <strong>$types=`'defaults'`</strong>)</strong> : <em>void</em> |
| public | <strong>handleError(</strong><em>mixed</em> <strong>$level</strong>, <em>mixed</em> <strong>$message</strong>, <em>mixed</em> <strong>$file=null</strong>, <em>mixed</em> <strong>$line=null</strong>)</strong> : <em>void</em> |
| public | <strong>handleException(</strong><em>mixed</em> <strong>$exception</strong>)</strong> : <em>void</em> |
| public | <strong>handleShutdown()</strong> : <em>void</em> |
| public | <strong>isDevelopment()</strong> : <em>bool</em> |
| public static | <strong>isLevelFatal(</strong><em>mixed</em> <strong>$level</strong>)</strong> : <em>bool</em> |
| public | <strong>log(</strong><em>mixed</em> <strong>$exception</strong>)</strong> : <em>void</em> |
| public | <strong>setApp(</strong><em>[\Micro\App](#class-microapp)</em> <strong>$app</strong>)</strong> : <em>void</em> |
| public | <strong>setDevelopment()</strong> : <em>void</em> |
| public | <strong>setProduction()</strong> : <em>void</em> |

<hr />

### Class: \Micro\Security

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>createCaptcha(</strong><em>string</em> <strong>$type=`'image'`</strong>)</strong> : <em>mixed</em> |
| public | <strong>createHash(</strong><em>mixed</em> <strong>$password</strong>)</strong> : <em>mixed</em> |
| public | <strong>createPassword(</strong><em>mixed</em> <strong>$length=8</strong>)</strong> : <em>mixed</em> |
| public | <strong>createRandom(</strong><em>mixed</em> <strong>$length=16</strong>)</strong> : <em>mixed</em> |
| public | <strong>createToken(</strong><em>array</em> <strong>$payload=array()</strong>, <em>mixed</em> <strong>$timeout=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>decodeToken(</strong><em>mixed</em> <strong>$token</strong>)</strong> : <em>void</em> |
| public | <strong>decrypt(</strong><em>mixed</em> <strong>$data</strong>, <em>bool</em> <strong>$base64=false</strong>)</strong> : <em>void</em> |
| public | <strong>encrypt(</strong><em>mixed</em> <strong>$data</strong>, <em>bool</em> <strong>$base64=false</strong>)</strong> : <em>void</em> |
| public | <strong>getApp()</strong> : <em>mixed</em> |
| public | <strong>verifyCaptcha(</strong><em>mixed</em> <strong>$code</strong>)</strong> : <em>void</em> |
| public | <strong>verifyHash(</strong><em>mixed</em> <strong>$password</strong>, <em>mixed</em> <strong>$hashed</strong>)</strong> : <em>void</em> |
| public | <strong>verifyToken(</strong><em>mixed</em> <strong>$token</strong>)</strong> : <em>void</em> |

*This class extends \Phalcon\Security*

*This class implements \Phalcon\Di\InjectionAwareInterface*

<hr />

### Class: \Micro\Mailer

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$config=array()</strong>)</strong> : <em>void</em> |
| public | <strong>attachment(</strong><em>bool</em> <strong>$pathFile=false</strong>, <em>bool</em> <strong>$nameFile=false</strong>)</strong> : <em>void</em> |
| public | <strong>body(</strong><em>bool</em> <strong>$body=false</strong>)</strong> : <em>void</em> |
| public | <strong>from(</strong><em>bool</em> <strong>$from=false</strong>, <em>bool</em> <strong>$fromName=false</strong>)</strong> : <em>void</em> |
| public | <strong>send(</strong><em>bool</em> <strong>$params=false</strong>)</strong> : <em>void</em> |
| public | <strong>subject(</strong><em>bool</em> <strong>$subj=false</strong>)</strong> : <em>void</em> |
| public | <strong>to(</strong><em>bool</em> <strong>$to=false</strong>, <em>bool</em> <strong>$toName=false</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Dompdf

| Visibility | Function |
|:-----------|:---------|
| public | <strong>pdf_create(</strong><em>mixed</em> <strong>$html</strong>, <em>mixed</em> <strong>$xfilename</strong>, <em>bool</em> <strong>$stream=true</strong>, <em>string</em> <strong>$papersize=`'A4'`</strong>, <em>string</em> <strong>$orientation=`'portrait'`</strong>)</strong> : <em>void</em> |
| public | <strong>pdf_create_special(</strong><em>mixed</em> <strong>$pass</strong>, <em>mixed</em> <strong>$html</strong>, <em>mixed</em> <strong>$xfilename</strong>, <em>bool</em> <strong>$stream=true</strong>, <em>string</em> <strong>$papersize=`'A4'`</strong>, <em>string</em> <strong>$orientation=`'portrait'`</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Image

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$source</strong>)</strong> : <em>void</em> |
| public | <strong>cache()</strong> : <em>void</em> |
| public | <strong>getAspectRatio()</strong> : <em>mixed</em> |
| public | <strong>getHeight()</strong> : <em>mixed</em> |
| public | <strong>getWidth()</strong> : <em>mixed</em> |
| public | <strong>thumb(</strong><em>mixed</em> <strong>$width=100</strong>, <em>mixed</em> <strong>$height=100</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Auth\AuthProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>error()</strong> : <em>void</em> |
| public | <strong>guest()</strong> : <em>void</em> |
| public | <strong>id(</strong><em>mixed</em> <strong>$token=null</strong>)</strong> : <em>void</em> |
| public | <strong>isCaptchaEnabled()</strong> : <em>bool</em> |
| public | <strong>login(</strong><em>mixed</em> <strong>$email</strong>, <em>mixed</em> <strong>$password</strong>, <em>bool</em> <strong>$remember=false</strong>)</strong> : <em>void</em> |
| public | <strong>logout()</strong> : <em>void</em> |
| public | <strong>sanitize(</strong><em>mixed</em> <strong>$user=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[sanitize description]</em> |
| public | <strong>save(</strong><em>mixed</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>secure(</strong><em>mixed</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>token()</strong> : <em>void</em> |
| public | <strong>user(</strong><em>mixed</em> <strong>$token=null</strong>, <em>bool</em> <strong>$model=false</strong>)</strong> : <em>void</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$token=null</strong>)</strong> : <em>void</em> |
| protected | <strong>_databaseLogin(</strong><em>mixed</em> <strong>$email</strong>, <em>mixed</em> <strong>$password</strong>)</strong> : <em>void</em> |
| protected | <strong>_findUserByEmail(</strong><em>mixed</em> <strong>$email</strong>)</strong> : <em>void</em> |
| protected | <strong>_ldapLogin(</strong><em>mixed</em> <strong>$email</strong>, <em>mixed</em> <strong>$password</strong>)</strong> : <em>void</em> |
| protected | <strong>_run(</strong><em>mixed</em> <strong>$class</strong>, <em>mixed</em> <strong>$method</strong>, <em>array</em> <strong>$args=array()</strong>)</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Auth\AuthProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>error()</strong> : <em>void</em> |
| public | <strong>guest()</strong> : <em>void</em> |
| public | <strong>id(</strong><em>mixed</em> <strong>$token=null</strong>)</strong> : <em>void</em> |
| public | <strong>isCaptchaEnabled()</strong> : <em>bool</em> |
| public | <strong>login(</strong><em>mixed</em> <strong>$email</strong>, <em>mixed</em> <strong>$password</strong>, <em>bool</em> <strong>$remember=false</strong>)</strong> : <em>void</em> |
| public | <strong>logout()</strong> : <em>void</em> |
| public | <strong>sanitize(</strong><em>mixed</em> <strong>$user=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[sanitize description]</em> |
| public | <strong>save(</strong><em>mixed</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>secure(</strong><em>mixed</em> <strong>$user</strong>)</strong> : <em>void</em> |
| public | <strong>token()</strong> : <em>void</em> |
| public | <strong>user(</strong><em>mixed</em> <strong>$token=null</strong>, <em>bool</em> <strong>$model=false</strong>)</strong> : <em>void</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$token=null</strong>)</strong> : <em>void</em> |
| protected | <strong>_databaseLogin(</strong><em>mixed</em> <strong>$email</strong>, <em>mixed</em> <strong>$password</strong>)</strong> : <em>void</em> |
| protected | <strong>_findUserByEmail(</strong><em>mixed</em> <strong>$email</strong>)</strong> : <em>void</em> |
| protected | <strong>_ldapLogin(</strong><em>mixed</em> <strong>$email</strong>, <em>mixed</em> <strong>$password</strong>)</strong> : <em>void</em> |
| protected | <strong>_run(</strong><em>mixed</em> <strong>$class</strong>, <em>mixed</em> <strong>$method</strong>, <em>array</em> <strong>$args=array()</strong>)</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Auth\AuthMiddleware

| Visibility | Function |
|:-----------|:---------|
| public | <strong>authenticate()</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Bpmn\BpmnProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>worker(</strong><em>mixed</em> <strong>$name</strong>)</strong> : <em>void</em> |
| public | <strong>workers()</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Bpmn\BpmnWorker

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$name</strong>, <em>mixed</em> <strong>$provider</strong>)</strong> : <em>void</em> |
| public | <strong>activities()</strong> : <em>void</em> |
| public | <strong>description()</strong> : <em>void</em> |
| public | <strong>diagram()</strong> : <em>void</em> |
| public | <strong>id()</strong> : <em>void</em> |
| public | <strong>name()</strong> : <em>void</em> |
| public | <strong>next(</strong><em>mixed</em> <strong>$current</strong>, <em>array</em> <strong>$payload=array()</strong>)</strong> : <em>void</em> |
| public | <strong>start(</strong><em>array</em> <strong>$payload=array()</strong>, <em>bool</em> <strong>$multiple=false</strong>)</strong> : <em>void</em> |
| public | <strong>statuses()</strong> : <em>void</em> |
| public | <strong>stop()</strong> : <em>void</em> |
| public | <strong>text()</strong> : <em>void</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$payload</strong>, <em>mixed</em> <strong>$conds</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Dx\DxAuth

| Visibility | Function |
|:-----------|:---------|

<hr />

### Class: \Micro\Dx\DxResult

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>init(</strong><em>mixed</em> <strong>$table</strong>)</strong> : <em>void</em> |
| public | <strong>log(</strong><em>mixed</em> <strong>$info</strong>, <em>mixed</em> <strong>$value=1</strong>)</strong> : <em>void</em> |
| public | <strong>reset()</strong> : <em>void</em> |
| public | <strong>start()</strong> : <em>void</em> |
| public | <strong>stop()</strong> : <em>void</em> |
| public | <strong>sum(</strong><em>mixed</em> <strong>$table</strong>, <em>mixed</em> <strong>$info</strong>, <em>mixed</em> <strong>$value</strong>, <em>bool</em> <strong>$summary=false</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Dx\DxEvent

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$type</strong>, <em>array</em> <strong>$data=null</strong>)</strong> : <em>void</em> |
| public | <strong>isDefaultPrevented()</strong> : <em>bool</em> |
| public | <strong>preventDefault()</strong> : <em>void</em> |

<hr />

### Class: \Micro\Dx\DxProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>profile(</strong><em>mixed</em> <strong>$name</strong>, <em>bool</em> <strong>$reset=true</strong>)</strong> : <em>void</em> |
| public | <strong>profiles()</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Dx\DxMappingProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em> |
| public | <strong>debug()</strong> : <em>void</em> |
| public | <strong>error()</strong> : <em>void</em> |
| public static | <strong>fixUtf8(</strong><em>mixed</em> <strong>$text</strong>)</strong> : <em>void</em> |
| public | <strong>info()</strong> : <em>void</em> |
| public | <strong>save()</strong> : <em>void</em> |
| public | <strong>setup(</strong><em>array</em> <strong>$params=array()</strong>)</strong> : <em>void</em> |
| public | <strong>success()</strong> : <em>void</em> |
| public static | <strong>toUtf8(</strong><em>mixed</em> <strong>$text</strong>)</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Dx\DxProfile

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$name</strong>, <em>mixed</em> <strong>$providers</strong>)</strong> : <em>void</em> |
| public | <strong>_debug(</strong><em>mixed</em> <strong>$message</strong>)</strong> : <em>void</em> |
| public static | <strong>app()</strong> : <em>void</em> |
| public | <strong>data()</strong> : <em>void</em> |
| public static | <strong>db()</strong> : <em>void</em> |
| public | <strong>download()</strong> : <em>void</em> |
| public | <strong>fire(</strong><em>mixed</em> <strong>$type</strong>, <em>array</em> <strong>$data=array()</strong>)</strong> : <em>void</em> |
| public | <strong>getMessages()</strong> : <em>mixed</em> |
| public | <strong>initialize(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |
| public | <strong>on(</strong><em>mixed</em> <strong>$type</strong>, <em>mixed</em> <strong>$handler=null</strong>, <em>mixed</em> <strong>$priority=1500</strong>)</strong> : <em>void</em> |
| public | <strong>read(</strong><em>mixed</em> <strong>$file</strong>, <em>mixed</em> <strong>$sheet=null</strong>)</strong> : <em>void</em> |
| public | <strong>reset()</strong> : <em>void</em> |
| public | <strong>result()</strong> : <em>void</em> |
| public | <strong>save()</strong> : <em>void</em> |
| public | <strong>upload(</strong><em>string</em> <strong>$source=`'userfile'`</strong>)</strong> : <em>void</em> |
| protected | <strong>_setup()</strong> : <em>void</em> |

<hr />

### Class: \Micro\File\UploadProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>__moveSafeFile()</strong> : <em>[type] [description]</em><br /><em>[__moveSafeFile description]</em> |
| public | <strong>getError()</strong> : <em>[type] [description]</em><br /><em>[getError description]</em> |
| public | <strong>getMessage()</strong> : <em>[type] [description]</em><br /><em>[getMessage description]</em> |
| public | <strong>getResult()</strong> : <em>[type] [description]</em><br /><em>[getResult description]</em> |
| public | <strong>initialize(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>[type] [description]</em><br /><em>[initialize description]</em> |
| public | <strong>multiupload()</strong> : <em>[type] [description]</em><br /><em>[multiupload description]</em> |
| public | <strong>reset()</strong> : <em>[type] [description]</em><br /><em>[reset description]</em> |
| public | <strong>upload()</strong> : <em>[type] [description]</em><br /><em>[upload description]</em> |
| public | <strong>uploadaction(</strong><em>string</em> <strong>$file=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[uploadaction description]</em> |
| protected | <strong>__virusScanner()</strong> : <em>[type] [description] scan file viruses</em><br /><em>[_scan description]</em> |

<hr />

### Class: \Micro\File\FileProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>download(</strong><em>mixed</em> <strong>$file</strong>, <em>mixed</em> <strong>$name=null</strong>)</strong> : <em>void</em> |
| public | <strong>exists(</strong><em>mixed</em> <strong>$path</strong>)</strong> : <em>void</em> |
| public | <strong>file_get_contents(</strong><em>mixed</em> <strong>$url=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[file_get_contents description]</em> |
| public | <strong>getExtension(</strong><em>mixed</em> <strong>$file</strong>)</strong> : <em>mixed</em> |
| public | <strong>getType(</strong><em>mixed</em> <strong>$file</strong>)</strong> : <em>mixed</em> |
| public | <strong>isImage(</strong><em>mixed</em> <strong>$file</strong>)</strong> : <em>bool</em> |
| public | <strong>render(</strong><em>mixed</em> <strong>$file</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Google\GoogleMailProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>getAuthUrl(</strong><em>mixed</em> <strong>$data=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>getCallbackUrl()</strong> : <em>mixed</em> |
| public | <strong>getClient()</strong> : <em>mixed</em> |
| public | <strong>getErrors()</strong> : <em>mixed</em> |
| public | <strong>getProfile(</strong><em>mixed</em> <strong>$token</strong>)</strong> : <em>mixed</em> |
| public | <strong>getToken(</strong><em>mixed</em> <strong>$code=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>read(</strong><em>mixed</em> <strong>$account</strong>, <em>mixed</em> <strong>$message</strong>)</strong> : <em>void</em> |
| public | <strong>syncLabels(</strong><em>mixed</em> <strong>$account</strong>)</strong> : <em>void</em> |
| public | <strong>syncThreads(</strong><em>mixed</em> <strong>$account</strong>, <em>array</em> <strong>$params=array()</strong>, <em>bool</em> <strong>$partial=false</strong>)</strong> : <em>void</em> |
| public | <strong>validateToken(</strong><em>mixed</em> <strong>$account</strong>)</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Google\GoogleMapsProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>find(</strong><em>mixed</em> <strong>$input</strong>, <em>string</em> <strong>$types=`'address'`</strong>)</strong> : <em>mixed</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Google\GoogleClient

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>getClient()</strong> : <em>mixed</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Helpers\UTF8

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>fix(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public static | <strong>make(</strong><em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Helpers\Text

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>initial(</strong><em>mixed</em> <strong>$words</strong>)</strong> : <em>void</em> |
| public static | <strong>limitChars(</strong><em>mixed</em> <strong>$text</strong>, <em>mixed</em> <strong>$limit=500</strong>, <em>string</em> <strong>$suffix=`'&#8230;'`</strong>)</strong> : <em>void</em> |
| public static | <strong>limitWords(</strong><em>mixed</em> <strong>$text</strong>, <em>mixed</em> <strong>$limit=100</strong>, <em>string</em> <strong>$suffix=`'&#8230;'`</strong>)</strong> : <em>void</em> |
| public static | <strong>slug(</strong><em>mixed</em> <strong>$text</strong>)</strong> : <em>void</em> |

*This class extends \Phalcon\Text*

<hr />

### Class: \Micro\Helpers\Activitylog

| Visibility | Function |
|:-----------|:---------|
| public | <strong>insertActivity()</strong> : <em>[type] [description]</em><br /><em>[insertActivity description]</em> |
| public static | <strong>log()</strong> : <em>[type] [description]</em><br /><em>[log description]</em> |
| public | <strong>save(</strong><em>\Micro\Helpers\[type]</em> <strong>$action=null</strong>, <em>\Micro\Helpers\[type]</em> <strong>$message=null</strong>)</strong> : <em>void</em><br /><em>[set description]</em> |
| protected static | <strong>instance()</strong> : <em>[type] [description]</em><br /><em>[instance description]</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Helpers\Theme

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>colors()</strong> : <em>void</em> |
| public static | <strong>val(</strong><em>mixed</em> <strong>$prop</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Helpers\Maps

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>pick(</strong><em>mixed</em> <strong>$array</strong>, <em>mixed</em> <strong>$keys</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Helpers\Markdown

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>html(</strong><em>mixed</em> <strong>$markdown</strong>)</strong> : <em>void</em> |
| public static | <strong>text(</strong><em>mixed</em> <strong>$html</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Helpers\Date

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>create(</strong><em>mixed</em> <strong>$date</strong>)</strong> : <em>mixed</em> |
| public static | <strong>format(</strong><em>mixed</em> <strong>$date</strong>, <em>string</em> <strong>$format=`'M d, Y H:i'`</strong>)</strong> : <em>void</em> |
| public static | <strong>formatPeriod(</strong><em>mixed</em> <strong>$start</strong>, <em>mixed</em> <strong>$end</strong>, <em>string</em> <strong>$separator=`' - '`</strong>)</strong> : <em>void</em> |
| public static | <strong>formatRelative(</strong><em>mixed</em> <strong>$date</strong>, <em>string</em> <strong>$format=`'M d, Y H:i'`</strong>)</strong> : <em>void</em> |
| public static | <strong>today()</strong> : <em>void</em> |

<hr />

### Class: \Micro\Helpers\Encoding

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>UTF8FixWin1252Chars(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>)</strong> : <em>void</em><br /><em>[UTF8FixWin1252Chars description]</em> |
| public static | <strong>encode(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$encodingLabel=`''`</strong>, <em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[encode description]</em> |
| public static | <strong>fixUTF8(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>, <em>string/\Micro\Helpers\[type]</em> <strong>$option=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[fixUTF8 description]</em> |
| public static | <strong>isUTF8(</strong><em>string</em> <strong>$text=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[checkUTF8 description]</em> |
| public static | <strong>normalizeEncoding(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$encodingLabel=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[normalizeEncoding description]</em> |
| public static | <strong>removeBOM(</strong><em>string</em> <strong>$str=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[removeBOM description]</em> |
| public static | <strong>toISO8859(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[toISO8859 description]</em> |
| public static | <strong>toLatin1(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[toLatin1 description]</em> |
| public static | <strong>toUTF8(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[toUTF8 description]</em> |
| public static | <strong>toWin1252(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>, <em>string/\Micro\Helpers\[type]</em> <strong>$option=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[toWin1252 description]</em> |
| protected static | <strong>strlen(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[strlen description]</em> |
| protected static | <strong>utf8_decode(</strong><em>string/\Micro\Helpers\[type]</em> <strong>$text=`''`</strong>, <em>string/\Micro\Helpers\[type]</em> <strong>$option=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[utf8_decode description]</em> |

<hr />

### Class: \Micro\Helpers\Coordinate

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>latDecToDms(</strong><em>mixed</em> <strong>$lat</strong>)</strong> : <em>void</em> |
| public static | <strong>latDmsToDec(</strong><em>mixed</em> <strong>$latDeg</strong>, <em>mixed</em> <strong>$latMin</strong>, <em>mixed</em> <strong>$latSec</strong>, <em>string</em> <strong>$latDir=`''`</strong>)</strong> : <em>void</em> |
| public static | <strong>longDecToDms(</strong><em>mixed</em> <strong>$long</strong>)</strong> : <em>void</em> |
| public static | <strong>longDmsToDec(</strong><em>mixed</em> <strong>$longDeg</strong>, <em>mixed</em> <strong>$longMin</strong>, <em>mixed</em> <strong>$longSec</strong>, <em>string</em> <strong>$longDir=`''`</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Http\Request

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getFiles()</strong> : <em>mixed</em> |
| public | <strong>getJson(</strong><em>mixed</em> <strong>$field=null</strong>, <em>mixed</em> <strong>$filters=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>getParams()</strong> : <em>mixed</em> |

*This class extends \Phalcon\Http\Request*

*This class implements \Phalcon\Di\InjectionAwareInterface, \Phalcon\Http\RequestInterface*

<hr />

### Class: \Micro\Http\Response

| Visibility | Function |
|:-----------|:---------|

*This class extends \Phalcon\Http\Response*

*This class implements \Phalcon\Di\InjectionAwareInterface, \Phalcon\Http\ResponseInterface*

<hr />

### Class: \Micro\Ldap\Resultset

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>mixed</em> <strong>$items</strong>)</strong> : <em>void</em> |
| public | <strong>count()</strong> : <em>void</em> |
| public | <strong>current()</strong> : <em>void</em> |
| public | <strong>jsonSerialize()</strong> : <em>void</em> |
| public | <strong>key()</strong> : <em>void</em> |
| public | <strong>next()</strong> : <em>void</em> |
| public | <strong>offsetExists(</strong><em>mixed</em> <strong>$index</strong>)</strong> : <em>void</em> |
| public | <strong>offsetGet(</strong><em>mixed</em> <strong>$index</strong>)</strong> : <em>void</em> |
| public | <strong>offsetSet(</strong><em>mixed</em> <strong>$index</strong>, <em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>offsetUnset(</strong><em>mixed</em> <strong>$index</strong>)</strong> : <em>void</em> |
| public | <strong>rewind()</strong> : <em>void</em> |
| public | <strong>seek(</strong><em>mixed</em> <strong>$index</strong>)</strong> : <em>void</em> |
| public | <strong>valid()</strong> : <em>void</em> |

*This class implements \ArrayAccess, \SeekableIterator, \Traversable, \Iterator, \Countable, \JsonSerializable*

<hr />

### Class: \Micro\Ldap\LdapProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>authenticate(</strong><em>mixed</em> <strong>$username=null</strong>, <em>mixed</em> <strong>$password=null</strong>)</strong> : <em>void</em> |
| public | <strong>connect()</strong> : <em>void</em> |
| public | <strong>find(</strong><em>mixed</em> <strong>$options=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>invalidate()</strong> : <em>void</em> |
| public | <strong>login(</strong><em>mixed</em> <strong>$username=null</strong>, <em>mixed</em> <strong>$password=null</strong>)</strong> : <em>void</em> |
| public | <strong>logout()</strong> : <em>void</em> |
| public | <strong>ping()</strong> : <em>void</em> |
| public | <strong>query(</strong><em>mixed</em> <strong>$options=null</strong>)</strong> : <em>void</em> |
| public | <strong>setLoginType(</strong><em>mixed</em> <strong>$type</strong>)</strong> : <em>void</em> |
| public | <strong>test()</strong> : <em>void</em> |
| public | <strong>userdata()</strong> : <em>void</em> |
| protected | <strong>__resolveLoginClass()</strong> : <em>void</em> |
| protected | <strong>_configure()</strong> : <em>void</em> |
| protected | <strong>_configureLogin(</strong><em>mixed</em> <strong>$login</strong>)</strong> : <em>void</em> |
| protected | <strong>_debug(</strong><em>mixed</em> <strong>$message</strong>)</strong> : <em>void</em> |
| protected | <strong>_getDNAttrValues(</strong><em>mixed</em> <strong>$dn</strong>, <em>bool</em> <strong>$attrs=false</strong>, <em>bool</em> <strong>$cache=true</strong>)</strong> : <em>void</em> |
| protected | <strong>_resolveAuthBaseDN()</strong> : <em>void</em> |
| protected | <strong>_resolveAuthClass()</strong> : <em>void</em> |
| protected | <strong>_resolveAuthName(</strong><em>mixed</em> <strong>$user</strong>)</strong> : <em>void</em> |
| protected | <strong>_resolveAuthPass()</strong> : <em>void</em> |
| protected | <strong>_resolveAuthUser()</strong> : <em>void</em> |
| protected | <strong>_resolveBaseDN()</strong> : <em>void</em> |
| protected | <strong>_resolveLoginBaseDN()</strong> : <em>void</em> |
| protected | <strong>_startTLS(</strong><em>mixed</em> <strong>$link</strong>)</strong> : <em>void</em> |
| protected | <strong>_validateLogin(</strong><em>mixed</em> <strong>$login</strong>, <em>mixed</em> <strong>$username=null</strong>, <em>mixed</em> <strong>$password=null</strong>)</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Ldap\Entry

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$data=array()</strong>)</strong> : <em>void</em> |
| public | <strong>__get(</strong><em>mixed</em> <strong>$attr</strong>)</strong> : <em>void</em> |
| public | <strong>get(</strong><em>mixed</em> <strong>$attr</strong>, <em>mixed</em> <strong>$default=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>getRaw(</strong><em>mixed</em> <strong>$attr</strong>, <em>mixed</em> <strong>$default=null</strong>)</strong> : <em>mixed</em> |
| public | <strong>jsonSerialize()</strong> : <em>void</em> |
| public | <strong>key()</strong> : <em>void</em> |
| public | <strong>offsetExists(</strong><em>mixed</em> <strong>$attr</strong>)</strong> : <em>void</em> |
| public | <strong>offsetGet(</strong><em>mixed</em> <strong>$attr</strong>)</strong> : <em>void</em> |
| public | <strong>offsetSet(</strong><em>mixed</em> <strong>$attr</strong>, <em>mixed</em> <strong>$value</strong>)</strong> : <em>void</em> |
| public | <strong>offsetUnset(</strong><em>mixed</em> <strong>$attr</strong>)</strong> : <em>void</em> |
| public | <strong>toArray()</strong> : <em>void</em> |

*This class implements \ArrayAccess, \JsonSerializable*

<hr />

### Class: \Micro\OTP\OTPProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>request()</strong> : <em>void</em> |
| public | <strong>validate()</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Paginator\Adapter\QueryBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConnection()</strong> : <em>mixed</em> |
| public | <strong>getConnectionType()</strong> : <em>mixed</em> |
| public | <strong>getPaginate()</strong> : <em>mixed</em> |

*This class extends \Phalcon\Paginator\Adapter\QueryBuilder*

*This class implements \Phalcon\Paginator\AdapterInterface*

<hr />

### Class: \Micro\Paginator\Adapter\QueryBuilder

| Visibility | Function |
|:-----------|:---------|
| public | <strong>getConnection()</strong> : <em>mixed</em> |
| public | <strong>getConnectionType()</strong> : <em>mixed</em> |
| public | <strong>getPaginate()</strong> : <em>mixed</em> |

*This class extends \Phalcon\Paginator\Adapter\QueryBuilder*

*This class implements \Phalcon\Paginator\AdapterInterface*

<hr />

### Class: \Micro\Role\RoleProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>accesses()</strong> : <em>void</em> |
| public | <strong>can(</strong><em>mixed</em> <strong>$permission</strong>)</strong> : <em>bool</em> |
| public | <strong>has(</strong><em>mixed</em> <strong>$permission</strong>)</strong> : <em>bool</em> |
| public | <strong>id()</strong> : <em>void</em> |
| public | <strong>is(</strong><em>mixed</em> <strong>$name=null</strong>)</strong> : <em>bool</em> |
| public | <strong>menus()</strong> : <em>void</em> |
| public | <strong>model()</strong> : <em>void</em> |
| public | <strong>name()</strong> : <em>void</em> |
| public | <strong>permissions()</strong> : <em>void</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$permission</strong>)</strong> : <em>void</em> |
| protected | <strong>_get(</strong><em>bool</em> <strong>$model=false</strong>)</strong> : <em>void</em> |
| protected | <strong>_run(</strong><em>mixed</em> <strong>$class</strong>, <em>mixed</em> <strong>$method</strong>, <em>mixed</em> <strong>$args</strong>)</strong> : <em>void</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Routing\Router

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>app()</strong> : <em>void</em> |
| public static | <strong>delete(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>get(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>mixed</em> |
| public static | <strong>group(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |
| public static | <strong>map(</strong><em>mixed</em> <strong>$verb</strong>, <em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>options(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>post(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>put(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>resource(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$resource</strong>, <em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Routing\Group

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |
| public | <strong>batch()</strong> : <em>void</em> |
| public | <strong>delete(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>get(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>mixed</em> |
| public | <strong>getApp()</strong> : <em>mixed</em> |
| public | <strong>map(</strong><em>mixed</em> <strong>$verb</strong>, <em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>mount()</strong> : <em>void</em> |
| public | <strong>options(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>post(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>put(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| protected | <strong>_initialize(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Routing\Router

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>app()</strong> : <em>void</em> |
| public static | <strong>delete(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>get(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>mixed</em> |
| public static | <strong>group(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |
| public static | <strong>map(</strong><em>mixed</em> <strong>$verb</strong>, <em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>options(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>post(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>put(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$handler</strong>)</strong> : <em>void</em> |
| public static | <strong>resource(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$resource</strong>, <em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Routing\Group

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |
| public | <strong>batch()</strong> : <em>void</em> |
| public | <strong>delete(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>get(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>mixed</em> |
| public | <strong>getApp()</strong> : <em>mixed</em> |
| public | <strong>map(</strong><em>mixed</em> <strong>$verb</strong>, <em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>mount()</strong> : <em>void</em> |
| public | <strong>options(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>post(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| public | <strong>put(</strong><em>mixed</em> <strong>$path</strong>, <em>mixed</em> <strong>$func</strong>)</strong> : <em>void</em> |
| protected | <strong>_initialize(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Sanitize\SanitizeProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>array_clean_utf8(</strong><em>mixed</em> <strong>$data_arr=null</strong>, <em>\Micro\Sanitize\[type]</em> <strong>$map=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[array_clean_utf8 description]</em> |
| public static | <strong>array_map(</strong><em>\Micro\Sanitize\[type]</em> <strong>$input</strong>, <em>\Micro\Sanitize\[type]</em> <strong>$map</strong>, <em>bool/boolean</em> <strong>$objectify=false</strong>)</strong> : <em>[type] [description]</em><br /><em>[array_map description]</em> |
| public | <strong>array_recursive_utf8(</strong><em>string</em> <strong>$array=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[array_recursive_utf8 description]</em> |
| public | <strong>init_filters()</strong> : <em>[type] [description]</em><br /><em>[init_filters description]</em> |
| public | <strong>sanitizeBatch(</strong><em>mixed</em> <strong>$getJson=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[sanitizeBatch description]</em> |

*This class extends \Phalcon\Filter*

*This class implements \Phalcon\FilterInterface*

<hr />

### Class: \Micro\Sanitize\Filters\Ip

| Visibility | Function |
|:-----------|:---------|
| public | <strong>filter(</strong><em>string</em> <strong>$txt=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filters description]</em> |

<hr />

### Class: \Micro\Sanitize\Filters\Integer

| Visibility | Function |
|:-----------|:---------|
| public | <strong>filter(</strong><em>string</em> <strong>$txt=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filters description]</em> |

<hr />

### Class: \Micro\Sanitize\Filters\StringSanitize

| Visibility | Function |
|:-----------|:---------|
| public | <strong>filter(</strong><em>string</em> <strong>$txt=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filters description]</em> |

<hr />

### Class: \Micro\Sanitize\Filters\SqlInjection

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__replace_char_injection(</strong><em>string</em> <strong>$char=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[__replace_char_injection description]</em> |
| public | <strong>filter(</strong><em>string</em> <strong>$input=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filter description]</em> |
| public | <strong>filter_Char2Num_id(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em> |
| public | <strong>filter_SQL_CompleteEscape(</strong><em>mixed</em> <strong>$input</strong>)</strong> : <em>void</em> |
| public | <strong>filter_SQL_Escaping(</strong><em>string/\Micro\Sanitize\Filters\[type]</em> <strong>$input=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filter_SQL_Escaping description]</em> |
| public | <strong>filter_SQL_InjectionMatch(</strong><em>string</em> <strong>$id=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filter_SQL_InjectionMatch description]</em> |
| public | <strong>is_html(</strong><em>string</em> <strong>$html=`''`</strong>)</strong> : <em>boolean [description]</em><br /><em>[is_html description]</em> |

<hr />

### Class: \Micro\Sanitize\Filters\Utf8

| Visibility | Function |
|:-----------|:---------|
| public | <strong>filter(</strong><em>string</em> <strong>$txt=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filters description]</em> |

<hr />

### Class: \Micro\Sanitize\Filters\Url

| Visibility | Function |
|:-----------|:---------|
| public | <strong>filter(</strong><em>string</em> <strong>$txt=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filters description]</em> |

<hr />

### Class: \Micro\Sanitize\Filters\Email

| Visibility | Function |
|:-----------|:---------|
| public | <strong>filter(</strong><em>string</em> <strong>$txt=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filters description]</em> |

<hr />

### Class: \Micro\Sanitize\Filters\NotBaseDir

| Visibility | Function |
|:-----------|:---------|
| public | <strong>filter(</strong><em>string</em> <strong>$txt=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[filter description]</em> |

<hr />

### Class: \Micro\Socket\SocketProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>__get(</strong><em>mixed</em> <strong>$prop</strong>)</strong> : <em>void</em> |
| public | <strong>broadcast(</strong><em>mixed</em> <strong>$event</strong>, <em>array</em> <strong>$data=array()</strong>)</strong> : <em>void</em> |
| public | <strong>createSocket()</strong> : <em>mixed</em> |
| public | <strong>emit(</strong><em>mixed</em> <strong>$event</strong>, <em>array</em> <strong>$data=array()</strong>)</strong> : <em>void</em> |
| public | <strong>send(</strong><em>mixed</em> <strong>$event</strong>, <em>mixed</em> <strong>$data</strong>)</strong> : <em>void</em> |
| public | <strong>to(</strong><em>mixed</em> <strong>$room</strong>)</strong> : <em>void</em> |

<hr />

### Class: \Micro\Translator\LanguageProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_(</strong><em>mixed</em> <strong>$key</strong>, <em>mixed</em> <strong>$placeholder=null</strong>)</strong> : <em>void</em> |
| public | <strong>__construct()</strong> : <em>void</em> |
| public | <strong>getLanguage()</strong> : <em>mixed</em> |
| public | <strong>getTranslations(</strong><em>mixed</em> <strong>$language=null</strong>)</strong> : <em>mixed</em> |

*This class extends [\Micro\Component](#class-microcomponent-abstract)*

<hr />

### Class: \Micro\Validation\ValidationProvider

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__call(</strong><em>string</em> <strong>$method=`''`</strong>, <em>string</em> <strong>$args=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[__call description]</em> |
| public | <strong>__execClass(</strong><em>string</em> <strong>$DI=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[__execClass description]</em> |
| public | <strong>__get(</strong><em>string</em> <strong>$var=`''`</strong>)</strong> : <em>[type] [description] [__get description]</em> |
| public | <strong>hasError()</strong> : <em>boolean [description]</em><br /><em>[hasError description]</em> |
| public | <strong>init(</strong><em>\Micro\Validation\[type]</em> <strong>$data_arr=null</strong>)</strong> : <em>void</em><br /><em>[Init description]</em> |
| public | <strong>result()</strong> : <em>[type] [description]</em><br /><em>[collect_all description]</em> |
| public static | <strong>value(</strong><em>mixed</em> <strong>$value=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[manual description]</em> |

<hr />

### Class: \Micro\Validation\Settings\Setvar

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>date_delimiter_notfound()</strong> : <em>void</em> |
| public static | <strong>date_delimiter_notsame()</strong> : <em>void</em> |
| public static | <strong>date_is_empty()</strong> : <em>void</em> |
| public static | <strong>date_not_valid()</strong> : <em>void</em> |
| public static | <strong>file_is()</strong> : <em>void</em> |
| public static | <strong>file_type_notfound()</strong> : <em>void</em> |
| public static | <strong>invalid_phone_number()</strong> : <em>void</em> |
| public static | <strong>invalid_url()</strong> : <em>void</em> |
| public static | <strong>mail_is_empty()</strong> : <em>void</em> |
| public static | <strong>maxlength()</strong> : <em>void</em> |
| public static | <strong>minlength()</strong> : <em>void</em> |
| public static | <strong>number_is_empty()</strong> : <em>void</em> |
| public static | <strong>number_is_notnumeric()</strong> : <em>void</em> |
| public static | <strong>preg_consonant()</strong> : <em>void</em> |
| public static | <strong>preg_phonenumber()</strong> : <em>void</em> |
| public static | <strong>preg_url()</strong> : <em>void</em> |
| public static | <strong>preg_vowel()</strong> : <em>[type] [description]</em> |
| public static | <strong>sanitize_email()</strong> : <em>void</em> |
| public static | <strong>setmaxlength()</strong> : <em>void</em> |
| public static | <strong>setminlength()</strong> : <em>void</em> |
| public static | <strong>url_is_empty()</strong> : <em>void</em> |
| public static | <strong>validate_email()</strong> : <em>void</em> |

<hr />

### Class: \Micro\Validation\Settings\Mime

| Visibility | Function |
|:-----------|:---------|
| public static | <strong>type(</strong><em>\Micro\Validation\Settings\[type]</em> <strong>$mime=null</strong>, <em>mixed</em> <strong>$ext=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[mime description]</em> |

<hr />

### Class: \Micro\Validation\Validator\Ip

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_Ip(</strong><em>mixed</em> <strong>$prop=null</strong>, <em>mixed</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |

<hr />

### Class: \Micro\Validation\Validator\Password

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_Password(</strong><em>string</em> <strong>$prop=null</strong>, <em>string</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[Number description]</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>default_validator()</strong> : <em>[type] [description]</em><br /><em>[phonenumber description]</em> |
| public | <strong>fetch()</strong> : <em>[type] [description]</em><br /><em>[fetch description]</em> |
| public | <strong>mandatory(</strong><em>bool</em> <strong>$status=false</strong>)</strong> : <em>[type] [description]</em><br /><em>[mandatory description]</em> |
| public | <strong>maxlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$maxlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[maxlength description]</em> |
| public | <strong>minlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$minlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[minlength description]</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$objectvalidator=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[validate description]</em> |

<hr />

### Class: \Micro\Validation\Validator\URL

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_URL(</strong><em>mixed</em> <strong>$prop=null</strong>, <em>mixed</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>mandatory(</strong><em>bool</em> <strong>$status=false</strong>)</strong> : <em>[type] [description]</em><br /><em>[require description]</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$objectvalidator=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[valid_url description]</em> |

<hr />

### Class: \Micro\Validation\Validator\Text

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_Text(</strong><em>string</em> <strong>$prop=null</strong>, <em>string</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[Text description]</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>fetch()</strong> : <em>[type] [description]</em><br /><em>[fetch description]</em> |
| public | <strong>mandatory(</strong><em>bool</em> <strong>$status=false</strong>)</strong> : <em>[type] [description]</em><br /><em>[require description]</em> |
| public | <strong>maxlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$maxlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[maxlength description]</em> |
| public | <strong>minlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$minlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[minlength description]</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$objectvalidator=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[valid_string description]</em> |

<hr />

### Class: \Micro\Validation\Validator\IdentityNumber

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_IdentityNumber(</strong><em>mixed</em> <strong>$prop=null</strong>, <em>mixed</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |

<hr />

### Class: \Micro\Validation\Validator\VirusScanner

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_VirusScanner(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_four=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[VirusScanner description]</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_four=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public static | <strong>__getViruses(</strong><em>mixed</em> <strong>$text=null</strong>, <em>string</em> <strong>$filepath=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[parseInfo description]</em> |
| public | <strong>scan()</strong> : <em>[type] [description]</em><br /><em>[scan description]</em> |

<hr />

### Class: \Micro\Validation\Validator\Email

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_Email(</strong><em>string</em> <strong>$prop=null</strong>, <em>string</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[Email description]</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>mandatory(</strong><em>bool</em> <strong>$status=false</strong>)</strong> : <em>[type] [description]</em><br /><em>[mandatory description]</em> |
| public | <strong>maxlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$maxlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[maxlength description]</em> |
| public | <strong>minlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$minlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[minlength description]</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$objectvalidator=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[valid_email description]</em> |

<hr />

### Class: \Micro\Validation\Validator\Entities

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_Entities(</strong><em>mixed</em> <strong>$prop=null</strong>, <em>mixed</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>mandatory()</strong> : <em>void</em> |
| public | <strong>replacer()</strong> : <em>[type] [description]</em><br /><em>[replacer description]</em> |
| public | <strong>validate()</strong> : <em>void</em> |

<hr />

### Class: \Micro\Validation\Validator\Number

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_Number(</strong><em>string</em> <strong>$prop=null</strong>, <em>string</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[Number description]</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>fetch()</strong> : <em>[type] [description]</em><br /><em>[fetch description]</em> |
| public | <strong>mandatory(</strong><em>bool</em> <strong>$status=false</strong>)</strong> : <em>[type] [description]</em><br /><em>[mandatory description]</em> |
| public | <strong>maxlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$maxlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[maxlength description]</em> |
| public | <strong>minlen(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$minlength=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[minlength description]</em> |
| public | <strong>phonenumber_validator()</strong> : <em>[type] [description]</em><br /><em>[phonenumber description]</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$objectvalidator=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[validate description]</em> |

<hr />

### Class: \Micro\Validation\Validator\Date

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_Date(</strong><em>string</em> <strong>$prop=null</strong>, <em>mixed</em> <strong>$key_prop=null</strong>, <em>mixed</em> <strong>$param_two=null</strong>, <em>mixed</em> <strong>$param_three=null</strong>, <em>mixed</em> <strong>$param_four=null</strong>, <em>mixed</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[Age description]</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>age()</strong> : <em>[type] [description]</em><br /><em>[birthday description]</em> |
| public | <strong>delimiter(</strong><em>string</em> <strong>$delimiter=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[delimiter description]</em> |
| public | <strong>fetch()</strong> : <em>[type] [description]</em><br /><em>[fetch description]</em> |
| public | <strong>format(</strong><em>string</em> <strong>$formatdate=`''`</strong>)</strong> : <em>[type] [description]</em><br /><em>[format description]</em> |
| public | <strong>mandatory(</strong><em>bool</em> <strong>$status=false</strong>)</strong> : <em>[type] [description]</em><br /><em>[mandatory description]</em> |
| public | <strong>range()</strong> : <em>[type] [description]</em><br /><em>[range description]</em> |
| public | <strong>validate(</strong><em>mixed</em> <strong>$objectvalidator=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[valid_date description]</em> |

<hr />

### Class: \Micro\Validation\Validator\File

| Visibility | Function |
|:-----------|:---------|
| public | <strong>_File(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_four=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_five=null</strong>)</strong> : <em>void</em><br /><em>[File description]</em> |
| public | <strong>__construct(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$key_prop=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_two=null</strong>, <em>\Micro\Validation\Validator\[type]</em> <strong>$param_three=null</strong>)</strong> : <em>void</em><br /><em>[__construct description]</em> |
| public | <strong>format(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$mime=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[format description]</em> |
| public | <strong>maxsize(</strong><em>\Micro\Validation\Validator\[type]</em> <strong>$size=null</strong>)</strong> : <em>[type] [description]</em><br /><em>[maxsize description]</em> |
| public | <strong>validate()</strong> : <em>[type] [description]</em><br /><em>[validate description]</em> |

