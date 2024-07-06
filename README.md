# Backend API for CV

## Get CV

endpoint: /api/cv

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
        "work_experiences": [
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

## PATCH Basic Information

endpoint: /api/cv/basic-information

### Request:

#### body:

```json
{
    "name": "Budi Setiawan", // optional
    "address": "Konoha", // optional
    "email": "juanalma@gmail.com", // optional
    "phone": "08332032", // optional
    "summary": "lorem ipsum color dimmet sit amet...." // optional
}
```

### Response:

code: 201

```json
{
    "data": null,
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
        "email": ["Must be an email"]
    }
}
```

## POST Work Experiences

endpoint: /api/cv/work-experiences

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
        "from": "08/2024",
        "to": "10/2024",
        "description": "lorem ipsum..." // optional
    },
    "message": "Successfully added work experience",
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

## PATCH Work Experiences

endpoint: /api/cv/work-experiences/:id

### Request

body:

```json
{
    "title": "Web Developer", // optional
    "company": "Vidio", // optional
    "from": "08/2024", // optional
    "to": "10/2024", // optional
    "description": "lorem ipsum..." // optional
}
```

code: 201

```json
{
    "data": null,
    "message": "Successfully updated work experience",
    "errors": null
}
```

## DELETE Work Experiences

endpoint: /api/cv/work-experiences/:id

### Request

code: 200

```json
{
    "data": null,
    "message": "Successfully delete work experience",
    "errors": null
}
```

## POST Education

endpoint: /api/cv/educations

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
    "message": "Successfully added education",
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

## PATCH Education

endpoint: /api/cv/educations/:id

### Request

body:

```json
{
    "attainment": 0, // optional
    "school": "Uiversitas Negeri Surabaya", // optional
    "from": "08/2024", // optional
    "to": "10/2024", // optional
    "description": "lorem...." // optional
}
```

code: 201

```json
{
    "data": null,
    "message": "Successfully updated education",
    "errors": null
}
```

## DELETE Education

endpoint: /api/cv/educations/:id

### Request

code: 200

```json
{
    "data": null,
    "message": "Successfully deleted education",
    "errors": null
}
```

## POST Skill

endpoint: /api/cv/skills

### Request

body:

```json
{
    "skill": "MYSQL",
    "level": "basic"
}
```

### Response:

code: 201

```json
{
    "data": {
        "id": 1,
        "skill": "MYSQL",
        "level": "basic"
    },
    "message": "Successfully added skill",
    "errors": null
}
```

code 400

```json
{
    "data": null,
    "message": null,
    "errors": {
        "school": ["Skill is required"]
    }
}
```

## PUT Skill

endpoint: /api/cv/skills

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
    "data": null,
    "message": "Successfully updated education",
    "errors": null
}
```