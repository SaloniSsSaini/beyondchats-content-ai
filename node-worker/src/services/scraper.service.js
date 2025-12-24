import axios from "axios";
import cheerio from "cheerio";
import { logger } from "../utils/logger.js";

export async function scrapeArticleContent(url) {
  logger.info(`Scraping article: ${url}`);

  try {
    const { data } = await axios.get(url, { timeout: 10000 });
    const $ = cheerio.load(data);

    const text = $("article").text() || $("body").text();
    return text.substring(0, 3000); // limit content
  } catch (err) {
    logger.error(`Failed to scrape ${url}`);
    return "";
  }
}
