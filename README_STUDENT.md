# EA3140 - Web Application Development II
## University of Colombo - Semester VI, 2025

---

## 📋 Project Status

✅ **COMPLETE AND READY FOR USE**

Your database has been imported and the application is running on:
**http://localhost:8080**

---

## 🔐 Login Credentials

- **Email:** `ajith@gmail.com`
- **Password:** `123456`

---

## 📁 Available SQL Files

Your project includes three SQL files for different scenarios:

### 1. `ea3140.sql` (Original)
- Contains: `users` and `user_type` tables only
- **Note:** Does NOT include `CREATE DATABASE` or `USE` statement
- **For manual import:** You must create/select database first

### 2. `ea3140_complete.sql` (Recommended) ⭐
- Contains: ALL tables (users, user_type, courses, students, student_courses)
- **Includes:** `CREATE DATABASE` and `USE` statements
- **Best for:** Single-file import, no errors
- **Use this if:** You need to reimport or share the project

### 3. Automated Script (Already Used) ✅
- Your database was imported using the automated PHP script
- All 5 tables are already created
- No action needed!

---

## 📊 Database Structure

```
ea3140 (Database)
├── users              ✅ (1 record: Ajith Perera)
├── user_type          ✅ (2 records: Admin types)
├── courses            ✅ (Empty - ready for testing)
├── students           ✅ (Empty - ready for testing)
└── student_courses    ✅ (Empty - ready for testing)
    ├── FK → students.student_id
    └── FK → courses.course_id
```

---

## 🎯 Question Completion Checklist

| # | Question | Marks | Status | URL |
|---|----------|-------|--------|-----|
| 3 | Database Upload | 5 | ✅ Done | - |
| 4 | Login to System | 5 | ✅ Done | `/login` |
| 5 | Create New User | 5 | ✅ Done | `/users/create_users` |
| 6 | Create Tables | 15 | ✅ Done | - |
| 7a | Student Form | 5 | ✅ Done | `/students/create_student` |
| 7b | Insert Student | 5 | ✅ Done | (POST to above) |
| 7c | View Students | 5 | ✅ Done | `/students/view_students` |
| 8a | Course Form | 5 | ✅ Done | `/courses/create_course` |
| 8b | Insert Course | 5 | ✅ Done | (POST to above) |
| 8c | View Courses | 5 | ✅ Done | `/courses/view_courses` |
| 8d | Assign Form | 10 | ✅ Done | `/courses/student_courses` |
| 8e | Insert Assignment | 10 | ✅ Done | (POST to above) |
| 8f | View Assignments | 20 | ✅ Done | `/courses/student_courses` |
| **TOTAL** | | **100** | **✅** | |

---

## 🧪 Testing Steps

Follow these steps to verify all functionality:

### 1. Login (5 marks)
```
URL: http://localhost:8080/login
Email: ajith@gmail.com
Password: 123456
Expected: Redirect to dashboard
```

### 2. Create User (5 marks)
```
URL: http://localhost:8080/users/create_users
Fill in: Your personal details
Expected: Alert "User created successfully"
```

### 3. Create Students (5 marks)
```
URL: http://localhost:8080/students/create_student
Add 2-3 test students
Expected: Alert "Student created successfully"
```

### 4. View Students (5 marks)
```
URL: http://localhost:8080/students/view_students
Expected: Table with all students, DataTables working
```

### 5. Create Courses (5 marks)
```
URL: http://localhost:8080/courses/create_course
Add 3-4 test courses
Expected: Alert "Course created successfully"
```

### 6. View Courses (5 marks)
```
URL: http://localhost:8080/courses/view_courses
Expected: Table with all courses, DataTables working
```

### 7. Assign Courses (10 marks)
```
URL: http://localhost:8080/courses/student_courses
Select student and course from dropdowns
Expected: Alert "Student course assigned successfully"
```

### 8. View Assignments (20 marks)
```
URL: http://localhost:8080/courses/student_courses
Expected: Table showing Reg.No, Name, Course Code, Course Title
Verify: Data comes from JOIN of 3 tables
```

---

## 🔧 Technical Requirements Verification

### ✅ Query Builder (NOT Automatic Models)
All models use manual query builder:
```php
// app/Models/StudentsModel.php
$builder = $this->db->table('students');
$builder->insert($data);
$builder->get();

// app/Models/CoursesModel.php  
$builder->join('students', 'students.student_id = student_courses.student_id');
```

### ✅ Template Integration
All pages use header/footer:
```php
return view('layout/header')
    .view('students/students', $data)
    .view('layout/footer');
```

### ✅ Routes Configuration
All routes in `app/Config/Routes.php`:
- GET and POST for forms
- Authentication filter applied
- Clean URLs

### ✅ Foreign Keys
`student_courses` table has proper foreign keys with CASCADE delete.

---

## 📚 Documentation Files

- **QUICK_START.md** - Detailed step-by-step testing guide with sample data
- **README_STUDENT.md** - This file (overview and checklist)

---

## 🛠️ Common Issues & Solutions

### Issue: "No database selected" error
**Solution:** Use `ea3140_complete.sql` file which includes `USE ea3140;`

### Issue: Can't access the application
**Solution:** Server should be running. If not:
```bash
php spark serve
```

### Issue: Foreign key constraint fails
**Solution:** Make sure to create students/courses before assigning them

### Issue: Routes not working
**Solution:** Check `.htaccess` exists or use `php spark serve`

---

## 📦 Project Files Summary

### New Files Created:
- ✅ `app/Models/StudentsModel.php`
- ✅ `app/Models/CoursesModel.php`
- ✅ `app/Controllers/Students.php`
- ✅ `ea3140_complete.sql`

### Modified Files:
- ✅ `app/Controllers/Courses.php`
- ✅ `app/Views/students/student_create.php`
- ✅ `app/Views/students/students.php`
- ✅ `app/Views/courses/course_create.php`
- ✅ `app/Views/courses/courses.php`
- ✅ `app/Views/courses/student_courses.php`
- ✅ `app/Config/Routes.php`

---

## ✅ Ready for Submission

Your project is complete with:
- ✅ All database tables created
- ✅ All controllers implemented
- ✅ All views created
- ✅ All routes configured
- ✅ Query builder used (not automatic models)
- ✅ Template integration on all pages
- ✅ Foreign keys properly implemented
- ✅ JOIN queries for student_courses
- ✅ Authentication working
- ✅ All 100 marks requirements met

---

## 🎓 Good Luck!

Your EA3140 project is ready for evaluation. All requirements have been implemented according to the examination paper.

**Server:** http://localhost:8080
**Login:** ajith@gmail.com / 123456

---

*If you need to restart or reimport the database, use `ea3140_complete.sql` for a clean import.*
