# API REST BOOK
### Overview
Book's Api Rest for applications that can use this format of books as a product

## Instalation

composer run install-book-rest


## Routes

#### Books Routes

List Books

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| GET | ```http://localhost:8000/api/book`` | none |
####
| Response | 200 |
| ------ | ---- |

```json
{
    "data": [
    {
        "id": 1,
        "name": "Lord of Rings",
        "description": "This book is a big book",
        "category": {
            "id": 2,
            "name": "Jaunita Rempel",
        }
    },
    ...
    ]
}
```
------------
###

Find Book

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| GET | ```http://localhost:8000/api/book/1`` | none |
####
| Response | 200 |
| ------ | ---- |

```json
{
    "data": {
        "id": 1,
        "name": "Lord of Rings",
        "description": "This book is a big book",
        "category": {
            "id": 2,
            "name": "Jaunita Rempel",
        }
    }
}
```
------------
###

Store Book

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| POST | ```http://localhost:8000/api/book`` | Form |
####

Body Request
| Form Field | Value|
|  --------  |  -------  |
| ```name``` | ```No country for old man ....``` |
| ```description``` | ```The cherif ...``` |
| ```catetory_id``` | ```1``` |

####
| Response | 201 |
| ------ | ---- |

```json
{
    "data": {
        "id": 1,
        "name": "Lord of Rings",
        "description": "This book is a big book",
        "category": {
            "id": 2,
            "name": "Jaunita Rempel",
        }
    }
}
```
------------
###

Update Book

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| PUT, PATCH | ```http://localhost:8000/api/book/2`` | Form |
####

Body Request
| Form Field | Value|
|  --------  |  -------  |
| ```name``` | ```No country for old man ....``` |
| ```description``` | ```The cherif ...``` |
| ```catetory_id``` | ```1``` |

####
| Response | 201 |
| ------ | ---- |

```json
{
    "data": {
        "id": 1,
        "name": "Lord of Rings",
        "description": "This book is a big book",
        "category": {
            "id": 2,
            "name": "Jaunita Rempel",
        }
    }
}
```
------------
###

Delete Book

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| DELETE | ```http://localhost:8000/api/book/1`` | none |
####
| Response | 200 |
| ------ | ---- |

```json
{
    "data":{
        "id": 1,
        "name": "Lord of Rings",
        "description": "This book is a big book",
        "category": {
            "id": 2,
            "name": "Jaunita Rempel",
        }
    }
}
```
-----------

#### Categories Routes

List Categories

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| GET | ```http://localhost:8000/api/category`` | none |
####
| Response | 200 |
| ------ | ---- |

```json
{
    "data": [
        {
            "id": 2,
            "name": "Jaunita Rempel",
            "books":[]
        }
    ]
}
```
------------
###

Find Category

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| GET | ```http://localhost:8000/api/category/1`` | none |
####
| Response | 200 |
| ------ | ---- |

```json
{
    "data": {
        "id": 2,
        "name": "Jaunita Rempel",
        "books": []
    }
}
```
------------
###

Store Category

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| POST | ```http://localhost:8000/api/category`` | Form |
####

Body Request
| Form Field | Value|
|  --------  |  -------  |
| ```name``` | ```Romance``` |


####
| Response | 201 |
| ------ | ---- |

```json
{
"data": {
        "id": 2,
        "name": "Romance",
        "books": []
    }
}

```
------------
###

Update Category

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| PUT, PATCH | ```http://localhost:8000/api/category/3`` | Form |
####

Body Request
| Form Field | Value|
|  --------  |  -------  |
| ```name``` | ```Science fiction``` |


####
| Response | 201 |
| ------ | ---- |

```json
{
    "data": {
        "id": 2,
        "name": "Science fiction",
        "books": []
    }
}
```
------------
###

Delete Category

| Method | Uri | Body |
|  --------  |  -------  |  ------- |
| DELETE | ```http://localhost:8000/api/category/2`` | none |
####
| Response | 200 |
| ------ | ---- |

```json
{
    "data": {
        "id": 2,
        "name": "Science fiction",
        "books": []
    }
}
```
-----------

### Dependencies

Laravel 11.x
PHP 8.3.x
sqlite3
