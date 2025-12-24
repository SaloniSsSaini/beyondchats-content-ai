import { logger } from "../utils/logger.js";

/**
 * NOTE:
 * LLM call mocked for assignment safety.
 * Replace with OpenAI/Gemini easily.
 */

export async function rewriteArticle(original, references) {
  logger.info("Calling LLM to rewrite article");

  return `
${original}

--- Improved Version ---

This article has been enhanced using AI by analyzing high-ranking
reference articles and improving structure, clarity, and tone.

References:
${references.join("\n")}
`;
}
