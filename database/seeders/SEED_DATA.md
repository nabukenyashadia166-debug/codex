# Sample database records (Branch 2: `feature/seeders`)

This branch supplies deterministic seeders for the Student Management System. It deliberately does not add migrations or Eloquent models because those belong to `feature/database-relationships`.

## Seeded data

- 1 administrator account
- 1 lecturer account
- 5 student accounts and 5 student profiles
- 4 sample courses
- 10 course registrations (2 per student)
- Roles are assigned through a `role` column when present and through Spatie's `roles` / `model_has_roles` tables when those are installed by the authentication branch.

## Run

After the database/migrations and authentication branches have been merged and their migrations are available:

```bash
php artisan migrate:fresh --seed
```

Or, without dropping existing tables:

```bash
php artisan db:seed
```

## Demo accounts

All sample accounts use the password `Password@123`.

| Role | Email |
|---|---|
| Admin | `admin@studentms.test` |
| Lecturer | `grace.lecturer@studentms.test` |
| Student | `james.wamutu@studentms.test` |
| Student | `sarah.namusoke@studentms.test` |
| Student | `daniel.kato@studentms.test` |
| Student | `ruth.akello@studentms.test` |
| Student | `peter.okello@studentms.test` |

Seeders use stable email, student-number, course-code and student/course identities so running them more than once does not create duplicate sample records.

## Integration expectations

The database branch should provide `users`, `students`, `courses`, and either `course_registrations` or `registrations` tables. Expected relationship keys are `students.user_id`, and registration `student_id` / `course_id`. Student/course descriptive columns are selected from common names (`student_number` or `registration_number`; `course_code` or `code`) to ease integration with the team's schema.
