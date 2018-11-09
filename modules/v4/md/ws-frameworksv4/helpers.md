# Helpers

## Table of contents

- [\Micro\Helpers\UTF8](#class-microhelpersutf8)
- [\Micro\Helpers\Text](#class-microhelperstext)
- [\Micro\Helpers\Activitylog](#class-microhelpersactivitylog)
- [\Micro\Helpers\Theme](#class-microhelperstheme)
- [\Micro\Helpers\Maps](#class-microhelpersmaps)
- [\Micro\Helpers\Markdown](#class-microhelpersmarkdown)
- [\Micro\Helpers\Date](#class-microhelpersdate)
- [\Micro\Helpers\Encoding](#class-microhelpersencoding)
- [\Micro\Helpers\Coordinate](#class-microhelperscoordinate)

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

*This class extends \Micro\Component*

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




## How to use ? 
