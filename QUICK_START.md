# EA3140 Project - Quick Start Guide

## 🚀 Quick Setup (5 Minutes)

### Step 1: Import Database

**✅ YOUR DATABASE IS ALREADY IMPORTED!**

The automated script has already created the database with all tables. However, if you need to re-import or do it manually, you have three options:

#### Option A: Single File Import (Easiest) ⭐
Use the complete SQL file that includes everything:

**Using phpMyAdmin:**
1. Open phpMyAdmin: `http://localhost/phpmyadmin`
2. Click "Import" tab
3. Choose file: `ea3140_complete.sql`
4. Click "Go"
5. Done! ✅

**Using MySQL Command Line:**
```bash
mysql -u root -p < ea3140_complete.sql
```

#### Option B: Two-File Import (As per exam instructions)
If you want to follow the exam instructions exactly:

**Using phpMyAdmin:**
1. Create database `ea3140` manually
2. Click on `ea3140` database to select it
3. Import `ea3140.sql` (creates users, user_type tables)
4. Stay in `ea3140` database
5. Go to SQL tab and run:

```sql
CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_code` varchar(20) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `credits` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `name_with_initials` varchar(200) NOT NULL,
  `nic` varchar(20) NOT NULL,
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `student_courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `student_id` (`student_id`),
  KEY `course_id` (`course_id`),
  FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE,
  FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

**Using MySQL Command Line:**
```bash
mysql -u root -p
```
Then:
```sql
CREATE DATABASE IF NOT EXISTS ea3140;
USE ea3140;
SOURCE ea3140.sql;
-- Then paste the CREATE TABLE commands above
EXIT;
```

#### Option C: Already Done ✅
**The database was already imported successfully by the automated script!**

Verify by checking:
```bash
php spark db:table users
```

### Step 2: Verify Database Configuration
Check `app/Config/Database.php`:
- Database name should be: `ea3140`
- Username: `root`
- Password: `` (empty) - Update if your MySQL has a password

### Step 3: Start the Application
```bash
php spark serve
```
Or configure your web server to point to the project directory.

### Step 4: Access the Application
Open browser: `http://localhost:8080/`

## 🧪 Testing Checklist

### ✅ Test 1: Login (5 marks)
1. Navigate to: `http://localhost:8080/login`
2. Enter credentials:
   - Email: `ajith@gmail.com`
   - Password: `123456`
3. Click Login
4. **Expected:** Redirect to dashboard

### ✅ Test 2: Create New User (5 marks)
1. Navigate to: Users → New User
2. Fill in your details:
   - First Name: Your first name
   - Last Name: Your last name
   - Email: Your email
   - NIC: Your NIC
   - Username: Your email
   - Password: Your password
   - User Type: Administrator (90)
   - Status: Active (1)
3. Click "Add User"
4. **Expected:** Alert "User created successfully"

### ✅ Test 3: Create Students (5 marks)
1. Navigate to: Students → New Student
2. Add multiple students with these details:

**Student 1:**
- Registration Number: `2021/EAT/001`
- First Name: `John`
- Last Name: `Silva`
- Name with Initials: `J.A. Silva`
- NIC: `199812345678`

**Student 2:**
- Registration Number: `2021/EAT/002`
- First Name: `Mary`
- Last Name: `Fernando`
- Name with Initials: `M.P. Fernando`
- NIC: `199923456789`

3. **Expected:** Alert "Student created successfully" for each

### ✅ Test 4: View Students (5 marks)
1. Navigate to: Students → View Students
2. **Expected:** Table showing all students with columns:
   - Student ID
   - Registration Number
   - First Name
   - Last Name
   - Name with Initials
   - NIC
3. **DataTables features should work:** Search, sort, pagination

### ✅ Test 5: Create Courses (5 marks)
1. Navigate to: Courses → New Course
2. Add multiple courses:

**Course 1:**
- Course Code: `EA3140`
- Course Title: `Web Application Development II`
- Credits: `3`

**Course 2:**
- Course Code: `EA3120`
- Course Title: `Mobile Application Development`
- Credits: `3`

**Course 3:**
- Course Code: `EA3110`
- Course Title: `Database Management Systems`
- Credits: `4`

3. **Expected:** Alert "Course created successfully" for each

### ✅ Test 6: View Courses (5 marks)
1. Navigate to: Courses → View Courses
2. **Expected:** Table showing all courses with columns:
   - Course ID
   - Course Code
   - Course Title
   - Credits
3. **DataTables features should work**

### ✅ Test 7: Assign Courses to Students (10 marks)
1. Navigate to: Courses → Student Courses
2. Scroll down to "Assign Course to Student" form
3. Test multiple assignments:
   - Student: `2021/EAT/001 - J.A. Silva` → Course: `EA3140 - Web Application Development II`
   - Student: `2021/EAT/001 - J.A. Silva` → Course: `EA3120 - Mobile Application Development`
   - Student: `2021/EAT/002 - M.P. Fernando` → Course: `EA3140 - Web Application Development II`
4. **Expected:** Alert "Student course assigned successfully" for each

### ✅ Test 8: View Student Courses (20 marks)
1. Navigate to: Courses → Student Courses
2. **Expected:** Table at top showing all assignments with columns:
   - Reg. No.
   - Student Name (Name with Initials)
   - Course Code
   - Course Title
3. **Verify JOIN query:** Data should combine from students, courses, and student_courses tables
4. **DataTables features should work**

## 📋 All URLs to Test

| Module | Action | URL | Method |
|--------|--------|-----|--------|
| Login | Login Page | `/login` | GET/POST |
| Dashboard | View | `/dashboard` | GET |
| Users | View All | `/users/view_users` | GET |
| Users | Create | `/users/create_users` | GET/POST |
| Students | View All | `/students/view_students` | GET |
| Students | Create | `/students/create_student` | GET/POST |
| Courses | View All | `/courses/view_courses` | GET |
| Courses | Create | `/courses/create_course` | GET |
| Courses | Assignments | `/courses/student_courses` | GET/POST |

## 🔍 Verification Points

### Query Builder Verification
Check these files to verify query builder usage:
- `app/Models/StudentsModel.php`
- `app/Models/CoursesModel.php`

Look for patterns like:
```php
$builder = $this->db->table('table_name');
$builder->insert($data);
$builder->join('other_table', 'condition');
```

### Template Verification
All views should have this structure:
```php
return view('layout/header')
    .view('module/page', $data)
    .view('layout/footer');
```

### Foreign Key Verification
Check `student_courses` table has proper foreign keys:
```sql
SHOW CREATE TABLE student_courses;
```

## 🐛 Troubleshooting

### Issue: "Database connection failed"
**Solution:** Check `app/Config/Database.php` and ensure MySQL is running

### Issue: "404 Not Found"
**Solution:** 
- Check `.htaccess` exists in root
- Enable mod_rewrite in Apache
- Or use `php spark serve`

### Issue: "Foreign key constraint fails"
**Solution:** Ensure students and courses tables are created before student_courses

### Issue: "Class not found"
**Solution:** Clear cache: `php spark cache:clear`

## ✅ Success Criteria

Your implementation is correct if:
1. ✅ All URLs work as specified
2. ✅ All forms submit and save data
3. ✅ All tables display data correctly
4. ✅ Query builder is used (not automatic models)
5. ✅ Template is applied to all pages
6. ✅ DataTables work on all listing pages
7. ✅ Foreign keys work in student_courses table
8. ✅ JOIN query displays combined data correctly

## 📊 Marks Distribution Summary

- **Questions 3-4:** Database & Login (10 marks) ✅
- **Question 5:** Create User (5 marks) ✅
- **Question 6:** Tables (15 marks) ✅
- **Question 7:** Students Module (15 marks) ✅
- **Question 8:** Courses Module (55 marks) ✅

**Total: 100 marks** ✅

---

**Good luck with your examination! 🎓**
