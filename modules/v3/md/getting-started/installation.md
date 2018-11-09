# Instalasi 

## Cloning 

> Login di [GitHub KCT](https://git.kct.co.id/) Lalu ke [ws-frameworks](https://git.kct.co.id/vidi/ws-frameworks) 
> clone repository ws-frameworks ke local anda 


## Add setting v-host httpd/apache2
```
<virtualhost *:80>
        ServerAdmin admin@lokal
        ServerName your_servername
	    ServerAlias your_servername
        UseCanonicalName Off
        VirtualDocumentRoot "/path/to"
        <Directory "/path/to">
                Options Indexes FollowSymLinks
                AllowOverride All
                Order allow,deny
                Allow from all
		Require all granted
        </Directory>
	
	ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined

</virtualhost>
```

## Buat Aplikasi
> Masuk ke directory api/v2/app/ lalu buat nama aplikasi anda dan isi dengan struktur folder [Seperti ini](/md/getting-started/structurdirectory)

## URL Aliasing / .htaccess
> Buat file .htaccess di folder public/.htaccess dengan code dibawah ini 
```
AddDefaultCharset UTF-8
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.*)$ index.php?_url=/$1 [QSA,L]
</IfModule>
```

> Buat file .htaccess juga di root folder aplikasi dengan code dibawah ini 
```
<IfModule mod_rewrite.c>
    RewriteEngine on
    #RewriteBase /api/v2/app/demo/
    RewriteRule ^$ public/ [L]
    RewriteRule (.*) public/$1 [L]
</IfModule>
```


## Starter Aplikasi
> Setelah selesai membuat folder,buka file di public/index.php dan isi dengan code dibawah ini


```php 
try {       

    define('APPPATH', dirname(__DIR__).'/');
    define('PUBPATH', dirname(__DIR__).'/public/');
    define('SYSPATH', dirname(dirname(APPPATH)).'/micro/');

    require_once SYSPATH . 'App.php';

    $name = basename(
        substr(
            $_SERVER['SCRIPT_NAME'], 
            0, 
            strpos(
                $_SERVER['SCRIPT_NAME'], 
                '/public/'.basename($_SERVER['SCRIPT_FILENAME'])
            )
        )
    );

    $app = new \Micro\App($name);
    $app->run();

} catch(\Phalcon\Exception $e) {

    header('Content-Type: application/json');

    $response = array(
        'success' => FALSE,
        'status' => $e->getCode(),
        'message' => $e->getMessage()
    );

    print(json_encode($response, JSON_PRETTY_PRINT));


} catch(PDOException $e) {

    header('Content-Type: application/json');

    $response = array(
        'success' => FALSE,
        'status' => $e->getCode(),
        'message' => $e->getMessage()
    );
    
    print(json_encode($response, JSON_PRETTY_PRINT));
}
```



