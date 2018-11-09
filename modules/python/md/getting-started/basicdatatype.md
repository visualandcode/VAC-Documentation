# Basic Data Type di Python

## Integers
> Dalam Python 3, tidak ada batasan dalam nilai integers . 
> 
> Contoh : 

```python
>>> print(123123123123123123123123123123123123123123123123 + 1)
123123123123123123123123123123123123123123123124

```
> Python menginterpretasikan urutan angka desimal tanpa awalan menjadi angka desimal:

```python
>>> print(10)
10
```
> Jenis yang mendasari dari integer Python, terlepas dari basis yang digunakan untuk menentukannya, disebut int:

```python
>>> type(10)
<class 'int'>
>>> type(0o10)
<class 'int'>
>>> type(0x10)
<class 'int'>
```



## Floating-Point Numbers
> Jenis float di Python menunjuk angka floating-point. nilai float ditentukan dengan titik desimal. Opsional, karakter e atau E diikuti oleh bilangan bulat positif atau negatif dapat ditambahkan untuk menentukan notasi ilmiah:
> 

```python
>>> 4.2
4.2
>>> type(4.2)
<class 'float'>
>>> 4.
4.0
>>> .2
0.2

>>> .4e7
4000000.0
>>> type(.4e7)
<class 'float'>
>>> 4.2e-4
0.00042
```

## Complex Numbers
> Bilangan kompleks . Sebagai contoh:
> 

```python
>>> 2+3j
(2+3j)
>>> type(2+3j)
<class 'complex'>
```

## Strings
> String adalah urutan data karakter. Jenis string dalam Python disebut str.
> Literal string dapat dibatasi menggunakan tanda kutip tunggal atau ganda. Semua karakter antara pembuka pembatas dan pencocokan pembatas > > penutup adalah bagian dari string:

```python
>>> print("I am a string.")
I am a string.
>>> type("I am a string.")
<class 'str'>

>>> print('I am too.')
I am too.
>>> type('I am too.')
<class 'str'>
```
> String dengan Python dapat berisi sebanyak karakter yang Anda inginkan. Satu-satunya batas adalah sumber daya memori mesin Anda. String juga bisa kosong:
> 

```python
>>> ''
''
```
> Python tidak bisa menambahkan Kutip jika kutip sama dengan penutup
>

```python
>>> print('This string contains a single quote (') character.')
SyntaxError: invalid syntax
```
> Yang benar menggunakan kutip didalam kutip . Contoh : 

```python
>>> print("This string contains a single quote (') character.")
This string contains a single quote (') character.

>>> print('This string contains a double quote (") character.')
This string contains a double quote (") character.
```
```python
>>> print('This string contains a single quote (\') character.')
This string contains a single quote (') character.
```
```python
>>> print("This string contains a double quote (\") character.")
This string contains a double quote (") character.
```

> Menambah Enter didalam String
> 
> Kesalahan menggunakan enter dalam string : 

```python
>>> print('a

SyntaxError: EOL while scanning string literal
```

> Yang benar dalam menggunakan enter dalam string : 
>

```python
>>> print('a\
... b\
... c')
abc
```

## Boolean Type dan Boolean Context
>Python 3 menyediakan tipe data Boolean. Objek tipe Boolean mungkin memiliki satu dari dua nilai, True atau False:
>

```python
>>> type(True)
<class 'bool'>
>>> type(False)
<class 'bool'>
```

## Built-In Functions
> Bisa dibaca  [disiini](https://docs.python.org/3.6/library/functions.html) lebih lengkap 



