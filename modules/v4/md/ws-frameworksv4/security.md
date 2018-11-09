# Security



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




## How to use ? 
