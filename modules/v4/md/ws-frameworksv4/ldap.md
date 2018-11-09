# LDAP
## Table of contents

- [\Micro\Ldap\Resultset](#class-microldapresultset)
- [\Micro\Ldap\LdapProvider](#class-microldapldapprovider)
- [\Micro\Ldap\Entry](#class-microldapentry)

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

*This class extends \Micro\Component*

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




## How to use ? 
