# 🛠 Dev Progress Log – [Project Name - "simple-blog system"]

_A day-by-day journal of what I did, what I struggled with, and what I learned._

---

## 📅 Day 1 – [June 18,2025 / Task ] [Time started: I think it's 9 pm]
### ✅ What I Did
- Set up local environment
- Created basic file structure
- created database named "todo-api" - I forgot the "_db"
- I pasted code from chatgpt to my files
- run the project using http://localhost/todo-api/create.php
- it says "{"error":"Title is required"}"
- oops..
- I need to test it to an API client
- I will test it in insomnia since that's the only API client I know how to use.
- I learned it during OJT
- okay let's get back
- I tested it using this request "http://localhost/todo-api/create.php" "post method"
- it returned me this:
    - 400 Bad Request
    - {
	"error": "Title is required"
      }
- okay, what should I do?
- it says title is required, but I don't know how to insert a title.
- I'll figure it out. I'll be back...
- ...
- I have figured it out.
- it turns out I need to set the content type to json, and I need to be in the body tab.
- and I need to enter this:
- {
  "title": "Buy groceries"
}
- I'll now try the get method.
- It's working, I didn't encounter any problem.
- next, the update method.
- it's working in insomnia, but the database is not updating.
- it's updating in the database pala, but not the "completed" row.
- it's all working pala. I'm putting a string when it's supposed to be an integer. hehe
- hirap pag nangangapa pa. 
- next, delete feature.
- 
- dfdf
- 
- 

### ❌ Struggles
- [Describe the problem]
  → Cause: [What caused it]
  → Fix: [How you solved it]

### 🧠 Learnings
- [What you learned today]
- [Any tips to remember]

---

## 📅 Day 2 – [Date]
### ✅ What I Did
- 
### ❌ Struggles
- 
### 🧠 Learnings
- 

---

## 📅 Day 3 – [Date]
### ✅ What I Did
- 
### ❌ Struggles
- 
### 🧠 Learnings
- 

---

## 📅 Day X – [Date]
_Repeat as needed..._

