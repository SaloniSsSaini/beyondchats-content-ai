import React, { useEffect, useState } from "react";
import { fetchArticles } from "../api/articles.api";

export default function ArticleList() {
  const [articles, setArticles] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    fetchArticles()
      .then((res) => {
        setArticles(res.data || []);
        setLoading(false);
      })
      .catch((err) => {
        setError(err.message);
        setLoading(false);
      });
  }, []);

  if (loading) return <p>Loading articles...</p>;
  if (error) return <p>Error: {error}</p>;

  return (
    <div>
      <h2>Articles</h2>

      {articles.length === 0 && <p>No articles found.</p>}

      {articles.map((article) => (
        <div
          key={article.id}
          style={{
            border: "1px solid #ddd",
            padding: "12px",
            marginBottom: "10px",
            borderRadius: "6px",
          }}
        >
          <h3>{article.title}</h3>
          <p style={{ color: "#555" }}>
            Version: <b>{article.version}</b>
          </p>
          <p>{article.content.slice(0, 120)}...</p>
        </div>
      ))}
    </div>
  );
}
