import dotenv from "dotenv";
dotenv.config();

export const env = {
  LARAVEL_API_URL: process.env.LARAVEL_API_URL || "http://127.0.0.1:8000/api",
  OPENAI_API_KEY: process.env.OPENAI_API_KEY || "mock-key",
  NODE_ENV: process.env.NODE_ENV || "development"
};
