# Data Flow – BeyondChats Content AI

This document explains the end-to-end data flow of the system.

## High-Level Flow

1. Laravel backend scrapes BeyondChats blog articles
2. Articles are stored as original versions in the database
3. NodeJS worker fetches the latest article from Laravel APIs
4. Worker searches Google for related high-ranking articles
5. Reference articles are scraped
6. LLM rewrites the original article
7. Updated article is stored as a new version
8. React frontend displays both versions

## Design Notes
- AI processing is designed as an async task
- External scraping is intentionally simplified
- Versioning ensures original content is preserved
