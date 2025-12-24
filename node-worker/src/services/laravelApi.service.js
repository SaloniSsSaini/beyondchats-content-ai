import axios from "axios";
import { env } from "../config/env.js";
import { logger } from "../utils/logger.js";

export async function getLatestArticle() {
  const res = await axios.get(`${env.LARAVEL_API_URL}/articles`);
  return res.data.data[0]; // latest article
}

export async function saveUpdatedArticle(payload) {
  await axios.post(`${env.LARAVEL_API_URL}/articles`, payload);
  logger.success("Updated article saved to Laravel");
}
