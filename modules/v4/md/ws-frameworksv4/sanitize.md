# Sanitize

## Table of contents

- [\Micro\Sanitize\SanitizeProvider](#class-microsanitizesanitizeprovider)
- [\Micro\Sanitize\Filters\Ip](#class-microsanitizefiltersip)
- [\Micro\Sanitize\Filters\Integer](#class-microsanitizefiltersinteger)
- [\Micro\Sanitize\Filters\StringSanitize](#class-microsanitizefiltersstringsanitize)
- [\Micro\Sanitize\Filters\SqlInjection](#class-microsanitizefilterssqlinjection)
- [\Micro\Sanitize\Filters\Utf8](#class-microsanitizefiltersutf8)
- [\Micro\Sanitize\Filters\Url](#class-microsanitizefiltersurl)
- [\Micro\Sanitize\Filters\Email](#class-microsanitizefiltersemail)
- [\Micro\Sanitize\Filters\NotBaseDir](#class-microsanitizefiltersnotbasedir)

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




## How to use ? 
