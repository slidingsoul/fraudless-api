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

## Postman Collection

A Postman collection is included in this repository (`FraudlessAPI.postman_collection.json`). To use it:

1. **Import the Collection:**
   - Open Postman
   - Click "Import"
   - Select the `FraudlessAPI.postman_collection.json` file

2. **Set up Environment Variables:**
   The collection uses the following variables:
   - `baseURL`: Default is `http://127.0.0.1:8000`
   - `sessionId`: ID of the session to update
   - `sessionDate`: Date for session update
   - `shift`: Shift number (1-6)
   - `roomId`: Room ID (e.g., "0213")
   - `id`: Presence ID for updates
   - `isInCorrectLocation`: Boolean (0 or 1)
   - `isInCorrectFace`: Boolean (0 or 1)
   - `isVerified`: Boolean (0 or 1)
   - `classId`: Class ID for fetching sessions
   - `courseId`: Course ID for fetching sessions

3. **Authentication:**
   - Use the "login" request first to get a JWT token
   - The token will be needed for all other requests
   - Default test credentials:
     ```json
     {
       "email": "2602078146",
       "password": "passwordmahasiswa"
     }
     ```

4. **Available Endpoints:**
   - `POST /api/login` - Authentication
   - `POST /api/logout` - End session
   - `GET /api/me` - Get current user info
   - `PUT /api/sessions/{id}` - Update session details
   - `PUT /api/presence/{id}/location` - Update presence location
   - `PUT /api/presence/{id}/face` - Update face verification
   - `PUT /api/presence/{id}/verified` - Update verification status
   - `GET /api/sessions/class/{classId}` - Get sessions by class
   - `GET /api/my-classes` - Get enrolled classes
   - `GET /api/courses/{courseId}/sessions` - Get sessions by course

---