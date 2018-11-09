# Validation

## Table of contents

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




## How to use ? 
