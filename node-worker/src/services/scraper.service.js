import fetch from "node-fetch";
import * as cheerio from "cheerio";

export async function scrapeArticleContent(url) {
  try {
    const res = await fetch(url);
    const html = await res.text();

    const $ = cheerio.load(html);
    const text = $("p")
      .map((_, el) => $(el).text())
      .get()
      .join(" ");

    return text.slice(0, 3000); // limit content
  } catch (error) {
    console.error("Scraping failed:", error.message);
    return null;
  }
}
