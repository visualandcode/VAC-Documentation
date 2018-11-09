# Auth

## Table of contents

- [\Micro\Auth\AuthProvider](#class-microauthauthprovider)
- [\Micro\Auth\AuthProvider](#class-microauthauthprovider)
- [\Micro\Auth\AuthMiddleware](#class-microauthauthmiddleware)

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

*This class extends \Micro\Component*

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

*This class extends \Micro\Component*

<hr />

### Class: \Micro\Auth\AuthMiddleware

| Visibility | Function |
|:-----------|:---------|
| public | <strong>authenticate()</strong> : <em>void</em> |

*This class extends \Micro\Component*




## How to use ? 
