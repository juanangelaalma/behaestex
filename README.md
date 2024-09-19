# Backend API for CV

## How to Run
### 1. Clone this repo:
```bash
git clone https://github.com/juanangelaalma/behaestex.git
```
### 2. Change dir to behaestex:
```
cd behaestex
```
### 3. Install packages
```bash
composer install
```
### 4. Run server
```bash
make s
```
### 5. Run migration
```bash
make migrate
```

server will be running on http://localhost

# API Documentation

## Get CV

endpoint: GET /api/cv

### Response

code: 200

#### body:

```json
{
    "data": {
        "avatar": "https://avatar...",
        "name": "Juan Angela Alma",
        "email": "juanangelaalma@gmail.com",
        "phone": "83121940403",
        "summary": "I am a highly skilled web developer with over 2 years of coding experience. Renowned for my unwavering dedication and exceptional ability to meet tight deadlines, I consistently deliver outstanding results. I thrive in demanding environments and possess a track record of effective leadership and proficient project management skills.",
        "workExperiences": [
            {
                "id": 1,
                "from": "08-2023",
                "to": "12-2023",
                "position": "Web Developer(Internship)",
                "company": "PT Vidio Dot Com",
                "description": "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium repudiandae porro provident ea officiis incidunt delectus? Eos, quia nostrum magnam nulla suscipit reprehenderit commodi sed quidem hic aspernatur voluptatum quasi!"
            }
        ],
        "educations": [
            {
                "id": 1,
                "school": "Universitas Negeri Surabaya",
                "attainment": 4,
                "from": "08-2023",
                "to": "12-2023",
                "description": "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium repudiandae porro provident ea officiis incidunt delectus? Eos, quia nostrum magnam nulla suscipit reprehenderit commodi sed quidem hic aspernatur voluptatum quasi!"
            }
        ],
        "skills": [
            {
                "id": "1",
                "skill": "MYSQL Database",
                "level": "Expert"
            }
        ]
    }
}
```

## POST Basic Information

endpoint: POST /api/cv/basic-information

### Request:
#### headers:
Content-Type: multipart/form-data

#### body:

```json
{
    "name": "Budi Setiawan",
    "address": "Konoha",
    "email": "juanalma@gmail.com",
    "phone": "08332032",
    "avatar": "FormData(image)" // optional
}
```

### Response:

code: 201

```json
{
    "data": {
        "id": 1,
        "name": "Budi Setiawan",
        "address": "Konoha",
        "email": "juanalma@gmail.com",
        "phone": "08332032",
        "avatar": "/uploads/avatar.jpg" // optional
    },
    "message": "Update data success",
    "errors": null
}
```

code: 400

```json
{
    "data": null,
    "message": null,
    "errors": {
        "name": ["Name is required"],
        "email": ["Must be an email"]
    }
}
```

## PUT Summary

endpoint: PUT /api/cv/summary

### Request:

#### body:

```json
{
    "summary": "lorem ipsum...."
}
```

### Response:

code: 201

```json
{
    "data": {
        "summary": "lorem ipsum..."
    },
    "message": "Update summary success",
    "errors": null
}
```


## POST Work Experiences

endpoint: POST /api/cv/work-experiences

### Request

body:

```json
{
    "title": "Web Developer",
    "company": "Vidio",
    "from": "08/2024",
    "to": "10/2024",
    "description": "lorem ipsum..." // optional
}
```

### Response:

code: 201

```json
{
    "data": {
        "id": 1,
        "title": "Web Developer",
        "company": "Vidio",
        "from": "08-2024",
        "to": "10-2024",
        "description": "lorem ipsum..." // optional
    },
    "message": "Create data success",
    "errors": null
}
```

code 400

```json
{
    "data": null,
    "message": null,
    "errors": {
        "title": ["Title is required"]
    }
}
```

## PUT Work Experiences

endpoint: PUT /api/cv/work-experiences/:id

### Request

body:

```json
{
    "title": "Web Developer",
    "company": "Vidio",
    "from": "08-2024",
    "to": "10-2024",
    "description": "lorem ipsum..." // optional
}
```

code: 201

```json
{
    "data": {
        "id": 1,
        "title": "Web Developer",
        "company": "Vidio",
        "from": "08-2024",
        "to": "10-2024",
        "description": "lorem ipsum..." // optional
    },
    "message": "Update data success",
    "errors": null
}
```

## DELETE Work Experiences

endpoint: DELETE /api/cv/work-experiences/:id

### Request

code: 200

```json
{
    "data": true,
    "message": "Delete data success",
    "errors": null
}
```

## POST Education

endpoint: POST /api/cv/educations

### Request

body:

```json
{
    "attainment": 0,
    "school": "Uiversitas Negeri Surabaya",
    "from": "08/2024",
    "to": "10/2024",
    "description": "lorem...." // optional
}
```

### Response:

code: 201

```json
{
    "data": {
        "id": 1,
        "attainment": 0,
        "school": "Uiversitas Negeri Surabaya",
        "from": "08/2024",
        "to": "10/2024",
        "description": "lorem...." // optional
    },
    "message": "Create data success",
    "errors": null
}
```

code 400

```json
{
    "data": null,
    "message": null,
    "errors": {
        "school": ["Title is required"]
    }
}
```

## PUT Education

endpoint: PUT /api/cv/educations/:id

### Request

body:

```json
{
    "attainment": 0,
    "school": "Uiversitas Negeri Surabaya",
    "from": "08/2024",
    "to": "10/2024",
    "description": "lorem...." // optional
}
```

code: 201

```json
{
    "data": {
        "id": 1,
        "attainment": 0,
        "school": "Uiversitas Negeri Surabaya",
        "from": "08/2024",
        "to": "10/2024",
        "description": "lorem...."
    },
    "message": "Update data success",
    "errors": null
}
```

## DELETE Education

endpoint: DELETE /api/cv/educations/:id

### Request

code: 200

```json
{
    "data": true,
    "message": "Delete data success",
    "errors": null
}
```

## PUT Skill

endpoint: PUT /api/cv/skills

### Request

body:

```json
{
    "skills": [
        {
            "skill": "MYSQL",
            "level": "basic"
        },
        {
            "skill": "MYSQL",
            "level": "basic"
        }
    ]
}
```

code: 201

```json
{
    "data": [
        {
            "id": 1,
            "skill": "MYSQL",
            "level": "basic"
        },
        {
            "id": 2,
            "skill": "JavaScript",
            "level": "basic"
        }
    ],
    "message": "Updated data success",
    "errors": null
}
```
