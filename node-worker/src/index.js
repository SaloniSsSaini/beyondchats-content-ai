import { getLatestArticle, saveUpdatedArticle } from "./services/laravelApi.service.js";
import { searchRelatedArticles } from "./services/googleSearch.service.js";
import { scrapeArticleContent } from "./services/scraper.service.js";
import { rewriteArticle } from "./services/llm.service.js";
import { logger } from "./utils/logger.js";

async function run() {
  logger.info("Node Worker Started");

  const article = await getLatestArticle();
  if (!article) {
    logger.error("No article found");
    return;
  }

  const links = await searchRelatedArticles(article.title);

  const contents = [];
  for (const link of links) {
    const text = await scrapeArticleContent(link);
    if (text) contents.push(text);
  }

  const updatedContent = await rewriteArticle(article.content, links);

  await saveUpdatedArticle({
    title: article.title,
    content: updatedContent,
    version: "updated",
    parent_article_id: article.id
  });

  logger.success("Node worker finished successfully");
}

run();
