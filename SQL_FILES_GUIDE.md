# 📊 SQL Files Guide - Which File to Use?

## Available SQL Files in Your Project

You have **2 SQL files** in your project. Here's when to use each:

---

## 1️⃣ `ea3140.sql` (2.3 KB)
**Original file provided with the project**

### Contains:
- ✅ `users` table (with 1 default user)
- ✅ `user_type` table (with 2 admin types)

### Does NOT contain:
- ❌ `CREATE DATABASE` statement
- ❌ `USE ea3140;` statement
- ❌ `courses` table
- ❌ `students` table
- ❌ `student_courses` table

### When to use:
- ✅ When following exam instructions **exactly** (Question 3 & 6)
- ✅ When you want to import tables separately
- ⚠️ **Must manually select database first** to avoid "No database selected" error

### How to import:

**phpMyAdmin:**
```
1. Create database "ea3140" manually
2. Click on database to SELECT it
3. Import ea3140.sql
4. Then manually create the other 3 tables via SQL tab
```

**MySQL Command Line:**
```sql
CREATE DATABASE ea3140;
USE ea3140;  -- IMPORTANT: Must select database first!
SOURCE ea3140.sql;
-- Then create courses, students, student_courses tables
```

---

## 2️⃣ `ea3140_complete.sql` (4.0 KB) ⭐ RECOMMENDED
**Complete file with everything included**

### Contains:
- ✅ `CREATE DATABASE IF NOT EXISTS ea3140`
- ✅ `USE ea3140;`
- ✅ `users` table (with default user)
- ✅ `user_type` table
- ✅ `courses` table
- ✅ `students` table
- ✅ `student_courses` table (with foreign keys)

### When to use:
- ✅ Quick single-file import
- ✅ No "database not selected" errors
- ✅ Fresh installation
- ✅ Sharing project with others
- ✅ Re-importing after mistakes

### How to import:

**phpMyAdmin:**
```
1. Click "Import" tab
2. Select ea3140_complete.sql
3. Click "Go"
4. Done! ✅
```

**MySQL Command Line:**
```bash
mysql -u root -p < ea3140_complete.sql
```

**MySQL Workbench:**
```
1. Server → Data Import
2. Import from Self-Contained File
3. Select ea3140_complete.sql
4. Start Import
```

---

## 📋 Quick Comparison

| Feature | ea3140.sql | ea3140_complete.sql |
|---------|------------|---------------------|
| Creates database | ❌ No | ✅ Yes |
| Selects database | ❌ No | ✅ Yes |
| Base tables (users, user_type) | ✅ Yes | ✅ Yes |
| Additional tables (courses, students, student_courses) | ❌ No | ✅ Yes |
| Foreign keys | ❌ No | ✅ Yes |
| Single-step import | ❌ No | ✅ Yes |
| Error-free import | ⚠️ Manual setup needed | ✅ Yes |
| File size | 2.3 KB | 4.0 KB |
| **Recommended for** | Following exam steps exactly | Quick setup & testing |

---

## 🎯 For Your Examination

### Scenario A: Following Exam Instructions Exactly
**Use: `ea3140.sql` + Manual SQL commands**

This demonstrates you understand the two-step process:
1. Import base tables (Question 3)
2. Create additional tables (Question 6)

### Scenario B: Quick Testing & Development  
**Use: `ea3140_complete.sql`**

This is faster and avoids errors during testing.

---

## ✅ Current Status

**YOUR DATABASE IS ALREADY SET UP!** 

The automated import script has already created the database with all 5 tables. You don't need to import anything unless you want to:
- Reset the database
- Start fresh
- Fix errors

---

## 🔍 How to Verify Current Database

Check what's in your database:

```bash
php spark db:table users
```

Or check via MySQL:
```sql
USE ea3140;
SHOW TABLES;
```

Expected output:
```
+------------------+
| Tables_in_ea3140 |
+------------------+
| courses          |
| student_courses  |
| students         |
| user_type        |
| users            |
+------------------+
5 rows in set
```

---

## 🛠️ Troubleshooting

### Error: "No database selected"
**Problem:** Using `ea3140.sql` without selecting database first  
**Solution:** Either:
- Use `ea3140_complete.sql` instead, OR
- Run `USE ea3140;` before importing `ea3140.sql`

### Error: "Can't create table 'student_courses'"
**Problem:** Foreign key references tables that don't exist  
**Solution:** Create `students` and `courses` tables BEFORE `student_courses`

### Error: "Database already exists"
**Problem:** Trying to create database that exists  
**Solution:** Either:
- Drop database first: `DROP DATABASE ea3140;`
- Use `CREATE DATABASE IF NOT EXISTS ea3140;`

---

## 📝 Summary

**For Exam Submission:**
- Keep both files to show you understand the requirements
- Document that you used the two-step process as instructed

**For Your Reference:**
- `ea3140.sql` = Original (base tables only)
- `ea3140_complete.sql` = Complete (all tables, ready to use)

**Currently:**
- ✅ Database is already imported and working
- ✅ Server is running on http://localhost:8080
- ✅ Login with: ajith@gmail.com / 123456

---

**You're ready to start testing! 🎓**
