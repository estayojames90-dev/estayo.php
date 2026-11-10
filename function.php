<?php
// Helper functions for processing and displaying product records

function e($value) {
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}

function formatText($value) {
    return ucwords(strtolower(trim((string)$value)));
}

function formatPrice($price) {
    return "₱" . number_format((float)$price, 2);
}

function countProducts($products) {
    return count($products);
}

function stockClass($stock) {
    $qty = (int)$stock;
    if ($qty <= 12) {
        return "low";
    }
    if ($qty <= 20) {
        return "medium";
    }
    return "high";
}

function displayProducts($products) {
    if (empty($products)) {
        echo "<div class=\"empty\">No products found.</div>";
        return;
    }
    foreach ($products as $product) {
        $image = isset($product["image"]) ? trim((string)$product["image"]) : "";
        $name = formatText($product["name"]);
        $category = formatText($product["category"]);
        echo "<article class=\"card\">";
        echo "<div class=\"card-image\">";
        if ($image !== "") {
            echo "<img src=\"" . e($image) . "\" alt=\"" . e($name) . "\">";
        } else {
            echo "<span class=\"no-image\">No image</span>";
        }
        echo "</div>";
        echo "<div class=\"card-body\">";
        echo "<span class=\"badge-id\">#" . e($product["id"]) . "</span>";
        echo "<h2 class=\"card-title\">" . e($name) . "</h2>";
        echo "<p class=\"card-category\">" . e($category) . "</p>";
        echo "<div class=\"card-meta\">";
        echo "<span class=\"price\">" . e(formatPrice($product["price"])) . "</span>";
        echo "<span class=\"stock " . e(stockClass($product["stock"])) . "\">Stock: " . e($product["stock"]) . "</span>";
        echo "</div>";
        echo "</div>";
        echo "</article>";
    }
}
?>
