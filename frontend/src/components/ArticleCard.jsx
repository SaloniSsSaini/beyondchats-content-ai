import { Link } from "react-router-dom";
import VersionBadge from "./VersionBadge";

export default function ArticleCard({ article }) {
  return (
    <div className="border rounded p-4 shadow-sm hover:shadow-md">
      <div className="flex justify-between items-center mb-2">
        <h2 className="font-semibold">{article.title}</h2>
        <VersionBadge version={article.version} />
      </div>

      <p className="text-sm text-gray-600 line-clamp-2">
        {article.content.substring(0, 120)}...
      </p>

      <Link
        to={`/article/${article.id}`}
        className="text-blue-600 text-sm mt-2 inline-block"
      >
        Read more →
      </Link>
    </div>
  );
}
