## Getting Started

After cloning or pulling this repository, follow these steps to set up the project:

1. **Install dependencies:**
   ```
   composer install
   ```

2. **Copy the example environment file and configure it:**
   ```
   cp .env.example .env
   ```
   Edit `.env` to set your database credentials and other environment variables. Ask Budi for the .env DB configuration.

3. **Generate the application key:**
   ```
   php artisan key:generate
   ```

4. **(If using JWT) Generate the JWT secret:**
   ```
   php artisan jwt:secret
   ```

5. **Run database migrations and seeders:**
   ```
   php artisan migrate:fresh --seed
   ```

6. **Serve the application:**
   ```
   php artisan serve
   ```

Now your API should be running at `http://127.0.0.1:8000`.

---



## API Documentation

### Authentication

#### Login
**POST** `/api/login`

**Request Body:**
```json
{
  "StudentId": "2602078146",
  "StudentPassword": "passwordmahasiswa"
}
```

**Response:**
```json
{
  "access_token": "your_jwt_token",
  "token_type": "bearer",
  "expires_in": 3600
}
```

---

### Sessions

#### Update Session
**PUT** `/api/sessions/{id}`

**Request Body:**
```json
{
  "SessionDate": "2025-08-01",
  "Shift": 2,
  "RoomId": "0311"
}
```

**Response:**
```json
{
  "message": "Session updated successfully",
  "session": {
    "SessionId": 1,
    "ClassId": 1,
    "SessionDate": "2025-08-01",
    "RoomId": "0311",
    "SessionNumber": 1,
    "Shift": 2,
    "created_at": "...",
    "updated_at": "..."
  }
}
```

#### Get Sessions by Class
**GET** `/api/sessions/class/{classId}`

**Response:**
```json
{
  "sessions": [
    {
      "SessionId": 1,
      "ClassId": 1,
      "SessionDate": "2025-08-01",
      "RoomId": "0311",
      "SessionNumber": 1,
      "Shift": 2,
      "presences": [
        {
          "PresenceId": 1,
          "SessionId": 1,
          "StudentId": "2602078146",
          "IsInCorrectLocation": 1,
          "IsCorrectFace": 1,
          "IsVerified": 1,
          "created_at": "...",
          "updated_at": "..."
        }
      ]
    }
  ]
}
```

---

### Presence

#### Update Location
**PUT** `/api/presence/{id}/location`

**Request Body:**
```json
{
  "IsInCorrectLocation": 1
}
```

**Response:**
```json
{
  "message": "Verified updated",
  "presence": {
    "PresenceId": 1,
    "SessionId": 1,
    "StudentId": "2602078146",
    "IsInCorrectLocation": 1,
    "IsCorrectFace": 1,
    "IsVerified": 1,
    "created_at": "...",
    "updated_at": "..."
  }
}
```

#### Update Face
**PUT** `/api/presence/{id}/face`

**Request Body:**
```json
{
  "IsCorrectFace": 0
}
```

**Response:**  
_Same as above, with updated `IsCorrectFace` value._

#### Update Verified
**PUT** `/api/presence/{id}/verified`

**Request Body:**
```json
{
  "IsVerified": 1
}
```

**Response:**  
_Same as above, with updated `IsVerified` value._

---

### Classes

#### Get Enrolled Classes
**GET** `/api/my-classes`

**Response:**
```json
{
  "classes": [
    {
      "ClassId": 1,
      "LecturerId": "DW211",
      "CourseId": "COMP6360004",
      "ClassCode": "BC20",
      "LecturerRoleId": 2,
      "ClassYear": 2022,
      "Semester": 1,
      "NumberOfSession": 13,
      "CourseCategory": "LAB",
      "created_at": "...",
      "updated_at": "..."
    }
    // ... more classes
  ]
}
```

---

### Courses

#### Get Sessions and Presence by Course
**GET** `/api/courses/{courseId}/sessions`

**Response:**
```json
{
  "sessions": [
    {
      "SessionId": 1,
      "ClassId": 1,
      "SessionDate": "2025-08-01",
      "RoomId": "0311",
      "SessionNumber": 1,
      "Shift": 2,
      "presences": [
        {
          "PresenceId": 1,
          "SessionId": 1,
          "StudentId": "2602078146",
          "IsInCorrectLocation": 1,
          "IsCorrectFace": 1,
          "IsVerified": 1,
          "created_at": "...",
          "updated_at": "..."
        }
      ]
    }
    // ... more sessions
  ]
}
```