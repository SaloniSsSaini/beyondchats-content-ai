📘 BeyondChats Content AI System

An end-to-end content enrichment system built as part of the BeyondChats technical assignment.
The project demonstrates backend API development, frontend consumption, and a NodeJS-based automation pipeline designed to enhance blog content using external sources and LLMs.

🔗 Live Links

Backend (Local): http://127.0.0.1:8000

Articles API: http://127.0.0.1:8000/api/articles

Frontend (Local): http://localhost:5173


🧠 Project Overview

This system consists of three main components:

Laravel Backend

Stores articles in a database

Exposes CRUD APIs

Serves as the single source of truth

NodeJS Worker

Fetches the latest article from backend

Searches related articles on the web

Scrapes external content

Rewrites content using an LLM (pluggable)

Publishes updated articles back to backend

React Frontend

Fetches articles from backend APIs

Displays original and updated articles

Clean, responsive UI using Vite + React

🏗️ Architecture Diagram (High Level)
React Frontend
      |
      v
Laravel API  <------  NodeJS Worker
      |                 |
      v                 v
   Database        Google Search
                     + LLM

🧩 Tech Stack
Backend

Laravel 12

PHP 8+

SQLite

REST APIs

Frontend

React 18

Vite

JavaScript (ES6)

Node Worker

NodeJS 18+

Axios

Cheerio

dotenv

Modular service-based architecture

📂 Project Structure
beyondchats-content-ai/
│
├── backend/        # Laravel Backend
├── frontend/       # React Frontend (Vite)
├── node-worker/    # NodeJS Automation Worker
├── docs/           # Architecture & documentation
└── README.md

⚙️ Backend Setup (Laravel)
cd backend
composer install
php artisan key:generate
php artisan migrate:fresh
php artisan serve


Backend runs on:

http://127.0.0.1:8000

⚙️ Frontend Setup (React)
cd frontend
npm install
npm run dev


Frontend runs on:

http://localhost:5173

⚙️ Node Worker Setup
cd node-worker
npm install
npm start

Expected Output
Node Worker Started
No article found


This indicates the worker is running correctly.
External APIs (Google Search / LLM) are modular and can be enabled via environment variables.

🔌 API Endpoints
Get Articles
GET /api/articles

Create Article
POST /api/articles

{
  "title": "Sample Article",
  "content": "This is a sample article",
  "version": "original"
}

🧪 Handling External APIs

Google Search

Web Scraping

LLM (OpenAI / others)

These integrations are intentionally modular and can be enabled using API keys.
For this assignment, the focus was on system design, data flow, and orchestration rather than API quotas.

✅ Assignment Requirements Mapping
Requirement	Status
Scrape BeyondChats blogs	✅ Architecture provided
Store in DB	✅ Done
Laravel CRUD APIs	✅ Done
NodeJS automation	✅ Done
LLM-based rewrite	✅ Modular
React frontend	✅ Done
Partial completion	✅ Accepted
🧠 Design Decisions

SQLite used for quick local setup

Laravel APIs exposed via web routes for simplicity (Laravel 12 routing changes)

Node Worker built with service-based architecture for extensibility

Frontend kept simple to focus on functionality over styling

🚀 Future Enhancements

Enable real Google Search API

Enable real LLM (OpenAI / Anthropic)

Add article comparison view

Add authentication

Deploy backend to cloud (Railway / Render)

📝 Notes

Partial completion is intentional as per assignment instructions

Emphasis was placed on engineering judgment, debugging, and architecture

Code is written to be extendable and production-friendly

👩‍💻 Author

Saloni Saini
GitHub: https://github.com/SaloniSsSaini
Github Repo:https://github.com/SaloniSsSaini/beyondchats-content-ai.git
LinkedIn: https://www.linkedin.com/in/saloni-saini-aa7133252/
