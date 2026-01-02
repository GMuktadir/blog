# Blog Management System
(Laravel REST API + Vue.js with Vite)
Tech Stack
·     Laravel (API based)
·     Vue.js 3 with Vite
·     Axios
·     Vue Router
·     MySQL
·      Auth: JWT / Sanctum
Functional Requirements
Authentication
·     User Registration & Login
·     Forget & Reset Password
·     Unique username
·     Profile picture upload (default image if not uploaded)
·     Guest users can only view public posts
Post Management
·     Authenticated users can create, edit, and delete their own posts
·     Post fields: title, content, image (optional)
·     Post visibility: Public / Private
·      Posts must be sorted by latest first
Tags, Comment & Interaction
·     Multiple tags per post
·     Comment on public posts
·     Reply to comments (nested)
·     Like / Unlike posts
·     Bookmark posts for later
Vue.js Requirements
·     Conditional rendering using v-if, v-show
·     List rendering using v-for
·     Two-way data binding using v-model
·     Use of computed properties
·     Use of watchers and lifecycle hooks   
·     Navigation using Vue Router
·     API communication using Axios with proper error handling
 
Database Tables
·     users
·     posts
·     tags
·     post_tag
·     comments
·     likes
·     bookmarks
