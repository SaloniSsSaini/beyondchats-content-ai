import { logger } from "../utils/logger.js";

/**
 * NOTE:
 * Real Google scraping is intentionally avoided.
 * Mocked response simulates SerpAPI / Google Search.
 */

export async function searchRelatedArticles(title) {
  logger.info(`Searching Google for: ${title}`);

  return [
    "https://example.com/blog/ai-customer-support",
    "https://anotherblog.com/article/ai-chatbots"
  ];
}
