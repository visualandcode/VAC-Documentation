# Variable di Python

## Table of contents

- [Variable Assignment](#variable-assignment)
- [Variable Types in Python](#variable-types-in-python)
- [Variable Names](#variable-names)
- [Reserved Words (Keywords)](#reserved-words-keywords)
- [Conclusion](#conclusion)

<hr />

## Variable Assignment 
```python
>>> a = b = c = 300
>>> print(a, b, c)
300 300 300
```

## Variable Types in Python
> Variable Type didalam python hampir sama dengan PHP , yaitu tanpa ada penyebutan tipe Variable 
> 
> Contoh : 
```python
>>> var = 23.5
>>> print(var)
23.5

>>> var = "Now I'm a string"
>>> print(var)
Now I'm a string
```

## Variable Names
> Variable didalm Python juga sama dengan PHP tyaitu tidak boleh di mulai dengan Simbol atau Number
> Contoh, berikut adalah nama variabel yang valid:
> 

```python
>>> name = "Bob"
>>> Age = 54
>>> has_W2 = True
>>> print(name, Age, has_W2)
Bob 54 True
```

```python
>>> age = 1
>>> Age = 2
>>> aGe = 3
>>> AGE = 4
>>> a_g_e = 5
>>> _age = 6
>>> age_ = 7
>>> _AGE_ = 8

>>> print(age, Age, aGe, AGE, a_g_e, _age, age_, _AGE_)
1 2 3 4 5 6 7 8
```

```python
>>> numberofcollegegraduates = 2500
>>> NUMBEROFCOLLEGEGRADUATES = 2500
>>> numberOfCollegeGraduates = 2500
>>> NumberOfCollegeGraduates = 2500
>>> number_of_college_graduates = 2500

>>> print(numberofcollegegraduates, NUMBEROFCOLLEGEGRADUATES,
... numberOfCollegeGraduates, NumberOfCollegeGraduates,
... number_of_college_graduates)
2500 2500 2500 2500 2500
```

## Reserved Words (Keywords)
> Tidak boleh menamakan variable sama dengan di bawah ini : 
> 

| PythonKeywords |         |          |        |
|----------------|---------|----------|--------|
| False          | def     | if       | raise  |
| None           | del     | import   | return |
| True           | elif    | in       | try    |
| and            | else    | is       | while  |
| as             | except  | lambda   | with   |
| assert         | finally | nonlocal | yield  |
| break          | for     | not      |        |
| class          | from    | or       |        |
| continue       | global  | pass     |        |
| True           | elif    | in       | try    |


> Contoh : 

```python
>>> for = 3
SyntaxError: invalid syntax
```













