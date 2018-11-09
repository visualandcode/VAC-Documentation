# DXMapping

## Table of contents

- [\Micro\Dx\DxAuth](#class-microdxdxauth)
- [\Micro\Dx\DxResult](#class-microdxdxresult)
- [\Micro\Dx\DxEvent](#class-microdxdxevent)
- [\Micro\Dx\DxProvider](#class-microdxdxprovider)
- [\Micro\Dx\DxMappingProvider](#class-microdxdxmappingprovider)
- [\Micro\Dx\DxProfile](#class-microdxdxprofile)

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

*This class extends \Micro\Component*

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

*This class extends \Micro\Component*

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




## How to use ? 
